<?php
App::uses('AppController', 'Controller');
/**
 * DeductionData Controller
 *
 * @property DeductionDatum $DeductionDatum
 */
class DeductionDataController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->DeductionDatum->recursive = 0;
		$this->set('deductionData', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DeductionDatum->exists($id)) {
			throw new NotFoundException(__('Invalid deduction datum'));
		}
		$options = array('conditions' => array('DeductionDatum.' . $this->DeductionDatum->primaryKey => $id));
		$this->set('deductionDatum', $this->DeductionDatum->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DeductionDatum->create();
			if ($this->DeductionDatum->save($this->request->data)) {
				$this->Session->setFlash(__('The deduction datum has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The deduction datum could not be saved. Please, try again.'));
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
		if (!$this->DeductionDatum->exists($id)) {
			throw new NotFoundException(__('Invalid deduction datum'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->DeductionDatum->save($this->request->data)) {
				$this->Session->setFlash(__('The deduction datum has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The deduction datum could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DeductionDatum.' . $this->DeductionDatum->primaryKey => $id));
			$this->request->data = $this->DeductionDatum->find('first', $options);
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
		$this->DeductionDatum->id = $id;
		if (!$this->DeductionDatum->exists()) {
			throw new NotFoundException(__('Invalid deduction datum'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->DeductionDatum->delete()) {
			$this->Session->setFlash(__('Deduction datum deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Deduction datum was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
