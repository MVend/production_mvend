<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\ORM\TableRegistry;

class AggregatesTable extends Table {

    public function initialize(array $config) {
        parent::initialize($config);
        $this->setTable('mvd_aggregated_services');

       // $this->hasMany('Requests')->setForeignKey('record_id')->setDependent(true);
    }

}