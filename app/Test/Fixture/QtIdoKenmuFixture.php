<?php
/**
 * QtIdoKenmuFixture
 *
 */
class QtIdoKenmuFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'qt_ido_kenmu';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'EmpNo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 8, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '職員番号', 'charset' => 'utf8'),
		'MovementType' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 2, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '異動種別', 'charset' => 'utf8'),
		'MovementDate' => array('type' => 'date', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '異動年月日'),
		'SeqNo' => array('type' => 'integer', 'null' => false, 'default' => '1', 'key' => 'primary', 'comment' => '連番'),
		'AcquisitionDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '取込区分', 'charset' => 'utf8'),
		'PaidYM' => array('type' => 'date', 'null' => false, 'default' => null, 'comment' => '支給年月'),
		'TableNo' => array('type' => 'integer', 'null' => false, 'default' => '1', 'comment' => 'テーブルNo'),
		'DailyRateStartDate' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '日割起算年月日'),
		'EmpDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '職員区分', 'charset' => 'utf8'),
		'CoveredSalaryCalcFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '給与計算対象フラグ', 'charset' => 'utf8'),
		'SalaryTypeCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '給与体系CD', 'charset' => 'utf8'),
		'PayerDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '給与支払者区分', 'charset' => 'utf8'),
		'TempEmpPreDivCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '臨時職員予算区分', 'charset' => 'utf8'),
		'DepCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 8, 'collate' => 'utf8_general_ci', 'comment' => '所属CD', 'charset' => 'utf8'),
		'MgrCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '役職CD', 'charset' => 'utf8'),
		'JobGradeCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '職層CD', 'charset' => 'utf8'),
		'JobDutyCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 3, 'collate' => 'utf8_general_ci', 'comment' => '職種職務CD', 'charset' => 'utf8'),
		'EmpConcDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '兼務区分', 'charset' => 'utf8'),
		'SalaryRewardSubjectCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 12, 'collate' => 'utf8_general_ci', 'comment' => '給料報酬科目CD', 'charset' => 'utf8'),
		'ChildAllowanceSubjectCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 12, 'collate' => 'utf8_general_ci', 'comment' => '児童手当科目CD', 'charset' => 'utf8'),
		'OverTimeWorkSubjectCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 12, 'collate' => 'utf8_general_ci', 'comment' => '超過勤務科目CD', 'charset' => 'utf8'),
		'HolidaySalarySubjectCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 12, 'collate' => 'utf8_general_ci', 'comment' => '休日給科目CD', 'charset' => 'utf8'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'delete_flg' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '削除フラグ : 削除フラグ', 'charset' => 'utf8'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('EmpNo', 'MovementType', 'MovementDate', 'SeqNo'), 'unique' => 1)
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
			'MovementType' => '',
			'MovementDate' => '2013-06-17',
			'SeqNo' => 1,
			'AcquisitionDiv' => 'Lorem ipsum dolor sit ame',
			'PaidYM' => '2013-06-17',
			'TableNo' => 1,
			'DailyRateStartDate' => '2013-06-17',
			'EmpDiv' => '',
			'CoveredSalaryCalcFlg' => 'Lorem ipsum dolor sit ame',
			'SalaryTypeCD' => '',
			'PayerDiv' => '',
			'TempEmpPreDivCD' => 'Lorem ipsum dolor sit ame',
			'DepCD' => 'Lorem ',
			'MgrCD' => '',
			'JobGradeCD' => '',
			'JobDutyCD' => 'L',
			'EmpConcDiv' => '',
			'SalaryRewardSubjectCD' => 'Lorem ipsu',
			'ChildAllowanceSubjectCD' => 'Lorem ipsu',
			'OverTimeWorkSubjectCD' => 'Lorem ipsu',
			'HolidaySalarySubjectCD' => 'Lorem ipsu',
			'registered_date' => '2013-06-17 23:45:44',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:45:44',
			'updated_by' => 'Lorem ip',
			'delete_flg' => 'Lorem ipsum dolor sit ame',
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
