<?php
/**
 * FtKojoIraiStatusFixture
 *
 */
class FtKojoIraiStatusFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'ft_kojo_irai_status';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'ProcStatusID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '控除依頼取込ステータス管理テーブルID'),
		'ProcessID' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => 'プロセスID'),
		'DeductDate' => array('type' => 'date', 'null' => true, 'default' => null),
		'kyosaiStatus' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '共済控除処理ステータス', 'charset' => 'utf8'),
		'rokinStatus' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '労金控除処理ステータス', 'charset' => 'utf8'),
		'zaikeiStaus' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '財形控除処理ステータス', 'charset' => 'utf8'),
		'toshokushinStatus' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '都職信控除処理ステータス', 'charset' => 'utf8'),
		'gojoStatus' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '互助組合控除処理ステータス', 'charset' => 'utf8'),
		'kyosaiProcEndTime' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '共済控除処理終了時間'),
		'rokinProcEndTime' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '労金控除処理終了時間'),
		'zaikeiProcEndTime' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '財形控除処理終了時間'),
		'toshokushinProcEndTime' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '都職信控除処理終了時間'),
		'gojoProcEndTime' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '互助組合控除処理終了時間'),
		'registered_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'delete_flg' => array('type' => 'string', 'null' => true, 'default' => '0', 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '削除フラグ : 削除フラグ', 'charset' => 'utf8'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'ProcStatusID', 'unique' => 1)
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
			'ProcStatusID' => 1,
			'ProcessID' => 1,
			'DeductDate' => '2013-06-17',
			'kyosaiStatus' => 'Lorem ipsum dolor ',
			'rokinStatus' => 'Lorem ipsum dolor ',
			'zaikeiStaus' => 'Lorem ipsum dolor ',
			'toshokushinStatus' => 'Lorem ipsum dolor ',
			'gojoStatus' => 'Lorem ipsum dolor ',
			'kyosaiProcEndTime' => '2013-06-17 23:18:03',
			'rokinProcEndTime' => '2013-06-17 23:18:03',
			'zaikeiProcEndTime' => '2013-06-17 23:18:03',
			'toshokushinProcEndTime' => '2013-06-17 23:18:03',
			'gojoProcEndTime' => '2013-06-17 23:18:03',
			'registered_date' => '2013-06-17 23:18:03',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:18:03',
			'updated_by' => 'Lorem ip',
			'delete_flg' => 'Lorem ipsum dolor sit ame',
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
