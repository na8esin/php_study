<?php

namespace App\Controller\Component;

use Cake\Controller\Component;
use App\Controller\Component\Share\ShareComponent;

class MathComponent extends Component
{
    public $components = ['Share' => ['className' => ShareComponent::class]];

    public function hello()
    {
        echo 'math';
        $this->Share->hello('世界');
    }
}
