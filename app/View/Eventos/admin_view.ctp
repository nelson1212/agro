<div class="eventos view">
<h2><?php echo __('Evento'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($evento['Evento']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($evento['User']['nombres'], array('controller' => 'users', 'action' => 'view', $evento['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Titulo'); ?></dt>
		<dd>
			<?php echo h($evento['Evento']['titulo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
			<?php echo h($evento['Evento']['descripcion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Evento'); ?></dt>
		<dd>
			<?php echo h($evento['Evento']['fecha_evento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estado'); ?></dt>
		<dd>
			<?php echo h($evento['Evento']['estado']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Foto'); ?></dt>
		<dd>
			<?php echo h($evento['Evento']['foto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Google Map'); ?></dt>
		<dd>
			<?php echo $this->Html->link($evento['GoogleMap']['id'], array('controller' => 'google_maps', 'action' => 'view', $evento['GoogleMap']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($evento['Evento']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($evento['Evento']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Evento'), array('action' => 'edit', $evento['Evento']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Evento'), array('action' => 'delete', $evento['Evento']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $evento['Evento']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Eventos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evento'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Google Maps'), array('controller' => 'google_maps', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Google Map'), array('controller' => 'google_maps', 'action' => 'add')); ?> </li>
	</ul>
</div>
