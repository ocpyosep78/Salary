<?php
/**
 * QtJidoTeateSiharaiFixture
 *
 */
class QtJidoTeateSiharaiFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'qt_jido_teate_siharai';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'EmpNo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 8, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '職員番号', 'charset' => 'utf8'),
		'FiscalYear' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '年度'),
		'PaidMonTerm' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '支払月期'),
		'PaidDate' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '支払年月日'),
		'AllowAmounts' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '手当支給額'),
		'Less3_Amounts' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '3歳未満_支給額'),
		'Less3_4MonthAgoAllow' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '3歳未満_４ヶ月前分_手当額'),
		'Less3_3MonthAgoAllow' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '3歳未満_３ヶ月前分_手当額'),
		'Less3_2MonthAgoAllow' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '3歳未満_２ヶ月前分_手当額'),
		'Less3_1MonthAgoAllow' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '3歳未満_１ヶ月前分_手当額'),
		'Elem_Amounts' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '3歳～小学校_支給額'),
		'Elem_4MonthAgoAllow' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '3歳～小学校_４ヶ月前分_手当額'),
		'Elem_3MonthAgoAllow' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '3歳～小学校_３ヶ月前分_手当額'),
		'Elem_2MonthAgoAllow' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '3歳～小学校_２ヶ月前分_手当額'),
		'Elem_1MonthAgoAllow' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '3歳～小学校_１ヶ月前分_手当額'),
		'JrHigh_Amounts' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '小学校～中学校_支給額'),
		'JrHigh_4MonthAgoAllow' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '小学校～中学校_４ヶ月前分_手当額'),
		'JrHigh_3MonthAgoAllow' => array('type' => 'float', 'null' => true, 'default' => '0', 'length' => 10, 'comment' => '小学校～中学校_３ヶ月前分_手当額'),
		'JrHigh_2MonthAgoAllow' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '小学校～中学校_２ヶ月前分_手当額'),
		'JrHigh_1MonthAgoAllow' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '小学校～中学校_１ヶ月前分_手当額'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'delete_flg' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '削除フラグ', 'charset' => 'utf8'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('EmpNo', 'FiscalYear', 'PaidMonTerm'), 'unique' => 1)
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
			'EmpNo' => 'Lorem ',
			'FiscalYear' => 1,
			'PaidMonTerm' => 1,
			'PaidDate' => '2013-06-17',
			'AllowAmounts' => 1,
			'Less3_Amounts' => 1,
			'Less3_4MonthAgoAllow' => 1,
			'Less3_3MonthAgoAllow' => 1,
			'Less3_2MonthAgoAllow' => 1,
			'Less3_1MonthAgoAllow' => 1,
			'Elem_Amounts' => 1,
			'Elem_4MonthAgoAllow' => 1,
			'Elem_3MonthAgoAllow' => 1,
			'Elem_2MonthAgoAllow' => 1,
			'Elem_1MonthAgoAllow' => 1,
			'JrHigh_Amounts' => 1,
			'JrHigh_4MonthAgoAllow' => 1,
			'JrHigh_3MonthAgoAllow' => 1,
			'JrHigh_2MonthAgoAllow' => 1,
			'JrHigh_1MonthAgoAllow' => 1,
			'registered_date' => '2013-06-17 23:46:31',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:46:31',
			'updated_by' => 'Lorem ip',
			'delete_flg' => 'Lorem ipsum dolor sit ame',
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
