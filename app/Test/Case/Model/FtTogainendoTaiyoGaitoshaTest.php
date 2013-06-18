<?php
App::uses('FtTogainendoTaiyoGaitosha', 'Model');

/**
 * FtTogainendoTaiyoGaitosha Test Case
 *
 */
class FtTogainendoTaiyoGaitoshaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ft_togainendo_taiyo_gaitosha'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->FtTogainendoTaiyoGaitosha = ClassRegistry::init('FtTogainendoTaiyoGaitosha');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FtTogainendoTaiyoGaitosha);

		parent::tearDown();
	}

}
