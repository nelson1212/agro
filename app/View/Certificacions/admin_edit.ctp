<div class="certificacions form">
<?php echo $this->Form->create('Certificacion'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Certificacion'); ?></legend>
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Certificacion.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Certificacion.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Certificacions'), array('action' => 'index')); ?></li>
	</ul>
</div>
