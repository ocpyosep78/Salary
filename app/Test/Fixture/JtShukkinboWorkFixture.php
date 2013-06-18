<?php
/**
 * JtShukkinboWorkFixture
 *
 */
class JtShukkinboWorkFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'jt_shukkinbo_work';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'EmpNo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 8, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '職員番号', 'charset' => 'utf8'),
		'AttendRecYM' => array('type' => 'date', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '年月度'),
		'FiscalYear' => array('type' => 'integer', 'null' => false, 'default' => null, 'comment' => '年度'),
		'CommutationStopStartFlg' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '通勤手当停止・解除フラグ'),
		'MgrAllowStopStartFlg' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '管理職手当停止・解除フラグ'),
		'AbsentedAllDayFlg' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '全欠勤フラグ'),
		'ReducedAmoTimes_Hour' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '減額時間数（時間数）'),
		'ReducedAmoTimes_Minute' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '減額時間数（分数）'),
		'TimesOfPartPremDeduct' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '部分休掛金免除の時間数（時間数）'),
		'MinutessOfPartPremDeduct' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '部分休掛金免除の時間数（分数）'),
		'ReducedAmoDays' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '減額日数'),
		'PrivateAffairsDays' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '私事欠日数'),
		'AbsenceDays' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '不参日数'),
		'LateAndLeaveEarlyNumber' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '早退遅参回数'),
		'LateAndLeaveEarlyHours' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '早退遅参時間数'),
		'CommutingAccidentsDays' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '通勤災害日数'),
		'CommutingAccidentsHours' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '通勤災害時間数'),
		'CareLeaveDays' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '介護休暇日数'),
		'CareLeaveHours' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '介護休暇時間数'),
		'CriminalLeaveDays' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '刑事休職日数'),
		'SickLeaveAbsenceDays' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '病気休職日数'),
		'AcademicLeaveDays' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '学術休職日数'),
		'UnpaidLeaveDays' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '無給休職日数'),
		'ChildcareLeaveDays' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '育児休業日数'),
		'PartLeaveHours' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '部分休業時間数'),
		'SuspensionDays' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '停職日数'),
		'TuberculosisRestDays' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '結核休養日数'),
		'AccidentDays' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '公務災害日数'),
		'AccidentHours' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '公務災害時間数'),
		'BirthDays' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '妊娠出産日数'),
		'FullTimeDays' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '在籍専従日数'),
		'SickLeaveDays' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '病気休暇日数'),
		'SickLeaveHours' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '病気休暇時間数'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'delete_flg' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '削除フラグ', 'charset' => 'utf8'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('EmpNo', 'AttendRecYM'), 'unique' => 1)
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
			'EmpNo' => 'Lorem ',
			'AttendRecYM' => '2013-06-17',
			'FiscalYear' => 1,
			'CommutationStopStartFlg' => 1,
			'MgrAllowStopStartFlg' => 1,
			'AbsentedAllDayFlg' => 1,
			'ReducedAmoTimes_Hour' => 1,
			'ReducedAmoTimes_Minute' => 1,
			'TimesOfPartPremDeduct' => 1,
			'MinutessOfPartPremDeduct' => 1,
			'ReducedAmoDays' => 1,
			'PrivateAffairsDays' => 1,
			'AbsenceDays' => 1,
			'LateAndLeaveEarlyNumber' => 1,
			'LateAndLeaveEarlyHours' => 1,
			'CommutingAccidentsDays' => 1,
			'CommutingAccidentsHours' => 1,
			'CareLeaveDays' => 1,
			'CareLeaveHours' => 1,
			'CriminalLeaveDays' => 1,
			'SickLeaveAbsenceDays' => 1,
			'AcademicLeaveDays' => 1,
			'UnpaidLeaveDays' => 1,
			'ChildcareLeaveDays' => 1,
			'PartLeaveHours' => 1,
			'SuspensionDays' => 1,
			'TuberculosisRestDays' => 1,
			'AccidentDays' => 1,
			'AccidentHours' => 1,
			'BirthDays' => 1,
			'FullTimeDays' => 1,
			'SickLeaveDays' => 1,
			'SickLeaveHours' => 1,
			'registered_date' => '2013-06-17 23:30:37',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:30:37',
			'updated_by' => 'Lorem ip',
			'delete_flg' => 'Lorem ipsum dolor sit ame',
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
