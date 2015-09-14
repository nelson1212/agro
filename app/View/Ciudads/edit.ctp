<div class="ciudads form">
<?php echo $this->Form->create('Ciudad'); ?>
	<fieldset>
		<legend><?php echo __('Edit Ciudad'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre');
		echo $this->Form->input('departamento_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Ciudad.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Ciudad.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Ciudads'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Departamentos'), array('controller' => 'departamentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Departamento'), array('controller' => 'departamentos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Corregimientos'), array('controller' => 'corregimientos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Corregimiento'), array('controller' => 'corregimientos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Veredas'), array('controller' => 'veredas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vereda'), array('controller' => 'veredas', 'action' => 'add')); ?> </li>
	</ul>
</div>
