<?php
/**
 * QtJidoTeateKihonFixture
 *
 */
class QtJidoTeateKihonFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'qt_jido_teate_kihon';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'EmpNo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 8, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '職員番号', 'charset' => 'utf8'),
		'FiscalYear' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '年度'),
		'Income_Person' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '本人所得'),
		'Depends_ChildrenCount' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '扶養親族及び児童の人数'),
		'ElderDependsCount' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '老人扶養親族人数'),
		'PaidDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '支給区分', 'charset' => 'utf8'),
		'CertifiedDate' => array('type' => 'date', 'null' => false, 'default' => null, 'comment' => '認定年月日'),
		'StartDate_Paid' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '支給開始年月日'),
		'EndDate_Paid' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '支給終了年月日'),
		'TerminateReasonCD_ChildAllow' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '児童手当消滅事由CD', 'charset' => 'utf8'),
		'SpouseFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '配偶者有無', 'charset' => 'utf8'),
		'SpouseName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '配偶者氏名', 'charset' => 'utf8'),
		'SpouseshokuCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '配偶者の職業CD', 'charset' => 'utf8'),
		'Spouseshoku' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '配偶者の職業', 'charset' => 'utf8'),
		'SpouseIncome' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '配偶者所得'),
		'Comments' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 120, 'collate' => 'utf8_general_ci', 'comment' => '摘要', 'charset' => 'utf8'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'delete_flg' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '削除フラグ : 削除フラグ', 'charset' => 'utf8'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('EmpNo', 'FiscalYear'), 'unique' => 1)
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
			'FiscalYear' => 1,
			'Income_Person' => 1,
			'Depends_ChildrenCount' => 1,
			'ElderDependsCount' => 1,
			'PaidDiv' => 'Lorem ipsum dolor sit ame',
			'CertifiedDate' => '2013-06-17',
			'StartDate_Paid' => '2013-06-17',
			'EndDate_Paid' => '2013-06-17',
			'TerminateReasonCD_ChildAllow' => '',
			'SpouseFlg' => 'Lorem ipsum dolor sit ame',
			'SpouseName' => 'Lorem ipsum dolor ',
			'SpouseshokuCD' => 'Lorem ipsum dolor sit ame',
			'Spouseshoku' => 'Lorem ipsum dolor ',
			'SpouseIncome' => 1,
			'Comments' => 'Lorem ipsum dolor sit amet',
			'registered_date' => '2013-06-17 23:46:16',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:46:16',
			'updated_by' => 'Lorem ip',
			'delete_flg' => 'Lorem ipsum dolor sit ame',
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
