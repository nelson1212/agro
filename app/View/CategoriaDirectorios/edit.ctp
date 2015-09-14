<div class="categoriaDirectorios form">
<?php echo $this->Form->create('CategoriaDirectorio'); ?>
	<fieldset>
		<legend><?php echo __('Edit Categoria Directorio'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('CategoriaDirectorio.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('CategoriaDirectorio.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Categoria Directorios'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Directorios'), array('controller' => 'directorios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Directorio'), array('controller' => 'directorios', 'action' => 'add')); ?> </li>
	</ul>
</div>
