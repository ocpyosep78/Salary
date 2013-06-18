<?php
/**
 * JtKinmuKyujitsuCalendar2Fixture
 *
 */
class JtKinmuKyujitsuCalendar2Fixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'jt_kinmu_kyujitsu_calendar2';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'CalDate' => array('type' => 'date', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '日付'),
		'FiscalYear' => array('type' => 'integer', 'null' => false, 'default' => null, 'comment' => '年度'),
		'CalYear' => array('type' => 'integer', 'null' => false, 'default' => null, 'comment' => '年'),
		'CalMonth' => array('type' => 'integer', 'null' => false, 'default' => null, 'comment' => '月'),
		'CalDay' => array('type' => 'integer', 'null' => false, 'default' => null, 'comment' => '日'),
		'NoOfWeek' => array('type' => 'integer', 'null' => false, 'default' => null, 'comment' => '週'),
		'NoOfWeek2' => array('type' => 'integer', 'null' => false, 'default' => null, 'comment' => '週2'),
		'HolidayDiv' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '休日区分', 'charset' => 'utf8'),
		'DayOfWeekDiv' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '曜日区分', 'charset' => 'utf8'),
		'NewYearsHolidayFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '年末年始休フラグ', 'charset' => 'utf8'),
		'ObservedHolidayFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '振替休フラグ', 'charset' => 'utf8'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'delete_flg' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '削除フラグ', 'charset' => 'utf8'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'CalDate', 'unique' => 1)
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
			'CalDate' => '2013-06-17',
			'FiscalYear' => 1,
			'CalYear' => 1,
			'CalMonth' => 1,
			'CalDay' => 1,
			'NoOfWeek' => 1,
			'NoOfWeek2' => 1,
			'HolidayDiv' => 'Lorem ipsum dolor sit ame',
			'DayOfWeekDiv' => 'Lorem ipsum dolor sit ame',
			'NewYearsHolidayFlg' => 'Lorem ipsum dolor sit ame',
			'ObservedHolidayFlg' => 'Lorem ipsum dolor sit ame',
			'registered_date' => '2013-06-17 23:28:48',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:28:48',
			'updated_by' => 'Lorem ip',
			'delete_flg' => 'Lorem ipsum dolor sit ame',
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
