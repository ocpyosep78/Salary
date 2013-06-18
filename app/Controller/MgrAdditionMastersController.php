<?php
App::uses('AppController', 'Controller');
/**
 * MgrAdditionMasters Controller
 *
 * @property MgrAdditionMaster $MgrAdditionMaster
 */
class MgrAdditionMastersController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->MgrAdditionMaster->recursive = 0;
		$this->set('mgrAdditionMasters', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->MgrAdditionMaster->exists($id)) {
			throw new NotFoundException(__('Invalid mgr addition master'));
		}
		$options = array('conditions' => array('MgrAdditionMaster.' . $this->MgrAdditionMaster->primaryKey => $id));
		$this->set('mgrAdditionMaster', $this->MgrAdditionMaster->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->MgrAdditionMaster->create();
			if ($this->MgrAdditionMaster->save($this->request->data)) {
				$this->Session->setFlash(__('The mgr addition master has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mgr addition master could not be saved. Please, try again.'));
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
		if (!$this->MgrAdditionMaster->exists($id)) {
			throw new NotFoundException(__('Invalid mgr addition master'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->MgrAdditionMaster->save($this->request->data)) {
				$this->Session->setFlash(__('The mgr addition master has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mgr addition master could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('MgrAdditionMaster.' . $this->MgrAdditionMaster->primaryKey => $id));
			$this->request->data = $this->MgrAdditionMaster->find('first', $options);
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
		$this->MgrAdditionMaster->id = $id;
		if (!$this->MgrAdditionMaster->exists()) {
			throw new NotFoundException(__('Invalid mgr addition master'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->MgrAdditionMaster->delete()) {
			$this->Session->setFlash(__('Mgr addition master deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Mgr addition master was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
