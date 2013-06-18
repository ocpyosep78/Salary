<?php
/**
 * IncomeTaxTableFixture
 *
 */
class IncomeTaxTableFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'IncomeTaxTable';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'TableType' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '税額表区分 : 税額表区分', 'charset' => 'utf8'),
		'NoOfDependentFamily' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '扶養親族数 : 扶養親族数'),
		'AmountFrom' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => 10, 'comment' => '社会保険料等控除後の給与などの金額（以上） : 社会保険料等控除後の給与などの金額（以上）'),
		'AmountTo' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => 10, 'comment' => '社会保険料等控除後の給与などの金額（未満） : 社会保険料等控除後の給与などの金額（未満）'),
		'TaxAmount' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => 10, 'comment' => '源泉徴収税額 : 源泉徴収税額'),
		'RegDate' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'RegisteredBy' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'RegPgID' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録プログラムID : 登録プログラムID', 'charset' => 'utf8'),
		'UpdateDate' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'UpdateBy' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'UpdatePgmID' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新プログラムID : 更新プログラムID', 'charset' => 'utf8'),
		'DeleteFlg' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => '削除フラグ : 削除フラグ'),
		'VersionNo' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => 'バージョンNo : バージョンNo'),
		'indexes' => array(
			
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
			'TableType' => 'Lorem ip',
			'NoOfDependentFamily' => 1,
			'AmountFrom' => 1,
			'AmountTo' => 1,
			'TaxAmount' => 1,
			'RegDate' => '2013-06-17 23:06:08',
			'RegisteredBy' => 'Lorem ip',
			'RegPgID' => 'Lorem ip',
			'UpdateDate' => '2013-06-17 23:06:08',
			'UpdateBy' => 'Lorem ip',
			'UpdatePgmID' => 'Lorem ip',
			'DeleteFlg' => 1,
			'VersionNo' => 1
		),
	);

}
