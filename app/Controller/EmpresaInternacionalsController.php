<?php
App::uses('AppController', 'Controller');
/**
 * EmpresaInternacionals Controller
 *
 * @property EmpresaInternacional $EmpresaInternacional
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class EmpresaInternacionalsController extends AppController {

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
		$this->EmpresaInternacional->recursive = 0;
		$this->set('empresaInternacionals', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->EmpresaInternacional->exists($id)) {
			throw new NotFoundException(__('Invalid empresa internacional'));
		}
		$options = array('conditions' => array('EmpresaInternacional.' . $this->EmpresaInternacional->primaryKey => $id));
		$this->set('empresaInternacional', $this->EmpresaInternacional->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->EmpresaInternacional->create();
			if ($this->EmpresaInternacional->save($this->request->data)) {
				$this->Flash->success(__('The empresa internacional has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The empresa internacional could not be saved. Please, try again.'));
			}
		}
		$users = $this->EmpresaInternacional->User->find('list');
		$paisses = $this->EmpresaInternacional->Paiss->find('list');
		$this->set(compact('users', 'paisses'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->EmpresaInternacional->exists($id)) {
			throw new NotFoundException(__('Invalid empresa internacional'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->EmpresaInternacional->save($this->request->data)) {
				$this->Flash->success(__('The empresa internacional has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The empresa internacional could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('EmpresaInternacional.' . $this->EmpresaInternacional->primaryKey => $id));
			$this->request->data = $this->EmpresaInternacional->find('first', $options);
		}
		$users = $this->EmpresaInternacional->User->find('list');
		$paisses = $this->EmpresaInternacional->Paiss->find('list');
		$this->set(compact('users', 'paisses'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->EmpresaInternacional->id = $id;
		if (!$this->EmpresaInternacional->exists()) {
			throw new NotFoundException(__('Invalid empresa internacional'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->EmpresaInternacional->delete()) {
			$this->Flash->success(__('The empresa internacional has been deleted.'));
		} else {
			$this->Flash->error(__('The empresa internacional could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->EmpresaInternacional->recursive = 0;
		$this->set('empresaInternacionals', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->EmpresaInternacional->exists($id)) {
			throw new NotFoundException(__('Invalid empresa internacional'));
		}
		$options = array('conditions' => array('EmpresaInternacional.' . $this->EmpresaInternacional->primaryKey => $id));
		$this->set('empresaInternacional', $this->EmpresaInternacional->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->EmpresaInternacional->create();
			if ($this->EmpresaInternacional->save($this->request->data)) {
				$this->Flash->success(__('The empresa internacional has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The empresa internacional could not be saved. Please, try again.'));
			}
		}
		$users = $this->EmpresaInternacional->User->find('list');
		$paisses = $this->EmpresaInternacional->Paiss->find('list');
		$this->set(compact('users', 'paisses'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->EmpresaInternacional->exists($id)) {
			throw new NotFoundException(__('Invalid empresa internacional'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->EmpresaInternacional->save($this->request->data)) {
				$this->Flash->success(__('The empresa internacional has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The empresa internacional could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('EmpresaInternacional.' . $this->EmpresaInternacional->primaryKey => $id));
			$this->request->data = $this->EmpresaInternacional->find('first', $options);
		}
		$users = $this->EmpresaInternacional->User->find('list');
		$paisses = $this->EmpresaInternacional->Paiss->find('list');
		$this->set(compact('users', 'paisses'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->EmpresaInternacional->id = $id;
		if (!$this->EmpresaInternacional->exists()) {
			throw new NotFoundException(__('Invalid empresa internacional'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->EmpresaInternacional->delete()) {
			$this->Flash->success(__('The empresa internacional has been deleted.'));
		} else {
			$this->Flash->error(__('The empresa internacional could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
