<?php

namespace App\Jobs;

use App\Mail\RegistrationCodeEmail;
use App\Mail\RemindPasswordEmail;
use App\Models\EmailRemind;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class SendEmailPasswordRemindJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected User $user;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        // Отправка сообщения на почту
        $remindToken = Str::random(40); // Generate a random code

        EmailRemind::updateOrCreate(
            ['user_id' => $this->user->id],
            ['token' => $remindToken]
        );

        // Send email with registration code
        Mail::to($this->user->email)->send(new RemindPasswordEmail($remindToken));
    }
}
