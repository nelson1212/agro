<?php
App::uses('AppController', 'Controller');
/**
 * Paisses Controller
 *
 * @property Paiss $Paiss
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class PaissesController extends AppController {

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
		$this->Paiss->recursive = 0;
		$this->set('paisses', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Paiss->exists($id)) {
			throw new NotFoundException(__('Invalid paiss'));
		}
		$options = array('conditions' => array('Paiss.' . $this->Paiss->primaryKey => $id));
		$this->set('paiss', $this->Paiss->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Paiss->create();
			if ($this->Paiss->save($this->request->data)) {
				$this->Flash->success(__('The paiss has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The paiss could not be saved. Please, try again.'));
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
		if (!$this->Paiss->exists($id)) {
			throw new NotFoundException(__('Invalid paiss'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Paiss->save($this->request->data)) {
				$this->Flash->success(__('The paiss has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The paiss could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Paiss.' . $this->Paiss->primaryKey => $id));
			$this->request->data = $this->Paiss->find('first', $options);
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
		$this->Paiss->id = $id;
		if (!$this->Paiss->exists()) {
			throw new NotFoundException(__('Invalid paiss'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Paiss->delete()) {
			$this->Flash->success(__('The paiss has been deleted.'));
		} else {
			$this->Flash->error(__('The paiss could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Paiss->recursive = 0;
		$this->set('paisses', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Paiss->exists($id)) {
			throw new NotFoundException(__('Invalid paiss'));
		}
		$options = array('conditions' => array('Paiss.' . $this->Paiss->primaryKey => $id));
		$this->set('paiss', $this->Paiss->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Paiss->create();
			if ($this->Paiss->save($this->request->data)) {
				$this->Flash->success(__('The paiss has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The paiss could not be saved. Please, try again.'));
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
		if (!$this->Paiss->exists($id)) {
			throw new NotFoundException(__('Invalid paiss'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Paiss->save($this->request->data)) {
				$this->Flash->success(__('The paiss has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The paiss could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Paiss.' . $this->Paiss->primaryKey => $id));
			$this->request->data = $this->Paiss->find('first', $options);
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
		$this->Paiss->id = $id;
		if (!$this->Paiss->exists()) {
			throw new NotFoundException(__('Invalid paiss'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Paiss->delete()) {
			$this->Flash->success(__('The paiss has been deleted.'));
		} else {
			$this->Flash->error(__('The paiss could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
