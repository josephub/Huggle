<div class="userCouponMappings index">
	<h2><?php echo __('User Coupon Mappings');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th><?php echo $this->Paginator->sort('coupon_id');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($userCouponMappings as $userCouponMapping): ?>
	<tr>
		<td><?php echo h($userCouponMapping['UserCouponMapping']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($userCouponMapping['User']['id'], array('controller' => 'users', 'action' => 'view', $userCouponMapping['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($userCouponMapping['Coupon']['id'], array('controller' => 'coupons', 'action' => 'view', $userCouponMapping['Coupon']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $userCouponMapping['UserCouponMapping']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $userCouponMapping['UserCouponMapping']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $userCouponMapping['UserCouponMapping']['id']), null, __('Are you sure you want to delete # %s?', $userCouponMapping['UserCouponMapping']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New User Coupon Mapping'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Coupons'), array('controller' => 'coupons', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Coupon'), array('controller' => 'coupons', 'action' => 'add')); ?> </li>
	</ul>
</div>
