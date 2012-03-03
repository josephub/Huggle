<div class="userCouponMappings view">
<h2><?php  echo __('User Coupon Mapping');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($userCouponMapping['UserCouponMapping']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($userCouponMapping['User']['id'], array('controller' => 'users', 'action' => 'view', $userCouponMapping['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Coupon'); ?></dt>
		<dd>
			<?php echo $this->Html->link($userCouponMapping['Coupon']['id'], array('controller' => 'coupons', 'action' => 'view', $userCouponMapping['Coupon']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User Coupon Mapping'), array('action' => 'edit', $userCouponMapping['UserCouponMapping']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User Coupon Mapping'), array('action' => 'delete', $userCouponMapping['UserCouponMapping']['id']), null, __('Are you sure you want to delete # %s?', $userCouponMapping['UserCouponMapping']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List User Coupon Mappings'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Coupon Mapping'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Coupons'), array('controller' => 'coupons', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Coupon'), array('controller' => 'coupons', 'action' => 'add')); ?> </li>
	</ul>
</div>
