<?php
App::uses('AppController', 'Controller');
/**
 * OrganisationMasters Controller
 *
 * @property OrganisationMaster $OrganisationMaster
 */
class OrganisationMastersController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->OrganisationMaster->recursive = 0;
		$this->set('organisationMasters', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->OrganisationMaster->exists($id)) {
			throw new NotFoundException(__('Invalid organisation master'));
		}
		$options = array('conditions' => array('OrganisationMaster.' . $this->OrganisationMaster->primaryKey => $id));
		$this->set('organisationMaster', $this->OrganisationMaster->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->OrganisationMaster->create();
			if ($this->OrganisationMaster->save($this->request->data)) {
				$this->Session->setFlash(__('The organisation master has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The organisation master could not be saved. Please, try again.'));
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
		if (!$this->OrganisationMaster->exists($id)) {
			throw new NotFoundException(__('Invalid organisation master'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->OrganisationMaster->save($this->request->data)) {
				$this->Session->setFlash(__('The organisation master has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The organisation master could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('OrganisationMaster.' . $this->OrganisationMaster->primaryKey => $id));
			$this->request->data = $this->OrganisationMaster->find('first', $options);
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
		$this->OrganisationMaster->id = $id;
		if (!$this->OrganisationMaster->exists()) {
			throw new NotFoundException(__('Invalid organisation master'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->OrganisationMaster->delete()) {
			$this->Session->setFlash(__('Organisation master deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Organisation master was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
