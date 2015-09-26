<?php
App::uses('AppController', 'Controller');
/**
 * Variedads Controller
 *
 * @property Variedad $Variedad
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class VariedadsController extends AppController {

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
		$this->Variedad->recursive = 0;
		$this->set('variedads', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Variedad->exists($id)) {
			throw new NotFoundException(__('Invalid variedad'));
		}
		$options = array('conditions' => array('Variedad.' . $this->Variedad->primaryKey => $id));
		$this->set('variedad', $this->Variedad->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Variedad->create();
			if ($this->Variedad->save($this->request->data)) {
				$this->Flash->success(__('The variedad has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The variedad could not be saved. Please, try again.'));
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
		if (!$this->Variedad->exists($id)) {
			throw new NotFoundException(__('Invalid variedad'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Variedad->save($this->request->data)) {
				$this->Flash->success(__('The variedad has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The variedad could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Variedad.' . $this->Variedad->primaryKey => $id));
			$this->request->data = $this->Variedad->find('first', $options);
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
		$this->Variedad->id = $id;
		if (!$this->Variedad->exists()) {
			throw new NotFoundException(__('Invalid variedad'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Variedad->delete()) {
			$this->Flash->success(__('The variedad has been deleted.'));
		} else {
			$this->Flash->error(__('The variedad could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Variedad->recursive = 0;
		$this->set('variedads', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Variedad->exists($id)) {
			throw new NotFoundException(__('Invalid variedad'));
		}
		$options = array('conditions' => array('Variedad.' . $this->Variedad->primaryKey => $id));
		$this->set('variedad', $this->Variedad->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Variedad->create();
			if ($this->Variedad->save($this->request->data)) {
				$this->Flash->success(__('The variedad has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The variedad could not be saved. Please, try again.'));
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
		if (!$this->Variedad->exists($id)) {
			throw new NotFoundException(__('Invalid variedad'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Variedad->save($this->request->data)) {
				$this->Flash->success(__('The variedad has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The variedad could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Variedad.' . $this->Variedad->primaryKey => $id));
			$this->request->data = $this->Variedad->find('first', $options);
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
		$this->Variedad->id = $id;
		if (!$this->Variedad->exists()) {
			throw new NotFoundException(__('Invalid variedad'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Variedad->delete()) {
			$this->Flash->success(__('The variedad has been deleted.'));
		} else {
			$this->Flash->error(__('The variedad could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
