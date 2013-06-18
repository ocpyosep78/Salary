<?php
/**
 * EndDiliAbsentDaysPaymentRatioMasterFixture
 *
 */
class EndDiliAbsentDaysPaymentRatioMasterFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'EndDiliAbsentDaysPaymentRatioMaster';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'RevYM' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 7, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '改定年月 : 改定年月', 'charset' => 'utf8'),
		'MetWardDiv' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '都区区分 : 都区区分', 'charset' => 'utf8'),
		'EndDiliMonPayment' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '期末勤勉手当支給月 : 期末勤勉手当支給月'),
		'EndDiligenceDiv' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '期末勤勉区分 : 期末勤勉区分', 'charset' => 'utf8'),
		'Number' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '連番 : 連番'),
		'AbsentDaysFrom' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '欠勤等日数_以上 : 欠勤等日数_以上'),
		'AbsentDaysTo' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '欠勤等日数_未満 : 欠勤等日数_未満'),
		'PaymentRatio' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '5,2', 'comment' => '支給割合 : 支給割合'),
		'RegDate' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'RegisteredBy' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'RegPgID' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録プログラムID : 登録プログラムID', 'charset' => 'utf8'),
		'UpdateDate' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'UpdateBy' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'UpdatePgmID' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新プログラムID : 更新プログラムID', 'charset' => 'utf8'),
		'DeleteFlg' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => '削除フラグ : 削除フラグ'),
		'VersionNo' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => 'バージョンNo : バージョンNo'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('RevYM', 'MetWardDiv', 'EndDiliMonPayment', 'EndDiligenceDiv', 'Number'), 'unique' => 1)
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
			'MetWardDiv' => 'Lorem ipsum dolor sit ame',
			'EndDiliMonPayment' => 1,
			'EndDiligenceDiv' => 'Lorem ipsum dolor sit ame',
			'Number' => 1,
			'AbsentDaysFrom' => 1,
			'AbsentDaysTo' => 1,
			'PaymentRatio' => 1,
			'RegDate' => '2013-06-17 23:04:43',
			'RegisteredBy' => 'Lorem ip',
			'RegPgID' => 'Lorem ip',
			'UpdateDate' => '2013-06-17 23:04:43',
			'UpdateBy' => 'Lorem ip',
			'UpdatePgmID' => 'Lorem ip',
			'DeleteFlg' => 1,
			'VersionNo' => 1
		),
	);

}
