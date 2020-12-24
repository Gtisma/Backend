<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     *
     * This is used by Laravel authentication to redirect users after login.
     *
     * @var string
     */
    public const HOME = '/home';
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */

    /**
     * The controller namespace for the application.
     *
     * When present, controller route declarations will automatically be prefixed with this namespace.
     *
     * @var string|null
     */
     protected $namespace = 'App\\Http\\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        $this->configureRateLimiting();

    }
    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();

        $this->mapWebRoutes();
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        $this->mapWebRoute('/web.php');
        $this->mapWebRoute('/web/admin/home.php', '/admin');
//        $this->mapWebRoute('/web/marketing.php', '/marketing');
//        $this->mapWebRoute('/web/settings.php', '/settings');

    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        $this->mapWebRoute('/api.php','api');
        $this->mapApiRoute('/api/auth.php', '/api/auth');
        $this->mapApiRoute('/api/user.php', '/api/user');
        $this->mapApiRoute('/api/gender.php', '/api/gender');
        $this->mapApiRoute('/api/crimetype.php', '/api/crimetype');
        $this->mapApiRoute('/api/rank.php', '/api/rank');
        $this->mapApiRoute('/api/password.php', '/api/password');
        $this->mapApiRoute('/api/report.php', '/api/reports');
        $this->mapApiRoute('/api/state.php', '/api/state');

    }

    /**
     * Configure the rate limiters for the application.
     *
     * @return void
     */
    protected function configureRateLimiting()
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by(optional($request->user())->id ?: $request->ip());
        });
    }
    protected function mapApiRoute(string $file, string $prefix = '')
    {
        Route::prefix($prefix)->middleware('api')->namespace($this->namespace)->group(base_path('routes/' . $file));
    }

    /**
     * Define a web route resource file and bind it
     *
     * @param string $file
     * @param string $prefix
     */
    private function mapWebRoute(string $file, string $prefix = '')
    {
        Route::prefix($prefix)->middleware('web')->namespace($this->namespace)->group(base_path('routes/' . $file));
    }
}
