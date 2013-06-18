<?php
/**
 * QmKyosaiKakeFutanKinFixture
 *
 */
class QmKyosaiKakeFutanKinFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'qm_kyosai_kake_futan_kin';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'RevYM' => array('type' => 'date', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '改定年月'),
		'MADiv' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 2, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '団体種別', 'charset' => 'utf8'),
		'JobGradeCDFrom' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 2, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '職層CD開始', 'charset' => 'utf8'),
		'JobGradeCDTo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '職層CD終了', 'charset' => 'utf8'),
		'Monthly_EndDiligenceDiv' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '例月・期末勤勉 : １：例月　２：期末勤勉', 'charset' => 'utf8'),
		'LongTermPremRate' => array('type' => 'float', 'null' => true, 'default' => '0.0000', 'length' => '7,4', 'comment' => '長期掛金率'),
		'LongTermChargeRate' => array('type' => 'float', 'null' => true, 'default' => '0.0000', 'length' => '7,4', 'comment' => '長期負担金率'),
		'LongTermOfficial' => array('type' => 'float', 'null' => true, 'default' => '0.0000', 'length' => '7,4', 'comment' => '長期公務分'),
		'LongTermPublic' => array('type' => 'float', 'null' => true, 'default' => '0.0000', 'length' => '7,4', 'comment' => '長期公的分'),
		'LongTermSalaryPeak' => array('type' => 'float', 'null' => true, 'default' => '0', 'length' => 10, 'comment' => '長期発令給頭打額'),
		'LongTermTotalDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '長期年度累計区分 : 0：年度累計で管理しない　1：年度累計で管理する', 'charset' => 'utf8'),
		'LongTermFractalExeDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '長期端数処理区分 : 1：切捨て　2：切上げ　3：四捨五入', 'charset' => 'utf8'),
		'ShortTermPremRate' => array('type' => 'float', 'null' => true, 'default' => '0.0000', 'length' => '7,4', 'comment' => '短期掛金率'),
		'ShortTermChargeRate' => array('type' => 'float', 'null' => true, 'default' => '0.0000', 'length' => '7,4', 'comment' => '短期負担金率'),
		'ShortTermOfficial' => array('type' => 'float', 'null' => true, 'default' => '0.0000', 'length' => '7,4', 'comment' => '短期公的分'),
		'ShortTermSalaryPeak' => array('type' => 'float', 'null' => true, 'default' => '0', 'length' => 10, 'comment' => '短期発令給頭打額'),
		'ShortTermTotalDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '短期年度累計区分 : 0：年度累計で管理しない　1：年度累計で管理する', 'charset' => 'utf8'),
		'ShortTermTreatUnderENDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '短期端数処理区分', 'charset' => 'utf8'),
		'WelfarePremRate' => array('type' => 'float', 'null' => true, 'default' => '0.0000', 'length' => '7,4', 'comment' => '福祉掛金率'),
		'WelfareChargeRate' => array('type' => 'float', 'null' => true, 'default' => '0.0000', 'length' => '7,4', 'comment' => '福祉負担金率'),
		'WelfareSalaryPeak' => array('type' => 'float', 'null' => true, 'default' => '0', 'length' => 10, 'comment' => '福祉発令給頭打額'),
		'WelfareTotalDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '福祉年度累計区分 : 0：年度累計で管理しない　1：年度累計で管理する', 'charset' => 'utf8'),
		'WelfareFractalExeDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '福祉端数処理区分 : 1：切捨て　2：切上げ　3：四捨五入', 'charset' => 'utf8'),
		'NursingPremRate' => array('type' => 'float', 'null' => true, 'default' => '0.0000', 'length' => '7,4', 'comment' => '介護掛金率'),
		'NursingChargeRate' => array('type' => 'float', 'null' => true, 'default' => '0.0000', 'length' => '7,4', 'comment' => '介護負担金率'),
		'NursingSalaryPeak' => array('type' => 'float', 'null' => true, 'default' => '0', 'length' => 10, 'comment' => '介護発令給頭打額'),
		'NursingTotalDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '介護年度累計区分 : 0：年度累計で管理しない　1：年度累計で管理する', 'charset' => 'utf8'),
		'NursingFractalExeDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '介護端数処理区分 : 1：切捨て　2：切上げ　3：四捨五入', 'charset' => 'utf8'),
		'ChildAllowContributionRate' => array('type' => 'float', 'null' => true, 'default' => '0.0000', 'length' => '7,4', 'comment' => '児童手当拠出金負担金率'),
		'ChildAllowContribution_UpperLimitAmo' => array('type' => 'float', 'null' => true, 'default' => '0', 'length' => 10, 'comment' => '児童手当拠出金発令給頭打額'),
		'ChildAllowContribution_AnnualTotalDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '児童手当拠出金年度累計区分 : 0：年度累計で管理しない　1：年度累計で管理する', 'charset' => 'utf8'),
		'ChildAllowContribution_UnderENTreatDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '児童手当拠出金端数処理区分 : 1：切捨て　2：切上げ　3：四捨五入', 'charset' => 'utf8'),
		'AdditionalExpenseContributionRate' => array('type' => 'float', 'null' => true, 'default' => '0.0000', 'length' => '7,4', 'comment' => '追加費用負担金率'),
		'AdditionalExpenseContribution_UpperLimitAmo' => array('type' => 'float', 'null' => true, 'default' => '0', 'length' => 10, 'comment' => '追加費用発令給頭打額'),
		'AdditionalExpenseContribution_AnnualTotalDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '追加費用年度累計区分 : 0：年度累計で管理しない　1：年度累計で管理する', 'charset' => 'utf8'),
		'AdditionalExpenseContribution_UnderENTreatDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '追加費用端数処理区分 : 1：切捨て　2：切上げ　3：四捨五入', 'charset' => 'utf8'),
		'AdminContribution' => array('type' => 'float', 'null' => true, 'default' => '0', 'length' => 10, 'comment' => '事務費負担金'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'delete_flg' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '削除フラグ : 削除フラグ', 'charset' => 'utf8'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('RevYM', 'MADiv', 'JobGradeCDFrom', 'Monthly_EndDiligenceDiv'), 'unique' => 1)
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
			'MADiv' => '',
			'JobGradeCDFrom' => '',
			'JobGradeCDTo' => '',
			'Monthly_EndDiligenceDiv' => 'Lorem ipsum dolor sit ame',
			'LongTermPremRate' => 1,
			'LongTermChargeRate' => 1,
			'LongTermOfficial' => 1,
			'LongTermPublic' => 1,
			'LongTermSalaryPeak' => 1,
			'LongTermTotalDiv' => 'Lorem ipsum dolor sit ame',
			'LongTermFractalExeDiv' => 'Lorem ipsum dolor sit ame',
			'ShortTermPremRate' => 1,
			'ShortTermChargeRate' => 1,
			'ShortTermOfficial' => 1,
			'ShortTermSalaryPeak' => 1,
			'ShortTermTotalDiv' => 'Lorem ipsum dolor sit ame',
			'ShortTermTreatUnderENDiv' => 'Lorem ipsum dolor sit ame',
			'WelfarePremRate' => 1,
			'WelfareChargeRate' => 1,
			'WelfareSalaryPeak' => 1,
			'WelfareTotalDiv' => 'Lorem ipsum dolor sit ame',
			'WelfareFractalExeDiv' => 'Lorem ipsum dolor sit ame',
			'NursingPremRate' => 1,
			'NursingChargeRate' => 1,
			'NursingSalaryPeak' => 1,
			'NursingTotalDiv' => 'Lorem ipsum dolor sit ame',
			'NursingFractalExeDiv' => 'Lorem ipsum dolor sit ame',
			'ChildAllowContributionRate' => 1,
			'ChildAllowContribution_UpperLimitAmo' => 1,
			'ChildAllowContribution_AnnualTotalDiv' => 'Lorem ipsum dolor sit ame',
			'ChildAllowContribution_UnderENTreatDiv' => 'Lorem ipsum dolor sit ame',
			'AdditionalExpenseContributionRate' => 1,
			'AdditionalExpenseContribution_UpperLimitAmo' => 1,
			'AdditionalExpenseContribution_AnnualTotalDiv' => 'Lorem ipsum dolor sit ame',
			'AdditionalExpenseContribution_UnderENTreatDiv' => 'Lorem ipsum dolor sit ame',
			'AdminContribution' => 1,
			'registered_date' => '2013-06-17 23:38:09',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:38:09',
			'updated_by' => 'Lorem ip',
			'delete_flg' => 'Lorem ipsum dolor sit ame',
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
