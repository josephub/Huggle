<div class="couponTypes view">
<h2><?php  echo __('Coupon Type');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($couponType['CouponType']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($couponType['CouponType']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($couponType['CouponType']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Coupon Info'); ?></dt>
		<dd>
			<?php echo $this->Html->link($couponType['CouponInfo']['id'], array('controller' => 'coupon_infos', 'action' => 'view', $couponType['CouponInfo']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Coupon Type'), array('action' => 'edit', $couponType['CouponType']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Coupon Type'), array('action' => 'delete', $couponType['CouponType']['id']), null, __('Are you sure you want to delete # %s?', $couponType['CouponType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Coupon Types'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Coupon Type'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Coupon Infos'), array('controller' => 'coupon_infos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Coupon Info'), array('controller' => 'coupon_infos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Campaigns'), array('controller' => 'campaigns', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Campaign'), array('controller' => 'campaigns', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Campaigns');?></h3>
	<?php if (!empty($couponType['Campaign'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Coupon Type Id'); ?></th>
		<th><?php echo __('Start Date'); ?></th>
		<th><?php echo __('End Date'); ?></th>
		<th><?php echo __('Image'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($couponType['Campaign'] as $campaign): ?>
		<tr>
			<td><?php echo $campaign['id'];?></td>
			<td><?php echo $campaign['coupon_type_id'];?></td>
			<td><?php echo $campaign['start_date'];?></td>
			<td><?php echo $campaign['end_date'];?></td>
			<td><?php echo $campaign['image'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'campaigns', 'action' => 'view', $campaign['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'campaigns', 'action' => 'edit', $campaign['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'campaigns', 'action' => 'delete', $campaign['id']), null, __('Are you sure you want to delete # %s?', $campaign['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Campaign'), array('controller' => 'campaigns', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
