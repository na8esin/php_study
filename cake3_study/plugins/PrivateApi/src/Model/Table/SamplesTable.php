<?php
namespace PrivateApi\Model\Table;

use Cake\ORM\Table;

class SamplesTable extends Table
{
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('appoints');
    }
}