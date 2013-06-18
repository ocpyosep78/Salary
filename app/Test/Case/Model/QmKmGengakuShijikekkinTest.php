<?php
App::uses('QmKmGengakuShijikekkin', 'Model');

/**
 * QmKmGengakuShijikekkin Test Case
 *
 */
class QmKmGengakuShijikekkinTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qm_km_gengaku_shijikekkin'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QmKmGengakuShijikekkin = ClassRegistry::init('QmKmGengakuShijikekkin');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QmKmGengakuShijikekkin);

		parent::tearDown();
	}

}
