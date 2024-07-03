<?php

namespace App\Services;

use App\Jobs\SendEmailConfirmationJob;
use App\Models\User;
use Exception;

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
            SendEmailConfirmationJob::dispatch($user);
            return $user;
        } else {
            throw new Exception('Не удалось завершить регистрацию. Попробуйте позже.');
        }
    }

}
