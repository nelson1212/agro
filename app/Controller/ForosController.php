<?php
App::uses('AppController', 'Controller');
/**
 * Foros Controller
 *
 * @property Foro $Foro
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class ForosController extends AppController {

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
		$this->Foro->recursive = 0;
		$this->set('foros', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Foro->exists($id)) {
			throw new NotFoundException(__('Invalid foro'));
		}
		$options = array('conditions' => array('Foro.' . $this->Foro->primaryKey => $id));
		$this->set('foro', $this->Foro->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Foro->create();
			if ($this->Foro->save($this->request->data)) {
				$this->Flash->success(__('The foro has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The foro could not be saved. Please, try again.'));
			}
		}

		$users = $this->Foro->User->find('list');
		$categorias = $this->Foro->Categoria->find('list');
		$this->set(compact('users', 'categorias'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Foro->exists($id)) {
			throw new NotFoundException(__('Invalid foro'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Foro->save($this->request->data)) {
				$this->Flash->success(__('The foro has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The foro could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Foro.' . $this->Foro->primaryKey => $id));
			$this->request->data = $this->Foro->find('first', $options);
		}
		$users = $this->Foro->User->find('list');
		$categorias = $this->Foro->Categoria->find('list');
		$this->set(compact('users', 'categorias'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Foro->id = $id;
		if (!$this->Foro->exists()) {
			throw new NotFoundException(__('Invalid foro'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Foro->delete()) {
			$this->Flash->success(__('The foro has been deleted.'));
		} else {
			$this->Flash->error(__('The foro could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Foro->recursive = 0;
		$this->set('foros', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Foro->exists($id)) {
			throw new NotFoundException(__('Invalid foro'));
		}
		$options = array('conditions' => array('Foro.' . $this->Foro->primaryKey => $id));
		$this->set('foro', $this->Foro->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Foro->create();
			if ($this->Foro->save($this->request->data)) {
				$this->Flash->success(__('The foro has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The foro could not be saved. Please, try again.'));
			}
		}
		$users = $this->Foro->User->find('list');
		$categorias = $this->Foro->Categoria->find('list');
		$this->set(compact('users', 'categorias'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Foro->exists($id)) {
			throw new NotFoundException(__('Invalid foro'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Foro->save($this->request->data)) {
				$this->Flash->success(__('The foro has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The foro could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Foro.' . $this->Foro->primaryKey => $id));
			$this->request->data = $this->Foro->find('first', $options);
		}
		$users = $this->Foro->User->find('list');
		$categorias = $this->Foro->Categoria->find('list');
		$this->set(compact('users', 'categorias'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Foro->id = $id;
		if (!$this->Foro->exists()) {
			throw new NotFoundException(__('Invalid foro'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Foro->delete()) {
			$this->Flash->success(__('The foro has been deleted.'));
		} else {
			$this->Flash->error(__('The foro could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
