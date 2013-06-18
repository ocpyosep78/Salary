<?php
/**
 * FtReigetsuKojoIraiGojoSeihoHaitoChildFixture
 *
 */
class FtReigetsuKojoIraiGojoSeihoHaitoChildFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'ft_reigetsu_kojo_irai_gojo_seiho_haito_child';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'GojoHaitoDataID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '例月控除依頼データ 生命保険配当金（子）ID'),
		'GojoHaitoHeaderID' => array('type' => 'integer', 'null' => false, 'default' => null, 'comment' => '例月控除依頼データ 生命保険配当金（親）ID'),
		'OfficeCD' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 3, 'collate' => 'utf8_general_ci', 'comment' => '事業所CD', 'charset' => 'utf8'),
		'EmpNo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 8, 'collate' => 'utf8_general_ci', 'comment' => '組合員番号（職員番号）', 'charset' => 'utf8'),
		'Name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 17, 'collate' => 'utf8_general_ci', 'comment' => '氏名', 'charset' => 'utf8'),
		'CompanyCD' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '会社CD', 'charset' => 'utf8'),
		'ContractNo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 13, 'collate' => 'utf8_general_ci', 'comment' => '証券記号番号', 'charset' => 'utf8'),
		'PaymentType' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '配当支払方法', 'charset' => 'utf8'),
		'PaymentAmount' => array('type' => 'float', 'null' => false, 'default' => null, 'length' => 9, 'comment' => '当年度配当金'),
		'PaymentAccumTotal' => array('type' => 'float', 'null' => false, 'default' => null, 'length' => 10, 'comment' => '累計配当金'),
		'PaymentDeclared' => array('type' => 'float', 'null' => false, 'default' => null, 'length' => 9, 'comment' => '保険料控除申告用配当金'),
		'InsPremium' => array('type' => 'float', 'null' => false, 'default' => null, 'length' => 7, 'comment' => '保険料'),
		'AnnInsPremium' => array('type' => 'float', 'null' => false, 'default' => null, 'length' => 7, 'comment' => '年累計保険料'),
		'ContractDateYM' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 4, 'collate' => 'utf8_general_ci', 'comment' => '契約年月', 'charset' => 'utf8'),
		'EffectiveStartYM' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 4, 'collate' => 'utf8_general_ci', 'comment' => '保険料控除開始年月', 'charset' => 'utf8'),
		'ExpiryFlg' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '満期区分', 'charset' => 'utf8'),
		'ContractTerm' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '保険期間', 'charset' => 'utf8'),
		'FileType' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => 'ファイル区分', 'charset' => 'utf8'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'latest_data_flg' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '最新・仮登録フラグ : 最新・仮登録フラグ'),
		'last_key' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '最後キー : 最後キー'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'GojoHaitoDataID', 'unique' => 1)
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
			'GojoHaitoDataID' => 1,
			'GojoHaitoHeaderID' => 1,
			'OfficeCD' => 'L',
			'EmpNo' => 'Lorem ',
			'Name' => 'Lorem ipsum dol',
			'CompanyCD' => '',
			'ContractNo' => 'Lorem ipsum',
			'PaymentType' => 'Lorem ipsum dolor sit ame',
			'PaymentAmount' => 1,
			'PaymentAccumTotal' => 1,
			'PaymentDeclared' => 1,
			'InsPremium' => 1,
			'AnnInsPremium' => 1,
			'ContractDateYM' => 'Lo',
			'EffectiveStartYM' => 'Lo',
			'ExpiryFlg' => 'Lorem ipsum dolor sit ame',
			'ContractTerm' => '',
			'FileType' => 'Lorem ipsum dolor sit ame',
			'registered_date' => '2013-06-17 23:19:29',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:19:29',
			'updated_by' => 'Lorem ip',
			'latest_data_flg' => 1,
			'last_key' => 1,
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
