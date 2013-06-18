<?php
App::uses('AppController', 'Controller');
/**
 * CtMenuChohyos Controller
 *
 * @property CtMenuChohyo $CtMenuChohyo
 */
class CtMenuChohyosController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->CtMenuChohyo->recursive = 0;
		$this->set('ctMenuChohyos', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CtMenuChohyo->exists($id)) {
			throw new NotFoundException(__('Invalid ct menu chohyo'));
		}
		$options = array('conditions' => array('CtMenuChohyo.' . $this->CtMenuChohyo->primaryKey => $id));
		$this->set('ctMenuChohyo', $this->CtMenuChohyo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CtMenuChohyo->create();
			if ($this->CtMenuChohyo->save($this->request->data)) {
				$this->Session->setFlash(__('The ct menu chohyo has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ct menu chohyo could not be saved. Please, try again.'));
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
		if (!$this->CtMenuChohyo->exists($id)) {
			throw new NotFoundException(__('Invalid ct menu chohyo'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CtMenuChohyo->save($this->request->data)) {
				$this->Session->setFlash(__('The ct menu chohyo has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ct menu chohyo could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CtMenuChohyo.' . $this->CtMenuChohyo->primaryKey => $id));
			$this->request->data = $this->CtMenuChohyo->find('first', $options);
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
		$this->CtMenuChohyo->id = $id;
		if (!$this->CtMenuChohyo->exists()) {
			throw new NotFoundException(__('Invalid ct menu chohyo'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->CtMenuChohyo->delete()) {
			$this->Session->setFlash(__('Ct menu chohyo deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Ct menu chohyo was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
