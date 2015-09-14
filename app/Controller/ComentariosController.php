<?php
App::uses('AppController', 'Controller');
/**
 * Comentarios Controller
 *
 * @property Comentario $Comentario
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class ComentariosController extends AppController {

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
		$this->Comentario->recursive = 0;
		$this->set('comentarios', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Comentario->exists($id)) {
			throw new NotFoundException(__('Invalid comentario'));
		}
		$options = array('conditions' => array('Comentario.' . $this->Comentario->primaryKey => $id));
		$this->set('comentario', $this->Comentario->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Comentario->create();
			if ($this->Comentario->save($this->request->data)) {
				$this->Flash->success(__('The comentario has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The comentario could not be saved. Please, try again.'));
			}
		}
		$temas = $this->Comentario->Tema->find('list');
		$users = $this->Comentario->User->find('list');
		$this->set(compact('temas', 'users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Comentario->exists($id)) {
			throw new NotFoundException(__('Invalid comentario'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Comentario->save($this->request->data)) {
				$this->Flash->success(__('The comentario has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The comentario could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Comentario.' . $this->Comentario->primaryKey => $id));
			$this->request->data = $this->Comentario->find('first', $options);
		}
		$temas = $this->Comentario->Tema->find('list');
		$users = $this->Comentario->User->find('list');
		$this->set(compact('temas', 'users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Comentario->id = $id;
		if (!$this->Comentario->exists()) {
			throw new NotFoundException(__('Invalid comentario'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Comentario->delete()) {
			$this->Flash->success(__('The comentario has been deleted.'));
		} else {
			$this->Flash->error(__('The comentario could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Comentario->recursive = 0;
		$this->set('comentarios', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Comentario->exists($id)) {
			throw new NotFoundException(__('Invalid comentario'));
		}
		$options = array('conditions' => array('Comentario.' . $this->Comentario->primaryKey => $id));
		$this->set('comentario', $this->Comentario->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Comentario->create();
			if ($this->Comentario->save($this->request->data)) {
				$this->Flash->success(__('The comentario has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The comentario could not be saved. Please, try again.'));
			}
		}
		$temas = $this->Comentario->Tema->find('list');
		$users = $this->Comentario->User->find('list');
		$this->set(compact('temas', 'users'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Comentario->exists($id)) {
			throw new NotFoundException(__('Invalid comentario'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Comentario->save($this->request->data)) {
				$this->Flash->success(__('The comentario has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The comentario could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Comentario.' . $this->Comentario->primaryKey => $id));
			$this->request->data = $this->Comentario->find('first', $options);
		}
		$temas = $this->Comentario->Tema->find('list');
		$users = $this->Comentario->User->find('list');
		$this->set(compact('temas', 'users'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Comentario->id = $id;
		if (!$this->Comentario->exists()) {
			throw new NotFoundException(__('Invalid comentario'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Comentario->delete()) {
			$this->Flash->success(__('The comentario has been deleted.'));
		} else {
			$this->Flash->error(__('The comentario could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
