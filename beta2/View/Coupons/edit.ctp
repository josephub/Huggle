<div class="coupons form">
<?php echo $this->Form->create('Coupon');?>
	<fieldset>
		<legend><?php echo __('Edit Coupon'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('code');
		echo $this->Form->input('taggingId');
		echo $this->Form->input('isAvailed');
		echo $this->Form->input('campaignId');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Coupon.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Coupon.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Coupons'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List User Coupon Mappings'), array('controller' => 'user_coupon_mappings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Coupon Mapping'), array('controller' => 'user_coupon_mappings', 'action' => 'add')); ?> </li>
	</ul>
</div>
