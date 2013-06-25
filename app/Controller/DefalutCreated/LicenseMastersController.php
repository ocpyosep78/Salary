<?php
App::uses('AppController', 'Controller');
/**
 * LicenseMasters Controller
 *
 * @property LicenseMaster $LicenseMaster
 */
class LicenseMastersController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->LicenseMaster->recursive = 0;
		$this->set('licenseMasters', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->LicenseMaster->exists($id)) {
			throw new NotFoundException(__('Invalid license master'));
		}
		$options = array('conditions' => array('LicenseMaster.' . $this->LicenseMaster->primaryKey => $id));
		$this->set('licenseMaster', $this->LicenseMaster->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->LicenseMaster->create();
			if ($this->LicenseMaster->save($this->request->data)) {
				$this->Session->setFlash(__('The license master has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The license master could not be saved. Please, try again.'));
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
		if (!$this->LicenseMaster->exists($id)) {
			throw new NotFoundException(__('Invalid license master'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->LicenseMaster->save($this->request->data)) {
				$this->Session->setFlash(__('The license master has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The license master could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('LicenseMaster.' . $this->LicenseMaster->primaryKey => $id));
			$this->request->data = $this->LicenseMaster->find('first', $options);
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
		$this->LicenseMaster->id = $id;
		if (!$this->LicenseMaster->exists()) {
			throw new NotFoundException(__('Invalid license master'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->LicenseMaster->delete()) {
			$this->Session->setFlash(__('License master deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('License master was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
