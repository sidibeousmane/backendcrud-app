<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Laravel\Passport\Passport;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * Les politiques d'application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Inscrivez tous les services d'authentification / autorisation.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        // Enregistrement des routes Passport
        Passport::ignoreRoutes();
        }
}
