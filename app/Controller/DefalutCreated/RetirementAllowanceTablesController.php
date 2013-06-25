<?php
App::uses('AppController', 'Controller');
/**
 * RetirementAllowanceTables Controller
 *
 * @property RetirementAllowanceTable $RetirementAllowanceTable
 */
class RetirementAllowanceTablesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->RetirementAllowanceTable->recursive = 0;
		$this->set('retirementAllowanceTables', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->RetirementAllowanceTable->exists($id)) {
			throw new NotFoundException(__('Invalid retirement allowance table'));
		}
		$options = array('conditions' => array('RetirementAllowanceTable.' . $this->RetirementAllowanceTable->primaryKey => $id));
		$this->set('retirementAllowanceTable', $this->RetirementAllowanceTable->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->RetirementAllowanceTable->create();
			if ($this->RetirementAllowanceTable->save($this->request->data)) {
				$this->Session->setFlash(__('The retirement allowance table has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The retirement allowance table could not be saved. Please, try again.'));
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
		if (!$this->RetirementAllowanceTable->exists($id)) {
			throw new NotFoundException(__('Invalid retirement allowance table'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->RetirementAllowanceTable->save($this->request->data)) {
				$this->Session->setFlash(__('The retirement allowance table has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The retirement allowance table could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('RetirementAllowanceTable.' . $this->RetirementAllowanceTable->primaryKey => $id));
			$this->request->data = $this->RetirementAllowanceTable->find('first', $options);
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
		$this->RetirementAllowanceTable->id = $id;
		if (!$this->RetirementAllowanceTable->exists()) {
			throw new NotFoundException(__('Invalid retirement allowance table'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->RetirementAllowanceTable->delete()) {
			$this->Session->setFlash(__('Retirement allowance table deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Retirement allowance table was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
