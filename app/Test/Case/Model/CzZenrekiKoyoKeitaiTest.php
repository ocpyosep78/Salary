<?php
App::uses('CzZenrekiKoyoKeitai', 'Model');

/**
 * CzZenrekiKoyoKeitai Test Case
 *
 */
class CzZenrekiKoyoKeitaiTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.cz_zenreki_koyo_keitai'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CzZenrekiKoyoKeitai = ClassRegistry::init('CzZenrekiKoyoKeitai');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CzZenrekiKoyoKeitai);

		parent::tearDown();
	}

}
