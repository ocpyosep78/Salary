<?php
App::uses('AppController', 'Controller');
/**
 * MgrAdditionSetMasters Controller
 *
 * @property MgrAdditionSetMaster $MgrAdditionSetMaster
 */
class MgrAdditionSetMastersController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->MgrAdditionSetMaster->recursive = 0;
		$this->set('mgrAdditionSetMasters', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->MgrAdditionSetMaster->exists($id)) {
			throw new NotFoundException(__('Invalid mgr addition set master'));
		}
		$options = array('conditions' => array('MgrAdditionSetMaster.' . $this->MgrAdditionSetMaster->primaryKey => $id));
		$this->set('mgrAdditionSetMaster', $this->MgrAdditionSetMaster->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->MgrAdditionSetMaster->create();
			if ($this->MgrAdditionSetMaster->save($this->request->data)) {
				$this->Session->setFlash(__('The mgr addition set master has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mgr addition set master could not be saved. Please, try again.'));
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
		if (!$this->MgrAdditionSetMaster->exists($id)) {
			throw new NotFoundException(__('Invalid mgr addition set master'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->MgrAdditionSetMaster->save($this->request->data)) {
				$this->Session->setFlash(__('The mgr addition set master has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mgr addition set master could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('MgrAdditionSetMaster.' . $this->MgrAdditionSetMaster->primaryKey => $id));
			$this->request->data = $this->MgrAdditionSetMaster->find('first', $options);
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
		$this->MgrAdditionSetMaster->id = $id;
		if (!$this->MgrAdditionSetMaster->exists()) {
			throw new NotFoundException(__('Invalid mgr addition set master'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->MgrAdditionSetMaster->delete()) {
			$this->Session->setFlash(__('Mgr addition set master deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Mgr addition set master was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
