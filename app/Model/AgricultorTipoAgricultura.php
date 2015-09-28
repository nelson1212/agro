<?php
App::uses('AppModel', 'Model');
/**
 * AgricultorTipoAgricultura Model
 *
 * @property Agricultor $Agricultor
 * @property TipoAgricultura $TipoAgricultura
 */
class AgricultorTipoAgricultura extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Agricultor' => array(
			'className' => 'Agricultor',
			'foreignKey' => 'agricultor_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'TipoAgricultura' => array(
			'className' => 'TipoAgricultura',
			'foreignKey' => 'tipoAgricultura_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
