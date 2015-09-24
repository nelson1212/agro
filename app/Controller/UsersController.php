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
        $this->layout = "front";
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
        // $googleMaps = $this->User->GoogleMap->find('list');
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


        if ($this->request->is('post')) {

            //debug($this->request->data);
            if (!isset($this->request->data["User"]["rol_id"])) {
                $this->Flash->error(__('Debes seleccionar un tipo de usuario'));
                $this->set(compact('rols'));
                return;
            }

            if ($this->request->data["User"]["rol_id"] === 0 || empty($this->request->data["User"]["rol_id"])) {
                $this->Flash->error(__('Debes seleccionar un tipo de usuario'));
                $this->set(compact('rols'));
                return;
            }

            $response = $this->getRolCodeAndTitle($this->request->data["User"]["rol_id"]);

            $rolId = 0;
            // debug($response);
            if ($response !== null) {
                $this->request->data["User"]["rol_id"];
                $rolId = $this->request->data["User"]["rol_id"];
                $elemento = $response["element"];
                $titulo = $response["title"];
                $nombre = $response["name"];
                $abr = $response["abr"];

//                switch ($abr) {
//                    case "adm":
//
//
//                        break;
//
//                    default:
//                        break;
//                
//                }
            }
        }


        $this->set(compact('asociaciones', 'rolId', 'elemento', 'ubicaciones', 'certificaciones', 'veredas', 'generos', 'departamentos', 'paisses', 'ciudads', 'corregimientos', 'tipoAgriculturas', 'rols', 'googleMaps'));
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

    public function admin_lstpreregistro() {
        $this->layout = "admin";
        $this->loadModel("Preregistro");
        $this->Preregistro->recursive = -1;

        $settings = array('order' => array('Preregistro.id' => 'DESC'),
            'limit' => 10);
        
        $this->Paginator->settings = $settings;
        //$this->paginate['Preregistro'] = array( 'limit' => 10, 'order' => 'Preregistro.id' );
        $lstPre = $this->paginate('Preregistro');

        //debug($lstPre);
        $this->set(compact('lstPre'));
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

    function getRolCodeAndTitle($code = null) {

        if ($code === null) {
            return null;
        }

        $element = "";
        $this->User->Rol->recursive = -1;
        $codRol = $this->User->Rol->find("first", array("conditions" => array("Rol.id" => $code)));
        $titulo = "";
        $name = "";
        $abr = $codRol["Rol"]["abr"];

        switch ($codRol["Rol"]["abr"]) {
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
                $titulo = "Listado de Sub-Administradores";
                $element = "subadministradores";
                $name = "Sub-Administradores";
                break;
            //return $this->render("lst_subadministradores")->body();
        }

        return array("title" => $titulo, "element" => $element, "name" => $name, "abr" => $abr);
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

    function getRandomKey() {
        //$this -> autoRender = false;
        //$this -> layout = false;
        $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
        $pass = array();
        //remember to declare $pass as an array
        $alphaLength = strlen($alphabet) - 1;
        //put the length -1 in cache
        for ($i = 0; $i < 10; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        $data = array();
        $data["pass"] = implode($pass);
        return $data;
        //turn the array into a string
    }

}
