<?php
App::uses('AppController', 'Controller');
/**
 * Brillos Controller
 *
 * @property Brillo $Brillo
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class BrillosController extends AppController {

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
		$this->Brillo->recursive = 0;
		$this->set('brillos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Brillo->exists($id)) {
			throw new NotFoundException(__('Invalid brillo'));
		}
		$options = array('conditions' => array('Brillo.' . $this->Brillo->primaryKey => $id));
		$this->set('brillo', $this->Brillo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Brillo->create();
			if ($this->Brillo->save($this->request->data)) {
				$this->Flash->success(__('The brillo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The brillo could not be saved. Please, try again.'));
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
		if (!$this->Brillo->exists($id)) {
			throw new NotFoundException(__('Invalid brillo'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Brillo->save($this->request->data)) {
				$this->Flash->success(__('The brillo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The brillo could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Brillo.' . $this->Brillo->primaryKey => $id));
			$this->request->data = $this->Brillo->find('first', $options);
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
		$this->Brillo->id = $id;
		if (!$this->Brillo->exists()) {
			throw new NotFoundException(__('Invalid brillo'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Brillo->delete()) {
			$this->Flash->success(__('The brillo has been deleted.'));
		} else {
			$this->Flash->error(__('The brillo could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Brillo->recursive = 0;
		$this->set('brillos', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Brillo->exists($id)) {
			throw new NotFoundException(__('Invalid brillo'));
		}
		$options = array('conditions' => array('Brillo.' . $this->Brillo->primaryKey => $id));
		$this->set('brillo', $this->Brillo->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Brillo->create();
			if ($this->Brillo->save($this->request->data)) {
				$this->Flash->success(__('The brillo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The brillo could not be saved. Please, try again.'));
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
		
		if (!$this->Brillo->exists($id)) {
			throw new NotFoundException(__('Invalid brillo'));
		}
		
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Brillo->save($this->request->data)) {
				$this->Flash->success(__('The brillo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The brillo could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Brillo.' . $this->Brillo->primaryKey => $id));
			$this->request->data = $this->Brillo->find('first', $options);
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
		$this->Brillo->id = $id;
		if (!$this->Brillo->exists()) {
			throw new NotFoundException(__('Invalid brillo'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Brillo->delete()) {
			$this->Flash->success(__('The brillo has been deleted.'));
		} else {
			$this->Flash->error(__('The brillo could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
