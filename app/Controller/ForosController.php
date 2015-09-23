<?php

App::uses('AppController', 'Controller');

/**
 * Foros Controller
 *
 * @property Foro $Foro
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class ForosController extends AppController {

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
        $this->Foro->recursive = 0;
        $this->set('foros', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->Foro->exists($id)) {
            throw new NotFoundException(__('Invalid foro'));
        }
        $options = array('conditions' => array('Foro.' . $this->Foro->primaryKey => $id));
        $this->set('foro', $this->Foro->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->Foro->create();
            if ($this->Foro->save($this->request->data)) {
                $this->Flash->success(__('The foro has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The foro could not be saved. Please, try again.'));
            }
        }

        $users = $this->Foro->User->find('list');
        $categorias = $this->Foro->Categoria->find('list');
        $this->set(compact('users', 'categorias'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        if (!$this->Foro->exists($id)) {
            throw new NotFoundException(__('Invalid foro'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Foro->save($this->request->data)) {
                $this->Flash->success(__('The foro has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The foro could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Foro.' . $this->Foro->primaryKey => $id));
            $this->request->data = $this->Foro->find('first', $options);
        }
        $users = $this->Foro->User->find('list');
        $categorias = $this->Foro->Categoria->find('list');
        $this->set(compact('users', 'categorias'));
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->Foro->id = $id;
        if (!$this->Foro->exists()) {
            throw new NotFoundException(__('Invalid foro'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Foro->delete()) {
            $this->Flash->success(__('The foro has been deleted.'));
        } else {
            $this->Flash->error(__('The foro could not be deleted. Please, try again.'));
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
        $this->Foro->recursive = 0;
        $categorias = $this->Foro->Categoria->find("list");
        $this->unshift($categorias, 0, "Seleccione una opción");
        $foros=$this->Paginator->paginate();
        $titulo = "Listado de foros";
        $this->set(compact('foros',"categorias","titulo"));
    }

    /**
     * admin_view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function admin_view($id = null) {
        if (!$this->Foro->exists($id)) {
            throw new NotFoundException(__('Invalid foro'));
        }
        $options = array('conditions' => array('Foro.' . $this->Foro->primaryKey => $id));
        $this->set('foro', $this->Foro->find('first', $options));
    }

    /**
     * admin_add method
     *
     * @return void
     */
    public function admin_add() {
        $this->layout = "admin";
        if ($this->request->is('post')) {

            //debug($this->request->data); return;
            $this->request->data["Foro"]["user_id"] = 1;
            $datasource = $this->Foro->getDataSource();
            try {
                $datasource->begin();
                $this->Foro->create();
                if ($this->Foro->save($this->request->data)) {

                    $temas = $this->request->data["Foro"]["lstTemas"];
                    $this->loadModel("Tema");
                    $this->Tema->recursive = -1;
                    foreach ($temas as $key => $value) {
                        $this->Tema->create();
                        $tema = array();
                        $tema["Tema"]["foro_id"] = $this->Foro->id;
                        $tema["Tema"]["user_id"] = 1;
                        $tema["Tema"]["contenido"] = $value;
                       // debug($tema);
                        $this->Foro->save($tema);
                    }

                    $this->Flash->success(__('El foro fue creado.'));
                    return $this->redirect(array('action' => 'index'));
                } else {
                    $this->Flash->error(__('El foro no fue creado. Por favor, intenta de nuevo.'));
                }

                $datasource->commit();
            } catch (Exception $e) {
                $datasource->rollback();
            }
        }
        $users = $this->Foro->User->find('list');
        $categorias = $this->Foro->Categoria->find('list');
        $this->unshift($categorias, 0, "Seleccione una opción");
        $this->set(compact('users', 'categorias'));
    }

    /**
     * admin_edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function admin_edit($id = null) {
        if (!$this->Foro->exists($id)) {
            throw new NotFoundException(__('Invalid foro'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Foro->save($this->request->data)) {
                $this->Flash->success(__('The foro has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The foro could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Foro.' . $this->Foro->primaryKey => $id));
            $this->request->data = $this->Foro->find('first', $options);
        }
        $users = $this->Foro->User->find('list');
        $categorias = $this->Foro->Categoria->find('list');
        $this->set(compact('users', 'categorias'));
    }

    /**
     * admin_delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function admin_delete($id = null) {
        $this->Foro->id = $id;
        if (!$this->Foro->exists()) {
            throw new NotFoundException(__('Invalid foro'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Foro->delete()) {
            $this->Flash->success(__('The foro has been deleted.'));
        } else {
            $this->Flash->error(__('The foro could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

}
