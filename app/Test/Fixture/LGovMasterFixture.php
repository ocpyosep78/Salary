<?php
/**
 * LGovMasterFixture
 *
 */
class LGovMasterFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'LGovMaster';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'LGovMasterNo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '市町村マスタNo', 'charset' => 'utf8'),
		'LGovCode' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 6, 'collate' => 'utf8_general_ci', 'comment' => '団体CD', 'charset' => 'utf8'),
		'LGovName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 36, 'collate' => 'utf8_general_ci', 'comment' => '団体名漢字', 'charset' => 'utf8'),
		'LGovNameFuri' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 36, 'collate' => 'utf8_general_ci', 'comment' => '団体名ふりかな', 'charset' => 'utf8'),
		'LGovNameFuriKogaki' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 36, 'collate' => 'utf8_general_ci', 'comment' => '団体名ふりかな小書', 'charset' => 'utf8'),
		'ZipCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 8, 'collate' => 'utf8_general_ci', 'comment' => '郵便番号', 'charset' => 'utf8'),
		'Location_JP' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 96, 'collate' => 'utf8_general_ci', 'comment' => '所在地漢字', 'charset' => 'utf8'),
		'TelNo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 14, 'collate' => 'utf8_general_ci', 'comment' => '電話番号', 'charset' => 'utf8'),
		'BankUpdateDate' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '市町村更新年月日'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'delete_flg' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '削除フラグ : 削除フラグ', 'charset' => 'utf8'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'LGovMasterNo', 'unique' => 1)
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
			'LGovMasterNo' => 'Lorem ip',
			'LGovCode' => 'Lore',
			'LGovName' => 'Lorem ipsum dolor sit amet',
			'LGovNameFuri' => 'Lorem ipsum dolor sit amet',
			'LGovNameFuriKogaki' => 'Lorem ipsum dolor sit amet',
			'ZipCD' => 'Lorem ',
			'Location_JP' => 'Lorem ipsum dolor sit amet',
			'TelNo' => 'Lorem ipsum ',
			'BankUpdateDate' => '2013-06-17',
			'registered_date' => '2013-06-17 23:06:39',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:06:39',
			'updated_by' => 'Lorem ip',
			'delete_flg' => 'Lorem ipsum dolor sit ame',
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
