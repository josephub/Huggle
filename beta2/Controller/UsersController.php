<?php
App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');
/**
 * Users Controller
 *
 */
class UsersController extends AppController {

/**
 * Scaffold
 *
 * @var mixed
 */
	public $scaffold;
	public $helpers = array('Html', 'Form');
	public $uses = array('User', 'Ticket');
	public $components = array('Email', 'TicketMaster');

	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('add', 'logout','newpassword', 'login', 'register', 'activate','forgot_password', 'useticket', 'edit_password');
	}
      
	public function login() {
		if ($this->request->is('post')){
  		    if ($this->Auth->login()) {
			//var_dump($this->Auth->user('role'));
			if($this->Auth->user('role') == '1'){
				$this->redirect(array('action' => 'settings'));
			}
			else{
	        	  $this->redirect($this->Auth->redirect());
			}
		    } else {
		        $this->Session->setFlash(__('Invalid username or password, try again.'));
		    }
		}
	}

	public function settings(){
		$this->data = $this->User->findById($this->Auth->user('id'));
		if($this->Auth->user('role') == '1'){
			$this->render('/Elements/admin_my_account');
		}
	}

	public function generate_list(){
    	        $this->layout = 'ajax';
	}

	public function subscribers(){
    	  $this->layout = 'ajax';
	}


     	public function logout() {
     	    $this->redirect($this->Auth->logout());
     	}
     
    	public function add() {
    	  if ($this->request->is('post')) {
    	      $this->User->create();
    	      if ($this->User->save($this->request->data)) {
    	  	        if ($this->Auth->login()){
    	  	        	$this->redirect($this->Auth->redirect());
    	  	        }
    	      } else {
    	          $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
    	      }
    	  }
    	}

    	public function save() {
		$this->layout = 'ajax';
    	  	if ($this->request->is('post')) {
    	  	    $this->User->create();
    	  	    if ($this->User->save($this->request->data)) {
    	  	    } else {
    	  	        $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
    	  	    }
    	  	}
    	}

    	public function delete() {
		$this->layout = 'ajax';
    	  	if ($this->request->is('post')) {
			$data = array('id' => $this->request->data['id'],
				'deleted_at' => 'NOW ()'
			);
			$user = $this->User->save($data);
    	  	}
		$this->render('/Users/save');
    	}

    	public function edit_password(){
    	   $id = $this->Session->check('tokenreset'); 
    	   $data = $this->data;
    	   $user = $data['User'];

    	   if ($id){
    	           var_dump('edit_password');
    	         $user = $this->User->findById($id);
    	         $this->redirect(array('controller'=>'campaigns', 'action'=>'get_featured'));
    	   }
    	}

    	public function view_history() {
    		$this->layout = 'ajax';
    	}
    	
    	public function edit_profile() {
    		$this->layout = 'ajax';
    		if(!empty($this->data)) {      
    			
    			$this->request->data['User']['id'] = $this->Auth->user('id');    
    			if($this->User->save($this->data)) {                
    				$this->Session->setFlash("User Profile Updated!");            
    			}    
    		}     
 
    		$this->data = $this->User->findById($this->Auth->user('id'));
    		
    	}
    	
    	public function change_password() {
    		$this->layout = 'ajax';
    		
    		if(!empty($this->data)) {      		
    			$this->request->data['User']['id'] = $this->Auth->user('id');    
    			if($this->User->save($this->data)) {                
    				$this->Session->setFlash("Password Changed!");            
    			}    
    			//$this->set('validationErrorsArray', $this->User->invalidFields());
    		}     
 
    		$this->data = $this->User->findById($this->Auth->user('id'));
    	}

    	public function forgot_password($email=null){
    	    //grab a fresh botcheck question from the db
// f	or this example youll need to static code these, my botcheck article is coming soon though
    	    // $bc=$this->Botcheck->getFreshBotcheck();
    	    $this->whatWeAsk="Is water a liquid at room temperature?";
    	    $this->humanWouldType=array('Yes', 'of course');
    	    $this->set('botQuestion',$this->whatWeAsk);
    	    if(empty($this->data)){
    	    	//$this->data['User']['email']=$email;
    	    	//show form
    	    }else{
    	    		//set email to passed variable if present
    	    		if(!$email) $email=$this->data['User']['email'];
    	    		// make sure whave email and a check
    	    		if(!$email){
    	    			$this->User->invalidate('email');
    	    		}else{
    	    			//email entered, check for it
    	    			$account=$this->User->findByEmail($email);
    	    			//if($account['User']['isBanned']){
    	    			//	//banned user, tell em where to go
    	    			//	$this->Session->setFlash('<h3>This account is locked due to violation of terms</h3>');
    	    			//	$this->redirect('/');
    	    			//}
    	    			if(!isset($account['User']['email'])){
    	    				$this->Session->setFlash('<h3>We Don\'t have such and email on record.</h3>');
    	    				$this->redirect('/');
 
    	    			}
    	    			$hashyToken=md5(date('mdY').rand(4000000,4999999));
    	    			$message = $this->Ticketmaster->createMessage($hashyToken);
    	    			//$this->Email->useremail($email,$account['User']['username'],$message);
    	    			//CakeEmail::deliver($email,'Reset Password', $message, array('from'=>'me@huggle.ph', 'transport' => 'Mail'));
    	    			//$cmail = new CakeEmail('smtp');
    	    			//$result = $cmail->emailFormat('both')
    	    			//		->to($email)
    	    			//		->from('me@huggle.ph')->send($message);

    	    			$data['Ticket']['hash']=$hashyToken;
    	    			$data['Ticket']['data']=$email;
    	    			$data['Ticket']['expires']=$this->Ticketmaster->getExpirationDate();
 
    	    			if ($this->Ticket->save($data)){
    	    				$this->Session->setFlash("http://localhost/huggle_cake/users/useticket/".$hashyToken."  An email has been sent with instructions to reset your password");
    	    				$this->redirect('/');
    	    			}else{
    	    				$this->Session->setFlash('Ticket could not be issued');
    	    				$this->redirect('/');
 
    	    			}
    	    		}
 
    	    }

    	}

    	public function useticket($hash){
    		//purge all expired tickets
    		//built into check
   	    //var_dump($this->Ticket);
    		$results=$this->Ticketmaster->checkTicket($hash);
    	
    		if($results){
    			//now pull up mine IF still present
    			$passTicket=$this->User->findByEmail($results['Ticket']['data']);
    	
    			$this->Ticketmaster->voidTicket($hash);
    			$this->Session->write('tokenreset',$passTicket['User']['id']);
    			$this->Session->setFlash('Enter your new password below');
    			$this->redirect('/users/newpassword/'.$passTicket['User']['id']);
    		}else{
    			$this->Session->setFlash('Your ticket is lost or expired.');
    			$this->redirect('/');
    		}
    	
    	}

 
 
    	public function newpassword($id = null) {
    		if($this->Session->check('tokenreset')){
    			//user is not logged in, BUT has TOKEN in hand
    	    	$this->set('user', $this->User->find('first', array('conditions' => array('id' => $id))));
    	    	//this->render('change_password');
    		}else{
    			// But you only want authenticated users to access this action.
    	            //like the one below 'checkSession are  authentication code, so you can ignore these or use Auth
    			//$this->checkSession(1,'/users/edit/'.$id);
    	
    			//But youll need to read the user info somehow, and only the user who owns the profile 
    			$attempter=$this->Session->read('User');
    	
    			//make sure its the admin or the rigth user
    			if($attempter['User']['id']!=$id && $attempter['Role']['rights']<4)
    			{
    				//not  the user, not the admin and not a reset request via toekns
    				/*
    				 * SHAME
    				 */
    				//$this->Userban->banuser('Edit Anothers Password');
    				$this->Session->setFlash('Your account has been banned');
    				$this->redirect('/');
    			}
    	
    		}	
    	
    		if (empty($this->data)) {
    			if($this->Session->check('tokenreset')) $id=$this->Session->read('tokenreset');
    			if (!$id) {
    				$this->Session->setFlash('Invalid id for User');
    				$this->redirect('/users/index');
    			}
    			$this->data = $this->User->read(null, $id);
    		} else {				
    			$password=AuthComponent::password($this->request->data['User']['password']);
    			if ($this->User->updateAll(array('password' => '"'.$password.'"' ), array('id' => $id))) {
    				//delete session token and delete used ticket from table
    				$this->Session->delete('tokenreset');
    				$this->Session->setFlash('The User\'s Password has been updated');
    				$this->redirect('/');
    			} else {
    				$this->Session->setFlash('Please correct errors below.');
    			}
    		}
    	}
    	
    public function create_deal() {
    	
    	$this->layout = 'ajax';
    	if(!empty($this->data)) {
    		var_dump($this->User->saveAll($this->data));      
    		if($this->User->saveAll($this->data)) {                
    			$this->Session->setFlash("User Profile Updated!");            
    		}    
    	}     
    	//$this->data = $this->User->findById($this->Auth->user('id'));
    }
    	
}
