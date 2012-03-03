<div class="coupons view">
<h2><?php  echo __('Coupon');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($coupon['Coupon']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Code'); ?></dt>
		<dd>
			<?php echo h($coupon['Coupon']['code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('TaggingId'); ?></dt>
		<dd>
			<?php echo h($coupon['Coupon']['taggingId']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('IsAvailed'); ?></dt>
		<dd>
			<?php echo h($coupon['Coupon']['isAvailed']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CampaignId'); ?></dt>
		<dd>
			<?php echo h($coupon['Coupon']['campaignId']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Coupon'), array('action' => 'edit', $coupon['Coupon']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Coupon'), array('action' => 'delete', $coupon['Coupon']['id']), null, __('Are you sure you want to delete # %s?', $coupon['Coupon']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Coupons'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Coupon'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Coupon Mappings'), array('controller' => 'user_coupon_mappings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Coupon Mapping'), array('controller' => 'user_coupon_mappings', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related User Coupon Mappings');?></h3>
	<?php if (!empty($coupon['UserCouponMapping'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Coupon Id'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($coupon['UserCouponMapping'] as $userCouponMapping): ?>
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
