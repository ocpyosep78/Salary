<?php
/**
 * QmKmSeisekiritsuSanshutsuParentFixture
 *
 */
class QmKmSeisekiritsuSanshutsuParentFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'qm_km_seisekiritsu_sanshutsu_parent';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'RevYM' => array('type' => 'date', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '改定年月'),
		'GradeJudgeDiv' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 2, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '成績判定区分', 'charset' => 'utf8'),
		'AddRateEnableDecimal' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '加算率有効小数点桁数'),
		'GradeRateEnableDecimal' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '勤務成績割合有効小数点桁数'),
		'DonationRate' => array('type' => 'float', 'null' => false, 'default' => '0.00000', 'length' => '7,5', 'comment' => '一律拠出割合'),
		'DonationRateByGradeLower' => array('type' => 'float', 'null' => false, 'default' => '0.00000', 'length' => '7,5', 'comment' => '成績による拠出割合_下位 '),
		'DonationRateByGradeLowest' => array('type' => 'float', 'null' => false, 'default' => '0.00000', 'length' => '7,5', 'comment' => '成績による拠出割合_最下位'),
		'SurchargeHigher' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '加重値_上位'),
		'SurchargeHighest' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '加重値_最上位'),
		'ExpenceRecordAutoCalcFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '拠出額・成績自動算出：０：行わない　１：行う', 'charset' => 'utf8'),
		'DiligenceBasicsPlusDependentAllow' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '扶養手当勤勉基礎額区分：０：含めない　１：含める', 'charset' => 'utf8'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'delete_flg' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '削除フラグ : 削除フラグ', 'charset' => 'utf8'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('RevYM', 'GradeJudgeDiv'), 'unique' => 1)
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
			'GradeJudgeDiv' => '',
			'AddRateEnableDecimal' => 1,
			'GradeRateEnableDecimal' => 1,
			'DonationRate' => 1,
			'DonationRateByGradeLower' => 1,
			'DonationRateByGradeLowest' => 1,
			'SurchargeHigher' => 1,
			'SurchargeHighest' => 1,
			'ExpenceRecordAutoCalcFlg' => 'Lorem ipsum dolor sit ame',
			'DiligenceBasicsPlusDependentAllow' => 'Lorem ipsum dolor sit ame',
			'registered_date' => '2013-06-17 23:36:36',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:36:36',
			'updated_by' => 'Lorem ip',
			'delete_flg' => 'Lorem ipsum dolor sit ame',
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
