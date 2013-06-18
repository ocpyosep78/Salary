<?php
/**
 * SalaryGuaranteeDetailFixture
 *
 */
class SalaryGuaranteeDetailFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'SalaryGuaranteeDetail';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'SalaryGuaranteeDetailID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '現給保証マスタ明細ID : 現給保証マスタ明細ID'),
		'SalaryGuaranteeID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index', 'comment' => '現給保証マスタID : 現給保証マスタID'),
		'GuaranteeAmoTabGrade' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 3, 'collate' => 'utf8_general_ci', 'comment' => '号給CD : 号給CD', 'charset' => 'utf8'),
		'MonthlyAmonut' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => 10, 'comment' => '月額 : 月額'),
		'AddAllow' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => 10, 'comment' => '加算額 : 加算額'),
		'RegDate' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'RegisteredBy' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'RegPgID' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録プログラムID : 登録プログラムID', 'charset' => 'utf8'),
		'UpdateDate' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'UpdateBy' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'UpdatePgmID' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新プログラムID : 更新プログラムID', 'charset' => 'utf8'),
		'DeleteFlg' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => '削除フラグ : 削除フラグ'),
		'VersionNo' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => 'バージョンNo : バージョンNo'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'SalaryGuaranteeDetailID', 'unique' => 1),
			'PK_SalaryGuaranteeDetail' => array('column' => array('SalaryGuaranteeID', 'GuaranteeAmoTabGrade'), 'unique' => 1)
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
			'SalaryGuaranteeDetailID' => 1,
			'SalaryGuaranteeID' => 1,
			'GuaranteeAmoTabGrade' => 'L',
			'MonthlyAmonut' => 1,
			'AddAllow' => 1,
			'RegDate' => '2013-06-17 23:09:38',
			'RegisteredBy' => 'Lorem ip',
			'RegPgID' => 'Lorem ip',
			'UpdateDate' => '2013-06-17 23:09:38',
			'UpdateBy' => 'Lorem ip',
			'UpdatePgmID' => 'Lorem ip',
			'DeleteFlg' => 1,
			'VersionNo' => 1
		),
	);

}
