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
        'App\Department' => 'App\Policies\DepartmentPolicy',
        'App\Mouse' => 'App\Policies\MousePolicy',
        'App\Keyboard' => 'App\Policies\KeyboardPolicy',
        'App\Charger' => 'App\Policies\ChargerPolicy',
        'App\Monitor' => 'App\Policies\MonitorPolicy',
        'App\Software' => 'App\Policies\SoftwarePolicy',
        'App\LanCable' => 'App\Policies\LanCablePolicy',
        'App\Document' => 'App\Policies\DocumentPolicy',
        'App\DocumentCategory' => 'App\Policies\DocumentCategoryPolicy',
        'App\Password' => 'App\Policies\PasswordPolicy',
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
