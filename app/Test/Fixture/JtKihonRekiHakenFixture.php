<?php
/**
 * JtKihonRekiHakenFixture
 *
 */
class JtKihonRekiHakenFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'jt_kihon_reki_haken';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'EmpDispatchHistID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '派遣歴ID'),
		'PersonID' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '個人ID'),
		'EmpNo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 8, 'collate' => 'utf8_general_ci', 'comment' => '職員番号', 'charset' => 'utf8'),
		'DispachReasonCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 4, 'collate' => 'utf8_general_ci', 'comment' => '派遣事由CD', 'charset' => 'utf8'),
		'DispachReasonName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'utf8_general_ci', 'comment' => '派遣事由名称', 'charset' => 'utf8'),
		'DispatchAreaCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '派遣先CD', 'charset' => 'utf8'),
		'DispatchAreaName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => '派遣先名称', 'charset' => 'utf8'),
		'OrderedDate_Disp' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '派遣発令年月日'),
		'StartDate_Disp' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '派遣開始年月日'),
		'EndDate_Disp' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '派遣終了年月日'),
		'TermCutFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '期間短縮フラグ', 'charset' => 'utf8'),
		'Comments' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'comment' => '摘要', 'charset' => 'utf8'),
		'PayRatio' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '5,2', 'comment' => '支給割合'),
		'EmpBasicInformationID' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '人事基本情報ID : 人事基本情報ID'),
		'AssignmentNo' => array('type' => 'integer', 'null' => false, 'default' => null, 'comment' => '人事履歴情報ID : 人事履歴情報ID'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'latest_flg' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '最新・仮登録フラグ : 最新・仮登録フラグ'),
		'last_key' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '最後キー : 最後キー'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'EmpDispatchHistID', 'unique' => 1)
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
			'EmpDispatchHistID' => 1,
			'PersonID' => 1,
			'EmpNo' => 'Lorem ',
			'DispachReasonCD' => 'Lo',
			'DispachReasonName' => 'Lorem ipsum dolor sit amet',
			'DispatchAreaCD' => '',
			'DispatchAreaName' => 'Lorem ipsum dolor sit amet',
			'OrderedDate_Disp' => '2013-06-17',
			'StartDate_Disp' => '2013-06-17',
			'EndDate_Disp' => '2013-06-17',
			'TermCutFlg' => 'Lorem ipsum dolor sit ame',
			'Comments' => 'Lorem ipsum dolor sit amet',
			'PayRatio' => 1,
			'EmpBasicInformationID' => 1,
			'AssignmentNo' => 1,
			'registered_date' => '2013-06-17 23:25:58',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:25:58',
			'updated_by' => 'Lorem ip',
			'latest_flg' => 1,
			'last_key' => 1,
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
