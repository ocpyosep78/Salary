<?php
App::uses('AppController', 'Controller');
/**
 * PersonFamilyInfos Controller
 *
 * @property PersonFamilyInfo $PersonFamilyInfo
 */
class PersonFamilyInfosController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->PersonFamilyInfo->recursive = 0;
		$this->set('personFamilyInfos', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->PersonFamilyInfo->exists($id)) {
			throw new NotFoundException(__('Invalid person family info'));
		}
		$options = array('conditions' => array('PersonFamilyInfo.' . $this->PersonFamilyInfo->primaryKey => $id));
		$this->set('personFamilyInfo', $this->PersonFamilyInfo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PersonFamilyInfo->create();
			if ($this->PersonFamilyInfo->save($this->request->data)) {
				$this->Session->setFlash(__('The person family info has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The person family info could not be saved. Please, try again.'));
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
		if (!$this->PersonFamilyInfo->exists($id)) {
			throw new NotFoundException(__('Invalid person family info'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->PersonFamilyInfo->save($this->request->data)) {
				$this->Session->setFlash(__('The person family info has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The person family info could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PersonFamilyInfo.' . $this->PersonFamilyInfo->primaryKey => $id));
			$this->request->data = $this->PersonFamilyInfo->find('first', $options);
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
		$this->PersonFamilyInfo->id = $id;
		if (!$this->PersonFamilyInfo->exists()) {
			throw new NotFoundException(__('Invalid person family info'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->PersonFamilyInfo->delete()) {
			$this->Session->setFlash(__('Person family info deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Person family info was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
