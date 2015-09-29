<?php
App::uses('AppModel', 'Model');
/**
 * EmpresaNacional Model
 *
 * @property User $User
 * @property Ciudads $Ciudads
 */
class EmpresaNacional extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'nit';

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
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Ciudads' => array(
			'className' => 'Ciudads',
			'foreignKey' => 'ciudad_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
