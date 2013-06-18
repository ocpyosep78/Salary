<?php
/**
 * FmShozokuTaiyoHinmokuFixture
 *
 */
class FmShozokuTaiyoHinmokuFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'fm_shozoku_taiyo_hinmoku';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'FiscalYear' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '年度'),
		'DepCD' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 8, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '所属CD', 'charset' => 'utf8'),
		'ClothCD' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 8, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '被服コード（通し番号）', 'charset' => 'utf8'),
		'LendingCondition' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '性別(男、女、共用)', 'charset' => 'utf8'),
		'JobDutyCD1' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 4, 'collate' => 'utf8_general_ci', 'comment' => '職種職務CD１', 'charset' => 'utf8'),
		'JobDutyCD2' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 4, 'collate' => 'utf8_general_ci', 'comment' => '職種職務CD2', 'charset' => 'utf8'),
		'JobDutyCD3' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 4, 'collate' => 'utf8_general_ci', 'comment' => '職種職務CD3', 'charset' => 'utf8'),
		'JobDutyCD4' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 4, 'collate' => 'utf8_general_ci', 'comment' => '職種職務CD4', 'charset' => 'utf8'),
		'JobDutyCD5' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 4, 'collate' => 'utf8_general_ci', 'comment' => '職種職務CD5', 'charset' => 'utf8'),
		'JobDutyCD6' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 4, 'collate' => 'utf8_general_ci', 'comment' => '職種職務CD6', 'charset' => 'utf8'),
		'JobDutyCD7' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 4, 'collate' => 'utf8_general_ci', 'comment' => '職種職務CD7', 'charset' => 'utf8'),
		'JobDutyCD8' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 4, 'collate' => 'utf8_general_ci', 'comment' => '職種職務CD8', 'charset' => 'utf8'),
		'JobDutyCD9' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 4, 'collate' => 'utf8_general_ci', 'comment' => '職種職務CD9', 'charset' => 'utf8'),
		'JobDutyCD10' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 4, 'collate' => 'utf8_general_ci', 'comment' => '職種職務CD10', 'charset' => 'utf8'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'delete_flg' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '削除フラグ : 削除フラグ', 'charset' => 'utf8'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('FiscalYear', 'DepCD', 'ClothCD'), 'unique' => 1)
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
			'FiscalYear' => 1,
			'DepCD' => 'Lorem ',
			'ClothCD' => 'Lorem ',
			'LendingCondition' => 'Lorem ipsum dolor sit ame',
			'JobDutyCD1' => 'Lo',
			'JobDutyCD2' => 'Lo',
			'JobDutyCD3' => 'Lo',
			'JobDutyCD4' => 'Lo',
			'JobDutyCD5' => 'Lo',
			'JobDutyCD6' => 'Lo',
			'JobDutyCD7' => 'Lo',
			'JobDutyCD8' => 'Lo',
			'JobDutyCD9' => 'Lo',
			'JobDutyCD10' => 'Lo',
			'registered_date' => '2013-06-17 23:16:45',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:16:45',
			'updated_by' => 'Lorem ip',
			'delete_flg' => 'Lorem ipsum dolor sit ame',
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
