<?php
/**
 * Producto Fixture
 */
class ProductoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'nombre_cientifico' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'foto' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'lavado_id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'embalaje_id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'perido_cosecha' => array('type' => 'date', 'null' => true, 'default' => null),
		'estado_id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'peso_gr' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false),
		'peso_lb' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false),
		'peso_kg' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false),
		'precio' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false),
		'cotactado' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'cantidad' => array('type' => 'biginteger', 'null' => true, 'default' => null, 'unsigned' => false),
		'color_id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'temperatura' => array('type' => 'biginteger', 'null' => true, 'default' => null, 'unsigned' => false),
		'altura_msnm' => array('type' => 'biginteger', 'null' => true, 'default' => null, 'unsigned' => false),
		'imagen' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'calidad_id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'forma_id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'firmeza_id' => array('type' => 'biginteger', 'null' => true, 'default' => null, 'unsigned' => false),
		'presentacion_id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'brillo_id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'sanidad_id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'madurez_id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'created' => array('type' => 'date', 'null' => true, 'default' => null),
		'updated' => array('type' => 'date', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_productos_lavados1_idx' => array('column' => 'lavado_id', 'unique' => 0),
			'fk_productos_almacenamientos1_idx' => array('column' => 'embalaje_id', 'unique' => 0),
			'fk_productos_estados1_idx' => array('column' => 'estado_id', 'unique' => 0),
			'fk_productos_colors1_idx' => array('column' => 'color_id', 'unique' => 0),
			'fk_productos_calidads1_idx' => array('column' => 'calidad_id', 'unique' => 0),
			'fk_productos_formas1_idx' => array('column' => 'forma_id', 'unique' => 0),
			'fk_productos_presentacions1_idx' => array('column' => 'presentacion_id', 'unique' => 0),
			'fk_productos_brillos1_idx' => array('column' => 'brillo_id', 'unique' => 0),
			'fk_productos_sanidads1_idx' => array('column' => 'sanidad_id', 'unique' => 0),
			'fk_productos_madurezs1_idx' => array('column' => 'madurez_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '',
			'nombre_cientifico' => 'Lorem ipsum dolor sit amet',
			'foto' => 'Lorem ipsum dolor sit amet',
			'lavado_id' => '',
			'embalaje_id' => '',
			'perido_cosecha' => '2015-09-12',
			'estado_id' => '',
			'peso_gr' => 1,
			'peso_lb' => 1,
			'peso_kg' => 1,
			'precio' => 1,
			'cotactado' => 1,
			'cantidad' => '',
			'color_id' => '',
			'temperatura' => '',
			'altura_msnm' => '',
			'imagen' => 'Lorem ipsum dolor sit amet',
			'calidad_id' => '',
			'forma_id' => '',
			'firmeza_id' => '',
			'presentacion_id' => '',
			'brillo_id' => '',
			'sanidad_id' => '',
			'madurez_id' => '',
			'created' => '2015-09-12',
			'updated' => '2015-09-12'
		),
	);

}
