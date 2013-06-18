<?php
/**
 * QtFukurikojoFixture
 *
 */
class QtFukurikojoFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'qt_fukurikojo';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'qt_fukurikojo_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '主キー'),
		'EmpNo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 8, 'collate' => 'utf8_general_ci', 'comment' => '職員番号', 'charset' => 'utf8'),
		'DeductStartYM' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '控除開始年月'),
		'DeductionCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 6, 'collate' => 'utf8_general_ci', 'comment' => '控除種別CD', 'charset' => 'utf8'),
		'SeqNo' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => 'SEQ NO : 同一の開始年月・控除金種別での枝番'),
		'PartyCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '団体CD', 'charset' => 'utf8'),
		'DeductEndDate' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '控除終了年月'),
		'MonthlyDeduct_First' => array('type' => 'float', 'null' => true, 'default' => '0', 'length' => 10, 'comment' => '例月　初回控除額'),
		'MonthlyDeduct' => array('type' => 'float', 'null' => true, 'default' => '0', 'length' => 10, 'comment' => '例月　通常控除額'),
		'MonthlyDeduct_Last' => array('type' => 'float', 'null' => true, 'default' => '0', 'length' => 10, 'comment' => '例月　最終回控除額'),
		'MonthlyRemains' => array('type' => 'integer', 'null' => true, 'default' => '0', 'comment' => '例月　残回数'),
		'EndDiligence_First' => array('type' => 'float', 'null' => true, 'default' => '0', 'length' => 10, 'comment' => '期末勤勉　初回控除額'),
		'EndDiligence' => array('type' => 'float', 'null' => true, 'default' => '0', 'length' => 10, 'comment' => '期末勤勉　通常控除額'),
		'EndDiligence_Last' => array('type' => 'float', 'null' => true, 'default' => '0', 'length' => 10, 'comment' => '期末勤勉　最終回控除額'),
		'EndDiligenceRemains' => array('type' => 'integer', 'null' => true, 'default' => '0', 'comment' => '期末勤勉　残回数'),
		'Guarantee_Empty' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '保険証書（空） ', 'charset' => 'utf8'),
		'FormerKey' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '元KEY', 'charset' => 'utf8'),
		'OwnerNo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 4, 'collate' => 'utf8_general_ci', 'comment' => '事業主番号', 'charset' => 'utf8'),
		'registered_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'delete_flg' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '削除フラグ : 削除フラグ', 'charset' => 'utf8'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'latest_flg' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '登録状態'),
		'last_key' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '前回登録ID'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'qt_fukurikojo_id', 'unique' => 1)
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
			'qt_fukurikojo_id' => 1,
			'EmpNo' => 'Lorem ',
			'DeductStartYM' => '2013-06-17',
			'DeductionCD' => 'Lore',
			'SeqNo' => 1,
			'PartyCD' => '',
			'DeductEndDate' => '2013-06-17',
			'MonthlyDeduct_First' => 1,
			'MonthlyDeduct' => 1,
			'MonthlyDeduct_Last' => 1,
			'MonthlyRemains' => 1,
			'EndDiligence_First' => 1,
			'EndDiligence' => 1,
			'EndDiligence_Last' => 1,
			'EndDiligenceRemains' => 1,
			'Guarantee_Empty' => 'Lorem ip',
			'FormerKey' => 'Lorem ip',
			'OwnerNo' => 'Lo',
			'registered_date' => '2013-06-17 23:45:05',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:45:05',
			'updated_by' => 'Lorem ip',
			'delete_flg' => 'Lorem ipsum dolor sit ame',
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17',
			'latest_flg' => 1,
			'last_key' => 1
		),
	);

}
