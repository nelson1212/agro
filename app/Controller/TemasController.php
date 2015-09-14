<?php
App::uses('AppController', 'Controller');
/**
 * Temas Controller
 *
 * @property Tema $Tema
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class TemasController extends AppController {

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
		$this->Tema->recursive = 0;
		$this->set('temas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Tema->exists($id)) {
			throw new NotFoundException(__('Invalid tema'));
		}
		$options = array('conditions' => array('Tema.' . $this->Tema->primaryKey => $id));
		$this->set('tema', $this->Tema->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Tema->create();
			if ($this->Tema->save($this->request->data)) {
				$this->Flash->success(__('The tema has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The tema could not be saved. Please, try again.'));
			}
		}
		$users = $this->Tema->User->find('list');
		$this->set(compact('users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Tema->exists($id)) {
			throw new NotFoundException(__('Invalid tema'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Tema->save($this->request->data)) {
				$this->Flash->success(__('The tema has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The tema could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Tema.' . $this->Tema->primaryKey => $id));
			$this->request->data = $this->Tema->find('first', $options);
		}
		$users = $this->Tema->User->find('list');
		$this->set(compact('users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Tema->id = $id;
		if (!$this->Tema->exists()) {
			throw new NotFoundException(__('Invalid tema'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Tema->delete()) {
			$this->Flash->success(__('The tema has been deleted.'));
		} else {
			$this->Flash->error(__('The tema could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Tema->recursive = 0;
		$this->set('temas', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Tema->exists($id)) {
			throw new NotFoundException(__('Invalid tema'));
		}
		$options = array('conditions' => array('Tema.' . $this->Tema->primaryKey => $id));
		$this->set('tema', $this->Tema->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Tema->create();
			if ($this->Tema->save($this->request->data)) {
				$this->Flash->success(__('The tema has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The tema could not be saved. Please, try again.'));
			}
		}
		$users = $this->Tema->User->find('list');
		$this->set(compact('users'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Tema->exists($id)) {
			throw new NotFoundException(__('Invalid tema'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Tema->save($this->request->data)) {
				$this->Flash->success(__('The tema has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The tema could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Tema.' . $this->Tema->primaryKey => $id));
			$this->request->data = $this->Tema->find('first', $options);
		}
		$users = $this->Tema->User->find('list');
		$this->set(compact('users'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Tema->id = $id;
		if (!$this->Tema->exists()) {
			throw new NotFoundException(__('Invalid tema'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Tema->delete()) {
			$this->Flash->success(__('The tema has been deleted.'));
		} else {
			$this->Flash->error(__('The tema could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
