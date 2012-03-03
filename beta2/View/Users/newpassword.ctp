<div id="view_page">
       
	<h2>Browsing <span>&raquo;</span> <cite>New Password</cite></h2>
	<?php
            echo $this->Form->create('User', array('action'=>'newpassword'));
		
	?>
	<span style="color:red; font-weight:bold">
	<?php
		echo $this->Session->flash();
		if (!empty($validationErrorsArray))
			var_dump($validationErrorsArray);
	?>
	</span>
	<?php	
        echo $this->Form->input('password', array('type' => 'password'));
        echo $this->Form->input('confirmpassword', array('type' => 'password', 'label' => 'Confirm New Password'));
        
        echo $this->Form->submit('Change', array('class' => 'submitx'));

        echo $this->Form->end();?>
</div>

