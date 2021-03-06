<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

App::uses('Controller', 'Controller');
App::uses('CakeEmail', 'Network/Email');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package       app.Controller
 */
class AppController extends Controller {
	//public $helpers = array('Session','Facebook.Facebook');
	
    var $components = array('Session', 'Auth');

    function beforeFilter() {
    	$this->Auth->userModel = 'User';
  		$this->Auth->fields = array('username' => 'username', 'password' => 'password');
  		//$this->Auth->loginAction = array('controller' => 'users', 'action' => 'login');
  		$this->Auth->loginRedirect = array('controller' => 'campaigns', 'action' => 'get_featured');
  		$this->Auth->logoutRedirect = array('controller' => 'campaigns', 'action' => 'get_featured');
    	
    }
    
	function _refreshAuth($field = '', $value = '') {
	if (!empty($field) && !empty($value)) { 
		$this->Session->write($this->Auth->sessionKey .'.'. $field, $value);
	} else {
		if (isset($this->User)) {
			$this->Auth->login($this->User->read(false, $this->Auth->user('id')));
		} else {
			$this->Auth->login(ClassRegistry::init('User')->findById($this->Auth->user('id')));
		}
	}
}
}
