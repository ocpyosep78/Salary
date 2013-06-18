<?php
/**
 * JtNafudaJohoFixture
 *
 */
class JtNafudaJohoFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'jt_nafuda_joho';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'NamePlateInfoID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '名札情報ID'),
		'PersonID' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '個人ID'),
		'EmpNo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 8, 'collate' => 'utf8_general_ci', 'comment' => '職員番号', 'charset' => 'utf8'),
		'EmpDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '職員区分', 'charset' => 'utf8'),
		'EmpDivName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '職員区分名称', 'charset' => 'utf8'),
		'EmpDivSName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '職員区分略称', 'charset' => 'utf8'),
		'FamilyName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '通常氏名_氏', 'charset' => 'utf8'),
		'FirstName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '通常氏名_名', 'charset' => 'utf8'),
		'FamilyNameKana' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '通常氏名_氏かな', 'charset' => 'utf8'),
		'FirstNameKana' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '通常氏名_名かな', 'charset' => 'utf8'),
		'NameChangedDate' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '氏名変更年月日'),
		'DepCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 8, 'collate' => 'utf8_general_ci', 'comment' => '所属CD', 'charset' => 'utf8'),
		'DeptName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'comment' => '所属名 : 正式', 'charset' => 'utf8'),
		'DeptShortName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '所属名 : 短縮', 'charset' => 'utf8'),
		'LocationName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'utf8_general_ci', 'comment' => '勤務地名称', 'charset' => 'utf8'),
		'MgrCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '役職CD', 'charset' => 'utf8'),
		'MgrName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 8, 'collate' => 'utf8_general_ci', 'comment' => '役職名 : 正式', 'charset' => 'utf8'),
		'MgrShortName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 5, 'collate' => 'utf8_general_ci', 'comment' => '役職名 : 略称', 'charset' => 'utf8'),
		'OrderedDate_Dept' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '所属発令年月日'),
		'JobGradeCode' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '職層CD', 'charset' => 'utf8'),
		'JobGradeName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '職層名 : 正式', 'charset' => 'utf8'),
		'JobGradeShortName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 5, 'collate' => 'utf8_general_ci', 'comment' => '職層名 : 大分類', 'charset' => 'utf8'),
		'OrderedDate_JobGrade' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '職層発令年月日'),
		'JobDutyCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 3, 'collate' => 'utf8_general_ci', 'comment' => 'JobDutyCD', 'charset' => 'utf8'),
		'JobCategoryName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '職務名 : 正式（職種名 : 正式）', 'charset' => 'utf8'),
		'OrderedDate_JobDuty' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '職務発令年月日'),
		'NamePlateDeptName1' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '名札所属1', 'charset' => 'utf8'),
		'NamePlateDeptName2' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '名札所属2', 'charset' => 'utf8'),
		'NamePlateFamilyName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '名札氏名氏', 'charset' => 'utf8'),
		'NamePlateFamilyNameKana' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '名札氏名氏かな', 'charset' => 'utf8'),
		'NamePlateName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '名札氏名', 'charset' => 'utf8'),
		'NamePlateNameKana' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '名札氏名かな', 'charset' => 'utf8'),
		'OldFamilyName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '旧通常氏名_氏', 'charset' => 'utf8'),
		'OldFirstName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '旧通常氏名_名', 'charset' => 'utf8'),
		'OldFamilyNameKana' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '旧通常氏名_氏かな', 'charset' => 'utf8'),
		'OldFirstNameKana' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '旧通常氏名_名かな', 'charset' => 'utf8'),
		'OldNameChangedDate' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '旧氏名変更年月日'),
		'OldDepCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 8, 'collate' => 'utf8_general_ci', 'comment' => '旧所属CD', 'charset' => 'utf8'),
		'OldDeptName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'comment' => '旧所属名 : 正式', 'charset' => 'utf8'),
		'OldDeptShortName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '旧所属名 : 短縮', 'charset' => 'utf8'),
		'OldLocationName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'utf8_general_ci', 'comment' => '旧勤務地名称', 'charset' => 'utf8'),
		'OldMgrCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '旧役職CD', 'charset' => 'utf8'),
		'OldMgrName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 8, 'collate' => 'utf8_general_ci', 'comment' => '旧役職名 : 正式', 'charset' => 'utf8'),
		'OldMgrShortName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 5, 'collate' => 'utf8_general_ci', 'comment' => '旧役職名 : 略称', 'charset' => 'utf8'),
		'OrderedDate_OldDept' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '旧所属発令年月日'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'latest_data_flg' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '最新・仮登録フラグ : 最新・仮登録フラグ'),
		'last_key' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '最後キー : 最後キー'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'NamePlateInfoID', 'unique' => 1)
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
			'NamePlateInfoID' => 1,
			'PersonID' => 1,
			'EmpNo' => 'Lorem ',
			'EmpDiv' => '',
			'EmpDivName' => 'Lorem ipsum dolor ',
			'EmpDivSName' => 'Lorem ip',
			'FamilyName' => 'Lorem ipsum dolor ',
			'FirstName' => 'Lorem ipsum dolor ',
			'FamilyNameKana' => 'Lorem ipsum dolor ',
			'FirstNameKana' => 'Lorem ipsum dolor ',
			'NameChangedDate' => '2013-06-17',
			'DepCD' => 'Lorem ',
			'DeptName' => 'Lorem ipsum dolor sit amet',
			'DeptShortName' => 'Lorem ip',
			'LocationName' => 'Lorem ipsum dolor sit amet',
			'MgrCD' => '',
			'MgrName' => 'Lorem ',
			'MgrShortName' => 'Lor',
			'OrderedDate_Dept' => '2013-06-17',
			'JobGradeCode' => '',
			'JobGradeName' => 'Lorem ipsum dolor ',
			'JobGradeShortName' => 'Lor',
			'OrderedDate_JobGrade' => '2013-06-17',
			'JobDutyCD' => 'L',
			'JobCategoryName' => 'Lorem ipsum dolor ',
			'OrderedDate_JobDuty' => '2013-06-17',
			'NamePlateDeptName1' => 'Lorem ipsum dolor ',
			'NamePlateDeptName2' => 'Lorem ipsum dolor ',
			'NamePlateFamilyName' => 'Lorem ipsum dolor ',
			'NamePlateFamilyNameKana' => 'Lorem ipsum dolor ',
			'NamePlateName' => 'Lorem ipsum dolor ',
			'NamePlateNameKana' => 'Lorem ipsum dolor ',
			'OldFamilyName' => 'Lorem ipsum dolor ',
			'OldFirstName' => 'Lorem ipsum dolor ',
			'OldFamilyNameKana' => 'Lorem ipsum dolor ',
			'OldFirstNameKana' => 'Lorem ipsum dolor ',
			'OldNameChangedDate' => '2013-06-17',
			'OldDepCD' => 'Lorem ',
			'OldDeptName' => 'Lorem ipsum dolor sit amet',
			'OldDeptShortName' => 'Lorem ip',
			'OldLocationName' => 'Lorem ipsum dolor sit amet',
			'OldMgrCD' => '',
			'OldMgrName' => 'Lorem ',
			'OldMgrShortName' => 'Lor',
			'OrderedDate_OldDept' => '2013-06-17',
			'registered_date' => '2013-06-17 23:29:04',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:29:04',
			'updated_by' => 'Lorem ip',
			'latest_data_flg' => 1,
			'last_key' => 1,
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
