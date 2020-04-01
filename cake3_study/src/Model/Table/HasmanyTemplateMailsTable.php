<?php

namespace App\Model\Table;

use Cake\ORM\Table;

class HasmanyTemplateMailsTable extends Table
{
  public function initialize(array $config)
  {
    parent::initialize($config);

    $this->setTable('template_mails');
    $this->setPrimaryKey('id');

    $this->hasMany('RouteTemplateMails');
  }
}
