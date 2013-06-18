<?php
/**
 * QmKyuryoParentFixture
 *
 */
class QmKyuryoParentFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'qm_kyuryo_parent';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'RevYM' => array('type' => 'date', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '改定年月'),
		'SalaryTableCD' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 2, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '給料表CD', 'charset' => 'utf8'),
		'SalaryClass' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 2, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '級', 'charset' => 'utf8'),
		'HighestSalaryGrade' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 3, 'collate' => 'utf8_general_ci', 'comment' => '最高号給', 'charset' => 'utf8'),
		'AdjustAddDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '調整加算区分 : 1：定額　2：定率', 'charset' => 'utf8'),
		'AdjustAddAmo' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '調整加算額'),
		'AdjustAddRate' => array('type' => 'float', 'null' => false, 'default' => '0.00', 'length' => '5,2', 'comment' => '調整加算率'),
		'FractionExeDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '端数処理区分 : 1：切捨て　2：切上げ　3：四捨五入', 'charset' => 'utf8'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'delete_flg' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '削除フラグ : 削除フラグ', 'charset' => 'utf8'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('RevYM', 'SalaryTableCD', 'SalaryClass'), 'unique' => 1)
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
			'SalaryClass' => '',
			'HighestSalaryGrade' => 'L',
			'AdjustAddDiv' => 'Lorem ipsum dolor sit ame',
			'AdjustAddAmo' => 1,
			'AdjustAddRate' => 1,
			'FractionExeDiv' => 'Lorem ipsum dolor sit ame',
			'registered_date' => '2013-06-17 23:38:33',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:38:33',
			'updated_by' => 'Lorem ip',
			'delete_flg' => 'Lorem ipsum dolor sit ame',
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
