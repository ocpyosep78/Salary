<?php
App::uses('AppController', 'Controller');
/**
 * RecruitingOrgMasters Controller
 *
 * @property RecruitingOrgMaster $RecruitingOrgMaster
 */
class RecruitingOrgMastersController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->RecruitingOrgMaster->recursive = 0;
		$this->set('recruitingOrgMasters', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->RecruitingOrgMaster->exists($id)) {
			throw new NotFoundException(__('Invalid recruiting org master'));
		}
		$options = array('conditions' => array('RecruitingOrgMaster.' . $this->RecruitingOrgMaster->primaryKey => $id));
		$this->set('recruitingOrgMaster', $this->RecruitingOrgMaster->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->RecruitingOrgMaster->create();
			if ($this->RecruitingOrgMaster->save($this->request->data)) {
				$this->Session->setFlash(__('The recruiting org master has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The recruiting org master could not be saved. Please, try again.'));
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
		if (!$this->RecruitingOrgMaster->exists($id)) {
			throw new NotFoundException(__('Invalid recruiting org master'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->RecruitingOrgMaster->save($this->request->data)) {
				$this->Session->setFlash(__('The recruiting org master has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The recruiting org master could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('RecruitingOrgMaster.' . $this->RecruitingOrgMaster->primaryKey => $id));
			$this->request->data = $this->RecruitingOrgMaster->find('first', $options);
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
		$this->RecruitingOrgMaster->id = $id;
		if (!$this->RecruitingOrgMaster->exists()) {
			throw new NotFoundException(__('Invalid recruiting org master'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->RecruitingOrgMaster->delete()) {
			$this->Session->setFlash(__('Recruiting org master deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Recruiting org master was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
