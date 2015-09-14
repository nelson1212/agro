<div class="madurezs form">
<?php echo $this->Form->create('Madurez'); ?>
	<fieldset>
		<legend><?php echo __('Edit Madurez'); ?></legend>
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Madurez.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Madurez.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Madurezs'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Productos'), array('controller' => 'productos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Producto'), array('controller' => 'productos', 'action' => 'add')); ?> </li>
	</ul>
</div>
