<?php
App::uses('QmShikyuKubun', 'Model');

/**
 * QmShikyuKubun Test Case
 *
 */
class QmShikyuKubunTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qm_shikyu_kubun'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QmShikyuKubun = ClassRegistry::init('QmShikyuKubun');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QmShikyuKubun);

		parent::tearDown();
	}

}
