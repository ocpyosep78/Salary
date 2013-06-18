<?php
App::uses('AppController', 'Controller');
/**
 * RetiredEmpInfos Controller
 *
 * @property RetiredEmpInfo $RetiredEmpInfo
 */
class RetiredEmpInfosController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->RetiredEmpInfo->recursive = 0;
		$this->set('retiredEmpInfos', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->RetiredEmpInfo->exists($id)) {
			throw new NotFoundException(__('Invalid retired emp info'));
		}
		$options = array('conditions' => array('RetiredEmpInfo.' . $this->RetiredEmpInfo->primaryKey => $id));
		$this->set('retiredEmpInfo', $this->RetiredEmpInfo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->RetiredEmpInfo->create();
			if ($this->RetiredEmpInfo->save($this->request->data)) {
				$this->Session->setFlash(__('The retired emp info has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The retired emp info could not be saved. Please, try again.'));
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
		if (!$this->RetiredEmpInfo->exists($id)) {
			throw new NotFoundException(__('Invalid retired emp info'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->RetiredEmpInfo->save($this->request->data)) {
				$this->Session->setFlash(__('The retired emp info has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The retired emp info could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('RetiredEmpInfo.' . $this->RetiredEmpInfo->primaryKey => $id));
			$this->request->data = $this->RetiredEmpInfo->find('first', $options);
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
		$this->RetiredEmpInfo->id = $id;
		if (!$this->RetiredEmpInfo->exists()) {
			throw new NotFoundException(__('Invalid retired emp info'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->RetiredEmpInfo->delete()) {
			$this->Session->setFlash(__('Retired emp info deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Retired emp info was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
