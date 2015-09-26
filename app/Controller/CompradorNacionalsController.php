<?php
App::uses('AppController', 'Controller');
/**
 * CompradorNacionals Controller
 *
 * @property CompradorNacional $CompradorNacional
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class CompradorNacionalsController extends AppController {

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
		$this->CompradorNacional->recursive = 0;
		$this->set('compradorNacionals', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CompradorNacional->exists($id)) {
			throw new NotFoundException(__('Invalid comprador nacional'));
		}
		$options = array('conditions' => array('CompradorNacional.' . $this->CompradorNacional->primaryKey => $id));
		$this->set('compradorNacional', $this->CompradorNacional->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CompradorNacional->create();
			if ($this->CompradorNacional->save($this->request->data)) {
				$this->Flash->success(__('The comprador nacional has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The comprador nacional could not be saved. Please, try again.'));
			}
		}
		$users = $this->CompradorNacional->User->find('list');
		$ciudads = $this->CompradorNacional->Ciudad->find('list');
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
		if (!$this->CompradorNacional->exists($id)) {
			throw new NotFoundException(__('Invalid comprador nacional'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CompradorNacional->save($this->request->data)) {
				$this->Flash->success(__('The comprador nacional has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The comprador nacional could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CompradorNacional.' . $this->CompradorNacional->primaryKey => $id));
			$this->request->data = $this->CompradorNacional->find('first', $options);
		}
		$users = $this->CompradorNacional->User->find('list');
		$ciudads = $this->CompradorNacional->Ciudad->find('list');
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
		$this->CompradorNacional->id = $id;
		if (!$this->CompradorNacional->exists()) {
			throw new NotFoundException(__('Invalid comprador nacional'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->CompradorNacional->delete()) {
			$this->Flash->success(__('The comprador nacional has been deleted.'));
		} else {
			$this->Flash->error(__('The comprador nacional could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->CompradorNacional->recursive = 0;
		$this->set('compradorNacionals', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->CompradorNacional->exists($id)) {
			throw new NotFoundException(__('Invalid comprador nacional'));
		}
		$options = array('conditions' => array('CompradorNacional.' . $this->CompradorNacional->primaryKey => $id));
		$this->set('compradorNacional', $this->CompradorNacional->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->CompradorNacional->create();
			if ($this->CompradorNacional->save($this->request->data)) {
				$this->Flash->success(__('The comprador nacional has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The comprador nacional could not be saved. Please, try again.'));
			}
		}
		$users = $this->CompradorNacional->User->find('list');
		$ciudads = $this->CompradorNacional->Ciudad->find('list');
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
		if (!$this->CompradorNacional->exists($id)) {
			throw new NotFoundException(__('Invalid comprador nacional'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CompradorNacional->save($this->request->data)) {
				$this->Flash->success(__('The comprador nacional has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The comprador nacional could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CompradorNacional.' . $this->CompradorNacional->primaryKey => $id));
			$this->request->data = $this->CompradorNacional->find('first', $options);
		}
		$users = $this->CompradorNacional->User->find('list');
		$ciudads = $this->CompradorNacional->Ciudad->find('list');
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
		$this->CompradorNacional->id = $id;
		if (!$this->CompradorNacional->exists()) {
			throw new NotFoundException(__('Invalid comprador nacional'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->CompradorNacional->delete()) {
			$this->Flash->success(__('The comprador nacional has been deleted.'));
		} else {
			$this->Flash->error(__('The comprador nacional could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
