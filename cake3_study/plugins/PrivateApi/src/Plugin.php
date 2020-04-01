<?php

namespace PrivateApi;

use Cake\Core\BasePlugin;
use Cake\Core\PluginApplicationInterface;

/**
 * Plugin for PrivateApi
 */
class Plugin extends BasePlugin
{
    public function bootstrap(PluginApplicationInterface $app)
    {
        // 定数を追加。デフォルトの設定をロード。
        // デフォルトでは、プラグインの中の `config/bootstrap.php` をロードします。
        parent::bootstrap($app);
    }
}
