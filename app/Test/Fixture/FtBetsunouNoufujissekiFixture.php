<?php
/**
 * FtBetsunouNoufujissekiFixture
 *
 */
class FtBetsunouNoufujissekiFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'ft_betsunou_noufujisseki';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'OtherPaymentResID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '別納金納付実績ID'),
		'EmpNo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 8, 'collate' => 'utf8_general_ci', 'comment' => '職員番号', 'charset' => 'utf8'),
		'FiscalYear' => array('type' => 'integer', 'null' => false, 'default' => null, 'comment' => '年度'),
		'H1H2_Div' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '上期・下期区分', 'charset' => 'utf8'),
		'PaymentDate' => array('type' => 'date', 'null' => false, 'default' => null, 'comment' => '支払日'),
		'PaymentAmount' => array('type' => 'float', 'null' => false, 'default' => null, 'length' => 10, 'comment' => '支払額'),
		'PaymentMethod' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '支払方法', 'charset' => 'utf8'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'delete_flg' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '削除フラグ : 削除フラグ', 'charset' => 'utf8'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'OtherPaymentResID', 'unique' => 1)
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
			'OtherPaymentResID' => 1,
			'EmpNo' => 'Lorem ',
			'FiscalYear' => 1,
			'H1H2_Div' => 'Lorem ipsum dolor sit ame',
			'PaymentDate' => '2013-06-17',
			'PaymentAmount' => 1,
			'PaymentMethod' => 'Lorem ipsum dolor sit ame',
			'registered_date' => '2013-06-17 23:17:40',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:17:40',
			'updated_by' => 'Lorem ip',
			'delete_flg' => 'Lorem ipsum dolor sit ame',
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
