<?php
App::uses('AppController', 'Controller');
/**
 * FeeAndUnionDueRateAppliedSalaryTypeMasters Controller
 *
 * @property FeeAndUnionDueRateAppliedSalaryTypeMaster $FeeAndUnionDueRateAppliedSalaryTypeMaster
 */
class FeeAndUnionDueRateAppliedSalaryTypeMastersController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->FeeAndUnionDueRateAppliedSalaryTypeMaster->recursive = 0;
		$this->set('feeAndUnionDueRateAppliedSalaryTypeMasters', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->FeeAndUnionDueRateAppliedSalaryTypeMaster->exists($id)) {
			throw new NotFoundException(__('Invalid fee and union due rate applied salary type master'));
		}
		$options = array('conditions' => array('FeeAndUnionDueRateAppliedSalaryTypeMaster.' . $this->FeeAndUnionDueRateAppliedSalaryTypeMaster->primaryKey => $id));
		$this->set('feeAndUnionDueRateAppliedSalaryTypeMaster', $this->FeeAndUnionDueRateAppliedSalaryTypeMaster->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->FeeAndUnionDueRateAppliedSalaryTypeMaster->create();
			if ($this->FeeAndUnionDueRateAppliedSalaryTypeMaster->save($this->request->data)) {
				$this->Session->setFlash(__('The fee and union due rate applied salary type master has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The fee and union due rate applied salary type master could not be saved. Please, try again.'));
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
		if (!$this->FeeAndUnionDueRateAppliedSalaryTypeMaster->exists($id)) {
			throw new NotFoundException(__('Invalid fee and union due rate applied salary type master'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->FeeAndUnionDueRateAppliedSalaryTypeMaster->save($this->request->data)) {
				$this->Session->setFlash(__('The fee and union due rate applied salary type master has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The fee and union due rate applied salary type master could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('FeeAndUnionDueRateAppliedSalaryTypeMaster.' . $this->FeeAndUnionDueRateAppliedSalaryTypeMaster->primaryKey => $id));
			$this->request->data = $this->FeeAndUnionDueRateAppliedSalaryTypeMaster->find('first', $options);
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
		$this->FeeAndUnionDueRateAppliedSalaryTypeMaster->id = $id;
		if (!$this->FeeAndUnionDueRateAppliedSalaryTypeMaster->exists()) {
			throw new NotFoundException(__('Invalid fee and union due rate applied salary type master'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->FeeAndUnionDueRateAppliedSalaryTypeMaster->delete()) {
			$this->Session->setFlash(__('Fee and union due rate applied salary type master deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Fee and union due rate applied salary type master was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
