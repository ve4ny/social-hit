<?php

namespace App\Jobs;

use App\Mail\RegistrationCodeEmail;
use App\Models\EmailChange;
use App\Models\EmailConfirmation;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class ChangeEmailRequestJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected User $user;
    protected string $email;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(User $user, string $email)
    {
        $this->user = $user;
        $this->email = $email;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        // Отправка сообщения на почту
        $changeCode = Str::random(40); // Generate a random code

        EmailChange::updateOrInsert(
            ['user_id' => $this->user->id],
            ['token' => $changeCode,
            'new_email' => $this->email
            ]
        );

        // Send email with registration code
        Mail::to($this->user->email)->send(new RegistrationCodeEmail($changeCode));
    }
}
