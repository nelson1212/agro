<?php
App::uses('AppController', 'Controller');
/**
 * Preguntasfrecuentes Controller
 *
 * @property Preguntasfrecuente $Preguntasfrecuente
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class PreguntasfrecuentesController extends AppController {

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
		$this->Preguntasfrecuente->recursive = 0;
		$this->set('preguntasfrecuentes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Preguntasfrecuente->exists($id)) {
			throw new NotFoundException(__('Invalid preguntasfrecuente'));
		}
		$options = array('conditions' => array('Preguntasfrecuente.' . $this->Preguntasfrecuente->primaryKey => $id));
		$this->set('preguntasfrecuente', $this->Preguntasfrecuente->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Preguntasfrecuente->create();
			if ($this->Preguntasfrecuente->save($this->request->data)) {
				$this->Flash->success(__('The preguntasfrecuente has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The preguntasfrecuente could not be saved. Please, try again.'));
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
		if (!$this->Preguntasfrecuente->exists($id)) {
			throw new NotFoundException(__('Invalid preguntasfrecuente'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Preguntasfrecuente->save($this->request->data)) {
				$this->Flash->success(__('The preguntasfrecuente has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The preguntasfrecuente could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Preguntasfrecuente.' . $this->Preguntasfrecuente->primaryKey => $id));
			$this->request->data = $this->Preguntasfrecuente->find('first', $options);
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
		$this->Preguntasfrecuente->id = $id;
		if (!$this->Preguntasfrecuente->exists()) {
			throw new NotFoundException(__('Invalid preguntasfrecuente'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Preguntasfrecuente->delete()) {
			$this->Flash->success(__('The preguntasfrecuente has been deleted.'));
		} else {
			$this->Flash->error(__('The preguntasfrecuente could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Preguntasfrecuente->recursive = 0;
		$this->set('preguntasfrecuentes', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Preguntasfrecuente->exists($id)) {
			throw new NotFoundException(__('Invalid preguntasfrecuente'));
		}
		$options = array('conditions' => array('Preguntasfrecuente.' . $this->Preguntasfrecuente->primaryKey => $id));
		$this->set('preguntasfrecuente', $this->Preguntasfrecuente->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Preguntasfrecuente->create();
			if ($this->Preguntasfrecuente->save($this->request->data)) {
				$this->Flash->success(__('The preguntasfrecuente has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The preguntasfrecuente could not be saved. Please, try again.'));
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
		if (!$this->Preguntasfrecuente->exists($id)) {
			throw new NotFoundException(__('Invalid preguntasfrecuente'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Preguntasfrecuente->save($this->request->data)) {
				$this->Flash->success(__('The preguntasfrecuente has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The preguntasfrecuente could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Preguntasfrecuente.' . $this->Preguntasfrecuente->primaryKey => $id));
			$this->request->data = $this->Preguntasfrecuente->find('first', $options);
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
		$this->Preguntasfrecuente->id = $id;
		if (!$this->Preguntasfrecuente->exists()) {
			throw new NotFoundException(__('Invalid preguntasfrecuente'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Preguntasfrecuente->delete()) {
			$this->Flash->success(__('The preguntasfrecuente has been deleted.'));
		} else {
			$this->Flash->error(__('The preguntasfrecuente could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
