<?php
App::uses('AppController', 'Controller');
/**
 * RevisionRenewalInfos Controller
 *
 * @property RevisionRenewalInfo $RevisionRenewalInfo
 */
class RevisionRenewalInfosController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->RevisionRenewalInfo->recursive = 0;
		$this->set('revisionRenewalInfos', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->RevisionRenewalInfo->exists($id)) {
			throw new NotFoundException(__('Invalid revision renewal info'));
		}
		$options = array('conditions' => array('RevisionRenewalInfo.' . $this->RevisionRenewalInfo->primaryKey => $id));
		$this->set('revisionRenewalInfo', $this->RevisionRenewalInfo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->RevisionRenewalInfo->create();
			if ($this->RevisionRenewalInfo->save($this->request->data)) {
				$this->Session->setFlash(__('The revision renewal info has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The revision renewal info could not be saved. Please, try again.'));
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
		if (!$this->RevisionRenewalInfo->exists($id)) {
			throw new NotFoundException(__('Invalid revision renewal info'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->RevisionRenewalInfo->save($this->request->data)) {
				$this->Session->setFlash(__('The revision renewal info has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The revision renewal info could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('RevisionRenewalInfo.' . $this->RevisionRenewalInfo->primaryKey => $id));
			$this->request->data = $this->RevisionRenewalInfo->find('first', $options);
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
		$this->RevisionRenewalInfo->id = $id;
		if (!$this->RevisionRenewalInfo->exists()) {
			throw new NotFoundException(__('Invalid revision renewal info'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->RevisionRenewalInfo->delete()) {
			$this->Session->setFlash(__('Revision renewal info deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Revision renewal info was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
