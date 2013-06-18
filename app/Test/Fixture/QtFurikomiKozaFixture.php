<?php
/**
 * QtFurikomiKozaFixture
 *
 */
class QtFurikomiKozaFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'qt_furikomi_koza';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'EmpNo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 8, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '職員番号', 'charset' => 'utf8'),
		'MonthlyAccountSeq1' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '例月・口座１ : 職員口座マスタの連番'),
		'MonthlyAccountSeq2' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '例月・口座２ : 職員口座マスタの連番'),
		'MonthlyRemitDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '例月・振込方法 : １：口座１に全額　２：口座１に指定金額、口座２に残額　３：口座２に全額　４：口座２に指定金額、口座１に残額　５：現金', 'charset' => 'utf8'),
		'MonthlySpecifyAmounts' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '例月・指定金額'),
		'EndDiligenceAccountSeq1' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '期末勤勉・口座１ : 職員口座マスタの連番'),
		'EndDiligenceAccountSeq2' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '期末勤勉・口座２ : 職員口座マスタの連番'),
		'EndDiligenceRemitDiv' => array('type' => 'string', 'null' => true, 'default' => '0', 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '期末勤勉・振込方法', 'charset' => 'utf8'),
		'EndDiligenceSpecifyAmounts' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '期末勤勉・指定金額'),
		'RetireAllowAccountSeq1' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '退職手当・口座１ : 職員口座マスタの連番'),
		'RetireAllowAccountSeq2' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '退職手当・口座２ : 職員口座マスタの連番'),
		'RetireAllowRemitDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '退職手当・振込方法', 'charset' => 'utf8'),
		'RetireAllowSpecifyAmounts' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '退職手当・指定金額'),
		'MusAidAccountSeq' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '共済給付金・口座'),
		'MovementYM' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '異動年月'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'delete_flg' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '削除フラグ : 削除フラグ', 'charset' => 'utf8'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'EmpNo', 'unique' => 1)
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
			'EmpNo' => 'Lorem ',
			'MonthlyAccountSeq1' => 1,
			'MonthlyAccountSeq2' => 1,
			'MonthlyRemitDiv' => 'Lorem ipsum dolor sit ame',
			'MonthlySpecifyAmounts' => 1,
			'EndDiligenceAccountSeq1' => 1,
			'EndDiligenceAccountSeq2' => 1,
			'EndDiligenceRemitDiv' => 'Lorem ipsum dolor sit ame',
			'EndDiligenceSpecifyAmounts' => 1,
			'RetireAllowAccountSeq1' => 1,
			'RetireAllowAccountSeq2' => 1,
			'RetireAllowRemitDiv' => 'Lorem ipsum dolor sit ame',
			'RetireAllowSpecifyAmounts' => 1,
			'MusAidAccountSeq' => 1,
			'MovementYM' => '2013-06-17',
			'registered_date' => '2013-06-17 23:45:29',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:45:29',
			'updated_by' => 'Lorem ip',
			'delete_flg' => 'Lorem ipsum dolor sit ame',
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
