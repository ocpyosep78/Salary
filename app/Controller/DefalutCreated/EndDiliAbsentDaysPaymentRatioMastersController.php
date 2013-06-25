<?php
App::uses('AppController', 'Controller');
/**
 * EndDiliAbsentDaysPaymentRatioMasters Controller
 *
 * @property EndDiliAbsentDaysPaymentRatioMaster $EndDiliAbsentDaysPaymentRatioMaster
 */
class EndDiliAbsentDaysPaymentRatioMastersController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->EndDiliAbsentDaysPaymentRatioMaster->recursive = 0;
		$this->set('endDiliAbsentDaysPaymentRatioMasters', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->EndDiliAbsentDaysPaymentRatioMaster->exists($id)) {
			throw new NotFoundException(__('Invalid end dili absent days payment ratio master'));
		}
		$options = array('conditions' => array('EndDiliAbsentDaysPaymentRatioMaster.' . $this->EndDiliAbsentDaysPaymentRatioMaster->primaryKey => $id));
		$this->set('endDiliAbsentDaysPaymentRatioMaster', $this->EndDiliAbsentDaysPaymentRatioMaster->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->EndDiliAbsentDaysPaymentRatioMaster->create();
			if ($this->EndDiliAbsentDaysPaymentRatioMaster->save($this->request->data)) {
				$this->Session->setFlash(__('The end dili absent days payment ratio master has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The end dili absent days payment ratio master could not be saved. Please, try again.'));
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
		if (!$this->EndDiliAbsentDaysPaymentRatioMaster->exists($id)) {
			throw new NotFoundException(__('Invalid end dili absent days payment ratio master'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->EndDiliAbsentDaysPaymentRatioMaster->save($this->request->data)) {
				$this->Session->setFlash(__('The end dili absent days payment ratio master has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The end dili absent days payment ratio master could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('EndDiliAbsentDaysPaymentRatioMaster.' . $this->EndDiliAbsentDaysPaymentRatioMaster->primaryKey => $id));
			$this->request->data = $this->EndDiliAbsentDaysPaymentRatioMaster->find('first', $options);
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
		$this->EndDiliAbsentDaysPaymentRatioMaster->id = $id;
		if (!$this->EndDiliAbsentDaysPaymentRatioMaster->exists()) {
			throw new NotFoundException(__('Invalid end dili absent days payment ratio master'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->EndDiliAbsentDaysPaymentRatioMaster->delete()) {
			$this->Session->setFlash(__('End dili absent days payment ratio master deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('End dili absent days payment ratio master was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
