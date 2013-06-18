<?php
/**
 * FtGojokaiKyufukinShikyuFixture
 *
 */
class FtGojokaiKyufukinShikyuFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'ft_gojokai_kyufukin_shikyu';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'MutualAidBenefitID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '互助会給付金支給台帳ID'),
		'EmpNo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 8, 'collate' => 'utf8_general_ci', 'comment' => '職員番号', 'charset' => 'utf8'),
		'DepCD' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 8, 'collate' => 'utf8_general_ci', 'comment' => '所属コード', 'charset' => 'utf8'),
		'JobDutyCD' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 3, 'collate' => 'utf8_general_ci', 'comment' => '職種職務', 'charset' => 'utf8'),
		'LocalCD' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '勤務地コード', 'charset' => 'utf8'),
		'EmpCategoryDiv' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '職員区分', 'charset' => 'utf8'),
		'MutualAidBenefitDiv' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '給付金種別：1:傷病2:災害3:弔慰金', 'charset' => 'utf8'),
		'ClaimDate' => array('type' => 'date', 'null' => false, 'default' => null, 'comment' => '請求日'),
		'PaidDate' => array('type' => 'date', 'null' => false, 'default' => null, 'comment' => '支給日'),
		'BenefitAmount' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 7, 'comment' => '支給金額'),
		'Remarks' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'comment' => '備考', 'charset' => 'utf8'),
		'DeceasedPerson' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'utf8_general_ci', 'comment' => '死亡者', 'charset' => 'utf8'),
		'FamilyRelationCD' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '続柄', 'charset' => 'utf8'),
		'DateOfDeath' => array('type' => 'date', 'null' => false, 'default' => null, 'comment' => '死亡日'),
		'PaidMethod' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '支給方法：　1:現金、2:振込', 'charset' => 'utf8'),
		'BankCD' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 4, 'collate' => 'utf8_general_ci', 'comment' => '振込先銀行コード', 'charset' => 'utf8'),
		'BranchCD' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 3, 'collate' => 'utf8_general_ci', 'comment' => '振込先店番', 'charset' => 'utf8'),
		'BranchName' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 32, 'collate' => 'utf8_general_ci', 'comment' => '振込先支店名', 'charset' => 'utf8'),
		'AccountTypeDiv' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '振込先預金種別: 1:普通、2:当座', 'charset' => 'utf8'),
		'AccountNum' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 7, 'collate' => 'utf8_general_ci', 'comment' => '振込先口座番号', 'charset' => 'utf8'),
		'AccountPersonName' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 30, 'collate' => 'utf8_general_ci', 'comment' => '振込先口座名義', 'charset' => 'utf8'),
		'ApplicationBP' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '代理申請', 'charset' => 'utf8'),
		'Applicant' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 30, 'collate' => 'utf8_general_ci', 'comment' => '申請者', 'charset' => 'utf8'),
		'ApplicantRemarks' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'comment' => '申請者備考', 'charset' => 'utf8'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'latest_data_flg' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '最新・仮登録フラグ : 最新・仮登録フラグ'),
		'last_key' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '最後キー : 最後キー'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'MutualAidBenefitID', 'unique' => 1)
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
			'MutualAidBenefitID' => 1,
			'EmpNo' => 'Lorem ',
			'DepCD' => 'Lorem ',
			'JobDutyCD' => 'L',
			'LocalCD' => '',
			'EmpCategoryDiv' => '',
			'MutualAidBenefitDiv' => 'Lorem ipsum dolor sit ame',
			'ClaimDate' => '2013-06-17',
			'PaidDate' => '2013-06-17',
			'BenefitAmount' => 1,
			'Remarks' => 'Lorem ipsum dolor sit amet',
			'DeceasedPerson' => 'Lorem ipsum dolor sit amet',
			'FamilyRelationCD' => '',
			'DateOfDeath' => '2013-06-17',
			'PaidMethod' => 'Lorem ipsum dolor sit ame',
			'BankCD' => 'Lo',
			'BranchCD' => 'L',
			'BranchName' => 'Lorem ipsum dolor sit amet',
			'AccountTypeDiv' => 'Lorem ipsum dolor sit ame',
			'AccountNum' => 'Lorem',
			'AccountPersonName' => 'Lorem ipsum dolor sit amet',
			'ApplicationBP' => 'Lorem ipsum dolor sit ame',
			'Applicant' => 'Lorem ipsum dolor sit amet',
			'ApplicantRemarks' => 'Lorem ipsum dolor sit amet',
			'registered_date' => '2013-06-17 23:17:48',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:17:48',
			'updated_by' => 'Lorem ip',
			'latest_data_flg' => 1,
			'last_key' => 1,
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
