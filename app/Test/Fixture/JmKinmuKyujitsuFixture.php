<?php
/**
 * JmKinmuKyujitsuFixture
 *
 */
class JmKinmuKyujitsuFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'jm_kinmu_kyujitsu';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'WorkingHolidayID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '勤務休日マスタID'),
		'EffectiveYear' => array('type' => 'integer', 'null' => false, 'default' => null, 'comment' => '開始年'),
		'ExpiredYear' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '終了年'),
		'HolidayName' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 40, 'key' => 'index', 'collate' => 'utf8_general_ci', 'comment' => '休日名称', 'charset' => 'utf8'),
		'HolidaySettingDiv' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '休日設定区分', 'charset' => 'utf8'),
		'CalMonth' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '月'),
		'CalDay' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '日'),
		'NoOfWeek' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '週'),
		'DayOfWeekDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '曜日区分', 'charset' => 'utf8'),
		'StartMonth' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '期間開始月'),
		'StartDay' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '期間開始日'),
		'EndMonth' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '期間終了月'),
		'EndDay' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '期間終了日'),
		'NewYearsHolidayFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '年末年始休フラグ', 'charset' => 'utf8'),
		'ObservedHolidayFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '振替休フラグ', 'charset' => 'utf8'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'delete_flg' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '削除フラグ : 削除フラグ', 'charset' => 'utf8'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'WorkingHolidayID', 'unique' => 1),
			'UK_HolidayName_EffectiveYear' => array('column' => array('HolidayName', 'EffectiveYear'), 'unique' => 0)
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
			'WorkingHolidayID' => 1,
			'EffectiveYear' => 1,
			'ExpiredYear' => 1,
			'HolidayName' => 'Lorem ipsum dolor sit amet',
			'HolidaySettingDiv' => 'Lorem ipsum dolor sit ame',
			'CalMonth' => 1,
			'CalDay' => 1,
			'NoOfWeek' => 1,
			'DayOfWeekDiv' => 'Lorem ipsum dolor sit ame',
			'StartMonth' => 1,
			'StartDay' => 1,
			'EndMonth' => 1,
			'EndDay' => 1,
			'NewYearsHolidayFlg' => 'Lorem ipsum dolor sit ame',
			'ObservedHolidayFlg' => 'Lorem ipsum dolor sit ame',
			'registered_date' => '2013-06-17 23:22:59',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:22:59',
			'updated_by' => 'Lorem ip',
			'delete_flg' => 'Lorem ipsum dolor sit ame',
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
