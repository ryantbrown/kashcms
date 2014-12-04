<?php namespace Kash\Http\Admin\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Routing\Middleware;

class AdminRedirect implements Middleware {

	protected $auth;

	public function __construct(Guard $auth)
	{
		$this->auth = $auth;
	}

	public function handle($request, Closure $next)
	{
		// If user is logged in as an admin then redirect to dashboard
		if($this->auth->check() &&
		  ($this->auth->user() instanceof Kash\Models\Admin\Admin)) {
			return redirect()->route('dashboard')
;		}

		return $next($request);
	}

}
