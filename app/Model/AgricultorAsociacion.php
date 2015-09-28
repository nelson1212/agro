<?php
App::uses('AppModel', 'Model');
/**
 * AgricultorAsociacion Model
 *
 * @property Agricultor $Agricultor
 * @property Asociacion $Asociacion
 */
class AgricultorAsociacion extends AppModel {


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
		'Asociacion' => array(
			'className' => 'Asociacion',
			'foreignKey' => 'asociacion_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
