<div class="interaccions view">
<h2><?php echo __('Interaccion'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($interaccion['Interaccion']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mensaje'); ?></dt>
		<dd>
			<?php echo h($interaccion['Interaccion']['mensaje']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($interaccion['User']['nombres'], array('controller' => 'users', 'action' => 'view', $interaccion['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Producto'); ?></dt>
		<dd>
			<?php echo $this->Html->link($interaccion['Producto']['nombre_cientifico'], array('controller' => 'productos', 'action' => 'view', $interaccion['Producto']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($interaccion['Interaccion']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($interaccion['Interaccion']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Interaccion'), array('action' => 'edit', $interaccion['Interaccion']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Interaccion'), array('action' => 'delete', $interaccion['Interaccion']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $interaccion['Interaccion']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Interaccions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Interaccion'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Productos'), array('controller' => 'productos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Producto'), array('controller' => 'productos', 'action' => 'add')); ?> </li>
	</ul>
</div>
