<?php
App::uses('AppController', 'Controller');
/**
 * DependentRelativesTaxdeductions Controller
 *
 * @property DependentRelativesTaxdeduction $DependentRelativesTaxdeduction
 */
class DependentRelativesTaxdeductionsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->DependentRelativesTaxdeduction->recursive = 0;
		$this->set('dependentRelativesTaxdeductions', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DependentRelativesTaxdeduction->exists($id)) {
			throw new NotFoundException(__('Invalid dependent relatives taxdeduction'));
		}
		$options = array('conditions' => array('DependentRelativesTaxdeduction.' . $this->DependentRelativesTaxdeduction->primaryKey => $id));
		$this->set('dependentRelativesTaxdeduction', $this->DependentRelativesTaxdeduction->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DependentRelativesTaxdeduction->create();
			if ($this->DependentRelativesTaxdeduction->save($this->request->data)) {
				$this->Session->setFlash(__('The dependent relatives taxdeduction has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dependent relatives taxdeduction could not be saved. Please, try again.'));
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
		if (!$this->DependentRelativesTaxdeduction->exists($id)) {
			throw new NotFoundException(__('Invalid dependent relatives taxdeduction'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->DependentRelativesTaxdeduction->save($this->request->data)) {
				$this->Session->setFlash(__('The dependent relatives taxdeduction has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dependent relatives taxdeduction could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DependentRelativesTaxdeduction.' . $this->DependentRelativesTaxdeduction->primaryKey => $id));
			$this->request->data = $this->DependentRelativesTaxdeduction->find('first', $options);
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
		$this->DependentRelativesTaxdeduction->id = $id;
		if (!$this->DependentRelativesTaxdeduction->exists()) {
			throw new NotFoundException(__('Invalid dependent relatives taxdeduction'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->DependentRelativesTaxdeduction->delete()) {
			$this->Session->setFlash(__('Dependent relatives taxdeduction deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Dependent relatives taxdeduction was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
