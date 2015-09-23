<?php

App::uses('AppModel', 'Model');

/**
 * Foro Model
 *
 * @property User $User
 * @property Categoria $Categoria
 * @property ForoTema $ForoTema
 */
class Foro extends AppModel {

    /**
     * Display field
     *
     * @var string
     */
    public $displayField = 'nombre';

    /**
     * Validation rules
     *
     * @var array
     */
    public $validate = array(
        'nombre' => array(
            'notBlank' => array(
                'rule' => array('notBlank'),
                'message' => 'Debes ingresar un titulo para el foro',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'descripcion' => array(
            'notBlank' => array(
                'rule' => array('notBlank'),
                'message' => 'Debes ingresar una breve descripción del foro',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ), 
        
        'lstTemas' => array(
            'validarLstTemas' => array(
                'rule' => array('validarLstTemas'),
                'message' => 'Debes ingresar por lo menos un tema al foro',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        /* 'user_id' => array(
          'numeric' => array(
          'rule' => array('numeric'),
          //'message' => 'Your custom message here',
          //'allowEmpty' => false,
          //'required' => false,
          //'last' => false, // Stop validation after this rule
          //'on' => 'create', // Limit validation to 'create' or 'update' operations
          ),
          ), */
        'categoria_id' => array(
            'numeric' => array(
                'rule' => array('numeric'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ), 'validarCategoriaForo' => array(
                'rule' => array('validarCategoriaForo'),
                'message' => 'Debes seleccionar una categoria para el foro',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
    );

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
        'Categoria' => array(
            'className' => 'Categoria',
            'foreignKey' => 'categoria_id',
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
    public function validarCategoriaForo($opcion = array()) {
        //debug($opcion);
        if ($opcion["categoria_id"] === 0 || empty($opcion["categoria_id"])) {

            return false;
        }
        //echo "Entro aqio";
        return true;
    }
    
     public function validarLstTemas($opcion = array()) {
        //debug($opcion);
        if (count($opcion["lstTemas"]) === 0 || empty($opcion["lstTemas"])) {

            return false;
        }
        //echo "Entro aqio";
        return true;
    }

    public $hasMany = array(
        'ForoTema' => array(
            'className' => 'ForoTema',
            'foreignKey' => 'foro_id',
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
