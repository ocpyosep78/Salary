<?php
App::uses('AppController', 'Controller');
/**
 * SalaryClassPassDivMasters Controller
 *
 * @property SalaryClassPassDivMaster $SalaryClassPassDivMaster
 */
class SalaryClassPassDivMastersController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->SalaryClassPassDivMaster->recursive = 0;
		$this->set('salaryClassPassDivMasters', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->SalaryClassPassDivMaster->exists($id)) {
			throw new NotFoundException(__('Invalid salary class pass div master'));
		}
		$options = array('conditions' => array('SalaryClassPassDivMaster.' . $this->SalaryClassPassDivMaster->primaryKey => $id));
		$this->set('salaryClassPassDivMaster', $this->SalaryClassPassDivMaster->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->SalaryClassPassDivMaster->create();
			if ($this->SalaryClassPassDivMaster->save($this->request->data)) {
				$this->Session->setFlash(__('The salary class pass div master has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The salary class pass div master could not be saved. Please, try again.'));
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
		if (!$this->SalaryClassPassDivMaster->exists($id)) {
			throw new NotFoundException(__('Invalid salary class pass div master'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->SalaryClassPassDivMaster->save($this->request->data)) {
				$this->Session->setFlash(__('The salary class pass div master has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The salary class pass div master could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('SalaryClassPassDivMaster.' . $this->SalaryClassPassDivMaster->primaryKey => $id));
			$this->request->data = $this->SalaryClassPassDivMaster->find('first', $options);
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
		$this->SalaryClassPassDivMaster->id = $id;
		if (!$this->SalaryClassPassDivMaster->exists()) {
			throw new NotFoundException(__('Invalid salary class pass div master'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->SalaryClassPassDivMaster->delete()) {
			$this->Session->setFlash(__('Salary class pass div master deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Salary class pass div master was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
