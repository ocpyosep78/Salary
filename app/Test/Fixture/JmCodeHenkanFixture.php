<?php
/**
 * JmCodeHenkanFixture
 *
 */
class JmCodeHenkanFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'jm_code_henkan';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'ConvItemCD' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 2, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '変換項目CD', 'charset' => 'utf8'),
		'OrderOfPriority' => array('type' => 'integer', 'null' => false, 'default' => null, 'comment' => '優先順位'),
		'CondItemCD1' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '条件項目CD1', 'charset' => 'utf8'),
		'CondItemFROM1' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '条件項目FROM1', 'charset' => 'utf8'),
		'CondItemTO1' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '条件項目TO1', 'charset' => 'utf8'),
		'CondItemCD2' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '条件項目CD2', 'charset' => 'utf8'),
		'CondItemFROM2' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '条件項目FROM2', 'charset' => 'utf8'),
		'CondItemTO2' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '条件項目TO2', 'charset' => 'utf8'),
		'ConvertedValue' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '変換値', 'charset' => 'utf8'),
		'Notes' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 80, 'collate' => 'utf8_general_ci', 'comment' => '備考', 'charset' => 'utf8'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'delete_flg' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '削除フラグ', 'charset' => 'utf8'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'ConvItemCD', 'unique' => 1)
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
			'ConvItemCD' => '',
			'OrderOfPriority' => 1,
			'CondItemCD1' => '',
			'CondItemFROM1' => 'Lorem ip',
			'CondItemTO1' => 'Lorem ip',
			'CondItemCD2' => '',
			'CondItemFROM2' => 'Lorem ip',
			'CondItemTO2' => 'Lorem ip',
			'ConvertedValue' => 'Lorem ip',
			'Notes' => 'Lorem ipsum dolor sit amet',
			'registered_date' => '2013-06-17 23:21:18',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:21:18',
			'updated_by' => 'Lorem ip',
			'delete_flg' => 'Lorem ipsum dolor sit ame',
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
