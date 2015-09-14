<?php
App::uses('AppController', 'Controller');
/**
 * Eventos Controller
 *
 * @property Evento $Evento
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class EventosController extends AppController {

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
		$this->Evento->recursive = 0;
		$this->set('eventos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Evento->exists($id)) {
			throw new NotFoundException(__('Invalid evento'));
		}
		$options = array('conditions' => array('Evento.' . $this->Evento->primaryKey => $id));
		$this->set('evento', $this->Evento->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Evento->create();
			if ($this->Evento->save($this->request->data)) {
				$this->Flash->success(__('The evento has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The evento could not be saved. Please, try again.'));
			}
		}
		$users = $this->Evento->User->find('list');
		$googleMaps = $this->Evento->GoogleMap->find('list');
		$this->set(compact('users', 'googleMaps'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Evento->exists($id)) {
			throw new NotFoundException(__('Invalid evento'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Evento->save($this->request->data)) {
				$this->Flash->success(__('The evento has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The evento could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Evento.' . $this->Evento->primaryKey => $id));
			$this->request->data = $this->Evento->find('first', $options);
		}
		$users = $this->Evento->User->find('list');
		$googleMaps = $this->Evento->GoogleMap->find('list');
		$this->set(compact('users', 'googleMaps'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Evento->id = $id;
		if (!$this->Evento->exists()) {
			throw new NotFoundException(__('Invalid evento'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Evento->delete()) {
			$this->Flash->success(__('The evento has been deleted.'));
		} else {
			$this->Flash->error(__('The evento could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Evento->recursive = 0;
		$this->set('eventos', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Evento->exists($id)) {
			throw new NotFoundException(__('Invalid evento'));
		}
		$options = array('conditions' => array('Evento.' . $this->Evento->primaryKey => $id));
		$this->set('evento', $this->Evento->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Evento->create();
			if ($this->Evento->save($this->request->data)) {
				$this->Flash->success(__('The evento has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The evento could not be saved. Please, try again.'));
			}
		}
		$users = $this->Evento->User->find('list');
		$googleMaps = $this->Evento->GoogleMap->find('list');
		$this->set(compact('users', 'googleMaps'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Evento->exists($id)) {
			throw new NotFoundException(__('Invalid evento'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Evento->save($this->request->data)) {
				$this->Flash->success(__('The evento has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The evento could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Evento.' . $this->Evento->primaryKey => $id));
			$this->request->data = $this->Evento->find('first', $options);
		}
		$users = $this->Evento->User->find('list');
		$googleMaps = $this->Evento->GoogleMap->find('list');
		$this->set(compact('users', 'googleMaps'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Evento->id = $id;
		if (!$this->Evento->exists()) {
			throw new NotFoundException(__('Invalid evento'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Evento->delete()) {
			$this->Flash->success(__('The evento has been deleted.'));
		} else {
			$this->Flash->error(__('The evento could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
