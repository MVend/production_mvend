<?php

/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */

namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;

use Cake\View\ViewBuilder;
use Knp\Snappy\Pdf;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link http://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public $_aclist;

    public function initialize() {

        parent::initialize();
        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');
        $this->loadComponent('Auth', [
            'authorize' => ['Controller'], // Added this line
            'loginRedirect' => [
                'controller' => 'Dashboard',
                'action' => 'index'
            ],
            'logoutRedirect' => [
                'controller' => 'Users',
                'action' => 'login'
            ]
        ]);
        $this->loadModel('Navigation');
        $this->loadModel('UserLevels');
        $u_role = $this->Auth->user('access_level');

        // if (isset($u_role)) {
        //     //$this->set('user', $this->Auth->user());
        //     $display_menus = $this->BuildMenus($u_role);
        //     $this->_aclist = $this->AccessRights($u_role);
        //     $this->set(compact('display_menus'));
        // }
    }

    public function isAuthorized($user) {
        // Default deny

        return false;
    }

    /**
     * Before render callback.
     *
     * @param \Cake\Event\Event $event The beforeRender event.
     * @return void
     */
    public function beforeRender(Event $event) {
        if (!array_key_exists('_serialize', $this->viewVars) &&
                in_array($this->response->type(), ['application/json', 'application/xml'])
        ) {
            $this->set('_serialize', true);
        }
    }

    public function beforeFilter(Event $event) {
        $this->Auth->allow(['display']);
        $this->Auth->allow(['postclientapi']);
    }

    function AccessRights($u_role) {
        $allowed_rights = $this->UserLevels->find('all', array('conditions' => array('access_denotor' => $u_role)
                )
        );
        foreach ($allowed_rights as $value) {
            $menu_set = explode(',', $value['allowed_access']);
            $aclist = $this->ACList($menu_set);
        }
        return $aclist;
    }


    // PARENT FUNCTION OF JSON API       

    public function json($data){
        $this->response->type('json');
        $this->response->body(json_encode($data));
        return $this->response;
    }


    // FUNCTION WHICH DOWNLOAD THE HTML CONTENT INTO PDFS FILE 

    public function downloadPdf($template, $vars)
{
    $pdfWriter = new PdfWriter();
 
    $pdf = $pdfWriter->write($template, $vars);
 
    $this->response->body($pdf);
    $this->response->type('pdf');
    $this->response->download(sprintf('export-%s.pdf', time()));
    return $this->response;
}

function sendCurl($url, $data){
        
            $requestData = $data;
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Content-Type: application/json',
                'accept: application/json',
            ));
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $requestData);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
            return $content = curl_exec($ch);
    }

}
