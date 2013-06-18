<?php
/**
 * JtKihonRekiKmtaiyoFixture
 *
 */
class JtKihonRekiKmtaiyoFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'jt_kihon_reki_kmtaiyo';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'EmpWorkingStyleID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '勤務態様歴ID'),
		'PersonID' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '個人ID'),
		'EmpNo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 8, 'collate' => 'utf8_general_ci', 'comment' => '職員番号', 'charset' => 'utf8'),
		'WorkingTimesOfDayHour' => array('type' => 'integer', 'null' => true, 'default' => '0', 'comment' => '一日の勤務時間 : 時間'),
		'WorkingTimesOfDayMinute' => array('type' => 'integer', 'null' => true, 'default' => '0', 'comment' => '一日の勤務時間 : 分'),
		'WorkingTimesOfDaySecond' => array('type' => 'integer', 'null' => true, 'default' => '0', 'comment' => '一日の勤務時間 : 秒'),
		'WorkingDaysOfWeek' => array('type' => 'float', 'null' => true, 'default' => '0.0', 'length' => '2,1', 'comment' => '週の勤務日数'),
		'WorkingTimesOfWeekHour' => array('type' => 'integer', 'null' => true, 'default' => '0', 'comment' => '週の勤務時間 : 時間'),
		'WorkingTimesOfWeekMinute' => array('type' => 'integer', 'null' => true, 'default' => '0', 'comment' => '週の勤務時間 : 分'),
		'WorkingTimesOfWeekSecond' => array('type' => 'integer', 'null' => true, 'default' => '0', 'comment' => '週の勤務時間 : 秒'),
		'WorkingDaysOfMonth' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '月の勤務日数'),
		'WorkingDaysOfYear' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '年の勤務日数'),
		'OtherDay' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => 'その他の期間の勤務日数'),
		'OtherMonth' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => 'その他の勤務の分母（ヵ月）'),
		'ChangedDate_Style' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '勤務態様変更年月日（発令年月日）'),
		'EmpBasicInformationID' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '人事基本情報ID : 人事基本情報ID'),
		'AssignmentNo' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '人事履歴情報ID : 人事履歴情報ID'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'latest_flg' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '最新・仮登録フラグ : 最新・仮登録フラグ'),
		'last_key' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '最後キー : 最後キー'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'EmpWorkingStyleID', 'unique' => 1)
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
			'EmpWorkingStyleID' => 1,
			'PersonID' => 1,
			'EmpNo' => 'Lorem ',
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
			'ChangedDate_Style' => '2013-06-17',
			'EmpBasicInformationID' => 1,
			'AssignmentNo' => 1,
			'registered_date' => '2013-06-17 23:26:44',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:26:44',
			'updated_by' => 'Lorem ip',
			'latest_flg' => 1,
			'last_key' => 1,
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
