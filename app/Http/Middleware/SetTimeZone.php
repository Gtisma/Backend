<?php

namespace App\Http\Middleware;

use App\Domain\Helpers\Constants;
use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\View;

class SetTimeZone
{
	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @param  string|null  $guard
	 * @return mixed
	 */
	public function handle($request, Closure $next, $guard = null)
	{   date_default_timezone_set("Africa/Lagos");
		return $next($request);
	}
}
