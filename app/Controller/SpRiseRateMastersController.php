<?php
App::uses('AppController', 'Controller');
/**
 * SpRiseRateMasters Controller
 *
 * @property SpRiseRateMaster $SpRiseRateMaster
 */
class SpRiseRateMastersController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->SpRiseRateMaster->recursive = 0;
		$this->set('spRiseRateMasters', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->SpRiseRateMaster->exists($id)) {
			throw new NotFoundException(__('Invalid sp rise rate master'));
		}
		$options = array('conditions' => array('SpRiseRateMaster.' . $this->SpRiseRateMaster->primaryKey => $id));
		$this->set('spRiseRateMaster', $this->SpRiseRateMaster->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->SpRiseRateMaster->create();
			if ($this->SpRiseRateMaster->save($this->request->data)) {
				$this->Session->setFlash(__('The sp rise rate master has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sp rise rate master could not be saved. Please, try again.'));
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
		if (!$this->SpRiseRateMaster->exists($id)) {
			throw new NotFoundException(__('Invalid sp rise rate master'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->SpRiseRateMaster->save($this->request->data)) {
				$this->Session->setFlash(__('The sp rise rate master has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sp rise rate master could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('SpRiseRateMaster.' . $this->SpRiseRateMaster->primaryKey => $id));
			$this->request->data = $this->SpRiseRateMaster->find('first', $options);
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
		$this->SpRiseRateMaster->id = $id;
		if (!$this->SpRiseRateMaster->exists()) {
			throw new NotFoundException(__('Invalid sp rise rate master'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->SpRiseRateMaster->delete()) {
			$this->Session->setFlash(__('Sp rise rate master deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Sp rise rate master was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
