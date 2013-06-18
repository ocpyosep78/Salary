<?php
App::uses('AppController', 'Controller');
/**
 * AddressMasters Controller
 *
 * @property AddressMaster $AddressMaster
 */
class AddressMastersController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->AddressMaster->recursive = 0;
		$this->set('addressMasters', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->AddressMaster->exists($id)) {
			throw new NotFoundException(__('Invalid address master'));
		}
		$options = array('conditions' => array('AddressMaster.' . $this->AddressMaster->primaryKey => $id));
		$this->set('addressMaster', $this->AddressMaster->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->AddressMaster->create();
			if ($this->AddressMaster->save($this->request->data)) {
				$this->Session->setFlash(__('The address master has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The address master could not be saved. Please, try again.'));
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
		if (!$this->AddressMaster->exists($id)) {
			throw new NotFoundException(__('Invalid address master'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->AddressMaster->save($this->request->data)) {
				$this->Session->setFlash(__('The address master has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The address master could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('AddressMaster.' . $this->AddressMaster->primaryKey => $id));
			$this->request->data = $this->AddressMaster->find('first', $options);
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
		$this->AddressMaster->id = $id;
		if (!$this->AddressMaster->exists()) {
			throw new NotFoundException(__('Invalid address master'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->AddressMaster->delete()) {
			$this->Session->setFlash(__('Address master deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Address master was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
