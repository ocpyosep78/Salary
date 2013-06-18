<?php
App::uses('QmSyoninkyuChosei', 'Model');

/**
 * QmSyoninkyuChosei Test Case
 *
 */
class QmSyoninkyuChoseiTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qm_syoninkyu_chosei'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QmSyoninkyuChosei = ClassRegistry::init('QmSyoninkyuChosei');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QmSyoninkyuChosei);

		parent::tearDown();
	}

}
