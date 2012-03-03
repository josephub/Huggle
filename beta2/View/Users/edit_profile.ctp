<div id="">
	<h2>Browsing <span>&raquo;</span> <cite>Profile</cite></h2>
	<?php
		echo $this->Form->create('User', array('action' => '/edit_profile'));
		
	?>
	<span style="color:red; font-weight:bold">
	<?php
		echo $this->Session->flash();
	?>
	</span>
	<?php	
		echo $this->Form->input('last_name');
        echo $this->Form->input('first_name');
        echo $this->Form->input('middle_initial');
        echo $this->Form->input('email');
        echo $this->Form->input('address');
        echo $this->Form->input('cell_no');
        echo $this->Form->input('username');
        //echo $this->Form->input('password');
        
        echo $this->Form->submit('Edit', array('class' => 'submitx'));

		echo $this->Form->end();?>
</div>