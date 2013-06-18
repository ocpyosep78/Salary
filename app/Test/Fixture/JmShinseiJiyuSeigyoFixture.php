<?php
/**
 * JmShinseiJiyuSeigyoFixture
 *
 */
class JmShinseiJiyuSeigyoFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'jm_shinsei_jiyu_seigyo';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'AttendanceTypeCD' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 4, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '勤怠種別CD', 'charset' => 'utf8'),
		'AttendtReqUnitDiv' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '申請単位区分', 'charset' => 'utf8'),
		'ValidDate' => array('type' => 'date', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '有効年月日'),
		'InvalidDate' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '無効年月日'),
		'SalariedDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '無給区分', 'charset' => 'utf8'),
		'SalariedFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '有給無給選択フラグ', 'charset' => 'utf8'),
		'AttendanceBookFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '出勤簿フラグ', 'charset' => 'utf8'),
		'EmpAttendanceRecordFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '勤務記録歴フラグ', 'charset' => 'utf8'),
		'EmpDispatchHistFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '派遣歴フラグ', 'charset' => 'utf8'),
		'EmpPunishHistFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '処分歴フラグ', 'charset' => 'utf8'),
		'PrivateAffairsFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '私事欠対象フラグ', 'charset' => 'utf8'),
		'AbsenceFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '不参対象フラグ', 'charset' => 'utf8'),
		'LateAndLeaveEarlyFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '早退遅参対象フラグ', 'charset' => 'utf8'),
		'CommutingAccidentsFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '通勤災害対象フラグ', 'charset' => 'utf8'),
		'CareLeaveFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '介護休暇対象フラグ', 'charset' => 'utf8'),
		'SickLeaveAbsenceFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '病気休職対象フラグ', 'charset' => 'utf8'),
		'CriminalLeaveFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '刑事休職対象フラグ', 'charset' => 'utf8'),
		'AcademicLeaveFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '学術休職対象フラグ', 'charset' => 'utf8'),
		'UnpaidLeaveFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '無給休職対象フラグ', 'charset' => 'utf8'),
		'ChildcareLeaveFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '育児休業対象フラグ', 'charset' => 'utf8'),
		'PartLeaveFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '部分休業対象フラグ', 'charset' => 'utf8'),
		'SuspensionFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '停職対象フラグ', 'charset' => 'utf8'),
		'TuberculosisRestFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '結核休養対象フラグ', 'charset' => 'utf8'),
		'AccidentFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '公務災害対象フラグ', 'charset' => 'utf8'),
		'BirthFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '妊娠出産対象フラグ', 'charset' => 'utf8'),
		'FullTimeFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '在籍専従対象フラグ', 'charset' => 'utf8'),
		'SickLeaveFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '病気休暇対象フラグ', 'charset' => 'utf8'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'delete_flg' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '削除フラグ', 'charset' => 'utf8'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('AttendanceTypeCD', 'AttendtReqUnitDiv', 'ValidDate'), 'unique' => 1)
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
			'AttendanceTypeCD' => 'Lo',
			'AttendtReqUnitDiv' => 'Lorem ipsum dolor sit ame',
			'ValidDate' => '2013-06-17',
			'InvalidDate' => '2013-06-17',
			'SalariedDiv' => 'Lorem ipsum dolor sit ame',
			'SalariedFlg' => 'Lorem ipsum dolor sit ame',
			'AttendanceBookFlg' => 'Lorem ipsum dolor sit ame',
			'EmpAttendanceRecordFlg' => 'Lorem ipsum dolor sit ame',
			'EmpDispatchHistFlg' => 'Lorem ipsum dolor sit ame',
			'EmpPunishHistFlg' => 'Lorem ipsum dolor sit ame',
			'PrivateAffairsFlg' => 'Lorem ipsum dolor sit ame',
			'AbsenceFlg' => 'Lorem ipsum dolor sit ame',
			'LateAndLeaveEarlyFlg' => 'Lorem ipsum dolor sit ame',
			'CommutingAccidentsFlg' => 'Lorem ipsum dolor sit ame',
			'CareLeaveFlg' => 'Lorem ipsum dolor sit ame',
			'SickLeaveAbsenceFlg' => 'Lorem ipsum dolor sit ame',
			'CriminalLeaveFlg' => 'Lorem ipsum dolor sit ame',
			'AcademicLeaveFlg' => 'Lorem ipsum dolor sit ame',
			'UnpaidLeaveFlg' => 'Lorem ipsum dolor sit ame',
			'ChildcareLeaveFlg' => 'Lorem ipsum dolor sit ame',
			'PartLeaveFlg' => 'Lorem ipsum dolor sit ame',
			'SuspensionFlg' => 'Lorem ipsum dolor sit ame',
			'TuberculosisRestFlg' => 'Lorem ipsum dolor sit ame',
			'AccidentFlg' => 'Lorem ipsum dolor sit ame',
			'BirthFlg' => 'Lorem ipsum dolor sit ame',
			'FullTimeFlg' => 'Lorem ipsum dolor sit ame',
			'SickLeaveFlg' => 'Lorem ipsum dolor sit ame',
			'registered_date' => '2013-06-17 23:23:53',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:23:53',
			'updated_by' => 'Lorem ip',
			'delete_flg' => 'Lorem ipsum dolor sit ame',
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
