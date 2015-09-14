<div class="categoriaNovedads form">
<?php echo $this->Form->create('CategoriaNovedad'); ?>
	<fieldset>
		<legend><?php echo __('Add Categoria Novedad'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Categoria Novedads'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Novedads'), array('controller' => 'novedads', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Novedad'), array('controller' => 'novedads', 'action' => 'add')); ?> </li>
	</ul>
</div>
