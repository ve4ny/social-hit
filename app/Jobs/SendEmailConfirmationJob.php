<?php

namespace App\Jobs;

use App\Mail\RegistrationCodeEmail;
use App\Models\EmailConfirmation;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class SendEmailConfirmationJob implements ShouldQueue
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
        $registrationCode = Str::random(40); // Generate a random code

        EmailConfirmation::create([
            'user_id' => $this->user->id,
            'token' => $registrationCode,
        ]);

        // Send email with registration code
        Mail::to($this->user->email)->send(new RegistrationCodeEmail($registrationCode));
    }
}
