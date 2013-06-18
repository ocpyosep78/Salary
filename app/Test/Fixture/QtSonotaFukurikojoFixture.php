<?php
/**
 * QtSonotaFukurikojoFixture
 *
 */
class QtSonotaFukurikojoFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'qt_sonota_fukurikojo';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'WlfOtherDeductID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '福利その他控除ID'),
		'EmpNo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 8, 'collate' => 'utf8_general_ci', 'comment' => '職員番号', 'charset' => 'utf8'),
		'DeductStartYM' => array('type' => 'date', 'null' => false, 'default' => null, 'comment' => '控除開始年月日'),
		'DeductionCD' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 6, 'collate' => 'utf8_general_ci', 'comment' => '控除種別CD', 'charset' => 'utf8'),
		'SeqNo' => array('type' => 'integer', 'null' => false, 'default' => '1', 'comment' => '連番'),
		'MonthlyEndDiv' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '例月・期末区分', 'charset' => 'utf8'),
		'DeductEndDate' => array('type' => 'date', 'null' => false, 'default' => null, 'comment' => '控除終了年月'),
		'PartyCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '団体CD', 'charset' => 'utf8'),
		'MonthlyDeduct_First' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '例月 初回控除額'),
		'MonthlyDeduct' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '例月 通常控除額'),
		'MonthlyDeduct_Last' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '例月 最終回控除額'),
		'Monthly_Remains' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '例月残回数'),
		'EndDiligence_First' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '期末勤勉 初回控除額'),
		'EndDiligence_June' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '期末勤勉 6月控除額'),
		'EndDiligence_December' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '期末勤勉 12月控除額'),
		'EndDiligence_Last' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '期末勤勉 最終回控除額'),
		'EndDiligence_Remains' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '期末勤勉残回数'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'delete_flg' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '削除フラグ : 削除フラグ', 'charset' => 'utf8'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'WlfOtherDeductID', 'unique' => 1)
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
			'WlfOtherDeductID' => 1,
			'EmpNo' => 'Lorem ',
			'DeductStartYM' => '2013-06-17',
			'DeductionCD' => 'Lore',
			'SeqNo' => 1,
			'MonthlyEndDiv' => 'Lorem ipsum dolor sit ame',
			'DeductEndDate' => '2013-06-17',
			'PartyCD' => '',
			'MonthlyDeduct_First' => 1,
			'MonthlyDeduct' => 1,
			'MonthlyDeduct_Last' => 1,
			'Monthly_Remains' => 1,
			'EndDiligence_First' => 1,
			'EndDiligence_June' => 1,
			'EndDiligence_December' => 1,
			'EndDiligence_Last' => 1,
			'EndDiligence_Remains' => 1,
			'registered_date' => '2013-06-17 23:52:34',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:52:34',
			'updated_by' => 'Lorem ip',
			'delete_flg' => 'Lorem ipsum dolor sit ame',
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
