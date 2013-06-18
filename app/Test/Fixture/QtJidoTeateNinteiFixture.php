<?php
/**
 * QtJidoTeateNinteiFixture
 *
 */
class QtJidoTeateNinteiFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'qt_jido_teate_nintei';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'EmpNo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 8, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '職員番号', 'charset' => 'utf8'),
		'FiscalYear' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '年度'),
		'CertifiedDate' => array('type' => 'date', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '認定年月日'),
		'Less3Ages' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '3歳未満_人数'),
		'Elementaries' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '小学校まで_人数'),
		'JuniorHighs' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '中学校まで_人数'),
		'MonthlyAllow' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '手当月額'),
		'EveryTermAmo' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '毎期支給額'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'delete_flg' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '削除フラグ', 'charset' => 'utf8'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('EmpNo', 'FiscalYear', 'CertifiedDate'), 'unique' => 1)
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
			'CertifiedDate' => '2013-06-17',
			'Less3Ages' => 1,
			'Elementaries' => 1,
			'JuniorHighs' => 1,
			'MonthlyAllow' => 1,
			'EveryTermAmo' => 1,
			'registered_date' => '2013-06-17 23:46:24',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:46:24',
			'updated_by' => 'Lorem ip',
			'delete_flg' => 'Lorem ipsum dolor sit ame',
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
