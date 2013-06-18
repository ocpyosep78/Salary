<?php
/**
 * JtKihonJusyoFixture
 *
 */
class JtKihonJusyoFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'jt_kihon_jusyo';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'EmpAddressHistID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '住所歴情報ID'),
		'PersonID' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '個人ID'),
		'EmpNo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 8, 'collate' => 'utf8_general_ci', 'comment' => '職員番号', 'charset' => 'utf8'),
		'MovementDate' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '異動年月日'),
		'ResCardNoticeDate' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '届出年月日'),
		'MunicipalityCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 6, 'collate' => 'utf8_general_ci', 'comment' => '市区町村CD', 'charset' => 'utf8'),
		'ZipCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 9, 'collate' => 'utf8_general_ci', 'comment' => '郵便番号', 'charset' => 'utf8'),
		'AddressJP' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => '漢字住所', 'charset' => 'utf8'),
		'AddressDetailJP' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => '方書（漢字）', 'charset' => 'utf8'),
		'AddressKana' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'comment' => 'カナ住所', 'charset' => 'utf8'),
		'AddressDetailKana' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'comment' => '方書（カナ）', 'charset' => 'utf8'),
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
			'PRIMARY' => array('column' => 'EmpAddressHistID', 'unique' => 1)
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
			'EmpAddressHistID' => 1,
			'PersonID' => 1,
			'EmpNo' => 'Lorem ',
			'MovementDate' => '2013-06-17',
			'ResCardNoticeDate' => '2013-06-17',
			'MunicipalityCD' => 'Lore',
			'ZipCD' => 'Lorem i',
			'AddressJP' => 'Lorem ipsum dolor sit amet',
			'AddressDetailJP' => 'Lorem ipsum dolor sit amet',
			'AddressKana' => 'Lorem ipsum dolor sit amet',
			'AddressDetailKana' => 'Lorem ipsum dolor sit amet',
			'EmpBasicInformationID' => 1,
			'registered_date' => '2013-06-17 23:25:11',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:25:11',
			'updated_by' => 'Lorem ip',
			'latest_flg' => 1,
			'last_key' => 1,
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
