<?php
App::uses('AppController', 'Controller');
/**
 * Embalajes Controller
 *
 * @property Embalaje $Embalaje
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class EmbalajesController extends AppController {

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
		$this->Embalaje->recursive = 0;
		$this->set('embalajes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Embalaje->exists($id)) {
			throw new NotFoundException(__('Invalid embalaje'));
		}
		$options = array('conditions' => array('Embalaje.' . $this->Embalaje->primaryKey => $id));
		$this->set('embalaje', $this->Embalaje->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Embalaje->create();
			if ($this->Embalaje->save($this->request->data)) {
				$this->Flash->success(__('The embalaje has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The embalaje could not be saved. Please, try again.'));
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
		if (!$this->Embalaje->exists($id)) {
			throw new NotFoundException(__('Invalid embalaje'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Embalaje->save($this->request->data)) {
				$this->Flash->success(__('The embalaje has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The embalaje could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Embalaje.' . $this->Embalaje->primaryKey => $id));
			$this->request->data = $this->Embalaje->find('first', $options);
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
		$this->Embalaje->id = $id;
		if (!$this->Embalaje->exists()) {
			throw new NotFoundException(__('Invalid embalaje'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Embalaje->delete()) {
			$this->Flash->success(__('The embalaje has been deleted.'));
		} else {
			$this->Flash->error(__('The embalaje could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Embalaje->recursive = 0;
		$this->set('embalajes', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Embalaje->exists($id)) {
			throw new NotFoundException(__('Invalid embalaje'));
		}
		$options = array('conditions' => array('Embalaje.' . $this->Embalaje->primaryKey => $id));
		$this->set('embalaje', $this->Embalaje->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Embalaje->create();
			if ($this->Embalaje->save($this->request->data)) {
				$this->Flash->success(__('The embalaje has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The embalaje could not be saved. Please, try again.'));
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
		if (!$this->Embalaje->exists($id)) {
			throw new NotFoundException(__('Invalid embalaje'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Embalaje->save($this->request->data)) {
				$this->Flash->success(__('The embalaje has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The embalaje could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Embalaje.' . $this->Embalaje->primaryKey => $id));
			$this->request->data = $this->Embalaje->find('first', $options);
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
		$this->Embalaje->id = $id;
		if (!$this->Embalaje->exists()) {
			throw new NotFoundException(__('Invalid embalaje'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Embalaje->delete()) {
			$this->Flash->success(__('The embalaje has been deleted.'));
		} else {
			$this->Flash->error(__('The embalaje could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
