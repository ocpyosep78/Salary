<?php
App::uses('AppController', 'Controller');
/**
 * RecruitDivMasters Controller
 *
 * @property RecruitDivMaster $RecruitDivMaster
 */
class RecruitDivMastersController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->RecruitDivMaster->recursive = 0;
		$this->set('recruitDivMasters', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->RecruitDivMaster->exists($id)) {
			throw new NotFoundException(__('Invalid recruit div master'));
		}
		$options = array('conditions' => array('RecruitDivMaster.' . $this->RecruitDivMaster->primaryKey => $id));
		$this->set('recruitDivMaster', $this->RecruitDivMaster->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->RecruitDivMaster->create();
			if ($this->RecruitDivMaster->save($this->request->data)) {
				$this->Session->setFlash(__('The recruit div master has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The recruit div master could not be saved. Please, try again.'));
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
		if (!$this->RecruitDivMaster->exists($id)) {
			throw new NotFoundException(__('Invalid recruit div master'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->RecruitDivMaster->save($this->request->data)) {
				$this->Session->setFlash(__('The recruit div master has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The recruit div master could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('RecruitDivMaster.' . $this->RecruitDivMaster->primaryKey => $id));
			$this->request->data = $this->RecruitDivMaster->find('first', $options);
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
		$this->RecruitDivMaster->id = $id;
		if (!$this->RecruitDivMaster->exists()) {
			throw new NotFoundException(__('Invalid recruit div master'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->RecruitDivMaster->delete()) {
			$this->Session->setFlash(__('Recruit div master deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Recruit div master was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
