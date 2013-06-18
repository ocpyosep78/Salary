<?php
App::uses('AppController', 'Controller');
/**
 * SalaryGuaranteeDetails Controller
 *
 * @property SalaryGuaranteeDetail $SalaryGuaranteeDetail
 */
class SalaryGuaranteeDetailsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->SalaryGuaranteeDetail->recursive = 0;
		$this->set('salaryGuaranteeDetails', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->SalaryGuaranteeDetail->exists($id)) {
			throw new NotFoundException(__('Invalid salary guarantee detail'));
		}
		$options = array('conditions' => array('SalaryGuaranteeDetail.' . $this->SalaryGuaranteeDetail->primaryKey => $id));
		$this->set('salaryGuaranteeDetail', $this->SalaryGuaranteeDetail->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->SalaryGuaranteeDetail->create();
			if ($this->SalaryGuaranteeDetail->save($this->request->data)) {
				$this->Session->setFlash(__('The salary guarantee detail has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The salary guarantee detail could not be saved. Please, try again.'));
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
		if (!$this->SalaryGuaranteeDetail->exists($id)) {
			throw new NotFoundException(__('Invalid salary guarantee detail'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->SalaryGuaranteeDetail->save($this->request->data)) {
				$this->Session->setFlash(__('The salary guarantee detail has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The salary guarantee detail could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('SalaryGuaranteeDetail.' . $this->SalaryGuaranteeDetail->primaryKey => $id));
			$this->request->data = $this->SalaryGuaranteeDetail->find('first', $options);
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
		$this->SalaryGuaranteeDetail->id = $id;
		if (!$this->SalaryGuaranteeDetail->exists()) {
			throw new NotFoundException(__('Invalid salary guarantee detail'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->SalaryGuaranteeDetail->delete()) {
			$this->Session->setFlash(__('Salary guarantee detail deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Salary guarantee detail was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
