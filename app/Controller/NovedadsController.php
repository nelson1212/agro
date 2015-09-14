<?php
App::uses('AppController', 'Controller');
/**
 * Novedads Controller
 *
 * @property Novedad $Novedad
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class NovedadsController extends AppController {

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
		$this->Novedad->recursive = 0;
		$this->set('novedads', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Novedad->exists($id)) {
			throw new NotFoundException(__('Invalid novedad'));
		}
		$options = array('conditions' => array('Novedad.' . $this->Novedad->primaryKey => $id));
		$this->set('novedad', $this->Novedad->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Novedad->create();
			if ($this->Novedad->save($this->request->data)) {
				$this->Flash->success(__('The novedad has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The novedad could not be saved. Please, try again.'));
			}
		}
		$users = $this->Novedad->User->find('list');
		$categoriaNovedads = $this->Novedad->CategoriaNovedad->find('list');
		$this->set(compact('users', 'categoriaNovedads'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Novedad->exists($id)) {
			throw new NotFoundException(__('Invalid novedad'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Novedad->save($this->request->data)) {
				$this->Flash->success(__('The novedad has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The novedad could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Novedad.' . $this->Novedad->primaryKey => $id));
			$this->request->data = $this->Novedad->find('first', $options);
		}
		$users = $this->Novedad->User->find('list');
		$categoriaNovedads = $this->Novedad->CategoriaNovedad->find('list');
		$this->set(compact('users', 'categoriaNovedads'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Novedad->id = $id;
		if (!$this->Novedad->exists()) {
			throw new NotFoundException(__('Invalid novedad'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Novedad->delete()) {
			$this->Flash->success(__('The novedad has been deleted.'));
		} else {
			$this->Flash->error(__('The novedad could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Novedad->recursive = 0;
		$this->set('novedads', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Novedad->exists($id)) {
			throw new NotFoundException(__('Invalid novedad'));
		}
		$options = array('conditions' => array('Novedad.' . $this->Novedad->primaryKey => $id));
		$this->set('novedad', $this->Novedad->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Novedad->create();
			if ($this->Novedad->save($this->request->data)) {
				$this->Flash->success(__('The novedad has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The novedad could not be saved. Please, try again.'));
			}
		}
		$users = $this->Novedad->User->find('list');
		$categoriaNovedads = $this->Novedad->CategoriaNovedad->find('list');
		$this->set(compact('users', 'categoriaNovedads'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Novedad->exists($id)) {
			throw new NotFoundException(__('Invalid novedad'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Novedad->save($this->request->data)) {
				$this->Flash->success(__('The novedad has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The novedad could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Novedad.' . $this->Novedad->primaryKey => $id));
			$this->request->data = $this->Novedad->find('first', $options);
		}
		$users = $this->Novedad->User->find('list');
		$categoriaNovedads = $this->Novedad->CategoriaNovedad->find('list');
		$this->set(compact('users', 'categoriaNovedads'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Novedad->id = $id;
		if (!$this->Novedad->exists()) {
			throw new NotFoundException(__('Invalid novedad'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Novedad->delete()) {
			$this->Flash->success(__('The novedad has been deleted.'));
		} else {
			$this->Flash->error(__('The novedad could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
