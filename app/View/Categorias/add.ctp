<div class="categorias form">
<?php echo $this->Form->create('Categoria'); ?>
	<fieldset>
		<legend><?php echo __('Add Categoria'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Categorias'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Foros'), array('controller' => 'foros', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Foro'), array('controller' => 'foros', 'action' => 'add')); ?> </li>
	</ul>
</div>
