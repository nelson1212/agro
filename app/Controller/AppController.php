<?php

date_default_timezone_set('America/Bogota');
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
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
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

    function debug($array = null) {
        if ($array == null or count($array) == 0) {
            return null;
        }

        echo "<pre>";
        print_r($array);
    }

    function unshift(array & $array, $key, $val) {
        $array = array_reverse($array, 1);
        $array[$key] = $val;
        $array = array_reverse($array, 1);

        return $array;
    }

    function cleanString($string) {
        $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.
        $string = preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.

        return preg_replace('/-+/', '-', $string); // Replaces multiple hyphens with single one.
    }

    function uploadFiles($folder, $formdata, $nombreFoto = null) {
        if (!isset($formdata["name"]) or empty($formdata["name"]) or empty($formdata)) {
            return null;
        }
        //error_reporting(0);
        // setup dir names absolute and relative
        $folder_url = WWW_ROOT . $folder;
        $rel_url = $folder;

        // create the folder if it does not exist
        if (!is_dir($folder_url)) {
            mkdir($folder_url);
        }

        // if itemId is set create an item folder
        /* if ($itemId) {
          // set new absolute folder
          $folder_url = WWW_ROOT . $folder . DS . $itemId;
          // set new relative folder
          $rel_url = $folder . DS . $itemId;
          // create directory
          if (!is_dir($folder_url)) {
          mkdir($folder_url);
          }
          } */


        // list of permitted file types, this is only images but documents can be added
        $permitted = array('image/gif', 'image/jpeg', 'image/pjpeg', 'image/png');

        //   debug($formdata);
        // loop through and deal with the files
        $tipo = $formdata["type"];
        $archivo = $formdata["name"];
        $error = $formdata["error"];
        $tmp_name = $formdata["tmp_name"];
        $size = $formdata["size"];
        $ext = pathinfo($formdata["name"], PATHINFO_EXTENSION);

        //echo $tipo;
        // echo $file."<br>";
        // replace spaces with underscores
        if ($nombreFoto == null) {
            $filename = str_replace(' ', '_', $archivo);
        } else {
            $filename = $nombreFoto . "." . $ext;
        }
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

        // if file type ok upload the file
        if ($typeOK) {

            // switch based on error code
            switch ($error) {
                case 0:
                    //echo $folder_url;
                    // check filename already exists
                    if (!file_exists($folder_url . DS . $filename)) {
                        // create full filename
                        $full_url = $folder_url . DS . $filename;
                        $url = $rel_url . '/' . $filename;
                        // upload the file
                        $success = move_uploaded_file($tmp_name, $full_url);
                    } else {
                        // create unique filename and upload file
                        $now = date('Y-m-d-His');
                        $full_url = $folder_url . DS . $now . $filename;
                        $url = $rel_url . '/' . $now . $filename;
                        $success = move_uploaded_file($tmp_name, $full_url);
                    }
                    // if upload was successful
                    if ($success) {
                        // save the url of the file
                        $result['carpeta'] = $url;
                        $result['path'] = $full_url;
                        $result['archivo'] = $filename;
                        $result['size'] = $size;
                        $result['ext'] = $ext;
                    } else {
                        $result['errors'] = "Error uploaded $filename. Please try again.";
                    }
                    break;
                case 3:
                    // an error occured
                    $result['errors'] = "Error uploading $filename. Please try again.";
                    break;
                default:
                    // an error occured
                    $result['errors'] = "System error uploading $filename. Contact webmaster.";
                    break;
                case 4:
                    // no file was selected for upload
                    $result['nofiles'] = "No file Selected";
                    break;
                default:
                    // unacceptable file type
                    $result['errors'] = "$filename cannot be uploaded. Acceptable file types: gif, jpg, png.";
                    break;
            }

            return $result;
        }
    }

}
