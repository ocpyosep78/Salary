<?php
/**
 * FmTaiyoHinmokuFixture
 *
 */
class FmTaiyoHinmokuFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'fm_taiyo_hinmoku';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'FiscalYear' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '年度'),
		'ClothCD' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 8, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '被服コード（通し番号）', 'charset' => 'utf8'),
		'ClothName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'utf8_general_ci', 'comment' => '被服正式名称', 'charset' => 'utf8'),
		'ClothSName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'utf8_general_ci', 'comment' => '被服短縮名称', 'charset' => 'utf8'),
		'ClothDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '被服種別', 'charset' => 'utf8'),
		'ReferencePrice' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 6, 'comment' => '参考価格'),
		'Remarks' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => '備考', 'charset' => 'utf8'),
		'LendingCondition' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '性別(男、女、共用)', 'charset' => 'utf8'),
		'LendingPeriod' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 2, 'comment' => '貸与年数'),
		'BaseQuantity' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 2, 'comment' => '基本の数量'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'delete_flg' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '削除フラグ : 削除フラグ', 'charset' => 'utf8'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('FiscalYear', 'ClothCD'), 'unique' => 1)
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
			'ClothCD' => 'Lorem ',
			'ClothName' => 'Lorem ipsum dolor sit amet',
			'ClothSName' => 'Lorem ipsum dolor sit amet',
			'ClothDiv' => 'Lorem ipsum dolor sit ame',
			'ReferencePrice' => 1,
			'Remarks' => 'Lorem ipsum dolor sit amet',
			'LendingCondition' => 'Lorem ipsum dolor sit ame',
			'LendingPeriod' => 1,
			'BaseQuantity' => 1,
			'registered_date' => '2013-06-17 23:17:09',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:17:09',
			'updated_by' => 'Lorem ip',
			'delete_flg' => 'Lorem ipsum dolor sit ame',
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
