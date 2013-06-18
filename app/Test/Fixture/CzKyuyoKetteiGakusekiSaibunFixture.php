<?php
/**
 * CzKyuyoKetteiGakusekiSaibunFixture
 *
 */
class CzKyuyoKetteiGakusekiSaibunFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'cz_kyuyo_kettei_gakuseki_saibun';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'SalDecEduBGDetailedCD' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 2, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '給与級合格区分CD', 'charset' => 'utf8'),
		'SalDecEduBGDetailedNAME' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '給与決定学歴再分類名称', 'charset' => 'utf8'),
		'SalDecEduBGDetailedSNAME' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '給与決定学歴再分類略称', 'charset' => 'utf8'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'delete_flg' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '削除フラグ : 削除フラグ', 'charset' => 'utf8'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'SalDecEduBGDetailedCD', 'unique' => 1),
			'CD' => array('column' => 'SalDecEduBGDetailedCD', 'unique' => 1)
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
			'SalDecEduBGDetailedCD' => '',
			'SalDecEduBGDetailedNAME' => 'Lorem ipsum dolor ',
			'SalDecEduBGDetailedSNAME' => 'Lorem ip',
			'registered_date' => '2013-06-17 23:13:08',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:13:08',
			'updated_by' => 'Lorem ip',
			'delete_flg' => 'Lorem ipsum dolor sit ame',
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
