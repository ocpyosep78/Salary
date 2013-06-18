<?php
/**
 * FtReigetsuKojoIraiGojoGrpHokenHaitoChildFixture
 *
 */
class FtReigetsuKojoIraiGojoGrpHokenHaitoChildFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'ft_reigetsu_kojo_irai_gojo_grp_hoken_haito_child';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'GojiHaito2DataID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'GojiHaito2HeaderID' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '例月控除依頼データ 互助組合　グループ保険配当金（親）ID'),
		'EmpNo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 8, 'collate' => 'utf8_general_ci', 'comment' => '組合員番号（職員番号）', 'charset' => 'utf8'),
		'OfficeCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 3, 'collate' => 'utf8_general_ci', 'comment' => '事業所CD', 'charset' => 'utf8'),
		'ContractDate' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 6, 'collate' => 'utf8_general_ci', 'comment' => '加入年月日（西暦YYMMDD）', 'charset' => 'utf8'),
		'Constant' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => 'コンスタント', 'charset' => 'utf8'),
		'PaymentAmo' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => 7, 'comment' => '配当金額'),
		'EffectiveStartYM' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 4, 'collate' => 'utf8_general_ci', 'comment' => '保険始期年月（西暦YYMM）', 'charset' => 'utf8'),
		'DepCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '所属CD', 'charset' => 'utf8'),
		'registered_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'latest_data_flg' => array('type' => 'integer', 'null' => true, 'default' => '0', 'comment' => '最新・仮登録フラグ : 最新・仮登録フラグ'),
		'last_key' => array('type' => 'integer', 'null' => true, 'default' => '0', 'comment' => '最後キー : 最後キー'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'GojiHaito2DataID', 'unique' => 1)
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
			'GojiHaito2DataID' => 1,
			'GojiHaito2HeaderID' => 1,
			'EmpNo' => 'Lorem ',
			'OfficeCD' => 'L',
			'ContractDate' => 'Lore',
			'Constant' => 'Lorem ipsum dolor sit ame',
			'PaymentAmo' => 1,
			'EffectiveStartYM' => 'Lo',
			'DepCD' => 'Lorem ip',
			'registered_date' => '2013-06-17 23:18:50',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:18:50',
			'updated_by' => 'Lorem ip',
			'latest_data_flg' => 1,
			'last_key' => 1,
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
