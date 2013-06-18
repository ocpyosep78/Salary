<?php
/**
 * FtReigetsuKojoIraiZaikeichochikuErrorFixture
 *
 */
class FtReigetsuKojoIraiZaikeichochikuErrorFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'ft_reigetsu_kojo_irai_zaikeichochiku_error';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'ErrorDataID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'OriginalDataID' => array('type' => 'integer', 'null' => true, 'default' => null),
		'RecordDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'EmployerNo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'EmpNo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'NameKana' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'DeductSchAmo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'zaikeiDeduct_Payment' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'zaikeiDeduct_Diligence' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'zaikeiDeduct_nj_Payment' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'zaikeiDeduct_nj_Diligence' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
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
			'RecordDiv' => 'Lorem ip',
			'EmployerNo' => 'Lorem ip',
			'EmpNo' => 'Lorem ip',
			'NameKana' => 'Lorem ipsum dolor ',
			'DeductSchAmo' => 'Lorem ip',
			'zaikeiDeduct_Payment' => 'Lorem ip',
			'zaikeiDeduct_Diligence' => 'Lorem ip',
			'zaikeiDeduct_nj_Payment' => 'Lorem ip',
			'zaikeiDeduct_nj_Diligence' => 'Lorem ip',
			'ErrorCD' => 'Lorem ip'
		),
	);

}
