<div class="administradors index">
	<h2><?php echo __('Administradors'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('identificacion'); ?></th>
			<th><?php echo $this->Paginator->sort('nombres'); ?></th>
			<th><?php echo $this->Paginator->sort('apellidos'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('telefono'); ?></th>
			<th><?php echo $this->Paginator->sort('celular'); ?></th>
			<th><?php echo $this->Paginator->sort('comentarios'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('updated'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($administradors as $administrador): ?>
	<tr>
		<td><?php echo h($administrador['Administrador']['id']); ?>&nbsp;</td>
		<td><?php echo h($administrador['Administrador']['identificacion']); ?>&nbsp;</td>
		<td><?php echo h($administrador['Administrador']['nombres']); ?>&nbsp;</td>
		<td><?php echo h($administrador['Administrador']['apellidos']); ?>&nbsp;</td>
		<td><?php echo h($administrador['Administrador']['email']); ?>&nbsp;</td>
		<td><?php echo h($administrador['Administrador']['telefono']); ?>&nbsp;</td>
		<td><?php echo h($administrador['Administrador']['celular']); ?>&nbsp;</td>
		<td><?php echo h($administrador['Administrador']['comentarios']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($administrador['User']['username'], array('controller' => 'users', 'action' => 'view', $administrador['User']['id'])); ?>
		</td>
		<td><?php echo h($administrador['Administrador']['created']); ?>&nbsp;</td>
		<td><?php echo h($administrador['Administrador']['updated']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $administrador['Administrador']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $administrador['Administrador']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $administrador['Administrador']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $administrador['Administrador']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Administrador'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Munipicio Accions'), array('controller' => 'munipicio_accions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Munipicio Accion'), array('controller' => 'munipicio_accions', 'action' => 'add')); ?> </li>
	</ul>
</div>
