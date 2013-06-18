<?php
/**
 * JtKihonRekiZenrekiFixture
 *
 */
class JtKihonRekiZenrekiFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'jt_kihon_reki_zenreki';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'EmpPastHistID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '前歴ID'),
		'PersonID' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '個人ID'),
		'EmpNo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 8, 'collate' => 'utf8_general_ci', 'comment' => '職員番号', 'charset' => 'utf8'),
		'SeqNo' => array('type' => 'integer', 'null' => false, 'default' => '1', 'comment' => '連番'),
		'PlaceNameOfEmpName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => '勤務先名称', 'charset' => 'utf8'),
		'HiredTypeCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '雇用形態CD', 'charset' => 'utf8'),
		'HiredType' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '雇用形態', 'charset' => 'utf8'),
		'Contents' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'utf8_general_ci', 'comment' => '勤務内容', 'charset' => 'utf8'),
		'WorkStartDate' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '勤務開始年月日'),
		'WorkEndDate' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '勤務終了年月日'),
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
			'PRIMARY' => array('column' => 'EmpPastHistID', 'unique' => 1)
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
			'EmpPastHistID' => 1,
			'PersonID' => 1,
			'EmpNo' => 'Lorem ',
			'SeqNo' => 1,
			'PlaceNameOfEmpName' => 'Lorem ipsum dolor sit amet',
			'HiredTypeCD' => '',
			'HiredType' => 'Lorem ip',
			'Contents' => 'Lorem ipsum dolor sit amet',
			'WorkStartDate' => '2013-06-17',
			'WorkEndDate' => '2013-06-17',
			'EmpBasicInformationID' => 1,
			'AssignmentNo' => 1,
			'registered_date' => '2013-06-17 23:27:54',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:27:54',
			'updated_by' => 'Lorem ip',
			'latest_flg' => 1,
			'last_key' => 1,
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
