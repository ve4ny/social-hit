<?php

namespace App\Services;

use App\Jobs\SendEmailConfirmationJob;
use App\Jobs\SendEmailPasswordRemindJob;
use App\Models\Balance;
use App\Models\User;
use App\Models\UserDetails;
use Exception;
use Illuminate\Support\Str;

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

        if($user) {
            $this->createUserDetails($user);
            $this->createBalance($user);
            SendEmailConfirmationJob::dispatch($user);
            return $user;
        } else {
            throw new Exception('Не удалось завершить регистрацию. Попробуйте позже.');
        }
    }

    /**
     * @param User $user
     * @return void
     */
    private function createUserDetails(User $user): void
    {
        $ref_code = $this->generateUniqueReferralCode();
        $details = new UserDetails(['referral_code'=> $ref_code ]);
        $user->details()->save($details);
    }

    public function createBalance(User $user): void
    {
        $balance = new Balance();
        $user->balance()->save($balance);
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
