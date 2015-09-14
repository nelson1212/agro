<div class="certificacions view">
<h2><?php echo __('Certificacion'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($certificacion['Certificacion']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($certificacion['Certificacion']['nombre']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Certificacion'), array('action' => 'edit', $certificacion['Certificacion']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Certificacion'), array('action' => 'delete', $certificacion['Certificacion']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $certificacion['Certificacion']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Certificacions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Certificacion'), array('action' => 'add')); ?> </li>
	</ul>
</div>
