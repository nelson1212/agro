<?php
App::uses('AppController', 'Controller');
/**
 * Productobases Controller
 *
 * @property Productobase $Productobase
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class ProductobasesController extends AppController {

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
		$this->Productobase->recursive = 0;
		$this->set('productobases', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Productobase->exists($id)) {
			throw new NotFoundException(__('Invalid productobase'));
		}
		$options = array('conditions' => array('Productobase.' . $this->Productobase->primaryKey => $id));
		$this->set('productobase', $this->Productobase->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Productobase->create();
			if ($this->Productobase->save($this->request->data)) {
				$this->Flash->success(__('The productobase has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The productobase could not be saved. Please, try again.'));
			}
		}
		$variedads = $this->Productobase->Variedad->find('list');
		$this->set(compact('variedads'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Productobase->exists($id)) {
			throw new NotFoundException(__('Invalid productobase'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Productobase->save($this->request->data)) {
				$this->Flash->success(__('The productobase has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The productobase could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Productobase.' . $this->Productobase->primaryKey => $id));
			$this->request->data = $this->Productobase->find('first', $options);
		}
		$variedads = $this->Productobase->Variedad->find('list');
		$this->set(compact('variedads'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Productobase->id = $id;
		if (!$this->Productobase->exists()) {
			throw new NotFoundException(__('Invalid productobase'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Productobase->delete()) {
			$this->Flash->success(__('The productobase has been deleted.'));
		} else {
			$this->Flash->error(__('The productobase could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Productobase->recursive = 0;
		$this->set('productobases', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Productobase->exists($id)) {
			throw new NotFoundException(__('Invalid productobase'));
		}
		$options = array('conditions' => array('Productobase.' . $this->Productobase->primaryKey => $id));
		$this->set('productobase', $this->Productobase->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Productobase->create();
			if ($this->Productobase->save($this->request->data)) {
				$this->Flash->success(__('The productobase has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The productobase could not be saved. Please, try again.'));
			}
		}
		$variedads = $this->Productobase->Variedad->find('list');
		$this->set(compact('variedads'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Productobase->exists($id)) {
			throw new NotFoundException(__('Invalid productobase'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Productobase->save($this->request->data)) {
				$this->Flash->success(__('The productobase has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The productobase could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Productobase.' . $this->Productobase->primaryKey => $id));
			$this->request->data = $this->Productobase->find('first', $options);
		}
		$variedads = $this->Productobase->Variedad->find('list');
		$this->set(compact('variedads'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Productobase->id = $id;
		if (!$this->Productobase->exists()) {
			throw new NotFoundException(__('Invalid productobase'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Productobase->delete()) {
			$this->Flash->success(__('The productobase has been deleted.'));
		} else {
			$this->Flash->error(__('The productobase could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
