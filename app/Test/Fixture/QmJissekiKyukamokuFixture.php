<?php
/**
 * QmJissekiKyukamokuFixture
 *
 */
class QmJissekiKyukamokuFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'qm_jisseki_kyukamoku';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'FiscalYear' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '年度'),
		'AllowanceCD' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 6, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '手当CD', 'charset' => 'utf8'),
		'DeptCD_From' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 8, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '対象所属の範囲1_from', 'charset' => 'utf8'),
		'DeptCD_To' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 8, 'collate' => 'utf8_general_ci', 'comment' => '対象所属の範囲1_To', 'charset' => 'utf8'),
		'AccountExceptBasicAccount' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 12, 'collate' => 'utf8_general_ci', 'comment' => '基本科目以外に使用できる科目', 'charset' => 'utf8'),
		'NonDepartmentSpecificFlg' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '全庁使用可能フラグ', 'charset' => 'utf8'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'delete_flg' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '削除フラグ', 'charset' => 'utf8'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('FiscalYear', 'AllowanceCD', 'DeptCD_From'), 'unique' => 1)
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
			'AllowanceCD' => 'Lore',
			'DeptCD_From' => 'Lorem ',
			'DeptCD_To' => 'Lorem ',
			'AccountExceptBasicAccount' => 'Lorem ipsu',
			'NonDepartmentSpecificFlg' => 'Lorem ipsum dolor sit ame',
			'registered_date' => '2013-06-17 23:34:00',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:34:00',
			'updated_by' => 'Lorem ip',
			'delete_flg' => 'Lorem ipsum dolor sit ame',
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
