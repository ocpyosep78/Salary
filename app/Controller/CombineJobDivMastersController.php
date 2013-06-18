<?php
App::uses('AppController', 'Controller');
/**
 * CombineJobDivMasters Controller
 *
 * @property CombineJobDivMaster $CombineJobDivMaster
 */
class CombineJobDivMastersController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->CombineJobDivMaster->recursive = 0;
		$this->set('combineJobDivMasters', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CombineJobDivMaster->exists($id)) {
			throw new NotFoundException(__('Invalid combine job div master'));
		}
		$options = array('conditions' => array('CombineJobDivMaster.' . $this->CombineJobDivMaster->primaryKey => $id));
		$this->set('combineJobDivMaster', $this->CombineJobDivMaster->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CombineJobDivMaster->create();
			if ($this->CombineJobDivMaster->save($this->request->data)) {
				$this->Session->setFlash(__('The combine job div master has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The combine job div master could not be saved. Please, try again.'));
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
		if (!$this->CombineJobDivMaster->exists($id)) {
			throw new NotFoundException(__('Invalid combine job div master'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CombineJobDivMaster->save($this->request->data)) {
				$this->Session->setFlash(__('The combine job div master has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The combine job div master could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CombineJobDivMaster.' . $this->CombineJobDivMaster->primaryKey => $id));
			$this->request->data = $this->CombineJobDivMaster->find('first', $options);
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
		$this->CombineJobDivMaster->id = $id;
		if (!$this->CombineJobDivMaster->exists()) {
			throw new NotFoundException(__('Invalid combine job div master'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->CombineJobDivMaster->delete()) {
			$this->Session->setFlash(__('Combine job div master deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Combine job div master was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
