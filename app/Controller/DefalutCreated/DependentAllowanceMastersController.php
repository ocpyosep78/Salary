<?php
App::uses('AppController', 'Controller');
/**
 * DependentAllowanceMasters Controller
 *
 * @property DependentAllowanceMaster $DependentAllowanceMaster
 */
class DependentAllowanceMastersController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->DependentAllowanceMaster->recursive = 0;
		$this->set('dependentAllowanceMasters', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DependentAllowanceMaster->exists($id)) {
			throw new NotFoundException(__('Invalid dependent allowance master'));
		}
		$options = array('conditions' => array('DependentAllowanceMaster.' . $this->DependentAllowanceMaster->primaryKey => $id));
		$this->set('dependentAllowanceMaster', $this->DependentAllowanceMaster->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DependentAllowanceMaster->create();
			if ($this->DependentAllowanceMaster->save($this->request->data)) {
				$this->Session->setFlash(__('The dependent allowance master has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dependent allowance master could not be saved. Please, try again.'));
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
		if (!$this->DependentAllowanceMaster->exists($id)) {
			throw new NotFoundException(__('Invalid dependent allowance master'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->DependentAllowanceMaster->save($this->request->data)) {
				$this->Session->setFlash(__('The dependent allowance master has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dependent allowance master could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DependentAllowanceMaster.' . $this->DependentAllowanceMaster->primaryKey => $id));
			$this->request->data = $this->DependentAllowanceMaster->find('first', $options);
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
		$this->DependentAllowanceMaster->id = $id;
		if (!$this->DependentAllowanceMaster->exists()) {
			throw new NotFoundException(__('Invalid dependent allowance master'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->DependentAllowanceMaster->delete()) {
			$this->Session->setFlash(__('Dependent allowance master deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Dependent allowance master was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
