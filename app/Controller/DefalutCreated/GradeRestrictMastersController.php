<?php
App::uses('AppController', 'Controller');
/**
 * GradeRestrictMasters Controller
 *
 * @property GradeRestrictMaster $GradeRestrictMaster
 */
class GradeRestrictMastersController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->GradeRestrictMaster->recursive = 0;
		$this->set('gradeRestrictMasters', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->GradeRestrictMaster->exists($id)) {
			throw new NotFoundException(__('Invalid grade restrict master'));
		}
		$options = array('conditions' => array('GradeRestrictMaster.' . $this->GradeRestrictMaster->primaryKey => $id));
		$this->set('gradeRestrictMaster', $this->GradeRestrictMaster->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->GradeRestrictMaster->create();
			if ($this->GradeRestrictMaster->save($this->request->data)) {
				$this->Session->setFlash(__('The grade restrict master has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The grade restrict master could not be saved. Please, try again.'));
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
		if (!$this->GradeRestrictMaster->exists($id)) {
			throw new NotFoundException(__('Invalid grade restrict master'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->GradeRestrictMaster->save($this->request->data)) {
				$this->Session->setFlash(__('The grade restrict master has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The grade restrict master could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('GradeRestrictMaster.' . $this->GradeRestrictMaster->primaryKey => $id));
			$this->request->data = $this->GradeRestrictMaster->find('first', $options);
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
		$this->GradeRestrictMaster->id = $id;
		if (!$this->GradeRestrictMaster->exists()) {
			throw new NotFoundException(__('Invalid grade restrict master'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->GradeRestrictMaster->delete()) {
			$this->Session->setFlash(__('Grade restrict master deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Grade restrict master was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
