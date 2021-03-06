<?php
/**
 * SmKensyuMeishoFixture
 *
 */
class SmKensyuMeishoFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'sm_kensyu_meisho';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'TrainingNameCD' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 4, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '研修名称CD', 'charset' => 'utf8'),
		'CreatedDate' => array('type' => 'date', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '新設年月日'),
		'DisposeDate' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '廃止年月日'),
		'TraininName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => '研修正式名', 'charset' => 'utf8'),
		'TrainingShortName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '研修短縮名', 'charset' => 'utf8'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'delete_flg' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '削除フラグ', 'charset' => 'utf8'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('TrainingNameCD', 'CreatedDate'), 'unique' => 1)
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
			'TrainingNameCD' => 'Lo',
			'CreatedDate' => '2013-06-18',
			'DisposeDate' => '2013-06-18',
			'TraininName' => 'Lorem ipsum dolor sit amet',
			'TrainingShortName' => 'Lorem ipsum dolor ',
			'registered_date' => '2013-06-18 00:01:34',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-18 00:01:34',
			'updated_by' => 'Lorem ip',
			'delete_flg' => 'Lorem ipsum dolor sit ame',
			'effective_date' => '2013-06-18',
			'expired_date' => '2013-06-18'
		),
	);

}
