<?php

namespace App\Model\Table;

use Cake\ORM\Table;

class RouteTemplateMailsTable extends Table
{
    public $type = '';

    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('route_template_mails');
        $this->setPrimaryKey('id');

        $this->belongsTo(
            'TemplateMails',
            [
                'joinType'     => 'INNER',
                'foreignKey'   => 'template_mail_id',
                'bindingKey'   => 'id'
            ]
        );
    }
}
