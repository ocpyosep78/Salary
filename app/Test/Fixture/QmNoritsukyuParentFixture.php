<?php
/**
 * QmNoritsukyuParentFixture
 *
 */
class QmNoritsukyuParentFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'qm_noritsukyu_parent';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'RevYM' => array('type' => 'date', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '改定年月'),
		'EfficiencyWages_SalaryCD' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 4, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '能率給／賃金CD', 'charset' => 'utf8'),
		'Name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => '正式名称', 'charset' => 'utf8'),
		'ShortName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '短縮名称', 'charset' => 'utf8'),
		'InputDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '入力区分', 'charset' => 'utf8'),
		'UnitAmountTimes' => array('type' => 'float', 'null' => true, 'default' => '0', 'length' => 10, 'comment' => '回数単価'),
		'UpperTimesDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '回数上限区分 : 0：なし　1：あり', 'charset' => 'utf8'),
		'UpperTimesAmount' => array('type' => 'float', 'null' => true, 'default' => '0', 'length' => 10, 'comment' => '回数上限金額'),
		'UpperTimes' => array('type' => 'integer', 'null' => true, 'default' => '0', 'comment' => '回数上限'),
		'AmountDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '金額区分', 'charset' => 'utf8'),
		'FixedRate' => array('type' => 'float', 'null' => true, 'default' => '0.000000', 'length' => '7,6', 'comment' => '定率'),
		'FixedRate_TreatUnderENDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '定率・端数処理区分', 'charset' => 'utf8'),
		'FixedRate_UpperDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '定率・上限区分', 'charset' => 'utf8'),
		'FixedRate_UpperAmount' => array('type' => 'float', 'null' => true, 'default' => '0', 'length' => 10, 'comment' => '定率・上限金額'),
		'FixedRate_AddDeductDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '定率・加算／控除区分 : 0：なし　1：あり', 'charset' => 'utf8'),
		'FixedRate_AddDeductAmount' => array('type' => 'float', 'null' => true, 'default' => '0', 'length' => 10, 'comment' => '定率・加算／控除金額'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'delete_flg' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '削除フラグ : 削除フラグ', 'charset' => 'utf8'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('RevYM', 'EfficiencyWages_SalaryCD'), 'unique' => 1)
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
			'Name' => 'Lorem ipsum dolor sit amet',
			'ShortName' => 'Lorem ipsum dolor ',
			'InputDiv' => 'Lorem ipsum dolor sit ame',
			'UnitAmountTimes' => 1,
			'UpperTimesDiv' => 'Lorem ipsum dolor sit ame',
			'UpperTimesAmount' => 1,
			'UpperTimes' => 1,
			'AmountDiv' => 'Lorem ipsum dolor sit ame',
			'FixedRate' => 1,
			'FixedRate_TreatUnderENDiv' => 'Lorem ipsum dolor sit ame',
			'FixedRate_UpperDiv' => 'Lorem ipsum dolor sit ame',
			'FixedRate_UpperAmount' => 1,
			'FixedRate_AddDeductDiv' => 'Lorem ipsum dolor sit ame',
			'FixedRate_AddDeductAmount' => 1,
			'registered_date' => '2013-06-17 23:39:43',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:39:43',
			'updated_by' => 'Lorem ip',
			'delete_flg' => 'Lorem ipsum dolor sit ame',
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
