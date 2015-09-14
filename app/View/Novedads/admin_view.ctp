<div class="novedads view">
<h2><?php echo __('Novedad'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($novedad['Novedad']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Titulo'); ?></dt>
		<dd>
			<?php echo h($novedad['Novedad']['titulo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Texto'); ?></dt>
		<dd>
			<?php echo h($novedad['Novedad']['texto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($novedad['User']['nombres'], array('controller' => 'users', 'action' => 'view', $novedad['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Foto'); ?></dt>
		<dd>
			<?php echo h($novedad['Novedad']['foto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Categoria Novedad'); ?></dt>
		<dd>
			<?php echo $this->Html->link($novedad['CategoriaNovedad']['nombre'], array('controller' => 'categoria_novedads', 'action' => 'view', $novedad['CategoriaNovedad']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($novedad['Novedad']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($novedad['Novedad']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Novedad'), array('action' => 'edit', $novedad['Novedad']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Novedad'), array('action' => 'delete', $novedad['Novedad']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $novedad['Novedad']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Novedads'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Novedad'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categoria Novedads'), array('controller' => 'categoria_novedads', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Categoria Novedad'), array('controller' => 'categoria_novedads', 'action' => 'add')); ?> </li>
	</ul>
</div>
