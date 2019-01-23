<?php

namespace Naif\NovaSms\Http\Middleware;

use Naif\NovaSms\NovaSms;

class Authorize
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return \Illuminate\Http\Response
     */
    public function handle($request, $next)
    {
        return resolve(NovaSms::class)->authorize($request) ? $next($request) : abort(403);
    }
}
