<?php

namespace App\Providers;

use App\Models\User;
use App\Models\CallLog;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Gate::define('view-call-log', function (User $user, CallLog $callLog) {
            return $user->id === $callLog->agent_id;
        });
    }
}
