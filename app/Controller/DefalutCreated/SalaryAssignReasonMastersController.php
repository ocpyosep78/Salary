<?php
App::uses('AppController', 'Controller');
/**
 * SalaryAssignReasonMasters Controller
 *
 * @property SalaryAssignReasonMaster $SalaryAssignReasonMaster
 */
class SalaryAssignReasonMastersController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->SalaryAssignReasonMaster->recursive = 0;
		$this->set('salaryAssignReasonMasters', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->SalaryAssignReasonMaster->exists($id)) {
			throw new NotFoundException(__('Invalid salary assign reason master'));
		}
		$options = array('conditions' => array('SalaryAssignReasonMaster.' . $this->SalaryAssignReasonMaster->primaryKey => $id));
		$this->set('salaryAssignReasonMaster', $this->SalaryAssignReasonMaster->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->SalaryAssignReasonMaster->create();
			if ($this->SalaryAssignReasonMaster->save($this->request->data)) {
				$this->Session->setFlash(__('The salary assign reason master has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The salary assign reason master could not be saved. Please, try again.'));
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
		if (!$this->SalaryAssignReasonMaster->exists($id)) {
			throw new NotFoundException(__('Invalid salary assign reason master'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->SalaryAssignReasonMaster->save($this->request->data)) {
				$this->Session->setFlash(__('The salary assign reason master has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The salary assign reason master could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('SalaryAssignReasonMaster.' . $this->SalaryAssignReasonMaster->primaryKey => $id));
			$this->request->data = $this->SalaryAssignReasonMaster->find('first', $options);
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
		$this->SalaryAssignReasonMaster->id = $id;
		if (!$this->SalaryAssignReasonMaster->exists()) {
			throw new NotFoundException(__('Invalid salary assign reason master'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->SalaryAssignReasonMaster->delete()) {
			$this->Session->setFlash(__('Salary assign reason master deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Salary assign reason master was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
