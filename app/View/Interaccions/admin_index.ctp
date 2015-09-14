<div class="interaccions index">
	<h2><?php echo __('Interaccions'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('mensaje'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('producto_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('updated'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($interaccions as $interaccion): ?>
	<tr>
		<td><?php echo h($interaccion['Interaccion']['id']); ?>&nbsp;</td>
		<td><?php echo h($interaccion['Interaccion']['mensaje']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($interaccion['User']['nombres'], array('controller' => 'users', 'action' => 'view', $interaccion['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($interaccion['Producto']['nombre_cientifico'], array('controller' => 'productos', 'action' => 'view', $interaccion['Producto']['id'])); ?>
		</td>
		<td><?php echo h($interaccion['Interaccion']['created']); ?>&nbsp;</td>
		<td><?php echo h($interaccion['Interaccion']['updated']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $interaccion['Interaccion']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $interaccion['Interaccion']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $interaccion['Interaccion']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $interaccion['Interaccion']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
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
		<li><?php echo $this->Html->link(__('New Interaccion'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Productos'), array('controller' => 'productos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Producto'), array('controller' => 'productos', 'action' => 'add')); ?> </li>
	</ul>
</div>
