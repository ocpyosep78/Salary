<?php
/**
 * JtKihonSyogaiFixture
 *
 */
class JtKihonSyogaiFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'jt_kihon_syogai';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'PersonHandicapInfoID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '障害者情報ID'),
		'PersonID' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '個人ID'),
		'EmpNo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 8, 'collate' => 'utf8_general_ci', 'comment' => '職員番号', 'charset' => 'utf8'),
		'HandicapDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '障害区分', 'charset' => 'utf8'),
		'HandicapGrade' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => '障害等級 : 級', 'charset' => 'utf8'),
		'HandicapTypeCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '障害種別CD', 'charset' => 'utf8'),
		'HandicapLv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '障害の程度', 'charset' => 'utf8'),
		'HeavyHandicapFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '重複障害の有無', 'charset' => 'utf8'),
		'HandicapName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'comment' => '障害名', 'charset' => 'utf8'),
		'HandicapNoteAuthorized' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '認定先 : 障害者手帳認定先', 'charset' => 'utf8'),
		'HandicapNoteNo1' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 15, 'collate' => 'utf8_general_ci', 'comment' => '障害者手帳番号１', 'charset' => 'utf8'),
		'CertifiedDate' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '認定年月日'),
		'EmpBasicInformationID' => array('type' => 'integer', 'null' => false, 'default' => null, 'comment' => '人事基本情報ID : 人事基本情報ID'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'latest_flg' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '最新・仮登録フラグ : 最新・仮登録フラグ'),
		'last_key' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '最後キー : 最後キー'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'SeqNo' => array('type' => 'integer', 'null' => false, 'default' => '1', 'comment' => '連番'),
		'HandicapNoteNo2' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 15, 'collate' => 'utf8_general_ci', 'comment' => '障害者手帳番号２', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'PersonHandicapInfoID', 'unique' => 1)
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
			'PersonHandicapInfoID' => 1,
			'PersonID' => 1,
			'EmpNo' => 'Lorem ',
			'HandicapDiv' => 'Lorem ipsum dolor sit ame',
			'HandicapGrade' => 'Lorem ipsum dolor sit amet',
			'HandicapTypeCD' => '',
			'HandicapLv' => 'Lorem ipsum dolor sit ame',
			'HeavyHandicapFlg' => 'Lorem ipsum dolor sit ame',
			'HandicapName' => 'Lorem ipsum dolor sit amet',
			'HandicapNoteAuthorized' => 'Lorem ip',
			'HandicapNoteNo1' => 'Lorem ipsum d',
			'CertifiedDate' => '2013-06-17',
			'EmpBasicInformationID' => 1,
			'registered_date' => '2013-06-17 23:28:33',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:28:33',
			'updated_by' => 'Lorem ip',
			'latest_flg' => 1,
			'last_key' => 1,
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17',
			'SeqNo' => 1,
			'HandicapNoteNo2' => 'Lorem ipsum d'
		),
	);

}
