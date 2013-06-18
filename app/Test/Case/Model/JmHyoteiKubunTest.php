<?php
App::uses('JmHyoteiKubun', 'Model');

/**
 * JmHyoteiKubun Test Case
 *
 */
class JmHyoteiKubunTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.jm_hyotei_kubun'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->JmHyoteiKubun = ClassRegistry::init('JmHyoteiKubun');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->JmHyoteiKubun);

		parent::tearDown();
	}

}
