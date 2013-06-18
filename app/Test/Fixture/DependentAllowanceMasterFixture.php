<?php
/**
 * DependentAllowanceMasterFixture
 *
 */
class DependentAllowanceMasterFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'DependentAllowanceMaster';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'DependentAllowanceMasterID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '扶養手当設定マスタID : 扶養手当設定マスタID'),
		'RevYM' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 7, 'collate' => 'utf8_general_ci', 'comment' => '改定年月 : 改定年月', 'charset' => 'utf8'),
		'SalaryTypeCD' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '給与体系CD : 給与体系CD', 'charset' => 'utf8'),
		'AmountPartner' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => 10, 'comment' => '手当額（配偶者） : 手当額（配偶者）'),
		'AmountFirst' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => 10, 'comment' => '手当額（配欠第１子） : 手当額（配欠第１子）'),
		'Amount1' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => 10, 'comment' => '手当額（１人目） : 手当額（１人目）'),
		'Amount2' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => 10, 'comment' => '手当額（２人目） : 手当額（２人目）'),
		'Amount3Over' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => 10, 'comment' => '手当額（３人目以降） : 手当額（３人目以降）'),
		'AmountSpecialSum' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => 10, 'comment' => '手当額（特定加算額） : 手当額（特定加算額）'),
		'SpecialSumStartAge' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '特定加算対象年齢開始 : 特定加算対象年齢開始'),
		'SpecialSumEndAge' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '特定加算対象年齢終了 : 特定加算対象年齢終了'),
		'AllowanceEndAge' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '子の手当終了年齢 : 子の手当終了年齢'),
		'RegDate' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'RegisteredBy' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'RegPgID' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録プログラムID : 登録プログラムID', 'charset' => 'utf8'),
		'UpdateDate' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'UpdateBy' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'UpdatePgmID' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新プログラムID : 更新プログラムID', 'charset' => 'utf8'),
		'DeleteFlg' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => '削除フラグ : 削除フラグ'),
		'VersionNo' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => 'バージョンNo : バージョンNo'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'DependentAllowanceMasterID', 'unique' => 1)
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
			'DependentAllowanceMasterID' => 1,
			'RevYM' => 'Lorem',
			'SalaryTypeCD' => '',
			'AmountPartner' => 1,
			'AmountFirst' => 1,
			'Amount1' => 1,
			'Amount2' => 1,
			'Amount3Over' => 1,
			'AmountSpecialSum' => 1,
			'SpecialSumStartAge' => 1,
			'SpecialSumEndAge' => 1,
			'AllowanceEndAge' => 1,
			'RegDate' => '2013-06-17 23:04:05',
			'RegisteredBy' => 'Lorem ip',
			'RegPgID' => 'Lorem ip',
			'UpdateDate' => '2013-06-17 23:04:05',
			'UpdateBy' => 'Lorem ip',
			'UpdatePgmID' => 'Lorem ip',
			'DeleteFlg' => 1,
			'VersionNo' => 1
		),
	);

}
