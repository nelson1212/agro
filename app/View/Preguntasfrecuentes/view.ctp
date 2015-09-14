<div class="preguntasfrecuentes view">
<h2><?php echo __('Preguntasfrecuente'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($preguntasfrecuente['Preguntasfrecuente']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pregunta'); ?></dt>
		<dd>
			<?php echo h($preguntasfrecuente['Preguntasfrecuente']['pregunta']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Respuesta'); ?></dt>
		<dd>
			<?php echo h($preguntasfrecuente['Preguntasfrecuente']['respuesta']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($preguntasfrecuente['Preguntasfrecuente']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($preguntasfrecuente['Preguntasfrecuente']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Preguntasfrecuente'), array('action' => 'edit', $preguntasfrecuente['Preguntasfrecuente']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Preguntasfrecuente'), array('action' => 'delete', $preguntasfrecuente['Preguntasfrecuente']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $preguntasfrecuente['Preguntasfrecuente']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Preguntasfrecuentes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Preguntasfrecuente'), array('action' => 'add')); ?> </li>
	</ul>
</div>
