<div class="campaigns form">
<?php echo $this->Form->create('Campaign');?>
	<fieldset>
		<legend><?php echo __('Add Campaign'); ?></legend>
	<?php
		echo $this->Form->input('coupon_type_id');
		echo $this->Form->input('start_date');
		echo $this->Form->input('end_date');
		echo $this->Form->input('image');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Campaigns'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Coupon Types'), array('controller' => 'coupon_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Coupon Type'), array('controller' => 'coupon_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
