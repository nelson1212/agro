<?php
App::uses('AppController', 'Controller');
/**
 * UserCertificacions Controller
 *
 * @property UserCertificacion $UserCertificacion
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class UserCertificacionsController extends AppController {

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
		$this->UserCertificacion->recursive = 0;
		$this->set('userCertificacions', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->UserCertificacion->exists($id)) {
			throw new NotFoundException(__('Invalid user certificacion'));
		}
		$options = array('conditions' => array('UserCertificacion.' . $this->UserCertificacion->primaryKey => $id));
		$this->set('userCertificacion', $this->UserCertificacion->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->UserCertificacion->create();
			if ($this->UserCertificacion->save($this->request->data)) {
				$this->Flash->success(__('The user certificacion has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The user certificacion could not be saved. Please, try again.'));
			}
		}
		$users = $this->UserCertificacion->User->find('list');
		$certificacions = $this->UserCertificacion->Certificacion->find('list');
		$this->set(compact('users', 'certificacions'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->UserCertificacion->exists($id)) {
			throw new NotFoundException(__('Invalid user certificacion'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->UserCertificacion->save($this->request->data)) {
				$this->Flash->success(__('The user certificacion has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The user certificacion could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('UserCertificacion.' . $this->UserCertificacion->primaryKey => $id));
			$this->request->data = $this->UserCertificacion->find('first', $options);
		}
		$users = $this->UserCertificacion->User->find('list');
		$certificacions = $this->UserCertificacion->Certificacion->find('list');
		$this->set(compact('users', 'certificacions'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->UserCertificacion->id = $id;
		if (!$this->UserCertificacion->exists()) {
			throw new NotFoundException(__('Invalid user certificacion'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->UserCertificacion->delete()) {
			$this->Flash->success(__('The user certificacion has been deleted.'));
		} else {
			$this->Flash->error(__('The user certificacion could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->UserCertificacion->recursive = 0;
		$this->set('userCertificacions', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->UserCertificacion->exists($id)) {
			throw new NotFoundException(__('Invalid user certificacion'));
		}
		$options = array('conditions' => array('UserCertificacion.' . $this->UserCertificacion->primaryKey => $id));
		$this->set('userCertificacion', $this->UserCertificacion->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->UserCertificacion->create();
			if ($this->UserCertificacion->save($this->request->data)) {
				$this->Flash->success(__('The user certificacion has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The user certificacion could not be saved. Please, try again.'));
			}
		}
		$users = $this->UserCertificacion->User->find('list');
		$certificacions = $this->UserCertificacion->Certificacion->find('list');
		$this->set(compact('users', 'certificacions'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->UserCertificacion->exists($id)) {
			throw new NotFoundException(__('Invalid user certificacion'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->UserCertificacion->save($this->request->data)) {
				$this->Flash->success(__('The user certificacion has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The user certificacion could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('UserCertificacion.' . $this->UserCertificacion->primaryKey => $id));
			$this->request->data = $this->UserCertificacion->find('first', $options);
		}
		$users = $this->UserCertificacion->User->find('list');
		$certificacions = $this->UserCertificacion->Certificacion->find('list');
		$this->set(compact('users', 'certificacions'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->UserCertificacion->id = $id;
		if (!$this->UserCertificacion->exists()) {
			throw new NotFoundException(__('Invalid user certificacion'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->UserCertificacion->delete()) {
			$this->Flash->success(__('The user certificacion has been deleted.'));
		} else {
			$this->Flash->error(__('The user certificacion could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
