<?php
App::uses('AppController', 'Controller');
/**
 * MgrPassDivMasters Controller
 *
 * @property MgrPassDivMaster $MgrPassDivMaster
 */
class MgrPassDivMastersController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->MgrPassDivMaster->recursive = 0;
		$this->set('mgrPassDivMasters', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->MgrPassDivMaster->exists($id)) {
			throw new NotFoundException(__('Invalid mgr pass div master'));
		}
		$options = array('conditions' => array('MgrPassDivMaster.' . $this->MgrPassDivMaster->primaryKey => $id));
		$this->set('mgrPassDivMaster', $this->MgrPassDivMaster->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->MgrPassDivMaster->create();
			if ($this->MgrPassDivMaster->save($this->request->data)) {
				$this->Session->setFlash(__('The mgr pass div master has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mgr pass div master could not be saved. Please, try again.'));
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
		if (!$this->MgrPassDivMaster->exists($id)) {
			throw new NotFoundException(__('Invalid mgr pass div master'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->MgrPassDivMaster->save($this->request->data)) {
				$this->Session->setFlash(__('The mgr pass div master has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mgr pass div master could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('MgrPassDivMaster.' . $this->MgrPassDivMaster->primaryKey => $id));
			$this->request->data = $this->MgrPassDivMaster->find('first', $options);
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
		$this->MgrPassDivMaster->id = $id;
		if (!$this->MgrPassDivMaster->exists()) {
			throw new NotFoundException(__('Invalid mgr pass div master'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->MgrPassDivMaster->delete()) {
			$this->Session->setFlash(__('Mgr pass div master deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Mgr pass div master was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
