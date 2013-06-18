<?php
App::uses('AppController', 'Controller');
/**
 * FloorMasters Controller
 *
 * @property FloorMaster $FloorMaster
 */
class FloorMastersController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->FloorMaster->recursive = 0;
		$this->set('floorMasters', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->FloorMaster->exists($id)) {
			throw new NotFoundException(__('Invalid floor master'));
		}
		$options = array('conditions' => array('FloorMaster.' . $this->FloorMaster->primaryKey => $id));
		$this->set('floorMaster', $this->FloorMaster->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->FloorMaster->create();
			if ($this->FloorMaster->save($this->request->data)) {
				$this->Session->setFlash(__('The floor master has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The floor master could not be saved. Please, try again.'));
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
		if (!$this->FloorMaster->exists($id)) {
			throw new NotFoundException(__('Invalid floor master'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->FloorMaster->save($this->request->data)) {
				$this->Session->setFlash(__('The floor master has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The floor master could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('FloorMaster.' . $this->FloorMaster->primaryKey => $id));
			$this->request->data = $this->FloorMaster->find('first', $options);
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
		$this->FloorMaster->id = $id;
		if (!$this->FloorMaster->exists()) {
			throw new NotFoundException(__('Invalid floor master'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->FloorMaster->delete()) {
			$this->Session->setFlash(__('Floor master deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Floor master was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
