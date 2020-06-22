<?php

namespace PrivateApi;

use Cake\Core\BasePlugin;
use Cake\Core\PluginApplicationInterface;
use Cake\Log\Log;
//use PrivateApi\Middleware\TrackingCookieMiddleware;

/**
 * Plugin for PrivateApi
 */
class Plugin extends BasePlugin
{
/*
    public function middleware($middleware)
    {
        // ここで追加しちゃうとpluginと関係ないパスでも実行される
        //$middleware->add(new TrackingCookieMiddleware());
        
        Log::info(__FILE__.":".__METHOD__);
        // ここにミドルウェアを追加。
        return $middleware;
    }
*/    
    public function bootstrap(PluginApplicationInterface $app)
    {
        Log::info(__FILE__.":".__METHOD__);
        // 定数を追加。デフォルトの設定をロード。
        // デフォルトでは、プラグインの中の `config/bootstrap.php` をロードします。
        parent::bootstrap($app);
    }
}
