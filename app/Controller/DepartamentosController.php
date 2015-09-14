<?php
App::uses('AppController', 'Controller');
/**
 * Departamentos Controller
 *
 * @property Departamento $Departamento
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class DepartamentosController extends AppController {

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
		$this->Departamento->recursive = 0;
		$this->set('departamentos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Departamento->exists($id)) {
			throw new NotFoundException(__('Invalid departamento'));
		}
		$options = array('conditions' => array('Departamento.' . $this->Departamento->primaryKey => $id));
		$this->set('departamento', $this->Departamento->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Departamento->create();
			if ($this->Departamento->save($this->request->data)) {
				$this->Flash->success(__('The departamento has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The departamento could not be saved. Please, try again.'));
			}
		}
		$Paiss = $this->Departamento->Paiss->find('list');
	        //debug($Paiss);
		$this->set(compact('Paiss'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Departamento->exists($id)) {
			throw new NotFoundException(__('Invalid departamento'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Departamento->save($this->request->data)) {
				$this->Flash->success(__('The departamento has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The departamento could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Departamento.' . $this->Departamento->primaryKey => $id));
			$this->request->data = $this->Departamento->find('first', $options);
		}
		$Paiss = $this->Departamento->Paiss->find('list');
		$this->set(compact('Paiss'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Departamento->id = $id;
		if (!$this->Departamento->exists()) {
			throw new NotFoundException(__('Invalid departamento'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Departamento->delete()) {
			$this->Flash->success(__('The departamento has been deleted.'));
		} else {
			$this->Flash->error(__('The departamento could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Departamento->recursive = 0;
		$this->set('departamentos', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Departamento->exists($id)) {
			throw new NotFoundException(__('Invalid departamento'));
		}
		$options = array('conditions' => array('Departamento.' . $this->Departamento->primaryKey => $id));
		$this->set('departamento', $this->Departamento->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Departamento->create();
			if ($this->Departamento->save($this->request->data)) {
				$this->Flash->success(__('The departamento has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The departamento could not be saved. Please, try again.'));
			}
		}
		$Paiss = $this->Departamento->Paiss->find('list');
		$this->set(compact('Paiss'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Departamento->exists($id)) {
			throw new NotFoundException(__('Invalid departamento'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Departamento->save($this->request->data)) {
				$this->Flash->success(__('The departamento has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The departamento could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Departamento.' . $this->Departamento->primaryKey => $id));
			$this->request->data = $this->Departamento->find('first', $options);
		}
		$Paiss = $this->Departamento->Paiss->find('list');
		$this->set(compact('Paiss'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Departamento->id = $id;
		if (!$this->Departamento->exists()) {
			throw new NotFoundException(__('Invalid departamento'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Departamento->delete()) {
			$this->Flash->success(__('The departamento has been deleted.'));
		} else {
			$this->Flash->error(__('The departamento could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
