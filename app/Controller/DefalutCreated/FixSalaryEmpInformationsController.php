<?php
App::uses('AppController', 'Controller');
/**
 * FixSalaryEmpInformations Controller
 *
 * @property FixSalaryEmpInformation $FixSalaryEmpInformation
 */
class FixSalaryEmpInformationsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->FixSalaryEmpInformation->recursive = 0;
		$this->set('fixSalaryEmpInformations', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->FixSalaryEmpInformation->exists($id)) {
			throw new NotFoundException(__('Invalid fix salary emp information'));
		}
		$options = array('conditions' => array('FixSalaryEmpInformation.' . $this->FixSalaryEmpInformation->primaryKey => $id));
		$this->set('fixSalaryEmpInformation', $this->FixSalaryEmpInformation->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->FixSalaryEmpInformation->create();
			if ($this->FixSalaryEmpInformation->save($this->request->data)) {
				$this->Session->setFlash(__('The fix salary emp information has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The fix salary emp information could not be saved. Please, try again.'));
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
		if (!$this->FixSalaryEmpInformation->exists($id)) {
			throw new NotFoundException(__('Invalid fix salary emp information'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->FixSalaryEmpInformation->save($this->request->data)) {
				$this->Session->setFlash(__('The fix salary emp information has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The fix salary emp information could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('FixSalaryEmpInformation.' . $this->FixSalaryEmpInformation->primaryKey => $id));
			$this->request->data = $this->FixSalaryEmpInformation->find('first', $options);
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
		$this->FixSalaryEmpInformation->id = $id;
		if (!$this->FixSalaryEmpInformation->exists()) {
			throw new NotFoundException(__('Invalid fix salary emp information'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->FixSalaryEmpInformation->delete()) {
			$this->Session->setFlash(__('Fix salary emp information deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Fix salary emp information was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
