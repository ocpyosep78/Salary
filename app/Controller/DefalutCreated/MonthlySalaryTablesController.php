<?php
App::uses('AppController', 'Controller');
/**
 * MonthlySalaryTables Controller
 *
 * @property MonthlySalaryTable $MonthlySalaryTable
 */
class MonthlySalaryTablesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->MonthlySalaryTable->recursive = 0;
		$this->set('monthlySalaryTables', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->MonthlySalaryTable->exists($id)) {
			throw new NotFoundException(__('Invalid monthly salary table'));
		}
		$options = array('conditions' => array('MonthlySalaryTable.' . $this->MonthlySalaryTable->primaryKey => $id));
		$this->set('monthlySalaryTable', $this->MonthlySalaryTable->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->MonthlySalaryTable->create();
			if ($this->MonthlySalaryTable->save($this->request->data)) {
				$this->Session->setFlash(__('The monthly salary table has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The monthly salary table could not be saved. Please, try again.'));
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
		if (!$this->MonthlySalaryTable->exists($id)) {
			throw new NotFoundException(__('Invalid monthly salary table'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->MonthlySalaryTable->save($this->request->data)) {
				$this->Session->setFlash(__('The monthly salary table has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The monthly salary table could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('MonthlySalaryTable.' . $this->MonthlySalaryTable->primaryKey => $id));
			$this->request->data = $this->MonthlySalaryTable->find('first', $options);
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
		$this->MonthlySalaryTable->id = $id;
		if (!$this->MonthlySalaryTable->exists()) {
			throw new NotFoundException(__('Invalid monthly salary table'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->MonthlySalaryTable->delete()) {
			$this->Session->setFlash(__('Monthly salary table deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Monthly salary table was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
