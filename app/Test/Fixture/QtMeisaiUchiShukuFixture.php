<?php
/**
 * QtMeisaiUchiShukuFixture
 *
 */
class QtMeisaiUchiShukuFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'qt_meisai_uchi_shuku';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'PaidYM' => array('type' => 'date', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '支給年月'),
		'EmpNo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 8, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '職員番号', 'charset' => 'utf8'),
		'PaidDiv' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 2, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '支給区分', 'charset' => 'utf8'),
		'PayerDiv' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 2, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '支払者区分', 'charset' => 'utf8'),
		'TableNo' => array('type' => 'integer', 'null' => false, 'default' => '1', 'key' => 'primary', 'comment' => 'テーブルNo'),
		'JobGradeCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '職層CD', 'charset' => 'utf8'),
		'AllowDetailCD' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 4, 'collate' => 'utf8_general_ci', 'comment' => '手当詳細CD', 'charset' => 'utf8'),
		'AccountCD' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 12, 'collate' => 'utf8_general_ci', 'comment' => '科目CD', 'charset' => 'utf8'),
		'WorkTimes_ND' => array('type' => 'integer', 'null' => true, 'default' => '0', 'comment' => '宿日直回数'),
		'Payments' => array('type' => 'float', 'null' => true, 'default' => '0', 'length' => 10, 'comment' => '支給額'),
		'Payments_NonTax' => array('type' => 'float', 'null' => true, 'default' => '0', 'length' => 10, 'comment' => '非課税額'),
		'Payments_Tax' => array('type' => 'float', 'null' => true, 'default' => '0', 'length' => 10, 'comment' => '課税額'),
		'EmpDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '職員区分', 'charset' => 'utf8'),
		'JobDutyCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 3, 'collate' => 'utf8_general_ci', 'comment' => '職種職務ＣＤ', 'charset' => 'utf8'),
		'DepCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 8, 'collate' => 'utf8_general_ci', 'comment' => '所属ＣＤ', 'charset' => 'utf8'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'delete_flg' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '削除フラグ', 'charset' => 'utf8'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('PaidYM', 'EmpNo', 'PaidDiv', 'PayerDiv', 'TableNo'), 'unique' => 1)
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
			'PaidYM' => '2013-06-17',
			'EmpNo' => 'Lorem ',
			'PaidDiv' => '',
			'PayerDiv' => '',
			'TableNo' => 1,
			'JobGradeCD' => '',
			'AllowDetailCD' => 'Lo',
			'AccountCD' => 'Lorem ipsu',
			'WorkTimes_ND' => 1,
			'Payments' => 1,
			'Payments_NonTax' => 1,
			'Payments_Tax' => 1,
			'EmpDiv' => '',
			'JobDutyCD' => 'L',
			'DepCD' => 'Lorem ',
			'registered_date' => '2013-06-17 23:50:12',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:50:12',
			'updated_by' => 'Lorem ip',
			'delete_flg' => 'Lorem ipsum dolor sit ame',
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
