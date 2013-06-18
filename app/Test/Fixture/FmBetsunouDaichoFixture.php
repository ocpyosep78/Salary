<?php
/**
 * FmBetsunouDaichoFixture
 *
 */
class FmBetsunouDaichoFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'fm_betsunou_daicho';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'OtherPaymentLedgerID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '別納者（育休）台帳ID'),
		'EmpNo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 8, 'collate' => 'utf8_general_ci', 'comment' => '職員番号', 'charset' => 'utf8'),
		'OtherPaymentPeriod_From' => array('type' => 'date', 'null' => false, 'default' => null, 'comment' => '別納扱期間（From）'),
		'OtherPaymentPeriod_To' => array('type' => 'date', 'null' => false, 'default' => null, 'comment' => '別納扱期間（To）'),
		'AttendanceOrderedReasonCD' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 4, 'collate' => 'utf8_general_ci', 'comment' => '勤怠事由CD', 'charset' => 'utf8'),
		'PaymentPeriod_From' => array('type' => 'date', 'null' => false, 'default' => null, 'comment' => '期間（From）'),
		'PaymentPeriod_To' => array('type' => 'date', 'null' => false, 'default' => null, 'comment' => '期間（To）'),
		'Delivery_ZipCD' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 9, 'collate' => 'utf8_general_ci', 'comment' => '通知送付先郵便番号', 'charset' => 'utf8'),
		'Delivery_MunicipalityCD' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 6, 'collate' => 'utf8_general_ci', 'comment' => '通知送付先市区町村CD', 'charset' => 'utf8'),
		'Delivery_Address' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => '通知送付先（漢字）', 'charset' => 'utf8'),
		'Delivery_AddressDetail' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => '通知送付先（漢字方書き）', 'charset' => 'utf8'),
		'Delivery_AddressKana' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'comment' => '通知送付先（カナ）', 'charset' => 'utf8'),
		'Delivery_AddressDetailKana' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'comment' => '通知送付先（カナ方書き）', 'charset' => 'utf8'),
		'Notify_TelNo1' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 11, 'collate' => 'utf8_general_ci', 'comment' => '通知送付先電話番号１', 'charset' => 'utf8'),
		'Notify_TelNo2' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 11, 'collate' => 'utf8_general_ci', 'comment' => '通知送付先電話番号２', 'charset' => 'utf8'),
		'Notify_TelNo3' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 11, 'collate' => 'utf8_general_ci', 'comment' => '通知送付先電話番号３', 'charset' => 'utf8'),
		'Remarks' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 200, 'collate' => 'utf8_general_ci', 'comment' => '備考', 'charset' => 'utf8'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'delete_flg' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '削除フラグ : 削除フラグ', 'charset' => 'utf8'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'OtherPaymentLedgerID', 'unique' => 1)
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
			'OtherPaymentLedgerID' => 1,
			'EmpNo' => 'Lorem ',
			'OtherPaymentPeriod_From' => '2013-06-17',
			'OtherPaymentPeriod_To' => '2013-06-17',
			'AttendanceOrderedReasonCD' => 'Lo',
			'PaymentPeriod_From' => '2013-06-17',
			'PaymentPeriod_To' => '2013-06-17',
			'Delivery_ZipCD' => 'Lorem i',
			'Delivery_MunicipalityCD' => 'Lore',
			'Delivery_Address' => 'Lorem ipsum dolor sit amet',
			'Delivery_AddressDetail' => 'Lorem ipsum dolor sit amet',
			'Delivery_AddressKana' => 'Lorem ipsum dolor sit amet',
			'Delivery_AddressDetailKana' => 'Lorem ipsum dolor sit amet',
			'Notify_TelNo1' => 'Lorem ips',
			'Notify_TelNo2' => 'Lorem ips',
			'Notify_TelNo3' => 'Lorem ips',
			'Remarks' => 'Lorem ipsum dolor sit amet',
			'registered_date' => '2013-06-17 23:15:43',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:15:43',
			'updated_by' => 'Lorem ip',
			'delete_flg' => 'Lorem ipsum dolor sit ame',
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
