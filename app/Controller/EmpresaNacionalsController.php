<?php
App::uses('AppController', 'Controller');
/**
 * EmpresaNacionals Controller
 *
 * @property EmpresaNacional $EmpresaNacional
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class EmpresaNacionalsController extends AppController {

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
		$this->EmpresaNacional->recursive = 0;
		$this->set('empresaNacionals', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->EmpresaNacional->exists($id)) {
			throw new NotFoundException(__('Invalid empresa nacional'));
		}
		$options = array('conditions' => array('EmpresaNacional.' . $this->EmpresaNacional->primaryKey => $id));
		$this->set('empresaNacional', $this->EmpresaNacional->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->EmpresaNacional->create();
			if ($this->EmpresaNacional->save($this->request->data)) {
				$this->Flash->success(__('The empresa nacional has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The empresa nacional could not be saved. Please, try again.'));
			}
		}
		$users = $this->EmpresaNacional->User->find('list');
		$ciudads = $this->EmpresaNacional->Ciudad->find('list');
		$this->set(compact('users', 'ciudads'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->EmpresaNacional->exists($id)) {
			throw new NotFoundException(__('Invalid empresa nacional'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->EmpresaNacional->save($this->request->data)) {
				$this->Flash->success(__('The empresa nacional has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The empresa nacional could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('EmpresaNacional.' . $this->EmpresaNacional->primaryKey => $id));
			$this->request->data = $this->EmpresaNacional->find('first', $options);
		}
		$users = $this->EmpresaNacional->User->find('list');
		$ciudads = $this->EmpresaNacional->Ciudad->find('list');
		$this->set(compact('users', 'ciudads'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->EmpresaNacional->id = $id;
		if (!$this->EmpresaNacional->exists()) {
			throw new NotFoundException(__('Invalid empresa nacional'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->EmpresaNacional->delete()) {
			$this->Flash->success(__('The empresa nacional has been deleted.'));
		} else {
			$this->Flash->error(__('The empresa nacional could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->EmpresaNacional->recursive = 0;
		$this->set('empresaNacionals', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->EmpresaNacional->exists($id)) {
			throw new NotFoundException(__('Invalid empresa nacional'));
		}
		$options = array('conditions' => array('EmpresaNacional.' . $this->EmpresaNacional->primaryKey => $id));
		$this->set('empresaNacional', $this->EmpresaNacional->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->EmpresaNacional->create();
			if ($this->EmpresaNacional->save($this->request->data)) {
				$this->Flash->success(__('The empresa nacional has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The empresa nacional could not be saved. Please, try again.'));
			}
		}
		$users = $this->EmpresaNacional->User->find('list');
		$ciudads = $this->EmpresaNacional->Ciudad->find('list');
		$this->set(compact('users', 'ciudads'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->EmpresaNacional->exists($id)) {
			throw new NotFoundException(__('Invalid empresa nacional'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->EmpresaNacional->save($this->request->data)) {
				$this->Flash->success(__('The empresa nacional has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The empresa nacional could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('EmpresaNacional.' . $this->EmpresaNacional->primaryKey => $id));
			$this->request->data = $this->EmpresaNacional->find('first', $options);
		}
		$users = $this->EmpresaNacional->User->find('list');
		$ciudads = $this->EmpresaNacional->Ciudad->find('list');
		$this->set(compact('users', 'ciudads'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->EmpresaNacional->id = $id;
		if (!$this->EmpresaNacional->exists()) {
			throw new NotFoundException(__('Invalid empresa nacional'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->EmpresaNacional->delete()) {
			$this->Flash->success(__('The empresa nacional has been deleted.'));
		} else {
			$this->Flash->error(__('The empresa nacional could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
