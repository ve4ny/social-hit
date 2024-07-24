<?php

namespace App\Services;

use App\Models\RefBalance;
use App\Models\RefBalanceTransaction;
use App\Models\User;

class RefBalanceService
{
    /**
     * @var User
     */
    private User $user;

    /**
     * @param int $userId
     */
    public function __construct(int $userId)
    {
        $this->user = User::find($userId);

    }

    /**
     * @param int $amount
     * @return void
     */
    public function topUp(int $amount): void
    {
        $referrer = $this->user->details->whoReferred;
        $referrer->refBalance->amount += $amount * RefBalance::PERCENT;
        $referrer->refBalance->save();
        $this->writeTransaction($amount);
    }

    public function sendToBalance(): void
    {
        $balance = $this->user->balance;
        $refBalance = $this->user->refBalance;
        if($refBalance && $refBalance->amount > 0) {
            $balance->amount += $refBalance->amount;
            $balance->save();
            $refBalance->amount = 0;
            $refBalance->save();
        }
    }

    public function writeTransaction(int $amount)
    {
        $transaction = new RefBalanceTransaction([
            'user_id' => $this->user->details->whoReferred->id,
            'referral' => $this->user->id,
            'amount' => $amount * RefBalance::PERCENT
        ]);
        $transaction->save();
    }
}
