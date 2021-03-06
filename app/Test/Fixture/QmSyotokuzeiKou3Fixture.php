<?php
/**
 * QmSyotokuzeiKou3Fixture
 *
 */
class QmSyotokuzeiKou3Fixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'qm_syotokuzei_kou3';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'RevYM' => array('type' => 'date', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '改定年月'),
		'SeqNo' => array('type' => 'integer', 'null' => false, 'default' => '1', 'key' => 'primary', 'comment' => '連番'),
		'AmoAftDeductFrom' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '社会保険料等控除後の給与などの金額（以上）'),
		'AmoAftDeductTo' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '社会保険料等控除後の給与などの金額（未満）'),
		'TaxRate' => array('type' => 'float', 'null' => false, 'default' => '0.0000', 'length' => '7,4', 'comment' => '税率'),
		'DeductAmount' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '控除額'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'delete_flg' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '削除フラグ : 削除フラグ', 'charset' => 'utf8'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('RevYM', 'SeqNo'), 'unique' => 1)
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
			'SeqNo' => 1,
			'AmoAftDeductFrom' => 1,
			'AmoAftDeductTo' => 1,
			'TaxRate' => 1,
			'DeductAmount' => 1,
			'registered_date' => '2013-06-17 23:41:33',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:41:33',
			'updated_by' => 'Lorem ip',
			'delete_flg' => 'Lorem ipsum dolor sit ame',
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
