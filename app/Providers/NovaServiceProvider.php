<?php

namespace App\Providers;

use App\Models\Invitation;
use App\Nova\Observer\InvitationObserver;
use App\Nova\Schema\Invitations;

use App\User;
use Laravel\Nova\Nova;
use Illuminate\Support\Facades\Gate;
use Laravel\Nova\NovaApplicationServiceProvider;
use Oryz\Core\Contracts\Models\WorkerCheckpoint;
use Oryz\Core\Models\EloquentStoredEvent;

class NovaServiceProvider extends NovaApplicationServiceProvider
{

    protected array $policies = [

    ];

    public function boot()
    {
        parent::boot();
        $this->addPolicies();
        Nova::serving(function () {
            Invitation::observe(InvitationObserver::class);
        });

    }

    protected function addPolicies()
    {
        foreach ($this->policies as $key => $value) {
            Gate::policy($key, $value);
        }
    }

    protected function routes()
    {
        Nova::routes()
                ->withAuthenticationRoutes()
                ->withPasswordResetRoutes()
                ->register();
    }

    protected function gate()
    {
        Gate::define('viewNova', function ($user) {
	        return preg_match('/\@bcnbcn.io|\@ethermail.io|\@ethersuite.io|\@dev.ethermail.io|\@evozon.com/', $user->email);
        });
    }

    protected function cards()
    {
        return [

        ];
    }

    protected function dashboards()
    {
        return [];
    }

    public function tools()
    {
        return [

        ];
    }

	protected function resources()
	{
        Nova::resources([
            Invitations::class
        ]);
	}
}
