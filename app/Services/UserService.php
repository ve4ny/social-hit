<?php

namespace App\Services;

use App\Events\UserCreated;
use App\Jobs\SendEmailPasswordRemindJob;
use App\Models\Balance;
use App\Models\RefBalance;
use App\Models\User;
use App\Models\UserDetails;
use Exception;
use Illuminate\Support\Str;
use function PHPUnit\Framework\throwException;

class UserService
{
    /**
     * @param array $userData
     * @return User
     * @throws Exception
     */
    public function create(array $userData): User
    {

        $user = User::create([
            'email' => trim($userData['email']),
            'remember_me' => $userData['remember_me'],
            'password' => bcrypt(trim($userData['password'])),
        ]);

        $ref_code = $userData['referral_code'] ?? NULL;

        if($user) {
            $this->createUserDetails($user, $ref_code);
            $this->createBalance($user);
            $this->createRefBalance($user);
            UserCreated::dispatch($user);
            return $user;
        } else {
            throw new Exception('Не удалось завершить регистрацию. Попробуйте позже.');
        }
    }

    /**
     * @param User $user
     * @param string|null $referral
     * @return UserDetails
     */
    private function createUserDetails(User $user, string $referral = NULL): UserDetails
    {
        $ref_code = $this->generateUniqueReferralCode();
        $details = ['referral_code'=> $ref_code ];

        if($referral) {
            $refUser = User::whereHas('details', function ($query) use ($referral) {
                $query->where('referral_code', $referral);
            })->with('details')->first();
            $details['referrer'] = $refUser->id;
        }
        $userDetails = new UserDetails($details);
        $user->details()->save($userDetails);
        return $user->details;

    }

    public function createBalance(User $user): void
    {
        $balance = new Balance();
        $user->balance()->save($balance);
    }

    public function createRefBalance(User $user): void
    {
        $ref_balance = new RefBalance();
        $user->refBalance()->save($ref_balance);
    }

    /**
     * @param string $email
     * @return User|null
     */
    public function remind(string $email): User|null
    {
        $user = User::where('email', $email)->first();
        if(!$user) {
            return null;
        }
        SendEmailPasswordRemindJob::dispatch($user);
        return $user;
    }

    /**
     * @param string $email
     * @param string $password
     * @return User|null
     */
    public function changePassword(string $email, string $password): User|null
    {
        $user = User::where('email', $email)->first();
        if(!$user) {
            return null;
        }
        $user->password = bcrypt(trim($password));
        $user->save();
        return $user;
    }

    /**
     * @return string
     */
    public function generateUniqueReferralCode(): string
    {
        do {
            $referralCode = Str::random(32);
        } while (UserDetails::where('referral_code', $referralCode)->exists());
        return $referralCode;
    }

}
