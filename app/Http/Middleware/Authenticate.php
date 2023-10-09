<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Closure;
use Illuminate\Support\Facades\Session;

class Authenticate
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    public function handle(Request $request, Closure $next)
    {
        $token = \Illuminate\Support\Facades\Request::cookie('token');

        if (empty($token))
        {
            $message = 'Your session has expired';
            Session::flash('alert-danger',''.$message);
            return redirect('/system');
        }
        return $next($request);
    }
}
