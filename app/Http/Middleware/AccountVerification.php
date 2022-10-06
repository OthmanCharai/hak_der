<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Interfaces\IMustVerifyMobile;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;


class AccountVerification
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure(Request): (Response|RedirectResponse) $next
     * @return Response|RedirectResponse
     */
    public function handle(Request $request, Closure $next, $redirectToRoute = null)
    {
        if (
            !$request->user() ||
            (($request->user() instanceof IMustVerifyMobile &&
                !$request->user()->hasVerifiedMobile())
            &&($request->user() instanceof MustVerifyEmail && !$request->user()->hasVerifiedEmail()))
        ) {
            return $request->expectsJson()
                ? abort(403, 'Your Account  is not verified.')
                : Redirect::guest(URL::route($redirectToRoute ?: 'verify.otp'));
        }

        return $next($request);
    }
}
