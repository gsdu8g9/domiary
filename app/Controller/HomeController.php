<?php
class HomeController extends AppController
{
  var $name = 'Home';
  var $uses = array('domains');
  
  public function beforeFilter() {
     parent::beforeFilter();
     $this->Auth->allow('index');
  }

  public function index() {
//    $this->set('recent_domains', $this->Domain->find('all', array('order' => array('Domain.created DESC'), 'limit' => 10)));
  }

}