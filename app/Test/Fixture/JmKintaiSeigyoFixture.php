<?php
/**
 * JmKintaiSeigyoFixture
 *
 */
class JmKintaiSeigyoFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'jm_kintai_seigyo';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'EmpAttendanceControlCD' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '勤怠制御CD', 'charset' => 'utf8'),
		'EmpAttendanceInfoFetchUpdated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '勤怠情報取込更新日時d'),
		'EveryMonthPersonalBasicInfoUpdated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '例月人事基本情報更新日時'),
		'YearEndPersonalBasicInfoUpdated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '年末人事基本情報更新日時'),
		'EmpAttendanceRequestNo' => array('type' => 'biginteger', 'null' => true, 'default' => null, 'comment' => '出勤簿申請番号'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'delete_flg' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '削除フラグ : 削除フラグ', 'charset' => 'utf8'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'EmpAttendanceControlCD', 'unique' => 1)
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
			'EmpAttendanceControlCD' => 'Lorem ipsum dolor sit ame',
			'EmpAttendanceInfoFetchUpdated_date' => '2013-06-17 23:23:07',
			'EveryMonthPersonalBasicInfoUpdated_date' => '2013-06-17 23:23:07',
			'YearEndPersonalBasicInfoUpdated_date' => '2013-06-17 23:23:07',
			'EmpAttendanceRequestNo' => '',
			'registered_date' => '2013-06-17 23:23:07',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:23:07',
			'updated_by' => 'Lorem ip',
			'delete_flg' => 'Lorem ipsum dolor sit ame',
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}