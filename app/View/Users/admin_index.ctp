<div class="users index">
	<h2><?php echo __('Users'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('identificacion'); ?></th>
			<th><?php echo $this->Paginator->sort('nombres'); ?></th>
			<th><?php echo $this->Paginator->sort('apellidos'); ?></th>
			<th><?php echo $this->Paginator->sort('foto'); ?></th>
			<th><?php echo $this->Paginator->sort('vereda_id'); ?></th>
			<th><?php echo $this->Paginator->sort('departamento_id'); ?></th>
			<th><?php echo $this->Paginator->sort('paiss_id'); ?></th>
			<th><?php echo $this->Paginator->sort('ciudad_id'); ?></th>
			<th><?php echo $this->Paginator->sort('corregimiento_id'); ?></th>
			<th><?php echo $this->Paginator->sort('tipo_agricultura_id'); ?></th>
			<th><?php echo $this->Paginator->sort('username'); ?></th>
			<th><?php echo $this->Paginator->sort('password'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('rol_id'); ?></th>
			<th><?php echo $this->Paginator->sort('google_map_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('updated'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($users as $user): ?>
	<tr>
		<td><?php echo h($user['User']['id']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['identificacion']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['nombres']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['apellidos']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['foto']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($user['Vereda']['nombre'], array('controller' => 'veredas', 'action' => 'view', $user['Vereda']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($user['Departamento']['nombre'], array('controller' => 'departamentos', 'action' => 'view', $user['Departamento']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($user['Paiss']['nombre'], array('controller' => 'paisses', 'action' => 'view', $user['Paiss']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($user['Ciudad']['nombre'], array('controller' => 'ciudads', 'action' => 'view', $user['Ciudad']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($user['Corregimiento']['nombre'], array('controller' => 'corregimientos', 'action' => 'view', $user['Corregimiento']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($user['TipoAgricultura']['nombre'], array('controller' => 'tipo_agriculturas', 'action' => 'view', $user['TipoAgricultura']['id'])); ?>
		</td>
		<td><?php echo h($user['User']['username']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['password']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['email']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($user['Rol']['nombre'], array('controller' => 'rols', 'action' => 'view', $user['Rol']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($user['GoogleMap']['id'], array('controller' => 'google_maps', 'action' => 'view', $user['GoogleMap']['id'])); ?>
		</td>
		<td><?php echo h($user['User']['created']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['updated']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $user['User']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $user['User']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $user['User']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $user['User']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Veredas'), array('controller' => 'veredas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vereda'), array('controller' => 'veredas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Departamentos'), array('controller' => 'departamentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Departamento'), array('controller' => 'departamentos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Paisses'), array('controller' => 'paisses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Paiss'), array('controller' => 'paisses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ciudads'), array('controller' => 'ciudads', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ciudad'), array('controller' => 'ciudads', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Corregimientos'), array('controller' => 'corregimientos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Corregimiento'), array('controller' => 'corregimientos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipo Agriculturas'), array('controller' => 'tipo_agriculturas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo Agricultura'), array('controller' => 'tipo_agriculturas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Rols'), array('controller' => 'rols', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rol'), array('controller' => 'rols', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Google Maps'), array('controller' => 'google_maps', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Google Map'), array('controller' => 'google_maps', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Comentarios'), array('controller' => 'comentarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comentario'), array('controller' => 'comentarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Eventos'), array('controller' => 'eventos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evento'), array('controller' => 'eventos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Foros'), array('controller' => 'foros', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Foro'), array('controller' => 'foros', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Interaccions'), array('controller' => 'interaccions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Interaccion'), array('controller' => 'interaccions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Novedads'), array('controller' => 'novedads', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Novedad'), array('controller' => 'novedads', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Productos Usuarios'), array('controller' => 'productos_usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Productos Usuario'), array('controller' => 'productos_usuarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Temas'), array('controller' => 'temas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tema'), array('controller' => 'temas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Certificacions'), array('controller' => 'user_certificacions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Certificacion'), array('controller' => 'user_certificacions', 'action' => 'add')); ?> </li>
	</ul>
</div>
