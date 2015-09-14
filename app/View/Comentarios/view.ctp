<div class="comentarios view">
<h2><?php echo __('Comentario'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($comentario['Comentario']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tema'); ?></dt>
		<dd>
			<?php echo $this->Html->link($comentario['Tema']['id'], array('controller' => 'temas', 'action' => 'view', $comentario['Tema']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($comentario['User']['nombres'], array('controller' => 'users', 'action' => 'view', $comentario['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comentario'); ?></dt>
		<dd>
			<?php echo h($comentario['Comentario']['comentario']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($comentario['Comentario']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($comentario['Comentario']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Comentario'), array('action' => 'edit', $comentario['Comentario']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Comentario'), array('action' => 'delete', $comentario['Comentario']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $comentario['Comentario']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Comentarios'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comentario'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Temas'), array('controller' => 'temas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tema'), array('controller' => 'temas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
