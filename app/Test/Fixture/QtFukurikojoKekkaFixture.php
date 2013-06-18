<?php
/**
 * QtFukurikojoKekkaFixture
 *
 */
class QtFukurikojoKekkaFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'qt_fukurikojo_kekka';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'DeductYM' => array('type' => 'date', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '控除年月'),
		'EmpNo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 8, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '職員番号', 'charset' => 'utf8'),
		'PaidDiv' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 2, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '支給区分', 'charset' => 'utf8'),
		'PayerDiv' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 2, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '支払者区分', 'charset' => 'utf8'),
		'SeqNo' => array('type' => 'integer', 'null' => false, 'default' => '1', 'key' => 'primary', 'comment' => '連番'),
		'DeductionCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 6, 'collate' => 'utf8_general_ci', 'comment' => '控除種別CD', 'charset' => 'utf8'),
		'Amounts' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '金額'),
		'ReminderCount' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '残回数'),
		'DeductRes_DeductDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '控除結果区分', 'charset' => 'utf8'),
		'DeductRes_UnableCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '控除不能事由CD', 'charset' => 'utf8'),
		'BillSymbolNo' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '証券記号番号'),
		'PartyCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '団体CD', 'charset' => 'utf8'),
		'FormerKey' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '元KEY', 'charset' => 'utf8'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'delete_flg' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '削除フラグ : 削除フラグ', 'charset' => 'utf8'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('DeductYM', 'EmpNo', 'PaidDiv', 'PayerDiv', 'SeqNo'), 'unique' => 1)
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
			'DeductYM' => '2013-06-17',
			'EmpNo' => 'Lorem ',
			'PaidDiv' => '',
			'PayerDiv' => '',
			'SeqNo' => 1,
			'DeductionCD' => 'Lore',
			'Amounts' => 1,
			'ReminderCount' => 1,
			'DeductRes_DeductDiv' => '',
			'DeductRes_UnableCD' => 'Lorem ip',
			'BillSymbolNo' => 1,
			'PartyCD' => '',
			'FormerKey' => 'Lorem ip',
			'registered_date' => '2013-06-17 23:45:13',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:45:13',
			'updated_by' => 'Lorem ip',
			'delete_flg' => 'Lorem ipsum dolor sit ame',
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
