<?php
/**
 * QmSiteiNoFixture
 *
 */
class QmSiteiNoFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'qm_sitei_no';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'SponserCD' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 2, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '給与支払者CD', 'charset' => 'utf8'),
		'MunicipalityCD' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 6, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '市区町村CD', 'charset' => 'utf8'),
		'SpecifyNo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '指定番号', 'charset' => 'utf8'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'delete_flg' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '削除フラグ : 削除フラグ', 'charset' => 'utf8'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('SponserCD', 'MunicipalityCD'), 'unique' => 1)
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
			'SponserCD' => '',
			'MunicipalityCD' => 'Lore',
			'SpecifyNo' => 'Lorem ipsum dolor ',
			'registered_date' => '2013-06-17 23:40:38',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:40:38',
			'updated_by' => 'Lorem ip',
			'delete_flg' => 'Lorem ipsum dolor sit ame',
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
