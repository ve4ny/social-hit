<?php

namespace App\Http\Controllers;

use App\Jobs\ChangeEmailRequestJob;
use App\Models\EmailChange;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use PharIo\Manifest\Email;

class SafetyController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        $email_changes = EmailChange::where('user_id', auth()->user()->id)->first();
        return view('pages.safety', compact('email_changes'));
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function changeEmail(Request $request): JsonResponse
    {
        $email = $request->email;
        $userExists = User::where('email', $email)->exists();
        $emailChangeExists = EmailChange::where('new_email', $email)->exists();
        if ($userExists || $emailChangeExists) {
            return response()->json(['email' => 'Email уже существует в базе данных'], 409);
        }

        if (!auth()->check()) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }
        ChangeEmailRequestJob::dispatch(auth()->user(), $request->email);
        return response()->json(['message' => 'Ok'], 200);
    }

    /**
     * @param int $token
     * @return RedirectResponse
     */
    public function proceedEmailChange(int $token): RedirectResponse
    {
        $change = EmailChange::where('token', $token)->with('user')->first();
        if (!$change) {
            return redirect('/');
        }
        $user = $change->user;
        $user->email = $change->new_email;
        $user->save();
        $change->delete();
        return redirect('/safety');
    }
}
