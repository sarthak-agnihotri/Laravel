<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\PageView;
use Symfony\Component\HttpFoundation\Response;

class LogPageView
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        PageView::create([
            'page_name'=>$request->path(),
            'visit_count'=>1
        ]);
        return $next($request);
    }
}
