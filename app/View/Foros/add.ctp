<div class="foros form">
<?php echo $this->Form->create('Foro'); ?>
	<fieldset>
		<legend><?php echo __('Add Foro'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
		echo $this->Form->input('descripcion');
		echo $this->Form->input('user_id');
		echo $this->Form->input('estado');
		echo $this->Form->input('categoria_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Foros'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categorias'), array('controller' => 'categorias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Categoria'), array('controller' => 'categorias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Foro Temas'), array('controller' => 'foro_temas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Foro Tema'), array('controller' => 'foro_temas', 'action' => 'add')); ?> </li>
	</ul>
</div>
