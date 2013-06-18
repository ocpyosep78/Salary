<?php
/**
 * FixSalaryEmpInformationFixture
 *
 */
class FixSalaryEmpInformationFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'FixSalaryEmpInformation';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'FixSalaryEmpInformationID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '現給保障対象者情報ID : 現給保障対象者情報ID'),
		'EmpNo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 8, 'collate' => 'utf8_general_ci', 'comment' => '職員番号 : 職員番号', 'charset' => 'utf8'),
		'PreSalaryTableCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '切替前表CD : 切替前表CD', 'charset' => 'utf8'),
		'FixSalaryTabCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '保障表CD : 保障表CD', 'charset' => 'utf8'),
		'FixSalaryClass' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '保障級 : 保障級', 'charset' => 'utf8'),
		'FixSalaryGrade' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 3, 'collate' => 'utf8_general_ci', 'comment' => '保障号 : 保障号', 'charset' => 'utf8'),
		'FixSalaryStartDate' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '保障開始年月日 : 保障開始年月日'),
		'FixSalaryEndDate' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '保障終了年月日 : 保障終了年月日'),
		'FixSalaryEndReasonCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '保障終了事由CD : 保障終了事由CD', 'charset' => 'utf8'),
		'RemarksForFixed' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '現給保障対象者備考 : 現給保障対象者備考', 'charset' => 'utf8'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'delete_flg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '削除フラグ : 削除フラグ', 'charset' => 'utf8'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'FixSalaryEmpInformationID', 'unique' => 1)
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
			'FixSalaryEmpInformationID' => 1,
			'EmpNo' => 'Lorem ',
			'PreSalaryTableCD' => '',
			'FixSalaryTabCD' => '',
			'FixSalaryClass' => '',
			'FixSalaryGrade' => 'L',
			'FixSalaryStartDate' => '2013-06-17',
			'FixSalaryEndDate' => '2013-06-17',
			'FixSalaryEndReasonCD' => '',
			'RemarksForFixed' => 'Lorem ipsum dolor ',
			'registered_date' => '2013-06-17 23:05:06',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:05:06',
			'updated_by' => 'Lorem ip',
			'delete_flg' => 'Lorem ipsum dolor sit ame',
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
