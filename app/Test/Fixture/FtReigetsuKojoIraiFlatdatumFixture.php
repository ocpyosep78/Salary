<?php
/**
 * FtReigetsuKojoIraiFlatdatumFixture
 *
 */
class FtReigetsuKojoIraiFlatdatumFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'KojoRawDataID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'ImportFileType' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'ImportFileID' => array('type' => 'integer', 'null' => true, 'default' => null),
		'DataID' => array('type' => 'integer', 'null' => true, 'default' => null),
		'DataString' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 300, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'ProcStatus' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'registered_date' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'registered_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'delete_flg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'KojoRawDataID', 'unique' => 1)
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
			'KojoRawDataID' => 1,
			'ImportFileType' => 'Lorem ipsum dolor ',
			'ImportFileID' => 1,
			'DataID' => 1,
			'DataString' => 'Lorem ipsum dolor sit amet',
			'ProcStatus' => 'Lorem ip',
			'registered_date' => '2013-06-17 23:18:42',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:18:42',
			'updated_by' => 'Lorem ip',
			'delete_flg' => 'Lorem ip',
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
