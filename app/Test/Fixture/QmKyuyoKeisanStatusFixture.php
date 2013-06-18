<?php
/**
 * QmKyuyoKeisanStatusFixture
 *
 */
class QmKyuyoKeisanStatusFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'qm_kyuyo_keisan_status';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'PaidYM' => array('type' => 'date', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '支給年月'),
		'PaidDate' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '支給年月日'),
		'SalaryMasterCreatedDiv' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '給与マスタ作成済区分 : 0：未取込　1：取込済', 'charset' => 'utf8'),
		'SalaryMasterCreatedDate' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '給与マスタ作成日'),
		'ActualTravelExpense_AcquisitionDiv' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '実績旅費取込済区分 : 0：未取込　1：取込済', 'charset' => 'utf8'),
		'ActualTravelExpense_AcquisitionDate' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '実績旅費取込日'),
		'BenefitDeduction_AcquisitionDiv' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '福利控除取込済区分 : 0：未取込　1：取込済', 'charset' => 'utf8'),
		'BenefitDeduction_AcquisitionDate' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '福利控除取込日'),
		'MABenefit_AcquisitionDiv' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '互助会給付金取込済区分 : 0：未取込　1：取込済', 'charset' => 'utf8'),
		'MABenefit_AcquisitionDate' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '互助会給付金取込日'),
		'YearEndTaxAdjustment_AcquisitionDiv' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '年末調整有無区分 : 0：なし　1：あり', 'charset' => 'utf8'),
		'CalcStatusDiv' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '計算状態区分 : 0：処理前 1：基礎データ作成中　2:基礎データ作成済み　3:計算中　4：計算済 5：財務支出データ作成中 6：財務支出データ作成済 8：確定中 9：確定済', 'charset' => 'utf8'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'delete_flg' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '削除フラグ : 削除フラグ', 'charset' => 'utf8'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'PaidYM', 'unique' => 1)
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
			'PaidDate' => '2013-06-17',
			'SalaryMasterCreatedDiv' => 'Lorem ipsum dolor sit ame',
			'SalaryMasterCreatedDate' => '2013-06-17',
			'ActualTravelExpense_AcquisitionDiv' => 'Lorem ipsum dolor sit ame',
			'ActualTravelExpense_AcquisitionDate' => '2013-06-17',
			'BenefitDeduction_AcquisitionDiv' => 'Lorem ipsum dolor sit ame',
			'BenefitDeduction_AcquisitionDate' => '2013-06-17',
			'MABenefit_AcquisitionDiv' => 'Lorem ipsum dolor sit ame',
			'MABenefit_AcquisitionDate' => '2013-06-17',
			'YearEndTaxAdjustment_AcquisitionDiv' => 'Lorem ipsum dolor sit ame',
			'CalcStatusDiv' => 'Lorem ipsum dolor sit ame',
			'registered_date' => '2013-06-17 23:38:41',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:38:41',
			'updated_by' => 'Lorem ip',
			'delete_flg' => 'Lorem ipsum dolor sit ame',
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
