<?php
App::uses('AppController', 'Controller');
/**
 * GradeAdjustMasters Controller
 *
 * @property GradeAdjustMaster $GradeAdjustMaster
 */
class GradeAdjustMastersController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->GradeAdjustMaster->recursive = 0;
		$this->set('gradeAdjustMasters', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->GradeAdjustMaster->exists($id)) {
			throw new NotFoundException(__('Invalid grade adjust master'));
		}
		$options = array('conditions' => array('GradeAdjustMaster.' . $this->GradeAdjustMaster->primaryKey => $id));
		$this->set('gradeAdjustMaster', $this->GradeAdjustMaster->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->GradeAdjustMaster->create();
			if ($this->GradeAdjustMaster->save($this->request->data)) {
				$this->Session->setFlash(__('The grade adjust master has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The grade adjust master could not be saved. Please, try again.'));
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
		if (!$this->GradeAdjustMaster->exists($id)) {
			throw new NotFoundException(__('Invalid grade adjust master'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->GradeAdjustMaster->save($this->request->data)) {
				$this->Session->setFlash(__('The grade adjust master has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The grade adjust master could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('GradeAdjustMaster.' . $this->GradeAdjustMaster->primaryKey => $id));
			$this->request->data = $this->GradeAdjustMaster->find('first', $options);
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
		$this->GradeAdjustMaster->id = $id;
		if (!$this->GradeAdjustMaster->exists()) {
			throw new NotFoundException(__('Invalid grade adjust master'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->GradeAdjustMaster->delete()) {
			$this->Session->setFlash(__('Grade adjust master deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Grade adjust master was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
