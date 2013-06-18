<?php
/**
 * BankMasterFixture
 *
 */
class BankMasterFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'BankMaster';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'BankMasterNo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '金融機関マスタNo : 金融機関マスタNo', 'charset' => 'utf8'),
		'BankCode' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 4, 'collate' => 'utf8_general_ci', 'comment' => '銀行CD : 銀行CD', 'charset' => 'utf8'),
		'BankBranchCode' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 3, 'collate' => 'utf8_general_ci', 'comment' => '店舗コード : 店舗コード', 'charset' => 'utf8'),
		'BankNameKana' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 16, 'collate' => 'utf8_general_ci', 'comment' => '銀行名カナ : 銀行名カナ', 'charset' => 'utf8'),
		'BankBrancheName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 32, 'collate' => 'utf8_general_ci', 'comment' => '店舗名漢字 : 店舗名漢字', 'charset' => 'utf8'),
		'BankTypeDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 3, 'collate' => 'utf8_general_ci', 'comment' => '金融機関種別 : 金融機関種別', 'charset' => 'utf8'),
		'BillTransPlaceNumber' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 4, 'collate' => 'utf8_general_ci', 'comment' => '手形交換所番号 : 手形交換所番号', 'charset' => 'utf8'),
		'LocationPrefKana' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 16, 'collate' => 'utf8_general_ci', 'comment' => '所在地都道府県カナ : 所在地都道府県カナ', 'charset' => 'utf8'),
		'LocationCityKana' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 96, 'collate' => 'utf8_general_ci', 'comment' => '所在地市区町村カナ : 所在地市区町村カナ', 'charset' => 'utf8'),
		'Location_JP' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 96, 'collate' => 'utf8_general_ci', 'comment' => '所在地漢字 : 所在地漢字', 'charset' => 'utf8'),
		'StreetNum_Eng' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 16, 'collate' => 'utf8_general_ci', 'comment' => '番地方書英数 : 番地方書英数', 'charset' => 'utf8'),
		'StreetNum_JP' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 32, 'collate' => 'utf8_general_ci', 'comment' => '番地方書漢字 : 番地方書漢字', 'charset' => 'utf8'),
		'TelNo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 14, 'collate' => 'utf8_general_ci', 'comment' => '電話番号 : 電話番号', 'charset' => 'utf8'),
		'ZipCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 8, 'collate' => 'utf8_general_ci', 'comment' => '郵便番号 : 郵便番号', 'charset' => 'utf8'),
		'MainBranchDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '本店支店区分 : 本店支店区分', 'charset' => 'utf8'),
		'ZenginFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '全銀加連フラグ : 全銀加連フラグ', 'charset' => 'utf8'),
		'TagFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '付加コード : 付加コード', 'charset' => 'utf8'),
		'BankUpdateDate' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '金融機関更新年月日 : 金融機関更新年月日'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'delete_flg' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '削除フラグ : 削除フラグ', 'charset' => 'utf8'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'BankMasterNo', 'unique' => 1)
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
			'BankMasterNo' => 'Lorem ip',
			'BankCode' => 'Lo',
			'BankBranchCode' => 'L',
			'BankNameKana' => 'Lorem ipsum do',
			'BankBrancheName' => 'Lorem ipsum dolor sit amet',
			'BankTypeDiv' => 'L',
			'BillTransPlaceNumber' => 'Lo',
			'LocationPrefKana' => 'Lorem ipsum do',
			'LocationCityKana' => 'Lorem ipsum dolor sit amet',
			'Location_JP' => 'Lorem ipsum dolor sit amet',
			'StreetNum_Eng' => 'Lorem ipsum do',
			'StreetNum_JP' => 'Lorem ipsum dolor sit amet',
			'TelNo' => 'Lorem ipsum ',
			'ZipCD' => 'Lorem ',
			'MainBranchDiv' => 'Lorem ipsum dolor sit ame',
			'ZenginFlg' => 'Lorem ipsum dolor sit ame',
			'TagFlg' => 'Lorem ipsum dolor sit ame',
			'BankUpdateDate' => '2013-06-17',
			'registered_date' => '2013-06-17 23:03:27',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:03:27',
			'updated_by' => 'Lorem ip',
			'delete_flg' => 'Lorem ipsum dolor sit ame',
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
