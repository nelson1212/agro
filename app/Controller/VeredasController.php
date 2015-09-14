<?php
App::uses('AppController', 'Controller');
/**
 * Veredas Controller
 *
 * @property Vereda $Vereda
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class VeredasController extends AppController {

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
		$this->Vereda->recursive = 0;
		$this->set('veredas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Vereda->exists($id)) {
			throw new NotFoundException(__('Invalid vereda'));
		}
		$options = array('conditions' => array('Vereda.' . $this->Vereda->primaryKey => $id));
		$this->set('vereda', $this->Vereda->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Vereda->create();
			if ($this->Vereda->save($this->request->data)) {
				$this->Flash->success(__('The vereda has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The vereda could not be saved. Please, try again.'));
			}
		}
		$ciudads = $this->Vereda->Ciudad->find('list');
		$this->set(compact('ciudads'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Vereda->exists($id)) {
			throw new NotFoundException(__('Invalid vereda'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Vereda->save($this->request->data)) {
				$this->Flash->success(__('The vereda has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The vereda could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Vereda.' . $this->Vereda->primaryKey => $id));
			$this->request->data = $this->Vereda->find('first', $options);
		}
		$ciudads = $this->Vereda->Ciudad->find('list');
		$this->set(compact('ciudads'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Vereda->id = $id;
		if (!$this->Vereda->exists()) {
			throw new NotFoundException(__('Invalid vereda'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Vereda->delete()) {
			$this->Flash->success(__('The vereda has been deleted.'));
		} else {
			$this->Flash->error(__('The vereda could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Vereda->recursive = 0;
		$this->set('veredas', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Vereda->exists($id)) {
			throw new NotFoundException(__('Invalid vereda'));
		}
		$options = array('conditions' => array('Vereda.' . $this->Vereda->primaryKey => $id));
		$this->set('vereda', $this->Vereda->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Vereda->create();
			if ($this->Vereda->save($this->request->data)) {
				$this->Flash->success(__('The vereda has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The vereda could not be saved. Please, try again.'));
			}
		}
		$ciudads = $this->Vereda->Ciudad->find('list');
		$this->set(compact('ciudads'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Vereda->exists($id)) {
			throw new NotFoundException(__('Invalid vereda'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Vereda->save($this->request->data)) {
				$this->Flash->success(__('The vereda has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The vereda could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Vereda.' . $this->Vereda->primaryKey => $id));
			$this->request->data = $this->Vereda->find('first', $options);
		}
		$ciudads = $this->Vereda->Ciudad->find('list');
		$this->set(compact('ciudads'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Vereda->id = $id;
		if (!$this->Vereda->exists()) {
			throw new NotFoundException(__('Invalid vereda'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Vereda->delete()) {
			$this->Flash->success(__('The vereda has been deleted.'));
		} else {
			$this->Flash->error(__('The vereda could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
