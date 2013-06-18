<?php
/**
 * QmSyahoGojokaiKanyuFixture
 *
 */
class QmSyahoGojokaiKanyuFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'qm_syaho_gojokai_kanyu';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'EmpNo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 8, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '職員番号', 'charset' => 'utf8'),
		'MusAidFlg' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '共済_加入有無フラグ', 'charset' => 'utf8'),
		'MusAidType' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '共済組合種別', 'charset' => 'utf8'),
		'MusAid_QualifiedDate' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '共済_資格取得年月日'),
		'MusAid_DisqualifiedDate' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '共済_資格喪失年月日'),
		'SocialInsFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '社会保険_加入有無フラグ', 'charset' => 'utf8'),
		'SocialIns_InsuredPersonNumber' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 6, 'collate' => 'utf8_general_ci', 'comment' => '社会保険_被保険者整理番号', 'charset' => 'utf8'),
		'SocialIns_QualifiedDate' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '社会保険_資格取得年月日'),
		'SocialIns_DisqualifiedDate' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '社会保険_資格喪失年月日'),
		'SocialIns_BasicWelfarePensNumber' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '社会保険_基礎年金番号', 'charset' => 'utf8'),
		'SocialIns_StandardMonthlyPayment' => array('type' => 'float', 'null' => true, 'default' => '0', 'length' => 10, 'comment' => '社会保険_標準報酬月額'),
		'SocialIns_HealthIns_Grade' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '社会保険_健保_等級', 'charset' => 'utf8'),
		'SocialIns_WelfarePens_Grade' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '社会保険_厚生_等級', 'charset' => 'utf8'),
		'SocialIns_StandardMonthlyPayment_StartDate' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '社会保険_標準報酬_適用開始年月'),
		'SocialIns_StandardMonthlyPayment_EndDate' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '社会保険_標準報酬_適用終了年月'),
		'EmploymentInsFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '雇用保険_加入有無フラグ', 'charset' => 'utf8'),
		'EmploymentIns_InsuredPersonNumber' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 11, 'collate' => 'utf8_general_ci', 'comment' => '雇用保険_被保険者番号', 'charset' => 'utf8'),
		'EmploymentIns_QualifiedDate' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '雇用保険_資格取得年月日'),
		'EmploymentIns_DisqualifiedDate' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '雇用保険_資格喪失年月日'),
		'WardBenefitSocietyFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '区互助会_加入有無フラグ', 'charset' => 'utf8'),
		'WardBenefitSocietyOutDate' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '区互助会_加入年月日'),
		'WardMutualAidOutDate' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '区互助会_脱会年月日'),
		'TeacherBenefitSocietyFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '区教互助会_加入有無フラグ', 'charset' => 'utf8'),
		'TeacherBenefitSocietyInDate' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '区教互助会_加入年月日'),
		'TeacherBenefitSocietyOutDate' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '区教互助会_脱会年月日'),
		'MetroTeacherMutualAidFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '都教互助会_加入有無フラグ', 'charset' => 'utf8'),
		'MetroTeacherMutualAidInDate' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '都教互助会_加入年月日'),
		'MetroTeacherMutualAidOutDate' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '都教互助会_脱会年月日'),
		'SpecialTeacherMutualAidFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '特互助_加入有無フラグ', 'charset' => 'utf8'),
		'SpecialTeacherMutualAidInDate' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '特互助_加入年月日'),
		'SpecialTeacherMutualAidOutDate' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '特互助_脱会年月日'),
		'PersonalSupportFundFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '事業団_加入有無フラグ', 'charset' => 'utf8'),
		'PersonalSupportFndInDate' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '事業団_加入年月日'),
		'PersonalSupportFndOutDate' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '事業団_脱会年月日'),
		'LaborUnionDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '労組加入区分', 'charset' => 'utf8'),
		'LaborUnionInDate' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '労働組合_加入年月日'),
		'LaborUnionOutDate' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '労働組合_脱会年月日'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'delete_flg' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '削除フラグ : 削除フラグ', 'charset' => 'utf8'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'EmpNo', 'unique' => 1)
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
			'EmpNo' => 'Lorem ',
			'MusAidFlg' => 'Lorem ipsum dolor sit ame',
			'MusAidType' => 'Lorem ipsum dolor sit ame',
			'MusAid_QualifiedDate' => '2013-06-17',
			'MusAid_DisqualifiedDate' => '2013-06-17',
			'SocialInsFlg' => 'Lorem ipsum dolor sit ame',
			'SocialIns_InsuredPersonNumber' => 'Lore',
			'SocialIns_QualifiedDate' => '2013-06-17',
			'SocialIns_DisqualifiedDate' => '2013-06-17',
			'SocialIns_BasicWelfarePensNumber' => 'Lorem ip',
			'SocialIns_StandardMonthlyPayment' => 1,
			'SocialIns_HealthIns_Grade' => '',
			'SocialIns_WelfarePens_Grade' => '',
			'SocialIns_StandardMonthlyPayment_StartDate' => '2013-06-17',
			'SocialIns_StandardMonthlyPayment_EndDate' => '2013-06-17',
			'EmploymentInsFlg' => 'Lorem ipsum dolor sit ame',
			'EmploymentIns_InsuredPersonNumber' => 'Lorem ips',
			'EmploymentIns_QualifiedDate' => '2013-06-17',
			'EmploymentIns_DisqualifiedDate' => '2013-06-17',
			'WardBenefitSocietyFlg' => 'Lorem ipsum dolor sit ame',
			'WardBenefitSocietyOutDate' => '2013-06-17',
			'WardMutualAidOutDate' => '2013-06-17',
			'TeacherBenefitSocietyFlg' => 'Lorem ipsum dolor sit ame',
			'TeacherBenefitSocietyInDate' => '2013-06-17',
			'TeacherBenefitSocietyOutDate' => '2013-06-17',
			'MetroTeacherMutualAidFlg' => 'Lorem ipsum dolor sit ame',
			'MetroTeacherMutualAidInDate' => '2013-06-17',
			'MetroTeacherMutualAidOutDate' => '2013-06-17',
			'SpecialTeacherMutualAidFlg' => 'Lorem ipsum dolor sit ame',
			'SpecialTeacherMutualAidInDate' => '2013-06-17',
			'SpecialTeacherMutualAidOutDate' => '2013-06-17',
			'PersonalSupportFundFlg' => 'Lorem ipsum dolor sit ame',
			'PersonalSupportFndInDate' => '2013-06-17',
			'PersonalSupportFndOutDate' => '2013-06-17',
			'LaborUnionDiv' => 'Lorem ipsum dolor sit ame',
			'LaborUnionInDate' => '2013-06-17',
			'LaborUnionOutDate' => '2013-06-17',
			'registered_date' => '2013-06-17 23:40:46',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:40:46',
			'updated_by' => 'Lorem ip',
			'delete_flg' => 'Lorem ipsum dolor sit ame',
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
