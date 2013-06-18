<?php
/**
 * QtFukurikojoTempFixture
 *
 */
class QtFukurikojoTempFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'qt_fukurikojo_temp';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'DeductDataID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '福利控除依頼データ識別ID'),
		'PaidYM' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '支給年月(YYYY-MM-DD形式)'),
		'EmpNo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '職員番号', 'charset' => 'utf8'),
		'PaidDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '支給区分', 'charset' => 'utf8'),
		'PayerDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '支払者区分', 'charset' => 'utf8'),
		'SeqNo' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => 'SEQ NO'),
		'DeductTypeCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '控除種別CD', 'charset' => 'utf8'),
		'Amounts' => array('type' => 'float', 'null' => true, 'default' => null, 'comment' => '金額'),
		'ReminderCount' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '残回数'),
		'DeductRes_DeductDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '控除結果区分', 'charset' => 'utf8'),
		'DeductRes_UnableCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '控除不能事由CD', 'charset' => 'utf8'),
		'BillSymbolNo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '証券記号番号', 'charset' => 'utf8'),
		'PartyCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '団体CD', 'charset' => 'utf8'),
		'EmployerCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '事業主', 'charset' => 'utf8'),
		'FormerKey' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '元KEY'),
		'registered_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'delete_flg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '削除フラグ : 削除フラグ', 'charset' => 'utf8'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'DeductDataID', 'unique' => 1)
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
			'DeductDataID' => 1,
			'PaidYM' => '2013-06-17',
			'EmpNo' => 'Lorem ip',
			'PaidDiv' => 'Lorem ipsum dolor ',
			'PayerDiv' => 'Lorem ipsum dolor ',
			'SeqNo' => 1,
			'DeductTypeCD' => 'Lorem ipsum dolor ',
			'Amounts' => 1,
			'ReminderCount' => 1,
			'DeductRes_DeductDiv' => 'Lorem ipsum dolor ',
			'DeductRes_UnableCD' => 'Lorem ipsum dolor ',
			'BillSymbolNo' => 'Lorem ipsum dolor ',
			'PartyCD' => 'Lorem ipsum dolor ',
			'EmployerCD' => 'Lorem ipsum dolor ',
			'FormerKey' => 1,
			'registered_date' => '2013-06-17 23:45:21',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:45:21',
			'updated_by' => 'Lorem ip',
			'delete_flg' => 'Lorem ipsum dolor sit ame',
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
