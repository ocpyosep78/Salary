<?php
/**
 * QmKmjiyuSikyuWariaiFixture
 *
 */
class QmKmjiyuSikyuWariaiFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'qm_kmjiyu_sikyu_wariai';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'RevYM' => array('type' => 'date', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '改定年月'),
		'WardMetroDiv' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '区都区分 : 1：区　2：都', 'charset' => 'utf8'),
		'ReqReasonCD' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 4, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '申請事由CD', 'charset' => 'utf8'),
		'ApointRepoint_MonthlyTreatDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '常勤再任用・例月取扱い区分', 'charset' => 'utf8'),
		'ApointRepoint_DailyRate' => array('type' => 'float', 'null' => true, 'default' => '0.00', 'length' => '5,2', 'comment' => '常勤再任用・日割計算支給割合'),
		'Temp_MonthlyTreatDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '非常勤・例月取扱い区分', 'charset' => 'utf8'),
		'Temp_DailyRate' => array('type' => 'float', 'null' => true, 'default' => '0.00', 'length' => '5,2', 'comment' => '非常勤・日割計算支給割合'),
		'ComAllow_MngrAllow_TerminationDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '通手・管手停止区分', 'charset' => 'utf8'),
		'Salary_FullDayDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '給料全日該当区分', 'charset' => 'utf8'),
		'Salary_PartDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '給料月一部該当区分', 'charset' => 'utf8'),
		'Nursing_FullDayDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '扶養・全日該当区分', 'charset' => 'utf8'),
		'Nursing_PartDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '扶養・月一部該当区分', 'charset' => 'utf8'),
		'Local_FullDayDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '地域・全日該当区分', 'charset' => 'utf8'),
		'Local_PartDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '地域・月一部該当区分', 'charset' => 'utf8'),
		'Mngr_FullDayDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '管理職・全日該当区分', 'charset' => 'utf8'),
		'Mngr_PartDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '管理職・月一部該当区分', 'charset' => 'utf8'),
		'MedDoCall_FullDayDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '初任調整・全日該当区分', 'charset' => 'utf8'),
		'MedDoCall_PartDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '初任調整・月一部該当区分', 'charset' => 'utf8'),
		'Resident_FullDayDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '住居・全日該当区分', 'charset' => 'utf8'),
		'Resident_PartDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '住居・月一部該当区分', 'charset' => 'utf8'),
		'Commutation_FullDayDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '通勤・全日該当区分', 'charset' => 'utf8'),
		'Commutation_PartDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '通勤・月一部該当区分', 'charset' => 'utf8'),
		'Separation_FullDayDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '単身赴任・全日該当区分', 'charset' => 'utf8'),
		'Separation_PartDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '単身赴任・月一部該当区分', 'charset' => 'utf8'),
		'Compulsory_FullDayDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '義務特・全日該当区分', 'charset' => 'utf8'),
		'Compulsory_PartDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '義務特・月一部該当区分', 'charset' => 'utf8'),
		'MA_MonthStartDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '共済・月初日該当区分', 'charset' => 'utf8'),
		'MA_MonthEndDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '共済・月末日該当区分', 'charset' => 'utf8'),
		'MA_FullDayDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '共済・全日該当区分', 'charset' => 'utf8'),
		'SolcialIns_MonthStartDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '社保・月初日該当区分', 'charset' => 'utf8'),
		'SolcialIns_MonthEndDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '社保・月末日該当区分', 'charset' => 'utf8'),
		'SocialIns_FullDayDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '社保・全日該当区分', 'charset' => 'utf8'),
		'EmploymentIns_MonthStartDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '雇保・月初日該当区分', 'charset' => 'utf8'),
		'EmploymentIns_MonthEndDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '雇保・月末日該当区分', 'charset' => 'utf8'),
		'EmploymentIns_FullDayDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '雇保・全日該当区分', 'charset' => 'utf8'),
		'BenefitSociety_MonthStartDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '互助会・月初日該当区分', 'charset' => 'utf8'),
		'BenefitSociety_MonthEndDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '互助会・月末日該当区分', 'charset' => 'utf8'),
		'BenefitSociety_FullDayDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '互助会・全日該当区分', 'charset' => 'utf8'),
		'BenefitUnion_MonthStartDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '互助組合・月初日該当区分', 'charset' => 'utf8'),
		'BenefitUnion_MonthEndDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '互助組合・月末日該当区分', 'charset' => 'utf8'),
		'BenefitUnion_FullDayDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '互助組合・全日該当区分', 'charset' => 'utf8'),
		'Tax_MonthStartDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '所得税・月初日該当区分', 'charset' => 'utf8'),
		'Tax_MonthEndDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '所得税・月末日該当区分', 'charset' => 'utf8'),
		'Tax_FullDayDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '所得税・全日該当区分', 'charset' => 'utf8'),
		'LocalTax_MonthStartDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '住民税・月初日該当区分', 'charset' => 'utf8'),
		'LocalTax_MonthEndDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '住民税・月末日該当区分', 'charset' => 'utf8'),
		'LocalTax_FullDayDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '住民税・全日該当区分', 'charset' => 'utf8'),
		'BenefitDeduct_MonthStartDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '福利控除・月初日該当区分', 'charset' => 'utf8'),
		'BenefitDeduct_MonthEndDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '福利控除・月末日該当区分', 'charset' => 'utf8'),
		'BenefitDeduct_FullDayDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '福利控除・全日該当区分', 'charset' => 'utf8'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'delete_flg' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '削除フラグ : 削除フラグ', 'charset' => 'utf8'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('RevYM', 'WardMetroDiv', 'ReqReasonCD'), 'unique' => 1)
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
			'RevYM' => '2013-06-17',
			'WardMetroDiv' => 'Lorem ipsum dolor sit ame',
			'ReqReasonCD' => 'Lo',
			'ApointRepoint_MonthlyTreatDiv' => 'Lorem ipsum dolor sit ame',
			'ApointRepoint_DailyRate' => 1,
			'Temp_MonthlyTreatDiv' => 'Lorem ipsum dolor sit ame',
			'Temp_DailyRate' => 1,
			'ComAllow_MngrAllow_TerminationDiv' => 'Lorem ipsum dolor sit ame',
			'Salary_FullDayDiv' => 'Lorem ipsum dolor sit ame',
			'Salary_PartDiv' => 'Lorem ipsum dolor sit ame',
			'Nursing_FullDayDiv' => 'Lorem ipsum dolor sit ame',
			'Nursing_PartDiv' => 'Lorem ipsum dolor sit ame',
			'Local_FullDayDiv' => 'Lorem ipsum dolor sit ame',
			'Local_PartDiv' => 'Lorem ipsum dolor sit ame',
			'Mngr_FullDayDiv' => 'Lorem ipsum dolor sit ame',
			'Mngr_PartDiv' => 'Lorem ipsum dolor sit ame',
			'MedDoCall_FullDayDiv' => 'Lorem ipsum dolor sit ame',
			'MedDoCall_PartDiv' => 'Lorem ipsum dolor sit ame',
			'Resident_FullDayDiv' => 'Lorem ipsum dolor sit ame',
			'Resident_PartDiv' => 'Lorem ipsum dolor sit ame',
			'Commutation_FullDayDiv' => 'Lorem ipsum dolor sit ame',
			'Commutation_PartDiv' => 'Lorem ipsum dolor sit ame',
			'Separation_FullDayDiv' => 'Lorem ipsum dolor sit ame',
			'Separation_PartDiv' => 'Lorem ipsum dolor sit ame',
			'Compulsory_FullDayDiv' => 'Lorem ipsum dolor sit ame',
			'Compulsory_PartDiv' => 'Lorem ipsum dolor sit ame',
			'MA_MonthStartDiv' => 'Lorem ipsum dolor sit ame',
			'MA_MonthEndDiv' => 'Lorem ipsum dolor sit ame',
			'MA_FullDayDiv' => 'Lorem ipsum dolor sit ame',
			'SolcialIns_MonthStartDiv' => 'Lorem ipsum dolor sit ame',
			'SolcialIns_MonthEndDiv' => 'Lorem ipsum dolor sit ame',
			'SocialIns_FullDayDiv' => 'Lorem ipsum dolor sit ame',
			'EmploymentIns_MonthStartDiv' => 'Lorem ipsum dolor sit ame',
			'EmploymentIns_MonthEndDiv' => 'Lorem ipsum dolor sit ame',
			'EmploymentIns_FullDayDiv' => 'Lorem ipsum dolor sit ame',
			'BenefitSociety_MonthStartDiv' => 'Lorem ipsum dolor sit ame',
			'BenefitSociety_MonthEndDiv' => 'Lorem ipsum dolor sit ame',
			'BenefitSociety_FullDayDiv' => 'Lorem ipsum dolor sit ame',
			'BenefitUnion_MonthStartDiv' => 'Lorem ipsum dolor sit ame',
			'BenefitUnion_MonthEndDiv' => 'Lorem ipsum dolor sit ame',
			'BenefitUnion_FullDayDiv' => 'Lorem ipsum dolor sit ame',
			'Tax_MonthStartDiv' => 'Lorem ipsum dolor sit ame',
			'Tax_MonthEndDiv' => 'Lorem ipsum dolor sit ame',
			'Tax_FullDayDiv' => 'Lorem ipsum dolor sit ame',
			'LocalTax_MonthStartDiv' => 'Lorem ipsum dolor sit ame',
			'LocalTax_MonthEndDiv' => 'Lorem ipsum dolor sit ame',
			'LocalTax_FullDayDiv' => 'Lorem ipsum dolor sit ame',
			'BenefitDeduct_MonthStartDiv' => 'Lorem ipsum dolor sit ame',
			'BenefitDeduct_MonthEndDiv' => 'Lorem ipsum dolor sit ame',
			'BenefitDeduct_FullDayDiv' => 'Lorem ipsum dolor sit ame',
			'registered_date' => '2013-06-17 23:38:02',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:38:02',
			'updated_by' => 'Lorem ip',
			'delete_flg' => 'Lorem ipsum dolor sit ame',
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
