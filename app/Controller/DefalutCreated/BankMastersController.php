<?php
App::uses('AppController', 'Controller');
/**
 * BankMasters Controller
 *
 * @property BankMaster $BankMaster
 */
class BankMastersController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->BankMaster->recursive = 0;
		$this->set('bankMasters', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->BankMaster->exists($id)) {
			throw new NotFoundException(__('Invalid bank master'));
		}
		$options = array('conditions' => array('BankMaster.' . $this->BankMaster->primaryKey => $id));
		$this->set('bankMaster', $this->BankMaster->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->BankMaster->create();
			if ($this->BankMaster->save($this->request->data)) {
				$this->Session->setFlash(__('The bank master has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The bank master could not be saved. Please, try again.'));
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
		if (!$this->BankMaster->exists($id)) {
			throw new NotFoundException(__('Invalid bank master'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->BankMaster->save($this->request->data)) {
				$this->Session->setFlash(__('The bank master has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The bank master could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('BankMaster.' . $this->BankMaster->primaryKey => $id));
			$this->request->data = $this->BankMaster->find('first', $options);
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
		$this->BankMaster->id = $id;
		if (!$this->BankMaster->exists()) {
			throw new NotFoundException(__('Invalid bank master'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->BankMaster->delete()) {
			$this->Session->setFlash(__('Bank master deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Bank master was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
