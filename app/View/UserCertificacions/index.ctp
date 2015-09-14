<div class="userCertificacions index">
	<h2><?php echo __('User Certificacions'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('certificacion_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($userCertificacions as $userCertificacion): ?>
	<tr>
		<td><?php echo h($userCertificacion['UserCertificacion']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($userCertificacion['User']['nombres'], array('controller' => 'users', 'action' => 'view', $userCertificacion['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($userCertificacion['Certificacion']['nombre'], array('controller' => 'certificacions', 'action' => 'view', $userCertificacion['Certificacion']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $userCertificacion['UserCertificacion']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $userCertificacion['UserCertificacion']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $userCertificacion['UserCertificacion']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $userCertificacion['UserCertificacion']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New User Certificacion'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Certificacions'), array('controller' => 'certificacions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Certificacion'), array('controller' => 'certificacions', 'action' => 'add')); ?> </li>
	</ul>
</div>
