<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use App\Model\Table\RouteTemplateMailsTable;

class TemplateMailsTable extends Table
{
  public function initialize(array $config)
  {
    parent::initialize($config);

    $this->setTable('template_mails');
    $this->setPrimaryKey('id');

    $this->belongsTo(
      'RouteTemplateMails',
      [
        'joinType'     => 'INNER',
        'foreignKey'   => 'id',
        'bindingKey'   => 'template_mail_id'
      ]
    );
  }
}
