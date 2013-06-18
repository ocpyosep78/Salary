<?php
/**
 * DependentRelativesAllowanceFixture
 *
 */
class DependentRelativesAllowanceFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'DependentRelativesAllowance';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => 'ID'),
		'CertifiedDate' => array('type' => 'date', 'null' => false, 'default' => null, 'comment' => '認定年月日 : 認定年月日'),
		'DependentRelativesID' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index', 'comment' => '扶養家族ID'),
		'Occupation' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '職業', 'charset' => 'utf8'),
		'AnnualIncome' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => 10, 'comment' => '年収'),
		'ChallengedDiv' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 4, 'collate' => 'utf8_general_ci', 'comment' => '障害者区分 : 障害者区分の区分値が税控除と扶養手当で異なっている。
	税控除　：無、普通障害、特別障害
	扶養手当：無、普通障害、特別障害、重度障害
', 'charset' => 'utf8'),
		'MovementReason' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'comment' => '異動事由 : 障害者区分を含む？', 'charset' => 'utf8'),
		'KindOfRelatonship' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '種別', 'charset' => 'utf8'),
		'AllowanceStartMonth' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 7, 'collate' => 'utf8_general_ci', 'comment' => '手当開始年月 : 手当開始年月
フォーマットyyyy-MM', 'charset' => 'utf8'),
		'AllowanceEndMonth' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 7, 'collate' => 'utf8_general_ci', 'comment' => '手当終了年月 : 手当終了年月
フォーマットyyyy-MM', 'charset' => 'utf8'),
		'CoDependentsDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '共同扶養区分 : 有無', 'charset' => 'utf8'),
		'TaxDeductionDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '税控除区分', 'charset' => 'utf8'),
		'SpoutDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '配偶者区分', 'charset' => 'utf8'),
		'PlaceOfEmploymentDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '勤務先区分 : 配偶者の勤務先区分。
足立区・特別区・その他公務員・民間会社・自営業・無職・その他', 'charset' => 'utf8'),
		'WardOffice' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '区役所名', 'charset' => 'utf8'),
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
			'Occupation' => 'Lorem ip',
			'AnnualIncome' => 1,
			'ChallengedDiv' => 'Lo',
			'MovementReason' => 'Lorem ipsum dolor sit amet',
			'KindOfRelatonship' => 'Lorem ip',
			'AllowanceStartMonth' => 'Lorem',
			'AllowanceEndMonth' => 'Lorem',
			'CoDependentsDiv' => '',
			'TaxDeductionDiv' => '',
			'SpoutDiv' => '',
			'PlaceOfEmploymentDiv' => 'Lorem ip',
			'WardOffice' => 'Lorem ip',
			'RegDate' => '2013-06-17 23:04:12',
			'RegisteredBy' => 'Lorem ip',
			'RegPgID' => 'Lorem ip',
			'UpdateDate' => '2013-06-17 23:04:12',
			'UpdateBy' => 'Lorem ip',
			'UpdatePgmID' => 'Lorem ip',
			'DeleteFlg' => 1,
			'VersionNo' => 1
		),
	);

}
