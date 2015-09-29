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
        $this->layout="admin";
        $this->Administrador->recursive = 0;     
        $this->loadModel("Rol");
        $this->Rol->recursive = -1;    
        $rols = $this->Rol->find('list', array("fields" => array("abr", "nombre")));
        $administradors = $this->Paginator->paginate();
        //debug($administradors);
        $this->set(compact('administradors','rols'));
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

        //ajaxAdd($userModel, $currentModel, $userData, $currentData)

        $this->layout = null;
        $this->autoRender = false;
        // $this->Session->write("data", $this->request->data);
        App::uses('UsersController', 'Controller');
        $user = new UsersController();
        $user->ajaxAdd("Administrador", $this->request->data["User"], $this->request->data["Administrador"], "adm");
    }

    public function ajaxSubAdminAdd() {

        //ajaxAdd($userModel, $currentModel, $userData, $currentData)
        
      //  debug($this->request->data); exit;
        $this->layout = null;
        $this->autoRender = false;
        // $this->Session->write("data", $this->request->data);
        App::uses('UsersController', 'Controller');
        $user = new UsersController();
        $user->ajaxAdd("Administrador", $this->request->data["User"], $this->request->data["Administrador"], "subadmin");
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
