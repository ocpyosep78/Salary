<?php
/**
 * JtShukkinboHigotoShinseiFixture
 *
 */
class JtShukkinboHigotoShinseiFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'jt_shukkinbo_higoto_shinsei';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'EmpDailyAttendApplicationInfoID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '職員日毎申請情報ID'),
		'PersonID' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '個人ID'),
		'EmpNo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 8, 'key' => 'index', 'collate' => 'utf8_general_ci', 'comment' => '職員番号', 'charset' => 'utf8'),
		'ReqReasonCD' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 4, 'collate' => 'utf8_general_ci', 'comment' => '申請事由CD', 'charset' => 'utf8'),
		'RequestUnit' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '申請単位 : ０：時間単位１　１：時間単位２　２：日単位　３：半日単位（予約：未使用） ', 'charset' => 'utf8'),
		'AttendRecYM' => array('type' => 'integer', 'null' => false, 'default' => null, 'comment' => '年月度'),
		'RequestYMD' => array('type' => 'date', 'null' => false, 'default' => null, 'comment' => '申請年月日'),
		'RequestHour1Start' => array('type' => 'time', 'null' => true, 'default' => null, 'comment' => '申請時間１開始'),
		'RequestHour1End' => array('type' => 'time', 'null' => true, 'default' => null, 'comment' => '申請時間１終了'),
		'RequestHours1' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '申請時間数１'),
		'RequestHour2Start' => array('type' => 'time', 'null' => true, 'default' => null, 'comment' => '申請時間２開始'),
		'RequestHour2End' => array('type' => 'time', 'null' => true, 'default' => null, 'comment' => '申請時間２終了'),
		'RequestHours2' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '申請時間数２'),
		'RequestHours' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '申請時間数'),
		'ConversionHours' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '時間数'),
		'SalariedDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '有給無給区分', 'charset' => 'utf8'),
		'PremiumExemptionFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '部分休掛金免除対象フラグ', 'charset' => 'utf8'),
		'PartRestPremDeductFlg' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '部分休掛金免除フラグ'),
		'ReducedAmoFlg' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '減額フラグ'),
		'CommutationStopStartFlg' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '通勤手当停止・解除フラグ'),
		'MgrAllowStopStartFlg' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '管理職手当停止・解除フラグ'),
		'AbsentFlg' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '欠勤フラグ'),
		'ValidRequestFlg' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '有効申請フラグ'),
		'EmpDailyAttendInfoID' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '職員日毎勤務情報ID'),
		'EmpAttendApplicationInfoID' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '職員申請情報ID'),
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
			'PRIMARY' => array('column' => 'EmpDailyAttendApplicationInfoID', 'unique' => 1),
			'UK_EmpNo_ReqReaCD_ReqYMD' => array('column' => array('EmpNo', 'RequestYMD', 'ReqReasonCD'), 'unique' => 1)
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
			'EmpDailyAttendApplicationInfoID' => 1,
			'PersonID' => 1,
			'EmpNo' => 'Lorem ',
			'ReqReasonCD' => 'Lo',
			'RequestUnit' => 'Lorem ipsum dolor sit ame',
			'AttendRecYM' => 1,
			'RequestYMD' => '2013-06-17',
			'RequestHour1Start' => '23:29:50',
			'RequestHour1End' => '23:29:50',
			'RequestHours1' => 1,
			'RequestHour2Start' => '23:29:50',
			'RequestHour2End' => '23:29:50',
			'RequestHours2' => 1,
			'RequestHours' => 1,
			'ConversionHours' => 1,
			'SalariedDiv' => 'Lorem ipsum dolor sit ame',
			'PremiumExemptionFlg' => 'Lorem ipsum dolor sit ame',
			'PartRestPremDeductFlg' => 1,
			'ReducedAmoFlg' => 1,
			'CommutationStopStartFlg' => 1,
			'MgrAllowStopStartFlg' => 1,
			'AbsentFlg' => 1,
			'ValidRequestFlg' => 1,
			'EmpDailyAttendInfoID' => 1,
			'EmpAttendApplicationInfoID' => 1,
			'EmpMonthlyAttendInfoID' => 1,
			'registered_date' => '2013-06-17 23:29:50',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:29:50',
			'updated_by' => 'Lorem ip',
			'latest_flg' => 1,
			'last_key' => 1,
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
