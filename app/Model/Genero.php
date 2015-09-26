<?php
App::uses('AppModel', 'Model');
/**
 * Genero Model
 *
 * @property Administrador $Administrador
 * @property Agricultor $Agricultor
 * @property CompradorInternacional $CompradorInternacional
 * @property CompradorNacional $CompradorNacional
 */
class Genero extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'nombre';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Administrador' => array(
			'className' => 'Administrador',
			'foreignKey' => 'genero_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Agricultor' => array(
			'className' => 'Agricultor',
			'foreignKey' => 'genero_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'CompradorInternacional' => array(
			'className' => 'CompradorInternacional',
			'foreignKey' => 'genero_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'CompradorNacional' => array(
			'className' => 'CompradorNacional',
			'foreignKey' => 'genero_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
