<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class EnsureXadminEmailIsVerified
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return \Illuminate\Http\Response
     */
    public function handle($request, Closure $next)
    {
        if (!$request->user('xadmin') || ($request->user('xadmin') instanceof MustVerifyEmail && !$request->user('xadmin')->hasVerifiedEmail())) {
            return Redirect::route('xadmin.verification.notice');
        }

        return $next($request);
    }
}
