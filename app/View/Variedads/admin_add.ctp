<div class="variedads form">
<?php echo $this->Form->create('Variedad'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Variedad'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Variedads'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Productobases'), array('controller' => 'productobases', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Productobase'), array('controller' => 'productobases', 'action' => 'add')); ?> </li>
	</ul>
</div>
