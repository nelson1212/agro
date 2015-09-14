<div class="userCertificacions form">
<?php echo $this->Form->create('UserCertificacion'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add User Certificacion'); ?></legend>
	<?php
		echo $this->Form->input('user_id');
		echo $this->Form->input('certificacion_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List User Certificacions'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Certificacions'), array('controller' => 'certificacions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Certificacion'), array('controller' => 'certificacions', 'action' => 'add')); ?> </li>
	</ul>
</div>
