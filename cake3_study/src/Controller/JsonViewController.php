<?php

namespace App\Controller;

use Cake\Controller\Controller;
use Cake\ORM\TableRegistry;

class JsonViewController extends Controller
{
  public function initialize()
    {
        parent::initialize();
        $this->loadComponent('RequestHandler');
    }

    /* http://localhost:8765/JsonView.json */
    public function index()
    {
        $users = TableRegistry::getTableLocator()->get('Users')->find();
        // シリアライズする必要があるビュー変数をセットする
        $this->set('users', $users);
        // JsonView がシリアライズするべきビュー変数を指定する
        $this->set('_serialize', 'users');
    }
}
