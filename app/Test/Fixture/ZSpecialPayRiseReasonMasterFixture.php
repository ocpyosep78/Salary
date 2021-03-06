<?php
/**
 * ZSpecialPayRiseReasonMasterFixture
 *
 */
class ZSpecialPayRiseReasonMasterFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'z_special_pay_rise_reason_master';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'SpPayRiseReasonCD' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 2, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '特別昇給事由CD', 'charset' => 'utf8'),
		'SpPayRiseReasonName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 6, 'collate' => 'utf8_general_ci', 'comment' => '特別昇給事由名称', 'charset' => 'utf8'),
		'SpPayRiseReasonSName2' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '特別昇給事由略称２', 'charset' => 'utf8'),
		'SpPayRiseReasonSName1' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '特別昇給事由CD略称１', 'charset' => 'utf8'),
		'Name_Notice' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 6, 'collate' => 'utf8_general_ci', 'comment' => '通知用名称', 'charset' => 'utf8'),
		'Name_History' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 6, 'collate' => 'utf8_general_ci', 'comment' => '履歴用名称', 'charset' => 'utf8'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'delete_flg' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '削除フラグ : 削除フラグ', 'charset' => 'utf8'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'SpPayRiseReasonCD', 'unique' => 1),
			'ID' => array('column' => 'SpPayRiseReasonCD', 'unique' => 1)
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
			'SpPayRiseReasonCD' => '',
			'SpPayRiseReasonName' => 'Lore',
			'SpPayRiseReasonSName2' => '',
			'SpPayRiseReasonSName1' => 'Lorem ipsum dolor sit ame',
			'Name_Notice' => 'Lore',
			'Name_History' => 'Lore',
			'registered_date' => '2013-06-18 00:06:20',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-18 00:06:20',
			'updated_by' => 'Lorem ip',
			'delete_flg' => 'Lorem ipsum dolor sit ame',
			'effective_date' => '2013-06-18',
			'expired_date' => '2013-06-18'
		),
	);

}
