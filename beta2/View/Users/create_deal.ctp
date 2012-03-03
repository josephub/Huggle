<div id="">
	<h2>Browsing <span>&raquo;</span> <cite>Create Deal</cite></h2>
	<?php
		echo $this->Form->create('User', array('enctype' => 'multipart/form-data', 'action' => 'create_deal'));	
	?>
	<span style="color:red; font-weight:bold">
	<?php
		echo $this->Session->flash();
		if (!empty($validationErrorsArray))
			var_dump($validationErrorsArray);
	?>
	</span>
	<?php	
        echo $this->Form->input('name', array('label' => 'Title'));
        echo $this->Form->input('description', array('label' => 'Deal Summary'));
        echo $this->Form->input('start_date', array('label' => 'Start Date'));
        echo $this->Form->input('end_date', array('label' => 'End Date'));
        echo $this->Form->input('details', array('label' => 'Deal Details', 'type' => 'textarea'));
        echo $this->Form->input('image', array('label' => 'Image', 'type' => 'file'));
        
        echo $this->Form->submit('Submit', array('class' => 'submitx'));

		echo $this->Form->end();?>
</div>