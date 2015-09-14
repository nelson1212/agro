<div class="comentarios form">
<?php echo $this->Form->create('Comentario'); ?>
	<fieldset>
		<legend><?php echo __('Add Comentario'); ?></legend>
	<?php
		echo $this->Form->input('tema_id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('comentario');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Comentarios'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Temas'), array('controller' => 'temas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tema'), array('controller' => 'temas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
