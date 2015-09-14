<div class="userCertificacions view">
<h2><?php echo __('User Certificacion'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($userCertificacion['UserCertificacion']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($userCertificacion['User']['nombres'], array('controller' => 'users', 'action' => 'view', $userCertificacion['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Certificacion'); ?></dt>
		<dd>
			<?php echo $this->Html->link($userCertificacion['Certificacion']['nombre'], array('controller' => 'certificacions', 'action' => 'view', $userCertificacion['Certificacion']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User Certificacion'), array('action' => 'edit', $userCertificacion['UserCertificacion']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User Certificacion'), array('action' => 'delete', $userCertificacion['UserCertificacion']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $userCertificacion['UserCertificacion']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List User Certificacions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Certificacion'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Certificacions'), array('controller' => 'certificacions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Certificacion'), array('controller' => 'certificacions', 'action' => 'add')); ?> </li>
	</ul>
</div>
