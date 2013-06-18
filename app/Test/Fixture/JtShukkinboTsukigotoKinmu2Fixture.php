<?php
/**
 * JtShukkinboTsukigotoKinmu2Fixture
 *
 */
class JtShukkinboTsukigotoKinmu2Fixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'jt_shukkinbo_tsukigoto_kinmu2';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'EmpMonthlyAttendInfoID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '職員月毎勤務情報ID'),
		'PersonID' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '個人ID'),
		'EmpNo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 8, 'key' => 'index', 'collate' => 'utf8_general_ci', 'comment' => '職員番号', 'charset' => 'utf8'),
		'FiscalYear' => array('type' => 'integer', 'null' => false, 'default' => null, 'comment' => '年度'),
		'AttendRecYM' => array('type' => 'date', 'null' => false, 'default' => null, 'comment' => '年月度'),
		'NetReqWorkDays' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '要勤務日数'),
		'WorkDays' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '勤務日数'),
		'PayrollUptakeFlg' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '給与取込フラグ'),
		'Over60TimesBeforeDateStart' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '超勤開始日時'),
		'Over60TimesBeforeDateEnd' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '超勤終了日時'),
		'WorkingTimes125' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '125時間数'),
		'WorkingTimes150' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '150時間数'),
		'WorkingTimes135' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '135時間数'),
		'WorkingTimes160' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '160時間数'),
		'WorkingTimes100' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '100時間数'),
		'WorkingTimes25' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '25時間数'),
		'WorkingTimes25PrevMonth' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '前月25時間数'),
		'WorkingHolidayTimes' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '休日給時間数'),
		'NightShiftWorkingTimes' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '夜勤時間数'),
		'Over60TimesDateStart' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '超勤60超開始日時'),
		'Over60TimesDateEnd' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '超勤60超終了日時'),
		'Over60Times15010050' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '60超150/100+50時間数'),
		'Over60Times15010025' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '60超150/125+25時間数'),
		'Over60Times15010015' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '60超150/135+15時間数'),
		'Over60Times17550' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '60超175/125+50時間数'),
		'Over60Times17525' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '60超175/150+25時間数'),
		'Over60Times17515' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '60超175/160+15時間数'),
		'Over60TimesWorkingTimes50' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '60超50時間数'),
		'Over60Times50' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '60超前月50時間数'),
		'MgrSpAmo_Over6h' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '管理職特勤6時間超回数'),
		'MgrSpAmo_Less6h' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '管理職特勤6時間以下回数'),
		'NightDutyNum_Over5h' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '宿日直5時間以上回数'),
		'NightDutyNum_Less5h' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '宿日直5時間未満回数'),
		'NewYearNightDutyNum_Over5h' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '宿日直年末年始5時間以上回数'),
		'NewYearNightDutyNum_Less5h' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '宿日直年末年始5時間未満回数'),
		'TravelResults' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => 10, 'comment' => '交通実費'),
		'IncidentalTravelExpenses' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => 10, 'comment' => '旅行雑費'),
		'RestableTimes_150125' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '代替休暇取得時間150125'),
		'RestableTimes_150135' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '代替休暇取得時間150135'),
		'RestableTimes_150100' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '代替休暇取得時間150100'),
		'RestableTimes_175150' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '代替休暇取得時間175150'),
		'RestableTimes_175160' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '代替休暇取得時間175160'),
		'RestableTimes_5025' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '代替休暇取得時間5025'),
		'RestableTimes_5025Pre' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '代替休暇取得時間5025前月'),
		'EmpBasicInformationID' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '人事基本情報ID'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'latest_flg' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '最新・仮登録フラグ : 最新・仮登録フラグ'),
		'last_key' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '最後キー : 最後キー'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'EmpMonthlyAttendInfoID', 'unique' => 1),
			'UK_EmpNo_AttendRecYM' => array('column' => array('EmpNo', 'AttendRecYM'), 'unique' => 1)
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
			'EmpMonthlyAttendInfoID' => 1,
			'PersonID' => 1,
			'EmpNo' => 'Lorem ',
			'FiscalYear' => 1,
			'AttendRecYM' => '2013-06-17',
			'NetReqWorkDays' => 1,
			'WorkDays' => 1,
			'PayrollUptakeFlg' => 1,
			'Over60TimesBeforeDateStart' => '2013-06-17 23:30:29',
			'Over60TimesBeforeDateEnd' => '2013-06-17 23:30:29',
			'WorkingTimes125' => 1,
			'WorkingTimes150' => 1,
			'WorkingTimes135' => 1,
			'WorkingTimes160' => 1,
			'WorkingTimes100' => 1,
			'WorkingTimes25' => 1,
			'WorkingTimes25PrevMonth' => 1,
			'WorkingHolidayTimes' => 1,
			'NightShiftWorkingTimes' => 1,
			'Over60TimesDateStart' => '2013-06-17 23:30:29',
			'Over60TimesDateEnd' => '2013-06-17 23:30:29',
			'Over60Times15010050' => 1,
			'Over60Times15010025' => 1,
			'Over60Times15010015' => 1,
			'Over60Times17550' => 1,
			'Over60Times17525' => 1,
			'Over60Times17515' => 1,
			'Over60TimesWorkingTimes50' => 1,
			'Over60Times50' => 1,
			'MgrSpAmo_Over6h' => 1,
			'MgrSpAmo_Less6h' => 1,
			'NightDutyNum_Over5h' => 1,
			'NightDutyNum_Less5h' => 1,
			'NewYearNightDutyNum_Over5h' => 1,
			'NewYearNightDutyNum_Less5h' => 1,
			'TravelResults' => 1,
			'IncidentalTravelExpenses' => 1,
			'RestableTimes_150125' => 1,
			'RestableTimes_150135' => 1,
			'RestableTimes_150100' => 1,
			'RestableTimes_175150' => 1,
			'RestableTimes_175160' => 1,
			'RestableTimes_5025' => 1,
			'RestableTimes_5025Pre' => 1,
			'EmpBasicInformationID' => 1,
			'registered_date' => '2013-06-17 23:30:29',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:30:29',
			'updated_by' => 'Lorem ip',
			'latest_flg' => 1,
			'last_key' => 1,
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
