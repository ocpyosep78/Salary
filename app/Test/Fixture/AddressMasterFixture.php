<?php
/**
 * AddressMasterFixture
 *
 */
class AddressMasterFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'AddressMaster';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'AddressMasterNo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '住所辞書マスタNo', 'charset' => 'utf8'),
		'TownCharCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 11, 'collate' => 'utf8_general_ci', 'comment' => '町字コード', 'charset' => 'utf8'),
		'NewAddressCode' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 7, 'collate' => 'utf8_general_ci', 'comment' => '新町字コード', 'charset' => 'utf8'),
		'ZipCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 7, 'collate' => 'utf8_general_ci', 'comment' => '郵便番号', 'charset' => 'utf8'),
		'CustomerBarcode' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 13, 'collate' => 'utf8_general_ci', 'comment' => 'カスタマバーコード', 'charset' => 'utf8'),
		'LenCustomerBarcode' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => 'カスタマバーコード文字数'),
		'ZipCodeInfo1' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '郵便番号関連情報１', 'charset' => 'utf8'),
		'ZipCodeInfo2' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '郵便番号関連情報２', 'charset' => 'utf8'),
		'InheritFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '親子関係識別フラグ ', 'charset' => 'utf8'),
		'InheritCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 11, 'collate' => 'utf8_general_ci', 'comment' => '親子関係対応コード', 'charset' => 'utf8'),
		'UnPrefCode' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '県名不要CD', 'charset' => 'utf8'),
		'PrefNameKana' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 8, 'collate' => 'utf8_general_ci', 'comment' => '都道府県カナ', 'charset' => 'utf8'),
		'CityNameKana' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 24, 'collate' => 'utf8_general_ci', 'comment' => '市区郡町村カナ', 'charset' => 'utf8'),
		'BlockNameKana' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 36, 'collate' => 'utf8_general_ci', 'comment' => '大字・通称カナ', 'charset' => 'utf8'),
		'BlockNumberEng' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 24, 'collate' => 'utf8_general_ci', 'comment' => '字名・丁目英数', 'charset' => 'utf8'),
		'LenPrefNameKana' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '都道府県カナ文字数'),
		'LenCityNameKana' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '市区郡町村カナ文字数'),
		'LenBlockNameKana' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '大字・通称カナ文字数'),
		'LenBlockNumberEng' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '字名・丁目英数文字数'),
		'TotalLenNameKana' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => 'カナ地名総文字数'),
		'PrefName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 8, 'collate' => 'utf8_general_ci', 'comment' => '都道府県', 'charset' => 'utf8'),
		'CityName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 24, 'collate' => 'utf8_general_ci', 'comment' => '市区郡町村', 'charset' => 'utf8'),
		'BlockName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 36, 'collate' => 'utf8_general_ci', 'comment' => '大字・通称', 'charset' => 'utf8'),
		'BlockNumber' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 24, 'collate' => 'utf8_general_ci', 'comment' => '大字・丁目', 'charset' => 'utf8'),
		'LenPrefName' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '都道府県文字数'),
		'LenCityName' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '市区郡町村文字数'),
		'LenBlockName' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '大字・通称文字数'),
		'LenBlockNumber' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '字名・丁目英数文字数'),
		'TotalLenName' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '地名総文字数'),
		'PrefNameCharType' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '都道府県字種', 'charset' => 'utf8'),
		'CityName1CharType' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '市区郡町村１字種', 'charset' => 'utf8'),
		'CityName2CharType' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '市区郡町村２字種', 'charset' => 'utf8'),
		'BlockName1CharType' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '大字・通称１字種', 'charset' => 'utf8'),
		'BlockName2CharType' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '大字・通称２字種', 'charset' => 'utf8'),
		'BlockNumber1CharType' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '字名・丁目１字種', 'charset' => 'utf8'),
		'BlockNumber2CharType' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '字名・丁目２字種', 'charset' => 'utf8'),
		'StreetNameFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '通り名識別', 'charset' => 'utf8'),
		'BlockNameFlg' => array('type' => 'text', 'null' => true, 'default' => null, 'length' => 1, 'comment' => '大字・字フラグ'),
		'BlockNumberFlg' => array('type' => 'text', 'null' => true, 'default' => null, 'length' => 1, 'comment' => '字・小字フラグ'),
		'PopularNameFlg' => array('type' => 'text', 'null' => true, 'default' => null, 'length' => 1, 'comment' => '通称フラグ'),
		'EffectYM' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 6, 'collate' => 'utf8_general_ci', 'comment' => '施行処理年月 : yyyyMM形式', 'charset' => 'utf8'),
		'InvalidYM' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 6, 'collate' => 'utf8_general_ci', 'comment' => '廃止処理年月 : yyyyMM形式', 'charset' => 'utf8'),
		'NewBlockYM' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 6, 'collate' => 'utf8_general_ci', 'comment' => '新町・字コード処理年月 : yyyyMM形式', 'charset' => 'utf8'),
		'NameChangeYM' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 6, 'collate' => 'utf8_general_ci', 'comment' => '呼称変更処理年月 : yyyyMM形式', 'charset' => 'utf8'),
		'ZipCodeChangeYM' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 6, 'collate' => 'utf8_general_ci', 'comment' => '郵便番号変更処理年月 : yyyyMM形式', 'charset' => 'utf8'),
		'BlockNumberChangeYM' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 6, 'collate' => 'utf8_general_ci', 'comment' => '地番変更処理年月 : yyyyMM形式', 'charset' => 'utf8'),
		'Filter' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '余白', 'charset' => 'utf8'),
		'AdjustCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '修正CD', 'charset' => 'utf8'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'delete_flg' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '削除フラグ : 削除フラグ', 'charset' => 'utf8'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'AddressMasterNo', 'unique' => 1)
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
			'AddressMasterNo' => 'Lorem ip',
			'TownCharCD' => 'Lorem ips',
			'NewAddressCode' => 'Lorem',
			'ZipCD' => 'Lorem',
			'CustomerBarcode' => 'Lorem ipsum',
			'LenCustomerBarcode' => 1,
			'ZipCodeInfo1' => 'Lorem ipsum dolor sit ame',
			'ZipCodeInfo2' => 'Lorem ipsum dolor sit ame',
			'InheritFlg' => '',
			'InheritCD' => 'Lorem ips',
			'UnPrefCode' => 'Lorem ipsum dolor sit ame',
			'PrefNameKana' => 'Lorem ',
			'CityNameKana' => 'Lorem ipsum dolor sit ',
			'BlockNameKana' => 'Lorem ipsum dolor sit amet',
			'BlockNumberEng' => 'Lorem ipsum dolor sit ',
			'LenPrefNameKana' => 1,
			'LenCityNameKana' => 1,
			'LenBlockNameKana' => 1,
			'LenBlockNumberEng' => 1,
			'TotalLenNameKana' => 1,
			'PrefName' => 'Lorem ',
			'CityName' => 'Lorem ipsum dolor sit ',
			'BlockName' => 'Lorem ipsum dolor sit amet',
			'BlockNumber' => 'Lorem ipsum dolor sit ',
			'LenPrefName' => 1,
			'LenCityName' => 1,
			'LenBlockName' => 1,
			'LenBlockNumber' => 1,
			'TotalLenName' => 1,
			'PrefNameCharType' => 'Lorem ipsum dolor sit ame',
			'CityName1CharType' => 'Lorem ipsum dolor sit ame',
			'CityName2CharType' => 'Lorem ipsum dolor sit ame',
			'BlockName1CharType' => 'Lorem ipsum dolor sit ame',
			'BlockName2CharType' => 'Lorem ipsum dolor sit ame',
			'BlockNumber1CharType' => 'Lorem ipsum dolor sit ame',
			'BlockNumber2CharType' => 'Lorem ipsum dolor sit ame',
			'StreetNameFlg' => 'Lorem ipsum dolor sit ame',
			'BlockNameFlg' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'BlockNumberFlg' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'PopularNameFlg' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'EffectYM' => 'Lore',
			'InvalidYM' => 'Lore',
			'NewBlockYM' => 'Lore',
			'NameChangeYM' => 'Lore',
			'ZipCodeChangeYM' => 'Lore',
			'BlockNumberChangeYM' => 'Lore',
			'Filter' => 'Lorem ipsum dolor sit ame',
			'AdjustCD' => 'Lorem ipsum dolor sit ame',
			'registered_date' => '2013-06-17 23:03:19',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:03:19',
			'updated_by' => 'Lorem ip',
			'delete_flg' => 'Lorem ipsum dolor sit ame',
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
