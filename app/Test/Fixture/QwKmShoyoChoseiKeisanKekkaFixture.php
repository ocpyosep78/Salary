<?php
/**
 * QwKmShoyoChoseiKeisanKekkaFixture
 *
 */
class QwKmShoyoChoseiKeisanKekkaFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'qw_km_shoyo_chosei_keisan_kekka';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'EmpNo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 8, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '職員番号', 'charset' => 'utf8'),
		'NecessaryAdjust_MonthlyBasicAmo' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '基礎額：例月分'),
		'NecessaryAdjust_JunDiligenceAllow' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '基礎額：６月期末勤勉'),
		'NecessaryAdjust_DecDiligenceAllow' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '基礎額：１２月期末勤勉'),
		'NecessaryAdjust_MarDiligenceAllow' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '基礎額：３月期末勤勉'),
		'NecessaryAdjust_SubjectMonths' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '対象月数'),
		'NecessaryAdjust_DeductMonths' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '減じる月数'),
		'NecessaryAdjust_AdjustMonths' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '調整月数'),
		'NecessaryAdjust_ModificationRatio' => array('type' => 'float', 'null' => false, 'default' => '0.00000', 'length' => '8,5', 'comment' => '改定率'),
		'NecessaryAdjust_MonthlyAdjust' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '調整額：例月分'),
		'NecessaryAdjust_JunDiligenceAllowAdjust' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '調整額：６月期末勤勉'),
		'NecessaryAdjust_DecDiligenceAllowAdjust' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '調整額：１２月期末勤勉'),
		'NecessaryAdjust_MarDiligenceAllowAdjust' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '調整額：３月期末勤勉'),
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
			'NecessaryAdjust_MonthlyBasicAmo' => 1,
			'NecessaryAdjust_JunDiligenceAllow' => 1,
			'NecessaryAdjust_DecDiligenceAllow' => 1,
			'NecessaryAdjust_MarDiligenceAllow' => 1,
			'NecessaryAdjust_SubjectMonths' => 1,
			'NecessaryAdjust_DeductMonths' => 1,
			'NecessaryAdjust_AdjustMonths' => 1,
			'NecessaryAdjust_ModificationRatio' => 1,
			'NecessaryAdjust_MonthlyAdjust' => 1,
			'NecessaryAdjust_JunDiligenceAllowAdjust' => 1,
			'NecessaryAdjust_DecDiligenceAllowAdjust' => 1,
			'NecessaryAdjust_MarDiligenceAllowAdjust' => 1,
			'registered_date' => '2013-06-17 23:54:49',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:54:49',
			'updated_by' => 'Lorem ip',
			'delete_flg' => 'Lorem ipsum dolor sit ame',
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
