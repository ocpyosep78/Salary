<?php
/**
 * QtJidoTeateJissekiFixture
 *
 */
class QtJidoTeateJissekiFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'qt_jido_teate_jisseki';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'EmpNo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 8, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '職員番号', 'charset' => 'utf8'),
		'FiscalYear' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '年度'),
		'PaidMonTerm' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '支払月期'),
		'PaidYM' => array('type' => 'date', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '支給年月'),
		'AllowAmo' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '手当支給額'),
		'Less3_AmoTermTotal' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '３歳未満_支給期計'),
		'Less3_AllowAmo1' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '３歳未満_支給額_１'),
		'Less3_AllowAmo2' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '３歳未満_支給額_２'),
		'Less3_AllowAmo3' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '３歳未満_支給額_３'),
		'Less3_AllowAmo4' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '３歳未満_支給額_４'),
		'Elem_AmoTermTotal' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '３歳_小学校_支給期計'),
		'Elem_AllowAmo1' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '３歳_小学校_支給額_１'),
		'Elem_AllowAmo2' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '３歳_小学校_支給額_１'),
		'Elem_AllowAmo3' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '３歳_小学校_支給額_３'),
		'Elem_AllowAmo4' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '３歳_小学校_支給額_４'),
		'JrHigh_AmoTermTotal' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '小学校_中学校_支給期計'),
		'JrHigh_AllowAmo1' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '小学校_中学校_支給額_１'),
		'JrHigh_AllowAmo2' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '小学校_中学校_支給額_２'),
		'JrHigh_AllowAmo3' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '小学校_中学校_支給額_３'),
		'JrHigh_AllowAmo4' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '小学校_中学校_支給額_４'),
		'TerminateApplyDate' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '消滅該当年月日'),
		'TerminateReasonCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '消滅事由CD', 'charset' => 'utf8'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'delete_flg' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '削除フラグ', 'charset' => 'utf8'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('EmpNo', 'FiscalYear', 'PaidMonTerm', 'PaidYM'), 'unique' => 1)
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
			'PaidYM' => '2013-06-17',
			'AllowAmo' => 1,
			'Less3_AmoTermTotal' => 1,
			'Less3_AllowAmo1' => 1,
			'Less3_AllowAmo2' => 1,
			'Less3_AllowAmo3' => 1,
			'Less3_AllowAmo4' => 1,
			'Elem_AmoTermTotal' => 1,
			'Elem_AllowAmo1' => 1,
			'Elem_AllowAmo2' => 1,
			'Elem_AllowAmo3' => 1,
			'Elem_AllowAmo4' => 1,
			'JrHigh_AmoTermTotal' => 1,
			'JrHigh_AllowAmo1' => 1,
			'JrHigh_AllowAmo2' => 1,
			'JrHigh_AllowAmo3' => 1,
			'JrHigh_AllowAmo4' => 1,
			'TerminateApplyDate' => '2013-06-17',
			'TerminateReasonCD' => '',
			'registered_date' => '2013-06-17 23:46:08',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:46:08',
			'updated_by' => 'Lorem ip',
			'delete_flg' => 'Lorem ipsum dolor sit ame',
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
