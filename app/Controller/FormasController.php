<?php
App::uses('AppController', 'Controller');
/**
 * Formas Controller
 *
 * @property Forma $Forma
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class FormasController extends AppController {

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
		$this->Forma->recursive = 0;
		$this->set('formas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Forma->exists($id)) {
			throw new NotFoundException(__('Invalid forma'));
		}
		$options = array('conditions' => array('Forma.' . $this->Forma->primaryKey => $id));
		$this->set('forma', $this->Forma->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Forma->create();
			if ($this->Forma->save($this->request->data)) {
				$this->Flash->success(__('The forma has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The forma could not be saved. Please, try again.'));
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
		if (!$this->Forma->exists($id)) {
			throw new NotFoundException(__('Invalid forma'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Forma->save($this->request->data)) {
				$this->Flash->success(__('The forma has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The forma could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Forma.' . $this->Forma->primaryKey => $id));
			$this->request->data = $this->Forma->find('first', $options);
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
		$this->Forma->id = $id;
		if (!$this->Forma->exists()) {
			throw new NotFoundException(__('Invalid forma'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Forma->delete()) {
			$this->Flash->success(__('The forma has been deleted.'));
		} else {
			$this->Flash->error(__('The forma could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Forma->recursive = 0;
		$this->set('formas', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Forma->exists($id)) {
			throw new NotFoundException(__('Invalid forma'));
		}
		$options = array('conditions' => array('Forma.' . $this->Forma->primaryKey => $id));
		$this->set('forma', $this->Forma->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Forma->create();
			if ($this->Forma->save($this->request->data)) {
				$this->Flash->success(__('The forma has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The forma could not be saved. Please, try again.'));
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
		if (!$this->Forma->exists($id)) {
			throw new NotFoundException(__('Invalid forma'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Forma->save($this->request->data)) {
				$this->Flash->success(__('The forma has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The forma could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Forma.' . $this->Forma->primaryKey => $id));
			$this->request->data = $this->Forma->find('first', $options);
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
		$this->Forma->id = $id;
		if (!$this->Forma->exists()) {
			throw new NotFoundException(__('Invalid forma'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Forma->delete()) {
			$this->Flash->success(__('The forma has been deleted.'));
		} else {
			$this->Flash->error(__('The forma could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
