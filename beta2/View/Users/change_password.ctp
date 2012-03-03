<div id="">
	<h2>Browsing <span>&raquo;</span> <cite>Change Password</cite></h2>
	<?php
		echo $this->Form->create('User', array('action' => '/change_password'));
		
	?>
	<span style="color:red; font-weight:bold">
	<?php
		echo $this->Session->flash();
		if (!empty($validationErrorsArray))
			var_dump($validationErrorsArray);
	?>
	</span>
	<?php	
        echo $this->Form->input('password', array('label' => 'Old Password'));
        echo $this->Form->input('new_password', array('type' => 'password'));
        echo $this->Form->input('confirm_password', array('type' => 'password', 'label' => 'Confirm New Password'));
        
        echo $this->Form->submit('Change', array('class' => 'submitx'));

		echo $this->Form->end();?>
</div>