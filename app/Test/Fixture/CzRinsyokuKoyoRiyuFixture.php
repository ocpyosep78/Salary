<?php
/**
 * CzRinsyokuKoyoRiyuFixture
 *
 */
class CzRinsyokuKoyoRiyuFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'cz_rinsyoku_koyo_riyu';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'TmpEmpHiredResCD' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 2, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '臨時職員雇用理由CD', 'charset' => 'utf8'),
		'TmpEmpHiredReason' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '臨時職員雇用理由', 'charset' => 'utf8'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'delete_flg' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '削除フラグ : 削除フラグ', 'charset' => 'utf8'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'TmpEmpHiredResCD', 'unique' => 1),
			'TmpEmpHiredResCD' => array('column' => 'TmpEmpHiredResCD', 'unique' => 1)
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
			'TmpEmpHiredResCD' => '',
			'TmpEmpHiredReason' => 'Lorem ipsum dolor ',
			'registered_date' => '2013-06-17 23:13:31',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:13:31',
			'updated_by' => 'Lorem ip',
			'delete_flg' => 'Lorem ipsum dolor sit ame',
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
