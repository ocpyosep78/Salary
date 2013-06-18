<?php
/**
 * FtBetsunouJyokyoFixture
 *
 */
class FtBetsunouJyokyoFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'ft_betsunou_jyokyo';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'OtherPaymentStatusID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '別納金状況ID'),
		'EmpNo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 8, 'collate' => 'utf8_general_ci', 'comment' => '職員番号', 'charset' => 'utf8'),
		'FiscalYear' => array('type' => 'integer', 'null' => false, 'default' => null, 'comment' => '対象年度'),
		'H1H2_Div' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '上期・下期区分', 'charset' => 'utf8'),
		'DeductTotal' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '控除金総額'),
		'OtherPayment_ReceivedTotal' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '受領総額'),
		'ChangeAmountFlg' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '金額変更フラグ', 'charset' => 'utf8'),
		'CreatedNoticeFlg' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '通知作成済フラグ', 'charset' => 'utf8'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'delete_flg' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '削除フラグ : 削除フラグ', 'charset' => 'utf8'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'OtherPaymentStatusID', 'unique' => 1)
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
			'OtherPaymentStatusID' => 1,
			'EmpNo' => 'Lorem ',
			'FiscalYear' => 1,
			'H1H2_Div' => 'Lorem ipsum dolor sit ame',
			'DeductTotal' => 1,
			'OtherPayment_ReceivedTotal' => 1,
			'ChangeAmountFlg' => 'Lorem ipsum dolor sit ame',
			'CreatedNoticeFlg' => 'Lorem ipsum dolor sit ame',
			'registered_date' => '2013-06-17 23:17:32',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:17:32',
			'updated_by' => 'Lorem ip',
			'delete_flg' => 'Lorem ipsum dolor sit ame',
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
