<?php
namespace PrivateApi\Middleware;

class TrackingCookieMiddleware
{
    public function __invoke($request, $response, $next)
    {
        \Cake\Log\Log::info(__FILE__.':'.__METHOD__);
        
        // $next() を呼ぶことで、アプリケーションのキューの中で
        // *次の* ミドルウェアにコントロールを任せます。
        $response = $next($request, $response);
        return $response;
    }
}