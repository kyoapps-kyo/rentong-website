<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SetLocale
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
        // 以下を追記
        if(session()->has('locale')) {
            app()->setLocale(session('locale'));
            // Log::info(config('app.locale'));
        }
        // Log::info(config('locale'). "config");

        return $next($request);
    }
}
