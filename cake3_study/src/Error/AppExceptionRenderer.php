<?php

namespace App\Error;

use Cake\Error\ExceptionRenderer;

class AppExceptionRenderer extends ExceptionRenderer
{
    /*
        MissingControllerExceptionに反応するメソッド
    */
    public function missingController($error)
    {
        $response = $this->controller->response;
        return $response->withStringBody('おっとコントローラがないよ');
    }
}
