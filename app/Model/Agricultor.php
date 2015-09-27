<?php
App::uses('AppModel', 'Model');
/**
 * Agricultor Model
 *
 * @property Corregimiento $Corregimiento
 * @property User $User
 * @property AgricultorAsociacion $AgricultorAsociacion
 * @property AgricultorTipoAgricultura $AgricultorTipoAgricultura
 */
class Agricultor extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'identificacion';

/**
 * Validation rules
 *
 * @var array
 */
	
	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Corregimiento' => array(
			'className' => 'Corregimiento',
			'foreignKey' => 'corregimiento_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'AgricultorAsociacion' => array(
			'className' => 'AgricultorAsociacion',
			'foreignKey' => 'agricultor_id',
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
		'AgricultorTipoAgricultura' => array(
			'className' => 'AgricultorTipoAgricultura',
			'foreignKey' => 'agricultor_id',
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
