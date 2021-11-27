<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class UserActivity
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::check()){
        
         $expireAt=now()->addSeconds(2);
         //Cache::put('user-is-online-'.Auth::id(),true, $expireAt);
         Cache::put(Auth::id(), Auth::id(), now()->addMinutes(2));
         User::where('id',Auth::id())->update(['last_seen'=>now()]);
        }
        return $next($request);
    }
}
