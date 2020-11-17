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
        if(!($request->header('client_id'))) return errorResponse('client_id must be sent in the header',401);
        if(!in_array($request->header('client_id'),Constants::Clients))return errorResponse('Invalid client_id sent in the header',401);
		return $next($request);
	}
}
