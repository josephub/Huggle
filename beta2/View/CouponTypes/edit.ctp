<div class="couponTypes form">
<?php echo $this->Form->create('CouponType');?>
	<fieldset>
		<legend><?php echo __('Edit Coupon Type'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('description');
		echo $this->Form->input('coupon_info_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('CouponType.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('CouponType.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Coupon Types'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Coupon Infos'), array('controller' => 'coupon_infos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Coupon Info'), array('controller' => 'coupon_infos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Campaigns'), array('controller' => 'campaigns', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Campaign'), array('controller' => 'campaigns', 'action' => 'add')); ?> </li>
	</ul>
</div>
