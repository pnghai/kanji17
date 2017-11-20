<?php

namespace App\Providers;

use App\Models\Character;
use App\Observers\CharacterObserver;
use Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider;
use Illuminate\Support\ServiceProvider;
use Reliese\Coders\CodersServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
	    if ($this->app->environment() == 'local') {
		    $this->app->register(CodersServiceProvider::class);
		    $this->app->register(IdeHelperServiceProvider::class);
	    }
    }
}
