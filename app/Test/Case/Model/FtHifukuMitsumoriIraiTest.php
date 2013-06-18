<?php
App::uses('FtHifukuMitsumoriIrai', 'Model');

/**
 * FtHifukuMitsumoriIrai Test Case
 *
 */
class FtHifukuMitsumoriIraiTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ft_hifuku_mitsumori_irai'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->FtHifukuMitsumoriIrai = ClassRegistry::init('FtHifukuMitsumoriIrai');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FtHifukuMitsumoriIrai);

		parent::tearDown();
	}

}
