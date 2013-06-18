<?php
App::uses('AppController', 'Controller');
/**
 * CtShozokuKengens Controller
 *
 * @property CtShozokuKengen $CtShozokuKengen
 */
class CtShozokuKengensController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->CtShozokuKengen->recursive = 0;
		$this->set('ctShozokuKengens', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CtShozokuKengen->exists($id)) {
			throw new NotFoundException(__('Invalid ct shozoku kengen'));
		}
		$options = array('conditions' => array('CtShozokuKengen.' . $this->CtShozokuKengen->primaryKey => $id));
		$this->set('ctShozokuKengen', $this->CtShozokuKengen->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CtShozokuKengen->create();
			if ($this->CtShozokuKengen->save($this->request->data)) {
				$this->Session->setFlash(__('The ct shozoku kengen has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ct shozoku kengen could not be saved. Please, try again.'));
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
		if (!$this->CtShozokuKengen->exists($id)) {
			throw new NotFoundException(__('Invalid ct shozoku kengen'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CtShozokuKengen->save($this->request->data)) {
				$this->Session->setFlash(__('The ct shozoku kengen has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ct shozoku kengen could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CtShozokuKengen.' . $this->CtShozokuKengen->primaryKey => $id));
			$this->request->data = $this->CtShozokuKengen->find('first', $options);
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
		$this->CtShozokuKengen->id = $id;
		if (!$this->CtShozokuKengen->exists()) {
			throw new NotFoundException(__('Invalid ct shozoku kengen'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->CtShozokuKengen->delete()) {
			$this->Session->setFlash(__('Ct shozoku kengen deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Ct shozoku kengen was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->CtShozokuKengen->recursive = 0;
		$this->set('ctShozokuKengens', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->CtShozokuKengen->exists($id)) {
			throw new NotFoundException(__('Invalid ct shozoku kengen'));
		}
		$options = array('conditions' => array('CtShozokuKengen.' . $this->CtShozokuKengen->primaryKey => $id));
		$this->set('ctShozokuKengen', $this->CtShozokuKengen->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->CtShozokuKengen->create();
			if ($this->CtShozokuKengen->save($this->request->data)) {
				$this->Session->setFlash(__('The ct shozoku kengen has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ct shozoku kengen could not be saved. Please, try again.'));
			}
		}
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->CtShozokuKengen->exists($id)) {
			throw new NotFoundException(__('Invalid ct shozoku kengen'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CtShozokuKengen->save($this->request->data)) {
				$this->Session->setFlash(__('The ct shozoku kengen has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ct shozoku kengen could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CtShozokuKengen.' . $this->CtShozokuKengen->primaryKey => $id));
			$this->request->data = $this->CtShozokuKengen->find('first', $options);
		}
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->CtShozokuKengen->id = $id;
		if (!$this->CtShozokuKengen->exists()) {
			throw new NotFoundException(__('Invalid ct shozoku kengen'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->CtShozokuKengen->delete()) {
			$this->Session->setFlash(__('Ct shozoku kengen deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Ct shozoku kengen was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
