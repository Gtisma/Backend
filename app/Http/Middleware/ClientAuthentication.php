<?php

namespace App\Http\Middleware;

use App\Domain\Helpers\Constants;
use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\View;

class ClientAuthentication
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
	{
	    Log::info("header Request",[$request->header()]);
//	    if($request->header('noclientid')) return $next($request);
        if(!($request->header('clientid'))) return errorResponse('clientid must be sent in the header',401);
        if(!in_array($request->header('clientid'),Constants::Clients))return errorResponse('Invalid clientid sent in the header',401);
		return $next($request);
	}
}
