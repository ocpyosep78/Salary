<?php
/**
 * FmTaiyoHifukuFixture
 *
 */
class FmTaiyoHifukuFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'fm_taiyo_hifuku';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'FiscalYear' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '年度'),
		'EmpNo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 8, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '職員番号', 'charset' => 'utf8'),
		'SeqNo' => array('type' => 'float', 'null' => false, 'default' => '1', 'length' => 2, 'key' => 'primary', 'comment' => '連番'),
		'DepCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 8, 'collate' => 'utf8_general_ci', 'comment' => '所属CD', 'charset' => 'utf8'),
		'JobDutyCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 4, 'collate' => 'utf8_general_ci', 'comment' => '職種職務CD', 'charset' => 'utf8'),
		'LendingCondition' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '性別(男、女、共用)', 'charset' => 'utf8'),
		'ClothCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 8, 'collate' => 'utf8_general_ci', 'comment' => '被服コード（通し番号）', 'charset' => 'utf8'),
		'ClothSName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'utf8_general_ci', 'comment' => '被服短縮名称', 'charset' => 'utf8'),
		'LentDepCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 8, 'collate' => 'utf8_general_ci', 'comment' => '貸与時所属CD', 'charset' => 'utf8'),
		'LentDeptName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '貸与時所属名称', 'charset' => 'utf8'),
		'Standard' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 18, 'collate' => 'utf8_general_ci', 'comment' => '規格', 'charset' => 'utf8'),
		'LendingPeriod' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 2, 'comment' => '貸与年数'),
		'Size' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 8, 'collate' => 'utf8_general_ci', 'comment' => 'サイズ', 'charset' => 'utf8'),
		'Variation' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 8, 'collate' => 'utf8_general_ci', 'comment' => '種類（色、丈等）', 'charset' => 'utf8'),
		'LentDate' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '貸与年月'),
		'LendingQuantity' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 2, 'comment' => '数量'),
		'ExpirationDate' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '満了年月'),
		'PurchasedLentDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '購入済貸与済区分', 'charset' => 'utf8'),
		'RefusalDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '辞退区分', 'charset' => 'utf8'),
		'RetiredDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '退職済区分', 'charset' => 'utf8'),
		'DetachedDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '派遣者区分', 'charset' => 'utf8'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'delete_flg' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '削除フラグ : 削除フラグ', 'charset' => 'utf8'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('FiscalYear', 'EmpNo', 'SeqNo'), 'unique' => 1)
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
			'EmpNo' => 'Lorem ',
			'SeqNo' => 1,
			'DepCD' => 'Lorem ',
			'JobDutyCD' => 'Lo',
			'LendingCondition' => 'Lorem ipsum dolor sit ame',
			'ClothCD' => 'Lorem ',
			'ClothSName' => 'Lorem ipsum dolor sit amet',
			'LentDepCD' => 'Lorem ',
			'LentDeptName' => 'Lorem ip',
			'Standard' => 'Lorem ipsum dolo',
			'LendingPeriod' => 1,
			'Size' => 'Lorem ',
			'Variation' => 'Lorem ',
			'LentDate' => '2013-06-17',
			'LendingQuantity' => 1,
			'ExpirationDate' => '2013-06-17',
			'PurchasedLentDiv' => 'Lorem ipsum dolor sit ame',
			'RefusalDiv' => 'Lorem ipsum dolor sit ame',
			'RetiredDiv' => 'Lorem ipsum dolor sit ame',
			'DetachedDiv' => 'Lorem ipsum dolor sit ame',
			'registered_date' => '2013-06-17 23:17:01',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:17:01',
			'updated_by' => 'Lorem ip',
			'delete_flg' => 'Lorem ipsum dolor sit ame',
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
