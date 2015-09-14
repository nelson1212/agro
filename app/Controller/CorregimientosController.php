<?php
App::uses('AppController', 'Controller');
/**
 * Corregimientos Controller
 *
 * @property Corregimiento $Corregimiento
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class CorregimientosController extends AppController {

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
		$this->Corregimiento->recursive = 0;
		$this->set('corregimientos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Corregimiento->exists($id)) {
			throw new NotFoundException(__('Invalid corregimiento'));
		}
		$options = array('conditions' => array('Corregimiento.' . $this->Corregimiento->primaryKey => $id));
		$this->set('corregimiento', $this->Corregimiento->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Corregimiento->create();
			if ($this->Corregimiento->save($this->request->data)) {
				$this->Flash->success(__('The corregimiento has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The corregimiento could not be saved. Please, try again.'));
			}
		}
		$ciudads = $this->Corregimiento->Ciudad->find('list');
		$this->set(compact('ciudads'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Corregimiento->exists($id)) {
			throw new NotFoundException(__('Invalid corregimiento'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Corregimiento->save($this->request->data)) {
				$this->Flash->success(__('The corregimiento has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The corregimiento could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Corregimiento.' . $this->Corregimiento->primaryKey => $id));
			$this->request->data = $this->Corregimiento->find('first', $options);
		}
		$ciudads = $this->Corregimiento->Ciudad->find('list');
		$this->set(compact('ciudads'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Corregimiento->id = $id;
		if (!$this->Corregimiento->exists()) {
			throw new NotFoundException(__('Invalid corregimiento'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Corregimiento->delete()) {
			$this->Flash->success(__('The corregimiento has been deleted.'));
		} else {
			$this->Flash->error(__('The corregimiento could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Corregimiento->recursive = 0;
		$this->set('corregimientos', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Corregimiento->exists($id)) {
			throw new NotFoundException(__('Invalid corregimiento'));
		}
		$options = array('conditions' => array('Corregimiento.' . $this->Corregimiento->primaryKey => $id));
		$this->set('corregimiento', $this->Corregimiento->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Corregimiento->create();
			if ($this->Corregimiento->save($this->request->data)) {
				$this->Flash->success(__('The corregimiento has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The corregimiento could not be saved. Please, try again.'));
			}
		}
		$ciudads = $this->Corregimiento->Ciudad->find('list');
		$this->set(compact('ciudads'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Corregimiento->exists($id)) {
			throw new NotFoundException(__('Invalid corregimiento'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Corregimiento->save($this->request->data)) {
				$this->Flash->success(__('The corregimiento has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The corregimiento could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Corregimiento.' . $this->Corregimiento->primaryKey => $id));
			$this->request->data = $this->Corregimiento->find('first', $options);
		}
		$ciudads = $this->Corregimiento->Ciudad->find('list');
		$this->set(compact('ciudads'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Corregimiento->id = $id;
		if (!$this->Corregimiento->exists()) {
			throw new NotFoundException(__('Invalid corregimiento'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Corregimiento->delete()) {
			$this->Flash->success(__('The corregimiento has been deleted.'));
		} else {
			$this->Flash->error(__('The corregimiento could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
