<div class="preregistros index">
	<h2><?php echo __('Preregistros'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('codigo'); ?></th>
			<th><?php echo $this->Paginator->sort('identificacion'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('nombres'); ?></th>
			<th><?php echo $this->Paginator->sort('apellidos'); ?></th>
			<th><?php echo $this->Paginator->sort('num_consulado'); ?></th>
			<th><?php echo $this->Paginator->sort('num_idoniedad'); ?></th>
			<th><?php echo $this->Paginator->sort('nit'); ?></th>
			<th><?php echo $this->Paginator->sort('rut'); ?></th>
			<th><?php echo $this->Paginator->sort('tipo'); ?></th>
			<th><?php echo $this->Paginator->sort('usuario_preregistro'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('estado'); ?></th>
			<th><?php echo $this->Paginator->sort('ubicacion'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('updated'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($preregistros as $preregistro): ?>
	<tr>
		<td><?php echo h($preregistro['Preregistro']['id']); ?>&nbsp;</td>
		<td><?php echo h($preregistro['Preregistro']['codigo']); ?>&nbsp;</td>
		<td><?php echo h($preregistro['Preregistro']['identificacion']); ?>&nbsp;</td>
		<td><?php echo h($preregistro['Preregistro']['email']); ?>&nbsp;</td>
		<td><?php echo h($preregistro['Preregistro']['nombres']); ?>&nbsp;</td>
		<td><?php echo h($preregistro['Preregistro']['apellidos']); ?>&nbsp;</td>
		<td><?php echo h($preregistro['Preregistro']['num_consulado']); ?>&nbsp;</td>
		<td><?php echo h($preregistro['Preregistro']['num_idoniedad']); ?>&nbsp;</td>
		<td><?php echo h($preregistro['Preregistro']['nit']); ?>&nbsp;</td>
		<td><?php echo h($preregistro['Preregistro']['rut']); ?>&nbsp;</td>
		<td><?php echo h($preregistro['Preregistro']['tipo']); ?>&nbsp;</td>
		<td><?php echo h($preregistro['Preregistro']['usuario_preregistro']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($preregistro['User']['nombres'], array('controller' => 'users', 'action' => 'view', $preregistro['User']['id'])); ?>
		</td>
		<td><?php echo h($preregistro['Preregistro']['estado']); ?>&nbsp;</td>
		<td><?php echo h($preregistro['Preregistro']['ubicacion']); ?>&nbsp;</td>
		<td><?php echo h($preregistro['Preregistro']['created']); ?>&nbsp;</td>
		<td><?php echo h($preregistro['Preregistro']['updated']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $preregistro['Preregistro']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $preregistro['Preregistro']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $preregistro['Preregistro']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $preregistro['Preregistro']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Preregistro'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
