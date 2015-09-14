<?php
App::uses('AppController', 'Controller');
/**
 * Calidads Controller
 *
 * @property Calidad $Calidad
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class CalidadsController extends AppController {

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
		$this->Calidad->recursive = 0;
		$this->set('calidads', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Calidad->exists($id)) {
			throw new NotFoundException(__('Invalid calidad'));
		}
		$options = array('conditions' => array('Calidad.' . $this->Calidad->primaryKey => $id));
		$this->set('calidad', $this->Calidad->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Calidad->create();
			if ($this->Calidad->save($this->request->data)) {
				$this->Flash->success(__('The calidad has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The calidad could not be saved. Please, try again.'));
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
		if (!$this->Calidad->exists($id)) {
			throw new NotFoundException(__('Invalid calidad'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Calidad->save($this->request->data)) {
				$this->Flash->success(__('The calidad has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The calidad could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Calidad.' . $this->Calidad->primaryKey => $id));
			$this->request->data = $this->Calidad->find('first', $options);
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
		$this->Calidad->id = $id;
		if (!$this->Calidad->exists()) {
			throw new NotFoundException(__('Invalid calidad'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Calidad->delete()) {
			$this->Flash->success(__('The calidad has been deleted.'));
		} else {
			$this->Flash->error(__('The calidad could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Calidad->recursive = 0;
		$this->set('calidads', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Calidad->exists($id)) {
			throw new NotFoundException(__('Invalid calidad'));
		}
		$options = array('conditions' => array('Calidad.' . $this->Calidad->primaryKey => $id));
		$this->set('calidad', $this->Calidad->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Calidad->create();
			if ($this->Calidad->save($this->request->data)) {
				$this->Flash->success(__('The calidad has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The calidad could not be saved. Please, try again.'));
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
		if (!$this->Calidad->exists($id)) {
			throw new NotFoundException(__('Invalid calidad'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Calidad->save($this->request->data)) {
				$this->Flash->success(__('The calidad has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The calidad could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Calidad.' . $this->Calidad->primaryKey => $id));
			$this->request->data = $this->Calidad->find('first', $options);
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
		$this->Calidad->id = $id;
		if (!$this->Calidad->exists()) {
			throw new NotFoundException(__('Invalid calidad'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Calidad->delete()) {
			$this->Flash->success(__('The calidad has been deleted.'));
		} else {
			$this->Flash->error(__('The calidad could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
