<?php
App::uses('QmSeisoKasan', 'Model');

/**
 * QmSeisoKasan Test Case
 *
 */
class QmSeisoKasanTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qm_seiso_kasan'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QmSeisoKasan = ClassRegistry::init('QmSeisoKasan');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QmSeisoKasan);

		parent::tearDown();
	}

}
