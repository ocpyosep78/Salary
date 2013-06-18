<?php
App::uses('QmTokkinNyuryokukanoShozoku', 'Model');

/**
 * QmTokkinNyuryokukanoShozoku Test Case
 *
 */
class QmTokkinNyuryokukanoShozokuTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qm_tokkin_nyuryokukano_shozoku'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QmTokkinNyuryokukanoShozoku = ClassRegistry::init('QmTokkinNyuryokukanoShozoku');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QmTokkinNyuryokukanoShozoku);

		parent::tearDown();
	}

}
