<div class="users view">
<h2><?php echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Identificacion'); ?></dt>
		<dd>
			<?php echo h($user['User']['identificacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombres'); ?></dt>
		<dd>
			<?php echo h($user['User']['nombres']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apellidos'); ?></dt>
		<dd>
			<?php echo h($user['User']['apellidos']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Foto'); ?></dt>
		<dd>
			<?php echo h($user['User']['foto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vereda'); ?></dt>
		<dd>
			<?php echo $this->Html->link($user['Vereda']['nombre'], array('controller' => 'veredas', 'action' => 'view', $user['Vereda']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Departamento'); ?></dt>
		<dd>
			<?php echo $this->Html->link($user['Departamento']['nombre'], array('controller' => 'departamentos', 'action' => 'view', $user['Departamento']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Paiss'); ?></dt>
		<dd>
			<?php echo $this->Html->link($user['Paiss']['nombre'], array('controller' => 'paisses', 'action' => 'view', $user['Paiss']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ciudad'); ?></dt>
		<dd>
			<?php echo $this->Html->link($user['Ciudad']['nombre'], array('controller' => 'ciudads', 'action' => 'view', $user['Ciudad']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Corregimiento'); ?></dt>
		<dd>
			<?php echo $this->Html->link($user['Corregimiento']['nombre'], array('controller' => 'corregimientos', 'action' => 'view', $user['Corregimiento']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo Agricultura'); ?></dt>
		<dd>
			<?php echo $this->Html->link($user['TipoAgricultura']['nombre'], array('controller' => 'tipo_agriculturas', 'action' => 'view', $user['TipoAgricultura']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($user['User']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($user['User']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rol'); ?></dt>
		<dd>
			<?php echo $this->Html->link($user['Rol']['nombre'], array('controller' => 'rols', 'action' => 'view', $user['Rol']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Google Map'); ?></dt>
		<dd>
			<?php echo $this->Html->link($user['GoogleMap']['id'], array('controller' => 'google_maps', 'action' => 'view', $user['GoogleMap']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($user['User']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($user['User']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $user['User']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Comentarios'); ?></h3>
	<?php if (!empty($user['Comentario'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Tema Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Comentario'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Comentario'] as $comentario): ?>
		<tr>
			<td><?php echo $comentario['id']; ?></td>
			<td><?php echo $comentario['tema_id']; ?></td>
			<td><?php echo $comentario['user_id']; ?></td>
			<td><?php echo $comentario['comentario']; ?></td>
			<td><?php echo $comentario['created']; ?></td>
			<td><?php echo $comentario['updated']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'comentarios', 'action' => 'view', $comentario['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'comentarios', 'action' => 'edit', $comentario['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'comentarios', 'action' => 'delete', $comentario['id']), array('confirm' => __('Are you sure you want to delete # %s?', $comentario['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Comentario'), array('controller' => 'comentarios', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Eventos'); ?></h3>
	<?php if (!empty($user['Evento'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Titulo'); ?></th>
		<th><?php echo __('Descripcion'); ?></th>
		<th><?php echo __('Fecha Evento'); ?></th>
		<th><?php echo __('Estado'); ?></th>
		<th><?php echo __('Foto'); ?></th>
		<th><?php echo __('Google Map Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Evento'] as $evento): ?>
		<tr>
			<td><?php echo $evento['id']; ?></td>
			<td><?php echo $evento['user_id']; ?></td>
			<td><?php echo $evento['titulo']; ?></td>
			<td><?php echo $evento['descripcion']; ?></td>
			<td><?php echo $evento['fecha_evento']; ?></td>
			<td><?php echo $evento['estado']; ?></td>
			<td><?php echo $evento['foto']; ?></td>
			<td><?php echo $evento['google_map_id']; ?></td>
			<td><?php echo $evento['created']; ?></td>
			<td><?php echo $evento['updated']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'eventos', 'action' => 'view', $evento['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'eventos', 'action' => 'edit', $evento['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'eventos', 'action' => 'delete', $evento['id']), array('confirm' => __('Are you sure you want to delete # %s?', $evento['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Evento'), array('controller' => 'eventos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Foros'); ?></h3>
	<?php if (!empty($user['Foro'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Descripcion'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Estado'); ?></th>
		<th><?php echo __('Categoria Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Foro'] as $foro): ?>
		<tr>
			<td><?php echo $foro['id']; ?></td>
			<td><?php echo $foro['nombre']; ?></td>
			<td><?php echo $foro['descripcion']; ?></td>
			<td><?php echo $foro['user_id']; ?></td>
			<td><?php echo $foro['estado']; ?></td>
			<td><?php echo $foro['categoria_id']; ?></td>
			<td><?php echo $foro['created']; ?></td>
			<td><?php echo $foro['updated']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'foros', 'action' => 'view', $foro['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'foros', 'action' => 'edit', $foro['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'foros', 'action' => 'delete', $foro['id']), array('confirm' => __('Are you sure you want to delete # %s?', $foro['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Foro'), array('controller' => 'foros', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Interaccions'); ?></h3>
	<?php if (!empty($user['Interaccion'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Mensaje'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Producto Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Interaccion'] as $interaccion): ?>
		<tr>
			<td><?php echo $interaccion['id']; ?></td>
			<td><?php echo $interaccion['mensaje']; ?></td>
			<td><?php echo $interaccion['user_id']; ?></td>
			<td><?php echo $interaccion['producto_id']; ?></td>
			<td><?php echo $interaccion['created']; ?></td>
			<td><?php echo $interaccion['updated']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'interaccions', 'action' => 'view', $interaccion['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'interaccions', 'action' => 'edit', $interaccion['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'interaccions', 'action' => 'delete', $interaccion['id']), array('confirm' => __('Are you sure you want to delete # %s?', $interaccion['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Interaccion'), array('controller' => 'interaccions', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Novedads'); ?></h3>
	<?php if (!empty($user['Novedad'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Titulo'); ?></th>
		<th><?php echo __('Texto'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Foto'); ?></th>
		<th><?php echo __('Categoria Novedad Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Novedad'] as $novedad): ?>
		<tr>
			<td><?php echo $novedad['id']; ?></td>
			<td><?php echo $novedad['titulo']; ?></td>
			<td><?php echo $novedad['texto']; ?></td>
			<td><?php echo $novedad['user_id']; ?></td>
			<td><?php echo $novedad['foto']; ?></td>
			<td><?php echo $novedad['categoria_novedad_id']; ?></td>
			<td><?php echo $novedad['created']; ?></td>
			<td><?php echo $novedad['updated']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'novedads', 'action' => 'view', $novedad['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'novedads', 'action' => 'edit', $novedad['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'novedads', 'action' => 'delete', $novedad['id']), array('confirm' => __('Are you sure you want to delete # %s?', $novedad['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Novedad'), array('controller' => 'novedads', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Productos Usuarios'); ?></h3>
	<?php if (!empty($user['ProductosUsuario'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Producto Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['ProductosUsuario'] as $productosUsuario): ?>
		<tr>
			<td><?php echo $productosUsuario['id']; ?></td>
			<td><?php echo $productosUsuario['user_id']; ?></td>
			<td><?php echo $productosUsuario['producto_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'productos_usuarios', 'action' => 'view', $productosUsuario['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'productos_usuarios', 'action' => 'edit', $productosUsuario['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'productos_usuarios', 'action' => 'delete', $productosUsuario['id']), array('confirm' => __('Are you sure you want to delete # %s?', $productosUsuario['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Productos Usuario'), array('controller' => 'productos_usuarios', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Temas'); ?></h3>
	<?php if (!empty($user['Tema'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Contenido'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Tema'] as $tema): ?>
		<tr>
			<td><?php echo $tema['id']; ?></td>
			<td><?php echo $tema['user_id']; ?></td>
			<td><?php echo $tema['contenido']; ?></td>
			<td><?php echo $tema['created']; ?></td>
			<td><?php echo $tema['updated']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'temas', 'action' => 'view', $tema['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'temas', 'action' => 'edit', $tema['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'temas', 'action' => 'delete', $tema['id']), array('confirm' => __('Are you sure you want to delete # %s?', $tema['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Tema'), array('controller' => 'temas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related User Certificacions'); ?></h3>
	<?php if (!empty($user['UserCertificacion'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Certificacion Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['UserCertificacion'] as $userCertificacion): ?>
		<tr>
			<td><?php echo $userCertificacion['id']; ?></td>
			<td><?php echo $userCertificacion['user_id']; ?></td>
			<td><?php echo $userCertificacion['certificacion_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'user_certificacions', 'action' => 'view', $userCertificacion['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'user_certificacions', 'action' => 'edit', $userCertificacion['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'user_certificacions', 'action' => 'delete', $userCertificacion['id']), array('confirm' => __('Are you sure you want to delete # %s?', $userCertificacion['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User Certificacion'), array('controller' => 'user_certificacions', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
