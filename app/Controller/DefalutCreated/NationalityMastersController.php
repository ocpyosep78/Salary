<?php
App::uses('AppController', 'Controller');
/**
 * NationalityMasters Controller
 *
 * @property NationalityMaster $NationalityMaster
 */
class NationalityMastersController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->NationalityMaster->recursive = 0;
		$this->set('nationalityMasters', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->NationalityMaster->exists($id)) {
			throw new NotFoundException(__('Invalid nationality master'));
		}
		$options = array('conditions' => array('NationalityMaster.' . $this->NationalityMaster->primaryKey => $id));
		$this->set('nationalityMaster', $this->NationalityMaster->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->NationalityMaster->create();
			if ($this->NationalityMaster->save($this->request->data)) {
				$this->Session->setFlash(__('The nationality master has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The nationality master could not be saved. Please, try again.'));
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
		if (!$this->NationalityMaster->exists($id)) {
			throw new NotFoundException(__('Invalid nationality master'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->NationalityMaster->save($this->request->data)) {
				$this->Session->setFlash(__('The nationality master has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The nationality master could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('NationalityMaster.' . $this->NationalityMaster->primaryKey => $id));
			$this->request->data = $this->NationalityMaster->find('first', $options);
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
		$this->NationalityMaster->id = $id;
		if (!$this->NationalityMaster->exists()) {
			throw new NotFoundException(__('Invalid nationality master'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->NationalityMaster->delete()) {
			$this->Session->setFlash(__('Nationality master deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Nationality master was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
