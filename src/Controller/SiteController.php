<?php
namespace App\Controller;

use Cake\Event\Event;

class SiteController extends AppController {

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        //$this->Auth->allow(['index']);
        $this->viewBuilder()->layout('site');
    }

/*    public function isAuthorized($user) {
        return true;
    }*/

    public function index() {

    }

}
