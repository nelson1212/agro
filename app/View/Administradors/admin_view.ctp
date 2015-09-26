<div class="administradors view">
<h2><?php echo __('Administrador'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($administrador['Administrador']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Identificacion'); ?></dt>
		<dd>
			<?php echo h($administrador['Administrador']['identificacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombres'); ?></dt>
		<dd>
			<?php echo h($administrador['Administrador']['nombres']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apellidos'); ?></dt>
		<dd>
			<?php echo h($administrador['Administrador']['apellidos']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($administrador['Administrador']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefono'); ?></dt>
		<dd>
			<?php echo h($administrador['Administrador']['telefono']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Celular'); ?></dt>
		<dd>
			<?php echo h($administrador['Administrador']['celular']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comentarios'); ?></dt>
		<dd>
			<?php echo h($administrador['Administrador']['comentarios']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($administrador['User']['username'], array('controller' => 'users', 'action' => 'view', $administrador['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($administrador['Administrador']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($administrador['Administrador']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Administrador'), array('action' => 'edit', $administrador['Administrador']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Administrador'), array('action' => 'delete', $administrador['Administrador']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $administrador['Administrador']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Administradors'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Administrador'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Munipicio Accions'), array('controller' => 'munipicio_accions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Munipicio Accion'), array('controller' => 'munipicio_accions', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Munipicio Accions'); ?></h3>
	<?php if (!empty($administrador['MunipicioAccion'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Administrador Id'); ?></th>
		<th><?php echo __('Corregimiento Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($administrador['MunipicioAccion'] as $munipicioAccion): ?>
		<tr>
			<td><?php echo $munipicioAccion['id']; ?></td>
			<td><?php echo $munipicioAccion['administrador_id']; ?></td>
			<td><?php echo $munipicioAccion['corregimiento_id']; ?></td>
			<td><?php echo $munipicioAccion['created']; ?></td>
			<td><?php echo $munipicioAccion['updated']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'munipicio_accions', 'action' => 'view', $munipicioAccion['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'munipicio_accions', 'action' => 'edit', $munipicioAccion['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'munipicio_accions', 'action' => 'delete', $munipicioAccion['id']), array('confirm' => __('Are you sure you want to delete # %s?', $munipicioAccion['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Munipicio Accion'), array('controller' => 'munipicio_accions', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
