<?php
App::uses('QmKaihiTeigakuParent', 'Model');

/**
 * QmKaihiTeigakuParent Test Case
 *
 */
class QmKaihiTeigakuParentTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qm_kaihi_teigaku_parent'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QmKaihiTeigakuParent = ClassRegistry::init('QmKaihiTeigakuParent');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QmKaihiTeigakuParent);

		parent::tearDown();
	}

}
