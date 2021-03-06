<?php

App::uses('AppController', 'Controller');

/**
 * CompradorInternacionals Controller
 *
 * @property CompradorInternacional $CompradorInternacional
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class CompradorInternacionalsController extends AppController {

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
        $this->CompradorInternacional->recursive = 0;
        $this->set('compradorInternacionals', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->CompradorInternacional->exists($id)) {
            throw new NotFoundException(__('Invalid comprador internacional'));
        }
        $options = array('conditions' => array('CompradorInternacional.' . $this->CompradorInternacional->primaryKey => $id));
        $this->set('compradorInternacional', $this->CompradorInternacional->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->CompradorInternacional->create();
            if ($this->CompradorInternacional->save($this->request->data)) {
                $this->Flash->success(__('The comprador internacional has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The comprador internacional could not be saved. Please, try again.'));
            }
        }
        $paisses = $this->CompradorInternacional->Paiss->find('list');
        $users = $this->CompradorInternacional->User->find('list');
        $this->set(compact('paisses', 'users'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        if (!$this->CompradorInternacional->exists($id)) {
            throw new NotFoundException(__('Invalid comprador internacional'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->CompradorInternacional->save($this->request->data)) {
                $this->Flash->success(__('The comprador internacional has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The comprador internacional could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('CompradorInternacional.' . $this->CompradorInternacional->primaryKey => $id));
            $this->request->data = $this->CompradorInternacional->find('first', $options);
        }
        $paisses = $this->CompradorInternacional->Paiss->find('list');
        $users = $this->CompradorInternacional->User->find('list');
        $this->set(compact('paisses', 'users'));
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->CompradorInternacional->id = $id;
        if (!$this->CompradorInternacional->exists()) {
            throw new NotFoundException(__('Invalid comprador internacional'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->CompradorInternacional->delete()) {
            $this->Flash->success(__('The comprador internacional has been deleted.'));
        } else {
            $this->Flash->error(__('The comprador internacional could not be deleted. Please, try again.'));
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
        $this->CompradorInternacional->recursive = 0;
        $this->loadModel("Rol");
        $this->Rol->recursive = -1;
        $rols = $this->Rol->find('list', array("fields" => array("abr", "nombre")));
        $compradorInternacionals = $this->Paginator->paginate();
        // debug($empresaNacionals); exit;
        $this->set(compact('compradorInternacionals', 'rols'));
    }

    /**
     * admin_view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function admin_view($id = null) {
        if (!$this->CompradorInternacional->exists($id)) {
            throw new NotFoundException(__('Invalid comprador internacional'));
        }
        $options = array('conditions' => array('CompradorInternacional.' . $this->CompradorInternacional->primaryKey => $id));
        $this->set('compradorInternacional', $this->CompradorInternacional->find('first', $options));
    }

    /**
     * admin_add method
     *
     * @return void
     */
    public function admin_add() {
        if ($this->request->is('post')) {
            $this->CompradorInternacional->create();
            if ($this->CompradorInternacional->save($this->request->data)) {
                $this->Flash->success(__('The comprador internacional has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The comprador internacional could not be saved. Please, try again.'));
            }
        }
        $paisses = $this->CompradorInternacional->Paiss->find('list');
        $users = $this->CompradorInternacional->User->find('list');
        $this->set(compact('paisses', 'users'));
    }

    public function ajaxComIntAdd() {

        //ajaxAdd($userModel, $currentModel, $userData, $currentData)
        
        //debug($this->request->data); exit;
        
        $this->layout = null;
        $this->autoRender = false;
        // $this->Session->write("data", $this->request->data);
        App::uses('UsersController', 'Controller');
        $user = new UsersController();
        $user->ajaxAdd("CompradorInternacional", $this->request->data["User"], $this->request->data["CompradorInternacional"], "comint");
    }

    /**
     * admin_edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function admin_edit($id = null) {
        if (!$this->CompradorInternacional->exists($id)) {
            throw new NotFoundException(__('Invalid comprador internacional'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->CompradorInternacional->save($this->request->data)) {
                $this->Flash->success(__('The comprador internacional has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The comprador internacional could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('CompradorInternacional.' . $this->CompradorInternacional->primaryKey => $id));
            $this->request->data = $this->CompradorInternacional->find('first', $options);
        }
        $paisses = $this->CompradorInternacional->Paiss->find('list');
        $users = $this->CompradorInternacional->User->find('list');
        $this->set(compact('paisses', 'users'));
    }

    /**
     * admin_delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function admin_delete($id = null) {
        $this->CompradorInternacional->id = $id;
        if (!$this->CompradorInternacional->exists()) {
            throw new NotFoundException(__('Invalid comprador internacional'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->CompradorInternacional->delete()) {
            $this->Flash->success(__('The comprador internacional has been deleted.'));
        } else {
            $this->Flash->error(__('The comprador internacional could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

}
