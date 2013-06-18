<?php
/**
 * SmKensyuKaijouFixture
 *
 */
class SmKensyuKaijouFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'sm_kensyu_kaijou';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'LectureHallCD' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 9, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '会場CD', 'charset' => 'utf8'),
		'NewDate' => array('type' => 'date', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '新設年月日'),
		'AbolitionDate' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '廃止年月日'),
		'LectureHallDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '会場区分', 'charset' => 'utf8'),
		'LectureHallName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => '会場正式名', 'charset' => 'utf8'),
		'LectureHallShortName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '会場短縮名', 'charset' => 'utf8'),
		'PostalCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 8, 'collate' => 'utf8_general_ci', 'comment' => '郵便番号', 'charset' => 'utf8'),
		'CityCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 6, 'collate' => 'utf8_general_ci', 'comment' => '市区町村CD', 'charset' => 'utf8'),
		'AddressKanji' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => '漢字住所', 'charset' => 'utf8'),
		'SideKanji' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => '漢字方書', 'charset' => 'utf8'),
		'TelNo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 14, 'collate' => 'utf8_general_ci', 'comment' => '電話番号', 'charset' => 'utf8'),
		'FaxNo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 12, 'collate' => 'utf8_general_ci', 'comment' => 'FAX番号', 'charset' => 'utf8'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'delete_flg' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '削除フラグ', 'charset' => 'utf8'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('LectureHallCD', 'NewDate'), 'unique' => 1)
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
			'LectureHallCD' => 'Lorem i',
			'NewDate' => '2013-06-18',
			'AbolitionDate' => '2013-06-18',
			'LectureHallDiv' => 'Lorem ipsum dolor sit ame',
			'LectureHallName' => 'Lorem ipsum dolor sit amet',
			'LectureHallShortName' => 'Lorem ipsum dolor ',
			'PostalCD' => 'Lorem ',
			'CityCD' => 'Lore',
			'AddressKanji' => 'Lorem ipsum dolor sit amet',
			'SideKanji' => 'Lorem ipsum dolor sit amet',
			'TelNo' => 'Lorem ipsum ',
			'FaxNo' => 'Lorem ipsu',
			'registered_date' => '2013-06-18 00:01:10',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-18 00:01:10',
			'updated_by' => 'Lorem ip',
			'delete_flg' => 'Lorem ipsum dolor sit ame',
			'effective_date' => '2013-06-18',
			'expired_date' => '2013-06-18'
		),
	);

}
