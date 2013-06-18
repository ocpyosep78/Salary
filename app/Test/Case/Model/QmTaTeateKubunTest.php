<?php
App::uses('QmTaTeateKubun', 'Model');

/**
 * QmTaTeateKubun Test Case
 *
 */
class QmTaTeateKubunTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qm_ta_teate_kubun'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QmTaTeateKubun = ClassRegistry::init('QmTaTeateKubun');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QmTaTeateKubun);

		parent::tearDown();
	}

}
