<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;

class VerifyCsrfToken extends BaseVerifier {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)  
	{
	    if ($this->isReading($request) || $this->excludedRoutes($request) || $this->tokensMatch($request))
	    {
	        return $this->addCookieToResponse($request, $next($request));
	    }

	    throw new TokenMismatchException;
	}
	protected function excludedRoutes($request)  
{
    $routes = [
            'auth/facebook',
            'auth/login',
            'auth/register',
            'auth/logged',
            'auth/logout',
            'attachment',
            'issue',
            'issues/search',
            'issues/statuschange',
            'issues/*',
            'attachment/*'
    ];

    foreach($routes as $route)
        if ($request->is($route))
            return true;

        return false;
}

}
