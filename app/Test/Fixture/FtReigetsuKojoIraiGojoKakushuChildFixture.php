<?php
/**
 * FtReigetsuKojoIraiGojoKakushuChildFixture
 *
 */
class FtReigetsuKojoIraiGojoKakushuChildFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'ft_reigetsu_kojo_irai_gojo_kakushu_child';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'GojoKojoDataID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '例月控除依頼データ 互助組合　各種（子）ID'),
		'GojoKojoHeaderID' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '例月控除依頼データ 互助組合　各種（親）ID'),
		'DeductType' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '種別', 'charset' => 'utf8'),
		'EmpNo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 8, 'collate' => 'utf8_general_ci', 'comment' => '組合員番号（職員番号）', 'charset' => 'utf8'),
		'Name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 17, 'collate' => 'utf8_general_ci', 'comment' => '氏名', 'charset' => 'utf8'),
		'OfficeCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 3, 'collate' => 'utf8_bin', 'comment' => '事業所CD', 'charset' => 'utf8'),
		'Division' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_bin', 'comment' => '区分', 'charset' => 'utf8'),
		'DeductAmo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 7, 'collate' => 'utf8_general_ci', 'comment' => '今回控除金額', 'charset' => 'utf8'),
		'DeductAmo_Former' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 7, 'collate' => 'utf8_general_ci', 'comment' => '前回控除金額', 'charset' => 'utf8'),
		'EffectiveYM' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 6, 'collate' => 'utf8_general_ci', 'comment' => '控除開始・変更年月', 'charset' => 'utf8'),
		'ContractDate' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 6, 'collate' => 'utf8_general_ci', 'comment' => '契約年月日（西暦YYMMDD）', 'charset' => 'utf8'),
		'ContractTerm' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '保険期間', 'charset' => 'utf8'),
		'ContractUnits' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '保険口数', 'charset' => 'utf8'),
		'PaymentsRemaining' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '控除または残回数', 'charset' => 'utf8'),
		'Rank' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => 'ランク', 'charset' => 'utf8'),
		'LastDeductDateYM' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 6, 'collate' => 'utf8_general_ci', 'comment' => '最終控除年月', 'charset' => 'utf8'),
		'ExpiryFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '満期区分', 'charset' => 'utf8'),
		'InsPaymentAmount' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 7, 'collate' => 'utf8_general_ci', 'comment' => '保険金（単位百円）', 'charset' => 'utf8'),
		'InsCompanyCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 3, 'collate' => 'utf8_general_ci', 'comment' => '保険会社CD', 'charset' => 'utf8'),
		'CompanyCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '会社CD', 'charset' => 'utf8'),
		'ContractNo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 13, 'collate' => 'utf8_general_ci', 'comment' => '証券記号番号', 'charset' => 'utf8'),
		'EDPNo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 13, 'collate' => 'utf8_general_ci', 'comment' => 'EDP-No', 'charset' => 'utf8'),
		'registered_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'latest_data_flg' => array('type' => 'integer', 'null' => true, 'default' => '0', 'comment' => '最新・仮登録フラグ : 最新・仮登録フラグ'),
		'last_key' => array('type' => 'integer', 'null' => true, 'default' => '0', 'comment' => '最後キー : 最後キー'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'GojoKojoDataID', 'unique' => 1)
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
			'GojoKojoDataID' => 1,
			'GojoKojoHeaderID' => 1,
			'DeductType' => '',
			'EmpNo' => 'Lorem ',
			'Name' => 'Lorem ipsum dol',
			'OfficeCD' => 'L',
			'Division' => '',
			'DeductAmo' => 'Lorem',
			'DeductAmo_Former' => 'Lorem',
			'EffectiveYM' => 'Lore',
			'ContractDate' => 'Lore',
			'ContractTerm' => '',
			'ContractUnits' => '',
			'PaymentsRemaining' => '',
			'Rank' => '',
			'LastDeductDateYM' => 'Lore',
			'ExpiryFlg' => 'Lorem ipsum dolor sit ame',
			'InsPaymentAmount' => 'Lorem',
			'InsCompanyCD' => 'L',
			'CompanyCD' => '',
			'ContractNo' => 'Lorem ipsum',
			'EDPNo' => 'Lorem ipsum',
			'registered_date' => '2013-06-17 23:19:05',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:19:05',
			'updated_by' => 'Lorem ip',
			'latest_data_flg' => 1,
			'last_key' => 1,
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
