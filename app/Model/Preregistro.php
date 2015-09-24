<?php

App::uses('AppModel', 'Model');

/**
 * Preregistro Model
 *
 * @property User $User
 */
class Preregistro extends AppModel {
    //The Associations below have been created with all possible keys, those that are not needed can be removed

    /**
     * belongsTo associations
     *
     * @var array
     */
    public $validate = array(
        'nit' => array(
            'numeric' => array(
                'rule' => array('numeric'),
                'message' => 'Debes ingresar un nit valido (solo números)',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
            'nit' => array(
                'rule' => array('minLength', '9'),
                'message' => 'La longitud del nit es incorrecta (deben ser minimo 9 números)'
            ),
            'nit' => array(
                'rule' => array('isUnique'),
                'message' => 'Este número ya esta registrado'
            ),
        ), 'rut' => array(
            'numeric' => array(
                'rule' => array('numeric'),
                'message' => 'Debes ingresar un rut valido (solo números)',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
            'rut' => array(
                'rule' => array('minLength', '6'),
                'message' => 'La longitud del rut es incorrecta (deben ser minimo 6 números)'
            ),
            'rut' => array(
                'rule' => array('isUnique'),
                'message' => 'Este número ya esta registrado'
            ),
        ), 'razon_social' => array(
            'notBlank' => array(
                'rule' => array('notBlank'),
                'message' => 'Debes llenar el campo razón social',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),'razon_social' => array(
                'rule' => array('validarSoloLetras'),
                'message' => 'Debes ingresar solo letras',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            )
        ), 'email' => array(
            'notBlank' => array(
                'rule' => array('notBlank'),
                'message' => 'Debes ingresar un email correcto',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),'email' => array(
                'rule' => array('email'),
                'message' => 'Debes ingresar un email correcto',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
            'email' => array(
                'rule' => array('isUnique'),
                'message' => 'Este email ya esta registrado'
            ),
        ), 'identificacion' => array(
            'numeric' => array(
                'rule' => array('numeric'),
                'message' => 'Debes llenar el campo identificación (un número entero)',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
            'identificacion' => array(
                'rule' => array('minLength', '6'),
                'message' => 'La longitud de la identificación es incorrecta (debe ser por lo menos de 6 números)'
            ),
            'identificacion' => array(
                'rule' => array("isUnique"),
                'message' => 'Esta identificación ya esta registrada'
            ),
        ), 'nombres' => array(
            'notBlank' => array(
                'rule' => array('notBlank'),
                'message' => 'Debes llenar el campo nombres',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
            'nombres' => array(
                'rule' => array('validarSoloLetras'),
                'message' => 'Debes ingresar solo letras',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            )
        ), 'apellidos' => array(
            'notBlank' => array(
                'rule' => array('notBlank'),
                'message' => 'Debes llenar el campo apellidos',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
            'apellidos' => array(
                'rule' => array('validarSoloLetras'),
                'message' => 'Debes ingresar solo letras',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),'ubicacion' => array(
            'validarUbicacion' => array(
                'rule' => array('validarUbicacion'),
                'message' => 'Debes seleccionar una ubicación',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            )
        ),
    );
    
//    
//    if(preg_match('/[^a-z_\-0-9]/i', $string))
//{
//  echo "not valid string";
//}
//Explanation:
//
//[] => character class definition
//^ => negate the class
//a-z => chars from 'a' to 'z'
//_ => underscore
//- => hyphen '-' (You need to escape it)
//0-9 => numbers (from zero to nine)

    function validarSoloLetras($opcion) {
        $campos = array("nombres", "apellidos", "razon_social");
        foreach ($campos as $field) {
            if (isset($opcion[$field])) {
               // ctype_alpha(str_replace(' ', '', $input)));
                
                if ((preg_match('/[^a-z\s]/i',$opcion[$field]))) {
                    return false;
                } else {
                    return true;
                }
            
            }
        }
    }
    
  
    
//     public function validarIdentificacion($identificacion) {
//        $count = $this->find('count', array(
//            'conditions' => array(
//                'identificacion' => $identificacion,
//                'identificacion' => $this->data[$this->alias]['identificacion'])
//        ));
//        return $count == 0;
//    }
    
    
       public function validarUbicacion($opcion = array()) {
        //debug($opcion);
        if ($opcion["ubicacion"] === 0 || empty($opcion["ubicacion"])) {

            return false;
        }
        //echo "Entro aqio";
        return true;
    }
    
    public $belongsTo = array(
        'User' => array(
            'className' => 'User',
            'foreignKey' => 'user_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        )
    );

}
