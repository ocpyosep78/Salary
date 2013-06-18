<?php
/**
 * JobDutySalaryCombiMasterFixture
 *
 */
class JobDutySalaryCombiMasterFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'JobDutySalaryCombiMaster';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'JobDutyCD' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 3, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '職務CD : 職務CD', 'charset' => 'utf8'),
		'JobTypeName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '職種名 : 職種名', 'charset' => 'utf8'),
		'JobTypeShortName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '職種略称 : 職種略称', 'charset' => 'utf8'),
		'JobCategoryName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '職務名 : 職務名', 'charset' => 'utf8'),
		'JobCategoryShortName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '職務略称 : 職務略称', 'charset' => 'utf8'),
		'FullTimeSalaryTableCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '常勤給与表CD : 常勤給与表CD', 'charset' => 'utf8'),
		'FullTimeSalaryTableName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '常勤給料表名称 : 常勤給料表名称', 'charset' => 'utf8'),
		'FullTimeSalaryTableShortName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '常勤給料表略称 : 常勤給料表略称', 'charset' => 'utf8'),
		'ReappointSTCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '再任用給料表CD : 再任用給料表CD', 'charset' => 'utf8'),
		'ReappointSTName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '再任用給料表名称 : 再任用給料表名称', 'charset' => 'utf8'),
		'ReappointSTShortName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '再任用給料表略称 : 再任用給料表略称', 'charset' => 'utf8'),
		'RegDate' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'RegisteredBy' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'RegPgID' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録プログラムID : 登録プログラムID', 'charset' => 'utf8'),
		'UpdateDate' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'UpdateBy' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'UpdatePgmID' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新プログラムID : 更新プログラムID', 'charset' => 'utf8'),
		'DeleteFlg' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => '削除フラグ : 削除フラグ'),
		'VersionNo' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => 'バージョンNo : バージョンNo'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'JobDutyCD', 'unique' => 1)
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
			'JobDutyCD' => 'L',
			'JobTypeName' => 'Lorem ipsum dolor ',
			'JobTypeShortName' => 'Lorem ipsum dolor ',
			'JobCategoryName' => 'Lorem ipsum dolor ',
			'JobCategoryShortName' => 'Lorem ipsum dolor ',
			'FullTimeSalaryTableCD' => '',
			'FullTimeSalaryTableName' => 'Lorem ipsum dolor ',
			'FullTimeSalaryTableShortName' => 'Lorem ip',
			'ReappointSTCD' => '',
			'ReappointSTName' => 'Lorem ipsum dolor ',
			'ReappointSTShortName' => 'Lorem ip',
			'RegDate' => '2013-06-17 23:06:32',
			'RegisteredBy' => 'Lorem ip',
			'RegPgID' => 'Lorem ip',
			'UpdateDate' => '2013-06-17 23:06:32',
			'UpdateBy' => 'Lorem ip',
			'UpdatePgmID' => 'Lorem ip',
			'DeleteFlg' => 1,
			'VersionNo' => 1
		),
	);

}
