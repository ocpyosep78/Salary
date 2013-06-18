<?php
App::uses('AppController', 'Controller');
/**
 * BeforeHiredTypeMasters Controller
 *
 * @property BeforeHiredTypeMaster $BeforeHiredTypeMaster
 */
class BeforeHiredTypeMastersController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->BeforeHiredTypeMaster->recursive = 0;
		$this->set('beforeHiredTypeMasters', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->BeforeHiredTypeMaster->exists($id)) {
			throw new NotFoundException(__('Invalid before hired type master'));
		}
		$options = array('conditions' => array('BeforeHiredTypeMaster.' . $this->BeforeHiredTypeMaster->primaryKey => $id));
		$this->set('beforeHiredTypeMaster', $this->BeforeHiredTypeMaster->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->BeforeHiredTypeMaster->create();
			if ($this->BeforeHiredTypeMaster->save($this->request->data)) {
				$this->Session->setFlash(__('The before hired type master has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The before hired type master could not be saved. Please, try again.'));
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
		if (!$this->BeforeHiredTypeMaster->exists($id)) {
			throw new NotFoundException(__('Invalid before hired type master'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->BeforeHiredTypeMaster->save($this->request->data)) {
				$this->Session->setFlash(__('The before hired type master has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The before hired type master could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('BeforeHiredTypeMaster.' . $this->BeforeHiredTypeMaster->primaryKey => $id));
			$this->request->data = $this->BeforeHiredTypeMaster->find('first', $options);
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
		$this->BeforeHiredTypeMaster->id = $id;
		if (!$this->BeforeHiredTypeMaster->exists()) {
			throw new NotFoundException(__('Invalid before hired type master'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->BeforeHiredTypeMaster->delete()) {
			$this->Session->setFlash(__('Before hired type master deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Before hired type master was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
