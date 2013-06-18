<?php
/**
 * ZOrderTypeDivmasterFixture
 *
 */
class ZOrderTypeDivmasterFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'z_order_type_divmaster';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'OrderTypeDiv' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 2, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '発令分類区分', 'charset' => 'utf8'),
		'OrderTypeDivName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 8, 'collate' => 'utf8_general_ci', 'comment' => '発令分類区分名称', 'charset' => 'utf8'),
		'NoticeGroup' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '通知書グループ', 'charset' => 'utf8'),
		'ConcurrentJob' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '兼職兼務', 'charset' => 'utf8'),
		'FireFight' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '消防発令', 'charset' => 'utf8'),
		'TypeReg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '種別登録', 'charset' => 'utf8'),
		'IndivReg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '個別登録', 'charset' => 'utf8'),
		'PayLink' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '給与連携', 'charset' => 'utf8'),
		'TypeCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 3, 'collate' => 'utf8_general_ci', 'comment' => '種別CD', 'charset' => 'utf8'),
		'IndivCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 3, 'collate' => 'utf8_general_ci', 'comment' => '個別CD', 'charset' => 'utf8'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'delete_flg' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '削除フラグ : 削除フラグ', 'charset' => 'utf8'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'OrderTypeDiv', 'unique' => 1),
			'ID' => array('column' => 'OrderTypeDiv', 'unique' => 1)
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
			'OrderTypeDiv' => '',
			'OrderTypeDivName' => 'Lorem ',
			'NoticeGroup' => '',
			'ConcurrentJob' => 'Lorem ipsum dolor sit ame',
			'FireFight' => 'Lorem ipsum dolor sit ame',
			'TypeReg' => 'Lorem ipsum dolor sit ame',
			'IndivReg' => 'Lorem ipsum dolor sit ame',
			'PayLink' => 'Lorem ipsum dolor sit ame',
			'TypeCD' => 'L',
			'IndivCD' => 'L',
			'registered_date' => '2013-06-18 00:05:08',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-18 00:05:08',
			'updated_by' => 'Lorem ip',
			'delete_flg' => 'Lorem ipsum dolor sit ame',
			'effective_date' => '2013-06-18',
			'expired_date' => '2013-06-18'
		),
	);

}
