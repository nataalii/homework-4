<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckNameMidlleware
{

    public function handle(Request $request, Closure $next)
    {
        if(!$request->has('name') || $request->input('name') !== "my-super-middleware"){
            return redirect(route('error'));
        }
        return $next($request);
    }
}
