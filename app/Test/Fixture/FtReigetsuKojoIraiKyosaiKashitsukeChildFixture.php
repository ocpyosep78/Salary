<?php
/**
 * FtReigetsuKojoIraiKyosaiKashitsukeChildFixture
 *
 */
class FtReigetsuKojoIraiKyosaiKashitsukeChildFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'ft_reigetsu_kojo_irai_kyosai_kashitsuke_child';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'KyosaiKojoReqDataID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '例月控除依頼データ 共済貸付金（子）ID'),
		'KyosaiKojoReqHeaderID' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '例月控除依頼データ 共済貸付金（親）ID'),
		'DataDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => 'データ区分', 'charset' => 'utf8'),
		'TrancerCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 3, 'collate' => 'utf8_general_ci', 'comment' => '交換先CD', 'charset' => 'utf8'),
		'MetroMutualAidCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 3, 'collate' => 'utf8_general_ci', 'comment' => '都共済CD', 'charset' => 'utf8'),
		'DepCD1' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 3, 'collate' => 'utf8_general_ci', 'comment' => '所属CD（局）', 'charset' => 'utf8'),
		'DepCD2' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 3, 'collate' => 'utf8_general_ci', 'comment' => '所属CD（部）', 'charset' => 'utf8'),
		'DepCD3' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '所属CD（課）', 'charset' => 'utf8'),
		'EmpNo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 8, 'collate' => 'utf8_general_ci', 'comment' => '組合員証番号（職員番号）', 'charset' => 'utf8'),
		'Type' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '種別', 'charset' => 'utf8'),
		'DeductAmo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 6, 'collate' => 'utf8_general_ci', 'comment' => '控除額', 'charset' => 'utf8'),
		'DeductRes' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '控除結果', 'charset' => 'utf8'),
		'ReasonCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '事由CD', 'charset' => 'utf8'),
		'OldDepCD1' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 3, 'collate' => 'utf8_general_ci', 'comment' => '旧所属CD（局）', 'charset' => 'utf8'),
		'OldDepCD2' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 3, 'collate' => 'utf8_general_ci', 'comment' => '旧所属CD（部）', 'charset' => 'utf8'),
		'OldDepCD3' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '旧所属CD（課）', 'charset' => 'utf8'),
		'LoanNoType' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '貸付番号種別', 'charset' => 'utf8'),
		'LoanNoYear' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 3, 'collate' => 'utf8_general_ci', 'comment' => '貸付番号年度(年号(1)+和暦年)', 'charset' => 'utf8'),
		'LoanNo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 5, 'collate' => 'utf8_general_ci', 'comment' => '貸付番号', 'charset' => 'utf8'),
		'kariukeFamilyNameKana' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '借受人氏名（姓カナ）', 'charset' => 'utf8'),
		'kariukeFirstNameKana' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '借受人氏名（名カナ）', 'charset' => 'utf8'),
		'LoanAmo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 5, 'collate' => 'utf8_general_ci', 'comment' => '貸付額（万単位）', 'charset' => 'utf8'),
		'ReminderCount' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 3, 'collate' => 'utf8_general_ci', 'comment' => '残回数', 'charset' => 'utf8'),
		'HesitReminderCnt' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 3, 'collate' => 'utf8_general_ci', 'comment' => '猶予分残回数', 'charset' => 'utf8'),
		'MovementDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '異動区分', 'charset' => 'utf8'),
		'shokanAmo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 6, 'collate' => 'utf8_general_ci', 'comment' => '償還金額', 'charset' => 'utf8'),
		'saishu_shokin_gaku' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 6, 'collate' => 'utf8_general_ci', 'comment' => '最終償還額', 'charset' => 'utf8'),
		'shokanCnt' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 3, 'collate' => 'utf8_general_ci', 'comment' => '償還回数', 'charset' => 'utf8'),
		'HesitDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '猶予区分（再任用区分）', 'charset' => 'utf8'),
		'registered_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'latest_flg' => array('type' => 'integer', 'null' => true, 'default' => '0', 'comment' => '最新・仮登録フラグ : 最新・仮登録フラグ'),
		'last_key' => array('type' => 'integer', 'null' => true, 'default' => '0', 'comment' => '最後キー : 最後キー'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'KyosaiKojoReqDataID', 'unique' => 1)
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
			'KyosaiKojoReqDataID' => 1,
			'KyosaiKojoReqHeaderID' => 1,
			'DataDiv' => 'Lorem ipsum dolor sit ame',
			'TrancerCD' => 'L',
			'MetroMutualAidCD' => 'L',
			'DepCD1' => 'L',
			'DepCD2' => 'L',
			'DepCD3' => '',
			'EmpNo' => 'Lorem ',
			'Type' => '',
			'DeductAmo' => 'Lore',
			'DeductRes' => 'Lorem ipsum dolor sit ame',
			'ReasonCD' => '',
			'OldDepCD1' => 'L',
			'OldDepCD2' => 'L',
			'OldDepCD3' => '',
			'LoanNoType' => '',
			'LoanNoYear' => 'L',
			'LoanNo' => 'Lor',
			'kariukeFamilyNameKana' => 'Lorem ip',
			'kariukeFirstNameKana' => 'Lorem ip',
			'LoanAmo' => 'Lor',
			'ReminderCount' => 'L',
			'HesitReminderCnt' => 'L',
			'MovementDiv' => 'Lorem ipsum dolor sit ame',
			'shokanAmo' => 'Lore',
			'saishu_shokin_gaku' => 'Lore',
			'shokanCnt' => 'L',
			'HesitDiv' => 'Lorem ipsum dolor sit ame',
			'registered_date' => '2013-06-17 23:19:45',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:19:45',
			'updated_by' => 'Lorem ip',
			'latest_flg' => 1,
			'last_key' => 1,
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
