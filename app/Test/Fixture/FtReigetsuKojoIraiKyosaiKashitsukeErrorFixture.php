<?php
/**
 * FtReigetsuKojoIraiKyosaiKashitsukeErrorFixture
 *
 */
class FtReigetsuKojoIraiKyosaiKashitsukeErrorFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'ft_reigetsu_kojo_irai_kyosai_kashitsuke_error';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'ErrorDataID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'OriginalDataID' => array('type' => 'integer', 'null' => true, 'default' => null),
		'DataDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'EmpNo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'Type' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'DeductAmo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'ReasonCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'LoanNoType' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'LoanNoYear' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'LoanNo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'kariukeFamilyNameKana' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'kariukeFirstNameKana' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'LoanAmo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'ReminderCount' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'HesitReminderCnt' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'MovementDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
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
			'DataDiv' => 'Lorem ip',
			'EmpNo' => 'Lorem ip',
			'Type' => 'Lorem ip',
			'DeductAmo' => 'Lorem ip',
			'ReasonCD' => 'Lorem ip',
			'LoanNoType' => 'Lorem ip',
			'LoanNoYear' => 'Lorem ip',
			'LoanNo' => 'Lorem ip',
			'kariukeFamilyNameKana' => 'Lorem ipsum dolor ',
			'kariukeFirstNameKana' => 'Lorem ipsum dolor ',
			'LoanAmo' => 'Lorem ip',
			'ReminderCount' => 'Lorem ip',
			'HesitReminderCnt' => 'Lorem ip',
			'MovementDiv' => 'Lorem ip'
		),
	);

}
