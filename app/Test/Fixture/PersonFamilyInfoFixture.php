<?php
/**
 * PersonFamilyInfoFixture
 *
 */
class PersonFamilyInfoFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'PersonFamilyInfo';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'PersonFamilyInfoID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '家族情報ファイルID : 家族情報ファイルID'),
		'EmpBasicInformationID' => array('type' => 'integer', 'null' => false, 'default' => null, 'comment' => '人事基本情報ID : 人事基本情報ID'),
		'PersonID' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'comment' => '個人ID : 個人ID'),
		'EmpNo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 8, 'collate' => 'utf8_general_ci', 'comment' => '職員番号 : 職員番号', 'charset' => 'utf8'),
		'RowCounter' => array('type' => 'integer', 'null' => true, 'default' => '1', 'comment' => '連番 : 連番'),
		'Relationship' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '続柄', 'charset' => 'utf8'),
		'Name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '氏名 : 氏名', 'charset' => 'utf8'),
		'NameKana' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 40, 'collate' => 'utf8_general_ci', 'comment' => '氏名カナ', 'charset' => 'utf8'),
		'Sex' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '性別 : 性別', 'charset' => 'utf8'),
		'BirthDate' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '生年月日 : 生年月日'),
		'DeathDate' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '死亡年月日 : 死亡年月日'),
		'SeparationFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '同居別居フラグ : 同居別居フラグ', 'charset' => 'utf8'),
		'HandicapDiv1' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 4, 'collate' => 'utf8_general_ci', 'comment' => '障害者区分1 : 税控除で使用する障がい情報：
null、普通障がい、特別障がい', 'charset' => 'utf8'),
		'HandicapDiv2' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 4, 'collate' => 'utf8_general_ci', 'comment' => '障害者区分2 : 児童手当で使用する障がい情報：
null、普通障がい、特別障がい、重度障がい', 'charset' => 'utf8'),
		'SeparationZipCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 9, 'collate' => 'utf8_general_ci', 'comment' => '別居郵便番号 : 別居郵便番号', 'charset' => 'utf8'),
		'SeparationAddressCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 6, 'collate' => 'utf8_general_ci', 'comment' => '別居住所コード : 別居住所コード', 'charset' => 'utf8'),
		'SeparationAddress' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'utf8_general_ci', 'comment' => '別居住所漢字 : 別居住所漢字', 'charset' => 'utf8'),
		'SeparationAddressDetail' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'utf8_general_ci', 'comment' => '別居住所方書漢字 : 別居住所方書漢字', 'charset' => 'utf8'),
		'SeparationAddressMemo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'utf8_general_ci', 'comment' => '別居先メモ : 別居先メモ', 'charset' => 'utf8'),
		'SeparationAddressKana' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'utf8_general_ci', 'comment' => '別居住所カナ : 別居住所カナ', 'charset' => 'utf8'),
		'SeparationAddressDetailKata' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'utf8_general_ci', 'comment' => '別居住所方書カナ : 別居住所方書カナ', 'charset' => 'utf8'),
		'SeparationTelNo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 11, 'collate' => 'utf8_general_ci', 'comment' => '別居電話番号 : 別居電話番号', 'charset' => 'utf8'),
		'WorkPlaceName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '勤務先名 : 勤務先名', 'charset' => 'utf8'),
		'WorkPlaceTelNo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 11, 'collate' => 'utf8_general_ci', 'comment' => '勤務先電話番号 : 勤務先電話番号', 'charset' => 'utf8'),
		'TaxDeductionStartDate' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '税控除適用期間開始年月日 : 税控除適用期間開始年月日'),
		'TaxDeductionEndDate' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '税控除適用期間終了年月日 : 税控除適用期間終了'),
		'DependFamStartDate' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '扶養手当適用期間開始年月日 : 扶養手当適用期間開始'),
		'DependFamEndDate' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '扶養手当適用期間終了年月日 : 扶養手当適用期間終了'),
		'ColaboDependDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '共同扶養区分 : 共同扶養区分', 'charset' => 'utf8'),
		'ChildAllowStartDate' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '児童手当適応期間開始年月日 : 児童手当適応期間開始年月日'),
		'ChildAllowEndDate' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '児童手当適用期間終年月日 : 児童手当適用期間終了'),
		'ChildAllowDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '要件児童区分 : 要件児童区分', 'charset' => 'utf8'),
		'ChildAllowCondStartDate' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '要件児童開始年月日 : 要件児童開始年月日'),
		'ChildAllowCondEndDate' => array('type' => 'date', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '要件児童終了年月日 : 要件児童終了年月日'),
		'Remarks' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => '備考 : 備考', 'charset' => 'utf8'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録プログラムID : 登録プログラムID', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'update_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'latest_data_flg' => array('type' => 'integer', 'null' => true, 'default' => '0', 'length' => 1, 'comment' => '更新プログラムID : 更新プログラムID'),
		'last_key' => array('type' => 'integer', 'null' => true, 'default' => '0', 'comment' => '削除フラグ : 削除フラグ'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => 'バージョンNo : バージョンNo'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => array('PersonFamilyInfoID', 'ChildAllowCondEndDate'), 'unique' => 1)
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
			'PersonFamilyInfoID' => 1,
			'EmpBasicInformationID' => 1,
			'PersonID' => 1,
			'EmpNo' => 'Lorem ',
			'RowCounter' => 1,
			'Relationship' => 'Lorem ip',
			'Name' => 'Lorem ipsum dolor ',
			'NameKana' => 'Lorem ipsum dolor sit amet',
			'Sex' => '',
			'BirthDate' => '2013-06-17',
			'DeathDate' => '2013-06-17',
			'SeparationFlg' => 'Lorem ipsum dolor sit ame',
			'HandicapDiv1' => 'Lo',
			'HandicapDiv2' => 'Lo',
			'SeparationZipCD' => 'Lorem i',
			'SeparationAddressCD' => 'Lore',
			'SeparationAddress' => 'Lorem ipsum dolor sit amet',
			'SeparationAddressDetail' => 'Lorem ipsum dolor sit amet',
			'SeparationAddressMemo' => 'Lorem ipsum dolor sit amet',
			'SeparationAddressKana' => 'Lorem ipsum dolor sit amet',
			'SeparationAddressDetailKata' => 'Lorem ipsum dolor sit amet',
			'SeparationTelNo' => 'Lorem ips',
			'WorkPlaceName' => 'Lorem ip',
			'WorkPlaceTelNo' => 'Lorem ips',
			'TaxDeductionStartDate' => '2013-06-17',
			'TaxDeductionEndDate' => '2013-06-17',
			'DependFamStartDate' => '2013-06-17',
			'DependFamEndDate' => '2013-06-17',
			'ColaboDependDiv' => 'Lorem ipsum dolor sit ame',
			'ChildAllowStartDate' => '2013-06-17',
			'ChildAllowEndDate' => '2013-06-17',
			'ChildAllowDiv' => 'Lorem ipsum dolor sit ame',
			'ChildAllowCondStartDate' => '2013-06-17',
			'ChildAllowCondEndDate' => '2013-06-17',
			'Remarks' => 'Lorem ipsum dolor sit amet',
			'registered_date' => '2013-06-17 23:08:05',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:08:05',
			'update_by' => 'Lorem ip',
			'latest_data_flg' => 1,
			'last_key' => 1,
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
