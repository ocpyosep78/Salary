<?php
App::uses('AppController', 'Controller');
/**
 * SalaryGuaranteeMasters Controller
 *
 * @property SalaryGuaranteeMaster $SalaryGuaranteeMaster
 */
class SalaryGuaranteeMastersController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->SalaryGuaranteeMaster->recursive = 0;
		$this->set('salaryGuaranteeMasters', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->SalaryGuaranteeMaster->exists($id)) {
			throw new NotFoundException(__('Invalid salary guarantee master'));
		}
		$options = array('conditions' => array('SalaryGuaranteeMaster.' . $this->SalaryGuaranteeMaster->primaryKey => $id));
		$this->set('salaryGuaranteeMaster', $this->SalaryGuaranteeMaster->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->SalaryGuaranteeMaster->create();
			if ($this->SalaryGuaranteeMaster->save($this->request->data)) {
				$this->Session->setFlash(__('The salary guarantee master has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The salary guarantee master could not be saved. Please, try again.'));
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
		if (!$this->SalaryGuaranteeMaster->exists($id)) {
			throw new NotFoundException(__('Invalid salary guarantee master'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->SalaryGuaranteeMaster->save($this->request->data)) {
				$this->Session->setFlash(__('The salary guarantee master has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The salary guarantee master could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('SalaryGuaranteeMaster.' . $this->SalaryGuaranteeMaster->primaryKey => $id));
			$this->request->data = $this->SalaryGuaranteeMaster->find('first', $options);
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
		$this->SalaryGuaranteeMaster->id = $id;
		if (!$this->SalaryGuaranteeMaster->exists()) {
			throw new NotFoundException(__('Invalid salary guarantee master'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->SalaryGuaranteeMaster->delete()) {
			$this->Session->setFlash(__('Salary guarantee master deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Salary guarantee master was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
