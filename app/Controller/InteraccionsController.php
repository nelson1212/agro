<?php
App::uses('AppController', 'Controller');
/**
 * Interaccions Controller
 *
 * @property Interaccion $Interaccion
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class InteraccionsController extends AppController {

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
		$this->Interaccion->recursive = 0;
		$this->set('interaccions', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Interaccion->exists($id)) {
			throw new NotFoundException(__('Invalid interaccion'));
		}
		$options = array('conditions' => array('Interaccion.' . $this->Interaccion->primaryKey => $id));
		$this->set('interaccion', $this->Interaccion->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Interaccion->create();
			if ($this->Interaccion->save($this->request->data)) {
				$this->Flash->success(__('The interaccion has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The interaccion could not be saved. Please, try again.'));
			}
		}
		$users = $this->Interaccion->User->find('list');
		$productos = $this->Interaccion->Producto->find('list');
		$this->set(compact('users', 'productos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Interaccion->exists($id)) {
			throw new NotFoundException(__('Invalid interaccion'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Interaccion->save($this->request->data)) {
				$this->Flash->success(__('The interaccion has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The interaccion could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Interaccion.' . $this->Interaccion->primaryKey => $id));
			$this->request->data = $this->Interaccion->find('first', $options);
		}
		$users = $this->Interaccion->User->find('list');
		$productos = $this->Interaccion->Producto->find('list');
		$this->set(compact('users', 'productos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Interaccion->id = $id;
		if (!$this->Interaccion->exists()) {
			throw new NotFoundException(__('Invalid interaccion'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Interaccion->delete()) {
			$this->Flash->success(__('The interaccion has been deleted.'));
		} else {
			$this->Flash->error(__('The interaccion could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Interaccion->recursive = 0;
		$this->set('interaccions', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Interaccion->exists($id)) {
			throw new NotFoundException(__('Invalid interaccion'));
		}
		$options = array('conditions' => array('Interaccion.' . $this->Interaccion->primaryKey => $id));
		$this->set('interaccion', $this->Interaccion->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Interaccion->create();
			if ($this->Interaccion->save($this->request->data)) {
				$this->Flash->success(__('The interaccion has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The interaccion could not be saved. Please, try again.'));
			}
		}
		$users = $this->Interaccion->User->find('list');
		$productos = $this->Interaccion->Producto->find('list');
		$this->set(compact('users', 'productos'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Interaccion->exists($id)) {
			throw new NotFoundException(__('Invalid interaccion'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Interaccion->save($this->request->data)) {
				$this->Flash->success(__('The interaccion has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The interaccion could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Interaccion.' . $this->Interaccion->primaryKey => $id));
			$this->request->data = $this->Interaccion->find('first', $options);
		}
		$users = $this->Interaccion->User->find('list');
		$productos = $this->Interaccion->Producto->find('list');
		$this->set(compact('users', 'productos'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Interaccion->id = $id;
		if (!$this->Interaccion->exists()) {
			throw new NotFoundException(__('Invalid interaccion'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Interaccion->delete()) {
			$this->Flash->success(__('The interaccion has been deleted.'));
		} else {
			$this->Flash->error(__('The interaccion could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
