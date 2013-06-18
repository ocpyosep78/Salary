<?php
App::uses('JmShinseiJiyuSeigyo', 'Model');

/**
 * JmShinseiJiyuSeigyo Test Case
 *
 */
class JmShinseiJiyuSeigyoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.jm_shinsei_jiyu_seigyo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->JmShinseiJiyuSeigyo = ClassRegistry::init('JmShinseiJiyuSeigyo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->JmShinseiJiyuSeigyo);

		parent::tearDown();
	}

}
