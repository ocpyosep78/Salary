<?php
/**
 * DependentRelativesTaxdeductionFixture
 *
 */
class DependentRelativesTaxdeductionFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'DependentRelativesTaxdeduction';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => 'ID'),
		'CertifiedDate' => array('type' => 'date', 'null' => false, 'default' => null, 'comment' => '認定年月日 : 認定年月日'),
		'DependentRelativesID' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index', 'comment' => '扶養家族ID'),
		'SeparationAddress' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'comment' => '別居の場合の住所 : 別居の場合の住所', 'charset' => 'utf8'),
		'RearingAllowanceReceivingFlag' => array('type' => 'text', 'null' => true, 'default' => null, 'length' => 1, 'comment' => '扶養手当受給フラグ : 税控除'),
		'TaxDeductionContinueFlag' => array('type' => 'text', 'null' => true, 'default' => null, 'length' => 1, 'comment' => '税控継続フラグ : 税控除'),
		'DependentsOnTaxStartMonth' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 7, 'collate' => 'utf8_general_ci', 'comment' => '税扶養開始年月 : 税扶養開始年月
フォーマットyyyy-MM', 'charset' => 'utf8'),
		'DependentsOnTaxEndMonth' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 7, 'collate' => 'utf8_general_ci', 'comment' => '税扶養終了年月 : 税扶養終了年月
フォーマットyyyy-MM', 'charset' => 'utf8'),
		'MinorsFlag' => array('type' => 'text', 'null' => true, 'default' => null, 'length' => 1, 'comment' => '年少者フラグ'),
		'ElderlyFlag' => array('type' => 'text', 'null' => true, 'default' => null, 'length' => 1, 'comment' => '老年者フラグ'),
		'RegDate' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'RegisteredBy' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'RegPgID' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録プログラムID : 登録プログラムID', 'charset' => 'utf8'),
		'UpdateDate' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'UpdateBy' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'UpdatePgmID' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新プログラムID : 更新プログラムID', 'charset' => 'utf8'),
		'DeleteFlg' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => '削除フラグ : 削除フラグ'),
		'VersionNo' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => 'バージョンNo : バージョンNo'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'ID', 'unique' => 1),
			'DependentRelativesID' => array('column' => 'DependentRelativesID', 'unique' => 0)
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
			'ID' => 1,
			'CertifiedDate' => '2013-06-17',
			'DependentRelativesID' => 1,
			'SeparationAddress' => 'Lorem ipsum dolor sit amet',
			'RearingAllowanceReceivingFlag' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'TaxDeductionContinueFlag' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'DependentsOnTaxStartMonth' => 'Lorem',
			'DependentsOnTaxEndMonth' => 'Lorem',
			'MinorsFlag' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'ElderlyFlag' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'RegDate' => '2013-06-17 23:04:28',
			'RegisteredBy' => 'Lorem ip',
			'RegPgID' => 'Lorem ip',
			'UpdateDate' => '2013-06-17 23:04:28',
			'UpdateBy' => 'Lorem ip',
			'UpdatePgmID' => 'Lorem ip',
			'DeleteFlg' => 1,
			'VersionNo' => 1
		),
	);

}
