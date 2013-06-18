<?php
App::uses('FtTaikaiKinenhinryoSanshutsu', 'Model');

/**
 * FtTaikaiKinenhinryoSanshutsu Test Case
 *
 */
class FtTaikaiKinenhinryoSanshutsuTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ft_taikai_kinenhinryo_sanshutsu'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->FtTaikaiKinenhinryoSanshutsu = ClassRegistry::init('FtTaikaiKinenhinryoSanshutsu');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FtTaikaiKinenhinryoSanshutsu);

		parent::tearDown();
	}

}
