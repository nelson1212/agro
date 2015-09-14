<?php
App::uses('AppController', 'Controller');
/**
 * Certificacions Controller
 *
 * @property Certificacion $Certificacion
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class CertificacionsController extends AppController {

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
		$this->Certificacion->recursive = 0;
		$this->set('certificacions', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Certificacion->exists($id)) {
			throw new NotFoundException(__('Invalid certificacion'));
		}
		$options = array('conditions' => array('Certificacion.' . $this->Certificacion->primaryKey => $id));
		$this->set('certificacion', $this->Certificacion->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Certificacion->create();
			if ($this->Certificacion->save($this->request->data)) {
				$this->Flash->success(__('The certificacion has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The certificacion could not be saved. Please, try again.'));
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
		if (!$this->Certificacion->exists($id)) {
			throw new NotFoundException(__('Invalid certificacion'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Certificacion->save($this->request->data)) {
				$this->Flash->success(__('The certificacion has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The certificacion could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Certificacion.' . $this->Certificacion->primaryKey => $id));
			$this->request->data = $this->Certificacion->find('first', $options);
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
		$this->Certificacion->id = $id;
		if (!$this->Certificacion->exists()) {
			throw new NotFoundException(__('Invalid certificacion'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Certificacion->delete()) {
			$this->Flash->success(__('The certificacion has been deleted.'));
		} else {
			$this->Flash->error(__('The certificacion could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Certificacion->recursive = 0;
		$this->set('certificacions', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Certificacion->exists($id)) {
			throw new NotFoundException(__('Invalid certificacion'));
		}
		$options = array('conditions' => array('Certificacion.' . $this->Certificacion->primaryKey => $id));
		$this->set('certificacion', $this->Certificacion->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Certificacion->create();
			if ($this->Certificacion->save($this->request->data)) {
				$this->Flash->success(__('The certificacion has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The certificacion could not be saved. Please, try again.'));
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
		if (!$this->Certificacion->exists($id)) {
			throw new NotFoundException(__('Invalid certificacion'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Certificacion->save($this->request->data)) {
				$this->Flash->success(__('The certificacion has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The certificacion could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Certificacion.' . $this->Certificacion->primaryKey => $id));
			$this->request->data = $this->Certificacion->find('first', $options);
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
		$this->Certificacion->id = $id;
		if (!$this->Certificacion->exists()) {
			throw new NotFoundException(__('Invalid certificacion'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Certificacion->delete()) {
			$this->Flash->success(__('The certificacion has been deleted.'));
		} else {
			$this->Flash->error(__('The certificacion could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
