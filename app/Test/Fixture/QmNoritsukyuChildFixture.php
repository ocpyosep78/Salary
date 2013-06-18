<?php
/**
 * QmNoritsukyuChildFixture
 *
 */
class QmNoritsukyuChildFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'qm_noritsukyu_child';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'RevYM' => array('type' => 'date', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '改定年月'),
		'EfficiencyWages_SalaryCD' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 4, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '能率給／賃金CD', 'charset' => 'utf8'),
		'OtherRate_LessThanAmount' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'key' => 'primary', 'comment' => 'その他の率・金額未満'),
		'OtherRate_Rate' => array('type' => 'float', 'null' => true, 'default' => '0.000000', 'length' => '7,6', 'comment' => 'その他の率・率'),
		'OtherRate_TreatUnderENDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => 'その他の率・端数処理区分', 'charset' => 'utf8'),
		'OtherRate_AddDeductAmount' => array('type' => 'float', 'null' => true, 'default' => '0', 'length' => 10, 'comment' => 'その他の率・加算／控除金額'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'delete_flg' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '削除フラグ : 削除フラグ', 'charset' => 'utf8'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('RevYM', 'EfficiencyWages_SalaryCD', 'OtherRate_LessThanAmount'), 'unique' => 1)
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
			'EfficiencyWages_SalaryCD' => 'Lo',
			'OtherRate_LessThanAmount' => 1,
			'OtherRate_Rate' => 1,
			'OtherRate_TreatUnderENDiv' => 'Lorem ipsum dolor sit ame',
			'OtherRate_AddDeductAmount' => 1,
			'registered_date' => '2013-06-17 23:39:36',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:39:36',
			'updated_by' => 'Lorem ip',
			'delete_flg' => 'Lorem ipsum dolor sit ame',
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
