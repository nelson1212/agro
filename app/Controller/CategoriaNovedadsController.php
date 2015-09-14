<?php
App::uses('AppController', 'Controller');
/**
 * CategoriaNovedads Controller
 *
 * @property CategoriaNovedad $CategoriaNovedad
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class CategoriaNovedadsController extends AppController {

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
		$this->CategoriaNovedad->recursive = 0;
		$this->set('categoriaNovedads', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CategoriaNovedad->exists($id)) {
			throw new NotFoundException(__('Invalid categoria novedad'));
		}
		$options = array('conditions' => array('CategoriaNovedad.' . $this->CategoriaNovedad->primaryKey => $id));
		$this->set('categoriaNovedad', $this->CategoriaNovedad->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CategoriaNovedad->create();
			if ($this->CategoriaNovedad->save($this->request->data)) {
				$this->Flash->success(__('The categoria novedad has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The categoria novedad could not be saved. Please, try again.'));
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
		if (!$this->CategoriaNovedad->exists($id)) {
			throw new NotFoundException(__('Invalid categoria novedad'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CategoriaNovedad->save($this->request->data)) {
				$this->Flash->success(__('The categoria novedad has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The categoria novedad could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CategoriaNovedad.' . $this->CategoriaNovedad->primaryKey => $id));
			$this->request->data = $this->CategoriaNovedad->find('first', $options);
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
		$this->CategoriaNovedad->id = $id;
		if (!$this->CategoriaNovedad->exists()) {
			throw new NotFoundException(__('Invalid categoria novedad'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->CategoriaNovedad->delete()) {
			$this->Flash->success(__('The categoria novedad has been deleted.'));
		} else {
			$this->Flash->error(__('The categoria novedad could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->CategoriaNovedad->recursive = 0;
		$this->set('categoriaNovedads', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->CategoriaNovedad->exists($id)) {
			throw new NotFoundException(__('Invalid categoria novedad'));
		}
		$options = array('conditions' => array('CategoriaNovedad.' . $this->CategoriaNovedad->primaryKey => $id));
		$this->set('categoriaNovedad', $this->CategoriaNovedad->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->CategoriaNovedad->create();
			if ($this->CategoriaNovedad->save($this->request->data)) {
				$this->Flash->success(__('The categoria novedad has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The categoria novedad could not be saved. Please, try again.'));
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
		if (!$this->CategoriaNovedad->exists($id)) {
			throw new NotFoundException(__('Invalid categoria novedad'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CategoriaNovedad->save($this->request->data)) {
				$this->Flash->success(__('The categoria novedad has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The categoria novedad could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CategoriaNovedad.' . $this->CategoriaNovedad->primaryKey => $id));
			$this->request->data = $this->CategoriaNovedad->find('first', $options);
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
		$this->CategoriaNovedad->id = $id;
		if (!$this->CategoriaNovedad->exists()) {
			throw new NotFoundException(__('Invalid categoria novedad'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->CategoriaNovedad->delete()) {
			$this->Flash->success(__('The categoria novedad has been deleted.'));
		} else {
			$this->Flash->error(__('The categoria novedad could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
