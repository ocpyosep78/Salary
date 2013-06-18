<?php
/**
 * QmKmSikyuWariaiFixture
 *
 */
class QmKmSikyuWariaiFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'qm_km_sikyu_wariai';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'FiscalYeas' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '年度'),
		'WardMetroDiv' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '区都区分 : 1：区　2：都', 'charset' => 'utf8'),
		'PaidMonth' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 2, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '支給月', 'charset' => 'utf8'),
		'EndDiligenceDiv' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '期末／勤勉区分 : １：期末手当　２：勤勉手当', 'charset' => 'utf8'),
		'UnderAbsenceDays' => array('type' => 'integer', 'null' => false, 'default' => '0', 'key' => 'primary', 'comment' => '未満欠勤日数'),
		'PayRatio' => array('type' => 'float', 'null' => false, 'default' => '0.000', 'length' => '5,3', 'comment' => '支給割合'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'delete_flg' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '削除フラグ : 削除フラグ', 'charset' => 'utf8'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('FiscalYeas', 'WardMetroDiv', 'PaidMonth', 'EndDiligenceDiv', 'UnderAbsenceDays'), 'unique' => 1)
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
			'FiscalYeas' => 1,
			'WardMetroDiv' => 'Lorem ipsum dolor sit ame',
			'PaidMonth' => '',
			'EndDiligenceDiv' => 'Lorem ipsum dolor sit ame',
			'UnderAbsenceDays' => 1,
			'PayRatio' => 1,
			'registered_date' => '2013-06-17 23:37:38',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:37:38',
			'updated_by' => 'Lorem ip',
			'delete_flg' => 'Lorem ipsum dolor sit ame',
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
