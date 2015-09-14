<?php
App::uses('AppModel', 'Model');
/**
 * ForoTema Model
 *
 * @property Tema $Tema
 * @property Foro $Foro
 */
class ForoTema extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Tema' => array(
			'className' => 'Tema',
			'foreignKey' => 'tema_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Foro' => array(
			'className' => 'Foro',
			'foreignKey' => 'foro_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
