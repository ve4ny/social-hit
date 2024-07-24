<?php

namespace App\Http\Controllers;

use App\Models\RefBalanceTransaction;
use App\Models\User;
use App\Services\RefBalanceService;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ReferralController extends Controller
{
    public function index()
    {
        $now = Carbon::now();

        $user = User::find(auth()->user()->id);
        $ref_balance = $user->refBalance;
        $site_url = config('app.url');

        $transactionsRaw = $user->refTransactions;
        $grouped = $transactionsRaw->groupBy('referral');

        $transactions = [];
        foreach ($grouped as $referral => $trans) {
            $lastWeekTransactions = $trans->filter(function ($transaction) use ($now) {
                return $transaction->created_at->greaterThanOrEqualTo($now->subWeek());
            });

            $lastMonthTransactions = $trans->filter(function ($transaction) use ($now) {
                return $transaction->created_at->greaterThanOrEqualTo($now->subMonth());
            });

            $weeklySum = $lastWeekTransactions->sum('amount');
            $monthlySum = $lastMonthTransactions->sum('amount');
            $totalSum = $trans->sum('amount');

            $ref_user = User::find($referral);
            $transactions[] = [
                'referral' => $ref_user->name,
                'last_login' => Carbon::parse($ref_user->last_login)->format('d.m.y'),
                'weekly_sum' => $weeklySum,
                'monthly_sum' => $monthlySum,
                'total_sum' => $totalSum,
            ];
        }

        return view('pages.referral', compact('ref_balance', 'site_url', 'transactions'));
    }

    public function transferBalance(): JsonResponse
    {
        try {
            $service = new RefBalanceService(auth()->user()->id);
            $service->sendToBalance();
            return response()->json(['message' => 'OK'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error: ' . $e->getMessage()], 400);
        }
    }
}
