<div class="novedads index">
	<h2><?php echo __('Novedads'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('titulo'); ?></th>
			<th><?php echo $this->Paginator->sort('texto'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('foto'); ?></th>
			<th><?php echo $this->Paginator->sort('categoria_novedad_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('updated'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($novedads as $novedad): ?>
	<tr>
		<td><?php echo h($novedad['Novedad']['id']); ?>&nbsp;</td>
		<td><?php echo h($novedad['Novedad']['titulo']); ?>&nbsp;</td>
		<td><?php echo h($novedad['Novedad']['texto']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($novedad['User']['nombres'], array('controller' => 'users', 'action' => 'view', $novedad['User']['id'])); ?>
		</td>
		<td><?php echo h($novedad['Novedad']['foto']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($novedad['CategoriaNovedad']['nombre'], array('controller' => 'categoria_novedads', 'action' => 'view', $novedad['CategoriaNovedad']['id'])); ?>
		</td>
		<td><?php echo h($novedad['Novedad']['created']); ?>&nbsp;</td>
		<td><?php echo h($novedad['Novedad']['updated']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $novedad['Novedad']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $novedad['Novedad']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $novedad['Novedad']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $novedad['Novedad']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Novedad'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categoria Novedads'), array('controller' => 'categoria_novedads', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Categoria Novedad'), array('controller' => 'categoria_novedads', 'action' => 'add')); ?> </li>
	</ul>
</div>
