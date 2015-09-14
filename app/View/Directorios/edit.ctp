<div class="directorios form">
<?php echo $this->Form->create('Directorio'); ?>
	<fieldset>
		<legend><?php echo __('Edit Directorio'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('titulo');
		echo $this->Form->input('descripcion');
		echo $this->Form->input('telefono');
		echo $this->Form->input('email');
		echo $this->Form->input('direccion');
		echo $this->Form->input('categoria_directorio_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Directorio.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Directorio.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Directorios'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Categoria Directorios'), array('controller' => 'categoria_directorios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Categoria Directorio'), array('controller' => 'categoria_directorios', 'action' => 'add')); ?> </li>
	</ul>
</div>
