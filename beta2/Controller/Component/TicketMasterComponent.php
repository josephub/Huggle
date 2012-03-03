<?php
class TicketmasterComponent extends Component{
	public $sitename='Huggle.ph';
	public $linkdomain='localhost';
	//how many hours to honor token
	public $hours=24;
/*
 *  Startup - Link the component to the controller.
 */ 
    function startup($controller)
    {
        	$this->controller = $controller;    	
    }	

	function getExpirationDate(){
		$date=strftime('%c');
		$date=strtotime($date);
		$date+=($this->hours*60*60);
		$expired=date('Y-m-d H:i:s',$date);
		return $expired;
 
	}
 
	function createMessage($token){
 
		$ms='<html><head><title>Password Reset Request</title></head>';
		$ms='<body>Your email has been used in a password reset request at '.$this->sitename.'<br/>';
		$ms.='If you did not initiate this request, then ignore this message.<br/>';
		$ms.='  Copy the link below into your browser to reset your password.<br/>';
		$ms.='<a href="http://'.$this->linkdomain.'/huggle_cake/users/useticket/'.$token.'">Reset Password</a>';
		$ms.='</body></html>';
 
		$ms=wordwrap($ms,70);
 
		return $ms;
 
	}
 
	function purgeTickets(){
		$this->controller->Ticket->deleteAll('Ticket.expires <= now() LIMIT 1');
 
	}	
 
	/*
	 * actually for logical reason well be indiscrimnate and clean ALL tockets for this email
	 */
	function voidTicket($hash){
		$this->controller->Ticket->deleteAll(array('hash' => $hash));
	}
 
	function checkTicket($hash){
		$this->purgeTickets();
		$ret=false;
		$tick=$this->controller->Ticket->findByHash($hash);
 
		if(empty($tick)){
			//no more ticket			
		}else{
			$ret=$tick;
		}
		return $ret;
	}
}

