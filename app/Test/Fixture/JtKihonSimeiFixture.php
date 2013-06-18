<?php
/**
 * JtKihonSimeiFixture
 *
 */
class JtKihonSimeiFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'jt_kihon_simei';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'NameHistInfoID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '氏名履歴情報ID'),
		'PersonID' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '個人ID'),
		'EmpNo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 8, 'collate' => 'utf8_general_ci', 'comment' => '職員番号', 'charset' => 'utf8'),
		'FamilyName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '氏名_氏 : 旧姓使用中フラグがON⇒通称名_氏', 'charset' => 'utf8'),
		'FirstName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '氏名_名 : 旧姓使用中フラグがON⇒通称名_名', 'charset' => 'utf8'),
		'FamilyNameKana' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '氏名_氏カナ : 旧姓使用中フラグがON⇒通称名カナ_氏', 'charset' => 'utf8'),
		'FirstNameKana' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '氏名_名カナ : 旧姓使用中フラグがON⇒通称名カナ_名', 'charset' => 'utf8'),
		'NameChangedDate' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '氏名変更年月日'),
		'NameChangeReasonDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '氏名変更理由区分CD', 'charset' => 'utf8'),
		'RegisteredName_Family' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '戸籍氏名_氏', 'charset' => 'utf8'),
		'RegisteredName_First' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '戸籍氏名_名', 'charset' => 'utf8'),
		'RegisterdNameKana_Family' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '戸籍氏名_氏カナ', 'charset' => 'utf8'),
		'RegisteredNameKana_First' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '戸籍氏名_名カナ', 'charset' => 'utf8'),
		'RegNameChangedDate' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '戸籍名変更年月日'),
		'RegNameChangeReasonDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '戸籍名変更理由区分CD', 'charset' => 'utf8'),
		'BirthNameUseFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '旧姓使用中フラグ : 氏名項目に通称名が登録されているかどうかのフラグとして使用', 'charset' => 'utf8'),
		'EmpBasicInformationID' => array('type' => 'integer', 'null' => false, 'default' => null, 'comment' => '人事基本情報ID : 人事基本情報ID'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'latest_flg' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '最新・仮登録フラグ : 最新・仮登録フラグ'),
		'last_key' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '最後キー : 最後キー'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'NameHistInfoID', 'unique' => 1)
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
			'NameHistInfoID' => 1,
			'PersonID' => 1,
			'EmpNo' => 'Lorem ',
			'FamilyName' => 'Lorem ipsum dolor ',
			'FirstName' => 'Lorem ipsum dolor ',
			'FamilyNameKana' => 'Lorem ipsum dolor ',
			'FirstNameKana' => 'Lorem ipsum dolor ',
			'NameChangedDate' => '2013-06-17',
			'NameChangeReasonDiv' => 'Lorem ipsum dolor sit ame',
			'RegisteredName_Family' => 'Lorem ipsum dolor ',
			'RegisteredName_First' => 'Lorem ipsum dolor ',
			'RegisterdNameKana_Family' => 'Lorem ipsum dolor ',
			'RegisteredNameKana_First' => 'Lorem ipsum dolor ',
			'RegNameChangedDate' => '2013-06-17',
			'RegNameChangeReasonDiv' => 'Lorem ipsum dolor sit ame',
			'BirthNameUseFlg' => 'Lorem ipsum dolor sit ame',
			'EmpBasicInformationID' => 1,
			'registered_date' => '2013-06-17 23:28:25',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:28:25',
			'updated_by' => 'Lorem ip',
			'latest_flg' => 1,
			'last_key' => 1,
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
