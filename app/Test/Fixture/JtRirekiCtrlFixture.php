<?php
/**
 * JtRirekiCtrlFixture
 *
 */
class JtRirekiCtrlFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'jt_rireki_ctrl';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'AssignmentNo' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '人事履歴コントロールID'),
		'EmpNo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 8, 'collate' => 'utf8_general_ci', 'comment' => '職員番号', 'charset' => 'utf8'),
		'EmpDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '職員区分', 'charset' => 'utf8'),
		'AssignOrderNo' => array('type' => 'integer', 'null' => false, 'default' => null, 'comment' => '発令番号'),
		'OrderedDate' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '発令年月日'),
		'MoveExeCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '異動処理CD', 'charset' => 'utf8'),
		'EmpApointHistFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '任用歴任用歴更新フラグ', 'charset' => 'utf8'),
		'EmpAdditionalHistFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '併任歴更新フラグ', 'charset' => 'utf8'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'latest_data_flg' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '最新・仮登録フラグ : 最新・仮登録フラグ'),
		'last_key' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '最後キー : 最後キー'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'AssignmentNo', 'unique' => 1)
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
			'AssignmentNo' => 1,
			'EmpNo' => 'Lorem ',
			'EmpDiv' => '',
			'AssignOrderNo' => 1,
			'OrderedDate' => '2013-06-17',
			'MoveExeCD' => '',
			'EmpApointHistFlg' => 'Lorem ipsum dolor sit ame',
			'EmpAdditionalHistFlg' => 'Lorem ipsum dolor sit ame',
			'registered_date' => '2013-06-17 23:29:27',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:29:27',
			'updated_by' => 'Lorem ip',
			'latest_data_flg' => 1,
			'last_key' => 1,
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
