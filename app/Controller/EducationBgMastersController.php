<?php
App::uses('AppController', 'Controller');
/**
 * EducationBgMasters Controller
 *
 * @property EducationBgMaster $EducationBgMaster
 */
class EducationBgMastersController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->EducationBgMaster->recursive = 0;
		$this->set('educationBgMasters', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->EducationBgMaster->exists($id)) {
			throw new NotFoundException(__('Invalid education bg master'));
		}
		$options = array('conditions' => array('EducationBgMaster.' . $this->EducationBgMaster->primaryKey => $id));
		$this->set('educationBgMaster', $this->EducationBgMaster->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->EducationBgMaster->create();
			if ($this->EducationBgMaster->save($this->request->data)) {
				$this->Session->setFlash(__('The education bg master has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The education bg master could not be saved. Please, try again.'));
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
		if (!$this->EducationBgMaster->exists($id)) {
			throw new NotFoundException(__('Invalid education bg master'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->EducationBgMaster->save($this->request->data)) {
				$this->Session->setFlash(__('The education bg master has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The education bg master could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('EducationBgMaster.' . $this->EducationBgMaster->primaryKey => $id));
			$this->request->data = $this->EducationBgMaster->find('first', $options);
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
		$this->EducationBgMaster->id = $id;
		if (!$this->EducationBgMaster->exists()) {
			throw new NotFoundException(__('Invalid education bg master'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->EducationBgMaster->delete()) {
			$this->Session->setFlash(__('Education bg master deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Education bg master was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
