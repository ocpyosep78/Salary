<?php
/**
 * QmKyuyoShiharaishaFixture
 *
 */
class QmKyuyoShiharaishaFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'qm_kyuyo_shiharaisha';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'PayerDiv' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 2, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '給与支払者区分', 'charset' => 'utf8'),
		'PayerNameKana' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => '支払者名カナ', 'charset' => 'utf8'),
		'PayerName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => '支払者名漢字', 'charset' => 'utf8'),
		'PayerShortName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '支払者名略称', 'charset' => 'utf8'),
		'RepresentativeName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '代表者氏名', 'charset' => 'utf8'),
		'RepresentativeNameKana' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 40, 'collate' => 'utf8_general_ci', 'comment' => '代表者氏名カナ', 'charset' => 'utf8'),
		'ZipCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 9, 'collate' => 'utf8_general_ci', 'comment' => '郵便番号', 'charset' => 'utf8'),
		'MunicipalityCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 6, 'collate' => 'utf8_general_ci', 'comment' => '市区町村CD', 'charset' => 'utf8'),
		'AddressJP' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => '漢字住所', 'charset' => 'utf8'),
		'AddressDetailJP' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => '漢字住所方書', 'charset' => 'utf8'),
		'AddressKana' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'comment' => 'カナ住所', 'charset' => 'utf8'),
		'AddressDetailKana' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'comment' => 'カナ住所方書', 'charset' => 'utf8'),
		'TelNo1' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 11, 'collate' => 'utf8_general_ci', 'comment' => '電話番号1', 'charset' => 'utf8'),
		'TelNo2' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 11, 'collate' => 'utf8_general_ci', 'comment' => '電話番号2', 'charset' => 'utf8'),
		'TelNo3' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 11, 'collate' => 'utf8_general_ci', 'comment' => '電話番号3', 'charset' => 'utf8'),
		'MonthlyRemitClientNo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 14, 'collate' => 'utf8_general_ci', 'comment' => '例月_振込依頼人番号', 'charset' => 'utf8'),
		'MonthlyDepositClientNo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 14, 'collate' => 'utf8_general_ci', 'comment' => '例月_預入依頼人番号', 'charset' => 'utf8'),
		'EndDiligenceRemitClientNo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 14, 'collate' => 'utf8_general_ci', 'comment' => '期末勤勉_振込依頼人番号', 'charset' => 'utf8'),
		'EndDiligenceDepositClientNo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 14, 'collate' => 'utf8_general_ci', 'comment' => '期末勤勉_預入依頼人番号', 'charset' => 'utf8'),
		'RetireRemitClientNo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 14, 'collate' => 'utf8_general_ci', 'comment' => '退職手当_振込依頼人番号', 'charset' => 'utf8'),
		'RetireDepositClientNo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 14, 'collate' => 'utf8_general_ci', 'comment' => '退職手当_振込依頼人番号', 'charset' => 'utf8'),
		'LocalTaxClientNo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 14, 'collate' => 'utf8_general_ci', 'comment' => '住民税納付_依頼人番号', 'charset' => 'utf8'),
		'TaxOfficeReferenceNo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 13, 'collate' => 'utf8_general_ci', 'comment' => '税務署整理番号', 'charset' => 'utf8'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'delete_flg' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '削除フラグ : 削除フラグ', 'charset' => 'utf8'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'PayerDiv', 'unique' => 1)
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
			'PayerDiv' => '',
			'PayerNameKana' => 'Lorem ipsum dolor sit amet',
			'PayerName' => 'Lorem ipsum dolor sit amet',
			'PayerShortName' => 'Lorem ip',
			'RepresentativeName' => 'Lorem ipsum dolor ',
			'RepresentativeNameKana' => 'Lorem ipsum dolor sit amet',
			'ZipCD' => 'Lorem i',
			'MunicipalityCD' => 'Lore',
			'AddressJP' => 'Lorem ipsum dolor sit amet',
			'AddressDetailJP' => 'Lorem ipsum dolor sit amet',
			'AddressKana' => 'Lorem ipsum dolor sit amet',
			'AddressDetailKana' => 'Lorem ipsum dolor sit amet',
			'TelNo1' => 'Lorem ips',
			'TelNo2' => 'Lorem ips',
			'TelNo3' => 'Lorem ips',
			'MonthlyRemitClientNo' => 'Lorem ipsum ',
			'MonthlyDepositClientNo' => 'Lorem ipsum ',
			'EndDiligenceRemitClientNo' => 'Lorem ipsum ',
			'EndDiligenceDepositClientNo' => 'Lorem ipsum ',
			'RetireRemitClientNo' => 'Lorem ipsum ',
			'RetireDepositClientNo' => 'Lorem ipsum ',
			'LocalTaxClientNo' => 'Lorem ipsum ',
			'TaxOfficeReferenceNo' => 'Lorem ipsum',
			'registered_date' => '2013-06-17 23:38:56',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:38:56',
			'updated_by' => 'Lorem ip',
			'delete_flg' => 'Lorem ipsum dolor sit ame',
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
