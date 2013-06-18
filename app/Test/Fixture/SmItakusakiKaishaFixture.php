<?php
/**
 * SmItakusakiKaishaFixture
 *
 */
class SmItakusakiKaishaFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'sm_itakusaki_kaisha';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'ConsignmentCompanyCD' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 3, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '委託先会社CD', 'charset' => 'utf8'),
		'ConsignmentCompanyName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => '委託先会社名', 'charset' => 'utf8'),
		'Representative' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => '代表者名', 'charset' => 'utf8'),
		'PostalCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 8, 'collate' => 'utf8_general_ci', 'comment' => '郵便番号', 'charset' => 'utf8'),
		'CityCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 6, 'collate' => 'utf8_general_ci', 'comment' => '市区町村CD', 'charset' => 'utf8'),
		'AddressKanji' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => '漢字住所', 'charset' => 'utf8'),
		'SideKanji' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => '漢字方書', 'charset' => 'utf8'),
		'AddressKana' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'comment' => 'カナ住所', 'charset' => 'utf8'),
		'SideKana' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'comment' => 'カナ方書', 'charset' => 'utf8'),
		'AccountExecutiveName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => '営業担当者名', 'charset' => 'utf8'),
		'TelNo1' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 14, 'collate' => 'utf8_general_ci', 'comment' => '電話番号１', 'charset' => 'utf8'),
		'TelNo2' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 14, 'collate' => 'utf8_general_ci', 'comment' => '電話番号２', 'charset' => 'utf8'),
		'TelNo3' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 14, 'collate' => 'utf8_general_ci', 'comment' => '電話番号３', 'charset' => 'utf8'),
		'EmailAddresse1' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 40, 'collate' => 'utf8_general_ci', 'comment' => 'メールアドレス１', 'charset' => 'utf8'),
		'EmailAddresse2' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 40, 'collate' => 'utf8_general_ci', 'comment' => 'メールアドレス２', 'charset' => 'utf8'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'delete_flg' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '削除フラグ', 'charset' => 'utf8'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'ConsignmentCompanyCD', 'unique' => 1)
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
			'ConsignmentCompanyCD' => 'L',
			'ConsignmentCompanyName' => 'Lorem ipsum dolor sit amet',
			'Representative' => 'Lorem ipsum dolor sit amet',
			'PostalCD' => 'Lorem ',
			'CityCD' => 'Lore',
			'AddressKanji' => 'Lorem ipsum dolor sit amet',
			'SideKanji' => 'Lorem ipsum dolor sit amet',
			'AddressKana' => 'Lorem ipsum dolor sit amet',
			'SideKana' => 'Lorem ipsum dolor sit amet',
			'AccountExecutiveName' => 'Lorem ipsum dolor sit amet',
			'TelNo1' => 'Lorem ipsum ',
			'TelNo2' => 'Lorem ipsum ',
			'TelNo3' => 'Lorem ipsum ',
			'EmailAddresse1' => 'Lorem ipsum dolor sit amet',
			'EmailAddresse2' => 'Lorem ipsum dolor sit amet',
			'registered_date' => '2013-06-17 23:59:27',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:59:27',
			'updated_by' => 'Lorem ip',
			'delete_flg' => 'Lorem ipsum dolor sit ame',
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
