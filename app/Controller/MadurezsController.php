<?php
App::uses('AppController', 'Controller');
/**
 * Madurezs Controller
 *
 * @property Madurez $Madurez
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class MadurezsController extends AppController {

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
		$this->Madurez->recursive = 0;
		$this->set('madurezs', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Madurez->exists($id)) {
			throw new NotFoundException(__('Invalid madurez'));
		}
		$options = array('conditions' => array('Madurez.' . $this->Madurez->primaryKey => $id));
		$this->set('madurez', $this->Madurez->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Madurez->create();
			if ($this->Madurez->save($this->request->data)) {
				$this->Flash->success(__('The madurez has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The madurez could not be saved. Please, try again.'));
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
		if (!$this->Madurez->exists($id)) {
			throw new NotFoundException(__('Invalid madurez'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Madurez->save($this->request->data)) {
				$this->Flash->success(__('The madurez has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The madurez could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Madurez.' . $this->Madurez->primaryKey => $id));
			$this->request->data = $this->Madurez->find('first', $options);
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
		$this->Madurez->id = $id;
		if (!$this->Madurez->exists()) {
			throw new NotFoundException(__('Invalid madurez'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Madurez->delete()) {
			$this->Flash->success(__('The madurez has been deleted.'));
		} else {
			$this->Flash->error(__('The madurez could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Madurez->recursive = 0;
		$this->set('madurezs', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Madurez->exists($id)) {
			throw new NotFoundException(__('Invalid madurez'));
		}
		$options = array('conditions' => array('Madurez.' . $this->Madurez->primaryKey => $id));
		$this->set('madurez', $this->Madurez->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Madurez->create();
			if ($this->Madurez->save($this->request->data)) {
				$this->Flash->success(__('The madurez has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The madurez could not be saved. Please, try again.'));
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
		if (!$this->Madurez->exists($id)) {
			throw new NotFoundException(__('Invalid madurez'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Madurez->save($this->request->data)) {
				$this->Flash->success(__('The madurez has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The madurez could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Madurez.' . $this->Madurez->primaryKey => $id));
			$this->request->data = $this->Madurez->find('first', $options);
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
		$this->Madurez->id = $id;
		if (!$this->Madurez->exists()) {
			throw new NotFoundException(__('Invalid madurez'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Madurez->delete()) {
			$this->Flash->success(__('The madurez has been deleted.'));
		} else {
			$this->Flash->error(__('The madurez could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
