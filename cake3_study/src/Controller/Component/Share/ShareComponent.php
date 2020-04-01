<?php

namespace App\Controller\Component\Share;

use Cake\Controller\Component;

class ShareComponent extends Component
{
    public $components = ['Some' => ['className' => SomeComponent::class]];

    public function hello($value)
    {
        echo 'hello' . $value;
    }

    public function someLoader()
    {
        $this->Some->some();
    }
}
