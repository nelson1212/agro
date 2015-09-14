<?php
App::uses('AppController', 'Controller');
/**
 * Directorios Controller
 *
 * @property Directorio $Directorio
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class DirectoriosController extends AppController {

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
		$this->Directorio->recursive = 0;
		$this->set('directorios', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Directorio->exists($id)) {
			throw new NotFoundException(__('Invalid directorio'));
		}
		$options = array('conditions' => array('Directorio.' . $this->Directorio->primaryKey => $id));
		$this->set('directorio', $this->Directorio->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Directorio->create();
			if ($this->Directorio->save($this->request->data)) {
				$this->Flash->success(__('The directorio has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The directorio could not be saved. Please, try again.'));
			}
		}
		$categoriaDirectorios = $this->Directorio->CategoriaDirectorio->find('list');
		$this->set(compact('categoriaDirectorios'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Directorio->exists($id)) {
			throw new NotFoundException(__('Invalid directorio'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Directorio->save($this->request->data)) {
				$this->Flash->success(__('The directorio has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The directorio could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Directorio.' . $this->Directorio->primaryKey => $id));
			$this->request->data = $this->Directorio->find('first', $options);
		}
		$categoriaDirectorios = $this->Directorio->CategoriaDirectorio->find('list');
		$this->set(compact('categoriaDirectorios'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Directorio->id = $id;
		if (!$this->Directorio->exists()) {
			throw new NotFoundException(__('Invalid directorio'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Directorio->delete()) {
			$this->Flash->success(__('The directorio has been deleted.'));
		} else {
			$this->Flash->error(__('The directorio could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Directorio->recursive = 0;
		$this->set('directorios', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Directorio->exists($id)) {
			throw new NotFoundException(__('Invalid directorio'));
		}
		$options = array('conditions' => array('Directorio.' . $this->Directorio->primaryKey => $id));
		$this->set('directorio', $this->Directorio->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Directorio->create();
			if ($this->Directorio->save($this->request->data)) {
				$this->Flash->success(__('The directorio has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The directorio could not be saved. Please, try again.'));
			}
		}
		$categoriaDirectorios = $this->Directorio->CategoriaDirectorio->find('list');
		$this->set(compact('categoriaDirectorios'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Directorio->exists($id)) {
			throw new NotFoundException(__('Invalid directorio'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Directorio->save($this->request->data)) {
				$this->Flash->success(__('The directorio has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The directorio could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Directorio.' . $this->Directorio->primaryKey => $id));
			$this->request->data = $this->Directorio->find('first', $options);
		}
		$categoriaDirectorios = $this->Directorio->CategoriaDirectorio->find('list');
		$this->set(compact('categoriaDirectorios'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Directorio->id = $id;
		if (!$this->Directorio->exists()) {
			throw new NotFoundException(__('Invalid directorio'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Directorio->delete()) {
			$this->Flash->success(__('The directorio has been deleted.'));
		} else {
			$this->Flash->error(__('The directorio could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
