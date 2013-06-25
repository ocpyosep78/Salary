<?php
App::uses('AppController', 'Controller');
/**
 * CtKengenMenus Controller
 *
 * @property CtKengenMenu $CtKengenMenu
 */
class CtKengenMenusController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->CtKengenMenu->recursive = 0;
		$this->set('ctKengenMenus', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CtKengenMenu->exists($id)) {
			throw new NotFoundException(__('Invalid ct kengen menu'));
		}
		$options = array('conditions' => array('CtKengenMenu.' . $this->CtKengenMenu->primaryKey => $id));
		$this->set('ctKengenMenu', $this->CtKengenMenu->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CtKengenMenu->create();
			if ($this->CtKengenMenu->save($this->request->data)) {
				$this->Session->setFlash(__('The ct kengen menu has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ct kengen menu could not be saved. Please, try again.'));
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
		if (!$this->CtKengenMenu->exists($id)) {
			throw new NotFoundException(__('Invalid ct kengen menu'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CtKengenMenu->save($this->request->data)) {
				$this->Session->setFlash(__('The ct kengen menu has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ct kengen menu could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CtKengenMenu.' . $this->CtKengenMenu->primaryKey => $id));
			$this->request->data = $this->CtKengenMenu->find('first', $options);
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
		$this->CtKengenMenu->id = $id;
		if (!$this->CtKengenMenu->exists()) {
			throw new NotFoundException(__('Invalid ct kengen menu'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->CtKengenMenu->delete()) {
			$this->Session->setFlash(__('Ct kengen menu deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Ct kengen menu was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
