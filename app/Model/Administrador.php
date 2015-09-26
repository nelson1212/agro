<?php

App::uses('AppModel', 'Model');

/**
 * Administrador Model
 *
 * @property User $User
 * @property MunipicioAccion $MunipicioAccion
 */
class Administrador extends AppModel {

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
    public $validate = array(
//        'celular' => array(
//            'numeric' => array(
//                'rule' => array('numeric'),
//            //'message' => 'Your custom message here',
//            //'allowEmpty' => false,
//            //'required' => false,
//            //'last' => false, // Stop validation after this rule
//            //'on' => 'create', // Limit validation to 'create' or 'update' operations
//            ),
//        ),
        'genero' => array(
            'validarGenero' => array(
                'rule' => array("validarGenero"),
                'message' => 'Debes seleccionar un genero',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ), 'identificacion' => array(
            'numeric' => array(
                'rule' => array('numeric'),
                'message' => 'Debes ingresar un número de identificación valido (solo números)',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ), 'validateIdentification' => array(
                'rule' => array('validateIdentification'),
                'message' => 'Este número ya esta esta registrado',
                'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'nombres' => array(
            'notBlank' => array(
                'rule' => array('notBlank'),
                'message' => 'Debes llenar el campo nombres',
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
    );

    //******************************** FUNCIONES DE VALIDACIÓN ********************************
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
        )
    );

    /**
     * hasMany associations
     *
     * @var array
     */
    public $hasMany = array(
        'MunipicioAccion' => array(
            'className' => 'MunipicioAccion',
            'foreignKey' => 'administrador_id',
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
