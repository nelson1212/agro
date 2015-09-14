<?php
App::uses('AppController', 'Controller');
/**
 * Firmezas Controller
 *
 * @property Firmeza $Firmeza
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class FirmezasController extends AppController {

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
		$this->Firmeza->recursive = 0;
		$this->set('firmezas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Firmeza->exists($id)) {
			throw new NotFoundException(__('Invalid firmeza'));
		}
		$options = array('conditions' => array('Firmeza.' . $this->Firmeza->primaryKey => $id));
		$this->set('firmeza', $this->Firmeza->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Firmeza->create();
			if ($this->Firmeza->save($this->request->data)) {
				$this->Flash->success(__('The firmeza has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The firmeza could not be saved. Please, try again.'));
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
		if (!$this->Firmeza->exists($id)) {
			throw new NotFoundException(__('Invalid firmeza'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Firmeza->save($this->request->data)) {
				$this->Flash->success(__('The firmeza has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The firmeza could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Firmeza.' . $this->Firmeza->primaryKey => $id));
			$this->request->data = $this->Firmeza->find('first', $options);
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
		$this->Firmeza->id = $id;
		if (!$this->Firmeza->exists()) {
			throw new NotFoundException(__('Invalid firmeza'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Firmeza->delete()) {
			$this->Flash->success(__('The firmeza has been deleted.'));
		} else {
			$this->Flash->error(__('The firmeza could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Firmeza->recursive = 0;
		$this->set('firmezas', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Firmeza->exists($id)) {
			throw new NotFoundException(__('Invalid firmeza'));
		}
		$options = array('conditions' => array('Firmeza.' . $this->Firmeza->primaryKey => $id));
		$this->set('firmeza', $this->Firmeza->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Firmeza->create();
			if ($this->Firmeza->save($this->request->data)) {
				$this->Flash->success(__('The firmeza has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The firmeza could not be saved. Please, try again.'));
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
		if (!$this->Firmeza->exists($id)) {
			throw new NotFoundException(__('Invalid firmeza'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Firmeza->save($this->request->data)) {
				$this->Flash->success(__('The firmeza has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The firmeza could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Firmeza.' . $this->Firmeza->primaryKey => $id));
			$this->request->data = $this->Firmeza->find('first', $options);
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
		$this->Firmeza->id = $id;
		if (!$this->Firmeza->exists()) {
			throw new NotFoundException(__('Invalid firmeza'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Firmeza->delete()) {
			$this->Flash->success(__('The firmeza has been deleted.'));
		} else {
			$this->Flash->error(__('The firmeza could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
