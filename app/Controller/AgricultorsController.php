<?php

App::uses('AppController', 'Controller');

/**
 * Agricultors Controller
 *
 * @property Agricultor $Agricultor
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class AgricultorsController extends AppController {

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
        $this->Agricultor->recursive = 0;
        $this->set('agricultors', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->Agricultor->exists($id)) {
            throw new NotFoundException(__('Invalid agricultor'));
        }
        $options = array('conditions' => array('Agricultor.' . $this->Agricultor->primaryKey => $id));
        $this->set('agricultor', $this->Agricultor->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->Agricultor->create();
            if ($this->Agricultor->save($this->request->data)) {
                $this->Flash->success(__('The agricultor has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The agricultor could not be saved. Please, try again.'));
            }
        }
        $corregimientos = $this->Agricultor->Corregimiento->find('list');
        $users = $this->Agricultor->User->find('list');
        $this->set(compact('corregimientos', 'users'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        if (!$this->Agricultor->exists($id)) {
            throw new NotFoundException(__('Invalid agricultor'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Agricultor->save($this->request->data)) {
                $this->Flash->success(__('The agricultor has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The agricultor could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Agricultor.' . $this->Agricultor->primaryKey => $id));
            $this->request->data = $this->Agricultor->find('first', $options);
        }
        $corregimientos = $this->Agricultor->Corregimiento->find('list');
        $users = $this->Agricultor->User->find('list');
        $this->set(compact('corregimientos', 'users'));
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->Agricultor->id = $id;
        if (!$this->Agricultor->exists()) {
            throw new NotFoundException(__('Invalid agricultor'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Agricultor->delete()) {
            $this->Flash->success(__('The agricultor has been deleted.'));
        } else {
            $this->Flash->error(__('The agricultor could not be deleted. Please, try again.'));
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
        $this->Agricultor->recursive = 0;
        $this->loadModel("Rol");
        $this->Rol->recursive = -1;
        $rols = $this->Rol->find('list', array("fields" => array("abr", "nombre")));
        $agricultors = $this->Paginator->paginate();
        //debug($administradors);
        $this->set(compact('agricultors', 'rols'));
    }

    /**
     * admin_view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function admin_view($id = null) {
        if (!$this->Agricultor->exists($id)) {
            throw new NotFoundException(__('Invalid agricultor'));
        }
        $options = array('conditions' => array('Agricultor.' . $this->Agricultor->primaryKey => $id));
        $this->set('agricultor', $this->Agricultor->find('first', $options));
    }

    /**
     * admin_add method
     *
     * @return void
     */
    public function admin_add() {
        if ($this->request->is('post')) {
            $this->Agricultor->create();
            if ($this->Agricultor->save($this->request->data)) {
                $this->Flash->success(__('The agricultor has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The agricultor could not be saved. Please, try again.'));
            }
        }
        $corregimientos = $this->Agricultor->Corregimiento->find('list');
        $users = $this->Agricultor->User->find('list');
        $this->set(compact('corregimientos', 'users'));
    }

    public function ajaxAgrAdd() {

        //ajaxAdd($userModel, $currentModel, $userData, $currentData)
        // debug($this->request->data);  exit;

        $this->layout = null;
        $this->autoRender = false;
        // $this->Session->write("data", $this->request->data);
        // $this->Agricultor->bindModel(array('hasMany'=>array('AgricultorCertificacion')));
        //debug($this->request->data); exit;
        App::uses('UsersController', 'Controller');
        $user = new UsersController();
        $user->ajaxAdd("Agricultor", $this->request->data["User"], $this->request->data["Agricultor"], "agr", $this->request->data["Certificacion"]);
    }

    /**
     * admin_edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function admin_edit($id = null) {
        if (!$this->Agricultor->exists($id)) {
            throw new NotFoundException(__('Invalid agricultor'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Agricultor->save($this->request->data)) {
                $this->Flash->success(__('The agricultor has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The agricultor could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Agricultor.' . $this->Agricultor->primaryKey => $id));
            $this->request->data = $this->Agricultor->find('first', $options);
        }
        $corregimientos = $this->Agricultor->Corregimiento->find('list');
        $users = $this->Agricultor->User->find('list');
        $this->set(compact('corregimientos', 'users'));
    }

    /**
     * admin_delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function admin_delete($id = null) {
        $this->Agricultor->id = $id;
        if (!$this->Agricultor->exists()) {
            throw new NotFoundException(__('Invalid agricultor'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Agricultor->delete()) {
            $this->Flash->success(__('The agricultor has been deleted.'));
        } else {
            $this->Flash->error(__('The agricultor could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

}
