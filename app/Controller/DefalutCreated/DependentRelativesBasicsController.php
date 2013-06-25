<?php
App::uses('AppController', 'Controller');
/**
 * DependentRelativesBasics Controller
 *
 * @property DependentRelativesBasic $DependentRelativesBasic
 */
class DependentRelativesBasicsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->DependentRelativesBasic->recursive = 0;
		$this->set('dependentRelativesBasics', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DependentRelativesBasic->exists($id)) {
			throw new NotFoundException(__('Invalid dependent relatives basic'));
		}
		$options = array('conditions' => array('DependentRelativesBasic.' . $this->DependentRelativesBasic->primaryKey => $id));
		$this->set('dependentRelativesBasic', $this->DependentRelativesBasic->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DependentRelativesBasic->create();
			if ($this->DependentRelativesBasic->save($this->request->data)) {
				$this->Session->setFlash(__('The dependent relatives basic has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dependent relatives basic could not be saved. Please, try again.'));
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
		if (!$this->DependentRelativesBasic->exists($id)) {
			throw new NotFoundException(__('Invalid dependent relatives basic'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->DependentRelativesBasic->save($this->request->data)) {
				$this->Session->setFlash(__('The dependent relatives basic has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dependent relatives basic could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DependentRelativesBasic.' . $this->DependentRelativesBasic->primaryKey => $id));
			$this->request->data = $this->DependentRelativesBasic->find('first', $options);
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
		$this->DependentRelativesBasic->id = $id;
		if (!$this->DependentRelativesBasic->exists()) {
			throw new NotFoundException(__('Invalid dependent relatives basic'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->DependentRelativesBasic->delete()) {
			$this->Session->setFlash(__('Dependent relatives basic deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Dependent relatives basic was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
