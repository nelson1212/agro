<?php
App::uses('Departamento', 'Model');

/**
 * Departamento Test Case
 */
class DepartamentoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.departamento',
		'app.pais',
		'app.ciudad',
		'app.corregimiento',
		'app.user',
		'app.vereda'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Departamento = ClassRegistry::init('Departamento');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Departamento);

		parent::tearDown();
	}

}
