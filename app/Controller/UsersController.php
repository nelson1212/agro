<?php

App::uses('AppController', 'Controller');
App::import('Vendor', 'FormValidator', array('file' => 'sanitize.php'));

/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class UsersController extends AppController {

    /**
     * Components
     *
     * @var array
     */
    public $components = array('Paginator', 'Flash', 'Session','RequestHandler');
    
    var $helpers = array('Js'); //*** IMPORTANT 


    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->layout = "admin";
        $this->User->recursive = 0;
        $this->set('users', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->User->exists($id)) {
            throw new NotFoundException(__('Invalid user'));
        }
        $options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
        $this->set('user', $this->User->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->User->create();
            if ($this->User->save($this->request->data)) {
                $this->Flash->success(__('The user has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
        }
        $veredas = $this->User->Vereda->find('list');
        $departamentos = $this->User->Departamento->find('list');
        $paisses = $this->User->Paiss->find('list');
        $ciudads = $this->User->Ciudad->find('list');
        $corregimientos = $this->User->Corregimiento->find('list');
        $tipoAgriculturas = $this->User->TipoAgricultura->find('list');
        $rols = $this->User->Rol->find('list');
        $googleMaps = $this->User->GoogleMap->find('list');
        $this->set(compact('veredas', 'departamentos', 'paisses', 'ciudads', 'corregimientos', 'tipoAgriculturas', 'rols', 'googleMaps'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        if (!$this->User->exists($id)) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->User->save($this->request->data)) {
                $this->Flash->success(__('The user has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
            $this->request->data = $this->User->find('first', $options);
        }
        $veredas = $this->User->Vereda->find('list');
        $departamentos = $this->User->Departamento->find('list');
        $paisses = $this->User->Paiss->find('list');
        $ciudads = $this->User->Ciudad->find('list');
        $corregimientos = $this->User->Corregimiento->find('list');
        $tipoAgriculturas = $this->User->TipoAgricultura->find('list');
        $rols = $this->User->Rol->find('list');
        $googleMaps = $this->User->GoogleMap->find('list');
        $this->set(compact('veredas', 'departamentos', 'paisses', 'ciudads', 'corregimientos', 'tipoAgriculturas', 'rols', 'googleMaps'));
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->User->delete()) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

    /**
     * admin_index method
     *
     * @return void
     */
    public function admin_index() {
        $this->layout = "admin";
        $this->User->recursive = -1;
        $rols = $this->User->Rol->find('list');
        $this->unshift($rols, 0, "Seleccione una opción");
        $this->set(compact('rols'));
        //$this->set('users', $this->Paginator->paginate());
    }

    public function getTables($page=null) {

        $this->User->recursive = 0; //Recursividad

        if ($this->request->is('ajax')) {
            $janitor = new janitor();
       
            echo $page;
            
            $settings = array('order' => array('User.id' => 'DESC'),
                //            'joins' => array(
                //                array(
                //                    'alias' => 'c',
                //                    'table' => 'ciudads',
                //                    'type' => 'INNER',
                //                    'conditions' => '`c`.`id` = `Barrio`.`ciudad_id`'
                //                ), array(
                //                    'alias' => 'com',
                //                    'table' => 'comunas',
                //                    'type' => 'LEFT',
                //                    'conditions' => '`com`.`id` = `Barrio`.`comuna_id`'
                //                ), array(
                //                    'alias' => 'dep',
                //                    'table' => 'departamentos',
                //                    'type' => 'INNER',
                //                    'conditions' => '`dep`.`id` = `c`.`departamento_id`'
                'limit' => 10);
            $this->Paginator->settings = $settings;
            $this->set('users', $this->Paginator->paginate());
            $this->autoRender = false;
            $this->layout = false;
            $this->viewPath = 'Elements';

            $cleanString = "Administrador";
            $elemento = $this->cleanString($cleanString);

            switch ($elemento) {
                case "Administrador":
                    return $this->render("lst_administradores")->body();

                case "Comprador":
                    return $this->render("lst_compradores")->body();

                case "Agricultor":
                    return $this->render("lst_agricultores")->body();

                case "Empresa":
                    return $this->render("lst_empresas")->body();

                case "Sub-Administrador":
                    return $this->render("lst_subadministradores")->body();
            }
        }
    }

    /**
     * admin_view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function admin_view($id = null) {
        if (!$this->User->exists($id)) {
            throw new NotFoundException(__('Invalid user'));
        }
        $options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
        $this->set('user', $this->User->find('first', $options));
    }

    /**
     * admin_add method
     *
     * @return void
     */
    public function admin_addusuario() {
        // $this->request->onlyAllow('ajax');
        //$this->autoRender = false;
        $this->User->recursive = 0; //Recursividad
        if ($this->request->is('ajax')) {
            $this->autoRender = false;
            $this->layout = false;
        } else {
            $this->layout = 'admin';
        }

        // $veredas = $this->User->Vereda->find('list');
        $departamentos = $this->User->Departamento->find('list');
        $this->unshift($departamentos, 0, "Seleccione una opción");
        //debug($departamentos); exit;
        $paisses = $this->User->Paiss->find('list');

        $ciudads = $this->User->Ciudad->find('list');
        $this->unshift($ciudads, 0, "Seleccione una opción");

        // $corregimientos = $this->User->Corregimiento->find('list');
        //$this->unshift($corregimientos, 0, "Seleccione una opción");

        $tipoAgriculturas = $this->User->TipoAgricultura->find('list');
        $this->unshift($tipoAgriculturas, 0, "Seleccione una opción");

        $rols = $this->User->Rol->find('list');
        $this->unshift($rols, 0, "Seleccione una opción");
        // unset($rols[4]); //Removemos empresa
        //debug($rols);
        //$googleMaps = $this->User->GoogleMap->find('list');

        $this->loadModel("Certificacion");
        $this->Certificacion->recursive = 0;
        $certificaciones = $this->Certificacion->find("list");

        $this->loadModel("Asociacion");
        $this->Asociacion->recursive = 0;
        $asociaciones = $this->Asociacion->find("list", array("fields" => array("id", "razon_social")));
        $this->unshift($asociaciones, 0, "Seleccione una opción");

        $ubicaciones = array("Internacional" => "Internacional", "Nacional" => "Nacional");
        $this->unshift($ubicaciones, 0, "Seleccione una opción");

        $generos = array(0 => "Seleccione una opción", "Femenino" => "Femenino", "Masculino" => "Masculino", "LGTBI" => "LGTBI");


        $this->set(compact('asociaciones', 'ubicaciones', 'certificaciones', 'veredas', 'generos', 'departamentos', 'paisses', 'ciudads', 'corregimientos', 'tipoAgriculturas', 'rols', 'googleMaps'));


        if ($this->request->is('ajax')) {

            //Clean String
            if (isset($_POST["element"])) {
                $janitor = new janitor();
                $cleanString = $janitor->sanitizeString($_POST["element"]);
                $elemento = $this->cleanString($cleanString);
                if (!empty($elemento)) {
                    $this->autoRender = false;
                    $this->viewPath = 'Elements';
                    return $this->render($elemento)->body();
                } else {
                    echo "<br><b>Error al intentar cargar la vista !!!</b><br>";
                }
            } else {
                echo "<br><b>Error al intentar cargar la vista !!!</b><br>";
            }
        }
        //return $data;
    }

    public function admin_preregistro() {
        $this->layout = "admin";
        $this->User->recursive = 0; //Recursividad

        /*  if ($this->request->is('post')) {
          // debug($this->validationErrors);
          // debug($this->request->data);
          $this->User->create();

          //exit;
          if ($this->User->save($this->request->data)) {
          $this->Flash->success(__('El usuario fue registrado.'));
          return $this->redirect(array('action' => 'index'));
          } else {
          debug($this->User->validationErrors);
          $this->Flash->error(__('El usuario no fue registrado, intenta de nuevo.'));
          }
          } */

        // $veredas = $this->User->Vereda->find('list');
        $departamentos = $this->User->Departamento->find('list');
        $this->unshift($departamentos, 0, "Seleccione una opción");
        //debug($departamentos); exit;
        $paisses = $this->User->Paiss->find('list');

        $ciudads = $this->User->Ciudad->find('list');
        $this->unshift($ciudads, 0, "Seleccione una opción");

        $corregimientos = $this->User->Corregimiento->find('list');
        $this->unshift($corregimientos, 0, "Seleccione una opción");

        $tipoAgriculturas = $this->User->TipoAgricultura->find('list');
        $this->unshift($tipoAgriculturas, 0, "Seleccione una opción");

        $rols = $this->User->Rol->find('list');
        $this->unshift($rols, 0, "Seleccione una opción");

        //$googleMaps = $this->User->GoogleMap->find('list');
        $generos = array(0 => "Seleccione una opción", "Femenino" => "Femenino", "Masculino" => "Masculino", "LGTBI" => "LGTBI");
        $this->set(compact('veredas', 'generos', 'departamentos', 'paisses', 'ciudads', 'corregimientos', 'tipoAgriculturas', 'rols', 'googleMaps'));
    }

    public function ajaxUserAdd() {
        $this->layout = null;
        $this->autoRender = false;
        $this->User->recursive = 0; //Recursividad

        $data["res"] = "no";
        //debug($this->request->data);
        if (!isset($this->request->data["User"]["rol_id"])) {
            $data["msj"] = "Debes seleccionar un tipo de usuario";
            echo json_encode($data);
            return;
        }

        if (intval($this->request->data["User"]["rol_id"]) === 0) {
            $data["msj"] = "Debes seleccionar un tipo de usuario";
            echo json_encode($data);
            return;
        }

        //Campos deshabilitados
        $this->request->data["User"]["departamento_id"] = 31; //Valle del cauca
        $this->request->data["User"]["vereda_id"] = null; //Vereda
        $this->request->data["User"]["paiss_id"] = null; //Pais

        $this->User->Rol->recursive = -1;
        $codRol = $this->User->Rol->find("first", array("conditions" => array("Rol.id" => $this->request->data["User"]["rol_id"])));

        //Sino subio foto
        if (!isset($this->request->data["User"]["foto"]["name"]) || empty($this->request->data["User"]["foto"]["name"]) || empty($this->request->data["User"]["foto"])) {
            $this->User->validator()->remove('foto');
        }

        switch ($codRol["Rol"]["abr"]) {
            case "adm":
                //echo "Entro aqi";
                //$this->request->data["User"]["rol_id"] = $codRol["Rol"]["id"];

                $this->User->validator()->remove('tipo_agricultura_id');
                $this->User->validator()->remove('ciudad_id');
                $this->User->validator()->remove('corregimiento_id');
                $this->User->validator()->remove('ubicacion');

                $this->request->data["User"]["tipo_agricultura_id"] = null;
                $this->request->data["User"]["ciudad_id"] = null;
                $this->request->data["User"]["corregimiento_id"] = null;
                $this->request->data["User"]["ubicacion"] = null;
                break;

            case "agr":
                break;

            case "subadm":
                break;

            case "com":
                $this->User->validator()->remove('tipo_agricultura_id');
                $this->User->validator()->remove('ciudad_id');
                $this->User->validator()->remove('corregimiento_id');


                $this->request->data["User"]["tipo_agricultura_id"] = null;
                $this->request->data["User"]["ciudad_id"] = null;
                $this->request->data["User"]["corregimiento_id"] = null;

                break;

            case "emp":
                break;
        }

        //  debug($this->request->data);

        $this->User->set($this->request->data); //Asignar datos al modelo
        //debug($this->request->data );


        $res = $this->uploadFiles("img/fotos", $this->request->data["User"]["foto"], $this->request->data["User"]["identificacion"]);

        // debug($res);
        if ($this->User->validates($this->request->data)) {
            //$this->request->data["User"]["foto"] = $res["archivo"];
            //$this->User->validator()->remove('foto');
            $this->User->validate = array(); // Stop validation on the model
            //$this->User->validator()->remove('foto', 'validarSize');
            //$this->User->validator()->remove('foto', 'validarExtension');
            $this->request->data["User"]["foto"] = $res["archivo"];
        }

        if ($this->request->is('post')) {
            $this->User->create();
            if ($this->User->save($this->request->data)) {
                $data["res"] = "si";
                $data["msj"] = 'El usuario fue registrado.';
            } else {
                foreach ($this->User->validationErrors as $key => $value) {
                    foreach ($value as $val) {
                        $data["errores_validacion"][$key] = $val;
                    }
                }

                $data["msj"] = "El usuario no fue registrado, intenta de nuevo.";
            }
            echo json_encode($data);
        }
    }

    public function ajaxEmpresaAdd() {
        $this->layout = null;
        $this->autoRender = false;
        $this->User->recursive = 0; //Recursividad
        $data["res"] = "no";

        $this->request->data["User"]["departamento_id"] = 31; //Valle del cauca
        $this->request->data["User"]["vereda_id"] = null; //Vereda
        $this->request->data["User"]["paiss_id"] = null; //Pais
        //
       // debug($this->data);
        if ($this->request->is('post')) {
            $this->User->create();
            if ($this->User->save($this->request->data)) {
                $data["res"] = "si";
                $data["msj"] = 'El usuario fue registrado.';
            } else {
                foreach ($this->User->validationErrors as $key => $value) {
                    foreach ($value as $val) {
                        $data["errores_validacion"][$key] = $val;
                    }
                }
                $data["msj"] = "El usuario no fue registrado, intenta de nuevo.";
            }
            echo json_encode($data);
        }
    }

    /**
     * admin_edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function admin_edit($id = null) {
        if (!$this->User->exists($id)) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->User->save($this->request->data)) {
                $this->Flash->success(__('The user has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
            $this->request->data = $this->User->find('first', $options);
        }
        $veredas = $this->User->Vereda->find('list');
        $departamentos = $this->User->Departamento->find('list');
        $paisses = $this->User->Paiss->find('list');
        $ciudads = $this->User->Ciudad->find('list');
        $corregimientos = $this->User->Corregimiento->find('list');
        $tipoAgriculturas = $this->User->TipoAgricultura->find('list');
        $rols = $this->User->Rol->find('list');
        $googleMaps = $this->User->GoogleMap->find('list');
        $this->set(compact('veredas', 'departamentos', 'paisses', 'ciudads', 'corregimientos', 'tipoAgriculturas', 'rols', 'googleMaps'));
    }

    /**
     * admin_delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function admin_delete($id = null) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->User->delete()) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

}
