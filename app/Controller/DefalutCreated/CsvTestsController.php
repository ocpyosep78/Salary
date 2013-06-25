<?php
App::uses('AppController', 'Controller');
/**
 * CsvTests Controller
 *
 * @property CsvTest $CsvTest
 */
class CsvTestsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->CsvTest->recursive = 0;
		$this->set('csvTests', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CsvTest->exists($id)) {
			throw new NotFoundException(__('Invalid csv test'));
		}
		$options = array('conditions' => array('CsvTest.' . $this->CsvTest->primaryKey => $id));
		$this->set('csvTest', $this->CsvTest->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CsvTest->create();
			if ($this->CsvTest->save($this->request->data)) {
				$this->Session->setFlash(__('The csv test has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The csv test could not be saved. Please, try again.'));
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
		if (!$this->CsvTest->exists($id)) {
			throw new NotFoundException(__('Invalid csv test'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CsvTest->save($this->request->data)) {
				$this->Session->setFlash(__('The csv test has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The csv test could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CsvTest.' . $this->CsvTest->primaryKey => $id));
			$this->request->data = $this->CsvTest->find('first', $options);
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
		$this->CsvTest->id = $id;
		if (!$this->CsvTest->exists()) {
			throw new NotFoundException(__('Invalid csv test'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->CsvTest->delete()) {
			$this->Session->setFlash(__('Csv test deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Csv test was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
