<?php
/**
 * QtSeitoHendoFixture
 *
 */
class QtSeitoHendoFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'qt_seito_hendo';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'ResultsYM' => array('type' => 'date', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '実績年月'),
		'DailyRateStartDate' => array('type' => 'date', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '日割起算年月日'),
		'PaidYM' => array('type' => 'date', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '支給年月'),
		'EmpNo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 8, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '職員番号', 'charset' => 'utf8'),
		'PayerDiv' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 2, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '支払者区分', 'charset' => 'utf8'),
		'EmpDiv' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '職員区分', 'charset' => 'utf8'),
		'CoveredSalaryCalcFlg' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '給与計算対象フラグ', 'charset' => 'utf8'),
		'SalaryTypeCD' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '給与体系CD', 'charset' => 'utf8'),
		'TempEmpPreDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '臨時職員予算区分', 'charset' => 'utf8'),
		'DepCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 8, 'collate' => 'utf8_general_ci', 'comment' => '所属CD', 'charset' => 'utf8'),
		'MgrCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '役職CD', 'charset' => 'utf8'),
		'JobGradeCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '職層CD', 'charset' => 'utf8'),
		'JobDutyCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 3, 'collate' => 'utf8_general_ci', 'comment' => '職種職務CD', 'charset' => 'utf8'),
		'SweeperFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '清掃職員フラグ', 'charset' => 'utf8'),
		'SalaryTable' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '給料表CD', 'charset' => 'utf8'),
		'SalaryClass' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '級', 'charset' => 'utf8'),
		'SalaryGrade' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 3, 'collate' => 'utf8_general_ci', 'comment' => '号給', 'charset' => 'utf8'),
		'SweeperAdditionFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '清掃加算対象フラグ', 'charset' => 'utf8'),
		'SalaryGuaranteeFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '現給保障有無フラグ', 'charset' => 'utf8'),
		'SalaryGuaranteeStartDate' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '現給保障開始年月日'),
		'SalaryGuaranteeEndDate' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '現給保障終了年月日'),
		'TableOnGuarantTable' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '保障額表 : 表', 'charset' => 'utf8'),
		'ClassOnGuarantTable' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '保障額表 : 級', 'charset' => 'utf8'),
		'GradeOnGuarantTable' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 3, 'collate' => 'utf8_general_ci', 'comment' => '保障額表 : 号給', 'charset' => 'utf8'),
		'AnnounceSalaryTotal' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '給料　発令給（合計）'),
		'Salary' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '給料のみ'),
		'AdjustedAmount' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '調整額（幼教、清掃、指導主事）'),
		'SalaryRewardSubjectCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 12, 'collate' => 'utf8_general_ci', 'comment' => '給料報酬科目CD', 'charset' => 'utf8'),
		'ChildAllowAccountCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 12, 'collate' => 'utf8_general_ci', 'comment' => '児童手当科目CD', 'charset' => 'utf8'),
		'OverTimeWorkAccountCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 12, 'collate' => 'utf8_general_ci', 'comment' => '超過勤務科目CD', 'charset' => 'utf8'),
		'HolidaySalaryAccountCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 12, 'collate' => 'utf8_general_ci', 'comment' => '休日給科目CD', 'charset' => 'utf8'),
		'SpecificDutySalaryCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 4, 'collate' => 'utf8_general_ci', 'comment' => '単価算入特勤CD', 'charset' => 'utf8'),
		'SpecificDutySalaryDays' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '単価算入特勤日数'),
		'RequestedWorkingDaysOfMonth' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '月の要勤務日数'),
		'AttendanceOrderedReasonCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 4, 'collate' => 'utf8_general_ci', 'comment' => '発令勤怠事由CD', 'charset' => 'utf8'),
		'ObjectDays' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '対象日数'),
		'PayRatio' => array('type' => 'float', 'null' => false, 'default' => '0.00', 'length' => '5,2', 'comment' => '支給割合'),
		'OrderDate_LayoffEtc' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '休職等発令年月日'),
		'EndDateOfLayoff' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '休職等終了年月日'),
		'WorkingTimesOfDayHour' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '一日の勤務時間 : 時間'),
		'WorkingTimesOfDayMinute' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '一日の勤務時間 : 分'),
		'WorkingTimesOfDaySecond' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '一日の勤務時間 : 秒'),
		'WorkingDaysOfWeek' => array('type' => 'float', 'null' => false, 'default' => '0.0', 'length' => '2,1', 'comment' => '週の勤務日数'),
		'WorkingTimesOfWeekHour' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '週の勤務時間 : 時間'),
		'WorkingTimesOfWeekMinute' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '週の勤務時間 : 分'),
		'WorkingTimesOfWeekSecond' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '週の勤務時間 : 秒'),
		'WorkingDaysOfMonth' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '月の勤務日数'),
		'WorkingDaysOfYear' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '年の勤務日数'),
		'OtherDay' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => 'その他の期間の勤務日数'),
		'OtherMonth' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => 'その他の期間の分母（ヶ月）'),
		'UnitPrcPerHour100' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '時間単価　100'),
		'UnitPrcPerHour125' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '時間単価　125'),
		'UnitPrcPerHour150' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '時間単価　150'),
		'UnitPrcPerHour135' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '時間単価　135'),
		'UnitPrcPerHour160' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '時間単価　160'),
		'UnitPrcPerHour25' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '時間単価　25'),
		'UnitPrcPerHour25_PreMonth' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '時間単価　前月25'),
		'UnitPrcPerHour175' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '時間単価　175'),
		'UnitPrcPerHour50' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '時間単価　50'),
		'UnitPrcPerHour50_PreMonth' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '時間単価　前月50'),
		'SalaryUnitPerDay' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '日単価（金額/日）'),
		'OverTimeWorkAllow' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '超過勤務手当'),
		'HolidayWorkAllow' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '休日給'),
		'NightShiftAllow' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '夜勤手当'),
		'SpeWorkAllow' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '特殊勤務手当'),
		'NightWatchAllow' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '宿日直手当'),
		'NightWatchAllowNonTax' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '宿日直手当（うち非課税額）'),
		'NightWatchAllowTaxable' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '宿日直手当（うち課税額）'),
		'MgrSpAllow' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '管理職特勤'),
		'EfficiencyWages' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '能率給'),
		'Wages' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '賃金'),
		'OverTimesTotal125' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '超勤時間数合計　125'),
		'OverTimesTotal150' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '超勤時間数合計　150'),
		'OverTimesTotal135' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '超勤時間数合計　135'),
		'OverTimesTotal160' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '超勤時間数合計　160'),
		'OverTimesTotal25' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '超勤時間数合計　25'),
		'OverTimesTotal25_Pre' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '超勤時間数合計　前月25'),
		'OverTimesTotal100' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '超勤時間数合計　100'),
		'Over60TimesTotal150' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '超勤時間数合計　60時間超150'),
		'Over60TimesTotal175' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '超勤時間数合計　60時間超175'),
		'Over60TimesTotal50' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '超勤時間数合計　60時間超50'),
		'Over60TimesTotal50_Pre' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '超勤時間数合計　60時間超前月50'),
		'HolidayWorkTimesTotal' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '休日給時間数合計'),
		'NightShiftTimesTotal' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '夜勤時間数合計'),
		'TotalNumNightWatchAllow' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '宿日直手当合計回数'),
		'MgrSpAmo_Over6h' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '管理職特勤　6時間超合計回数'),
		'MgrSpAmo_Less6h' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '管理職特勤　6時間以下合計回数'),
		'ReducedAmoTimes' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '減額時間数'),
		'ReducedAmoDays' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '減額日数'),
		'ReducedAmounts' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '減額金額'),
		'ReducedAmo_InSalary' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '減額金額（うち給料分）'),
		'ReducedAmo_InLocal' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '減額金額（うち地域分）'),
		'TimesOfPartRestPremDeduct' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '部分休の掛け金免除の時間数'),
		'RestableTimes_150125' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '代替休暇取得時間　150-125'),
		'RestableTimes_150135' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '代替休暇取得時間　150-135'),
		'RestableTimes_150100' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '代替休暇取得時間　150-100'),
		'RestableTimes_175150' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '代替休暇取得時間　175-150'),
		'RestableTimes_175160' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '代替休暇取得時間　175-160'),
		'RestableTimes_5025Pre' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '代替休暇取得時間　前月50-25'),
		'RestableTimes_5025' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '代替休暇取得時間　50-25'),
		'RestableTimeReduceAmo' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '代替休暇取得時間　減額金額'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'delete_flg' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '削除フラグ : 削除フラグ', 'charset' => 'utf8'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('ResultsYM', 'DailyRateStartDate', 'PaidYM', 'EmpNo', 'PayerDiv'), 'unique' => 1)
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
			'ResultsYM' => '2013-06-17',
			'DailyRateStartDate' => '2013-06-17',
			'PaidYM' => '2013-06-17',
			'EmpNo' => 'Lorem ',
			'PayerDiv' => '',
			'EmpDiv' => '',
			'CoveredSalaryCalcFlg' => 'Lorem ipsum dolor sit ame',
			'SalaryTypeCD' => '',
			'TempEmpPreDiv' => 'Lorem ipsum dolor sit ame',
			'DepCD' => 'Lorem ',
			'MgrCD' => '',
			'JobGradeCD' => '',
			'JobDutyCD' => 'L',
			'SweeperFlg' => 'Lorem ipsum dolor sit ame',
			'SalaryTable' => '',
			'SalaryClass' => '',
			'SalaryGrade' => 'L',
			'SweeperAdditionFlg' => 'Lorem ipsum dolor sit ame',
			'SalaryGuaranteeFlg' => 'Lorem ipsum dolor sit ame',
			'SalaryGuaranteeStartDate' => '2013-06-17',
			'SalaryGuaranteeEndDate' => '2013-06-17',
			'TableOnGuarantTable' => '',
			'ClassOnGuarantTable' => '',
			'GradeOnGuarantTable' => 'L',
			'AnnounceSalaryTotal' => 1,
			'Salary' => 1,
			'AdjustedAmount' => 1,
			'SalaryRewardSubjectCD' => 'Lorem ipsu',
			'ChildAllowAccountCD' => 'Lorem ipsu',
			'OverTimeWorkAccountCD' => 'Lorem ipsu',
			'HolidaySalaryAccountCD' => 'Lorem ipsu',
			'SpecificDutySalaryCD' => 'Lo',
			'SpecificDutySalaryDays' => 1,
			'RequestedWorkingDaysOfMonth' => 1,
			'AttendanceOrderedReasonCD' => 'Lo',
			'ObjectDays' => 1,
			'PayRatio' => 1,
			'OrderDate_LayoffEtc' => '2013-06-17',
			'EndDateOfLayoff' => '2013-06-17',
			'WorkingTimesOfDayHour' => 1,
			'WorkingTimesOfDayMinute' => 1,
			'WorkingTimesOfDaySecond' => 1,
			'WorkingDaysOfWeek' => 1,
			'WorkingTimesOfWeekHour' => 1,
			'WorkingTimesOfWeekMinute' => 1,
			'WorkingTimesOfWeekSecond' => 1,
			'WorkingDaysOfMonth' => 1,
			'WorkingDaysOfYear' => 1,
			'OtherDay' => 1,
			'OtherMonth' => 1,
			'UnitPrcPerHour100' => 1,
			'UnitPrcPerHour125' => 1,
			'UnitPrcPerHour150' => 1,
			'UnitPrcPerHour135' => 1,
			'UnitPrcPerHour160' => 1,
			'UnitPrcPerHour25' => 1,
			'UnitPrcPerHour25_PreMonth' => 1,
			'UnitPrcPerHour175' => 1,
			'UnitPrcPerHour50' => 1,
			'UnitPrcPerHour50_PreMonth' => 1,
			'SalaryUnitPerDay' => 1,
			'OverTimeWorkAllow' => 1,
			'HolidayWorkAllow' => 1,
			'NightShiftAllow' => 1,
			'SpeWorkAllow' => 1,
			'NightWatchAllow' => 1,
			'NightWatchAllowNonTax' => 1,
			'NightWatchAllowTaxable' => 1,
			'MgrSpAllow' => 1,
			'EfficiencyWages' => 1,
			'Wages' => 1,
			'OverTimesTotal125' => 1,
			'OverTimesTotal150' => 1,
			'OverTimesTotal135' => 1,
			'OverTimesTotal160' => 1,
			'OverTimesTotal25' => 1,
			'OverTimesTotal25_Pre' => 1,
			'OverTimesTotal100' => 1,
			'Over60TimesTotal150' => 1,
			'Over60TimesTotal175' => 1,
			'Over60TimesTotal50' => 1,
			'Over60TimesTotal50_Pre' => 1,
			'HolidayWorkTimesTotal' => 1,
			'NightShiftTimesTotal' => 1,
			'TotalNumNightWatchAllow' => 1,
			'MgrSpAmo_Over6h' => 1,
			'MgrSpAmo_Less6h' => 1,
			'ReducedAmoTimes' => 1,
			'ReducedAmoDays' => 1,
			'ReducedAmounts' => 1,
			'ReducedAmo_InSalary' => 1,
			'ReducedAmo_InLocal' => 1,
			'TimesOfPartRestPremDeduct' => 1,
			'RestableTimes_150125' => 1,
			'RestableTimes_150135' => 1,
			'RestableTimes_150100' => 1,
			'RestableTimes_175150' => 1,
			'RestableTimes_175160' => 1,
			'RestableTimes_5025Pre' => 1,
			'RestableTimes_5025' => 1,
			'RestableTimeReduceAmo' => 1,
			'registered_date' => '2013-06-17 23:50:52',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:50:52',
			'updated_by' => 'Lorem ip',
			'delete_flg' => 'Lorem ipsum dolor sit ame',
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
