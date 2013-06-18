<?php
/**
 * QtSeitoUchiNorituFixture
 *
 */
class QtSeitoUchiNorituFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'qt_seito_uchi_noritu';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'ResultsYM' => array('type' => 'date', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '実績年月'),
		'DailyRateStartDate' => array('type' => 'date', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '日割起算年月日'),
		'PaidDate' => array('type' => 'date', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '支給年月'),
		'EmpNo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 8, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '職員番号', 'charset' => 'utf8'),
		'PayerDiv' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 2, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '支払者区分', 'charset' => 'utf8'),
		'TableNo' => array('type' => 'integer', 'null' => false, 'default' => '1', 'key' => 'primary', 'comment' => 'テーブルNo'),
		'AllowDetailCD' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 4, 'collate' => 'utf8_general_ci', 'comment' => '手当詳細CD', 'charset' => 'utf8'),
		'AccountCD' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 12, 'collate' => 'utf8_general_ci', 'comment' => '科目CD', 'charset' => 'utf8'),
		'EfficiencyWagesTimes' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '能率給回数'),
		'EfficiencyWagesAmount' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '能率給金額'),
		'Payments' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '支給額'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'delete_flg' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '削除フラグ : 削除フラグ', 'charset' => 'utf8'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('ResultsYM', 'DailyRateStartDate', 'PaidDate', 'EmpNo', 'PayerDiv', 'TableNo'), 'unique' => 1)
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
			'ResultsYM' => '2013-06-17',
			'DailyRateStartDate' => '2013-06-17',
			'PaidDate' => '2013-06-17',
			'EmpNo' => 'Lorem ',
			'PayerDiv' => '',
			'TableNo' => 1,
			'AllowDetailCD' => 'Lo',
			'AccountCD' => 'Lorem ipsu',
			'EfficiencyWagesTimes' => 1,
			'EfficiencyWagesAmount' => 1,
			'Payments' => 1,
			'registered_date' => '2013-06-17 23:51:47',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:51:47',
			'updated_by' => 'Lorem ip',
			'delete_flg' => 'Lorem ipsum dolor sit ame',
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
