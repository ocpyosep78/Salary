<?php
App::uses('AppController', 'Controller');
/**
 * LGovMasters Controller
 *
 * @property LGovMaster $LGovMaster
 */
class LGovMastersController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->LGovMaster->recursive = 0;
		$this->set('lGovMasters', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->LGovMaster->exists($id)) {
			throw new NotFoundException(__('Invalid l gov master'));
		}
		$options = array('conditions' => array('LGovMaster.' . $this->LGovMaster->primaryKey => $id));
		$this->set('lGovMaster', $this->LGovMaster->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->LGovMaster->create();
			if ($this->LGovMaster->save($this->request->data)) {
				$this->Session->setFlash(__('The l gov master has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The l gov master could not be saved. Please, try again.'));
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
		if (!$this->LGovMaster->exists($id)) {
			throw new NotFoundException(__('Invalid l gov master'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->LGovMaster->save($this->request->data)) {
				$this->Session->setFlash(__('The l gov master has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The l gov master could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('LGovMaster.' . $this->LGovMaster->primaryKey => $id));
			$this->request->data = $this->LGovMaster->find('first', $options);
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
		$this->LGovMaster->id = $id;
		if (!$this->LGovMaster->exists()) {
			throw new NotFoundException(__('Invalid l gov master'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->LGovMaster->delete()) {
			$this->Session->setFlash(__('L gov master deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('L gov master was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
