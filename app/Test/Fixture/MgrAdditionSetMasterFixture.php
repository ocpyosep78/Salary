<?php
/**
 * MgrAdditionSetMasterFixture
 *
 */
class MgrAdditionSetMasterFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'MgrAdditionSetMaster';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'RevYM' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 7, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '改定年月 : 改定年月', 'charset' => 'utf8'),
		'JobGradeFrom' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 2, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '職層CD From : 職層CD From', 'charset' => 'utf8'),
		'JobGradeTo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 2, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '職層CD To : 職層CD To', 'charset' => 'utf8'),
		'AddRate' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '5,3', 'comment' => '加算率 : 加算率'),
		'RegDate' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'RegisteredBy' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'RegPgID' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録プログラムID : 登録プログラムID', 'charset' => 'utf8'),
		'UpdateDate' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'UpdateBy' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'UpdatePgmID' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新プログラムID : 更新プログラムID', 'charset' => 'utf8'),
		'DeleteFlg' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => '削除フラグ : 削除フラグ'),
		'VersionNo' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => 'バージョンNo : バージョンNo'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('RevYM', 'JobGradeFrom', 'JobGradeTo'), 'unique' => 1)
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
			'RevYM' => 'Lorem',
			'JobGradeFrom' => '',
			'JobGradeTo' => '',
			'AddRate' => 1,
			'RegDate' => '2013-06-17 23:07:18',
			'RegisteredBy' => 'Lorem ip',
			'RegPgID' => 'Lorem ip',
			'UpdateDate' => '2013-06-17 23:07:18',
			'UpdateBy' => 'Lorem ip',
			'UpdatePgmID' => 'Lorem ip',
			'DeleteFlg' => 1,
			'VersionNo' => 1
		),
	);

}
