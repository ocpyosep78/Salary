<?php
App::uses('QmNoritukyuChinginSyozoku', 'Model');

/**
 * QmNoritukyuChinginSyozoku Test Case
 *
 */
class QmNoritukyuChinginSyozokuTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qm_noritukyu_chingin_syozoku'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QmNoritukyuChinginSyozoku = ClassRegistry::init('QmNoritukyuChinginSyozoku');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QmNoritukyuChinginSyozoku);

		parent::tearDown();
	}

}
