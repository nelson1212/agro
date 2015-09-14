<?php

App::uses('AppController', 'Controller');

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
    public $components = array('Paginator', 'Flash', 'Session');

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
        $this->User->recursive = 0;
        $this->set('users', $this->Paginator->paginate());
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
    public function admin_add($isAjax=false) {
        $this->layout="admin";
        $this->User->recursive = 0; //Recursividad
        
        if ($this->request->is('post')) {
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
        
        $rols = $this->User->Rol->find('list');
        $this->unshift($rols, 0, "Seleccione una opción");
        
        //$googleMaps = $this->User->GoogleMap->find('list');
        $generos = array(0 => "Seleccione una opción", "Femenino"=>"Femenino","Masculino"=>"Masculino","LGTBI"=>"LGTBI");
        $this->set(compact('veredas', 'generos','departamentos', 'paisses', 'ciudads', 'corregimientos', 'tipoAgriculturas', 'rols', 'googleMaps'));
    }
    
    public function ajaxUserAdd() {
        $this->layout=null;
        $this->autoRender = false;
        $this->User->recursive = 0; //Recursividad
        
        if ($this->request->is('post')) {
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
