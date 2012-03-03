<div class="stores form">
<?php echo $this->Form->create('Store');?>
	<fieldset>
		<legend><?php echo __('Add Store'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('created_at');
		echo $this->Form->input('updated_at');
		echo $this->Form->input('deleted_at');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Stores'), array('action' => 'index'));?></li>
	</ul>
</div>
