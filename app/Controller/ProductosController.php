<?php
App::uses('AppController', 'Controller');
/**
 * Productos Controller
 *
 * @property Producto $Producto
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class ProductosController extends AppController {

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
		$this->Producto->recursive = 0;
		$this->set('productos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Producto->exists($id)) {
			throw new NotFoundException(__('Invalid producto'));
		}
		$options = array('conditions' => array('Producto.' . $this->Producto->primaryKey => $id));
		$this->set('producto', $this->Producto->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Producto->create();
			if ($this->Producto->save($this->request->data)) {
				$this->Flash->success(__('The producto has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The producto could not be saved. Please, try again.'));
			}
		}
		$lavados = $this->Producto->Lavado->find('list');
		$embalajes = $this->Producto->Embalaje->find('list');
		$estados = $this->Producto->Estado->find('list');
		$colors = $this->Producto->Color->find('list');
		$calidads = $this->Producto->Calidad->find('list');
		$formas = $this->Producto->Forma->find('list');
		$firmezas = $this->Producto->Firmeza->find('list');
		$presentacions = $this->Producto->Presentacion->find('list');
		$brillos = $this->Producto->Brillo->find('list');
		$sanidads = $this->Producto->Sanidad->find('list');
		$madurezs = $this->Producto->Madurez->find('list');
		$this->set(compact('lavados', 'embalajes', 'estados', 'colors', 'calidads', 'formas', 'firmezas', 'presentacions', 'brillos', 'sanidads', 'madurezs'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Producto->exists($id)) {
			throw new NotFoundException(__('Invalid producto'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Producto->save($this->request->data)) {
				$this->Flash->success(__('The producto has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The producto could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Producto.' . $this->Producto->primaryKey => $id));
			$this->request->data = $this->Producto->find('first', $options);
		}
		$lavados = $this->Producto->Lavado->find('list');
		$embalajes = $this->Producto->Embalaje->find('list');
		$estados = $this->Producto->Estado->find('list');
		$colors = $this->Producto->Color->find('list');
		$calidads = $this->Producto->Calidad->find('list');
		$formas = $this->Producto->Forma->find('list');
		$firmezas = $this->Producto->Firmeza->find('list');
		$presentacions = $this->Producto->Presentacion->find('list');
		$brillos = $this->Producto->Brillo->find('list');
		$sanidads = $this->Producto->Sanidad->find('list');
		$madurezs = $this->Producto->Madurez->find('list');
		$this->set(compact('lavados', 'embalajes', 'estados', 'colors', 'calidads', 'formas', 'firmezas', 'presentacions', 'brillos', 'sanidads', 'madurezs'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Producto->id = $id;
		if (!$this->Producto->exists()) {
			throw new NotFoundException(__('Invalid producto'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Producto->delete()) {
			$this->Flash->success(__('The producto has been deleted.'));
		} else {
			$this->Flash->error(__('The producto could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Producto->recursive = 0;
		$this->set('productos', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Producto->exists($id)) {
			throw new NotFoundException(__('Invalid producto'));
		}
		$options = array('conditions' => array('Producto.' . $this->Producto->primaryKey => $id));
		$this->set('producto', $this->Producto->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Producto->create();
			if ($this->Producto->save($this->request->data)) {
				$this->Flash->success(__('The producto has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The producto could not be saved. Please, try again.'));
			}
		}
		$lavados = $this->Producto->Lavado->find('list');
		$embalajes = $this->Producto->Embalaje->find('list');
		$estados = $this->Producto->Estado->find('list');
		$colors = $this->Producto->Color->find('list');
		$calidads = $this->Producto->Calidad->find('list');
		$formas = $this->Producto->Forma->find('list');
		$firmezas = $this->Producto->Firmeza->find('list');
		$presentacions = $this->Producto->Presentacion->find('list');
		$brillos = $this->Producto->Brillo->find('list');
		$sanidads = $this->Producto->Sanidad->find('list');
		$madurezs = $this->Producto->Madurez->find('list');
		$this->set(compact('lavados', 'embalajes', 'estados', 'colors', 'calidads', 'formas', 'firmezas', 'presentacions', 'brillos', 'sanidads', 'madurezs'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Producto->exists($id)) {
			throw new NotFoundException(__('Invalid producto'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Producto->save($this->request->data)) {
				$this->Flash->success(__('The producto has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The producto could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Producto.' . $this->Producto->primaryKey => $id));
			$this->request->data = $this->Producto->find('first', $options);
		}
		$lavados = $this->Producto->Lavado->find('list');
		$embalajes = $this->Producto->Embalaje->find('list');
		$estados = $this->Producto->Estado->find('list');
		$colors = $this->Producto->Color->find('list');
		$calidads = $this->Producto->Calidad->find('list');
		$formas = $this->Producto->Forma->find('list');
		$firmezas = $this->Producto->Firmeza->find('list');
		$presentacions = $this->Producto->Presentacion->find('list');
		$brillos = $this->Producto->Brillo->find('list');
		$sanidads = $this->Producto->Sanidad->find('list');
		$madurezs = $this->Producto->Madurez->find('list');
		$this->set(compact('lavados', 'embalajes', 'estados', 'colors', 'calidads', 'formas', 'firmezas', 'presentacions', 'brillos', 'sanidads', 'madurezs'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Producto->id = $id;
		if (!$this->Producto->exists()) {
			throw new NotFoundException(__('Invalid producto'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Producto->delete()) {
			$this->Flash->success(__('The producto has been deleted.'));
		} else {
			$this->Flash->error(__('The producto could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
