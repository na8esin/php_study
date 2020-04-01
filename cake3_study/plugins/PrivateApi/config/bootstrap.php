<?php

use PrivateApi\Error\PrivateApiErrorHandler;
use Cake\Core\Configure;

(new PrivateApiErrorHandler(Configure::read('Error')))->register();
//echo ('plugin bootstrap');

// 両方のブートストラップを通る
