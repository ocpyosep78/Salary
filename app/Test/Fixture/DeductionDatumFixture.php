<?php
/**
 * DeductionDatumFixture
 *
 */
class DeductionDatumFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'DeductionData';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'DeductionYm' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 7, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '控除年月 : 控除年月(yyyy-MM形式)', 'charset' => 'utf8'),
		'DeductionDivCD' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '控除区分 : 控除区分', 'charset' => 'utf8'),
		'DeductionCD' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 2, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '控除種別CD : 控除種別CD', 'charset' => 'utf8'),
		'WelfareEnrollInfoID' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index', 'comment' => '福利加入情報ID : 福利加入情報ID'),
		'EmpProcessRunID' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index', 'comment' => '職員給与処理ID : 職員給与処理ID'),
		'DeductionStartYm' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 7, 'collate' => 'utf8_general_ci', 'comment' => '控除開始年月 : 控除開始年月(yyyy-MM)', 'charset' => 'utf8'),
		'DeductionEndYm' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 7, 'collate' => 'utf8_general_ci', 'comment' => '控除終了年月 : 控除終了年月', 'charset' => 'utf8'),
		'LoanNo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 8, 'collate' => 'utf8_general_ci', 'comment' => '貸付番号 : 貸付番号', 'charset' => 'utf8'),
		'LoanAmount' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => 9, 'comment' => '貸付額その他控除金 : 貸付額その他控除金'),
		'FirstRepaymentAmount' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => 9, 'comment' => '初回償還額 : 初回償還額'),
		'RepaymentAmount' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => 9, 'comment' => '通常償還額 : 通常償還額'),
		'LastRepaymentAmount' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => 9, 'comment' => '最終償還額 : 最終償還額'),
		'RepaymentCnt' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 3, 'comment' => '償還回数 : 償還回数'),
		'ReminderCnt' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 3, 'comment' => '残回数 : 残回数'),
		'HesitReminderCnt' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 3, 'comment' => '猶予分残回数 : 猶予分残回数'),
		'SavingAmount' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => 9, 'comment' => '貯蓄金額 : 貯蓄金額'),
		'ReturnAmount' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => 9, 'comment' => '返還金額 : 返還金額'),
		'AccumAmount' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => 9, 'comment' => '一般財形控除額 : 一般財形控除額'),
		'HouseAccumAmount' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => 9, 'comment' => '年金住宅財形控除額 : 年金住宅財形控除額'),
		'DeductionResultCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '控除処理結果コード : 控除処理結果コード', 'charset' => 'utf8'),
		'RegDate' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'RegisteredBy' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'RegPgID' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録プログラムID : 登録プログラムID', 'charset' => 'utf8'),
		'UpdateDate' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'UpdateBy' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'UpdatePgmID' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新プログラムID : 更新プログラムID', 'charset' => 'utf8'),
		'DeleteFlg' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => '削除フラグ : 削除フラグ'),
		'VersionNo' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => 'バージョンNo : バージョンNo'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('DeductionYm', 'DeductionDivCD', 'DeductionCD'), 'unique' => 1),
			'PK_DeductionData' => array('column' => array('DeductionYm', 'DeductionDivCD', 'DeductionCD'), 'unique' => 1),
			'EmpProcessRunID' => array('column' => 'EmpProcessRunID', 'unique' => 0),
			'WelfareEnrollInfoID' => array('column' => 'WelfareEnrollInfoID', 'unique' => 0)
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
			'DeductionYm' => 'Lorem',
			'DeductionDivCD' => 'Lorem ipsum dolor sit ame',
			'DeductionCD' => '',
			'WelfareEnrollInfoID' => 1,
			'EmpProcessRunID' => 1,
			'DeductionStartYm' => 'Lorem',
			'DeductionEndYm' => 'Lorem',
			'LoanNo' => 'Lorem ',
			'LoanAmount' => 1,
			'FirstRepaymentAmount' => 1,
			'RepaymentAmount' => 1,
			'LastRepaymentAmount' => 1,
			'RepaymentCnt' => 1,
			'ReminderCnt' => 1,
			'HesitReminderCnt' => 1,
			'SavingAmount' => 1,
			'ReturnAmount' => 1,
			'AccumAmount' => 1,
			'HouseAccumAmount' => 1,
			'DeductionResultCD' => '',
			'RegDate' => '2013-06-17 23:03:57',
			'RegisteredBy' => 'Lorem ip',
			'RegPgID' => 'Lorem ip',
			'UpdateDate' => '2013-06-17 23:03:57',
			'UpdateBy' => 'Lorem ip',
			'UpdatePgmID' => 'Lorem ip',
			'DeleteFlg' => 1,
			'VersionNo' => 1
		),
	);

}
