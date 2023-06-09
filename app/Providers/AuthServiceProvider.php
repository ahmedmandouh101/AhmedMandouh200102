<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\Role;
use App\Models\User;
use App\Policies\SubjectPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();

        Gate::define('update', [SubjectPolicy::class, 'update']);
        Gate::define('create', [SubjectPolicy::class, 'create']);
    }
}
