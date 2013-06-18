<?php
App::uses('QmSyahoGojokaiKanyu', 'Model');

/**
 * QmSyahoGojokaiKanyu Test Case
 *
 */
class QmSyahoGojokaiKanyuTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qm_syaho_gojokai_kanyu'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QmSyahoGojokaiKanyu = ClassRegistry::init('QmSyahoGojokaiKanyu');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QmSyahoGojokaiKanyu);

		parent::tearDown();
	}

}
