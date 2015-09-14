<?php
App::uses('AppController', 'Controller');
/**
 * CategoriaDirectorios Controller
 *
 * @property CategoriaDirectorio $CategoriaDirectorio
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class CategoriaDirectoriosController extends AppController {

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
		$this->CategoriaDirectorio->recursive = 0;
		$this->set('categoriaDirectorios', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CategoriaDirectorio->exists($id)) {
			throw new NotFoundException(__('Invalid categoria directorio'));
		}
		$options = array('conditions' => array('CategoriaDirectorio.' . $this->CategoriaDirectorio->primaryKey => $id));
		$this->set('categoriaDirectorio', $this->CategoriaDirectorio->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CategoriaDirectorio->create();
			if ($this->CategoriaDirectorio->save($this->request->data)) {
				$this->Flash->success(__('The categoria directorio has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The categoria directorio could not be saved. Please, try again.'));
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
		if (!$this->CategoriaDirectorio->exists($id)) {
			throw new NotFoundException(__('Invalid categoria directorio'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CategoriaDirectorio->save($this->request->data)) {
				$this->Flash->success(__('The categoria directorio has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The categoria directorio could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CategoriaDirectorio.' . $this->CategoriaDirectorio->primaryKey => $id));
			$this->request->data = $this->CategoriaDirectorio->find('first', $options);
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
		$this->CategoriaDirectorio->id = $id;
		if (!$this->CategoriaDirectorio->exists()) {
			throw new NotFoundException(__('Invalid categoria directorio'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->CategoriaDirectorio->delete()) {
			$this->Flash->success(__('The categoria directorio has been deleted.'));
		} else {
			$this->Flash->error(__('The categoria directorio could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->CategoriaDirectorio->recursive = 0;
		$this->set('categoriaDirectorios', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->CategoriaDirectorio->exists($id)) {
			throw new NotFoundException(__('Invalid categoria directorio'));
		}
		$options = array('conditions' => array('CategoriaDirectorio.' . $this->CategoriaDirectorio->primaryKey => $id));
		$this->set('categoriaDirectorio', $this->CategoriaDirectorio->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->CategoriaDirectorio->create();
			if ($this->CategoriaDirectorio->save($this->request->data)) {
				$this->Flash->success(__('The categoria directorio has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The categoria directorio could not be saved. Please, try again.'));
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
		if (!$this->CategoriaDirectorio->exists($id)) {
			throw new NotFoundException(__('Invalid categoria directorio'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CategoriaDirectorio->save($this->request->data)) {
				$this->Flash->success(__('The categoria directorio has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The categoria directorio could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CategoriaDirectorio.' . $this->CategoriaDirectorio->primaryKey => $id));
			$this->request->data = $this->CategoriaDirectorio->find('first', $options);
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
		$this->CategoriaDirectorio->id = $id;
		if (!$this->CategoriaDirectorio->exists()) {
			throw new NotFoundException(__('Invalid categoria directorio'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->CategoriaDirectorio->delete()) {
			$this->Flash->success(__('The categoria directorio has been deleted.'));
		} else {
			$this->Flash->error(__('The categoria directorio could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
