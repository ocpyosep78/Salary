<?php
/**
 * QmKmShikyutsukisuParentFixture
 *
 */
class QmKmShikyutsukisuParentFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'qm_km_shikyutsukisu_parent';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'FiscalYear' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '年度 : 年度'),
		'SalaryTypeCD' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 2, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '給与体系CD : 給与体系CD', 'charset' => 'utf8'),
		'EndDiligencePaymentDiv' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '期末勤勉支給区分 : 期末勤勉支給区分
1：夏季手当、2：年末手当、3：年度末手当', 'charset' => 'utf8'),
		'EndDiligenceDiv' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '期末勤勉区分 : 期末勤勉区分
1：期末手当、2：勤勉手当', 'charset' => 'utf8'),
		'PaymentCriterionDate' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '支給基準日 : 支給基準日'),
		'PaymentPeriodFrom' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '支給対象期間FROM : 支給対象期間FROM'),
		'PaymentPeriodTo' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '支給対象期間TO : 支給対象期間TO'),
		'RegDate' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'RegisteredBy' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'RegPgID' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録プログラムID : 登録プログラムID', 'charset' => 'utf8'),
		'UpdateDate' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'UpdateBy' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'UpdatePgmID' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新プログラムID : 更新プログラムID', 'charset' => 'utf8'),
		'DeleteFlg' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => '削除フラグ : 削除フラグ'),
		'VersionNo' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => 'バージョンNo : バージョンNo'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('FiscalYear', 'SalaryTypeCD', 'EndDiligencePaymentDiv', 'EndDiligenceDiv'), 'unique' => 1),
			'SalaryTypeCD' => array('column' => 'SalaryTypeCD', 'unique' => 0)
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
			'FiscalYear' => 1,
			'SalaryTypeCD' => '',
			'EndDiligencePaymentDiv' => 'Lorem ipsum dolor sit ame',
			'EndDiligenceDiv' => 'Lorem ipsum dolor sit ame',
			'PaymentCriterionDate' => '2013-06-17',
			'PaymentPeriodFrom' => '2013-06-17',
			'PaymentPeriodTo' => '2013-06-17',
			'RegDate' => '2013-06-17 23:36:51',
			'RegisteredBy' => 'Lorem ip',
			'RegPgID' => 'Lorem ip',
			'UpdateDate' => '2013-06-17 23:36:51',
			'UpdateBy' => 'Lorem ip',
			'UpdatePgmID' => 'Lorem ip',
			'DeleteFlg' => 1,
			'VersionNo' => 1
		),
	);

}
