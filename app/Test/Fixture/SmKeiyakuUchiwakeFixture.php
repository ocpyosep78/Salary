<?php
/**
 * SmKeiyakuUchiwakeFixture
 *
 */
class SmKeiyakuUchiwakeFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'sm_keiyaku_uchiwake';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'FiscalYear' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 4, 'key' => 'primary', 'comment' => '研修年度'),
		'TrainingCD' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 9, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '研修CD', 'charset' => 'utf8'),
		'ConsignmentCompanyCD' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 3, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '委託先会社CD', 'charset' => 'utf8'),
		'SeqNo' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '連番'),
		'TrainingName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => '研修正式名', 'charset' => 'utf8'),
		'Standard' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '規格', 'charset' => 'utf8'),
		'UnitPrice' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 9, 'comment' => '単価'),
		'Quantity' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 3, 'comment' => '数量'),
		'NumberOfPayments' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 2, 'comment' => '支払回数'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'delete_flg' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '削除フラグ', 'charset' => 'utf8'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('FiscalYear', 'TrainingCD', 'ConsignmentCompanyCD', 'SeqNo'), 'unique' => 1)
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
			'TrainingCD' => 'Lorem i',
			'ConsignmentCompanyCD' => 'L',
			'SeqNo' => 1,
			'TrainingName' => 'Lorem ipsum dolor sit amet',
			'Standard' => 'Lorem ip',
			'UnitPrice' => 1,
			'Quantity' => 1,
			'NumberOfPayments' => 1,
			'registered_date' => '2013-06-18 00:00:38',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-18 00:00:38',
			'updated_by' => 'Lorem ip',
			'delete_flg' => 'Lorem ipsum dolor sit ame',
			'effective_date' => '2013-06-18',
			'expired_date' => '2013-06-18'
		),
	);

}
