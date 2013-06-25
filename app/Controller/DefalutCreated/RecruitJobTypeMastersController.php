<?php
App::uses('AppController', 'Controller');
/**
 * RecruitJobTypeMasters Controller
 *
 * @property RecruitJobTypeMaster $RecruitJobTypeMaster
 */
class RecruitJobTypeMastersController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->RecruitJobTypeMaster->recursive = 0;
		$this->set('recruitJobTypeMasters', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->RecruitJobTypeMaster->exists($id)) {
			throw new NotFoundException(__('Invalid recruit job type master'));
		}
		$options = array('conditions' => array('RecruitJobTypeMaster.' . $this->RecruitJobTypeMaster->primaryKey => $id));
		$this->set('recruitJobTypeMaster', $this->RecruitJobTypeMaster->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->RecruitJobTypeMaster->create();
			if ($this->RecruitJobTypeMaster->save($this->request->data)) {
				$this->Session->setFlash(__('The recruit job type master has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The recruit job type master could not be saved. Please, try again.'));
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
		if (!$this->RecruitJobTypeMaster->exists($id)) {
			throw new NotFoundException(__('Invalid recruit job type master'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->RecruitJobTypeMaster->save($this->request->data)) {
				$this->Session->setFlash(__('The recruit job type master has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The recruit job type master could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('RecruitJobTypeMaster.' . $this->RecruitJobTypeMaster->primaryKey => $id));
			$this->request->data = $this->RecruitJobTypeMaster->find('first', $options);
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
		$this->RecruitJobTypeMaster->id = $id;
		if (!$this->RecruitJobTypeMaster->exists()) {
			throw new NotFoundException(__('Invalid recruit job type master'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->RecruitJobTypeMaster->delete()) {
			$this->Session->setFlash(__('Recruit job type master deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Recruit job type master was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
