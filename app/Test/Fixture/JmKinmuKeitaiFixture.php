<?php
/**
 * JmKinmuKeitaiFixture
 *
 */
class JmKinmuKeitaiFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'jm_kinmu_keitai';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'WorkingPatternCD' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 2, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '勤務形態CD', 'charset' => 'utf8'),
		'ValidDate' => array('type' => 'date', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '有効年月日'),
		'InvalidDate' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 8, 'collate' => 'utf8_general_ci', 'comment' => '無効年月日', 'charset' => 'utf8'),
		'WorkingPatternName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '勤務形態名称', 'charset' => 'utf8'),
		'WorkingPatternShortName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 4, 'collate' => 'utf8_general_ci', 'comment' => '勤務形態略名称', 'charset' => 'utf8'),
		'WorkingPatternType' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '勤務形態種別', 'charset' => 'utf8'),
		'WorkTime' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '勤務時間（分数）'),
		'StartWorkTime' => array('type' => 'time', 'null' => true, 'default' => null, 'comment' => '勤務時間（開始）'),
		'EndWorkTime' => array('type' => 'time', 'null' => true, 'default' => null, 'comment' => '勤務時間（終了）'),
		'RestTime' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '休憩時間（分数）'),
		'StartRestTime' => array('type' => 'time', 'null' => true, 'default' => null, 'comment' => '休憩時間（開始）'),
		'EndRestTime' => array('type' => 'time', 'null' => true, 'default' => null, 'comment' => '休憩時間（終了）'),
		'ReposeTime1' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '休息時間１（分数）'),
		'StartReposeTime1' => array('type' => 'time', 'null' => true, 'default' => null, 'comment' => '休息時間（開始）１'),
		'EndReposeTime1' => array('type' => 'time', 'null' => true, 'default' => null, 'comment' => '休息時間（終了）１'),
		'ReposeTime2' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '休息時間２（分数）'),
		'StartReposeTime2' => array('type' => 'time', 'null' => true, 'default' => null, 'comment' => '休息時間（開始）２'),
		'EndReposeTime2' => array('type' => 'time', 'null' => true, 'default' => null, 'comment' => '休息時間（終了）２'),
		'StWorkTimeWhenRestMoning' => array('type' => 'time', 'null' => true, 'default' => null, 'comment' => '午前半日休暇時勤務開始時刻'),
		'EdWorkTimeWhenRestAftnoon' => array('type' => 'time', 'null' => true, 'default' => null, 'comment' => '午後半日休暇時勤務終了時刻'),
		'DisableChangeFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '変更不可フラグ', 'charset' => 'utf8'),
		'RateUnitDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '割当単位区分', 'charset' => 'utf8'),
		'ExclusiveCounter' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '排他カウンタ'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'delete_flg' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '削除フラグ : 削除フラグ', 'charset' => 'utf8'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('WorkingPatternCD', 'ValidDate'), 'unique' => 1)
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
			'WorkingPatternCD' => '',
			'ValidDate' => '2013-06-17',
			'InvalidDate' => 'Lorem ',
			'WorkingPatternName' => 'Lorem ipsum dolor ',
			'WorkingPatternShortName' => 'Lo',
			'WorkingPatternType' => 'Lorem ipsum dolor sit ame',
			'WorkTime' => 1,
			'StartWorkTime' => '23:22:51',
			'EndWorkTime' => '23:22:51',
			'RestTime' => 1,
			'StartRestTime' => '23:22:51',
			'EndRestTime' => '23:22:51',
			'ReposeTime1' => 1,
			'StartReposeTime1' => '23:22:51',
			'EndReposeTime1' => '23:22:51',
			'ReposeTime2' => 1,
			'StartReposeTime2' => '23:22:51',
			'EndReposeTime2' => '23:22:51',
			'StWorkTimeWhenRestMoning' => '23:22:51',
			'EdWorkTimeWhenRestAftnoon' => '23:22:51',
			'DisableChangeFlg' => 'Lorem ipsum dolor sit ame',
			'RateUnitDiv' => 'Lorem ipsum dolor sit ame',
			'ExclusiveCounter' => 1,
			'registered_date' => '2013-06-17 23:22:51',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:22:51',
			'updated_by' => 'Lorem ip',
			'delete_flg' => 'Lorem ipsum dolor sit ame',
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
