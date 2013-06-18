<?php
/**
 * FtReigetsuKojoIraiGojoSeihoHaitoParentFixture
 *
 */
class FtReigetsuKojoIraiGojoSeihoHaitoParentFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'ft_reigetsu_kojo_irai_gojo_seiho_haito_parent';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'GojoHaitoHeaderID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '例月控除依頼データ 互助組合　生命保険配当金（親）'),
		'FileID' => array('type' => 'integer', 'null' => false, 'default' => null, 'comment' => 'ファイルID'),
		'End_OfficeCD' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 3, 'collate' => 'utf8_general_ci', 'comment' => '（エンド）事業所CD', 'charset' => 'utf8'),
		'End__PaymentType' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '（エンド）現金払配当金：配当支払方法', 'charset' => 'utf8'),
		'End_ContractUnitsTotal' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 9, 'collate' => 'utf8_general_ci', 'comment' => '（エンド）現金払配当金：保険口数', 'charset' => 'utf8'),
		'End_PaymentAmountTotal' => array('type' => 'float', 'null' => false, 'default' => null, 'length' => 10, 'comment' => '（エンド）現金払配当金：合計'),
		'End_NoOfData' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 9, 'collate' => 'utf8_general_ci', 'comment' => '（エンド）データ件数', 'charset' => 'utf8'),
		'ProcStatus' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '処理ステータス', 'charset' => 'utf8'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'latest_data_flg' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '最新・仮登録フラグ : 最新・仮登録フラグ'),
		'last_key' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '最後キー : 最後キー'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'GojoHaitoHeaderID', 'unique' => 1)
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
			'GojoHaitoHeaderID' => 1,
			'FileID' => 1,
			'End_OfficeCD' => 'L',
			'End__PaymentType' => 'Lorem ipsum dolor sit ame',
			'End_ContractUnitsTotal' => 'Lorem i',
			'End_PaymentAmountTotal' => 1,
			'End_NoOfData' => 'Lorem i',
			'ProcStatus' => 'Lorem ipsum dolor sit ame',
			'registered_date' => '2013-06-17 23:19:37',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:19:37',
			'updated_by' => 'Lorem ip',
			'latest_data_flg' => 1,
			'last_key' => 1,
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
