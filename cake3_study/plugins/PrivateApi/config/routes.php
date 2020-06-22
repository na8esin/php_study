<?php
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;
use PrivateApi\Middleware\TrackingCookieMiddleware;

Router::plugin(
    'PrivateApi',
    ['path' => '/private-api'],
    function (RouteBuilder $routes) {
        $routes->registerMiddleware('tracking', new TrackingCookieMiddleware());
        $routes->applyMiddleware('tracking');
        $routes->fallbacks(DashedRoute::class);
    }
);

\Cake\Log\Log::info(__FILE__);