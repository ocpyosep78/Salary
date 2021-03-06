<?php
/**
 * SmKensyuTaishoshaJokenFixture
 *
 */
class SmKensyuTaishoshaJokenFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'sm_kensyu_taishosha_joken';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'FiscalYear' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 4, 'key' => 'primary', 'comment' => '研修年度'),
		'TrainingCD' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 9, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '研修CD', 'charset' => 'utf8'),
		'CondGroup' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '条件グループ', 'charset' => 'utf8'),
		'KeyType' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => 'キー種別'),
		'CondNo' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '条件番号'),
		'CondVal01' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => '条件値01', 'charset' => 'utf8'),
		'CondVal02' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => '条件値02', 'charset' => 'utf8'),
		'CondVal03' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => '条件値03', 'charset' => 'utf8'),
		'CondVal04' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => '条件値04', 'charset' => 'utf8'),
		'CondVal05' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => '条件値05', 'charset' => 'utf8'),
		'CondVal06' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => '条件値06', 'charset' => 'utf8'),
		'CondVal07' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => '条件値07', 'charset' => 'utf8'),
		'CondVal08' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => '条件値08', 'charset' => 'utf8'),
		'CondVal09' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => '条件値09', 'charset' => 'utf8'),
		'CondVal10' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => '条件値10', 'charset' => 'utf8'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'delete_flg' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '削除フラグ', 'charset' => 'utf8'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('FiscalYear', 'TrainingCD', 'CondGroup'), 'unique' => 1)
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
			'TrainingCD' => 'Lorem i',
			'CondGroup' => 'Lorem ip',
			'KeyType' => 1,
			'CondNo' => 1,
			'CondVal01' => 'Lorem ipsum dolor sit amet',
			'CondVal02' => 'Lorem ipsum dolor sit amet',
			'CondVal03' => 'Lorem ipsum dolor sit amet',
			'CondVal04' => 'Lorem ipsum dolor sit amet',
			'CondVal05' => 'Lorem ipsum dolor sit amet',
			'CondVal06' => 'Lorem ipsum dolor sit amet',
			'CondVal07' => 'Lorem ipsum dolor sit amet',
			'CondVal08' => 'Lorem ipsum dolor sit amet',
			'CondVal09' => 'Lorem ipsum dolor sit amet',
			'CondVal10' => 'Lorem ipsum dolor sit amet',
			'registered_date' => '2013-06-18 00:02:05',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-18 00:02:05',
			'updated_by' => 'Lorem ip',
			'delete_flg' => 'Lorem ipsum dolor sit ame',
			'effective_date' => '2013-06-18',
			'expired_date' => '2013-06-18'
		),
	);

}
