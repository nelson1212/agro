<?php
App::uses('AppModel', 'Model');
/**
 * AgricultorCertificacion Model
 *
 * @property Agricultors $Agricultors
 * @property Certificacions $Certificacions
 */
class AgricultorCertificacion extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Agricultors' => array(
			'className' => 'Agricultors',
			'foreignKey' => 'agricultors_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Certificacions' => array(
			'className' => 'Certificacions',
			'foreignKey' => 'certificacions_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
