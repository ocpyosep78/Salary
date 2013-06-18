<?php
/**
 * QmKmKekkinnissuKansanFixture
 *
 */
class QmKmKekkinnissuKansanFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'qm_km_kekkinnissu_kansan';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'RevYM' => array('type' => 'date', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '改定年月'),
		'Ward_MetroDiv' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '区／都区分', 'charset' => 'utf8'),
		'AttEndTermanceRetireResCD' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 4, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '勤怠／退職事由CD ', 'charset' => 'utf8'),
		'AbsentedAllDayFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '欠勤等換算区分　0：数える：１：数えない', 'charset' => 'utf8'),
		'CalcFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '換算区分 : 1：時間換算、2：回数換算　', 'charset' => 'utf8'),
		'EndTermTimeCalcHour' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '期末時間換算時間数'),
		'EndTermTimeCalcMinutes' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '期末時間換算分数'),
		'EndTermTimeCalcNumerator' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '期末時間換算分子'),
		'EndTermTimeCalcDenominator' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '期末時間換算分母'),
		'DiligenceTimeCalcHour' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '勤勉時間換算時間数'),
		'DiligenceTimeCalcMinutes' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '勤勉時間換算分数'),
		'DiligenceTimeCalcNumerator' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '勤勉時間換算分子'),
		'DiligenceTimeCalcDenominator' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '勤勉時間換算分母'),
		'PrivateAffairsFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '私事欠勤等該当区分 : 0：非該当：1：該当　', 'charset' => 'utf8'),
		'tCalcOverTimeHour' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '期末回数換算超／以上時間数'),
		'EndTermCountCalcOverTimeMinutes' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '期末回数換算超／以上分数'),
		'EndTermCountCalcOverTimeDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '期末回数換算超／以上区分 : 1：超　2：以上', 'charset' => 'utf8'),
		'EndTermCountCalcOverTimeNumerator' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '期末回数換算超／以上分子'),
		'EndTermCountCalcOverTimeDenominator' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '期末回数換算超／以上分母'),
		'EndTermCountCalcUnderTimeDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '期末回数換算以下／未満区分 : 1：以下　2：未満', 'charset' => 'utf8'),
		'EndTermCountCalcUnderTimeNumerator' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '期末回数換算以下／未満時間分子'),
		'EndTermCountCalcUnderTimeDenominator' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '期末回数換算以下／未満時間分母'),
		'DiligenceCountCalcOverTimeHour' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '勤勉回数換算超／以上時間数'),
		'DiligenceCountCalcOverTimeMinutes' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '勤勉回数換算超／以上分数'),
		'DiligenceCountCalcOverTimeDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '勤勉回数換算超／以上区分 : 1：超　2：以上', 'charset' => 'utf8'),
		'DiligenceCountCalcOverTimeNumerator' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '勤勉回数換算超／以上分子'),
		'DiligenceCountCalcOverTimeDenominator' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '勤勉回数換算超／以上分母'),
		'DiligenceCountCalcUnderTimeDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '勤勉回数換算以下／未満区分 : 1：以下　2：未満', 'charset' => 'utf8'),
		'DiligenceCountCalcUnderTimeNumerator' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '勤勉回数換算以下／未満分子'),
		'DiligenceCountCalcUnderTimeDenominator' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '勤勉回数換算以下／未満分母'),
		'AbsentCalcConditionFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '欠勤等算定条件フラグ : 0：なし：1：あり', 'charset' => 'utf8'),
		'EndTermActualHours' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '期末実取得時間数'),
		'EndTermActualMinutes' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '期末実取得分数'),
		'EndTermActualOverDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '期末実取得超／以上区分 : 1：超　2：以上', 'charset' => 'utf8'),
		'DiligenceActualHours' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '勤勉実取得時間数'),
		'DiligenceActualMinutes' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '勤勉実取得分数'),
		'DiligenceActualOverDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '勤勉実取得超／以上区分 : 1：超　2：以上', 'charset' => 'utf8'),
		'EndTermAllowExceptionFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '基準日時点期末手当対象外区分：0：対象：1：対象外　', 'charset' => 'utf8'),
		'DiligenceAllowExceptionFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '基準日時点勤勉手当対象外区分：0：対象：1：対象外　　　　', 'charset' => 'utf8'),
		'NecessaryAdjust_ReductMonthFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => ' 所要の調整減月該当：0：非該当　：1：該当', 'charset' => 'utf8'),
		'NecessaryAdjust_FullPayFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '所要の調整全額支給非該当：０：該当：１：非該当', 'charset' => 'utf8'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'delete_flg' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '削除フラグ : 削除フラグ', 'charset' => 'utf8'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('RevYM', 'Ward_MetroDiv', 'AttEndTermanceRetireResCD'), 'unique' => 1)
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
			'Ward_MetroDiv' => 'Lorem ipsum dolor sit ame',
			'AttEndTermanceRetireResCD' => 'Lo',
			'AbsentedAllDayFlg' => 'Lorem ipsum dolor sit ame',
			'CalcFlg' => 'Lorem ipsum dolor sit ame',
			'EndTermTimeCalcHour' => 1,
			'EndTermTimeCalcMinutes' => 1,
			'EndTermTimeCalcNumerator' => 1,
			'EndTermTimeCalcDenominator' => 1,
			'DiligenceTimeCalcHour' => 1,
			'DiligenceTimeCalcMinutes' => 1,
			'DiligenceTimeCalcNumerator' => 1,
			'DiligenceTimeCalcDenominator' => 1,
			'PrivateAffairsFlg' => 'Lorem ipsum dolor sit ame',
			'tCalcOverTimeHour' => 1,
			'EndTermCountCalcOverTimeMinutes' => 1,
			'EndTermCountCalcOverTimeDiv' => 'Lorem ipsum dolor sit ame',
			'EndTermCountCalcOverTimeNumerator' => 1,
			'EndTermCountCalcOverTimeDenominator' => 1,
			'EndTermCountCalcUnderTimeDiv' => 'Lorem ipsum dolor sit ame',
			'EndTermCountCalcUnderTimeNumerator' => 1,
			'EndTermCountCalcUnderTimeDenominator' => 1,
			'DiligenceCountCalcOverTimeHour' => 1,
			'DiligenceCountCalcOverTimeMinutes' => 1,
			'DiligenceCountCalcOverTimeDiv' => 'Lorem ipsum dolor sit ame',
			'DiligenceCountCalcOverTimeNumerator' => 1,
			'DiligenceCountCalcOverTimeDenominator' => 1,
			'DiligenceCountCalcUnderTimeDiv' => 'Lorem ipsum dolor sit ame',
			'DiligenceCountCalcUnderTimeNumerator' => 1,
			'DiligenceCountCalcUnderTimeDenominator' => 1,
			'AbsentCalcConditionFlg' => 'Lorem ipsum dolor sit ame',
			'EndTermActualHours' => 1,
			'EndTermActualMinutes' => 1,
			'EndTermActualOverDiv' => 'Lorem ipsum dolor sit ame',
			'DiligenceActualHours' => 1,
			'DiligenceActualMinutes' => 1,
			'DiligenceActualOverDiv' => 'Lorem ipsum dolor sit ame',
			'EndTermAllowExceptionFlg' => 'Lorem ipsum dolor sit ame',
			'DiligenceAllowExceptionFlg' => 'Lorem ipsum dolor sit ame',
			'NecessaryAdjust_ReductMonthFlg' => 'Lorem ipsum dolor sit ame',
			'NecessaryAdjust_FullPayFlg' => 'Lorem ipsum dolor sit ame',
			'registered_date' => '2013-06-17 23:35:57',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:35:57',
			'updated_by' => 'Lorem ip',
			'delete_flg' => 'Lorem ipsum dolor sit ame',
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
