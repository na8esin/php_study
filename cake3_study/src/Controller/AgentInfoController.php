<?php

namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Routing\Router;
use \Cake\Http\ServerRequest;

class AgentInfoController extends Controller
{
  public function initialize()
  {
    //var_dump($this->request->getParam('identity'));
    //var_dump($this->request->getParam('id'));
    parent::initialize();
  }

  public function edit()
  {
    $result = Router::parseRequest(new ServerRequest([
      'url' => '/gn/posts/edit/1',
      'environment' => ['REQUEST_METHOD' => 'GET'],
    ]));
    var_dump($result);
    exit;
  }
}
