<?php
/**
 * FtReigetsuKojoIraiToshokushinErrorFixture
 *
 */
class FtReigetsuKojoIraiToshokushinErrorFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'ft_reigetsu_kojo_irai_toshokushin_error';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'ErrorDataID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'OriginalDataID' => array('type' => 'integer', 'null' => true, 'default' => null),
		'EmpDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'EmpNo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'NameKana' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'DeductAmoCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'DeductAmo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'ReminderCount' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'ErrorCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'ErrorDataID', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'ErrorDataID' => 1,
			'OriginalDataID' => 1,
			'EmpDiv' => 'Lorem ip',
			'EmpNo' => 'Lorem ip',
			'NameKana' => 'Lorem ipsum dolor ',
			'DeductAmoCD' => 'Lorem ip',
			'DeductAmo' => 'Lorem ip',
			'ReminderCount' => 'Lorem ip',
			'ErrorCD' => 'Lorem ip'
		),
	);

}
