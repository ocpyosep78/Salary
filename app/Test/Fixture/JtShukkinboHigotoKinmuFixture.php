<?php
/**
 * JtShukkinboHigotoKinmuFixture
 *
 */
class JtShukkinboHigotoKinmuFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'jt_shukkinbo_higoto_kinmu';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'EmpDailyAttendInfoID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '職員日毎勤務情報ID'),
		'PersonID' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '個人ID'),
		'EmpNo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 8, 'key' => 'index', 'collate' => 'utf8_general_ci', 'comment' => '職員番号', 'charset' => 'utf8'),
		'AttendRecYM' => array('type' => 'integer', 'null' => false, 'default' => null, 'comment' => '年月度'),
		'CalDate' => array('type' => 'date', 'null' => false, 'default' => null, 'comment' => 'カレンダー日付'),
		'NoOfWeek' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '週'),
		'NoOfWeek2' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '週2'),
		'DayOfTheWeekDiv' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '曜日区分', 'charset' => 'utf8'),
		'HolidayDiv' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '休日区分', 'charset' => 'utf8'),
		'HolidayPatternCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '休日形態CD', 'charset' => 'utf8'),
		'WorkingPatternCD' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '勤務形態CD', 'charset' => 'utf8'),
		'HolidayChangeFlg' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '休日変更フラグ：勤怠連携または出勤簿登録にて休日を変更した場合、1'),
		'InTime' => array('type' => 'time', 'null' => true, 'default' => null, 'comment' => '出勤時間'),
		'OutTime' => array('type' => 'time', 'null' => true, 'default' => null, 'comment' => '退庁時間'),
		'OverTimeOrder_StartTime' => array('type' => 'time', 'null' => true, 'default' => null, 'comment' => '超勤命令の開始時間'),
		'OverTimeOrder_EndTime' => array('type' => 'time', 'null' => true, 'default' => null, 'comment' => '超勤命令の終了時間'),
		'Break_StartTime' => array('type' => 'time', 'null' => true, 'default' => null, 'comment' => '休憩の開始時間'),
		'Break_EndTime' => array('type' => 'time', 'null' => true, 'default' => null, 'comment' => '休憩の終了時間'),
		'OverTime_StartTime' => array('type' => 'time', 'null' => true, 'default' => null, 'comment' => '超過勤務の実績開始時間'),
		'OverTime_EndTime' => array('type' => 'time', 'null' => true, 'default' => null, 'comment' => '超過勤務の実績終了時間'),
		'Travel_StartTime' => array('type' => 'time', 'null' => true, 'default' => null, 'comment' => '旅行の開始時間'),
		'Travel_EndTime' => array('type' => 'time', 'null' => true, 'default' => null, 'comment' => '旅行の終了時間'),
		'DutyDetail' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 80, 'collate' => 'utf8_general_ci', 'comment' => '勤務内容', 'charset' => 'utf8'),
		'TravelRouteAndRemarks' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 500, 'collate' => 'utf8_general_ci', 'comment' => '旅行経路・摘要', 'charset' => 'utf8'),
		'TravelResults' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => 10, 'comment' => '交通実費'),
		'IncidentalTravelExpenses' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => 10, 'comment' => '旅行雑費'),
		'WorkingHours125' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '125時間数'),
		'WorkingMinutes125' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '125分数'),
		'WorkingHours150' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '150時間数'),
		'WorkingMinutes150' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '150分数'),
		'WorkingHours135' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '135時間数'),
		'WorkingMinutes135' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '135分数'),
		'WorkingHours160' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '160時間数'),
		'WorkingMinutes160' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '160分数'),
		'WorkingHours100' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '100時間数'),
		'WorkingMinutes100' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '100分数'),
		'WorkingHours25' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '25時間数'),
		'WorkingMinutes25' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '25分数'),
		'WorkingHours25PrevMonth' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '前月25時間数'),
		'WorkingMinutes25PrevMonth' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '前月25分数'),
		'NightShiftHours' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '夜勤時間数'),
		'NightShiftMinutes' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '夜勤分数'),
		'WorkingHolidayHours' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '休日給時間数'),
		'WorkingHolidayMinutes' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '休日給分数'),
		'MgrSpAmo_Over6h' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '管理職特勤6時間超回数'),
		'MgrSpAmo_Less6h' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '管理職特勤6時間以下回数'),
		'NightDutyNum_Over5h' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '宿日直5時間以上回数'),
		'NightDutyNum_Less5h' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '宿日直5時間未満回数'),
		'NewYearNightDutyNum_Over5h' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '宿日直年末年始5時間以上回数'),
		'NewYearNightDutyNum_Less5h' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '宿日直年末年始5時間未満回数'),
		'RestableHours_150125' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '代替休暇取得時間数150125'),
		'RestableMinutes_150125' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '代替休暇取得時間　分数150125'),
		'RestableHours_150135' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '代替休暇取得時間数150135'),
		'RestableMinutes_150135' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '代替休暇取得時間　分数150135'),
		'RestableHours_150100' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '代替休暇取得時間数150100'),
		'RestableMinutes_150100' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '代替休暇取得時間　分数150100'),
		'RestableHours_175150' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '代替休暇取得時間数175150'),
		'RestableMinutes_175150' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '代替休暇取得時間　分数175150'),
		'RestableHours_175160' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '代替休暇取得時間数175160'),
		'RestableMinutes_175160' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '代替休暇取得時間　分数175160'),
		'RestableHours_5025' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '代替休暇取得時間数5025'),
		'RestableMinutes_5025' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '代替休暇取得時間　分数5025'),
		'RestableHours_5025Pre' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '代替休暇取得時間数5025前月'),
		'RestableMinutes_5025Pre' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '代替休暇取得時間　分数5025前月'),
		'WorkingTimes125' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '125時間'),
		'WorkingTimes150' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '150時間'),
		'WorkingTimes135' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '135時間'),
		'WorkingTimes160' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '160時間'),
		'WorkingTimes100' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '100時間'),
		'WorkingTimes25' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '25時間'),
		'WorkingTimes25PrevMonth' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '前月25時間'),
		'NightShiftTimes' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '夜勤時間'),
		'WorkingHolidayTimes' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '休日給時間'),
		'RestableTimes_15012' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '代替休暇取得時間150125'),
		'RestableTimes_150135' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '代替休暇取得時間150135'),
		'RestableTimes_150100' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '代替休暇取得時間150100'),
		'RestableTimes_175150' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '代替休暇取得時間175150'),
		'RestableTimes_175160' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '代替休暇取得時間175160'),
		'RestableTimes_5025' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '代替休暇取得時間5025'),
		'RestableTimes_5025Pre' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '代替休暇取得時間5025前月'),
		'EmpMonthlyAttendInfoID' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '職員月毎勤務情報ID'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'latest_flg' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '最新・仮登録フラグ : 最新・仮登録フラグ'),
		'last_key' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '最後キー : 最後キー'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'EmpDailyAttendInfoID', 'unique' => 1),
			'UK_EmpNo_CalDate' => array('column' => array('EmpNo', 'CalDate'), 'unique' => 1)
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
			'EmpDailyAttendInfoID' => 1,
			'PersonID' => 1,
			'EmpNo' => 'Lorem ',
			'AttendRecYM' => 1,
			'CalDate' => '2013-06-17',
			'NoOfWeek' => 1,
			'NoOfWeek2' => 1,
			'DayOfTheWeekDiv' => 'Lorem ipsum dolor sit ame',
			'HolidayDiv' => 'Lorem ipsum dolor sit ame',
			'HolidayPatternCD' => '',
			'WorkingPatternCD' => '',
			'HolidayChangeFlg' => 1,
			'InTime' => '23:29:35',
			'OutTime' => '23:29:35',
			'OverTimeOrder_StartTime' => '23:29:35',
			'OverTimeOrder_EndTime' => '23:29:35',
			'Break_StartTime' => '23:29:35',
			'Break_EndTime' => '23:29:35',
			'OverTime_StartTime' => '23:29:35',
			'OverTime_EndTime' => '23:29:35',
			'Travel_StartTime' => '23:29:35',
			'Travel_EndTime' => '23:29:35',
			'DutyDetail' => 'Lorem ipsum dolor sit amet',
			'TravelRouteAndRemarks' => 'Lorem ipsum dolor sit amet',
			'TravelResults' => 1,
			'IncidentalTravelExpenses' => 1,
			'WorkingHours125' => 1,
			'WorkingMinutes125' => 1,
			'WorkingHours150' => 1,
			'WorkingMinutes150' => 1,
			'WorkingHours135' => 1,
			'WorkingMinutes135' => 1,
			'WorkingHours160' => 1,
			'WorkingMinutes160' => 1,
			'WorkingHours100' => 1,
			'WorkingMinutes100' => 1,
			'WorkingHours25' => 1,
			'WorkingMinutes25' => 1,
			'WorkingHours25PrevMonth' => 1,
			'WorkingMinutes25PrevMonth' => 1,
			'NightShiftHours' => 1,
			'NightShiftMinutes' => 1,
			'WorkingHolidayHours' => 1,
			'WorkingHolidayMinutes' => 1,
			'MgrSpAmo_Over6h' => 1,
			'MgrSpAmo_Less6h' => 1,
			'NightDutyNum_Over5h' => 1,
			'NightDutyNum_Less5h' => 1,
			'NewYearNightDutyNum_Over5h' => 1,
			'NewYearNightDutyNum_Less5h' => 1,
			'RestableHours_150125' => 1,
			'RestableMinutes_150125' => 1,
			'RestableHours_150135' => 1,
			'RestableMinutes_150135' => 1,
			'RestableHours_150100' => 1,
			'RestableMinutes_150100' => 1,
			'RestableHours_175150' => 1,
			'RestableMinutes_175150' => 1,
			'RestableHours_175160' => 1,
			'RestableMinutes_175160' => 1,
			'RestableHours_5025' => 1,
			'RestableMinutes_5025' => 1,
			'RestableHours_5025Pre' => 1,
			'RestableMinutes_5025Pre' => 1,
			'WorkingTimes125' => 1,
			'WorkingTimes150' => 1,
			'WorkingTimes135' => 1,
			'WorkingTimes160' => 1,
			'WorkingTimes100' => 1,
			'WorkingTimes25' => 1,
			'WorkingTimes25PrevMonth' => 1,
			'NightShiftTimes' => 1,
			'WorkingHolidayTimes' => 1,
			'RestableTimes_15012' => 1,
			'RestableTimes_150135' => 1,
			'RestableTimes_150100' => 1,
			'RestableTimes_175150' => 1,
			'RestableTimes_175160' => 1,
			'RestableTimes_5025' => 1,
			'RestableTimes_5025Pre' => 1,
			'EmpMonthlyAttendInfoID' => 1,
			'registered_date' => '2013-06-17 23:29:35',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:29:35',
			'updated_by' => 'Lorem ip',
			'latest_flg' => 1,
			'last_key' => 1,
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
