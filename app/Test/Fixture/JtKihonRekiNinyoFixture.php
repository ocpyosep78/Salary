<?php
/**
 * JtKihonRekiNinyoFixture
 *
 */
class JtKihonRekiNinyoFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'jt_kihon_reki_ninyo';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'EmpApointHistID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '任用歴ID'),
		'PersonID' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '個人ID'),
		'EmpNo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 8, 'collate' => 'utf8_general_ci', 'comment' => '職員番号', 'charset' => 'utf8'),
		'EmpDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '職員区分', 'charset' => 'utf8'),
		'FiscalYear' => array('type' => 'integer', 'null' => false, 'default' => null, 'comment' => '年度'),
		'DepCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 8, 'collate' => 'utf8_general_ci', 'comment' => '所属CD', 'charset' => 'utf8'),
		'DeptName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'comment' => '所属名 : 正式', 'charset' => 'utf8'),
		'DeptShortName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '所属名 : 短縮', 'charset' => 'utf8'),
		'MgrCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '役職CD', 'charset' => 'utf8'),
		'MgrName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 8, 'collate' => 'utf8_general_ci', 'comment' => '役職名 : 正式', 'charset' => 'utf8'),
		'MgrShortName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 5, 'collate' => 'utf8_general_ci', 'comment' => '役職名 : 略称', 'charset' => 'utf8'),
		'JobGradeCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '職層CD', 'charset' => 'utf8'),
		'JobGradeName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '職層名 : 正式', 'charset' => 'utf8'),
		'JobDutyCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 3, 'collate' => 'utf8_general_ci', 'comment' => '職種職務CD', 'charset' => 'utf8'),
		'JobDutyName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '職務名 : 正式', 'charset' => 'utf8'),
		'JobTypeName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '職種名 : 正式', 'charset' => 'utf8'),
		'WorkingTimesOfDayHour' => array('type' => 'integer', 'null' => true, 'default' => '0', 'comment' => '一日の勤務時間 : 時間'),
		'WorkingTimesOfDayMinite' => array('type' => 'integer', 'null' => true, 'default' => '0', 'comment' => '一日の勤務時間 : 分'),
		'WorkingTimesOfDaySecond' => array('type' => 'integer', 'null' => true, 'default' => '0', 'comment' => '一日の勤務時間 : 秒'),
		'WorkingDaysOfWeek' => array('type' => 'float', 'null' => true, 'default' => '0.0', 'length' => '2,1', 'comment' => '週の勤務日数'),
		'WorkingTimesOfWeekHour' => array('type' => 'integer', 'null' => true, 'default' => '0', 'comment' => '週の勤務時間 : 時間'),
		'WorkingTimesOfWeekMinite' => array('type' => 'integer', 'null' => true, 'default' => '0', 'comment' => '週の勤務時間 : 分'),
		'WorkingTimesOfWeekSecond' => array('type' => 'integer', 'null' => true, 'default' => '0', 'comment' => '週の勤務時間 : 秒'),
		'WorkingDaysOfMonth' => array('type' => 'integer', 'null' => true, 'default' => '0', 'comment' => '月の勤務日数'),
		'WorkingDaysOfYear' => array('type' => 'integer', 'null' => true, 'default' => '0', 'comment' => '年の勤務日数'),
		'OtherDay' => array('type' => 'integer', 'null' => true, 'default' => '0', 'comment' => 'その他の期間の勤務日数'),
		'OtherMonth' => array('type' => 'integer', 'null' => true, 'default' => '0', 'comment' => 'その他の期間の分母（ヶ月）'),
		'SalaryTableCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '給料表CD', 'charset' => 'utf8'),
		'SalaryClass' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '級', 'charset' => 'utf8'),
		'SalaryGrade' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 3, 'collate' => 'utf8_general_ci', 'comment' => '号給', 'charset' => 'utf8'),
		'SalaryPaymDivCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '月額・日額・時給区分CD', 'charset' => 'utf8'),
		'MonthlyTotalAmo' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => 10, 'comment' => '給料月額/報酬月額'),
		'SalaryGuaranteeFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '現給保障有無フラグ', 'charset' => 'utf8'),
		'TableOnGuarantTable' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '保障額表 : 表', 'charset' => 'utf8'),
		'ClassOnGuarantTable' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '保障額表 : 級', 'charset' => 'utf8'),
		'GradeOnGuarantTable' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 3, 'collate' => 'utf8_general_ci', 'comment' => '保障額表 : 号給', 'charset' => 'utf8'),
		'OrderedDate_Apo' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '発令年月日'),
		'StartDate_Apo' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '任用開始年月日'),
		'EndDate_Apo' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '任用終了年月日'),
		'EmpBasicInformationID' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '人事基本情報ID : 人事基本情報ID'),
		'AssignmentNo' => array('type' => 'integer', 'null' => false, 'default' => null, 'comment' => '人事履歴情報ID : 人事履歴情報ID'),
		'EmpDeptHistID' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '所属歴ID : 所属歴ID'),
		'EmpJobGradeHistID' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '職層歴ID : 職層歴ID'),
		'EmpJobDutyHistID' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '職務歴ID : 職務歴ID'),
		'EmpAdditionalHistID' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '勤務態様歴ID : 勤務態様歴ID'),
		'EmpSalaryHistID' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '給料歴ID : 給料歴ID'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'latest_flg' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '最新・仮登録フラグ : 最新・仮登録フラグ'),
		'last_key' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '最後キー : 最後キー'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'EmpApointHistID', 'unique' => 1)
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
			'EmpApointHistID' => 1,
			'PersonID' => 1,
			'EmpNo' => 'Lorem ',
			'EmpDiv' => '',
			'FiscalYear' => 1,
			'DepCD' => 'Lorem ',
			'DeptName' => 'Lorem ipsum dolor sit amet',
			'DeptShortName' => 'Lorem ip',
			'MgrCD' => '',
			'MgrName' => 'Lorem ',
			'MgrShortName' => 'Lor',
			'JobGradeCD' => '',
			'JobGradeName' => 'Lorem ipsum dolor ',
			'JobDutyCD' => 'L',
			'JobDutyName' => 'Lorem ipsum dolor ',
			'JobTypeName' => 'Lorem ipsum dolor ',
			'WorkingTimesOfDayHour' => 1,
			'WorkingTimesOfDayMinite' => 1,
			'WorkingTimesOfDaySecond' => 1,
			'WorkingDaysOfWeek' => 1,
			'WorkingTimesOfWeekHour' => 1,
			'WorkingTimesOfWeekMinite' => 1,
			'WorkingTimesOfWeekSecond' => 1,
			'WorkingDaysOfMonth' => 1,
			'WorkingDaysOfYear' => 1,
			'OtherDay' => 1,
			'OtherMonth' => 1,
			'SalaryTableCD' => '',
			'SalaryClass' => '',
			'SalaryGrade' => 'L',
			'SalaryPaymDivCD' => 'Lorem ipsum dolor sit ame',
			'MonthlyTotalAmo' => 1,
			'SalaryGuaranteeFlg' => 'Lorem ipsum dolor sit ame',
			'TableOnGuarantTable' => '',
			'ClassOnGuarantTable' => '',
			'GradeOnGuarantTable' => 'L',
			'OrderedDate_Apo' => '2013-06-17',
			'StartDate_Apo' => '2013-06-17',
			'EndDate_Apo' => '2013-06-17',
			'EmpBasicInformationID' => 1,
			'AssignmentNo' => 1,
			'EmpDeptHistID' => 1,
			'EmpJobGradeHistID' => 1,
			'EmpJobDutyHistID' => 1,
			'EmpAdditionalHistID' => 1,
			'EmpSalaryHistID' => 1,
			'registered_date' => '2013-06-17 23:27:00',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:27:00',
			'updated_by' => 'Lorem ip',
			'latest_flg' => 1,
			'last_key' => 1,
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
