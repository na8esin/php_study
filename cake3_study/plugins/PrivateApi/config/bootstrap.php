<?php

use PrivateApi\Error\PrivateApiErrorHandler;
use Cake\Core\Configure;
use Cake\Log\Log;

(new PrivateApiErrorHandler(Configure::read('Error')))->register();

Log::info(__FILE__);
// 両方のブートストラップを通る
