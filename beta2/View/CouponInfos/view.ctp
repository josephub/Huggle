<div class="couponInfos view">
<h2><?php  echo __('Coupon Info');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($couponInfo['CouponInfo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rank'); ?></dt>
		<dd>
			<?php echo h($couponInfo['CouponInfo']['rank']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PageView'); ?></dt>
		<dd>
			<?php echo h($couponInfo['CouponInfo']['pageView']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('No Of Huggles'); ?></dt>
		<dd>
			<?php echo h($couponInfo['CouponInfo']['no_of_huggles']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Coupon Info'), array('action' => 'edit', $couponInfo['CouponInfo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Coupon Info'), array('action' => 'delete', $couponInfo['CouponInfo']['id']), null, __('Are you sure you want to delete # %s?', $couponInfo['CouponInfo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Coupon Infos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Coupon Info'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Coupon Types'), array('controller' => 'coupon_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Coupon Type'), array('controller' => 'coupon_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Coupon Types');?></h3>
	<?php if (!empty($couponInfo['CouponType'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Coupon Info Id'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($couponInfo['CouponType'] as $couponType): ?>
		<tr>
			<td><?php echo $couponType['id'];?></td>
			<td><?php echo $couponType['name'];?></td>
			<td><?php echo $couponType['description'];?></td>
			<td><?php echo $couponType['coupon_info_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'coupon_types', 'action' => 'view', $couponType['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'coupon_types', 'action' => 'edit', $couponType['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'coupon_types', 'action' => 'delete', $couponType['id']), null, __('Are you sure you want to delete # %s?', $couponType['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Coupon Type'), array('controller' => 'coupon_types', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
