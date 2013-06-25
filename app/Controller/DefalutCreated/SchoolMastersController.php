<?php
App::uses('AppController', 'Controller');
/**
 * SchoolMasters Controller
 *
 * @property SchoolMaster $SchoolMaster
 */
class SchoolMastersController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->SchoolMaster->recursive = 0;
		$this->set('schoolMasters', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->SchoolMaster->exists($id)) {
			throw new NotFoundException(__('Invalid school master'));
		}
		$options = array('conditions' => array('SchoolMaster.' . $this->SchoolMaster->primaryKey => $id));
		$this->set('schoolMaster', $this->SchoolMaster->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->SchoolMaster->create();
			if ($this->SchoolMaster->save($this->request->data)) {
				$this->Session->setFlash(__('The school master has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The school master could not be saved. Please, try again.'));
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
		if (!$this->SchoolMaster->exists($id)) {
			throw new NotFoundException(__('Invalid school master'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->SchoolMaster->save($this->request->data)) {
				$this->Session->setFlash(__('The school master has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The school master could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('SchoolMaster.' . $this->SchoolMaster->primaryKey => $id));
			$this->request->data = $this->SchoolMaster->find('first', $options);
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
		$this->SchoolMaster->id = $id;
		if (!$this->SchoolMaster->exists()) {
			throw new NotFoundException(__('Invalid school master'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->SchoolMaster->delete()) {
			$this->Session->setFlash(__('School master deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('School master was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
