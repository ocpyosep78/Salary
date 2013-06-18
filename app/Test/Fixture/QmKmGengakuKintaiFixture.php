<?php
/**
 * QmKmGengakuKintaiFixture
 *
 */
class QmKmGengakuKintaiFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'qm_km_gengaku_kintai';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'RevYM' => array('type' => 'date', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '改定年月'),
		'Ward_MetroDiv' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '区／都 : １：区　２：都', 'charset' => 'utf8'),
		'ConvHour' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '時間換算時間数'),
		'HourConvFraction' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '時間換算分数'),
		'OverHourConvDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '時間換算超／以上区分 : １：超　２：以上', 'charset' => 'utf8'),
		'OverHourConv_Numerator' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '超／以上時間換算分子'),
		'OverHourConv_Denominator' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '超／以上時間換算分母'),
		'UnderHourConv_Numerator' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '以下／未満時間換算分子'),
		'UnderHourConv_Denominator' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '以下／未満時間換算分母'),
		'SuspensionAttendanceReason_From' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 4, 'collate' => 'utf8_general_ci', 'comment' => '停職勤怠事由開始', 'charset' => 'utf8'),
		'SuspensionAttendanceReason_To' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 4, 'collate' => 'utf8_general_ci', 'comment' => '停職勤怠事由終了', 'charset' => 'utf8'),
		'DeductAttendanceReason_From' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 4, 'collate' => 'utf8_general_ci', 'comment' => '減給勤怠事由開始', 'charset' => 'utf8'),
		'DeductAttendanceReason_To' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 4, 'collate' => 'utf8_general_ci', 'comment' => '減給勤怠事由終了', 'charset' => 'utf8'),
		'WarningAttendanceReason_From' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 4, 'collate' => 'utf8_general_ci', 'comment' => '戒告勤怠事由開始', 'charset' => 'utf8'),
		'WarningAttendanceReason_To' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 4, 'collate' => 'utf8_general_ci', 'comment' => '戒告勤怠事由終了', 'charset' => 'utf8'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'delete_flg' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '削除フラグ : 削除フラグ', 'charset' => 'utf8'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('RevYM', 'Ward_MetroDiv'), 'unique' => 1)
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
			'ConvHour' => 1,
			'HourConvFraction' => 1,
			'OverHourConvDiv' => 'Lorem ipsum dolor sit ame',
			'OverHourConv_Numerator' => 1,
			'OverHourConv_Denominator' => 1,
			'UnderHourConv_Numerator' => 1,
			'UnderHourConv_Denominator' => 1,
			'SuspensionAttendanceReason_From' => 'Lo',
			'SuspensionAttendanceReason_To' => 'Lo',
			'DeductAttendanceReason_From' => 'Lo',
			'DeductAttendanceReason_To' => 'Lo',
			'WarningAttendanceReason_From' => 'Lo',
			'WarningAttendanceReason_To' => 'Lo',
			'registered_date' => '2013-06-17 23:35:26',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:35:26',
			'updated_by' => 'Lorem ip',
			'delete_flg' => 'Lorem ipsum dolor sit ame',
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
