<?php
App::uses('AppController', 'Controller');
/**
 * Aaaaaaaaaaaaaaaaaaaaaaaaas Controller
 *
 * @property Aaaaaaaaaaaaaaaaaaaaaaaaa $Aaaaaaaaaaaaaaaaaaaaaaaaa
 */
class AaaaaaaaaaaaaaaaaaaaaaaaasController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Aaaaaaaaaaaaaaaaaaaaaaaaa->recursive = 0;
		$this->set('aaaaaaaaaaaaaaaaaaaaaaaaas', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Aaaaaaaaaaaaaaaaaaaaaaaaa->exists($id)) {
			throw new NotFoundException(__('Invalid aaaaaaaaaaaaaaaaaaaaaaaaa'));
		}
		$options = array('conditions' => array('Aaaaaaaaaaaaaaaaaaaaaaaaa.' . $this->Aaaaaaaaaaaaaaaaaaaaaaaaa->primaryKey => $id));
		$this->set('aaaaaaaaaaaaaaaaaaaaaaaaa', $this->Aaaaaaaaaaaaaaaaaaaaaaaaa->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Aaaaaaaaaaaaaaaaaaaaaaaaa->create();
			if ($this->Aaaaaaaaaaaaaaaaaaaaaaaaa->save($this->request->data)) {
				$this->Session->setFlash(__('The aaaaaaaaaaaaaaaaaaaaaaaaa has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The aaaaaaaaaaaaaaaaaaaaaaaaa could not be saved. Please, try again.'));
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
		if (!$this->Aaaaaaaaaaaaaaaaaaaaaaaaa->exists($id)) {
			throw new NotFoundException(__('Invalid aaaaaaaaaaaaaaaaaaaaaaaaa'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Aaaaaaaaaaaaaaaaaaaaaaaaa->save($this->request->data)) {
				$this->Session->setFlash(__('The aaaaaaaaaaaaaaaaaaaaaaaaa has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The aaaaaaaaaaaaaaaaaaaaaaaaa could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Aaaaaaaaaaaaaaaaaaaaaaaaa.' . $this->Aaaaaaaaaaaaaaaaaaaaaaaaa->primaryKey => $id));
			$this->request->data = $this->Aaaaaaaaaaaaaaaaaaaaaaaaa->find('first', $options);
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
		$this->Aaaaaaaaaaaaaaaaaaaaaaaaa->id = $id;
		if (!$this->Aaaaaaaaaaaaaaaaaaaaaaaaa->exists()) {
			throw new NotFoundException(__('Invalid aaaaaaaaaaaaaaaaaaaaaaaaa'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Aaaaaaaaaaaaaaaaaaaaaaaaa->delete()) {
			$this->Session->setFlash(__('Aaaaaaaaaaaaaaaaaaaaaaaaa deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Aaaaaaaaaaaaaaaaaaaaaaaaa was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
