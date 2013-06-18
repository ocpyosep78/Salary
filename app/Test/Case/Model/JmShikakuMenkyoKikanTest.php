<?php
App::uses('JmShikakuMenkyoKikan', 'Model');

/**
 * JmShikakuMenkyoKikan Test Case
 *
 */
class JmShikakuMenkyoKikanTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.jm_shikaku_menkyo_kikan'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->JmShikakuMenkyoKikan = ClassRegistry::init('JmShikakuMenkyoKikan');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->JmShikakuMenkyoKikan);

		parent::tearDown();
	}

}
