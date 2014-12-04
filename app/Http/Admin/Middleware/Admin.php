<?php namespace Kash\Http\Admin\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Routing\Middleware;

class Admin implements Middleware {

	protected $auth;

	public function __construct(Guard $auth)
	{
		$this->auth = $auth;
	}

	public function handle($request, Closure $next)
	{
		if($this->auth->guest() || (!$this->auth->user() instanceof Kash\Models\Admin\Admin))
		{
			return response()->make("Forbidden", 403);
		}

		return $next($request);
	}

}
