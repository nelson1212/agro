<div class="tipoAgriculturas form">
<?php echo $this->Form->create('TipoAgricultura'); ?>
	<fieldset>
		<legend><?php echo __('Edit Tipo Agricultura'); ?></legend>
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('TipoAgricultura.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('TipoAgricultura.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Tipo Agriculturas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
