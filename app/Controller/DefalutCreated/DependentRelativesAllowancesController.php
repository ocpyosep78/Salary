<?php
App::uses('AppController', 'Controller');
/**
 * DependentRelativesAllowances Controller
 *
 * @property DependentRelativesAllowance $DependentRelativesAllowance
 */
class DependentRelativesAllowancesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->DependentRelativesAllowance->recursive = 0;
		$this->set('dependentRelativesAllowances', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DependentRelativesAllowance->exists($id)) {
			throw new NotFoundException(__('Invalid dependent relatives allowance'));
		}
		$options = array('conditions' => array('DependentRelativesAllowance.' . $this->DependentRelativesAllowance->primaryKey => $id));
		$this->set('dependentRelativesAllowance', $this->DependentRelativesAllowance->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DependentRelativesAllowance->create();
			if ($this->DependentRelativesAllowance->save($this->request->data)) {
				$this->Session->setFlash(__('The dependent relatives allowance has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dependent relatives allowance could not be saved. Please, try again.'));
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
		if (!$this->DependentRelativesAllowance->exists($id)) {
			throw new NotFoundException(__('Invalid dependent relatives allowance'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->DependentRelativesAllowance->save($this->request->data)) {
				$this->Session->setFlash(__('The dependent relatives allowance has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dependent relatives allowance could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DependentRelativesAllowance.' . $this->DependentRelativesAllowance->primaryKey => $id));
			$this->request->data = $this->DependentRelativesAllowance->find('first', $options);
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
		$this->DependentRelativesAllowance->id = $id;
		if (!$this->DependentRelativesAllowance->exists()) {
			throw new NotFoundException(__('Invalid dependent relatives allowance'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->DependentRelativesAllowance->delete()) {
			$this->Session->setFlash(__('Dependent relatives allowance deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Dependent relatives allowance was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
