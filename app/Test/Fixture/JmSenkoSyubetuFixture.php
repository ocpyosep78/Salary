<?php
/**
 * JmSenkoSyubetuFixture
 *
 */
class JmSenkoSyubetuFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'jm_senko_syubetu';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'SelectCD' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 3, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '選考名CD', 'charset' => 'utf8'),
		'SelectTypeCD' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 2, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '選考種別CD', 'charset' => 'utf8'),
		'SelectTypeName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'utf8_general_ci', 'comment' => '選考種別名', 'charset' => 'utf8'),
		'SelectTypeShortName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '選考種別略称', 'charset' => 'utf8'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'delete_flg' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '削除フラグ', 'charset' => 'utf8'),
		'effective_date' => array('type' => 'date', 'null' => false, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('SelectCD', 'SelectTypeCD'), 'unique' => 1)
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
			'SelectCD' => 'L',
			'SelectTypeCD' => '',
			'SelectTypeName' => 'Lorem ipsum dolor sit amet',
			'SelectTypeShortName' => 'Lorem ip',
			'registered_date' => '2013-06-17 23:23:38',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:23:38',
			'updated_by' => 'Lorem ip',
			'delete_flg' => 'Lorem ipsum dolor sit ame',
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
