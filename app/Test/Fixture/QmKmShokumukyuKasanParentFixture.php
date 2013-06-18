<?php
/**
 * QmKmShokumukyuKasanParentFixture
 *
 */
class QmKmShokumukyuKasanParentFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'qm_km_shokumukyu_kasan_parent';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'RevYM' => array('type' => 'date', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '改定年月'),
		'SalaryTableCD' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 2, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '給料表CD', 'charset' => 'utf8'),
		'JobGrade_From' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 2, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '職層CD開始', 'charset' => 'utf8'),
		'JobGrade_To' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '職層CD終了', 'charset' => 'utf8'),
		'SalaryClass' => array('type' => 'string', 'null' => false, 'length' => 2, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '級', 'charset' => 'utf8'),
		'SalaryGrade' => array('type' => 'string', 'null' => false, 'length' => 3, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '号給', 'charset' => 'utf8'),
		'Age' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 2, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '年齢', 'charset' => 'utf8'),
		'MedHist' => array('type' => 'string', 'null' => false, 'length' => 2, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '医歴', 'charset' => 'utf8'),
		'AddRate' => array('type' => 'float', 'null' => false, 'default' => '0.000', 'length' => '5,3', 'comment' => '加算割合'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'delete_flg' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '削除フラグ : 削除フラグ', 'charset' => 'utf8'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 開始年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('RevYM', 'SalaryTableCD', 'JobGrade_From', 'SalaryClass', 'SalaryGrade', 'Age', 'MedHist'), 'unique' => 1)
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
			'RevYM' => '2013-06-17',
			'SalaryTableCD' => '',
			'JobGrade_From' => '',
			'JobGrade_To' => '',
			'SalaryClass' => '',
			'SalaryGrade' => 'L',
			'Age' => '',
			'MedHist' => '',
			'AddRate' => 1,
			'registered_date' => '2013-06-17 23:37:07',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:37:07',
			'updated_by' => 'Lorem ip',
			'delete_flg' => 'Lorem ipsum dolor sit ame',
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
