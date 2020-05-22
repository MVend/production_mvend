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
    	// $this->layout = 'default';
    	$aggregates = $this->Aggregates->find('all');
        $this->set('aggregates', $aggregates);

    }

    public function aggregatedash($id){
        // $this->layout = 'default';
    	$aggregates = $this->Aggregates->findByService_id($id);
        $this->set('aggregates', $aggregates);
    }


    public function isAuthorized($user) {
        if (isset($user['access_level'])) {
            return true;
        }
        return parent::isAuthorized($user);
    }

}