<div class="productobases index">
	<h2><?php echo __('Productobases'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre_cientifico'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre_comun'); ?></th>
			<th><?php echo $this->Paginator->sort('variedad_id'); ?></th>
			<th><?php echo $this->Paginator->sort('foto_por_defecto'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($productobases as $productobase): ?>
	<tr>
		<td><?php echo h($productobase['Productobase']['id']); ?>&nbsp;</td>
		<td><?php echo h($productobase['Productobase']['nombre_cientifico']); ?>&nbsp;</td>
		<td><?php echo h($productobase['Productobase']['nombre_comun']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($productobase['Variedad']['nombre'], array('controller' => 'variedads', 'action' => 'view', $productobase['Variedad']['id'])); ?>
		</td>
		<td><?php echo h($productobase['Productobase']['foto_por_defecto']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $productobase['Productobase']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $productobase['Productobase']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $productobase['Productobase']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $productobase['Productobase']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Productobase'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Variedads'), array('controller' => 'variedads', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Variedad'), array('controller' => 'variedads', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Productos'), array('controller' => 'productos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Producto'), array('controller' => 'productos', 'action' => 'add')); ?> </li>
	</ul>
</div>
