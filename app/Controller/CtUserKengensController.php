<?php
App::uses('AppController', 'Controller');
/**
 * CtUserKengens Controller
 *
 * @property CtUserKengen $CtUserKengen
 */
class CtUserKengensController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->CtUserKengen->recursive = 0;
		$this->set('ctUserKengens', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CtUserKengen->exists($id)) {
			throw new NotFoundException(__('Invalid ct user kengen'));
		}
		$options = array('conditions' => array('CtUserKengen.' . $this->CtUserKengen->primaryKey => $id));
		$this->set('ctUserKengen', $this->CtUserKengen->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CtUserKengen->create();
			if ($this->CtUserKengen->save($this->request->data)) {
				$this->Session->setFlash(__('The ct user kengen has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ct user kengen could not be saved. Please, try again.'));
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
		if (!$this->CtUserKengen->exists($id)) {
			throw new NotFoundException(__('Invalid ct user kengen'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CtUserKengen->save($this->request->data)) {
				$this->Session->setFlash(__('The ct user kengen has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ct user kengen could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CtUserKengen.' . $this->CtUserKengen->primaryKey => $id));
			$this->request->data = $this->CtUserKengen->find('first', $options);
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
		$this->CtUserKengen->id = $id;
		if (!$this->CtUserKengen->exists()) {
			throw new NotFoundException(__('Invalid ct user kengen'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->CtUserKengen->delete()) {
			$this->Session->setFlash(__('Ct user kengen deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Ct user kengen was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
