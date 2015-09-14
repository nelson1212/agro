<div class="eventos index">
	<h2><?php echo __('Eventos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('titulo'); ?></th>
			<th><?php echo $this->Paginator->sort('descripcion'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha_evento'); ?></th>
			<th><?php echo $this->Paginator->sort('estado'); ?></th>
			<th><?php echo $this->Paginator->sort('foto'); ?></th>
			<th><?php echo $this->Paginator->sort('google_map_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('updated'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($eventos as $evento): ?>
	<tr>
		<td><?php echo h($evento['Evento']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($evento['User']['nombres'], array('controller' => 'users', 'action' => 'view', $evento['User']['id'])); ?>
		</td>
		<td><?php echo h($evento['Evento']['titulo']); ?>&nbsp;</td>
		<td><?php echo h($evento['Evento']['descripcion']); ?>&nbsp;</td>
		<td><?php echo h($evento['Evento']['fecha_evento']); ?>&nbsp;</td>
		<td><?php echo h($evento['Evento']['estado']); ?>&nbsp;</td>
		<td><?php echo h($evento['Evento']['foto']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($evento['GoogleMap']['id'], array('controller' => 'google_maps', 'action' => 'view', $evento['GoogleMap']['id'])); ?>
		</td>
		<td><?php echo h($evento['Evento']['created']); ?>&nbsp;</td>
		<td><?php echo h($evento['Evento']['updated']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $evento['Evento']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $evento['Evento']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $evento['Evento']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $evento['Evento']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Evento'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Google Maps'), array('controller' => 'google_maps', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Google Map'), array('controller' => 'google_maps', 'action' => 'add')); ?> </li>
	</ul>
</div>
