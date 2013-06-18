<?php
/**
 * FtHifukuMitsumoriIraiFixture
 *
 */
class FtHifukuMitsumoriIraiFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'ft_hifuku_mitsumori_irai';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'DataDiv' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => 'データ区分', 'charset' => 'utf8'),
		'FiscalYear' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '年度'),
		'ClothCD' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 8, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '被服コード（通し番号）', 'charset' => 'utf8'),
		'DepCD' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 8, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '所属CD', 'charset' => 'utf8'),
		'SeqNo' => array('type' => 'float', 'null' => false, 'default' => '1', 'length' => 2, 'key' => 'primary', 'comment' => '連番'),
		'Standard' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 18, 'collate' => 'utf8_general_ci', 'comment' => '規格', 'charset' => 'utf8'),
		'Size' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 8, 'collate' => 'utf8_general_ci', 'comment' => 'サイズ', 'charset' => 'utf8'),
		'Variation' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 8, 'collate' => 'utf8_general_ci', 'comment' => '種類（色、丈等）', 'charset' => 'utf8'),
		'LendQuantity' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 4, 'comment' => '貸与予定数量'),
		'AdjustQuantity' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 4, 'comment' => '在庫調整数量'),
		'PurchasingQuantity' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 4, 'comment' => '発注合計数量'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'delete_flg' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '削除フラグ : 削除フラグ', 'charset' => 'utf8'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('DataDiv', 'FiscalYear', 'ClothCD', 'DepCD', 'SeqNo'), 'unique' => 1)
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
			'DataDiv' => 'Lorem ipsum dolor sit ame',
			'FiscalYear' => 1,
			'ClothCD' => 'Lorem ',
			'DepCD' => 'Lorem ',
			'SeqNo' => 1,
			'Standard' => 'Lorem ipsum dolo',
			'Size' => 'Lorem ',
			'Variation' => 'Lorem ',
			'LendQuantity' => 1,
			'AdjustQuantity' => 1,
			'PurchasingQuantity' => 1,
			'registered_date' => '2013-06-17 23:17:55',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:17:55',
			'updated_by' => 'Lorem ip',
			'delete_flg' => 'Lorem ipsum dolor sit ame',
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
