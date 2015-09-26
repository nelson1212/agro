<div class="administradors form">
<?php echo $this->Form->create('Administrador'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Administrador'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('identificacion');
		echo $this->Form->input('nombres');
		echo $this->Form->input('apellidos');
		echo $this->Form->input('email');
		echo $this->Form->input('telefono');
		echo $this->Form->input('celular');
		echo $this->Form->input('comentarios');
		echo $this->Form->input('user_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Administrador.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Administrador.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Administradors'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Munipicio Accions'), array('controller' => 'munipicio_accions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Munipicio Accion'), array('controller' => 'munipicio_accions', 'action' => 'add')); ?> </li>
	</ul>
</div>
