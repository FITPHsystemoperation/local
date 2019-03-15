<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\User' => 'App\Policies\UserPolicy',
        'App\Computer' => 'App\Policies\ComputerPolicy',
        'App\ComputerAccount' => 'App\Policies\ComputerAccountPolicy',
        'App\ComputerSoftware' => 'App\Policies\ComputerSoftwarePolicy',
        'App\Theme' => 'App\Policies\ThemePolicy',
        'App\Staff' => 'App\Policies\StaffPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::before(function($user){
            if ($user->role_id === 1)
            {
                return true;
            };
        });
    }
}
