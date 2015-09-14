<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit User'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('identificacion');
		echo $this->Form->input('nombres');
		echo $this->Form->input('apellidos');
		echo $this->Form->input('foto');
		echo $this->Form->input('vereda_id');
		echo $this->Form->input('departamento_id');
		echo $this->Form->input('paiss_id');
		echo $this->Form->input('ciudad_id');
		echo $this->Form->input('corregimiento_id');
		echo $this->Form->input('tipo_agricultura_id');
		echo $this->Form->input('username');
		echo $this->Form->input('password');
		echo $this->Form->input('email');
		echo $this->Form->input('rol_id');
		echo $this->Form->input('google_map_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('User.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('User.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Veredas'), array('controller' => 'veredas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vereda'), array('controller' => 'veredas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Departamentos'), array('controller' => 'departamentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Departamento'), array('controller' => 'departamentos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Paisses'), array('controller' => 'paisses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Paiss'), array('controller' => 'paisses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ciudads'), array('controller' => 'ciudads', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ciudad'), array('controller' => 'ciudads', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Corregimientos'), array('controller' => 'corregimientos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Corregimiento'), array('controller' => 'corregimientos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipo Agriculturas'), array('controller' => 'tipo_agriculturas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo Agricultura'), array('controller' => 'tipo_agriculturas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Rols'), array('controller' => 'rols', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rol'), array('controller' => 'rols', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Google Maps'), array('controller' => 'google_maps', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Google Map'), array('controller' => 'google_maps', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Comentarios'), array('controller' => 'comentarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comentario'), array('controller' => 'comentarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Eventos'), array('controller' => 'eventos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evento'), array('controller' => 'eventos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Foros'), array('controller' => 'foros', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Foro'), array('controller' => 'foros', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Interaccions'), array('controller' => 'interaccions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Interaccion'), array('controller' => 'interaccions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Novedads'), array('controller' => 'novedads', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Novedad'), array('controller' => 'novedads', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Productos Usuarios'), array('controller' => 'productos_usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Productos Usuario'), array('controller' => 'productos_usuarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Temas'), array('controller' => 'temas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tema'), array('controller' => 'temas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Certificacions'), array('controller' => 'user_certificacions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Certificacion'), array('controller' => 'user_certificacions', 'action' => 'add')); ?> </li>
	</ul>
</div>
