<div class="variedads view">
<h2><?php echo __('Variedad'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($variedad['Variedad']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($variedad['Variedad']['nombre']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Variedad'), array('action' => 'edit', $variedad['Variedad']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Variedad'), array('action' => 'delete', $variedad['Variedad']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $variedad['Variedad']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Variedads'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Variedad'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Productobases'), array('controller' => 'productobases', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Productobase'), array('controller' => 'productobases', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Productobases'); ?></h3>
	<?php if (!empty($variedad['Productobase'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre Cientifico'); ?></th>
		<th><?php echo __('Nombre Comun'); ?></th>
		<th><?php echo __('Variedad Id'); ?></th>
		<th><?php echo __('Foto Por Defecto'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($variedad['Productobase'] as $productobase): ?>
		<tr>
			<td><?php echo $productobase['id']; ?></td>
			<td><?php echo $productobase['nombre_cientifico']; ?></td>
			<td><?php echo $productobase['nombre_comun']; ?></td>
			<td><?php echo $productobase['variedad_id']; ?></td>
			<td><?php echo $productobase['foto_por_defecto']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'productobases', 'action' => 'view', $productobase['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'productobases', 'action' => 'edit', $productobase['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'productobases', 'action' => 'delete', $productobase['id']), array('confirm' => __('Are you sure you want to delete # %s?', $productobase['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Productobase'), array('controller' => 'productobases', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
