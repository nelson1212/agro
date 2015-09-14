<?php
App::uses('AppModel', 'Model');
/**
 * User Model
 *
 * @property Vereda $Vereda
 * @property Departamento $Departamento
 * @property Paiss $Paiss
 * @property Ciudad $Ciudad
 * @property Corregimiento $Corregimiento
 * @property TipoAgricultura $TipoAgricultura
 * @property Rol $Rol
 * @property GoogleMap $GoogleMap
 * @property Comentario $Comentario
 * @property Evento $Evento
 * @property Foro $Foro
 * @property Interaccion $Interaccion
 * @property Novedad $Novedad
 * @property ProductosUsuario $ProductosUsuario
 * @property Tema $Tema
 * @property UserCertificacion $UserCertificacion
 */
class User extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'nombres';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'identificacion' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Debes ingresar un número de identificación valido, si eres empresa NIT sin guiones ',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'nombres' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				'message' => 'Debes llenar el campo Nombres Razon social en caso de ser empresa',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'apellidos' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				'message' => 'Debes llenar el campo apellidos',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'foto' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				'message' => 'La foto seleccionado es incorrecta',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		/*'vereda_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		), */
		/*'departamento_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),*/
		/*'paiss_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),*/
		'ciudad_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Debes seleccionar un municipio',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'corregimiento_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Debes seleccionar un corregimiento o vereda',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'tipo_agricultura_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Debes seleccionar un tipo de agricultura',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'username' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				'message' => 'Debes llenar el campo nombre de usuario (maximo 15 caracteres sin espacios)',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'password' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				'message' => 'Debes llenar el campo contraseña (maximo 15 caracteres)',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'email' => array(
			'email' => array(
				'rule' => array('email'),
				'message' => 'Debes llenar el campo email',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'rol_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Debes seleccionar un tipo de usuario',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		/*'google_map_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),*/
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Vereda' => array(
			'className' => 'Vereda',
			'foreignKey' => 'vereda_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Departamento' => array(
			'className' => 'Departamento',
			'foreignKey' => 'departamento_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Paiss' => array(
			'className' => 'Paiss',
			'foreignKey' => 'paiss_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Ciudad' => array(
			'className' => 'Ciudad',
			'foreignKey' => 'ciudad_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Corregimiento' => array(
			'className' => 'Corregimiento',
			'foreignKey' => 'corregimiento_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'TipoAgricultura' => array(
			'className' => 'TipoAgricultura',
			'foreignKey' => 'tipo_agricultura_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Rol' => array(
			'className' => 'Rol',
			'foreignKey' => 'rol_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		/*'GoogleMap' => array(
			'className' => 'GoogleMap',
			'foreignKey' => 'google_map_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)*/
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Comentario' => array(
			'className' => 'Comentario',
			'foreignKey' => 'user_id',
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
		'Evento' => array(
			'className' => 'Evento',
			'foreignKey' => 'user_id',
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
		'Foro' => array(
			'className' => 'Foro',
			'foreignKey' => 'user_id',
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
		'Interaccion' => array(
			'className' => 'Interaccion',
			'foreignKey' => 'user_id',
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
		'Novedad' => array(
			'className' => 'Novedad',
			'foreignKey' => 'user_id',
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
		'ProductosUsuario' => array(
			'className' => 'ProductosUsuario',
			'foreignKey' => 'user_id',
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
		'Tema' => array(
			'className' => 'Tema',
			'foreignKey' => 'user_id',
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
		'UserCertificacion' => array(
			'className' => 'UserCertificacion',
			'foreignKey' => 'user_id',
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
