<?php
App::uses('AppController', 'Controller');
/**
 * PromoSelParamMasters Controller
 *
 * @property PromoSelParamMaster $PromoSelParamMaster
 */
class PromoSelParamMastersController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->PromoSelParamMaster->recursive = 0;
		$this->set('promoSelParamMasters', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->PromoSelParamMaster->exists($id)) {
			throw new NotFoundException(__('Invalid promo sel param master'));
		}
		$options = array('conditions' => array('PromoSelParamMaster.' . $this->PromoSelParamMaster->primaryKey => $id));
		$this->set('promoSelParamMaster', $this->PromoSelParamMaster->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PromoSelParamMaster->create();
			if ($this->PromoSelParamMaster->save($this->request->data)) {
				$this->Session->setFlash(__('The promo sel param master has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The promo sel param master could not be saved. Please, try again.'));
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
		if (!$this->PromoSelParamMaster->exists($id)) {
			throw new NotFoundException(__('Invalid promo sel param master'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->PromoSelParamMaster->save($this->request->data)) {
				$this->Session->setFlash(__('The promo sel param master has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The promo sel param master could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PromoSelParamMaster.' . $this->PromoSelParamMaster->primaryKey => $id));
			$this->request->data = $this->PromoSelParamMaster->find('first', $options);
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
		$this->PromoSelParamMaster->id = $id;
		if (!$this->PromoSelParamMaster->exists()) {
			throw new NotFoundException(__('Invalid promo sel param master'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->PromoSelParamMaster->delete()) {
			$this->Session->setFlash(__('Promo sel param master deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Promo sel param master was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
