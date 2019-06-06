<?php

namespace App\Http\Middleware;

use Closure;

class RudeWords
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
        $forbidden_words = ['hate', 'stupid', 'idiot'];

        foreach($forbidden_words as $word) {
            if(strstr($request->content, $word)) {
                return response(view('partials.forbidden-words'));
            }
        }

        return $next($request);
    }
}
