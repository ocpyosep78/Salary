<?php
App::uses('AppController', 'Controller');
/**
 * SpRiseCanData Controller
 *
 * @property SpRiseCanDatum $SpRiseCanDatum
 */
class SpRiseCanDataController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->SpRiseCanDatum->recursive = 0;
		$this->set('spRiseCanData', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->SpRiseCanDatum->exists($id)) {
			throw new NotFoundException(__('Invalid sp rise can datum'));
		}
		$options = array('conditions' => array('SpRiseCanDatum.' . $this->SpRiseCanDatum->primaryKey => $id));
		$this->set('spRiseCanDatum', $this->SpRiseCanDatum->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->SpRiseCanDatum->create();
			if ($this->SpRiseCanDatum->save($this->request->data)) {
				$this->Session->setFlash(__('The sp rise can datum has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sp rise can datum could not be saved. Please, try again.'));
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
		if (!$this->SpRiseCanDatum->exists($id)) {
			throw new NotFoundException(__('Invalid sp rise can datum'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->SpRiseCanDatum->save($this->request->data)) {
				$this->Session->setFlash(__('The sp rise can datum has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sp rise can datum could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('SpRiseCanDatum.' . $this->SpRiseCanDatum->primaryKey => $id));
			$this->request->data = $this->SpRiseCanDatum->find('first', $options);
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
		$this->SpRiseCanDatum->id = $id;
		if (!$this->SpRiseCanDatum->exists()) {
			throw new NotFoundException(__('Invalid sp rise can datum'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->SpRiseCanDatum->delete()) {
			$this->Session->setFlash(__('Sp rise can datum deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Sp rise can datum was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
