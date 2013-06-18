<?php
App::uses('AppController', 'Controller');
/**
 * RetyroactiveRequirements Controller
 *
 * @property RetyroactiveRequirement $RetyroactiveRequirement
 */
class RetyroactiveRequirementsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->RetyroactiveRequirement->recursive = 0;
		$this->set('retyroactiveRequirements', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->RetyroactiveRequirement->exists($id)) {
			throw new NotFoundException(__('Invalid retyroactive requirement'));
		}
		$options = array('conditions' => array('RetyroactiveRequirement.' . $this->RetyroactiveRequirement->primaryKey => $id));
		$this->set('retyroactiveRequirement', $this->RetyroactiveRequirement->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->RetyroactiveRequirement->create();
			if ($this->RetyroactiveRequirement->save($this->request->data)) {
				$this->Session->setFlash(__('The retyroactive requirement has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The retyroactive requirement could not be saved. Please, try again.'));
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
		if (!$this->RetyroactiveRequirement->exists($id)) {
			throw new NotFoundException(__('Invalid retyroactive requirement'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->RetyroactiveRequirement->save($this->request->data)) {
				$this->Session->setFlash(__('The retyroactive requirement has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The retyroactive requirement could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('RetyroactiveRequirement.' . $this->RetyroactiveRequirement->primaryKey => $id));
			$this->request->data = $this->RetyroactiveRequirement->find('first', $options);
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
		$this->RetyroactiveRequirement->id = $id;
		if (!$this->RetyroactiveRequirement->exists()) {
			throw new NotFoundException(__('Invalid retyroactive requirement'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->RetyroactiveRequirement->delete()) {
			$this->Session->setFlash(__('Retyroactive requirement deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Retyroactive requirement was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
