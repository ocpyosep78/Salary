<?php
/**
 * QmTeateCdFixture
 *
 */
class QmTeateCdFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'qm_teate_cd';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'AllowanceCD' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 6, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '手当CD', 'charset' => 'utf8'),
		'KnotCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '節CD', 'charset' => 'utf8'),
		'KnotName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => '節名称', 'charset' => 'utf8'),
		'KnotDetailCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '細節CD', 'charset' => 'utf8'),
		'KnotDetailName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => '細節名称', 'charset' => 'utf8'),
		'BranchNo' => array('type' => 'string', 'null' => true, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '枝番', 'charset' => 'utf8'),
		'AllowanceName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => '正式名称', 'charset' => 'utf8'),
		'AllowanceShortName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '短縮名称', 'charset' => 'utf8'),
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
			'PRIMARY' => array('column' => 'AllowanceCD', 'unique' => 1)
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
			'AllowanceCD' => 'Lore',
			'KnotCD' => '',
			'KnotName' => 'Lorem ipsum dolor sit amet',
			'KnotDetailCD' => '',
			'KnotDetailName' => 'Lorem ipsum dolor sit amet',
			'BranchNo' => '',
			'AllowanceName' => 'Lorem ipsum dolor sit amet',
			'AllowanceShortName' => 'Lorem ip',
			'CreatedDate' => '2013-06-17',
			'DisposeDate' => '2013-06-17',
			'registered_date' => '2013-06-17 23:44:18',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:44:18',
			'updated_by' => 'Lorem ip',
			'delete_flg' => 'Lorem ipsum dolor sit ame',
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
