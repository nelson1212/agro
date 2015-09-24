<div class="preregistros view">
<h2><?php echo __('Preregistro'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($preregistro['Preregistro']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Codigo'); ?></dt>
		<dd>
			<?php echo h($preregistro['Preregistro']['codigo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Identificacion'); ?></dt>
		<dd>
			<?php echo h($preregistro['Preregistro']['identificacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($preregistro['Preregistro']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombres'); ?></dt>
		<dd>
			<?php echo h($preregistro['Preregistro']['nombres']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apellidos'); ?></dt>
		<dd>
			<?php echo h($preregistro['Preregistro']['apellidos']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Num Consulado'); ?></dt>
		<dd>
			<?php echo h($preregistro['Preregistro']['num_consulado']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Num Idoniedad'); ?></dt>
		<dd>
			<?php echo h($preregistro['Preregistro']['num_idoniedad']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nit'); ?></dt>
		<dd>
			<?php echo h($preregistro['Preregistro']['nit']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rut'); ?></dt>
		<dd>
			<?php echo h($preregistro['Preregistro']['rut']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo'); ?></dt>
		<dd>
			<?php echo h($preregistro['Preregistro']['tipo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usuario Preregistro'); ?></dt>
		<dd>
			<?php echo h($preregistro['Preregistro']['usuario_preregistro']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($preregistro['User']['nombres'], array('controller' => 'users', 'action' => 'view', $preregistro['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estado'); ?></dt>
		<dd>
			<?php echo h($preregistro['Preregistro']['estado']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ubicacion'); ?></dt>
		<dd>
			<?php echo h($preregistro['Preregistro']['ubicacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($preregistro['Preregistro']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($preregistro['Preregistro']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Preregistro'), array('action' => 'edit', $preregistro['Preregistro']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Preregistro'), array('action' => 'delete', $preregistro['Preregistro']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $preregistro['Preregistro']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Preregistros'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Preregistro'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
