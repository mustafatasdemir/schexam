<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
  /**
  * Handle an incoming request.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  \Closure  $next
  * @return mixed
  */
  public function handle($request, Closure $next, $guard = null)
  {

    if (Auth::guard($guard)->guest()) {
      if ($request->ajax() || $request->wantsJson()) {
        return response('Unauthorized.', 401);
      } else {
        return redirect()->guest('login');
      }
    }

    // Redirect only if the user is type Admin or Super Admin
    if ($request->user()->type == 'A' || $request->user()->type == 'S')
    {
      return $next($request);
    }
    else {
      return redirect('/');
    }

  }
}
