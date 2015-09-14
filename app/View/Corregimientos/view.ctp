<div class="corregimientos view">
<h2><?php echo __('Corregimiento'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($corregimiento['Corregimiento']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($corregimiento['Corregimiento']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ciudad'); ?></dt>
		<dd>
			<?php echo $this->Html->link($corregimiento['Ciudad']['nombre'], array('controller' => 'ciudads', 'action' => 'view', $corregimiento['Ciudad']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Corregimiento'), array('action' => 'edit', $corregimiento['Corregimiento']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Corregimiento'), array('action' => 'delete', $corregimiento['Corregimiento']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $corregimiento['Corregimiento']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Corregimientos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Corregimiento'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ciudads'), array('controller' => 'ciudads', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ciudad'), array('controller' => 'ciudads', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Users'); ?></h3>
	<?php if (!empty($corregimiento['User'])): ?>
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
	<?php foreach ($corregimiento['User'] as $user): ?>
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
