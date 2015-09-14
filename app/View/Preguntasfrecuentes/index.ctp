<div class="preguntasfrecuentes index">
	<h2><?php echo __('Preguntasfrecuentes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('pregunta'); ?></th>
			<th><?php echo $this->Paginator->sort('respuesta'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('updated'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($preguntasfrecuentes as $preguntasfrecuente): ?>
	<tr>
		<td><?php echo h($preguntasfrecuente['Preguntasfrecuente']['id']); ?>&nbsp;</td>
		<td><?php echo h($preguntasfrecuente['Preguntasfrecuente']['pregunta']); ?>&nbsp;</td>
		<td><?php echo h($preguntasfrecuente['Preguntasfrecuente']['respuesta']); ?>&nbsp;</td>
		<td><?php echo h($preguntasfrecuente['Preguntasfrecuente']['created']); ?>&nbsp;</td>
		<td><?php echo h($preguntasfrecuente['Preguntasfrecuente']['updated']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $preguntasfrecuente['Preguntasfrecuente']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $preguntasfrecuente['Preguntasfrecuente']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $preguntasfrecuente['Preguntasfrecuente']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $preguntasfrecuente['Preguntasfrecuente']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Preguntasfrecuente'), array('action' => 'add')); ?></li>
	</ul>
</div>
