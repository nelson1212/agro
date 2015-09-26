<?php

App::uses('AppModel', 'Model');

/**
 * User Model
 *
 * @property Rol $Rol
 * @property Administrador $Administrador
 * @property Agricultor $Agricultor
 * @property Comentario $Comentario
 * @property CompradorInternacional $CompradorInternacional
 * @property CompradorNacional $CompradorNacional
 * @property EmpresaInternacional $EmpresaInternacional
 * @property EmpresaNacional $EmpresaNacional
 * @property Evento $Evento
 * @property Foro $Foro
 * @property Interaccion $Interaccion
 * @property Novedad $Novedad
 * @property Preregistro $Preregistro
 * @property ProductosUsuario $ProductosUsuario
 * @property Puntuacion $Puntuacion
 */
class User extends AppModel {

    /**
     * Display field
     *
     * @var string
     */
    public $displayField = 'username';

    /**
     * Validation rules
     *
     * @var array
     */
    public $validate = array(
        /* 'foto' => array(
          'notBlank' => array(
          'rule' => array('notBlank'),
          //'message' => 'Your custom message here',
          //'allowEmpty' => false,
          //'required' => false,
          //'last' => false, // Stop validation after this rule
          //'on' => 'create', // Limit validation to 'create' or 'update' operations
          ),
          ), */
        'username' => array(
            'notBlank' => array(
                'rule' => array('notBlank'),
                'message' => 'Debes llenar el campo nombre de usuario (maximo 15 caracteres sin espacios)',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ), 'validateUsername' => array(
                'rule' => array('validateUsername'),
                'message' => 'Este nombre de usuario ya esta registrado',
                'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ), 'password' => array(
            'length' => array(
                'rule' => array('between', 8, 15),
                'message' => 'La contraseña debe estar 8 y 15 caracteres.',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ), 'compare' => array(
                'rule' => array('validate_passwords'),
                'message' => 'Contraseña y confirmar contraseña no son iguales.',
            )
        ), 'password1' => array(
            'length' => array(
                'rule' => array('between', 8, 15),
                'message' => 'La contraseña debe estar 8 y 15 caracteres.',
            ), 'compare' => array(
                'rule' => array('validate_passwords'),
                'message' => 'Contraseña y confirmar contraseña no son iguales.',
            )
        ),
        'email' => array(
            'email' => array(
                'rule' => array('email'),
                'message' => 'Debes ingresar un email valido',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ), 'validateEmail' => array(
                'rule' => array('validateEmail'),
                'message' => 'Este email ya esta en uso',
                'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        /*  'telefono' => array(
          'numeric' => array(
          'rule' => array('numeric'),
          //'message' => 'Your custom message here',
          //'allowEmpty' => false,
          //'required' => false,
          //'last' => false, // Stop validation after this rule
          //'on' => 'create', // Limit validation to 'create' or 'update' operations
          ),
          ), */
        'celular' => array(
            'notBlank' => array(
                'rule' => array('notBlank'),
                'message' => 'Debes ingresar un número de celular',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ), 'foto' => array(
            /* 'validarVacia' => array(
              'rule' => array('validarVacia'),
              'message' => 'Debes ingresar una foto',
              ), */
            'validarSize' => array(
                'rule' => array('validarSize'),
                'message' => "La foto excede el tamaño permitido (1MB), intenta con una foto mas pequeña",
            ),
            'extension' => array(
                'rule' => array('extension', array('jpg', 'jpeg', 'png')),
                'message' => "Solo puedes subir imagenes con las siguientes extensiones: 'jpg','jpeg','png'",
            ),
        ),
        'direccion' => array(
            'notBlank' => array(
                'rule' => array('notBlank'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ), 'genero' => array(
            'validarGenero' => array(
                'rule' => array('validarGenero'),
                'message' => 'Debes seleccionar un genero',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        )
    );

    

    //The Associations below have been created with all possible keys, those that are not needed can be removed

    /**
     * belongsTo associations
     *
     * @var array
     */
    public $belongsTo = array(
        'Rol' => array(
            'className' => 'Rol',
            'foreignKey' => 'rol_id',
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
        'Administrador' => array(
            'className' => 'Administrador',
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
        'Agricultor' => array(
            'className' => 'Agricultor',
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
        'CompradorInternacional' => array(
            'className' => 'CompradorInternacional',
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
        'CompradorNacional' => array(
            'className' => 'CompradorNacional',
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
        'EmpresaInternacional' => array(
            'className' => 'EmpresaInternacional',
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
        'EmpresaNacional' => array(
            'className' => 'EmpresaNacional',
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
        'Preregistro' => array(
            'className' => 'Preregistro',
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
        'Puntuacion' => array(
            'className' => 'Puntuacion',
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
