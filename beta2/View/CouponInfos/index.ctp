<div class="couponInfos index">
	<h2><?php echo __('Coupon Infos');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('rank');?></th>
			<th><?php echo $this->Paginator->sort('pageView');?></th>
			<th><?php echo $this->Paginator->sort('no_of_huggles');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($couponInfos as $couponInfo): ?>
	<tr>
		<td><?php echo h($couponInfo['CouponInfo']['id']); ?>&nbsp;</td>
		<td><?php echo h($couponInfo['CouponInfo']['rank']); ?>&nbsp;</td>
		<td><?php echo h($couponInfo['CouponInfo']['pageView']); ?>&nbsp;</td>
		<td><?php echo h($couponInfo['CouponInfo']['no_of_huggles']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $couponInfo['CouponInfo']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $couponInfo['CouponInfo']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $couponInfo['CouponInfo']['id']), null, __('Are you sure you want to delete # %s?', $couponInfo['CouponInfo']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Coupon Info'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Coupon Types'), array('controller' => 'coupon_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Coupon Type'), array('controller' => 'coupon_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
