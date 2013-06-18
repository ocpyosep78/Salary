<?php
/**
 * FtReigetsuKojoIraiAdachiRokinFixture
 *
 */
class FtReigetsuKojoIraiAdachiRokinFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'ft_reigetsu_kojo_irai_adachi_rokin';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'RoukinKojoReqID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '例月控除依頼データ 足立区労金（子）ID'),
		'DeductYM' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 4, 'collate' => 'utf8_general_ci', 'comment' => '控除年月（西暦年月YYMM）', 'charset' => 'utf8'),
		'OfficeNo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 8, 'collate' => 'utf8_general_ci', 'comment' => '職場番号', 'charset' => 'utf8'),
		'EmpNo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 8, 'collate' => 'utf8_general_ci', 'comment' => '職員番号', 'charset' => 'utf8'),
		'NameKana' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 15, 'collate' => 'utf8_general_ci', 'comment' => '氏名（カナ）', 'charset' => 'utf8'),
		'SavingAmount' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => 6, 'comment' => '貯蓄金額'),
		'RefundAmount' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => 6, 'comment' => '返還金額'),
		'ProcCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '処理CD', 'charset' => 'utf8'),
		'registered_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'latest_flg' => array('type' => 'integer', 'null' => true, 'default' => '0', 'comment' => '最新・仮登録フラグ : 最新・仮登録フラグ'),
		'last_key' => array('type' => 'integer', 'null' => true, 'default' => '0', 'comment' => '最後キー : 最後キー'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'RoukinKojoReqID', 'unique' => 1)
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
			'RoukinKojoReqID' => 1,
			'DeductYM' => 'Lo',
			'OfficeNo' => 'Lorem ',
			'EmpNo' => 'Lorem ',
			'NameKana' => 'Lorem ipsum d',
			'SavingAmount' => 1,
			'RefundAmount' => 1,
			'ProcCD' => 'Lorem ip',
			'registered_date' => '2013-06-17 23:18:26',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:18:26',
			'updated_by' => 'Lorem ip',
			'latest_flg' => 1,
			'last_key' => 1,
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
