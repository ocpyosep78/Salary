<?php
/**
 * JmChihoKokyoDantaiFixture
 *
 */
class JmChihoKokyoDantaiFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'jm_chiho_kokyo_dantai';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'MunicipalityCD' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 6, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '地方公共団体ＣＤ', 'charset' => 'utf8'),
		'MunicipalityName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 24, 'collate' => 'utf8_general_ci', 'comment' => '地方公共団体名', 'charset' => 'utf8'),
		'MunicipalityNameKana' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 40, 'collate' => 'utf8_general_ci', 'comment' => 'カナ地方公共団体名', 'charset' => 'utf8'),
		'OfficeZipCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 9, 'collate' => 'utf8_general_ci', 'comment' => '事業所郵便番号', 'charset' => 'utf8'),
		'OfficeAddress' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => '事業所住所', 'charset' => 'utf8'),
		'OfficeTelNo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 11, 'collate' => 'utf8_general_ci', 'comment' => '事業所電話番号', 'charset' => 'utf8'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'delete_flg' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '削除フラグ', 'charset' => 'utf8'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'MunicipalityCD', 'unique' => 1)
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
			'MunicipalityCD' => 'Lore',
			'MunicipalityName' => 'Lorem ipsum dolor sit ',
			'MunicipalityNameKana' => 'Lorem ipsum dolor sit amet',
			'OfficeZipCD' => 'Lorem i',
			'OfficeAddress' => 'Lorem ipsum dolor sit amet',
			'OfficeTelNo' => 'Lorem ips',
			'registered_date' => '2013-06-17 23:21:11',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:21:11',
			'updated_by' => 'Lorem ip',
			'delete_flg' => 'Lorem ipsum dolor sit ame',
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
