<?php
App::uses('AppController', 'Controller');
/**
 * NombresComuns Controller
 *
 * @property NombresComun $NombresComun
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class NombresComunsController extends AppController {

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
		$this->NombresComun->recursive = 0;
		$this->set('nombresComuns', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->NombresComun->exists($id)) {
			throw new NotFoundException(__('Invalid nombres comun'));
		}
		$options = array('conditions' => array('NombresComun.' . $this->NombresComun->primaryKey => $id));
		$this->set('nombresComun', $this->NombresComun->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->NombresComun->create();
			if ($this->NombresComun->save($this->request->data)) {
				$this->Flash->success(__('The nombres comun has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The nombres comun could not be saved. Please, try again.'));
			}
		}
		$productos = $this->NombresComun->Producto->find('list');
		$this->set(compact('productos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->NombresComun->exists($id)) {
			throw new NotFoundException(__('Invalid nombres comun'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->NombresComun->save($this->request->data)) {
				$this->Flash->success(__('The nombres comun has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The nombres comun could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('NombresComun.' . $this->NombresComun->primaryKey => $id));
			$this->request->data = $this->NombresComun->find('first', $options);
		}
		$productos = $this->NombresComun->Producto->find('list');
		$this->set(compact('productos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->NombresComun->id = $id;
		if (!$this->NombresComun->exists()) {
			throw new NotFoundException(__('Invalid nombres comun'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->NombresComun->delete()) {
			$this->Flash->success(__('The nombres comun has been deleted.'));
		} else {
			$this->Flash->error(__('The nombres comun could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->NombresComun->recursive = 0;
		$this->set('nombresComuns', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->NombresComun->exists($id)) {
			throw new NotFoundException(__('Invalid nombres comun'));
		}
		$options = array('conditions' => array('NombresComun.' . $this->NombresComun->primaryKey => $id));
		$this->set('nombresComun', $this->NombresComun->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->NombresComun->create();
			if ($this->NombresComun->save($this->request->data)) {
				$this->Flash->success(__('The nombres comun has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The nombres comun could not be saved. Please, try again.'));
			}
		}
		$productos = $this->NombresComun->Producto->find('list');
		$this->set(compact('productos'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->NombresComun->exists($id)) {
			throw new NotFoundException(__('Invalid nombres comun'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->NombresComun->save($this->request->data)) {
				$this->Flash->success(__('The nombres comun has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The nombres comun could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('NombresComun.' . $this->NombresComun->primaryKey => $id));
			$this->request->data = $this->NombresComun->find('first', $options);
		}
		$productos = $this->NombresComun->Producto->find('list');
		$this->set(compact('productos'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->NombresComun->id = $id;
		if (!$this->NombresComun->exists()) {
			throw new NotFoundException(__('Invalid nombres comun'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->NombresComun->delete()) {
			$this->Flash->success(__('The nombres comun has been deleted.'));
		} else {
			$this->Flash->error(__('The nombres comun could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
