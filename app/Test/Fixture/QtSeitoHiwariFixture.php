<?php
/**
 * QtSeitoHiwariFixture
 *
 */
class QtSeitoHiwariFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'qt_seito_hiwari';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'PaidYM' => array('type' => 'date', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '支給年月'),
		'EmpNo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 8, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '職員番号', 'charset' => 'utf8'),
		'PayerDiv' => array('type' => 'string', 'null' => false, 'length' => 2, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '支払者区分', 'charset' => 'utf8'),
		'TableNo' => array('type' => 'integer', 'null' => false, 'default' => '1', 'key' => 'primary', 'comment' => 'テーブルNo'),
		'DailyRateStartDate' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '日割起算年月日'),
		'EmpDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '職員区分', 'charset' => 'utf8'),
		'EmpDiv_Reports' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '職員区分_帳票用', 'charset' => 'utf8'),
		'CoveredSalaryCalcFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '給与計算対象フラグ', 'charset' => 'utf8'),
		'SalaryTypeCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '給与体系CD', 'charset' => 'utf8'),
		'TempEmpPreDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '臨時職員予算区分', 'charset' => 'utf8'),
		'DepCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 8, 'collate' => 'utf8_general_ci', 'comment' => '所属CD', 'charset' => 'utf8'),
		'MgrCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '役職CD', 'charset' => 'utf8'),
		'JobGradeCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '職層CD', 'charset' => 'utf8'),
		'JobDutyCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 3, 'collate' => 'utf8_general_ci', 'comment' => '職種職務CD', 'charset' => 'utf8'),
		'SweeperFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '清掃職員フラグ', 'charset' => 'utf8'),
		'SalaryTable' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '給料表', 'charset' => 'utf8'),
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
		'SalaryRewardsAccountCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 12, 'collate' => 'utf8_general_ci', 'comment' => '給料報酬科目CD', 'charset' => 'utf8'),
		'ChildAllowAccountCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 12, 'collate' => 'utf8_general_ci', 'comment' => '児童手当科目CD', 'charset' => 'utf8'),
		'OverTimeWorkAccountCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 12, 'collate' => 'utf8_general_ci', 'comment' => '超過勤務科目CD', 'charset' => 'utf8'),
		'HolidaySalaryAccountCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 12, 'collate' => 'utf8_general_ci', 'comment' => '休日給科目CD', 'charset' => 'utf8'),
		'SpecificDutySalaryCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 4, 'collate' => 'utf8_general_ci', 'comment' => '単価算入特勤CD', 'charset' => 'utf8'),
		'SpecificDutySalaryDays' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '単価算入特勤日数'),
		'RequestedWorkingDaysOfMonth' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '月の要勤務日数'),
		'AttendanceOrderedReasonCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 4, 'collate' => 'utf8_general_ci', 'comment' => '発令勤怠事由CD', 'charset' => 'utf8'),
		'ObjectDays' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '対象日数'),
		'PayRatio' => array('type' => 'float', 'null' => false, 'default' => '0.00', 'length' => '5,2', 'comment' => '支給割合'),
		'StartDateOfLayoff' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '休職等発令年月日'),
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
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'delete_flg' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '削除フラグ : 削除フラグ', 'charset' => 'utf8'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('PaidYM', 'EmpNo', 'PayerDiv', 'TableNo'), 'unique' => 1)
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
			'PaidYM' => '2013-06-17',
			'EmpNo' => 'Lorem ',
			'PayerDiv' => '',
			'TableNo' => 1,
			'DailyRateStartDate' => '2013-06-17',
			'EmpDiv' => '',
			'EmpDiv_Reports' => 'Lorem ipsum dolor sit ame',
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
			'SalaryRewardsAccountCD' => 'Lorem ipsu',
			'ChildAllowAccountCD' => 'Lorem ipsu',
			'OverTimeWorkAccountCD' => 'Lorem ipsu',
			'HolidaySalaryAccountCD' => 'Lorem ipsu',
			'SpecificDutySalaryCD' => 'Lo',
			'SpecificDutySalaryDays' => 1,
			'RequestedWorkingDaysOfMonth' => 1,
			'AttendanceOrderedReasonCD' => 'Lo',
			'ObjectDays' => 1,
			'PayRatio' => 1,
			'StartDateOfLayoff' => '2013-06-17',
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
			'registered_date' => '2013-06-17 23:50:59',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:50:59',
			'updated_by' => 'Lorem ip',
			'delete_flg' => 'Lorem ipsum dolor sit ame',
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
