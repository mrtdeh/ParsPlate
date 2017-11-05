<?php

namespace App\Http\Middleware;

use Closure;

use JavaScript;

class ShareVariable
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        JavaScript::put(['signedIn' => auth()->check()]);


        return $next($request);
    }
}
