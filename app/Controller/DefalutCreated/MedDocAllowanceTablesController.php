<?php
App::uses('AppController', 'Controller');
/**
 * MedDocAllowanceTables Controller
 *
 * @property MedDocAllowanceTable $MedDocAllowanceTable
 */
class MedDocAllowanceTablesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->MedDocAllowanceTable->recursive = 0;
		$this->set('medDocAllowanceTables', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->MedDocAllowanceTable->exists($id)) {
			throw new NotFoundException(__('Invalid med doc allowance table'));
		}
		$options = array('conditions' => array('MedDocAllowanceTable.' . $this->MedDocAllowanceTable->primaryKey => $id));
		$this->set('medDocAllowanceTable', $this->MedDocAllowanceTable->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->MedDocAllowanceTable->create();
			if ($this->MedDocAllowanceTable->save($this->request->data)) {
				$this->Session->setFlash(__('The med doc allowance table has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The med doc allowance table could not be saved. Please, try again.'));
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
		if (!$this->MedDocAllowanceTable->exists($id)) {
			throw new NotFoundException(__('Invalid med doc allowance table'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->MedDocAllowanceTable->save($this->request->data)) {
				$this->Session->setFlash(__('The med doc allowance table has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The med doc allowance table could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('MedDocAllowanceTable.' . $this->MedDocAllowanceTable->primaryKey => $id));
			$this->request->data = $this->MedDocAllowanceTable->find('first', $options);
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
		$this->MedDocAllowanceTable->id = $id;
		if (!$this->MedDocAllowanceTable->exists()) {
			throw new NotFoundException(__('Invalid med doc allowance table'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->MedDocAllowanceTable->delete()) {
			$this->Session->setFlash(__('Med doc allowance table deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Med doc allowance table was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
