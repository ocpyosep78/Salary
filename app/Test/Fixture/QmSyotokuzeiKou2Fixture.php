<?php
/**
 * QmSyotokuzeiKou2Fixture
 *
 */
class QmSyotokuzeiKou2Fixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'qm_syotokuzei_kou2';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'RevYM' => array('type' => 'date', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '改定年月'),
		'SeqNo' => array('type' => 'integer', 'null' => false, 'default' => '1', 'key' => 'primary', 'comment' => '連番'),
		'SpousalDeduction' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '配偶者控除の額'),
		'SupportDeduction' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '扶養控除の額（一人）'),
		'BasicDeduction' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '基礎控除の額'),
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
			'SpousalDeduction' => 1,
			'SupportDeduction' => 1,
			'BasicDeduction' => 1,
			'registered_date' => '2013-06-17 23:41:25',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:41:25',
			'updated_by' => 'Lorem ip',
			'delete_flg' => 'Lorem ipsum dolor sit ame',
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
