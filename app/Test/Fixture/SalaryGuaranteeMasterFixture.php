<?php
/**
 * SalaryGuaranteeMasterFixture
 *
 */
class SalaryGuaranteeMasterFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'SalaryGuaranteeMaster';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'SalaryGuaranteeID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '現給保証マスタID : 現給保証マスタID'),
		'RevYMD' => array('type' => 'date', 'null' => false, 'default' => null, 'key' => 'index', 'comment' => '改定年月日 : 改定年月日'),
		'GuaranteeAmoTabCD' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '給料表CD : 給料表CD', 'charset' => 'utf8'),
		'SalaryClassCD' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '級CD : 級CD', 'charset' => 'utf8'),
		'FixedAmoAddAmounts' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => 10, 'comment' => '定額加算金額 : 定額加算金額'),
		'FixedRateAddRate' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '3,2', 'comment' => '定率加算率 : 定率加算率'),
		'RegDate' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'RegisteredBy' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'RegPgID' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録プログラムID : 登録プログラムID', 'charset' => 'utf8'),
		'UpdateDate' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'UpdateBy' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'UpdatePgmID' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新プログラムID : 更新プログラムID', 'charset' => 'utf8'),
		'DeleteFlg' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => '削除フラグ : 削除フラグ'),
		'VersionNo' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => 'バージョンNo : バージョンNo'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'SalaryGuaranteeID', 'unique' => 1),
			'PK_SalaryGuaranteeMaster' => array('column' => array('RevYMD', 'GuaranteeAmoTabCD', 'SalaryClassCD'), 'unique' => 1)
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
			'SalaryGuaranteeID' => 1,
			'RevYMD' => '2013-06-17',
			'GuaranteeAmoTabCD' => '',
			'SalaryClassCD' => '',
			'FixedAmoAddAmounts' => 1,
			'FixedRateAddRate' => 1,
			'RegDate' => '2013-06-17 23:09:45',
			'RegisteredBy' => 'Lorem ip',
			'RegPgID' => 'Lorem ip',
			'UpdateDate' => '2013-06-17 23:09:45',
			'UpdateBy' => 'Lorem ip',
			'UpdatePgmID' => 'Lorem ip',
			'DeleteFlg' => 1,
			'VersionNo' => 1
		),
	);

}
