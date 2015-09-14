<div class="novedads form">
<?php echo $this->Form->create('Novedad'); ?>
	<fieldset>
		<legend><?php echo __('Add Novedad'); ?></legend>
	<?php
		echo $this->Form->input('titulo');
		echo $this->Form->input('texto');
		echo $this->Form->input('user_id');
		echo $this->Form->input('foto');
		echo $this->Form->input('categoria_novedad_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Novedads'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categoria Novedads'), array('controller' => 'categoria_novedads', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Categoria Novedad'), array('controller' => 'categoria_novedads', 'action' => 'add')); ?> </li>
	</ul>
</div>
