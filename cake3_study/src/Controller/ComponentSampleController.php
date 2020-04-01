<?php

namespace App\Controller;

use Cake\Controller\Controller;
use App\Controller\Component\Share\ShareComponent;


class ComponentSampleController extends Controller
{
    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('Share', [
            'className' => ShareComponent::class
        ]);
        $this->loadComponent('Math');
    }
    public function index()
    {
        $this->Share->hello(' world.<br />');

        $this->Math->hello();

        $this->Share->someLoader();
        exit;
    }
}
