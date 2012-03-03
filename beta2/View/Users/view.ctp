<div class="users view">
<h2><?php  echo __('User');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('LastName'); ?></dt>
		<dd>
			<?php echo h($user['User']['lastName']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('MiddleName'); ?></dt>
		<dd>
			<?php echo h($user['User']['middleName']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FirstName'); ?></dt>
		<dd>
			<?php echo h($user['User']['firstName']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($user['User']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CellNo'); ?></dt>
		<dd>
			<?php echo h($user['User']['cellNo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('IsAdmin'); ?></dt>
		<dd>
			<?php echo h($user['User']['isAdmin']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Coupon Mappings'), array('controller' => 'user_coupon_mappings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Coupon Mapping'), array('controller' => 'user_coupon_mappings', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related User Coupon Mappings');?></h3>
	<?php if (!empty($user['UserCouponMapping'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Coupon Id'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['UserCouponMapping'] as $userCouponMapping): ?>
		<tr>
			<td><?php echo $userCouponMapping['id'];?></td>
			<td><?php echo $userCouponMapping['user_id'];?></td>
			<td><?php echo $userCouponMapping['coupon_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'user_coupon_mappings', 'action' => 'view', $userCouponMapping['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'user_coupon_mappings', 'action' => 'edit', $userCouponMapping['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'user_coupon_mappings', 'action' => 'delete', $userCouponMapping['id']), null, __('Are you sure you want to delete # %s?', $userCouponMapping['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User Coupon Mapping'), array('controller' => 'user_coupon_mappings', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
