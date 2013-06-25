<?php
App::uses('AppController', 'Controller');
/**
 * PromoTypeMasters Controller
 *
 * @property PromoTypeMaster $PromoTypeMaster
 */
class PromoTypeMastersController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->PromoTypeMaster->recursive = 0;
		$this->set('promoTypeMasters', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->PromoTypeMaster->exists($id)) {
			throw new NotFoundException(__('Invalid promo type master'));
		}
		$options = array('conditions' => array('PromoTypeMaster.' . $this->PromoTypeMaster->primaryKey => $id));
		$this->set('promoTypeMaster', $this->PromoTypeMaster->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PromoTypeMaster->create();
			if ($this->PromoTypeMaster->save($this->request->data)) {
				$this->Session->setFlash(__('The promo type master has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The promo type master could not be saved. Please, try again.'));
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
		if (!$this->PromoTypeMaster->exists($id)) {
			throw new NotFoundException(__('Invalid promo type master'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->PromoTypeMaster->save($this->request->data)) {
				$this->Session->setFlash(__('The promo type master has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The promo type master could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PromoTypeMaster.' . $this->PromoTypeMaster->primaryKey => $id));
			$this->request->data = $this->PromoTypeMaster->find('first', $options);
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
		$this->PromoTypeMaster->id = $id;
		if (!$this->PromoTypeMaster->exists()) {
			throw new NotFoundException(__('Invalid promo type master'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->PromoTypeMaster->delete()) {
			$this->Session->setFlash(__('Promo type master deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Promo type master was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
