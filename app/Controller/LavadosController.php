<?php
App::uses('AppController', 'Controller');
/**
 * Lavados Controller
 *
 * @property Lavado $Lavado
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class LavadosController extends AppController {

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
		$this->Lavado->recursive = 0;
		$this->set('lavados', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Lavado->exists($id)) {
			throw new NotFoundException(__('Invalid lavado'));
		}
		$options = array('conditions' => array('Lavado.' . $this->Lavado->primaryKey => $id));
		$this->set('lavado', $this->Lavado->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Lavado->create();
			if ($this->Lavado->save($this->request->data)) {
				$this->Flash->success(__('The lavado has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The lavado could not be saved. Please, try again.'));
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
		if (!$this->Lavado->exists($id)) {
			throw new NotFoundException(__('Invalid lavado'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Lavado->save($this->request->data)) {
				$this->Flash->success(__('The lavado has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The lavado could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Lavado.' . $this->Lavado->primaryKey => $id));
			$this->request->data = $this->Lavado->find('first', $options);
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
		$this->Lavado->id = $id;
		if (!$this->Lavado->exists()) {
			throw new NotFoundException(__('Invalid lavado'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Lavado->delete()) {
			$this->Flash->success(__('The lavado has been deleted.'));
		} else {
			$this->Flash->error(__('The lavado could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Lavado->recursive = 0;
		$this->set('lavados', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Lavado->exists($id)) {
			throw new NotFoundException(__('Invalid lavado'));
		}
		$options = array('conditions' => array('Lavado.' . $this->Lavado->primaryKey => $id));
		$this->set('lavado', $this->Lavado->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Lavado->create();
			if ($this->Lavado->save($this->request->data)) {
				$this->Flash->success(__('The lavado has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The lavado could not be saved. Please, try again.'));
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
		if (!$this->Lavado->exists($id)) {
			throw new NotFoundException(__('Invalid lavado'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Lavado->save($this->request->data)) {
				$this->Flash->success(__('The lavado has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The lavado could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Lavado.' . $this->Lavado->primaryKey => $id));
			$this->request->data = $this->Lavado->find('first', $options);
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
		$this->Lavado->id = $id;
		if (!$this->Lavado->exists()) {
			throw new NotFoundException(__('Invalid lavado'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Lavado->delete()) {
			$this->Flash->success(__('The lavado has been deleted.'));
		} else {
			$this->Flash->error(__('The lavado could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
