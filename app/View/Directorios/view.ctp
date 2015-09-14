<div class="directorios view">
<h2><?php echo __('Directorio'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($directorio['Directorio']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Titulo'); ?></dt>
		<dd>
			<?php echo h($directorio['Directorio']['titulo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
			<?php echo h($directorio['Directorio']['descripcion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefono'); ?></dt>
		<dd>
			<?php echo h($directorio['Directorio']['telefono']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($directorio['Directorio']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Direccion'); ?></dt>
		<dd>
			<?php echo h($directorio['Directorio']['direccion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Categoria Directorio'); ?></dt>
		<dd>
			<?php echo $this->Html->link($directorio['CategoriaDirectorio']['nombre'], array('controller' => 'categoria_directorios', 'action' => 'view', $directorio['CategoriaDirectorio']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($directorio['Directorio']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($directorio['Directorio']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Directorio'), array('action' => 'edit', $directorio['Directorio']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Directorio'), array('action' => 'delete', $directorio['Directorio']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $directorio['Directorio']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Directorios'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Directorio'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categoria Directorios'), array('controller' => 'categoria_directorios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Categoria Directorio'), array('controller' => 'categoria_directorios', 'action' => 'add')); ?> </li>
	</ul>
</div>
