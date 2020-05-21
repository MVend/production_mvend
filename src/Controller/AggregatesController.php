<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Utility\Hash;
use App\Controller\UsersController;

class AggregatesController extends AppController {

    public function initialize() {
        parent::initialize();
        
    }


    public function index(){
    	$this->layout = 'aggregate';
    	$aggregates = $this->Aggregates->find('all');
        $this->set('aggregates', $aggregates);

    }

    public function aggregatedash($servid){
    	// $this->viewBuilder()->setLayout('aggregate');
    	$this->layout = 'aggregate';
    	$aggregates = $this->Aggregates->findByServiceId($servid);
        $this->set('aggregates', $aggregates);
    }


    public function isAuthorized($user) {
        if (isset($user['access_level'])) {
            return true;
        }
        return parent::isAuthorized($user);
    }

}