<div class="directorios index">
	<h2><?php echo __('Directorios'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('titulo'); ?></th>
			<th><?php echo $this->Paginator->sort('descripcion'); ?></th>
			<th><?php echo $this->Paginator->sort('telefono'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('direccion'); ?></th>
			<th><?php echo $this->Paginator->sort('categoria_directorio_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('updated'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($directorios as $directorio): ?>
	<tr>
		<td><?php echo h($directorio['Directorio']['id']); ?>&nbsp;</td>
		<td><?php echo h($directorio['Directorio']['titulo']); ?>&nbsp;</td>
		<td><?php echo h($directorio['Directorio']['descripcion']); ?>&nbsp;</td>
		<td><?php echo h($directorio['Directorio']['telefono']); ?>&nbsp;</td>
		<td><?php echo h($directorio['Directorio']['email']); ?>&nbsp;</td>
		<td><?php echo h($directorio['Directorio']['direccion']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($directorio['CategoriaDirectorio']['nombre'], array('controller' => 'categoria_directorios', 'action' => 'view', $directorio['CategoriaDirectorio']['id'])); ?>
		</td>
		<td><?php echo h($directorio['Directorio']['created']); ?>&nbsp;</td>
		<td><?php echo h($directorio['Directorio']['updated']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $directorio['Directorio']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $directorio['Directorio']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $directorio['Directorio']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $directorio['Directorio']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Directorio'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Categoria Directorios'), array('controller' => 'categoria_directorios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Categoria Directorio'), array('controller' => 'categoria_directorios', 'action' => 'add')); ?> </li>
	</ul>
</div>
