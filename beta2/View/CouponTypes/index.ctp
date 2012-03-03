<div class="couponTypes index">
	<h2><?php echo __('Coupon Types');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('description');?></th>
			<th><?php echo $this->Paginator->sort('coupon_info_id');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($couponTypes as $couponType): ?>
	<tr>
		<td><?php echo h($couponType['CouponType']['id']); ?>&nbsp;</td>
		<td><?php echo h($couponType['CouponType']['name']); ?>&nbsp;</td>
		<td><?php echo h($couponType['CouponType']['description']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($couponType['CouponInfo']['id'], array('controller' => 'coupon_infos', 'action' => 'view', $couponType['CouponInfo']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $couponType['CouponType']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $couponType['CouponType']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $couponType['CouponType']['id']), null, __('Are you sure you want to delete # %s?', $couponType['CouponType']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Coupon Type'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Coupon Infos'), array('controller' => 'coupon_infos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Coupon Info'), array('controller' => 'coupon_infos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Campaigns'), array('controller' => 'campaigns', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Campaign'), array('controller' => 'campaigns', 'action' => 'add')); ?> </li>
	</ul>
</div>
