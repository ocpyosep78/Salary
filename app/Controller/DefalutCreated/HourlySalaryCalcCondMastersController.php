<?php
App::uses('AppController', 'Controller');
/**
 * HourlySalaryCalcCondMasters Controller
 *
 * @property HourlySalaryCalcCondMaster $HourlySalaryCalcCondMaster
 */
class HourlySalaryCalcCondMastersController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->HourlySalaryCalcCondMaster->recursive = 0;
		$this->set('hourlySalaryCalcCondMasters', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->HourlySalaryCalcCondMaster->exists($id)) {
			throw new NotFoundException(__('Invalid hourly salary calc cond master'));
		}
		$options = array('conditions' => array('HourlySalaryCalcCondMaster.' . $this->HourlySalaryCalcCondMaster->primaryKey => $id));
		$this->set('hourlySalaryCalcCondMaster', $this->HourlySalaryCalcCondMaster->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->HourlySalaryCalcCondMaster->create();
			if ($this->HourlySalaryCalcCondMaster->save($this->request->data)) {
				$this->Session->setFlash(__('The hourly salary calc cond master has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hourly salary calc cond master could not be saved. Please, try again.'));
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
		if (!$this->HourlySalaryCalcCondMaster->exists($id)) {
			throw new NotFoundException(__('Invalid hourly salary calc cond master'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->HourlySalaryCalcCondMaster->save($this->request->data)) {
				$this->Session->setFlash(__('The hourly salary calc cond master has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hourly salary calc cond master could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('HourlySalaryCalcCondMaster.' . $this->HourlySalaryCalcCondMaster->primaryKey => $id));
			$this->request->data = $this->HourlySalaryCalcCondMaster->find('first', $options);
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
		$this->HourlySalaryCalcCondMaster->id = $id;
		if (!$this->HourlySalaryCalcCondMaster->exists()) {
			throw new NotFoundException(__('Invalid hourly salary calc cond master'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->HourlySalaryCalcCondMaster->delete()) {
			$this->Session->setFlash(__('Hourly salary calc cond master deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Hourly salary calc cond master was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
