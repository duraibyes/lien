<?php



namespace App\Providers;

use App\Policies\SubUserPolicy;
use App\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Auth\Notifications\ResetPassword;



class AuthServiceProvider extends ServiceProvider

{

    /**

     * The policy mappings for the application.

     *

     * @var array

     */

    protected $policies = [
        User::class => SubUserPolicy::class,
    ];



    /**

     * Register any authentication / authorization services.

     *

     * @return void

     */

    public function boot()
    {

        $this->registerPolicies();
        ResetPassword::createUrlUsing(function ($user, string $token) {
            return config('app.frontend_url')
                . "/reset-password?token={$token}&email={$user->email}";
        });

    }
}
