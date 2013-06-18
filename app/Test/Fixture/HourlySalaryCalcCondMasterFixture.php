<?php
/**
 * HourlySalaryCalcCondMasterFixture
 *
 */
class HourlySalaryCalcCondMasterFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'HourlySalaryCalcCondMaster';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'FiscalYear' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '年度 : 年度'),
		'SalaryTypeCD' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 2, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '給与体系CD : 給与体系CD', 'charset' => 'utf8'),
		'WeekPerYear' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '年間週数 : 年間週数'),
		'WorkingTimesOfWeekHour' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '週の勤務時間(時間) : 週の勤務時間(時間)'),
		'WorkingTimesOfWeekMinite' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '週の勤務時間(分) : 週の勤務時間(分)'),
		'HolidayPerYear' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '年間休日数 : 年間休日数'),
		'WorkingTimesOfDayHour' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '一日の勤務時間(時間) : 一日の勤務時間(時間)'),
		'WorkingTimesOfDayMinite' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '一日の勤務時間(分) : 一日の勤務時間(分)'),
		'RegDate' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'RegisteredBy' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'RegPgID' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録プログラムID : 登録プログラムID', 'charset' => 'utf8'),
		'UpdateDate' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'UpdateBy' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'UpdatePgmID' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新プログラムID : 更新プログラムID', 'charset' => 'utf8'),
		'DeleteFlg' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => '削除フラグ : 削除フラグ'),
		'VersionNo' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => 'バージョンNo : バージョンNo'),
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
			'WorkingTimesOfWeekMinite' => 1,
			'HolidayPerYear' => 1,
			'WorkingTimesOfDayHour' => 1,
			'WorkingTimesOfDayMinite' => 1,
			'RegDate' => '2013-06-17 23:06:01',
			'RegisteredBy' => 'Lorem ip',
			'RegPgID' => 'Lorem ip',
			'UpdateDate' => '2013-06-17 23:06:01',
			'UpdateBy' => 'Lorem ip',
			'UpdatePgmID' => 'Lorem ip',
			'DeleteFlg' => 1,
			'VersionNo' => 1
		),
	);

}
