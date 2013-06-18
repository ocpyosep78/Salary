<?php
/**
 * QwKamokuKyosaiKakekinFixture
 *
 */
class QwKamokuKyosaiKakekinFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'qw_kamoku_kyosai_kakekin';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'PaidYM' => array('type' => 'date', 'null' => false, 'default' => null, 'comment' => '支給年月'),
		'EmpNo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 8, 'collate' => 'utf8_general_ci', 'comment' => '職員番号', 'charset' => 'utf8'),
		'EmpBasicInformationID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '人事基本情報ID'),
		'FamilyNameFirstName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 40, 'collate' => 'utf8_general_ci', 'comment' => '氏名_氏名', 'charset' => 'utf8'),
		'SexCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '性別CD 1:男 2:女', 'charset' => 'utf8'),
		'SexName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '性別名', 'charset' => 'utf8'),
		'TokyoMetMASchoolMASoInsDiv' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '共済社保加入区分 　(1:共済 2:学校)', 'charset' => 'utf8'),
		'PayerDiv' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '支払者区分 (1:xx 2:xx ～8:xx分)', 'charset' => 'utf8'),
		'PayerShortName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '支払者名略称', 'charset' => 'utf8'),
		'DepCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 8, 'collate' => 'utf8_general_ci', 'comment' => '所属CD', 'charset' => 'utf8'),
		'DeptShortName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '所属名短縮', 'charset' => 'utf8'),
		'JobGradeCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '職層CD (1:区長 　2,3,4:特別職　1-4以外:他)', 'charset' => 'utf8'),
		'SalaryRewardsAccountCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 12, 'collate' => 'utf8_general_ci', 'comment' => '給料報酬科目CD', 'charset' => 'utf8'),
		'AccountShortName' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '科目短縮名称', 'charset' => 'utf8'),
		'AnnounceSalaryTotal' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '給料発令給合計'),
		'MultiAidLongTermPrem' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '共済長期掛金'),
		'MultiAidShortTermPrem' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '共済短期掛金'),
		'MultiAidWelfarePrem' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '共済福祉掛金'),
		'MultiAidNursingPrem' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '共済介護掛金'),
		'MusAidBasicInfo_LTPeak' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '共済長期頭打額'),
		'MusAidBasicInfo_STPeak' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '共済短期頭打額'),
		'MusAidBasicInfo_WelfarePeak' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '共済福祉頭打額'),
		'MusAidBasicInfo_NursingPeak' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '共済介護頭打額'),
		'TotalMultiAidLongTermPrem' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '共済長期_掛金_合計'),
		'TotalMultiAidShortTermPrem' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '共済短期_掛金_合計'),
		'TotalMultiAidWelfarePrem' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '共済福祉_掛金_合計'),
		'TotalMultiAidNursingPrem' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '共済介護_掛金_合計'),
		'TotalMultiAidLongTermPremPersons' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '共済長期_人数_合計'),
		'TotalMultiAidShortTermPremPersons' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '共済短期_人数_合計'),
		'TotalMultiAidWelfarePremPersons' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '共済福祉_人数_合計'),
		'TotalMultiAidNursingPremPersons' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '共済介護_人数_合計'),
		'TotalMusAidBasicInfo_LTPeak' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '共済長期_頭打額_合計'),
		'TotalMusAidBasicInfo_STPeak' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '共済短期_頭打額_合計'),
		'TotalMusAidBasicInfo_WelfarePeak' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '共済福祉_頭打額_合計'),
		'TotalMusAidBasicInfo_NursingPeak' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '共済介護_頭打額_合計'),
		'TotalMonTotal' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '性別_男_合計'),
		'TotalWomanTotal' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '性別_女_合計'),
		'TotalNusingMonTotal' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '介護_男_合計'),
		'TotalNusingWomanTotal' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '介護_女_合計'),
		'TotalMonTotalKamoku' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '科目別_性別_男_合計'),
		'TotalWomanTotalKamoku' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '科目別_性別_女_合計'),
		'TotalMonWomanTotalKamoku' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '科目別_性別_男女_合計'),
		'TotalNusingMonTotalKamoku' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '科目別_介護_男_合計'),
		'TotalNusingWomanTotalKamoku' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '科目別_介護_女_合計'),
		'TotalPayerDivSalary' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '支払者別_合計'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'delete_flg' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '削除フラグ', 'charset' => 'utf8'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'EmpBasicInformationID', 'unique' => 1)
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
			'PaidYM' => '2013-06-17',
			'EmpNo' => 'Lorem ',
			'EmpBasicInformationID' => 1,
			'FamilyNameFirstName' => 'Lorem ipsum dolor sit amet',
			'SexCD' => 'Lorem ipsum dolor sit ame',
			'SexName' => '',
			'TokyoMetMASchoolMASoInsDiv' => '',
			'PayerDiv' => '',
			'PayerShortName' => 'Lorem ip',
			'DepCD' => 'Lorem ',
			'DeptShortName' => 'Lorem ip',
			'JobGradeCD' => '',
			'SalaryRewardsAccountCD' => 'Lorem ipsu',
			'AccountShortName' => 'Lorem ip',
			'AnnounceSalaryTotal' => 1,
			'MultiAidLongTermPrem' => 1,
			'MultiAidShortTermPrem' => 1,
			'MultiAidWelfarePrem' => 1,
			'MultiAidNursingPrem' => 1,
			'MusAidBasicInfo_LTPeak' => 1,
			'MusAidBasicInfo_STPeak' => 1,
			'MusAidBasicInfo_WelfarePeak' => 1,
			'MusAidBasicInfo_NursingPeak' => 1,
			'TotalMultiAidLongTermPrem' => 1,
			'TotalMultiAidShortTermPrem' => 1,
			'TotalMultiAidWelfarePrem' => 1,
			'TotalMultiAidNursingPrem' => 1,
			'TotalMultiAidLongTermPremPersons' => 1,
			'TotalMultiAidShortTermPremPersons' => 1,
			'TotalMultiAidWelfarePremPersons' => 1,
			'TotalMultiAidNursingPremPersons' => 1,
			'TotalMusAidBasicInfo_LTPeak' => 1,
			'TotalMusAidBasicInfo_STPeak' => 1,
			'TotalMusAidBasicInfo_WelfarePeak' => 1,
			'TotalMusAidBasicInfo_NursingPeak' => 1,
			'TotalMonTotal' => 1,
			'TotalWomanTotal' => 1,
			'TotalNusingMonTotal' => 1,
			'TotalNusingWomanTotal' => 1,
			'TotalMonTotalKamoku' => 1,
			'TotalWomanTotalKamoku' => 1,
			'TotalMonWomanTotalKamoku' => 1,
			'TotalNusingMonTotalKamoku' => 1,
			'TotalNusingWomanTotalKamoku' => 1,
			'TotalPayerDivSalary' => 1,
			'registered_date' => '2013-06-17 23:54:41',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:54:41',
			'updated_by' => 'Lorem ip',
			'delete_flg' => 'Lorem ipsum dolor sit ame',
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
