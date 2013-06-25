<?php
App::uses('AppController', 'Controller');
/**
 * IncomeTaxTables Controller
 *
 * @property IncomeTaxTable $IncomeTaxTable
 */
class IncomeTaxTablesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->IncomeTaxTable->recursive = 0;
		$this->set('incomeTaxTables', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->IncomeTaxTable->exists($id)) {
			throw new NotFoundException(__('Invalid income tax table'));
		}
		$options = array('conditions' => array('IncomeTaxTable.' . $this->IncomeTaxTable->primaryKey => $id));
		$this->set('incomeTaxTable', $this->IncomeTaxTable->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->IncomeTaxTable->create();
			if ($this->IncomeTaxTable->save($this->request->data)) {
				$this->Session->setFlash(__('The income tax table has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The income tax table could not be saved. Please, try again.'));
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
		if (!$this->IncomeTaxTable->exists($id)) {
			throw new NotFoundException(__('Invalid income tax table'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->IncomeTaxTable->save($this->request->data)) {
				$this->Session->setFlash(__('The income tax table has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The income tax table could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('IncomeTaxTable.' . $this->IncomeTaxTable->primaryKey => $id));
			$this->request->data = $this->IncomeTaxTable->find('first', $options);
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
		$this->IncomeTaxTable->id = $id;
		if (!$this->IncomeTaxTable->exists()) {
			throw new NotFoundException(__('Invalid income tax table'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->IncomeTaxTable->delete()) {
			$this->Session->setFlash(__('Income tax table deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Income tax table was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
