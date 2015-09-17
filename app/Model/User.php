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
          
            'validarExtension' => array(
                'rule' => array('validarExtension'),
                'message' => "Solo puedes subir imagenes con las siguientes extensiones: 'jpg','jpeg','png'",
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
        ),
        /* 'vereda_id' => array(
          'numeric' => array(
          'rule' => array('numeric'),
          //'message' => 'Your custom message here',
          //'allowEmpty' => false,
          //'required' => false,
          //'last' => false, // Stop validation after this rule
          //'on' => 'create', // Limit validation to 'create' or 'update' operations
          ),
          ), */
        /* 'departamento_id' => array(
          'numeric' => array(
          'rule' => array('numeric'),
          'message' => 'Your custom message here',
          //'allowEmpty' => false,
          //'required' => false,
          //'last' => false, // Stop validation after this rule
          //'on' => 'create', // Limit validation to 'create' or 'update' operations
          ),
          ), */
        /* 'paiss_id' => array(
          'numeric' => array(
          'rule' => array('numeric'),
          //'message' => 'Your custom message here',
          //'allowEmpty' => false,
          //'required' => false,
          //'last' => false, // Stop validation after this rule
          //'on' => 'create', // Limit validation to 'create' or 'update' operations
          ),
          ), */
        'ciudad_id' => array(
            'validarCiudad' => array(
                'rule' => array('validarCiudad'),
                'message' => 'Debes seleccionar una municipio'),
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
            'validarCorregimiento' => array(
                'rule' => array('validarCorregimiento'),
                'message' => 'Debes seleccionar una municipio'),
            'numeric' => array(
                'rule' => array('numeric'),
                'message' => 'Debes seleccionar un corregimiento, vereda o resguardo',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'tipo_agricultura_id' => array(
            'validarTipoAgricultura' => array(
                'rule' => array('validarTipoAgricultura'),
                'message' => 'Debes seleccionar un tipo de agricultura'),
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
            ), 'validateUsername' => array(
                'rule' => array('validateUsername'),
                'message' => 'Este nombre de usuario ya esta registrado',
                'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'password' => array(
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
                'message' => 'Debes llenar el campo email',
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
        'rol_id' => array(
            'numeric' => array(
                'rule' => array('numeric'),
                'message' => 'Debes seleccionar un tipo de usuario'),
            'validarRol' => array(
                'rule' => array('validarRol'),
                'message' => 'Debes seleccionar un tipo de usuario'),
        //'allowEmpty' => false,
        //'required' => false,
        //'last' => false, // Stop validation after this rule
        //'on' => 'create', // Limit validation to 'create' or 'update' operations
        ),
            /* 'google_map_id' => array(
              'numeric' => array(
              'rule' => array('numeric'),
              //'message' => 'Your custom message here',
              //'allowEmpty' => false,
              //'required' => false,
              //'last' => false, // Stop validation after this rule
              //'on' => 'create', // Limit validation to 'create' or 'update' operations
              ),
              ), */
    );

    public function validarExtension($opcion) {
        // Shift the array to easily acces $_POST
        $uploadData = array_shift($opcion);

        // Basic checks
        if ($uploadData['size'] == 0 || $uploadData['error'] !== 0) {
            return false;
        }

        $permitted = array('image/jpeg', 'image/pjpeg', 'image/png','image/jpg');

        //   debug($formdata);
        // loop through and deal with the files
        $tipo = $uploadData["type"];
        

     
        // assume filetype is false
        $typeOK = false;
        // check filetype is ok
        foreach ($permitted as $type) {
            //echo $type."=".$file['type']."<br>";
            if ($type === $tipo) {
                $typeOK = true;
                break;
            }
        }

        // Return false by default, should return true on success
        if($typeOK === true) {
            return true;
        }
        return false;
    }

    public function validarCiudad($opcion = array()) {
        //debug($opcion);
        if ($opcion["ciudad_id"] === 0 || empty($opcion["ciudad_id"])) {

            return false;
        }
        //echo "Entro aqio";
        return true;
    }

    public function validarGenero($opcion = array()) {
        //debug($opcion);
        if ($opcion["genero"] === 0 || empty($opcion["genero"])) {

            return false;
        }
        //echo "Entro aqio";
        return true;
    }

    public function validarRol($opcion = array()) {
        //debug($opcion);
        if ($opcion["rol_id"] === 0 || empty($opcion["rol_id"])) {

            return false;
        }
        //echo "Entro aqio";
        return true;
    }

    public function validate_passwords() {
        return trim($this->data[$this->alias]['password']) === trim($this->data[$this->alias]['password1']);
    }

    public function validarCorregimiento($opcion = array()) {
        //debug($opcion);
        if ($opcion["corregimiento_id"] === 0 || empty($opcion["corregimiento_id"])) {

            return false;
        }
        //echo "Entro aqio";
        return true;
    }

    public function validarTipoAgricultura($opcion = array()) {
        //debug($opcion);
        if ($opcion["tipo_agricultura_id"] === 0 || empty($opcion["tipo_agricultura_id"])) {

            return false;
        }
        //echo "Entro aqio";
        return true;
    }

    public function validateIdentification($identificacion) {
        $count = $this->find('count', array(
            'conditions' => array(
                'identificacion' => $identificacion,
                'identificacion' => $this->data[$this->alias]['identificacion'])
        ));
        return $count == 0;
    }

    public function validateUsername($username) {
        $count = $this->find('count', array(
            'conditions' => array(
                'username' => $username,
                'username' => $this->data[$this->alias]['username'])
        ));
        return $count == 0;
    }

    public function validateEmail($email) {
        $count = $this->find('count', array(
            'conditions' => array(
                'email' => $email,
                'email' => $this->data[$this->alias]['email'])
        ));
        return $count == 0;
    }

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
            /* 'GoogleMap' => array(
              'className' => 'GoogleMap',
              'foreignKey' => 'google_map_id',
              'conditions' => '',
              'fields' => '',
              'order' => ''
              ) */
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
