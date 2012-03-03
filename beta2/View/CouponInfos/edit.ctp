<div class="couponInfos form">
<?php echo $this->Form->create('CouponInfo');?>
	<fieldset>
		<legend><?php echo __('Edit Coupon Info'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('rank');
		echo $this->Form->input('pageView');
		echo $this->Form->input('no_of_huggles');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('CouponInfo.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('CouponInfo.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Coupon Infos'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Coupon Types'), array('controller' => 'coupon_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Coupon Type'), array('controller' => 'coupon_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
