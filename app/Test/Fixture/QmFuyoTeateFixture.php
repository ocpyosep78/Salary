<?php
/**
 * QmFuyoTeateFixture
 *
 */
class QmFuyoTeateFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'qm_fuyo_teate';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'RevYM' => array('type' => 'date', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '改定年月'),
		'SalaryTypeCD' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 2, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '給与体系CD', 'charset' => 'utf8'),
		'SposeFlg' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '配偶者'),
		'SubstituteSpouse' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '配欠第一子'),
		'FirstDependent' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '配外一人'),
		'SecondDependent' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => 10, 'comment' => '配外二人目'),
		'Amount3Over' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => 10, 'comment' => '三人目以降'),
		'AmountSpecialAdd' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => 10, 'comment' => '特定加算'),
		'SpecialAddStartAge' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '特定加算対象年齢開始'),
		'SpecialAddEndAge' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '特定加算対象年齢終了'),
		'AllowanceEndAge' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '子の手当終了年齢'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'delete_flg' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '削除フラグ : 削除フラグ', 'charset' => 'utf8'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('RevYM', 'SalaryTypeCD'), 'unique' => 1)
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
			'SalaryTypeCD' => '',
			'SposeFlg' => 1,
			'SubstituteSpouse' => 1,
			'FirstDependent' => 1,
			'SecondDependent' => 1,
			'Amount3Over' => 1,
			'AmountSpecialAdd' => 1,
			'SpecialAddStartAge' => 1,
			'SpecialAddEndAge' => 1,
			'AllowanceEndAge' => 1,
			'registered_date' => '2013-06-17 23:32:34',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:32:34',
			'updated_by' => 'Lorem ip',
			'delete_flg' => 'Lorem ipsum dolor sit ame',
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
