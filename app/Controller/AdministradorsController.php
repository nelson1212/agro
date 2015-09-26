<?php

App::uses('AppController', 'Controller');

/**
 * Administradors Controller
 *
 * @property Administrador $Administrador
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class AdministradorsController extends AppController {

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
        $this->Administrador->recursive = 0;
        $this->set('administradors', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->Administrador->exists($id)) {
            throw new NotFoundException(__('Invalid administrador'));
        }
        $options = array('conditions' => array('Administrador.' . $this->Administrador->primaryKey => $id));
        $this->set('administrador', $this->Administrador->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->Administrador->create();
            if ($this->Administrador->save($this->request->data)) {
                $this->Flash->success(__('The administrador has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The administrador could not be saved. Please, try again.'));
            }
        }
        $users = $this->Administrador->User->find('list');
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
        if (!$this->Administrador->exists($id)) {
            throw new NotFoundException(__('Invalid administrador'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Administrador->save($this->request->data)) {
                $this->Flash->success(__('The administrador has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The administrador could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Administrador.' . $this->Administrador->primaryKey => $id));
            $this->request->data = $this->Administrador->find('first', $options);
        }
        $users = $this->Administrador->User->find('list');
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
        $this->Administrador->id = $id;
        if (!$this->Administrador->exists()) {
            throw new NotFoundException(__('Invalid administrador'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Administrador->delete()) {
            $this->Flash->success(__('The administrador has been deleted.'));
        } else {
            $this->Flash->error(__('The administrador could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

    /**
     * admin_index method
     *
     * @return void
     */
    public function admin_index() {
        $this->Administrador->recursive = 0;
        $this->set('administradors', $this->Paginator->paginate());
    }

    /**
     * admin_view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function admin_view($id = null) {
        if (!$this->Administrador->exists($id)) {
            throw new NotFoundException(__('Invalid administrador'));
        }
        $options = array('conditions' => array('Administrador.' . $this->Administrador->primaryKey => $id));
        $this->set('administrador', $this->Administrador->find('first', $options));
    }

    /**
     * admin_add method
     *
     * @return void
     */
    public function ajaxAdminAdd() {

        $this->layout = null;
        $this->autoRender = false;
        $this->Administrador->recursive = -1; //Recursividad

        $data["res"] = "no";

        $this->loadModel("User");
        $this->User->recursive = -1;
        $this->User->set($this->request->data["User"]);
        $this->Administrador->set($this->request->data["Administrador"]);

        $errores = array();
        if (!$this->User->validates() || !$this->Administrador->validates()) {
            $errores[0] = $this->User->validationErrors;
        }

        if (!$this->Administrador->validates()) {
            $errores[1] = $this->Administrador->validationErrors;
        }

        $dataSource = $this->Administrador->getDataSource();
        //$this->Session->check('Comment')
        if ($this->request->is('post')) {
            $this->Administrador->create();
            if ($this->Administrador->save($this->request->data)) {
                $dataSource->commit();
                $data["res"] = "si";
                $data["msj"] = "El usuario fue registrado.";
                // $this->Flash->success(__('The administrador has been saved.'));
                //return $this->redirect(array('action' => 'index'));
            } else {

                // debug($errores);
                foreach ($errores as $v) {
                    foreach ($v as $key => $value) {
                        // debug($errores[]);
                        foreach ($value as $val) {
                            $data["errores_validacion"][$key] = $val;
                        }
                    }
                }


                $data["msj"] = "El usuario no fue registrado, intenta de nuevo.";
                // $this->Flash->error(__('The administrador could not be saved. Please, try again.'));
                $dataSource->rollback();
            }

            echo json_encode($data);
        }
        // $users = $this->Administrador->User->find('list');
        // $this->set(compact('users'));
    }

    /**
     * admin_edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function admin_edit($id = null) {
        if (!$this->Administrador->exists($id)) {
            throw new NotFoundException(__('Invalid administrador'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Administrador->save($this->request->data)) {
                $this->Flash->success(__('The administrador has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The administrador could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Administrador.' . $this->Administrador->primaryKey => $id));
            $this->request->data = $this->Administrador->find('first', $options);
        }
        $users = $this->Administrador->User->find('list');
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
        $this->Administrador->id = $id;
        if (!$this->Administrador->exists()) {
            throw new NotFoundException(__('Invalid administrador'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Administrador->delete()) {
            $this->Flash->success(__('The administrador has been deleted.'));
        } else {
            $this->Flash->error(__('The administrador could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

}
