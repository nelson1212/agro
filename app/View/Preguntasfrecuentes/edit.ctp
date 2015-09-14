<div class="preguntasfrecuentes form">
<?php echo $this->Form->create('Preguntasfrecuente'); ?>
	<fieldset>
		<legend><?php echo __('Edit Preguntasfrecuente'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('pregunta');
		echo $this->Form->input('respuesta');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Preguntasfrecuente.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Preguntasfrecuente.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Preguntasfrecuentes'), array('action' => 'index')); ?></li>
	</ul>
</div>
