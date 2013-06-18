<?php
App::uses('AppController', 'Controller');
/**
 * Grade2ExamCanData Controller
 *
 * @property Grade2ExamCanDatum $Grade2ExamCanDatum
 */
class Grade2ExamCanDataController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Grade2ExamCanDatum->recursive = 0;
		$this->set('grade2ExamCanData', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Grade2ExamCanDatum->exists($id)) {
			throw new NotFoundException(__('Invalid grade2 exam can datum'));
		}
		$options = array('conditions' => array('Grade2ExamCanDatum.' . $this->Grade2ExamCanDatum->primaryKey => $id));
		$this->set('grade2ExamCanDatum', $this->Grade2ExamCanDatum->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Grade2ExamCanDatum->create();
			if ($this->Grade2ExamCanDatum->save($this->request->data)) {
				$this->Session->setFlash(__('The grade2 exam can datum has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The grade2 exam can datum could not be saved. Please, try again.'));
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
		if (!$this->Grade2ExamCanDatum->exists($id)) {
			throw new NotFoundException(__('Invalid grade2 exam can datum'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Grade2ExamCanDatum->save($this->request->data)) {
				$this->Session->setFlash(__('The grade2 exam can datum has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The grade2 exam can datum could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Grade2ExamCanDatum.' . $this->Grade2ExamCanDatum->primaryKey => $id));
			$this->request->data = $this->Grade2ExamCanDatum->find('first', $options);
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
		$this->Grade2ExamCanDatum->id = $id;
		if (!$this->Grade2ExamCanDatum->exists()) {
			throw new NotFoundException(__('Invalid grade2 exam can datum'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Grade2ExamCanDatum->delete()) {
			$this->Session->setFlash(__('Grade2 exam can datum deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Grade2 exam can datum was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
