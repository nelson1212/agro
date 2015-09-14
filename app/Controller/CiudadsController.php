<?php
App::uses('AppController', 'Controller');
/**
 * Ciudads Controller
 *
 * @property Ciudad $Ciudad
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class CiudadsController extends AppController {

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
		$this->Ciudad->recursive = 0;
		$this->set('ciudads', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Ciudad->exists($id)) {
			throw new NotFoundException(__('Invalid ciudad'));
		}
		$options = array('conditions' => array('Ciudad.' . $this->Ciudad->primaryKey => $id));
		$this->set('ciudad', $this->Ciudad->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Ciudad->create();
			if ($this->Ciudad->save($this->request->data)) {
				$this->Flash->success(__('The ciudad has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The ciudad could not be saved. Please, try again.'));
			}
		}
		$departamentos = $this->Ciudad->Departamento->find('list');
		$this->set(compact('departamentos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Ciudad->exists($id)) {
			throw new NotFoundException(__('Invalid ciudad'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Ciudad->save($this->request->data)) {
				$this->Flash->success(__('The ciudad has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The ciudad could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Ciudad.' . $this->Ciudad->primaryKey => $id));
			$this->request->data = $this->Ciudad->find('first', $options);
		}
		$departamentos = $this->Ciudad->Departamento->find('list');
		$this->set(compact('departamentos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Ciudad->id = $id;
		if (!$this->Ciudad->exists()) {
			throw new NotFoundException(__('Invalid ciudad'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Ciudad->delete()) {
			$this->Flash->success(__('The ciudad has been deleted.'));
		} else {
			$this->Flash->error(__('The ciudad could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Ciudad->recursive = 0;
		$this->set('ciudads', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Ciudad->exists($id)) {
			throw new NotFoundException(__('Invalid ciudad'));
		}
		$options = array('conditions' => array('Ciudad.' . $this->Ciudad->primaryKey => $id));
		$this->set('ciudad', $this->Ciudad->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Ciudad->create();
			if ($this->Ciudad->save($this->request->data)) {
				$this->Flash->success(__('The ciudad has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The ciudad could not be saved. Please, try again.'));
			}
		}
		$departamentos = $this->Ciudad->Departamento->find('list');
		$this->set(compact('departamentos'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Ciudad->exists($id)) {
			throw new NotFoundException(__('Invalid ciudad'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Ciudad->save($this->request->data)) {
				$this->Flash->success(__('The ciudad has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The ciudad could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Ciudad.' . $this->Ciudad->primaryKey => $id));
			$this->request->data = $this->Ciudad->find('first', $options);
		}
		$departamentos = $this->Ciudad->Departamento->find('list');
		$this->set(compact('departamentos'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Ciudad->id = $id;
		if (!$this->Ciudad->exists()) {
			throw new NotFoundException(__('Invalid ciudad'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Ciudad->delete()) {
			$this->Flash->success(__('The ciudad has been deleted.'));
		} else {
			$this->Flash->error(__('The ciudad could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
