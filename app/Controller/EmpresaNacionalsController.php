<?php

App::uses('AppController', 'Controller');

/**
 * EmpresaNacionals Controller
 *
 * @property EmpresaNacional $EmpresaNacional
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class EmpresaNacionalsController extends AppController {

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
        $this->EmpresaNacional->recursive = 0;
        $this->set('empresaNacionals', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->EmpresaNacional->exists($id)) {
            throw new NotFoundException(__('Invalid empresa nacional'));
        }
        $options = array('conditions' => array('EmpresaNacional.' . $this->EmpresaNacional->primaryKey => $id));
        $this->set('empresaNacional', $this->EmpresaNacional->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->EmpresaNacional->create();
            if ($this->EmpresaNacional->save($this->request->data)) {
                $this->Flash->success(__('The empresa nacional has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The empresa nacional could not be saved. Please, try again.'));
            }
        }
        $users = $this->EmpresaNacional->User->find('list');
        $ciudads = $this->EmpresaNacional->Ciudad->find('list');
        $this->set(compact('users', 'ciudads'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        if (!$this->EmpresaNacional->exists($id)) {
            throw new NotFoundException(__('Invalid empresa nacional'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->EmpresaNacional->save($this->request->data)) {
                $this->Flash->success(__('The empresa nacional has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The empresa nacional could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('EmpresaNacional.' . $this->EmpresaNacional->primaryKey => $id));
            $this->request->data = $this->EmpresaNacional->find('first', $options);
        }
        $users = $this->EmpresaNacional->User->find('list');
        $ciudads = $this->EmpresaNacional->Ciudad->find('list');
        $this->set(compact('users', 'ciudads'));
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->EmpresaNacional->id = $id;
        if (!$this->EmpresaNacional->exists()) {
            throw new NotFoundException(__('Invalid empresa nacional'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->EmpresaNacional->delete()) {
            $this->Flash->success(__('The empresa nacional has been deleted.'));
        } else {
            $this->Flash->error(__('The empresa nacional could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

    /**
     * admin_index method
     *
     * @return void
     */
    public function admin_index() {
        $this->EmpresaNacional->recursive = 0;
        $this->set('empresaNacionals', $this->Paginator->paginate());
    }

    /**
     * admin_view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function admin_view($id = null) {
        if (!$this->EmpresaNacional->exists($id)) {
            throw new NotFoundException(__('Invalid empresa nacional'));
        }
        $options = array('conditions' => array('EmpresaNacional.' . $this->EmpresaNacional->primaryKey => $id));
        $this->set('empresaNacional', $this->EmpresaNacional->find('first', $options));
    }

    /**
     * admin_add method
     *
     * @return void
     */
    public function admin_add() {
        if ($this->request->is('post')) {
            $this->EmpresaNacional->create();
            if ($this->EmpresaNacional->save($this->request->data)) {
                $this->Flash->success(__('The empresa nacional has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The empresa nacional could not be saved. Please, try again.'));
            }
        }
        $users = $this->EmpresaNacional->User->find('list');
        $ciudads = $this->EmpresaNacional->Ciudad->find('list');
        $this->set(compact('users', 'ciudads'));
    }

    public function ajaxEmpNacAdd() {

        //ajaxAdd($userModel, $currentModel, $userData, $currentData)
       //debug($this->request->data); 
        $this->layout = null;
        $this->autoRender = false;
       // $this->Session->write("data", $this->request->data);
        App::uses('UsersController', 'Controller');
        $user = new UsersController();
        $user->ajaxAdd("EmpresaNacional",$this->request->data["User"], $this->request->data["EmpresaNacional"], "empnac");

//        $this->layout = null;
//        $this->autoRender = false;
//        $this->loadModel("User");
//        $this->User->recursive = -1;
//        $this->EmpresaNacional->recursive = -1; //Recursividad
//
//        $data["res"] = "no";
//
//        // echo ucfirst($currentModel);
//        //    debug($this->request->data[ucfirst($currentModel)]);
//        //************* xss, sql injection, sanatize, temepering,**************************
//        //****************************** Validaciones ************************************
//        if (!isset($this->request->data["User"]) || !isset($this->request->data["EmpresaNacional"])) {
//            $data["errores_validacion"]["foto"] = "Error al intentar registrar el usuario";
//            goto finAjaxAdminAdd;
//            return; //Por si el goto no funciona
//        }
//
//        // debug($this->Administrador->schema()); //Validar contra el esquema
//
//
//        $errores = array();
//        $this->User->set($this->request->data["User"]);
//        $this->EmpresaNacional->set($this->request->data["EmpresaNacional"]);
//
//        $fotoRes = "";
//        try {
//
//            if (isset($this->request->data["User"]["foto"])) {
//                if (!empty(trim($this->request->data["User"]["foto"]["name"])) && !trim($this->request->data["User"]["foto"]["name"]) !== 'e') {
//
//                    $upload = new UploadPicture();
//                    $upload->setSavePath("img/fotos");
//                    $name = strtoupper($this->getRandomKey(25)["pass"]);
//                    $foto = $this->request->data["User"]["foto"];
//                    $fotoRes = $upload->savePicture($foto, $name);
//                } else {
//                    $this->User->validator()->remove('foto');
//                }
//            } else {
//                $this->User->validator()->remove('foto');
//            }
//        } catch (Exception $ex) {
//            $data["msj"] = $ex->getMessage();
//            goto finAjaxAdminAdd;
//        }
//        $this->request->data["User"]["foto"] = $fotoRes;
//        //*****************************************************************************
//
//        if (!$this->User->validates()) {
//            $errores[0] = $this->User->validationErrors;
//        }
//
//        if (!$this->EmpresaNacional->validates()) {
//            $errores[1] = $this->EmpresaNacional->validationErrors;
//        }
//
//        // debug($this->request->data);
//        //Almacenamiento de errores
//        if (count($errores) > 0) {
//            foreach ($errores as $v) {
//                foreach ($v as $key => $value) {
//                    // debug($errores[]);
//                    foreach ($value as $val) {
//                        $data["errores_validacion"][$key] = $val;
//                    }
//                }
//            }
//
//            $data["msj"] = "El usuario no fue registrado, intenta de nuevo.";
//            goto finAjaxAdminAdd;
//            return; //Por si el goto no funciona
//        }
//        //****************************** Fin Validaciones ************************************
//        //Obtención del rol
//
//        $rol = $this->obtenerRol("empnac");
//        if ($rol === 0) {
//            $data["msj"] = "Error al intentar asignar el tipo de usuario.";
//            goto finAjaxAdminAdd;
//            return; //Por si el goto no funciona
//        }
//
//
//        debug($this->data);
//        $this->request->data["User"]["rol_id"] = $rol["id"];
//        $this->request->data["User"]["foto"] = "";
//
//        if ($this->EmpresaNacional->saveAll($this->request->data)) {
//            $data["res"] = "si";
//            $data["msj"] = "El usuario fue registrado.";
//        } else {
//            //debug($this->{$userModel}->getDataSource()->getLog(false, false)); //show last sql query
//            $data["msj"] = "El usuario no fue registrado, intenta de nuevo.";
//            //  $this->{$userModel}->rollback();
//        }
//
//        finAjaxAdminAdd:
//        echo json_encode($data);
    }

    /**
     * admin_edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function admin_edit($id = null) {
        if (!$this->EmpresaNacional->exists($id)) {
            throw new NotFoundException(__('Invalid empresa nacional'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->EmpresaNacional->save($this->request->data)) {
                $this->Flash->success(__('The empresa nacional has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The empresa nacional could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('EmpresaNacional.' . $this->EmpresaNacional->primaryKey => $id));
            $this->request->data = $this->EmpresaNacional->find('first', $options);
        }
        $users = $this->EmpresaNacional->User->find('list');
        $ciudads = $this->EmpresaNacional->Ciudad->find('list');
        $this->set(compact('users', 'ciudads'));
    }

    /**
     * admin_delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function admin_delete($id = null) {
        $this->EmpresaNacional->id = $id;
        if (!$this->EmpresaNacional->exists()) {
            throw new NotFoundException(__('Invalid empresa nacional'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->EmpresaNacional->delete()) {
            $this->Flash->success(__('The empresa nacional has been deleted.'));
        } else {
            $this->Flash->error(__('The empresa nacional could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

}
