<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class FormatJsonResponse
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);

            $content = [
                'status' => 'blah',
                'data'   => $response->getContent(),
                'message' => 'Messages'
            ];
            $response->setContent(json_encode($content));

        return $response;
    }
}
