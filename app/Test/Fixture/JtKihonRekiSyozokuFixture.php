<?php
/**
 * JtKihonRekiSyozokuFixture
 *
 */
class JtKihonRekiSyozokuFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'jt_kihon_reki_syozoku';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'EmpDeptHistID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '所属歴ID'),
		'PersonID' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '個人ID'),
		'EmpNo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 8, 'collate' => 'utf8_general_ci', 'comment' => '職員番号', 'charset' => 'utf8'),
		'DepCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 8, 'collate' => 'utf8_general_ci', 'comment' => '所属CD', 'charset' => 'utf8'),
		'DeptName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'comment' => '所属名 : 正式', 'charset' => 'utf8'),
		'DeptShortName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '所属名 : 短縮', 'charset' => 'utf8'),
		'LocationName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'utf8_general_ci', 'comment' => '勤務地名称', 'charset' => 'utf8'),
		'MgrCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '役職CD', 'charset' => 'utf8'),
		'MgrName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 8, 'collate' => 'utf8_general_ci', 'comment' => '役職名 : 正式', 'charset' => 'utf8'),
		'MgrShortName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 5, 'collate' => 'utf8_general_ci', 'comment' => '役職名 : 略称', 'charset' => 'utf8'),
		'CDChangeOnlyFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => 'コード変更のみフラグ', 'charset' => 'utf8'),
		'OrderedDate_Dept' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '所属発令年月日'),
		'EmpBasicInformationID' => array('type' => 'integer', 'null' => false, 'default' => null, 'comment' => '人事基本情報ID : 人事基本情報ID'),
		'AssignmentNo' => array('type' => 'integer', 'null' => false, 'default' => null, 'comment' => '人事履歴情報ID : 人事履歴情報ID'),
		'FiscalYear' => array('type' => 'integer', 'null' => false, 'default' => null, 'comment' => '年度'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'latest_flg' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '最新・仮登録フラグ : 最新・仮登録フラグ'),
		'last_key' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '最後キー : 最後キー'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'EmpDeptHistID', 'unique' => 1)
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
			'EmpDeptHistID' => 1,
			'PersonID' => 1,
			'EmpNo' => 'Lorem ',
			'DepCD' => 'Lorem ',
			'DeptName' => 'Lorem ipsum dolor sit amet',
			'DeptShortName' => 'Lorem ip',
			'LocationName' => 'Lorem ipsum dolor sit amet',
			'MgrCD' => '',
			'MgrName' => 'Lorem ',
			'MgrShortName' => 'Lor',
			'CDChangeOnlyFlg' => 'Lorem ipsum dolor sit ame',
			'OrderedDate_Dept' => '2013-06-17',
			'EmpBasicInformationID' => 1,
			'AssignmentNo' => 1,
			'FiscalYear' => 1,
			'registered_date' => '2013-06-17 23:27:38',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:27:38',
			'updated_by' => 'Lorem ip',
			'latest_flg' => 1,
			'last_key' => 1,
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
