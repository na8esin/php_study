<?php

namespace PrivateApi\Error;

use Cake\Error\ErrorHandler;
use Cake\Error\ExceptionRenderer;

/**
 * アプリ共通のエラーハンドルクラス
 */
class PrivateApiErrorHandler extends ErrorHandler
{
    public function __construct($options = [])
    {
        $defaults = [
            'log' => true,
            'trace' => false,
            'exceptionRenderer' => ExceptionRenderer::class,
        ];
        $this->_options = $options + $defaults;
    }
}
