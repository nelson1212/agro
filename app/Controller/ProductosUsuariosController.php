<?php
App::uses('AppController', 'Controller');
/**
 * ProductosUsuarios Controller
 *
 * @property ProductosUsuario $ProductosUsuario
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class ProductosUsuariosController extends AppController {

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
		$this->ProductosUsuario->recursive = 0;
		$this->set('productosUsuarios', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ProductosUsuario->exists($id)) {
			throw new NotFoundException(__('Invalid productos usuario'));
		}
		$options = array('conditions' => array('ProductosUsuario.' . $this->ProductosUsuario->primaryKey => $id));
		$this->set('productosUsuario', $this->ProductosUsuario->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ProductosUsuario->create();
			if ($this->ProductosUsuario->save($this->request->data)) {
				$this->Flash->success(__('The productos usuario has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The productos usuario could not be saved. Please, try again.'));
			}
		}
		$users = $this->ProductosUsuario->User->find('list');
		$productos = $this->ProductosUsuario->Producto->find('list');
		$this->set(compact('users', 'productos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ProductosUsuario->exists($id)) {
			throw new NotFoundException(__('Invalid productos usuario'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ProductosUsuario->save($this->request->data)) {
				$this->Flash->success(__('The productos usuario has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The productos usuario could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ProductosUsuario.' . $this->ProductosUsuario->primaryKey => $id));
			$this->request->data = $this->ProductosUsuario->find('first', $options);
		}
		$users = $this->ProductosUsuario->User->find('list');
		$productos = $this->ProductosUsuario->Producto->find('list');
		$this->set(compact('users', 'productos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ProductosUsuario->id = $id;
		if (!$this->ProductosUsuario->exists()) {
			throw new NotFoundException(__('Invalid productos usuario'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ProductosUsuario->delete()) {
			$this->Flash->success(__('The productos usuario has been deleted.'));
		} else {
			$this->Flash->error(__('The productos usuario could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->ProductosUsuario->recursive = 0;
		$this->set('productosUsuarios', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->ProductosUsuario->exists($id)) {
			throw new NotFoundException(__('Invalid productos usuario'));
		}
		$options = array('conditions' => array('ProductosUsuario.' . $this->ProductosUsuario->primaryKey => $id));
		$this->set('productosUsuario', $this->ProductosUsuario->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->ProductosUsuario->create();
			if ($this->ProductosUsuario->save($this->request->data)) {
				$this->Flash->success(__('The productos usuario has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The productos usuario could not be saved. Please, try again.'));
			}
		}
		$users = $this->ProductosUsuario->User->find('list');
		$productos = $this->ProductosUsuario->Producto->find('list');
		$this->set(compact('users', 'productos'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->ProductosUsuario->exists($id)) {
			throw new NotFoundException(__('Invalid productos usuario'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ProductosUsuario->save($this->request->data)) {
				$this->Flash->success(__('The productos usuario has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The productos usuario could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ProductosUsuario.' . $this->ProductosUsuario->primaryKey => $id));
			$this->request->data = $this->ProductosUsuario->find('first', $options);
		}
		$users = $this->ProductosUsuario->User->find('list');
		$productos = $this->ProductosUsuario->Producto->find('list');
		$this->set(compact('users', 'productos'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->ProductosUsuario->id = $id;
		if (!$this->ProductosUsuario->exists()) {
			throw new NotFoundException(__('Invalid productos usuario'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ProductosUsuario->delete()) {
			$this->Flash->success(__('The productos usuario has been deleted.'));
		} else {
			$this->Flash->error(__('The productos usuario could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
