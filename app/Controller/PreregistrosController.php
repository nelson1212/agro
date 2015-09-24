<?php

App::uses('AppController', 'Controller');
App::uses('Sanitize', 'Vendor');

/**
 * Preregistros Controller
 *
 * @property Preregistro $Preregistro
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class PreregistrosController extends AppController {

    /**
     * Components
     *
     * @var array
     */
    public $components = array('Paginator', 'Flash', 'Session');

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->Preregistro->recursive = 0;
        $this->set('preregistros', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->Preregistro->exists($id)) {
            throw new NotFoundException(__('Invalid preregistro'));
        }
        $options = array('conditions' => array('Preregistro.' . $this->Preregistro->primaryKey => $id));
        $this->set('preregistro', $this->Preregistro->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        $this->layout = "front";
        if ($this->request->is('post')) {
            $this->Preregistro->create();
            if ($this->Preregistro->save($this->request->data)) {
                $this->Flash->success(__('The preregistro has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The preregistro could not be saved. Please, try again.'));
            }
        }
        $users = $this->Preregistro->User->find('list');
        $this->set(compact('users'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        if (!$this->Preregistro->exists($id)) {
            throw new NotFoundException(__('Invalid preregistro'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Preregistro->save($this->request->data)) {
                $this->Flash->success(__('The preregistro has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The preregistro could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Preregistro.' . $this->Preregistro->primaryKey => $id));
            $this->request->data = $this->Preregistro->find('first', $options);
        }
        $users = $this->Preregistro->User->find('list');
        $this->set(compact('users'));
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->Preregistro->id = $id;
        if (!$this->Preregistro->exists()) {
            throw new NotFoundException(__('Invalid preregistro'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Preregistro->delete()) {
            $this->Flash->success(__('The preregistro has been deleted.'));
        } else {
            $this->Flash->error(__('The preregistro could not be deleted. Please, try again.'));
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
        $this->Preregistro->recursive = 0;
        $this->set('preregistros', $this->Paginator->paginate());
    }

    /**
     * admin_view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function admin_view($id = null) {
        if (!$this->Preregistro->exists($id)) {
            throw new NotFoundException(__('Invalid preregistro'));
        }
        $options = array('conditions' => array('Preregistro.' . $this->Preregistro->primaryKey => $id));
        $this->set('preregistro', $this->Preregistro->find('first', $options));
    }

    /**
     * admin_add method
     *
     * @return void
     */
    public function admin_add() {
        if ($this->request->is('post')) {
            $this->Preregistro->create();
            if ($this->Preregistro->save($this->request->data)) {
                $this->Flash->success(__('The preregistro has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The preregistro could not be saved. Please, try again.'));
            }
        }
        $users = $this->Preregistro->User->find('list');
        $this->set(compact('users'));
    }

    /**
     * admin_edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function admin_edit($id = null) {
        if (!$this->Preregistro->exists($id)) {
            throw new NotFoundException(__('Invalid preregistro'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Preregistro->save($this->request->data)) {
                $this->Flash->success(__('The preregistro has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The preregistro could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Preregistro.' . $this->Preregistro->primaryKey => $id));
            $this->request->data = $this->Preregistro->find('first', $options);
        }
        $users = $this->Preregistro->User->find('list');
        $this->set(compact('users'));
    }

    /**
     * admin_delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function admin_delete($id = null) {
        $this->Preregistro->id = $id;
        if (!$this->Preregistro->exists()) {
            throw new NotFoundException(__('Invalid preregistro'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Preregistro->delete()) {
            $this->Flash->success(__('The preregistro has been deleted.'));
        } else {
            $this->Flash->error(__('The preregistro could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

    function getVerificarPreReg($codigo) {

//        $this->layout = false;
//        $this->autoRender = false;
//        $data["res"] = "no";
//
//        if (!isset($_POST["codigo"])) {
//            $data["msj"] = "No existe el código enviado";
//            goto finAjaxVerificarprereg;
//        }
//
//        if (empty(trim($_POST["codigo"]))) {
//            $data["msj"] = "No existe el código enviado";
//            goto finAjaxVerificarprereg;
//        }
//
//        $postData = Sanitize::clean($_POST);

        $this->Preregistro->recursive = -1;
        //$novedad = $this->Preregistro->find("first", array("conditions" => array("Preregistro.codigo" => $postData["codigo"])));
        $novedad = $this->Preregistro->find("first", array("conditions" => array("Preregistro.codigo" => $codigo)));
       
        if (count($novedad) === 0 || empty($novedad)) {
            return null;
        }

        //$departamentos = $this->User->Departamento->find('list');
        //$this->unshift($departamentos, 0, "Seleccione una opción");
        //debug($departamentos); exit;
        //$paisses = $this->User->Paiss->find('list');

        $this->loadModel("Ciudad");
        $this->Ciudad->recursive = 0;
        $ciudads = $this->Ciudad->find('list');
        $this->unshift($ciudads, 0, "Seleccione una opción");

        // $corregimientos = $this->User->Corregimiento->find('list');
        //$this->unshift($corregimientos, 0, "Seleccione una opción");
//        $this->loadModel("TipoAgricultura");
//        $this->TipoAgricultura->recursive = 0;
//        $tipoAgriculturas = $this->TipoAgricultura->find('list');
//        $this->unshift($tipoAgriculturas, 0, "Seleccione una opción");
//
//        $this->loadModel("Rol");
//        $this->Rol->recursive = 0;
//        $rols = $this->Rol->find('list');
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
//        $this->set(compact('asociaciones', 'rolId', 'elemento', 'ubicaciones', 'certificaciones', 'veredas', 'generos', 'departamentos', 'paisses', 'ciudads', 'corregimientos', 'tipoAgriculturas', 'rols', 'googleMaps'));

        //debug($novedad);
        $elemento = "";
        switch ($novedad["Preregistro"]["tipo"]) {
            case "agr":

                $elemento = "front_agricultores";
                break;

            default:
                break;
        }

        return $elemento;
        // $data["res"] = "si";
        //echo json_encode($data);
        //$this->viewPath = 'Elements';
        //return $this->render($elemento);
        // finAjaxVerificarprereg:
        //echo json_encode($data);
    }

}
