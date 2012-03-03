<div class="users form">
<?php echo $this->Form->create('User');?>
	<fieldset>
		<legend><?php echo __('Edit User'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('lastName');
		echo $this->Form->input('middleName');
		echo $this->Form->input('firstName');
		echo $this->Form->input('address');
		echo $this->Form->input('cellNo');
		echo $this->Form->input('isAdmin');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('User.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('User.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List User Coupon Mappings'), array('controller' => 'user_coupon_mappings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Coupon Mapping'), array('controller' => 'user_coupon_mappings', 'action' => 'add')); ?> </li>
	</ul>
</div>
