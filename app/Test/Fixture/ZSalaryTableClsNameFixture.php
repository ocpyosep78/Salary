<?php
/**
 * ZSalaryTableClsNameFixture
 *
 */
class ZSalaryTableClsNameFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'z_salary_table_cls_name';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'SalaryTable' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 2, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '給料表CD', 'charset' => 'utf8'),
		'SalaryClass' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 2, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '級', 'charset' => 'utf8'),
		'SalaryClassName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '級名称', 'charset' => 'utf8'),
		'SalaryClassNameShort' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '級略称', 'charset' => 'utf8'),
		'AmoPerMonthDayHourDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'key' => 'index', 'collate' => 'utf8_general_ci', 'comment' => '月額日額時給区分', 'charset' => 'utf8'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'delete_flg' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '削除フラグ : 削除フラグ', 'charset' => 'utf8'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('SalaryTable', 'SalaryClass'), 'unique' => 1),
			'PK_z_salary_table_cls_name' => array('column' => array('SalaryTable', 'SalaryClass'), 'unique' => 1),
			'AmoPerMonthDayHourDiv' => array('column' => 'AmoPerMonthDayHourDiv', 'unique' => 0)
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
			'SalaryTable' => '',
			'SalaryClass' => '',
			'SalaryClassName' => 'Lorem ipsum dolor ',
			'SalaryClassNameShort' => 'Lorem ip',
			'AmoPerMonthDayHourDiv' => 'Lorem ipsum dolor sit ame',
			'registered_date' => '2013-06-18 00:05:40',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-18 00:05:40',
			'updated_by' => 'Lorem ip',
			'delete_flg' => 'Lorem ipsum dolor sit ame',
			'effective_date' => '2013-06-18',
			'expired_date' => '2013-06-18'
		),
	);

}
