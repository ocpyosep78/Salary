<?php
/**
 * QmHyojyunHosyuGetuFixture
 *
 */
class QmHyojyunHosyuGetuFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'qm_hyojyun_hosyu_getu';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'RevYM' => array('type' => 'date', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '改定年月'),
		'StandardMonthSalary' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'key' => 'primary', 'comment' => '標準報酬月額'),
		'HealthInsGrade' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '健保等級'),
		'WelfarePensGrade' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '厚年等級'),
		'StandardMonthDaily' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '標準報酬日額'),
		'StandardMonthSalary_Over' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '報酬月額以上'),
		'StandardMonthSalary_miman' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '報酬月額未満'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'delete_flg' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '削除フラグ', 'charset' => 'utf8'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('RevYM', 'StandardMonthSalary'), 'unique' => 1)
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
			'StandardMonthSalary' => 1,
			'HealthInsGrade' => 1,
			'WelfarePensGrade' => 1,
			'StandardMonthDaily' => 1,
			'StandardMonthSalary_Over' => 1,
			'StandardMonthSalary_miman' => 1,
			'registered_date' => '2013-06-17 23:33:13',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:33:13',
			'updated_by' => 'Lorem ip',
			'delete_flg' => 'Lorem ipsum dolor sit ame',
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
