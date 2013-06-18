<?php
/**
 * JtKihonRekiSenkouFixture
 *
 */
class JtKihonRekiSenkouFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'jt_kihon_reki_senkou';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'EmpTakeExamHistID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '選考受験歴ID'),
		'PersonID' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '個人ID'),
		'EmpNo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 8, 'collate' => 'utf8_general_ci', 'comment' => '職員番号', 'charset' => 'utf8'),
		'SelectionCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 3, 'collate' => 'utf8_general_ci', 'comment' => '選考名CD', 'charset' => 'utf8'),
		'SelectionName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => '選考名', 'charset' => 'utf8'),
		'SelectTypeCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '選考種別CD', 'charset' => 'utf8'),
		'SelectTypeName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => '選考種別名', 'charset' => 'utf8'),
		'ExamTypeDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '受験方式区分', 'charset' => 'utf8'),
		'TakeExamYear' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '受験年度'),
		'TakeExamStatusDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '受験状態区分', 'charset' => 'utf8'),
		'PassedDate' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '合格年月日'),
		'MgrTestExemptFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '管試免除資格発生フラグ', 'charset' => 'utf8'),
		'MgrTestExemptStartYears' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '管試免除開始年度'),
		'MgrTestExemptEndYears' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '管試免除終了年度'),
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
			'PRIMARY' => array('column' => 'EmpTakeExamHistID', 'unique' => 1)
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
			'EmpTakeExamHistID' => 1,
			'PersonID' => 1,
			'EmpNo' => 'Lorem ',
			'SelectionCD' => 'L',
			'SelectionName' => 'Lorem ipsum dolor sit amet',
			'SelectTypeCD' => 'Lorem ip',
			'SelectTypeName' => 'Lorem ipsum dolor sit amet',
			'ExamTypeDiv' => 'Lorem ipsum dolor sit ame',
			'TakeExamYear' => 1,
			'TakeExamStatusDiv' => '',
			'PassedDate' => '2013-06-17',
			'MgrTestExemptFlg' => '',
			'MgrTestExemptStartYears' => 1,
			'MgrTestExemptEndYears' => 1,
			'EmpBasicInformationID' => 1,
			'AssignmentNo' => 1,
			'registered_date' => '2013-06-17 23:27:07',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:27:07',
			'updated_by' => 'Lorem ip',
			'latest_flg' => 1,
			'last_key' => 1,
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
