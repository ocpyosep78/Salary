<?php
/**
 * FtReigetsuKojoIraiAdachiRokinErrorFixture
 *
 */
class FtReigetsuKojoIraiAdachiRokinErrorFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'ft_reigetsu_kojo_irai_adachi_rokin_error';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'ErrorDataID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'OriginalDataID' => array('type' => 'integer', 'null' => true, 'default' => null),
		'DeductYM' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'OfficeNo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'EmpNo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'NameKana' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'SavingAmount' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'RefundAmount' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'ProcCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
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
			'DeductYM' => 'Lorem ipsum dolor ',
			'OfficeNo' => 'Lorem ipsum dolor ',
			'EmpNo' => 'Lorem ip',
			'NameKana' => 'Lorem ipsum dolor ',
			'SavingAmount' => 'Lorem ipsum dolor ',
			'RefundAmount' => 'Lorem ipsum dolor ',
			'ProcCD' => 'Lorem ip'
		),
	);

}
