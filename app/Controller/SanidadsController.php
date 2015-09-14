<?php
App::uses('AppController', 'Controller');
/**
 * Sanidads Controller
 *
 * @property Sanidad $Sanidad
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class SanidadsController extends AppController {

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
		$this->Sanidad->recursive = 0;
		$this->set('sanidads', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Sanidad->exists($id)) {
			throw new NotFoundException(__('Invalid sanidad'));
		}
		$options = array('conditions' => array('Sanidad.' . $this->Sanidad->primaryKey => $id));
		$this->set('sanidad', $this->Sanidad->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Sanidad->create();
			if ($this->Sanidad->save($this->request->data)) {
				$this->Flash->success(__('The sanidad has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The sanidad could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Sanidad->exists($id)) {
			throw new NotFoundException(__('Invalid sanidad'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Sanidad->save($this->request->data)) {
				$this->Flash->success(__('The sanidad has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The sanidad could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Sanidad.' . $this->Sanidad->primaryKey => $id));
			$this->request->data = $this->Sanidad->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Sanidad->id = $id;
		if (!$this->Sanidad->exists()) {
			throw new NotFoundException(__('Invalid sanidad'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Sanidad->delete()) {
			$this->Flash->success(__('The sanidad has been deleted.'));
		} else {
			$this->Flash->error(__('The sanidad could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Sanidad->recursive = 0;
		$this->set('sanidads', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Sanidad->exists($id)) {
			throw new NotFoundException(__('Invalid sanidad'));
		}
		$options = array('conditions' => array('Sanidad.' . $this->Sanidad->primaryKey => $id));
		$this->set('sanidad', $this->Sanidad->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Sanidad->create();
			if ($this->Sanidad->save($this->request->data)) {
				$this->Flash->success(__('The sanidad has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The sanidad could not be saved. Please, try again.'));
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
		if (!$this->Sanidad->exists($id)) {
			throw new NotFoundException(__('Invalid sanidad'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Sanidad->save($this->request->data)) {
				$this->Flash->success(__('The sanidad has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The sanidad could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Sanidad.' . $this->Sanidad->primaryKey => $id));
			$this->request->data = $this->Sanidad->find('first', $options);
		}
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Sanidad->id = $id;
		if (!$this->Sanidad->exists()) {
			throw new NotFoundException(__('Invalid sanidad'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Sanidad->delete()) {
			$this->Flash->success(__('The sanidad has been deleted.'));
		} else {
			$this->Flash->error(__('The sanidad could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
