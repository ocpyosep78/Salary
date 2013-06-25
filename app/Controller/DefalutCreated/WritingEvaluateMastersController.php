<?php
App::uses('AppController', 'Controller');
/**
 * WritingEvaluateMasters Controller
 *
 * @property WritingEvaluateMaster $WritingEvaluateMaster
 */
class WritingEvaluateMastersController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->WritingEvaluateMaster->recursive = 0;
		$this->set('writingEvaluateMasters', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->WritingEvaluateMaster->exists($id)) {
			throw new NotFoundException(__('Invalid writing evaluate master'));
		}
		$options = array('conditions' => array('WritingEvaluateMaster.' . $this->WritingEvaluateMaster->primaryKey => $id));
		$this->set('writingEvaluateMaster', $this->WritingEvaluateMaster->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->WritingEvaluateMaster->create();
			if ($this->WritingEvaluateMaster->save($this->request->data)) {
				$this->Session->setFlash(__('The writing evaluate master has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The writing evaluate master could not be saved. Please, try again.'));
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
		if (!$this->WritingEvaluateMaster->exists($id)) {
			throw new NotFoundException(__('Invalid writing evaluate master'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->WritingEvaluateMaster->save($this->request->data)) {
				$this->Session->setFlash(__('The writing evaluate master has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The writing evaluate master could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('WritingEvaluateMaster.' . $this->WritingEvaluateMaster->primaryKey => $id));
			$this->request->data = $this->WritingEvaluateMaster->find('first', $options);
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
		$this->WritingEvaluateMaster->id = $id;
		if (!$this->WritingEvaluateMaster->exists()) {
			throw new NotFoundException(__('Invalid writing evaluate master'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->WritingEvaluateMaster->delete()) {
			$this->Session->setFlash(__('Writing evaluate master deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Writing evaluate master was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
