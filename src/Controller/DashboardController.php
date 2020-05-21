<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Utility\Hash;
use App\Controller\UsersController;

class DashboardController extends AppController {

   public function index() {
    }

    public function members() {
        $clients = $this->Members->find('all');
        $this->set('clients', $clients);
    }

    public function requested(){
    	$requested = $this->Requests->find('all');
        $this->set('requested', $requested);
    }
    public function transactions(){
    	// $transactions = $this->Transactions->find('all', array('contain' =>array('Requests')));
    	$transaction = $this->Transactions->find('all', array('contains' =>array('Requests')));
        $this->set('transaction', $transaction);
    }
    public function memberdash($msisdn){
    	$requested = $this->Requests->find('all', array('conditions' =>array('phone_number' =>$msisdn)));
        $this->set('requested', $requested);

        $transaction = $this->Transactions->find('all', array(
                    'conditions' => array('msisdn' => $msisdn),
                    'contains' => array('Requests')));
        $this->set('transaction', $transaction);
    	// $client = $this->Members->get($msisdn);
    	// $client = $this->Members->find('all', array('conditions' =>array('telephone_number' =>$msisdn)));
     //    $this->set('client', $client);

    }
    // public function initialize() {
    //     parent::initialize();
    //     $this->loadComponent('RequestHandler');
    //     //$this->Auth->allow(['ByMSISDN']);
    //     $this->RequestHandler->renderAs($this, 'json');
    // }


    public function isAuthorized($user) {
        if (isset($user['access_level'])) {
            return true;
        }
        return parent::isAuthorized($user);
    }

    
}
