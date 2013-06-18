<?php
/**
 * JtKihonSikakuFixture
 *
 */
class JtKihonSikakuFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'jt_kihon_sikaku';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'PersonLicenseInfoID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '資格免許情報ファイルID : 資格免許情報ファイルID'),
		'PersonID' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '個人ID : 個人ID'),
		'EmpNo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 8, 'collate' => 'utf8_general_ci', 'comment' => '職員番号', 'charset' => 'utf8'),
		'SeqNo' => array('type' => 'integer', 'null' => true, 'default' => '1', 'comment' => '連番'),
		'LicenseCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 3, 'collate' => 'utf8_general_ci', 'comment' => '資格免許CD', 'charset' => 'utf8'),
		'QualifiedDate' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '資格取得日'),
		'LimitDate' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '有効期限'),
		'LicenseNo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '資格免許番号', 'charset' => 'utf8'),
		'QualifiedOrgCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 3, 'collate' => 'utf8_general_ci', 'comment' => '取得機関CD', 'charset' => 'utf8'),
		'QualifiedOrgName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 40, 'collate' => 'utf8_general_ci', 'comment' => '取得機関名称 : 手入力用', 'charset' => 'utf8'),
		'HistCardRecDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '履歴カード記載区分', 'charset' => 'utf8'),
		'Remarks' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'comment' => '備考', 'charset' => 'utf8'),
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
			'PRIMARY' => array('column' => 'PersonLicenseInfoID', 'unique' => 1)
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
			'PersonLicenseInfoID' => 1,
			'PersonID' => 1,
			'EmpNo' => 'Lorem ',
			'SeqNo' => 1,
			'LicenseCD' => 'L',
			'QualifiedDate' => '2013-06-17',
			'LimitDate' => '2013-06-17',
			'LicenseNo' => 'Lorem ipsum dolor ',
			'QualifiedOrgCD' => 'L',
			'QualifiedOrgName' => 'Lorem ipsum dolor sit amet',
			'HistCardRecDiv' => 'Lorem ipsum dolor sit ame',
			'Remarks' => 'Lorem ipsum dolor sit amet',
			'EmpBasicInformationID' => 1,
			'registered_date' => '2013-06-17 23:28:17',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:28:17',
			'updated_by' => 'Lorem ip',
			'latest_flg' => 1,
			'last_key' => 1,
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
