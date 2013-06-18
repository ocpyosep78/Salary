<?php
App::uses('AppController', 'Controller');
/**
 * MaxGradeRegMasters Controller
 *
 * @property MaxGradeRegMaster $MaxGradeRegMaster
 */
class MaxGradeRegMastersController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->MaxGradeRegMaster->recursive = 0;
		$this->set('maxGradeRegMasters', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->MaxGradeRegMaster->exists($id)) {
			throw new NotFoundException(__('Invalid max grade reg master'));
		}
		$options = array('conditions' => array('MaxGradeRegMaster.' . $this->MaxGradeRegMaster->primaryKey => $id));
		$this->set('maxGradeRegMaster', $this->MaxGradeRegMaster->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->MaxGradeRegMaster->create();
			if ($this->MaxGradeRegMaster->save($this->request->data)) {
				$this->Session->setFlash(__('The max grade reg master has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The max grade reg master could not be saved. Please, try again.'));
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
		if (!$this->MaxGradeRegMaster->exists($id)) {
			throw new NotFoundException(__('Invalid max grade reg master'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->MaxGradeRegMaster->save($this->request->data)) {
				$this->Session->setFlash(__('The max grade reg master has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The max grade reg master could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('MaxGradeRegMaster.' . $this->MaxGradeRegMaster->primaryKey => $id));
			$this->request->data = $this->MaxGradeRegMaster->find('first', $options);
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
		$this->MaxGradeRegMaster->id = $id;
		if (!$this->MaxGradeRegMaster->exists()) {
			throw new NotFoundException(__('Invalid max grade reg master'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->MaxGradeRegMaster->delete()) {
			$this->Session->setFlash(__('Max grade reg master deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Max grade reg master was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
