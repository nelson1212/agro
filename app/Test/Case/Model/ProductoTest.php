<?php
App::uses('Producto', 'Model');

/**
 * Producto Test Case
 */
class ProductoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.producto',
		'app.lavado',
		'app.embalaje',
		'app.estado',
		'app.empacado',
		'app.color',
		'app.calidad',
		'app.forma',
		'app.firmeza',
		'app.presentacion',
		'app.brillo',
		'app.sanidad',
		'app.madurez',
		'app.interaccion',
		'app.user',
		'app.vereda',
		'app.ciudad',
		'app.departamento',
		'app.paiss',
		'app.corregimiento',
		'app.pais',
		'app.tipo_agricultura',
		'app.rol',
		'app.google_map',
		'app.evento',
		'app.comentario',
		'app.tema',
		'app.foro',
		'app.categoria',
		'app.foro_tema',
		'app.novedad',
		'app.categoria_novedad',
		'app.productos_usuario',
		'app.user_certificacion',
		'app.certificacion',
		'app.nombres_comun'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Producto = ClassRegistry::init('Producto');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Producto);

		parent::tearDown();
	}

}
