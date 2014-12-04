<?php namespace Kash\Http\Admin\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Routing\Middleware;

class LoggedIn implements Middleware {

	protected $auth;

	public function __construct(Guard $auth)
	{
		$this->auth = $auth;
	}

	public function handle($request, Closure $next)
	{
		if($this->auth->guest())
		{
			if($request->ajax())
			{
				return response()->make("Forbidden", 403);
			}

			return redirect()->route('login');
		}

		return $next($request);
	}

}
