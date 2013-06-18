<?php
/**
 * JwKihonRekiHakenFixture
 *
 */
class JwKihonRekiHakenFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'jw_kihon_reki_haken';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'EmpNo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 8, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '職員番号', 'charset' => 'utf8'),
		'RequestNo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 8, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '申請番号', 'charset' => 'utf8'),
		'RequestSeqNo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 2, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '申請番号内連番', 'charset' => 'utf8'),
		'StatusDiv' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '状態区分', 'charset' => 'utf8'),
		'RegistAppDiv' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '登録区分', 'charset' => 'utf8'),
		'DispachReasonCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 4, 'collate' => 'utf8_general_ci', 'comment' => '派遣事由CD', 'charset' => 'utf8'),
		'DispachReasonName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'utf8_general_ci', 'comment' => '派遣事由名称', 'charset' => 'utf8'),
		'DispatchAreaCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '派遣先CD', 'charset' => 'utf8'),
		'DispatchAreaName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => '派遣先名称', 'charset' => 'utf8'),
		'OrderedDate_Disp' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '派遣発令年月日'),
		'StartDate_Disp' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '派遣開始年月日'),
		'EndDate_Disp' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '派遣終了年月日'),
		'Comments' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'comment' => '摘要', 'charset' => 'utf8'),
		'PayRatio' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '5,2', 'comment' => '支給割合'),
		'AssignmentNo' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '人事履歴情報ID'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'delete_flg' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '削除フラグ', 'charset' => 'utf8'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('EmpNo', 'RequestNo', 'RequestSeqNo'), 'unique' => 1)
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
			'RequestNo' => 'Lorem ',
			'RequestSeqNo' => '',
			'StatusDiv' => 'Lorem ipsum dolor sit ame',
			'RegistAppDiv' => 'Lorem ipsum dolor sit ame',
			'DispachReasonCD' => 'Lo',
			'DispachReasonName' => 'Lorem ipsum dolor sit amet',
			'DispatchAreaCD' => '',
			'DispatchAreaName' => 'Lorem ipsum dolor sit amet',
			'OrderedDate_Disp' => '2013-06-17',
			'StartDate_Disp' => '2013-06-17',
			'EndDate_Disp' => '2013-06-17',
			'Comments' => 'Lorem ipsum dolor sit amet',
			'PayRatio' => 1,
			'AssignmentNo' => 1,
			'registered_date' => '2013-06-17 23:31:24',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:31:24',
			'updated_by' => 'Lorem ip',
			'delete_flg' => 'Lorem ipsum dolor sit ame',
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
