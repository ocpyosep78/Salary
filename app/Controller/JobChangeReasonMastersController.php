<?php
App::uses('AppController', 'Controller');
/**
 * JobChangeReasonMasters Controller
 *
 * @property JobChangeReasonMaster $JobChangeReasonMaster
 */
class JobChangeReasonMastersController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->JobChangeReasonMaster->recursive = 0;
		$this->set('jobChangeReasonMasters', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->JobChangeReasonMaster->exists($id)) {
			throw new NotFoundException(__('Invalid job change reason master'));
		}
		$options = array('conditions' => array('JobChangeReasonMaster.' . $this->JobChangeReasonMaster->primaryKey => $id));
		$this->set('jobChangeReasonMaster', $this->JobChangeReasonMaster->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->JobChangeReasonMaster->create();
			if ($this->JobChangeReasonMaster->save($this->request->data)) {
				$this->Session->setFlash(__('The job change reason master has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The job change reason master could not be saved. Please, try again.'));
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
		if (!$this->JobChangeReasonMaster->exists($id)) {
			throw new NotFoundException(__('Invalid job change reason master'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->JobChangeReasonMaster->save($this->request->data)) {
				$this->Session->setFlash(__('The job change reason master has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The job change reason master could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('JobChangeReasonMaster.' . $this->JobChangeReasonMaster->primaryKey => $id));
			$this->request->data = $this->JobChangeReasonMaster->find('first', $options);
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
		$this->JobChangeReasonMaster->id = $id;
		if (!$this->JobChangeReasonMaster->exists()) {
			throw new NotFoundException(__('Invalid job change reason master'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->JobChangeReasonMaster->delete()) {
			$this->Session->setFlash(__('Job change reason master deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Job change reason master was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
