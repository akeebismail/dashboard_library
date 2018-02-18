<?php

namespace App\Http\Middleware;

use Closure;
use App\LibraryRepo\LibraryRepository;
class StartTimeRedirect
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
        $library = new LibraryRepository;
        if (!$library->isOpened() || $library->isClosed()){
            return redirect()->route('not-open');
        }
        return $next($request);
    }
}
