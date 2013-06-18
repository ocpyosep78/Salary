<?php
App::uses('AppController', 'Controller');
/**
 * ExamTypeCDMasters Controller
 *
 * @property ExamTypeCDMaster $ExamTypeCDMaster
 */
class ExamTypeCDMastersController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ExamTypeCDMaster->recursive = 0;
		$this->set('examTypeCDMasters', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ExamTypeCDMaster->exists($id)) {
			throw new NotFoundException(__('Invalid exam type c d master'));
		}
		$options = array('conditions' => array('ExamTypeCDMaster.' . $this->ExamTypeCDMaster->primaryKey => $id));
		$this->set('examTypeCDMaster', $this->ExamTypeCDMaster->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ExamTypeCDMaster->create();
			if ($this->ExamTypeCDMaster->save($this->request->data)) {
				$this->Session->setFlash(__('The exam type c d master has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The exam type c d master could not be saved. Please, try again.'));
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
		if (!$this->ExamTypeCDMaster->exists($id)) {
			throw new NotFoundException(__('Invalid exam type c d master'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ExamTypeCDMaster->save($this->request->data)) {
				$this->Session->setFlash(__('The exam type c d master has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The exam type c d master could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ExamTypeCDMaster.' . $this->ExamTypeCDMaster->primaryKey => $id));
			$this->request->data = $this->ExamTypeCDMaster->find('first', $options);
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
		$this->ExamTypeCDMaster->id = $id;
		if (!$this->ExamTypeCDMaster->exists()) {
			throw new NotFoundException(__('Invalid exam type c d master'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ExamTypeCDMaster->delete()) {
			$this->Session->setFlash(__('Exam type c d master deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Exam type c d master was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
