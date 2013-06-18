<?php
/**
 * JtKihonGakurekiFixture
 *
 */
class JtKihonGakurekiFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'jt_kihon_gakureki';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'PersonSchlBackgroundID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '学歴情報ID'),
		'PersonID' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '個人ID'),
		'EmpNo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 8, 'collate' => 'utf8_general_ci', 'comment' => '職員番号', 'charset' => 'utf8'),
		'SeqNo' => array('type' => 'integer', 'null' => true, 'default' => '1', 'comment' => '連番'),
		'SchoolCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 6, 'collate' => 'utf8_general_ci', 'comment' => '学校CD', 'charset' => 'utf8'),
		'SchoolName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => '学校名称 : 手入力用', 'charset' => 'utf8'),
		'MatriculationDate' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '入学日'),
		'GraduationDate' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '卒業日'),
		'CollegeCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 5, 'collate' => 'utf8_general_ci', 'comment' => '学部CD', 'charset' => 'utf8'),
		'CollegeName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '学部名 : 手入力用', 'charset' => 'utf8'),
		'SubjectCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 5, 'collate' => 'utf8_general_ci', 'comment' => '学科CD', 'charset' => 'utf8'),
		'SubjectName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'utf8_general_ci', 'comment' => '学科名 : 手入力用', 'charset' => 'utf8'),
		'SpecialCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 5, 'collate' => 'utf8_general_ci', 'comment' => '専攻CD', 'charset' => 'utf8'),
		'SpecialName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'utf8_general_ci', 'comment' => '専攻名 : 手入力用', 'charset' => 'utf8'),
		'SchlBackgroundAtHiredFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '採用時学歴該当フラグ', 'charset' => 'utf8'),
		'SchlBackgroundAtSalDecidedFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '給与決定上学歴該当フラグ', 'charset' => 'utf8'),
		'LastSchlBackgroundFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '最終学歴該当フラグ', 'charset' => 'utf8'),
		'StudyDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '修学区分', 'charset' => 'utf8'),
		'CompulsoryYears' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '必要修学年数'),
		'HistCardRecDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '履歴カード記載区分', 'charset' => 'utf8'),
		'EmpBasicInformationID' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '人事基本情報ID : 人事基本情報ID'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'latest_flg' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '最新・仮登録フラグ : 最新・仮登録フラグ'),
		'last_key' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '最後キー : 最後キー'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'PersonSchlBackgroundID', 'unique' => 1)
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
			'PersonSchlBackgroundID' => 1,
			'PersonID' => 1,
			'EmpNo' => 'Lorem ',
			'SeqNo' => 1,
			'SchoolCD' => 'Lore',
			'SchoolName' => 'Lorem ipsum dolor sit amet',
			'MatriculationDate' => '2013-06-17',
			'GraduationDate' => '2013-06-17',
			'CollegeCD' => 'Lor',
			'CollegeName' => 'Lorem ipsum dolor ',
			'SubjectCD' => 'Lor',
			'SubjectName' => 'Lorem ipsum dolor sit amet',
			'SpecialCD' => 'Lor',
			'SpecialName' => 'Lorem ipsum dolor sit amet',
			'SchlBackgroundAtHiredFlg' => 'Lorem ipsum dolor sit ame',
			'SchlBackgroundAtSalDecidedFlg' => 'Lorem ipsum dolor sit ame',
			'LastSchlBackgroundFlg' => 'Lorem ipsum dolor sit ame',
			'StudyDiv' => 'Lorem ipsum dolor sit ame',
			'CompulsoryYears' => 1,
			'HistCardRecDiv' => 'Lorem ipsum dolor sit ame',
			'EmpBasicInformationID' => 1,
			'registered_date' => '2013-06-17 23:25:03',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:25:03',
			'updated_by' => 'Lorem ip',
			'latest_flg' => 1,
			'last_key' => 1,
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
