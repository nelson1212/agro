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

    public function validarGenero($opcion = array()) {
        //debug($opcion);
        if ($opcion["genero"] === 0 || empty($opcion["genero"])) {
           
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

    public function validarSize($opcion) {
        // Shift the array to easily acces $_POST
        //debug($opcion);
        $uploadData = array_shift($opcion);

        // debug($uploadData);
        // Basic checks
        if ($uploadData['size'] == 0 || $uploadData['error'] !== 0) {
            return false;
        }


        //echo $size = $uploadData["size"];

        if ($uploadData["size"] > 1024000) {
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
   
}
