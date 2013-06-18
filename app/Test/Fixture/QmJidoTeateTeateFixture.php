<?php
/**
 * QmJidoTeateTeateFixture
 *
 */
class QmJidoTeateTeateFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'qm_jido_teate_teate';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'RevYM' => array('type' => 'date', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '改定年月'),
		'AgeLowerLimitCondOver' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '下限年齢条件_以上'),
		'AgeUpperLimitCondLess' => array('type' => 'integer', 'null' => false, 'default' => null, 'comment' => '上限年齢条件_未満'),
		'AgeLowerLimitCondDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '下限年齢条件区分', 'charset' => 'utf8'),
		'AgeUpperLimitCondDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '上限年齢条件区分', 'charset' => 'utf8'),
		'Amounts_1st' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '支給額_一人目'),
		'Amounts_2nd' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '支給額_二人目'),
		'Amounts_3rd' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '支給額_三人目以降'),
		'Amounts_SP' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '支給額_特例給付'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'delete_flg' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '削除フラグ : 削除フラグ', 'charset' => 'utf8'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('RevYM', 'AgeLowerLimitCondOver'), 'unique' => 1)
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
			'AgeLowerLimitCondOver' => 1,
			'AgeUpperLimitCondLess' => 1,
			'AgeLowerLimitCondDiv' => 'Lorem ipsum dolor sit ame',
			'AgeUpperLimitCondDiv' => 'Lorem ipsum dolor sit ame',
			'Amounts_1st' => 1,
			'Amounts_2nd' => 1,
			'Amounts_3rd' => 1,
			'Amounts_SP' => 1,
			'registered_date' => '2013-06-17 23:33:52',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:33:52',
			'updated_by' => 'Lorem ip',
			'delete_flg' => 'Lorem ipsum dolor sit ame',
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
