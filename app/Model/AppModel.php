<?php

/**
 * Application model for CakePHP.
 *
 * This file is application-wide model file. You can put all
 * application-wide model-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Model
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
App::uses('Model', 'Model');

/**
 * Application model for Cake.
 *
 * Add your application-wide methods in the class below, your models
 * will inherit them.
 *
 * @package       app.Model
 */
class AppModel extends Model {

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
            ), 'isUnique' => array(
                'rule' => array('isUnique'),
                'message' => 'Este nombre de usuario ya esta registrado',
                'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ), 'nombre_comun' => array(
            'notBlank' => array(
                'rule' => array('notBlank'),
                'message' => 'Debes llenar este campo',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ), 'isUnique' => array(
                'rule' => array('isUnique'),
                'message' => 'Este nombre ya esta registrado',
                'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),'nombre_cientifico' => array(
            'notBlank' => array(
                'rule' => array('notBlank'),
                'message' => 'Debes llenar este campo',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ), 'isUnique' => array(
                'rule' => array('isUnique'),
                'message' => 'Este nombre ya esta registrado',
                'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ), 'variedades' => array(
            'notBlank' => array(
                'rule' => array('notBlank'),
                'message' => 'Debes llenar este campo',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ), 
        ),'password' => array(
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
            ), 'isUnique' => array(
                'rule' => array('isUnique'),
                'message' => 'Este email ya esta en uso',
                'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ), 'genero_id' => array(
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
            'numeric' => array(
                'rule' => array('notBlank'),
                'message' => 'Debes ingresar un número de celular',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'genero' => array(
            'validarGenero' => array(
                'rule' => array('validarGenero'),
                'message' => 'Debes seleccionar un genero',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ), 'ciudad_id' => array(
            'validarCiudad' => array(
                'rule' => array('validarCiudad'),
                'message' => 'Debes seleccionar una ciudad/municipio'),
            'numeric' => array(
                'rule' => array('numeric'),
                'message' => 'Debes seleccionar una ciudad/municipio',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ), 'ciudad' => array(
            'notBlank' => array(
                'rule' => array('notBlank'),
                'message' => 'Debes llenar el campo ciudad'),
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
        ), 'nit' => array(
            'numeric' => array(
                'rule' => array('numeric'),
                'message' => 'Debes ingresar un número NIT valido y sin guiones',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ), 'isUnique' => array(
                'rule' => array('isUnique'),
                'message' => 'Este número ya esta esta registrado',
                'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'rut' => array(
            'numeric' => array(
                'rule' => array('numeric'),
                'message' => 'Debes llenar este campo',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ), 'isUnique' => array(
                'rule' => array('isUnique'),
                'message' => 'Este número ya esta esta registrado',
                'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'razon_social' => array(
            'notBlank' => array(
                'rule' => array('notBlank'),
                'message' => 'Debes llenar este campo',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'representante_legal' => array(
            'notBlank' => array(
                'rule' => array('notBlank'),
                'message' => 'Debes llenar este campol',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'persona_contacto' => array(
            'notBlank' => array(
                'rule' => array('notBlank'),
                'message' => 'Debes llenar este campo',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ), 'telefono' => array(
            'numeric' => array(
                'rule' => array('numeric'),
                'message' => 'Debes llenar este campo',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'celular' => array(
            'numeric' => array(
                'rule' => array('numeric'),
                'message' => 'Debes llenar este campo',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'direccion' => array(
            'notBlank' => array(
                'rule' => array('notBlank'),
                'message' => 'Debes llenar este campo',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'departamento_id' => array(
            'validarSelDep' => array(
                'rule' => array('validarSelDep'),
                'message' => 'Debes seleccionar un departamento',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ), 'paiss_id' => array(
            'validarSelPais' => array(
                'rule' => array('validarSelPais'),
                'message' => 'Debes seleccionar un pais',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        )
    );

    public function validarGenero($opcion = array()) {
        // debug($opcion);
        if (intVal($opcion["genero_id"]) === 0 || empty($opcion["genero_id"])) {

            return false;
        }
        //echo "Entro aqio";
        return true;
    }

    public function validarVacia($opcion) {
        // Shift the array to easily acces $_POST
        //debug($opcion);
        $uploadData = array_shift($opcion);

        // debug($uploadData);
        // Basic checks
        if ($uploadData['size'] == 0 || $uploadData['error'] !== 0) {
            return false;
        }


        return true;
    }

    public function validarExtension($opcion) {
        // Shift the array to easily acces $_POST
        $uploadData = array_shift($opcion);

        // Basic checks
        if ($uploadData['size'] == 0 || $uploadData['error'] !== 0) {
            return false;
        }

        $permitted = array('image/jpeg', 'image/pjpeg', 'image/png', 'image/jpg');

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
        if ($typeOK === true) {
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

    public function validarUbicacion($opcion = array()) {
        //debug($opcion);
        if ($opcion["ubicacion"] === 0 || empty($opcion["ubicacion"])) {

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

    public function validarSelDep($opcion = array()) {
        //debug($opcion);
        if ($opcion["departamento_id"] === 0 || empty($opcion["departamento_id"])) {

            return false;
        }
        //echo "Entro aqio";
        return true;
    }

    public function validarSelPais($opcion = array()) {
        //debug($opcion);
        if ($opcion["paiss_id"] === 0 || empty($opcion["paiss_id"])) {

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

    function begin() {
        $db = ConnectionManager::getDataSource($this->useDbConfig);
        $db->begin($this);
    }

    function commit() {
        $db = ConnectionManager::getDataSource($this->useDbConfig);
        $db->commit($this);
    }

    function rollback() {
        $db = ConnectionManager::getDataSource($this->useDbConfig);
        $db->rollback($this);
    }

    function checkForeignKeys($table, $id = 0) {


        $sql = "SELECT 
                    `TABLE_SCHEMA`,                          -- Foreign key schema
                    `TABLE_NAME`,                            -- Foreign key table
                    `COLUMN_NAME`,                           -- Foreign key column
                    `REFERENCED_TABLE_SCHEMA`,               -- Origin key schema
                    `REFERENCED_TABLE_NAME`,                 -- Origin key table
                    `REFERENCED_COLUMN_NAME`                 -- Origin key column
                  FROM
                    `INFORMATION_SCHEMA`.`KEY_COLUMN_USAGE`  -- Will fail if user don't have privilege
                  WHERE
                    `TABLE_SCHEMA` = SCHEMA()                -- Detect current schema in USE 
                    AND `REFERENCED_TABLE_NAME` = '" . $table . "'";

        $query = $this->query($sql);

        //  debug($query); exit;
        // echo "<pre>";
        //   print_r($query); exit;
        //$i = 0;
        //  $info = array();
        $totalRef = 0;

        for ($i = 0; $i < count($query); $i++) {



            //echo "<br>";
            $query_str = "SELECT * FROM " . $query[$i]["KEY_COLUMN_USAGE"]["TABLE_NAME"] . " WHERE " . $query[$i]["KEY_COLUMN_USAGE"]["COLUMN_NAME"] . "=" . $id;
            //   echo $query_str;
            $query = $this->query($query_str);
            // $info[$row->TABLE_NAME] = [$query->num_rows()];
            //debug($query);
            $totalRef = $totalRef + count($query);

            //if ($i === 0) {
            //$tablas.="No puedes borrar este registro porque esta asociado a (".$query->num_rows().") registro(s) de la tabla " . $row->TABLE_NAME;
            // } else {
            //  $tablas.=", " . $row->TABLE_NAME." (".$query->num_rows().")";
            //}
            // $i++;
        }
        //echo "Conteo". $totalRef;
        //exit;
        //   $info["conteo"] = $totalRef;
        // $tablas="No puedes borrar este registro porque esta asociado a registros de otra tabla ";
        // echo "dadas".count($info); exit;
        // $info["msj"] = "No puedes borrar este registro porque esta asociado a registros de otra tabla ";
        //echo $totalRef;
        return $totalRef;
    }

}
