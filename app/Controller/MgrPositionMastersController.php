<?php
App::uses('AppController', 'Controller');
/**
 * MgrPositionMasters Controller
 *
 * @property MgrPositionMaster $MgrPositionMaster
 */
class MgrPositionMastersController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->MgrPositionMaster->recursive = 0;
		$this->set('mgrPositionMasters', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->MgrPositionMaster->exists($id)) {
			throw new NotFoundException(__('Invalid mgr position master'));
		}
		$options = array('conditions' => array('MgrPositionMaster.' . $this->MgrPositionMaster->primaryKey => $id));
		$this->set('mgrPositionMaster', $this->MgrPositionMaster->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->MgrPositionMaster->create();
			if ($this->MgrPositionMaster->save($this->request->data)) {
				$this->Session->setFlash(__('The mgr position master has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mgr position master could not be saved. Please, try again.'));
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
		if (!$this->MgrPositionMaster->exists($id)) {
			throw new NotFoundException(__('Invalid mgr position master'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->MgrPositionMaster->save($this->request->data)) {
				$this->Session->setFlash(__('The mgr position master has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mgr position master could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('MgrPositionMaster.' . $this->MgrPositionMaster->primaryKey => $id));
			$this->request->data = $this->MgrPositionMaster->find('first', $options);
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
		$this->MgrPositionMaster->id = $id;
		if (!$this->MgrPositionMaster->exists()) {
			throw new NotFoundException(__('Invalid mgr position master'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->MgrPositionMaster->delete()) {
			$this->Session->setFlash(__('Mgr position master deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Mgr position master was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
