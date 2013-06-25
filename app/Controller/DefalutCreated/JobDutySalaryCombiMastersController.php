<?php
App::uses('AppController', 'Controller');
/**
 * JobDutySalaryCombiMasters Controller
 *
 * @property JobDutySalaryCombiMaster $JobDutySalaryCombiMaster
 */
class JobDutySalaryCombiMastersController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->JobDutySalaryCombiMaster->recursive = 0;
		$this->set('jobDutySalaryCombiMasters', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->JobDutySalaryCombiMaster->exists($id)) {
			throw new NotFoundException(__('Invalid job duty salary combi master'));
		}
		$options = array('conditions' => array('JobDutySalaryCombiMaster.' . $this->JobDutySalaryCombiMaster->primaryKey => $id));
		$this->set('jobDutySalaryCombiMaster', $this->JobDutySalaryCombiMaster->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->JobDutySalaryCombiMaster->create();
			if ($this->JobDutySalaryCombiMaster->save($this->request->data)) {
				$this->Session->setFlash(__('The job duty salary combi master has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The job duty salary combi master could not be saved. Please, try again.'));
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
		if (!$this->JobDutySalaryCombiMaster->exists($id)) {
			throw new NotFoundException(__('Invalid job duty salary combi master'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->JobDutySalaryCombiMaster->save($this->request->data)) {
				$this->Session->setFlash(__('The job duty salary combi master has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The job duty salary combi master could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('JobDutySalaryCombiMaster.' . $this->JobDutySalaryCombiMaster->primaryKey => $id));
			$this->request->data = $this->JobDutySalaryCombiMaster->find('first', $options);
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
		$this->JobDutySalaryCombiMaster->id = $id;
		if (!$this->JobDutySalaryCombiMaster->exists()) {
			throw new NotFoundException(__('Invalid job duty salary combi master'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->JobDutySalaryCombiMaster->delete()) {
			$this->Session->setFlash(__('Job duty salary combi master deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Job duty salary combi master was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
