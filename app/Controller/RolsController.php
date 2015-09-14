<?php
App::uses('AppController', 'Controller');
/**
 * Rols Controller
 *
 * @property Rol $Rol
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class RolsController extends AppController {

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
		$this->Rol->recursive = 0;
		$this->set('rols', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Rol->exists($id)) {
			throw new NotFoundException(__('Invalid rol'));
		}
		$options = array('conditions' => array('Rol.' . $this->Rol->primaryKey => $id));
		$this->set('rol', $this->Rol->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Rol->create();
			if ($this->Rol->save($this->request->data)) {
				$this->Flash->success(__('The rol has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The rol could not be saved. Please, try again.'));
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
		if (!$this->Rol->exists($id)) {
			throw new NotFoundException(__('Invalid rol'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Rol->save($this->request->data)) {
				$this->Flash->success(__('The rol has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The rol could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Rol.' . $this->Rol->primaryKey => $id));
			$this->request->data = $this->Rol->find('first', $options);
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
		$this->Rol->id = $id;
		if (!$this->Rol->exists()) {
			throw new NotFoundException(__('Invalid rol'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Rol->delete()) {
			$this->Flash->success(__('The rol has been deleted.'));
		} else {
			$this->Flash->error(__('The rol could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Rol->recursive = 0;
		$this->set('rols', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Rol->exists($id)) {
			throw new NotFoundException(__('Invalid rol'));
		}
		$options = array('conditions' => array('Rol.' . $this->Rol->primaryKey => $id));
		$this->set('rol', $this->Rol->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Rol->create();
			if ($this->Rol->save($this->request->data)) {
				$this->Flash->success(__('The rol has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The rol could not be saved. Please, try again.'));
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
		if (!$this->Rol->exists($id)) {
			throw new NotFoundException(__('Invalid rol'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Rol->save($this->request->data)) {
				$this->Flash->success(__('The rol has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The rol could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Rol.' . $this->Rol->primaryKey => $id));
			$this->request->data = $this->Rol->find('first', $options);
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
		$this->Rol->id = $id;
		if (!$this->Rol->exists()) {
			throw new NotFoundException(__('Invalid rol'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Rol->delete()) {
			$this->Flash->success(__('The rol has been deleted.'));
		} else {
			$this->Flash->error(__('The rol could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
