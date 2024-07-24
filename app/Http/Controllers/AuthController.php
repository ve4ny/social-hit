<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use App\Http\Requests\RegistrationRequest;
use App\Http\Requests\RemindRequest;
use App\Http\Requests\ResetPasswordRequest;
use App\Models\EmailConfirmation;
use App\Models\EmailRemind;
use App\Models\User;
use App\Services\UserService;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Contracts\View\View;

class AuthController extends Controller
{
    private UserService $userService;

    public function __construct()
    {
        $this->userService = new UserService();
    }

    /**
     * @param RegistrationRequest $request
     * @param UserService $userService
     * @return JsonResponse
     */
    public function register(RegistrationRequest $request, UserService $userService): JsonResponse
    {
        try {
            $user = $userService->create($request->validated());
            return response()->json(['message' => 'На адрес ' . $request->email . ' отправлено письмо с подтверждением.
            Пожалуйста, перейдите по ссылке из письма, чтобы завершить регистрацию'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => $e], 400);
        }
    }

    public function registerWithReferral(string $code): View
    {
        return view('referral-register', compact('code'));
    }

    /**
     * Подтверждение email
     *
     * @param string $token
     * @return JsonResponse|RedirectResponse
     * @throws Exception
     */
    public function verifyEmail(string $token): JsonResponse|RedirectResponse
    {
        $emailConfirmation = EmailConfirmation::where('token', $token)->first();
        if (!$emailConfirmation) {
            return response()->json(['message' => 'Неверный токен'], 404);
        }

        $user = User::find($emailConfirmation->user_id);
        $user->email_verified_at = now();
        $user->save();

        $emailConfirmation->delete();

        try {
            Auth::login($user);
            return redirect('/');
        } catch (Exception $e) {
            return redirect('/', ['message' => 'Верификация закончилась с ошибкой. Пожалуйста, попробуйте ещё раз']);
        }
    }

    /**
     * @param AuthRequest $request
     * @return JsonResponse
     */
    public function login(AuthRequest $request): JsonResponse
    {
        try {
            $validatedData = [
                'email' => trim($request->email),
                'password' => trim($request->password),
            ];

            $validatedData['email'] = str_replace(' ', '', $validatedData['email']);

            if (User::where('email', $validatedData['email'])->first() == null) {
                return response()->json(['errors' => ['email' => ['Пользователь с таким email не найден']]], 404);
            } else if (User::where('email', $validatedData['email'])->first()->email_verified_at == null) {
                return response()->json(['errors' => ['email' => ['Email не подтвержден. Перейдите по ссылке из письма, отправленного на email, который вы указали при регистрации. ']]], 404);
            }

            if (Auth::attempt($validatedData, $request->remember)) {
                $user = User::find(auth()->user()->id);
                $user->last_login = new Carbon('now');
                $user->save();
                if(!$user->balance) {
                    $this->userService->createBalance($user);
                }
                if(!$user->refBalance) {
                    $this->userService->createRefBalance($user);
                }
                return response()->json(['message' => 'Authentication success'], 200);
            } else {
                return response()->json(['errors'  => ['password' => ['Неверный пароль']]], 404);
            }
        } catch (ValidationException $e) {
            $errors = $e->errors();
            return response()->json(['message' => $errors], 400);
        }
    }

    /**
     * Выход пользователя
     *
     * @return RedirectResponse
     */
    public function logout(): RedirectResponse
    {
        Auth::logout();
        return redirect('/');
    }

    public function remind(RemindRequest $request, UserService $userService)
    {
        try {
            $validatedData = trim($request->email);
            $user = $userService->remind($validatedData);
            return response()->json(['message' => 'На адрес ' . $request->email . ' отправлено письмо с подтверждением.
            Пожалуйста, перейдите по ссылке из письма, чтобы сбросить пароль'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => $e], 400);
        }
    }


    public function recovery(string $token): View
    {
        $emailRemind = EmailRemind::where('token', $token)->first();
//        if (!$emailRemind) {
//            return response()->json(['message' => 'Неверный токен'], 404);
//        }
        $user = $emailRemind->user;
        $email = $user->email;
        $emailRemind->delete();
        return view('password-reset', compact('email'));
    }

    public function reset(ResetPasswordRequest $request, UserService $userService)
    {
        if(!$request->email) {
            dd('Hi');
            return redirect('/');
        }
        $user = $userService->changePassword($request->email, $request->password);
        try {
            Auth::login($user);
            return response()->json(['message' => 'Успешная смена пароля']);
        } catch (Exception $e) {
            return redirect('/', ['message' => 'Смена пароля закончилась с ошибкой. Пожалуйста, попробуйте ещё раз']);
        }
    }
}
