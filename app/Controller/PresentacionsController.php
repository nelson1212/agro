<?php
App::uses('AppController', 'Controller');
/**
 * Presentacions Controller
 *
 * @property Presentacion $Presentacion
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class PresentacionsController extends AppController {

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
		$this->Presentacion->recursive = 0;
		$this->set('presentacions', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Presentacion->exists($id)) {
			throw new NotFoundException(__('Invalid presentacion'));
		}
		$options = array('conditions' => array('Presentacion.' . $this->Presentacion->primaryKey => $id));
		$this->set('presentacion', $this->Presentacion->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Presentacion->create();
			if ($this->Presentacion->save($this->request->data)) {
				$this->Flash->success(__('The presentacion has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The presentacion could not be saved. Please, try again.'));
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
		if (!$this->Presentacion->exists($id)) {
			throw new NotFoundException(__('Invalid presentacion'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Presentacion->save($this->request->data)) {
				$this->Flash->success(__('The presentacion has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The presentacion could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Presentacion.' . $this->Presentacion->primaryKey => $id));
			$this->request->data = $this->Presentacion->find('first', $options);
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
		$this->Presentacion->id = $id;
		if (!$this->Presentacion->exists()) {
			throw new NotFoundException(__('Invalid presentacion'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Presentacion->delete()) {
			$this->Flash->success(__('The presentacion has been deleted.'));
		} else {
			$this->Flash->error(__('The presentacion could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Presentacion->recursive = 0;
		$this->set('presentacions', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Presentacion->exists($id)) {
			throw new NotFoundException(__('Invalid presentacion'));
		}
		$options = array('conditions' => array('Presentacion.' . $this->Presentacion->primaryKey => $id));
		$this->set('presentacion', $this->Presentacion->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Presentacion->create();
			if ($this->Presentacion->save($this->request->data)) {
				$this->Flash->success(__('The presentacion has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The presentacion could not be saved. Please, try again.'));
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
		if (!$this->Presentacion->exists($id)) {
			throw new NotFoundException(__('Invalid presentacion'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Presentacion->save($this->request->data)) {
				$this->Flash->success(__('The presentacion has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The presentacion could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Presentacion.' . $this->Presentacion->primaryKey => $id));
			$this->request->data = $this->Presentacion->find('first', $options);
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
		$this->Presentacion->id = $id;
		if (!$this->Presentacion->exists()) {
			throw new NotFoundException(__('Invalid presentacion'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Presentacion->delete()) {
			$this->Flash->success(__('The presentacion has been deleted.'));
		} else {
			$this->Flash->error(__('The presentacion could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
