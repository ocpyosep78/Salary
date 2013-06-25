<?php
App::uses('AppController', 'Controller');
/**
 * CatJobTypeDutyRecDivCbMasters Controller
 *
 * @property CatJobTypeDutyRecDivCbMaster $CatJobTypeDutyRecDivCbMaster
 */
class CatJobTypeDutyRecDivCbMastersController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->CatJobTypeDutyRecDivCbMaster->recursive = 0;
		$this->set('catJobTypeDutyRecDivCbMasters', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CatJobTypeDutyRecDivCbMaster->exists($id)) {
			throw new NotFoundException(__('Invalid cat job type duty rec div cb master'));
		}
		$options = array('conditions' => array('CatJobTypeDutyRecDivCbMaster.' . $this->CatJobTypeDutyRecDivCbMaster->primaryKey => $id));
		$this->set('catJobTypeDutyRecDivCbMaster', $this->CatJobTypeDutyRecDivCbMaster->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CatJobTypeDutyRecDivCbMaster->create();
			if ($this->CatJobTypeDutyRecDivCbMaster->save($this->request->data)) {
				$this->Session->setFlash(__('The cat job type duty rec div cb master has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cat job type duty rec div cb master could not be saved. Please, try again.'));
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
		if (!$this->CatJobTypeDutyRecDivCbMaster->exists($id)) {
			throw new NotFoundException(__('Invalid cat job type duty rec div cb master'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CatJobTypeDutyRecDivCbMaster->save($this->request->data)) {
				$this->Session->setFlash(__('The cat job type duty rec div cb master has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cat job type duty rec div cb master could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CatJobTypeDutyRecDivCbMaster.' . $this->CatJobTypeDutyRecDivCbMaster->primaryKey => $id));
			$this->request->data = $this->CatJobTypeDutyRecDivCbMaster->find('first', $options);
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
		$this->CatJobTypeDutyRecDivCbMaster->id = $id;
		if (!$this->CatJobTypeDutyRecDivCbMaster->exists()) {
			throw new NotFoundException(__('Invalid cat job type duty rec div cb master'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->CatJobTypeDutyRecDivCbMaster->delete()) {
			$this->Session->setFlash(__('Cat job type duty rec div cb master deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Cat job type duty rec div cb master was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
