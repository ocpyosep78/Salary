<?php
/**
 * JtKihonRekiSyobunFixture
 *
 */
class JtKihonRekiSyobunFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'jt_kihon_reki_syobun';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'EmpPunishHistID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '処分歴ID'),
		'PersonID' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '個人ID'),
		'EmpNo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 8, 'collate' => 'utf8_general_ci', 'comment' => '職員番号', 'charset' => 'utf8'),
		'PunishReasonCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 4, 'collate' => 'utf8_general_ci', 'comment' => '処分事由CD', 'charset' => 'utf8'),
		'PunishReasonName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'utf8_general_ci', 'comment' => '処分事由名称', 'charset' => 'utf8'),
		'OrderedDate_Puni' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '処分発令年月日'),
		'StartDate_Puni' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '処分開始年月日'),
		'EndDate_Puni' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '処分終了年月日'),
		'Comments' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'comment' => '摘要', 'charset' => 'utf8'),
		'ReducedRate_Numerator' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '減給率 : 分子'),
		'ReducedRate_Denominator' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '減給率 : 分母'),
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
			'PRIMARY' => array('column' => 'EmpPunishHistID', 'unique' => 1)
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
			'EmpPunishHistID' => 1,
			'PersonID' => 1,
			'EmpNo' => 'Lorem ',
			'PunishReasonCD' => 'Lo',
			'PunishReasonName' => 'Lorem ipsum dolor sit amet',
			'OrderedDate_Puni' => '2013-06-17',
			'StartDate_Puni' => '2013-06-17',
			'EndDate_Puni' => '2013-06-17',
			'Comments' => 'Lorem ipsum dolor sit amet',
			'ReducedRate_Numerator' => 1,
			'ReducedRate_Denominator' => 1,
			'EmpBasicInformationID' => 1,
			'AssignmentNo' => 1,
			'registered_date' => '2013-06-17 23:27:15',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:27:15',
			'updated_by' => 'Lorem ip',
			'latest_flg' => 1,
			'last_key' => 1,
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
