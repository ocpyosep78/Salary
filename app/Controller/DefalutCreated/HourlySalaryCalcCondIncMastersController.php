<?php
App::uses('AppController', 'Controller');
/**
 * HourlySalaryCalcCondIncMasters Controller
 *
 * @property HourlySalaryCalcCondIncMaster $HourlySalaryCalcCondIncMaster
 */
class HourlySalaryCalcCondIncMastersController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->HourlySalaryCalcCondIncMaster->recursive = 0;
		$this->set('hourlySalaryCalcCondIncMasters', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->HourlySalaryCalcCondIncMaster->exists($id)) {
			throw new NotFoundException(__('Invalid hourly salary calc cond inc master'));
		}
		$options = array('conditions' => array('HourlySalaryCalcCondIncMaster.' . $this->HourlySalaryCalcCondIncMaster->primaryKey => $id));
		$this->set('hourlySalaryCalcCondIncMaster', $this->HourlySalaryCalcCondIncMaster->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->HourlySalaryCalcCondIncMaster->create();
			if ($this->HourlySalaryCalcCondIncMaster->save($this->request->data)) {
				$this->Session->setFlash(__('The hourly salary calc cond inc master has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hourly salary calc cond inc master could not be saved. Please, try again.'));
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
		if (!$this->HourlySalaryCalcCondIncMaster->exists($id)) {
			throw new NotFoundException(__('Invalid hourly salary calc cond inc master'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->HourlySalaryCalcCondIncMaster->save($this->request->data)) {
				$this->Session->setFlash(__('The hourly salary calc cond inc master has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hourly salary calc cond inc master could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('HourlySalaryCalcCondIncMaster.' . $this->HourlySalaryCalcCondIncMaster->primaryKey => $id));
			$this->request->data = $this->HourlySalaryCalcCondIncMaster->find('first', $options);
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
		$this->HourlySalaryCalcCondIncMaster->id = $id;
		if (!$this->HourlySalaryCalcCondIncMaster->exists()) {
			throw new NotFoundException(__('Invalid hourly salary calc cond inc master'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->HourlySalaryCalcCondIncMaster->delete()) {
			$this->Session->setFlash(__('Hourly salary calc cond inc master deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Hourly salary calc cond inc master was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
