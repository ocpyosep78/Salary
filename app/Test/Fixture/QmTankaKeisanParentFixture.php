<?php
/**
 * QmTankaKeisanParentFixture
 *
 */
class QmTankaKeisanParentFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'qm_tanka_keisan_parent';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'FiscalYear' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '年度'),
		'SalaryTypeCD' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 2, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '給与体系CD', 'charset' => 'utf8'),
		'WeekPerYear' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '年間週数'),
		'WorkingTimesOfWeekHour' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '週の勤務時間 : 時間 '),
		'WorkingTimesOfWeekMinute' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '週の勤務時間 : 分'),
		'HolidayPerYear' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '年間休日数'),
		'WorkingTimesOfDayHour' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '一日の勤務時間 : 時間'),
		'WorkingTimesOfDayMinute' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '一日の勤務時間 : 分'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'delete_flg' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '削除フラグ : 削除フラグ', 'charset' => 'utf8'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('FiscalYear', 'SalaryTypeCD'), 'unique' => 1)
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
			'FiscalYear' => 1,
			'SalaryTypeCD' => '',
			'WeekPerYear' => 1,
			'WorkingTimesOfWeekHour' => 1,
			'WorkingTimesOfWeekMinute' => 1,
			'HolidayPerYear' => 1,
			'WorkingTimesOfDayHour' => 1,
			'WorkingTimesOfDayMinute' => 1,
			'registered_date' => '2013-06-17 23:44:10',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:44:10',
			'updated_by' => 'Lorem ip',
			'delete_flg' => 'Lorem ipsum dolor sit ame',
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
