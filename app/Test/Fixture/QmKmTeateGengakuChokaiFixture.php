<?php
/**
 * QmKmTeateGengakuChokaiFixture
 *
 */
class QmKmTeateGengakuChokaiFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'qm_km_teate_gengaku_chokai';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'RevYM' => array('type' => 'date', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '改定年月'),
		'WardMetroDiv' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '区都区分 : 1：区　2：都', 'charset' => 'utf8'),
		'AdminMngerDiv' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '一般職／管理職区分 : １：一般職　２：管理職', 'charset' => 'utf8'),
		'SuspensionReductRate' => array('type' => 'float', 'null' => false, 'default' => '0.0', 'length' => '4,1', 'comment' => '停職減額率'),
		'DeductReductRate' => array('type' => 'float', 'null' => false, 'default' => '0.0', 'length' => '4,1', 'comment' => '減給減額率'),
		'Admin_WarningReductRate' => array('type' => 'float', 'null' => false, 'default' => '0.0', 'length' => '4,1', 'comment' => '戒告減額率'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'delete_flg' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '削除フラグ : 削除フラグ', 'charset' => 'utf8'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('RevYM', 'WardMetroDiv', 'AdminMngerDiv'), 'unique' => 1)
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
			'RevYM' => '2013-06-17',
			'WardMetroDiv' => 'Lorem ipsum dolor sit ame',
			'AdminMngerDiv' => 'Lorem ipsum dolor sit ame',
			'SuspensionReductRate' => 1,
			'DeductReductRate' => 1,
			'Admin_WarningReductRate' => 1,
			'registered_date' => '2013-06-17 23:37:54',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:37:54',
			'updated_by' => 'Lorem ip',
			'delete_flg' => 'Lorem ipsum dolor sit ame',
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
