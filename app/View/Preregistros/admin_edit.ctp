<div class="preregistros form">
<?php echo $this->Form->create('Preregistro'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Preregistro'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('codigo');
		echo $this->Form->input('identificacion');
		echo $this->Form->input('email');
		echo $this->Form->input('nombres');
		echo $this->Form->input('apellidos');
		echo $this->Form->input('num_consulado');
		echo $this->Form->input('num_idoniedad');
		echo $this->Form->input('nit');
		echo $this->Form->input('rut');
		echo $this->Form->input('tipo');
		echo $this->Form->input('usuario_preregistro');
		echo $this->Form->input('user_id');
		echo $this->Form->input('estado');
		echo $this->Form->input('ubicacion');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Preregistro.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Preregistro.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Preregistros'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
