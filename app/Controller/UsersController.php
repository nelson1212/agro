<?php

App::uses('AppController', 'Controller');
App::uses('Sanitize', 'Vendor');

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
    public $components = array('Paginator', 'Flash', 'Session', 'RequestHandler');
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
    public function view() {
        $this->layout = "front";
        /* if (!$this->User->exists($id)) {
          throw new NotFoundException(__('Invalid user'));
          }
          $options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
          $this->set('user', $this->User->find('first', $options)); */
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {

        $this->layout = "front";

        if ($this->request->is('post')) {

            //No es guardar usuarios
            if (!isset($this->request->data["btnFrontGuaAgr"])) {
                $elemento = "";
                $this->Session->write("elemento", $elemento);

                if (!isset($this->request->data["User"]["codVer"])) {
                    $this->Flash->error(__('Debes ingresar un código de verificación.'));
                    goto finAdd;
                } else

                if (empty($this->request->data["User"]["codVer"])) {
                    $this->Flash->error(__('Debes ingresar un código de verificación.'));
                    goto finAdd;
                }

                $codigo = $this->request->data["User"]["codVer"];
                $this->loadModel("Preregistro");
                $this->Preregistro->recursive = -1;

                $novedad = $this->Preregistro->find("first", array("conditions" => array("Preregistro.codigo" => $codigo)));

                if (count($novedad) > 0) {

                    switch ($novedad["Preregistro"]["tipo"]) {
                        case "agr":
                            $this->Session->write("tipoFrontUser", $novedad["Preregistro"]["tipo"]);
                            $elemento = "front_reg_agricultores";
                            break;

                        case "emp":
                            $this->Session->write("tipoFrontUser", $novedad["Preregistro"]["tipo"]);
                            $elemento = "front_reg_empresas";
                            break;

                        case "com":
                            $this->Session->write("tipoFrontUser", $novedad["Preregistro"]["tipo"]);
                            $elemento = "front_reg_compradores";
                            break;

                        default:
                            break;
                    }

                    $this->Session->write("elemento", $elemento);
                } else {
                    $this->Session->write("tipoFrontUser", "");
                    $this->Flash->error(__('El código de verificación ingresado no existe.'));
                    goto finAdd;
                    //return;
                }
            } else if (isset($this->request->data["btnFrontGuaAgr"])) {
                //  debug($this->request->data);
                //exit;
                $this->User->create();
                if ($this->User->save($this->request->data)) {
                    $this->Flash->success(__('El registro fue exitoso.'));
                    return $this->redirect(array('action' => 'index'));
                } else {
                    $this->Flash->error(__('El registro no fue exitoso. Por favor, intenta de nuevo.'));
                }
            }
        }

        finAdd:
        $elemento = $this->Session->read("elemento");
        //echo "llego aqui";
        $generos = array(0 => "Seleccione una opción", "Femenino" => "Femenino", "Masculino" => "Masculino", "LGTBI" => "LGTBI");
        //$veredas = $this->User->Vereda->find('list');
        //$departamentos = $this->User->Departamento->find('list');
        //$paisses = $this->User->Paiss->find('list');
        $this->loadModel("Asociacion");
        $this->Asociacion->recursive = 0;
        $asociaciones = $this->Asociacion->find("list", array("fields" => array("id", "razon_social")));
        $this->unshift($asociaciones, 0, "Seleccione una opción");

        $this->loadModel("Certificacion");
        $this->Certificacion->recursive = 0;
        $certificaciones = $this->Certificacion->find("list");

        $ciudads = $this->User->Ciudad->find('list');
        $this->unshift($ciudads, 0, "Seleccione una opción");

        $corregimientos = $this->User->Corregimiento->find('list');
        $this->unshift($corregimientos, 0, "Seleccione una opción");

        $tipoAgriculturas = $this->User->TipoAgricultura->find('list');
        $this->unshift($tipoAgriculturas, 0, "Seleccione una opción");

        $ubicaciones = $this->User->Ubicacion->find('list', array("fields" => array("abr", "nombre")));
        unset($ubicaciones["reg"]);
        $this->unshift($ubicaciones, 0, "Seleccione una opción");


        //$rols = $this->User->Rol->find('list');
        // $googleMaps = $this->User->GoogleMap->find('list');
        $this->set(compact('veredas', 'generos', 'ubicaciones', 'asociaciones', 'certificaciones', 'elemento', 'departamentos', 'paisses', 'ciudads', 'corregimientos', 'tipoAgriculturas'));
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
        //$this->User->recursive = -1;
        //$url = $this->webroot . "admin/index";
        $rolSeleccionado = 0;
        $element = "";
        //$conditions = array();
        //debug($this->request->params);
        if ($this->request->is('post')) {

            //debug($this->request->data);

            if (isset($this->request->data["User"]["busqueda"])) {
                $filter_url['controller'] = $this->request->params['controller'];
                $filter_url['action'] = $this->request->params['action'];
                // We need to overwrite the page every time we change the parameters
                $filter_url['page'] = 1;

                // for each filter we will add a GET parameter for the generated url
                foreach ($this->request->data as $name => $value) {
                    if ($value) {
                        // You might want to sanitize the $value here
                        // or even do a urlencode to be sure
                        $filter_url[$name] = urlencode($value);
                    }
                }
                return $this->redirect($filter_url);
            }

            if (isset($this->request->data["User"]["busIndex"])) {
                $this->Session->write("rolSeleccionado", $this->request->data["User"]["rol_id"]);
            }

            if (!isset($this->request->data["User"]["rol_id"])) {
                $this->Flash->error(__('Debes seleccionar un tipo de usuario'));
                goto finAdminIndex;
            }

            if ($this->request->data["User"]["rol_id"] === 0 || empty($this->request->data["User"]["rol_id"])) {
                $this->Flash->error(__('Debes seleccionar un tipo de usuario'));
                goto finAdminIndex;
            }

            //     debug($this->request->data);
            $this->User->Rol->recursive = -1;
            $codRol = $this->User->Rol->find("first", array("conditions" => array("Rol.id" => $this->request->data["User"]["rol_id"])));
            $titulo = "";
            //debug($codRol);
            //$this->set();
            //$this->viewPath = 'Elements';
            //  $this->render("Elements/lst_administradores");
            switch ($codRol["Rol"]["abr"]) {
                case "adm":
                    $titulo = "Listado de administradores";
                    $element = "lst_administradores";
                    break;
                // $this->render("lst_administradores");

                case "com":
                    $titulo = "Listado de compradores";
                    $element = "lst_compradores";
                    break;
                // return $this->render("lst_compradores")->body();

                case "agr":
                    $titulo = "Listado de agricultores";
                    $element = "lst_agricultores";
                    break;
                //return $this->render("lst_agricultores")->body();

                case "emp":
                    $titulo = "Listado de empresas";
                    $element = "lst_empresas";
                    break;
                //return $this->render("lst_empresas")->body();

                case "subadm":
                    $titulo = "Listado de Sub-Administradores";
                    $element = "lst_subadministradores";
                    break;
                //return $this->render("lst_subadministradores")->body();
            }

            $this->Session->write("elemento", $element);
            $this->Session->write("titulo", $titulo);
        } else {
            // debug($this->request->params);
            //if (count($this->request->params["named"]) > 0) {
            $element = $this->Session->read("elemento");
            $titulo = $this->Session->read("titulo");
//            } else {
//            $element = $this->Session->read("elemento");
//            $titulo = $this->Session->read("titulo");
            ///}
        }
        //$rol=1;
        // $res = $this->getRolCodeAndTitle();
        $filtros = array("filIde" => "identificacion",
            "filNom" => "nombres",
            "filApe" => "apellidos",
            "filEmail" => "email");

        $conditions = $this->adminSearchParameters("User", $filtros);

        $settings = array('order' => array('User.id' => 'DESC'),
            'limit' => 10, 'conditions' => $conditions);

        $this->Paginator->settings = $settings;

        $users = $this->Paginator->paginate();

        finAdminIndex:
        $rols = $this->User->Rol->find('list');
        $this->unshift($rols, 0, "Seleccione una opción");

        if (!($this->Session->read("rolSeleccionado") === null)) {
            $rolSeleccionado = $this->Session->read("rolSeleccionado");
        }

        $this->set(compact('rols', 'users', 'rolSeleccionado', 'element', 'titulo'));
    }

//    
//    public function getTables($page = null) {
//
//        $this->User->recursive = 0; //Recursividad
//
//        if ($this->request->is('ajax')) {
//            $janitor = new janitor();
//
//            echo $page;
//
//            $settings = array('order' => array('User.id' => 'DESC'),
//                //            'joins' => array(
//                //                array(
//                //                    'alias' => 'c',
//                //                    'table' => 'ciudads',
//                //                    'type' => 'INNER',
//                //                    'conditions' => '`c`.`id` = `Barrio`.`ciudad_id`'
//                //                ), array(
//                //                    'alias' => 'com',
//                //                    'table' => 'comunas',
//                //                    'type' => 'LEFT',
//                //                    'conditions' => '`com`.`id` = `Barrio`.`comuna_id`'
//                //                ), array(
//                //                    'alias' => 'dep',
//                //                    'table' => 'departamentos',
//                //                    'type' => 'INNER',
//                //                    'conditions' => '`dep`.`id` = `c`.`departamento_id`'
//                'limit' => 10);
//            $this->Paginator->settings = $settings;
//            $this->set('users', $this->Paginator->paginate());
//            $this->autoRender = false;
//            $this->layout = false;
//            $this->viewPath = 'Elements';
//
//            $cleanString = "Administrador";
//            $elemento = $this->cleanString($cleanString);
//
//            switch ($elemento) {
//                case "Administrador":
//                    return $this->render("lst_administradores")->body();
//
//                case "Comprador":
//                    return $this->render("lst_compradores")->body();
//
//                case "Agricultor":
//                    return $this->render("lst_agricultores")->body();
//
//                case "Empresa":
//                    return $this->render("lst_empresas")->body();
//
//                case "Sub-Administrador":
//                    return $this->render("lst_subadministradores")->body();
//            }
//        }
//    }

    /**
     * admin_view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
//    public function admin_view($id = null) {
//        if (!$this->User->exists($id)) {
//            throw new NotFoundException(__('Invalid user'));
//        }
//        $options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
//        $this->set('user', $this->User->find('first', $options));
//    }
//
//    /**
//     * admin_add method
//     *
//     * @return void
//     */
//    public function admin_addusuario() {
//        // $this->request->onlyAllow('ajax');
//        //$this->autoRender = false;
//        $this->User->recursive = 0; //Recursividad
//        if ($this->request->is('ajax')) {
//            $this->autoRender = false;
//            $this->layout = false;
//        } else {
//            $this->layout = 'admin';
//        }
//
//        // $veredas = $this->User->Vereda->find('list');
//        $departamentos = $this->User->Departamento->find('list');
//        $this->unshift($departamentos, 0, "Seleccione una opción");
//        //debug($departamentos); exit;
//        $paisses = $this->User->Paiss->find('list');
//
//        $ciudads = $this->User->Ciudad->find('list');
//        $this->unshift($ciudads, 0, "Seleccione una opción");
//
//        // $corregimientos = $this->User->Corregimiento->find('list');
//        //$this->unshift($corregimientos, 0, "Seleccione una opción");
//
//        $tipoAgriculturas = $this->User->TipoAgricultura->find('list');
//        $this->unshift($tipoAgriculturas, 0, "Seleccione una opción");
//
//        $rols = $this->User->Rol->find('list');
//        $this->unshift($rols, 0, "Seleccione una opción");
//        // unset($rols[4]); //Removemos empresa
//        //debug($rols);
//        //$googleMaps = $this->User->GoogleMap->find('list');
//
//        $this->loadModel("Certificacion");
//        $this->Certificacion->recursive = 0;
//        $certificaciones = $this->Certificacion->find("list");
//
//        $this->loadModel("Asociacion");
//        $this->Asociacion->recursive = 0;
//        $asociaciones = $this->Asociacion->find("list", array("fields" => array("id", "razon_social")));
//        $this->unshift($asociaciones, 0, "Seleccione una opción");
//
//        $ubicaciones = array("Internacional" => "Internacional", "Nacional" => "Nacional");
//        $this->unshift($ubicaciones, 0, "Seleccione una opción");
//
//        $generos = array(0 => "Seleccione una opción", "Femenino" => "Femenino", "Masculino" => "Masculino", "LGTBI" => "LGTBI");
//
//
//        $this->set(compact('asociaciones', 'ubicaciones', 'certificaciones', 'veredas', 'generos', 'departamentos', 'paisses', 'ciudads', 'corregimientos', 'tipoAgriculturas', 'rols', 'googleMaps'));
//
//
//        if ($this->request->is('ajax')) {
//
//            //Clean String
//            if (isset($_POST["element"])) {
//                $janitor = new janitor();
//                $cleanString = $janitor->sanitizeString($_POST["element"]);
//                $elemento = $this->cleanString($cleanString);
//                if (!empty($elemento)) {
//                    $this->autoRender = false;
//                    $this->viewPath = 'Elements';
//                    return $this->render($elemento)->body();
//                } else {
//                    echo "<br><b>Error al intentar cargar la vista !!!</b><br>";
//                }
//            } else {
//                echo "<br><b>Error al intentar cargar la vista !!!</b><br>";
//            }
//        }
//        //return $data;
//    }

    public function admin_addusuario() {
        // $this->request->onlyAllow('ajax');
        //$this->autoRender = false;
        $this->User->recursive = 0; //Recursividad
        $this->layout = 'admin';

        $elemento = "";
        $titulo = "";
        $nombre = "";


        $this->loadModel("Departamento");
        $this->Departamento->recursive = -1;
        $departamentos = $this->Departamento->find('list');
        $this->unshift($departamentos, 0, "Seleccione una opción");

//        
        $this->loadModel("Paiss");
        $this->Paiss->recursive = -1;
        $paises = $this->Paiss->find('list');
        $this->unshift($paises, 0, "Seleccione una opción");

        //$ciudads = $this->User->Ciudad->find('list'); a futuro si se extiende para todos los departamentos
        //Solo Valle del Cauca
        $this->loadModel("Ciudad");
        $this->Ciudad->recursive = -1;
        $ciudads = $this->Ciudad->find('list', array("conditions" => array("Ciudad.departamento_id" => 30))); //Valle
        // debug($ciudads);
        $this->unshift($ciudads, 0, "Seleccione una opción");

        // debug($ciudads);
        //$this->loadModel("Corregimiento");
        //$this->Corregimiento->recursive = -1;
        //  $corregimientos = $this->Corregimiento->find('list',array("conditions"=>array("Corregimiento.ciudad_id"=>'1062')));
        //$this->unshift($corregimientos, 0, "Seleccione una opción");
        //debug($corregimientos);

        $this->loadModel("Paiss");
        $this->Paiss->recursive = -1;
        $paises = $this->Paiss->find('list');
        $this->unshift($paises, 0, "Seleccione una opción");
        //debug($corregimientos);

        $this->loadModel("TipoAgricultura");
        $this->TipoAgricultura->recursive = -1;
        $tipoAgriculturas = $this->TipoAgricultura->find('list');
        $this->unshift($tipoAgriculturas, 0, "Seleccione una opción");

        $rols = $this->User->Rol->find('list', array("fields" => array("abr", "nombre")));
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

        $this->loadModel("Genero");
        $this->Genero->recursive = 0;
        $generos = $this->Genero->find("list", array('order' => array(
                'Genero.id ASC'
        )));
        $this->unshift($generos, 0, "Seleccione una opción");



        if ($this->request->is('post')) {

            //debug($this->request->data);
            //Acciones permitidas
            $acciones = array("setFormTipoUsuario");

            //Validaciones de que exista la acción
            if (!isset($this->request->data["accion"])) {
                $this->Flash->error(__('Error al intentar registrar el usuario'));
                goto finAdminAddusuario;
            }

            if (!in_array($this->request->data["accion"], $acciones)) {
                $this->Flash->error(__('Error al intentar registrar el usuario'));
                goto finAdminAddusuario;
            }

            //Validaciones de que exista el tipo de usuario
            if (!isset($this->request->data["tipo_usuario"])) {
                $this->Flash->error(__('Error al intentar registrar el usuario'));
                goto finAdminAddusuario;
            }

            if (!array_key_exists($this->request->data["tipo_usuario"], $rols)) {
                $this->Flash->error(__('Error al intentar registrar el usuario'));
                goto finAdminAddusuario;
            }

            $accion = $this->request->data["accion"];
            // echo $this->request->data["tipo_usuario"];
            $tipoUsuario = $this->obtenerRol($this->request->data["tipo_usuario"]);

            if ($tipoUsuario === 0) {
                $this->Flash->error(__('Error critico: El tipo de usuario especificado no existe, consulta al administrador'));
                goto finAdminAddusuario;
            }
            //  exit;
            switch ($accion) {
                case "setFormTipoUsuario":
                    $response = $this->getRolCodeAndTitle($tipoUsuario["abr"]);
                    $this->request->data["User"]["rol_id"];
                    //$rolId = $this->request->data["User"]["rol_id"];
                    $elemento = $response["element"];
                    $titulo = $response["title"];
                    $nombre = $response["name"];
                    break;
            }
        }

        finAdminAddusuario:
        $this->set(compact('asociaciones', 'rolId', 'elemento', 'paises', 'ubicaciones', 'certificaciones', 'veredas', 'generos', 'departamentos', 'paisses', 'ciudads', 'corregimientos', 'tipoAgriculturas', 'rols', 'googleMaps'));
    }

    public function admin_preregistro() {
        $this->layout = "admin";
        $this->User->recursive = 0; //Recursividad

        $rols = $this->User->Rol->find('list', array("fields" => array("abr", "nombre"), "conditions" => array("Rol.abr !=" => array("adm", "subadmin"))));
        $this->unshift($rols, 0, "Seleccione una opción");

        if ($this->request->is('post')) {

            //debug($this->request->data);

            if (!isset($this->request->data["User"]["rol_id"])) {
                $this->Flash->error(__('Debes seleccionar un tipo de usuario'));
                goto finAdminPreregistro;
                return;
            }

            if (!array_key_exists($this->request->data["User"]["rol_id"], $rols)) {
                $this->Flash->error(__('El tipo de usuario seleccionado es incorrecto'));
                goto finAdminPreregistro;
                return;
            }

            if (isset($this->request->data["accion"])) {


                $this->loadModel("Preregistro");
                // $this->Preregistro->recursive = -1;
                $this->Preregistro->create();


//                $cleanString = $janitor->sanitizeString($_POST["element"]);
//                $elemento = $this->cleanString($cleanString);

                $this->request->data["Preregistro"]["codigo"] = $this->getRandomKey()["pass"];
                $this->request->data["Preregistro"]["tipo"] = $this->request->data["User"]["rol_id"];


                //Quitar espacios en blanco de todas las entrdas
                $this->request->data['Preregistro'] = array_map('trim', $this->request->data['Preregistro']);
                // $this->request->data['Preregistro'] = array_map(Sanitize::stripAll, $this->request->data['Preregistro']);
                $this->request->data = Sanitize::clean($this->request->data);


                // debug($this->request->data);

                if ($this->Preregistro->save($this->request->data)) {
                    $cod = $this->request->data["Preregistro"]["codigo"];
                    $this->Flash->error(__('El pre-registro fue creado correctamente, el código ' . $cod . ' se envio al correo del usuario'));
                } else {
                    $this->Flash->error(__('El pre-registro no fue creado correctamente, intenta de nuevo'));
                }
                // echo "Entrp aqui";
            }

            $element = "";
            $titulo = "";
            switch ($this->request->data["User"]["rol_id"]) {
                case "agr":
                    $element = "agricultor_preregistro";
                    $titulo = "Agricultor";
                    break;
                case "com":
                    $element = "comprador_preregistro";
                    $titulo = "Comprador";
                    break;
                case "emp":
                    $element = "empresa_preregistro";
                    $titulo = "Empresa";
                    break;
            }


            // debug($this->validationErrors);
            //debug($this->request->data);
            /* $this->User->create();

              //exit;
              if ($this->User->save($this->request->data)) {
              $this->Flash->success(__('El usuario fue registrado.'));
              return $this->redirect(array('action' => 'index'));
              } else {
              debug($this->User->validationErrors);
              $this->Flash->error(__('El usuario no fue registrado, intenta de nuevo.'));
              } */
        }

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

        $ubicaciones = $this->User->Ubicacion->find('list', array("fields" => array("abr", "nombre")));
        $this->unshift($ubicaciones, 0, "Seleccione una opción");

        finAdminPreregistro:



        //$googleMaps = $this->User->GoogleMap->find('list');
        $generos = array(0 => "Seleccione una opción", "Femenino" => "Femenino", "Masculino" => "Masculino", "LGTBI" => "LGTBI");
        $this->set(compact('veredas', 'titulo', "ubicaciones", 'element', 'generos', 'departamentos', 'paisses', 'ciudads', 'corregimientos', 'tipoAgriculturas', 'rols', 'googleMaps'));
    }

//    public function admin_lstpreregistro() {
//        $this->layout = "admin";
//        $this->loadModel("Preregistro");
//        $this->Preregistro->recursive = -1;
//
//        $settings = array('order' => array('Preregistro.id' => 'DESC'),
//            'limit' => 10);
//        
//        $this->Paginator->settings = $settings;
//        //$this->paginate['Preregistro'] = array( 'limit' => 10, 'order' => 'Preregistro.id' );
//        $lstPre = $this->paginate('Preregistro');
//
//        //debug($lstPre);
//        $this->set(compact('lstPre'));
//    }

    public function ajaxUserAdd() {
        //VALIDAR TODOS LOS CAMPOS DE LAS TABLAS EN UN ARREGLO DE EXISTENCIA

        $this->layout = null;
        $this->autoRender = false;
        $this->User->recursive = 0; //Recursividad

        $data["res"] = "no";
        //debug($this->User->schema()); //Esquema
        //debug($this->User->getColumnTypes()); //Campos con tipos getColumnTypes

        if (!isset($this->request->data["User"]["rol_id"])) {
            $data["msj"] = "Debes seleccionar un tipo de usuario";
            echo json_encode($data);
            return;
        }

        $permitidos = $this->User->Rol->find("list", array("fields" => array("abr", "nombre")));
        //debug($permitidos);
        //echo "res".array_key_exists($this->request->data["User"]["rol_id"], $permitidos); exit;
        if (!array_key_exists($this->request->data["User"]["rol_id"], $permitidos)) {
            $data["msj"] = "Debes seleccionar un tipo de usuario1";
            echo json_encode($data);
            return;
        }

        //Campos deshabilitados
        $this->request->data["User"]["departamento_id"] = 31; //Valle del cauca
        $this->request->data["User"]["vereda_id"] = null; //Vereda
        $this->request->data["User"]["paiss_id"] = null; //Pais
        //$this->User->Rol->recursive = -1;
        //$codRol = $this->User->Rol->find("first", array("conditions" => array("Rol.id" => $this->request->data["User"]["rol_id"])));
        //Sino subio foto
        if (!isset($this->request->data["User"]["foto"]["name"]) || empty($this->request->data["User"]["foto"]["name"]) || empty($this->request->data["User"]["foto"])) {
            $this->User->validator()->remove('foto');
        }

        $nombreFoto = "";
        switch ($this->request->data["User"]["rol_id"]) {
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
                $nombreFoto = $this->request->data["User"]["identificacion"];
                break;

            case "agr":
                $nombreFoto = $this->request->data["User"]["identificacion"];
                break;

            case "subadm":
                $nombreFoto = $this->request->data["User"]["identificacion"];
                break;

            case "com":
                $this->User->validator()->remove('tipo_agricultura_id');
                $this->User->validator()->remove('ciudad_id');
                $this->User->validator()->remove('corregimiento_id');


                $this->request->data["User"]["tipo_agricultura_id"] = null;
                $this->request->data["User"]["ciudad_id"] = null;
                $this->request->data["User"]["corregimiento_id"] = null;
                $nombreFoto = $this->request->data["User"]["identificacion"];

                break;

            case "emp":
                $this->User->validator()->remove('identificacion');
                $nombreFoto = $this->getRandomKey();
                break;
        }

        //  debug($this->request->data);

        $this->User->set($this->request->data); //Asignar datos al modelo
        //debug($this->request->data );


        $res = $this->uploadFiles("img/fotos", $this->request->data["User"]["foto"], $nombreFoto);

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

    function getRolCodeAndTitle($code = null) {

        if ($code === null) {
            return null;
        }

        $element = "";
        $titulo = "";
        $name = "";

        switch ($code) {
            case "adm":
                $titulo = "Listado de administradores";
                $element = "administradores";
                $name = "Administradores";
                break;
            // $this->render("lst_administradores");

            case "com":
                $titulo = "Listado de compradores";
                $element = "compradores";
                $name = "Compradores";
                break;
            // return $this->render("lst_compradores")->body();

            case "agr":
                $titulo = "Listado de agricultores";
                $element = "agricultores";
                $name = "Agricultores";
                break;
            //return $this->render("lst_agricultores")->body();

            case "emp":
                $titulo = "Listado de empresas";
                $element = "empresas";
                $name = "Empresas";
                break;
            //return $this->render("lst_empresas")->body();

            case "subadmin":
                $titulo = "Listado de sub-administradores";
                $element = "subadministradores";
                $name = "Sub-Administradores";
                break;

            case "empnac":
                $titulo = "Listado de empresas nacionales";
                $element = "empresanacional";
                $name = "Empresa nacional";
                break;

            case "comnac":
                $titulo = "Listado de compradores nacionales";
                $element = "compradornacional";
                $name = "Comprador nacional";
                break;

            case "comint":
                $titulo = "Listado de compradores internacionales";
                $element = "compradorinternacional";
                $name = "Comprador internacional";
                break;

            case "empint":
                $titulo = "Listado de empresas internacionales";
                $element = "empresainternacional";
                $name = "Empresa internacional";
                break;
            //return $this->render("lst_subadministradores")->body();
        }

        return array("title" => $titulo, "element" => $element, "name" => $name, "abr" => $code);
    }

    //Modelo y Arreglo de parametros
//    function adminSearchParameters($medelo, $parametros) {
//        $conditions = array();
//        $and = false;
//        if (count($this->params['named']) > 2) {
//            $and = true;
//        }
//        // Inspect all the named parameters to apply the filters
//        foreach ($this->params['named'] as $param_name => $value) {
//            // Don't apply the default named parameters used for pagination
//            if (!in_array($param_name, array('page', 'sort', 'direction', 'limit'))) {
//                // You may use a switch here to make special filters
//                // like "between dates", "greater than", etc
//                if ($param_name != "") {
//
//                    if ($and === false) {
//
//                        if ($param_name == "filIde") {
//                            $conditions['OR']['User.identificacion LIKE'] = trim(urldecode($value)) . '%';
//                        }
//
//                        if ($param_name == "filNom") {
//                            $conditions['OR']['User.nombres LIKE'] = trim(urldecode($value)) . '%';
//                        }
//
//                        if ($param_name == "filApe") {
//                            $conditions['OR']['User.apellidos LIKE'] = trim(urldecode($value)) . '%';
//                        }
//
//                        if ($param_name == "filEmail") {
//                            $conditions['OR']['User.email LIKE'] = trim(urldecode($value)) . '%';
//                        }
//                    } else if ($and === true) {
//
//                        if ($param_name == "filIde") {
//                            $conditions['AND']['User.identificacion LIKE'] = trim(urldecode($value)) . '%';
//                        }
//
//                        if ($param_name == "filNom") {
//                            $conditions['AND']['User.nombres LIKE'] = trim(urldecode($value)) . '%';
//                        }
//
//                        if ($param_name == "filApe") {
//                            $conditions['AND']['User.apellidos LIKE'] = trim(urldecode($value)) . '%';
//                        }
//
//                        if ($param_name == "filEmail") {
//                            $conditions['AND']['User.email LIKE'] = trim(urldecode($value)) . '%';
//                        }
//                    }
//                } else {
//                    $conditions['Users.' . $param_name] = $value;
//                    //  $this->Paginator->settings = array('order' => array('User.id' => 'DESC'), 'conditions' =>$conditions);
//                }
//
//                $this->request->data['Filter'][$param_name] = $value;
//            }
//        }
//
//        // debug($conditions);
//        return $conditions;
//    }

    function adminSearchParameters($modelo, $parametros) {
        $conditions = array();
        $and = false;
        if (count($this->params['named']) > 2) {
            $and = true;
        }
        // Inspect all the named parameters to apply the filters
        foreach ($this->params['named'] as $param_name => $value) {
            // Don't apply the default named parameters used for pagination
            if (!in_array($param_name, array('page', 'sort', 'direction', 'limit'))) {
                // You may use a switch here to make special filters
                // like "between dates", "greater than", etc
                if ($param_name != "") {

                    if ($and === false) {

                        foreach ($parametros as $key => $val) {
                            if ($param_name === $key) {
                                $conditions['OR'][$modelo . "." . $val . " LIKE"] = trim(urldecode($value)) . '%';
                            }
                        }
                    } else if ($and === true) {

                        foreach ($parametros as $key => $val) {
                            if ($param_name === $key) {
                                $conditions['AND'][$modelo . "." . $val . " LIKE"] = trim(urldecode($value)) . '%';
                            }
                        }
                    }
                } else {
                    $conditions['Users.' . $param_name] = $value;
                    //  $this->Paginator->settings = array('order' => array('User.id' => 'DESC'), 'conditions' =>$conditions);
                }

                $this->request->data['Filter'][$param_name] = $value;
            }
        }

        //debug($conditions);
        return $conditions;
    }

    function destroySelectedRols() {
        $this->layout = false;
        $this->autoRender = false;
        $data["res"] = "no";
        if ($this->Session->delete("rolSeleccionado")) {
            $data["res"] = "si";
        }

        echo json_encode($data);
    }

    function admin_ajaxGetDivUbicacion() {

        $this->autoRender = false;
        $this->layout = false;

        //$data["res"] = "no";

        if (!isset($_POST["ubicacion"])) {
            goto finAjaxGetDivUbicacion;
        }

        if (empty($_POST["ubicacion"])) {
            goto finAjaxGetDivUbicacion;
        }

        $ubicacion = $_POST["ubicacion"];
        $acciones = array("int", "nac");

        ///$this->set(compact("ubicacion"));

        $departamentos = $this->User->Departamento->find('list');
        $this->unshift($departamentos, 0, "Seleccione una opción");
        //debug($departamentos); exit;
        $paisses = $this->User->Paiss->find('list');
        $this->unshift($paisses, 0, "Seleccione una opción");

        $ciudads = $this->User->Ciudad->find('list');
        $this->unshift($ciudads, 0, "Seleccione una opción");

        $corregimientos = $this->User->Corregimiento->find('list');
        $this->unshift($corregimientos, 0, "Seleccione una opción");

        $tipoAgriculturas = $this->User->TipoAgricultura->find('list');
        $this->unshift($tipoAgriculturas, 0, "Seleccione una opción");

        $ubicaciones = $this->User->Ubicacion->find('list', array("fields" => array("abr", "nombre")));
        $this->unshift($ubicaciones, 0, "Seleccione una opción");

        $generos = array(0 => "Seleccione una opción", "Femenino" => "Femenino", "Masculino" => "Masculino", "LGTBI" => "LGTBI");
        $this->set(compact('veredas', 'titulo', "ubicaciones", 'element', 'generos', 'departamentos', 'paisses', 'ciudads', 'corregimientos', 'tipoAgriculturas', 'rols', 'googleMaps'));


        if (in_array($ubicacion, $acciones)) {
            $this->viewPath = 'Elements/admin_registros/';

            switch ($ubicacion) {
                case "int":
                    return $this->render("divEmpInt")->body();
                //break;
                case "nac":
                    return $this->render("divEmpNac")->body();
                default:
                    goto finAjaxGetDivUbicacion;
            }
        } else {
            goto finAjaxGetDivUbicacion;
        }

        finAjaxGetDivUbicacion:
        return '<div class="alert alert-warning" role="alert">Opción incorrecta</div>';
    }

    public function ajaxAdd($currentModel, $userData, $currentData, $tipoUsuario, $currentData1 = null) {

        $this->layout = null;
        $this->autoRender = false;
        $this->User->recursive = -1;
        $this->loadModel($currentModel);
        $this->{$currentModel}->recursive = -1; //Recursividad
        $data["res"] = "no";

        //$dataCurrentModel = new stdClass();


        $errores = array();
        $this->User->set($userData);
        $this->{$currentModel}->set($currentData);

        $fotoRes = "";
        try {

            if ($userData["foto"]) {
                if (!empty(trim($userData["foto"]["name"])) && !trim($userData["foto"]["name"]) !== 'e') {

                    $upload = new UploadPicture();
                    $upload->setSavePath("img/fotos");
                    $name = strtoupper($this->getRandomKey(25)["pass"]);
                    $foto = $userData["foto"];
                    $fotoRes = $upload->savePicture($foto, $name);
                    //   debug($fotoRes);
                } else {
                    $this->User->validator()->remove('foto');
                }
            } else {
                $this->User->validator()->remove('foto');
            }
        } catch (Exception $ex) {
            $data["msj"] = $ex->getMessage();
            goto finAjaxAdminAdd;
        }

        // debug($fotoRes);

        $userData["foto"] = $fotoRes;
        //*****************************************************************************

        if (!$this->User->validates()) {
            $errores[0] = $this->User->validationErrors;
        }

        if (!$this->{$currentModel}->validates()) {
            $errores[1] = $this->{$currentModel}->validationErrors;
        }

        // debug($this->request->data);
        //Almacenamiento de errores
        if (count($errores) > 0) {
            foreach ($errores as $v) {
                foreach ($v as $key => $value) {
                    // debug($errores[]);
                    foreach ($value as $val) {
                        $data["errores_validacion"][$key] = $val;
                    }
                }
            }

            $data["msj"] = "El usuario no fue registrado, intenta de nuevo.";
            goto finAjaxAdminAdd;
            return; //Por si el goto no funciona
        }
        //****************************** Fin Validaciones ************************************
        //Obtención del rol

        $rol = $this->obtenerRol($tipoUsuario);
        if ($rol === 0) {
            $data["msj"] = "Error al intentar asignar el tipo de usuario.";
            goto finAjaxAdminAdd;
            return; //Por si el goto no funciona
        }



        //$this->{$userModel}->create();
        $userData["rol_id"] = $rol["id"];
        //$userData["foto"] = "";


        $d["User"] = $userData;
        $d[$currentModel] = $currentData;

        //Insercción de certificaciones para el agricultor
        if (count($currentData1) > 0 && isset($currentData1["id"])) {
            $true = true;
        } else {
            $true = false;
        }

        //debug($d); exit;
        $dataSource = $this->User->getDataSource();
        $dataSource->begin();

        if ($this->{$currentModel}->saveAll($d)) {

            //Certificaciones agricultor
            if ($true === true) {
                $this->loadModel("AgricultorCertificacion");
                foreach ($currentData1["id"] as $value) {
                    $this->AgricultorCertificacion->create();
                    $agrCer = array();
                    $agrCer["AgricultorCertificacion"]["agricultor_id"] = $this->{$currentModel}->getInsertID();
                    $agrCer["AgricultorCertificacion"]["certificacion_id"] = $value;

                    if ($this->AgricultorCertificacion->save($agrCer)) {
                        $dataSource->commit();
                        $data["res"] = "si";
                        $data["msj"] = "El usuario fue registrado.";
                    } else {
                        //debug($agrCer);
                        //debug($this->User->inserted_ids);
                        $dataSource->rollback();
                        $data["res"] = "no";
                        $data["msj"] = "El usuario no fue registrado, error al intentar registrar las certificaciones";
                    }
                    //debug($agrCer);
                }
            } else {
                $dataSource->commit();
                $data["res"] = "si";
                $data["msj"] = "El usuario fue registrado.";
            }
        } else {
            //debug($this->{$userModel}->getDataSource()->getLog(false, false)); //show last sql query
            $data["msj"] = "El usuario no fue registrado, intenta de nuevo.";
            $dataSource->rollback();
        }

        finAjaxAdminAdd:
        echo json_encode($data);
    }

}
