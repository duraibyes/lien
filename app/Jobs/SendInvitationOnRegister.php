<?php

namespace App\Jobs;

use App\Mail\NewUserRegisteredMail;
use Log;
use Mail;
use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class SendInvitationOnRegister implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $newUser;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(User $newUser)
    {
        $this->newUser = $newUser;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        try {
            $superUsers = User::where('role', 1)
                ->where('is_dev', 0)
                ->get();

            foreach ($superUsers as $superUser) {
                Mail::to($superUser->email)
                    ->queue(new NewUserRegisteredMail(
                        $superUser,
                        $this->newUser
                    ));
            }
        } catch (\Throwable $e) {
            Log::error('New user registration mail failed', [
                'error' => $e->getMessage(),
                'new_user_id' => $this->newUser->id ?? null,
            ]);
        }
    }
}
