<?php
App::uses('AppController', 'Controller');
/**
 * TipoAgriculturas Controller
 *
 * @property TipoAgricultura $TipoAgricultura
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class TipoAgriculturasController extends AppController {

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
		$this->TipoAgricultura->recursive = 0;
		$this->set('tipoAgriculturas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->TipoAgricultura->exists($id)) {
			throw new NotFoundException(__('Invalid tipo agricultura'));
		}
		$options = array('conditions' => array('TipoAgricultura.' . $this->TipoAgricultura->primaryKey => $id));
		$this->set('tipoAgricultura', $this->TipoAgricultura->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TipoAgricultura->create();
			if ($this->TipoAgricultura->save($this->request->data)) {
				$this->Flash->success(__('The tipo agricultura has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The tipo agricultura could not be saved. Please, try again.'));
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
		if (!$this->TipoAgricultura->exists($id)) {
			throw new NotFoundException(__('Invalid tipo agricultura'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TipoAgricultura->save($this->request->data)) {
				$this->Flash->success(__('The tipo agricultura has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The tipo agricultura could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TipoAgricultura.' . $this->TipoAgricultura->primaryKey => $id));
			$this->request->data = $this->TipoAgricultura->find('first', $options);
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
		$this->TipoAgricultura->id = $id;
		if (!$this->TipoAgricultura->exists()) {
			throw new NotFoundException(__('Invalid tipo agricultura'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->TipoAgricultura->delete()) {
			$this->Flash->success(__('The tipo agricultura has been deleted.'));
		} else {
			$this->Flash->error(__('The tipo agricultura could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->TipoAgricultura->recursive = 0;
		$this->set('tipoAgriculturas', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->TipoAgricultura->exists($id)) {
			throw new NotFoundException(__('Invalid tipo agricultura'));
		}
		$options = array('conditions' => array('TipoAgricultura.' . $this->TipoAgricultura->primaryKey => $id));
		$this->set('tipoAgricultura', $this->TipoAgricultura->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->TipoAgricultura->create();
			if ($this->TipoAgricultura->save($this->request->data)) {
				$this->Flash->success(__('The tipo agricultura has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The tipo agricultura could not be saved. Please, try again.'));
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
		if (!$this->TipoAgricultura->exists($id)) {
			throw new NotFoundException(__('Invalid tipo agricultura'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TipoAgricultura->save($this->request->data)) {
				$this->Flash->success(__('The tipo agricultura has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The tipo agricultura could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TipoAgricultura.' . $this->TipoAgricultura->primaryKey => $id));
			$this->request->data = $this->TipoAgricultura->find('first', $options);
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
		$this->TipoAgricultura->id = $id;
		if (!$this->TipoAgricultura->exists()) {
			throw new NotFoundException(__('Invalid tipo agricultura'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->TipoAgricultura->delete()) {
			$this->Flash->success(__('The tipo agricultura has been deleted.'));
		} else {
			$this->Flash->error(__('The tipo agricultura could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
