<?php

namespace App\Controller;

use Cake\Controller\Controller;
use Cake\ORM\TableRegistry;
use App\Model\Entity\{TemplateMail, RouteTemplateMail};

class TemplateMailsController extends Controller
{
  public function initialize()
  {
    parent::initialize();
  }

  // 自動で配列のグルーピングはしてくれない
  public function index()
  {
    $table = TableRegistry::getTableLocator()->get('TemplateMails');
    $table->find()->contain(['RouteTemplateMails'])->all()->each(function ($value, $key) {
      $values = array_filter($value->getOriginalValues(), function ($v, $k) {
        return  $k !== 'route_template_mail';
      }, ARRAY_FILTER_USE_BOTH);
      var_dump($values);
      var_dump($value->route_template_mail->getOriginalValues());
    });
    exit;
  }

  public function where()
  {
    $table = TableRegistry::getTableLocator()->get('TemplateMails');
    $table->find()
      ->contain(['RouteTemplateMails'])
      ->where([
        'TemplateMails.mail_type' => 2,
        'RouteTemplateMails.route_id' => 9
      ])
      ->all()
      ->each(function ($value, $key) {
        $values = array_filter($value->getOriginalValues(), function ($v, $k) {
          return  $k !== 'route_template_mail';
        }, ARRAY_FILTER_USE_BOTH);
        var_dump($values);
        var_dump($value->route_template_mail->getOriginalValues());
      });
    exit;
  }

  // うまくグルーピングできない。する必要があるかもわからないけど
  public function grouping()
  {
    $table = TableRegistry::getTableLocator()->get('TemplateMails');
    $new = $table->find()->contain(['RouteTemplateMails'])->all()->groupBy('id');
    foreach ($new->toArray() as $k => $v) {
      var_dump($v);
    }
    exit;
  }

  // 逆にしたとしても、グルーピングはしてくれない
  public function reverse()
  {
    $table = TableRegistry::getTableLocator()->get('RouteTemplateMails');
    $table->find()->contain(['TemplateMails'])->all()->each(function ($value, $key) {
      var_dump($value);
    });
    exit;
  }

  // グルーピングしてくれる
  public function hasmany()
  {
    $table = TableRegistry::getTableLocator()->get('HasmanyTemplateMails');
    $table->find()->contain(['RouteTemplateMails'])->all()->each(function ($value, $key) {
      $values = array_filter($value->getOriginalValues(), function ($v, $k) {
        return  $k !== 'route_template_mails';
      }, ARRAY_FILTER_USE_BOTH);
      var_dump($values);
      if (!empty($value->route_template_mails)) {
        var_dump($value->route_template_mails);
      }
    });
    exit;
  }
}
