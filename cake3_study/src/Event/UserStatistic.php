<?php

namespace App\Event;

use Cake\Event\EventListenerInterface;
use Exception;

class UserStatistic implements EventListenerInterface
{
    const EVENT_NAME = 'Model.Family.afterPlace';

    public function implementedEvents()
    {
        return [
            self::EVENT_NAME => function ($event, $order, $mother) {
                // 統計値を更新するコード
                \Cake\Log\Log::debug(
                    '$order->' . print_r($order, true) . PHP_EOL . '$mother->' . print_r($mother, true)
                );

                //throw new \Exception('event abort.');
            },
        ];
    }
}
