<?php

namespace App\Controller;

use Cake\Controller\Controller;
use Cake\ORM\TableRegistry;

class JsonController extends Controller
{
  public function initialize()
  {
    parent::initialize();
  }

  public function index()
  {
    $users = TableRegistry::getTableLocator()->get('Users');
    $query = $users->find();
    //dd($query->sql());

    $sql = 'select * from (' . $query->sql() . ') a';

    $users->getConnection()->execute($sql);
  }
}
