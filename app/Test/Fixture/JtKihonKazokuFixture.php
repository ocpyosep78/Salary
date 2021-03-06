<?php
/**
 * JtKihonKazokuFixture
 *
 */
class JtKihonKazokuFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'jt_kihon_kazoku';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'PersonFamilyInfoID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '家族情報ID'),
		'PersonID' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '個人ID'),
		'EmpNo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 8, 'collate' => 'utf8_general_ci', 'comment' => '職員番号', 'charset' => 'utf8'),
		'SeqNo' => array('type' => 'integer', 'null' => true, 'default' => '1', 'comment' => '連番'),
		'Name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '氏名', 'charset' => 'utf8'),
		'NameKana' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 40, 'collate' => 'utf8_general_ci', 'comment' => '氏名カナ', 'charset' => 'utf8'),
		'Relationship' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '続柄CD', 'charset' => 'utf8'),
		'Sex' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '性別', 'charset' => 'utf8'),
		'BirthDate' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '生年月日'),
		'DeathDate' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '死亡年月日'),
		'SeparationCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '同居別居フラグ', 'charset' => 'utf8'),
		'SeparationZipCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 9, 'collate' => 'utf8_general_ci', 'comment' => '別居郵便番号', 'charset' => 'utf8'),
		'SeparationMunicipalityCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 6, 'collate' => 'utf8_general_ci', 'comment' => '別居市区町村CD', 'charset' => 'utf8'),
		'SeparationAddress' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => '別居住所漢字', 'charset' => 'utf8'),
		'SeparationAddressDetail' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => '別居住所方書漢字', 'charset' => 'utf8'),
		'SeparationAddressKana' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'comment' => '別居住所カナ', 'charset' => 'utf8'),
		'SeparationAddressDetailKana' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'comment' => '別居住所方書カナ', 'charset' => 'utf8'),
		'SeparationAddressMemo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'utf8_general_ci', 'comment' => '別居先メモ', 'charset' => 'utf8'),
		'SeparationTelNo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 11, 'collate' => 'utf8_general_ci', 'comment' => '別居電話番号', 'charset' => 'utf8'),
		'WorkPlaceName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'utf8_general_ci', 'comment' => '勤務先名', 'charset' => 'utf8'),
		'Remarks' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'comment' => '備考', 'charset' => 'utf8'),
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
			'PRIMARY' => array('column' => 'PersonFamilyInfoID', 'unique' => 1)
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
			'PersonFamilyInfoID' => 1,
			'PersonID' => 1,
			'EmpNo' => 'Lorem ',
			'SeqNo' => 1,
			'Name' => 'Lorem ipsum dolor ',
			'NameKana' => 'Lorem ipsum dolor sit amet',
			'Relationship' => 'Lorem ip',
			'Sex' => '',
			'BirthDate' => '2013-06-17',
			'DeathDate' => '2013-06-17',
			'SeparationCD' => '',
			'SeparationZipCD' => 'Lorem i',
			'SeparationMunicipalityCD' => 'Lore',
			'SeparationAddress' => 'Lorem ipsum dolor sit amet',
			'SeparationAddressDetail' => 'Lorem ipsum dolor sit amet',
			'SeparationAddressKana' => 'Lorem ipsum dolor sit amet',
			'SeparationAddressDetailKana' => 'Lorem ipsum dolor sit amet',
			'SeparationAddressMemo' => 'Lorem ipsum dolor sit amet',
			'SeparationTelNo' => 'Lorem ips',
			'WorkPlaceName' => 'Lorem ipsum dolor sit amet',
			'Remarks' => 'Lorem ipsum dolor sit amet',
			'EmpBasicInformationID' => 1,
			'registered_date' => '2013-06-17 23:25:19',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:25:19',
			'updated_by' => 'Lorem ip',
			'latest_flg' => 1,
			'last_key' => 1,
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
