<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        Gate::define('admin-users',function($user){
            return $user->hasAnyRoles(['ADMIN']);
        });
        Gate::define('manage-users',function($user){
            return $user->hasAnyRoles(['ADMIN','AUTHOR','ACCOUNT']);
        });
        Gate::define('all-users',function($user){
            return $user->hasAnyRoles(['ADMIN','AUTHOR','ACCOUNT','USER']);
        });
        Gate::define('edit.users',function($user){
            return $user->hasAnyRoles(['ADMIN','AUTHOR']);
        });
        Gate::define('delete.users',function($user){
            return $user->hasRole('ADMIN');
        });
        //
    }
}
