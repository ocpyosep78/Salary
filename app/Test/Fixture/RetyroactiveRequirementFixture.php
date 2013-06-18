<?php
/**
 * RetyroactiveRequirementFixture
 *
 */
class RetyroactiveRequirementFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'RetyroactiveRequirement';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'RetyroactiveRequirementID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '追戻処理情報ID : 追戻処理情報ID'),
		'AdjustedEmpProcessRunID' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '調整職員プロセス実行ID : 調整職員プロセス実行ID
※追戻の場合、結果を加算するプロセスのEmpProcessRunID'),
		'ProcessStatus' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'comment' => '処理ステータス : 処理ステータス', 'charset' => 'utf8'),
		'RegDate' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'RegisteredBy' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'RegPgID' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録プログラムID : 登録プログラムID', 'charset' => 'utf8'),
		'UpdateDate' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'UpdateBy' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'UpdatePgmID' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新プログラムID : 更新プログラムID', 'charset' => 'utf8'),
		'DeleteFlg' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => '削除フラグ : 削除フラグ'),
		'VersionNo' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => 'バージョンNo : バージョンNo'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'RetyroactiveRequirementID', 'unique' => 1)
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
			'RetyroactiveRequirementID' => 1,
			'AdjustedEmpProcessRunID' => 1,
			'ProcessStatus' => 'Lorem ipsum dolor sit amet',
			'RegDate' => '2013-06-17 23:09:07',
			'RegisteredBy' => 'Lorem ip',
			'RegPgID' => 'Lorem ip',
			'UpdateDate' => '2013-06-17 23:09:07',
			'UpdateBy' => 'Lorem ip',
			'UpdatePgmID' => 'Lorem ip',
			'DeleteFlg' => 1,
			'VersionNo' => 1
		),
	);

}
