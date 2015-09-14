<div class="ciudads view">
<h2><?php echo __('Ciudad'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($ciudad['Ciudad']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($ciudad['Ciudad']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Departamento'); ?></dt>
		<dd>
			<?php echo $this->Html->link($ciudad['Departamento']['nombre'], array('controller' => 'departamentos', 'action' => 'view', $ciudad['Departamento']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Ciudad'), array('action' => 'edit', $ciudad['Ciudad']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Ciudad'), array('action' => 'delete', $ciudad['Ciudad']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $ciudad['Ciudad']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Ciudads'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ciudad'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Departamentos'), array('controller' => 'departamentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Departamento'), array('controller' => 'departamentos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Corregimientos'), array('controller' => 'corregimientos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Corregimiento'), array('controller' => 'corregimientos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Veredas'), array('controller' => 'veredas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vereda'), array('controller' => 'veredas', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Corregimientos'); ?></h3>
	<?php if (!empty($ciudad['Corregimiento'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Ciudad Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($ciudad['Corregimiento'] as $corregimiento): ?>
		<tr>
			<td><?php echo $corregimiento['id']; ?></td>
			<td><?php echo $corregimiento['nombre']; ?></td>
			<td><?php echo $corregimiento['ciudad_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'corregimientos', 'action' => 'view', $corregimiento['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'corregimientos', 'action' => 'edit', $corregimiento['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'corregimientos', 'action' => 'delete', $corregimiento['id']), array('confirm' => __('Are you sure you want to delete # %s?', $corregimiento['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Corregimiento'), array('controller' => 'corregimientos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Users'); ?></h3>
	<?php if (!empty($ciudad['User'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Identificacion'); ?></th>
		<th><?php echo __('Nombres'); ?></th>
		<th><?php echo __('Apellidos'); ?></th>
		<th><?php echo __('Foto'); ?></th>
		<th><?php echo __('Vereda Id'); ?></th>
		<th><?php echo __('Departamento Id'); ?></th>
		<th><?php echo __('Pais Id'); ?></th>
		<th><?php echo __('Ciudad Id'); ?></th>
		<th><?php echo __('Corregimiento Id'); ?></th>
		<th><?php echo __('Tipo Agricultura Id'); ?></th>
		<th><?php echo __('Username'); ?></th>
		<th><?php echo __('Password'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Rol Id'); ?></th>
		<th><?php echo __('Google Map Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($ciudad['User'] as $user): ?>
		<tr>
			<td><?php echo $user['id']; ?></td>
			<td><?php echo $user['identificacion']; ?></td>
			<td><?php echo $user['nombres']; ?></td>
			<td><?php echo $user['apellidos']; ?></td>
			<td><?php echo $user['foto']; ?></td>
			<td><?php echo $user['vereda_id']; ?></td>
			<td><?php echo $user['departamento_id']; ?></td>
			<td><?php echo $user['pais_id']; ?></td>
			<td><?php echo $user['ciudad_id']; ?></td>
			<td><?php echo $user['corregimiento_id']; ?></td>
			<td><?php echo $user['tipo_agricultura_id']; ?></td>
			<td><?php echo $user['username']; ?></td>
			<td><?php echo $user['password']; ?></td>
			<td><?php echo $user['email']; ?></td>
			<td><?php echo $user['rol_id']; ?></td>
			<td><?php echo $user['google_map_id']; ?></td>
			<td><?php echo $user['created']; ?></td>
			<td><?php echo $user['updated']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'users', 'action' => 'view', $user['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'users', 'action' => 'edit', $user['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'users', 'action' => 'delete', $user['id']), array('confirm' => __('Are you sure you want to delete # %s?', $user['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Veredas'); ?></h3>
	<?php if (!empty($ciudad['Vereda'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Ciudad Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($ciudad['Vereda'] as $vereda): ?>
		<tr>
			<td><?php echo $vereda['id']; ?></td>
			<td><?php echo $vereda['nombre']; ?></td>
			<td><?php echo $vereda['ciudad_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'veredas', 'action' => 'view', $vereda['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'veredas', 'action' => 'edit', $vereda['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'veredas', 'action' => 'delete', $vereda['id']), array('confirm' => __('Are you sure you want to delete # %s?', $vereda['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Vereda'), array('controller' => 'veredas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
