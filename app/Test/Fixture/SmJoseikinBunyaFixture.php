<?php
/**
 * SmJoseikinBunyaFixture
 *
 */
class SmJoseikinBunyaFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'sm_joseikin_bunya';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'GrantFieldCD' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 3, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '助成金分野CD', 'charset' => 'utf8'),
		'GrantFieldName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => '分野正式名', 'charset' => 'utf8'),
		'GrantFieldShortName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '分野短縮名', 'charset' => 'utf8'),
		'CreatedDate' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '新設年月日'),
		'DisposeDate' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '廃止年月日'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'delete_flg' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '削除フラグ', 'charset' => 'utf8'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'GrantFieldCD', 'unique' => 1)
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
			'GrantFieldCD' => 'L',
			'GrantFieldName' => 'Lorem ipsum dolor sit amet',
			'GrantFieldShortName' => 'Lorem ipsum dolor ',
			'CreatedDate' => '2013-06-17',
			'DisposeDate' => '2013-06-17',
			'registered_date' => '2013-06-17 23:59:58',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:59:58',
			'updated_by' => 'Lorem ip',
			'delete_flg' => 'Lorem ipsum dolor sit ame',
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
