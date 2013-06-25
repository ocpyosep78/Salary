<?php
App::uses('AppController', 'Controller');
/**
 * JobCategoryMasters Controller
 *
 * @property JobCategoryMaster $JobCategoryMaster
 */
class JobCategoryMastersController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->JobCategoryMaster->recursive = 0;
		$this->set('jobCategoryMasters', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->JobCategoryMaster->exists($id)) {
			throw new NotFoundException(__('Invalid job category master'));
		}
		$options = array('conditions' => array('JobCategoryMaster.' . $this->JobCategoryMaster->primaryKey => $id));
		$this->set('jobCategoryMaster', $this->JobCategoryMaster->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->JobCategoryMaster->create();
			if ($this->JobCategoryMaster->save($this->request->data)) {
				$this->Session->setFlash(__('The job category master has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The job category master could not be saved. Please, try again.'));
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
		if (!$this->JobCategoryMaster->exists($id)) {
			throw new NotFoundException(__('Invalid job category master'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->JobCategoryMaster->save($this->request->data)) {
				$this->Session->setFlash(__('The job category master has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The job category master could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('JobCategoryMaster.' . $this->JobCategoryMaster->primaryKey => $id));
			$this->request->data = $this->JobCategoryMaster->find('first', $options);
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
		$this->JobCategoryMaster->id = $id;
		if (!$this->JobCategoryMaster->exists()) {
			throw new NotFoundException(__('Invalid job category master'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->JobCategoryMaster->delete()) {
			$this->Session->setFlash(__('Job category master deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Job category master was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
