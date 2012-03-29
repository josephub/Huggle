<?php
class DATABASE_CONFIG {

	public $default = array(
		'datasource' => 'Database/Mysql',
		'persistent' => true,
		'host' => 'localhost',
		'login' => 'huggleph_d34l',
		'password' => 'adglKHSKJGH98-!',
		'database' => 'huggleph_beta2',
	);
}

if(isset($_SERVER['SERVER_NAME'])){
    switch($_SERVER['SERVER_NAME']){
      case 'localhost':
        Configure::write('DBCONFIG', array(
          'server' => 'localhost',
          'user' => 'root',
          'password' => 'root',
          'db' => 'cakephp'
        ));
        break;
      default:
        Configure::write('DBCONFIG', array(
          'user' => 'huggleph_d34l',
          'server' => 'localhost',
          'password' => 'adglKHSKJGH98-!',
          'db' => 'huggleph_beta2'
        ));
        break;
    }
}
