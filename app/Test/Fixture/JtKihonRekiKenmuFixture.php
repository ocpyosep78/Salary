<?php
/**
 * JtKihonRekiKenmuFixture
 *
 */
class JtKihonRekiKenmuFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'jt_kihon_reki_kenmu';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'EmpConcID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '兼務歴ID'),
		'PersonID' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '個人ID'),
		'EmpNo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 8, 'collate' => 'utf8_general_ci', 'comment' => '職員番号', 'charset' => 'utf8'),
		'ConcurrentDivCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '兼務区分CD', 'charset' => 'utf8'),
		'ConcDepCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 8, 'collate' => 'utf8_general_ci', 'comment' => '兼務所属CD', 'charset' => 'utf8'),
		'ConcDepName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'comment' => '兼務先所属名 : 正式', 'charset' => 'utf8'),
		'ConcMgrCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '兼務先役職CD', 'charset' => 'utf8'),
		'ConcMgrName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '兼務先役職名 : 正式', 'charset' => 'utf8'),
		'ConcJobGradeCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '兼務先職層CD', 'charset' => 'utf8'),
		'ConcJobGradeName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '兼務先職層名 : 正式', 'charset' => 'utf8'),
		'OrderedDate_Conc' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '兼務発令年月日'),
		'RemoveDate_Conc' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '兼務解除年月日'),
		'Remarks' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'comment' => '備考', 'charset' => 'utf8'),
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
			'PRIMARY' => array('column' => 'EmpConcID', 'unique' => 1)
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
			'EmpConcID' => 1,
			'PersonID' => 1,
			'EmpNo' => 'Lorem ',
			'ConcurrentDivCD' => '',
			'ConcDepCD' => 'Lorem ',
			'ConcDepName' => 'Lorem ipsum dolor sit amet',
			'ConcMgrCD' => '',
			'ConcMgrName' => 'Lorem ipsum dolor ',
			'ConcJobGradeCD' => '',
			'ConcJobGradeName' => 'Lorem ipsum dolor ',
			'OrderedDate_Conc' => '2013-06-17',
			'RemoveDate_Conc' => '2013-06-17',
			'Remarks' => 'Lorem ipsum dolor sit amet',
			'EmpBasicInformationID' => 1,
			'AssignmentNo' => 1,
			'registered_date' => '2013-06-17 23:26:21',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:26:21',
			'updated_by' => 'Lorem ip',
			'latest_flg' => 1,
			'last_key' => 1,
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
