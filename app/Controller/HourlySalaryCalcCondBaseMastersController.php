<?php
App::uses('AppController', 'Controller');
/**
 * HourlySalaryCalcCondBaseMasters Controller
 *
 * @property HourlySalaryCalcCondBaseMaster $HourlySalaryCalcCondBaseMaster
 */
class HourlySalaryCalcCondBaseMastersController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->HourlySalaryCalcCondBaseMaster->recursive = 0;
		$this->set('hourlySalaryCalcCondBaseMasters', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->HourlySalaryCalcCondBaseMaster->exists($id)) {
			throw new NotFoundException(__('Invalid hourly salary calc cond base master'));
		}
		$options = array('conditions' => array('HourlySalaryCalcCondBaseMaster.' . $this->HourlySalaryCalcCondBaseMaster->primaryKey => $id));
		$this->set('hourlySalaryCalcCondBaseMaster', $this->HourlySalaryCalcCondBaseMaster->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->HourlySalaryCalcCondBaseMaster->create();
			if ($this->HourlySalaryCalcCondBaseMaster->save($this->request->data)) {
				$this->Session->setFlash(__('The hourly salary calc cond base master has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hourly salary calc cond base master could not be saved. Please, try again.'));
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
		if (!$this->HourlySalaryCalcCondBaseMaster->exists($id)) {
			throw new NotFoundException(__('Invalid hourly salary calc cond base master'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->HourlySalaryCalcCondBaseMaster->save($this->request->data)) {
				$this->Session->setFlash(__('The hourly salary calc cond base master has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hourly salary calc cond base master could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('HourlySalaryCalcCondBaseMaster.' . $this->HourlySalaryCalcCondBaseMaster->primaryKey => $id));
			$this->request->data = $this->HourlySalaryCalcCondBaseMaster->find('first', $options);
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
		$this->HourlySalaryCalcCondBaseMaster->id = $id;
		if (!$this->HourlySalaryCalcCondBaseMaster->exists()) {
			throw new NotFoundException(__('Invalid hourly salary calc cond base master'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->HourlySalaryCalcCondBaseMaster->delete()) {
			$this->Session->setFlash(__('Hourly salary calc cond base master deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Hourly salary calc cond base master was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
