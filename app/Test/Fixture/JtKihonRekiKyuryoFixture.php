<?php
/**
 * JtKihonRekiKyuryoFixture
 *
 */
class JtKihonRekiKyuryoFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'jt_kihon_reki_kyuryo';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'EmpSalaryHistID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '給料歴ID'),
		'PersonID' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '個人ID'),
		'EmpNo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 8, 'collate' => 'utf8_general_ci', 'comment' => '職員番号', 'charset' => 'utf8'),
		'SalaryTableCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '給料表CD', 'charset' => 'utf8'),
		'SalaryClass' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '級', 'charset' => 'utf8'),
		'SalaryGrade' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 3, 'collate' => 'utf8_general_ci', 'comment' => '号給', 'charset' => 'utf8'),
		'PayRiseCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '昇格昇給CD', 'charset' => 'utf8'),
		'PayRiseDivCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '昇給区分', 'charset' => 'utf8'),
		'PayRiseGrade' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '昇給号数'),
		'PayRiseGradeForPRDiv' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '昇給号数 : 在職期間判定後'),
		'ShortExtMonthsAmo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '短縮延伸月数 : 移行データ用', 'charset' => 'utf8'),
		'Amounts' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => 7, 'comment' => '金額 : 移行データ用'),
		'AddAdjustTypeCD1' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '加算・調整種別CD1', 'charset' => 'utf8'),
		'UsingGrade1' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '使用号数1'),
		'AddAdjustTypeCD2' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '加算・調整種別CD2', 'charset' => 'utf8'),
		'UsingGrade2' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '使用号数2'),
		'AddAdjustTypeCD3' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '加算・調整種別CD3', 'charset' => 'utf8'),
		'UsingGrade3' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '使用号数3'),
		'AddAdjustTypeCD4' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '加算・調整種別CD4', 'charset' => 'utf8'),
		'UsingGrade4' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '使用号数4'),
		'TotalGradeCount' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '総号数'),
		'LimGrade_Age' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '抑制号数　年齢'),
		'LimGrade_Absent' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '抑制号数　欠勤'),
		'LimGrade_Punish' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '抑制号数　処分'),
		'OrderedDate_Salary' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '昇給発令年月日'),
		'SalaryGuaranteeFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '現給保障有無フラグ', 'charset' => 'utf8'),
		'TableOnGuarantTable' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '保障額表 : 表', 'charset' => 'utf8'),
		'ClassOnGuarantTable' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '保障額表 : 級', 'charset' => 'utf8'),
		'GradeOnGuarantTable' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 3, 'collate' => 'utf8_general_ci', 'comment' => '保障額表 : 号給', 'charset' => 'utf8'),
		'EmpBasicInformationID' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '人事基本情報ID : 人事基本情報ID'),
		'AssignmentNo' => array('type' => 'integer', 'null' => false, 'default' => null, 'comment' => '人事履歴情報ID : 人事履歴情報ID'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'latest_flg' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '最新・仮登録フラグ : 最新・仮登録フラグ'),
		'last_key' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '最後キー : 最後キー'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'EmpSalaryHistID', 'unique' => 1)
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
			'EmpSalaryHistID' => 1,
			'PersonID' => 1,
			'EmpNo' => 'Lorem ',
			'SalaryTableCD' => '',
			'SalaryClass' => '',
			'SalaryGrade' => 'L',
			'PayRiseCD' => '',
			'PayRiseDivCD' => 'Lorem ipsum dolor sit ame',
			'PayRiseGrade' => 1,
			'PayRiseGradeForPRDiv' => 1,
			'ShortExtMonthsAmo' => '',
			'Amounts' => 1,
			'AddAdjustTypeCD1' => '',
			'UsingGrade1' => 1,
			'AddAdjustTypeCD2' => '',
			'UsingGrade2' => 1,
			'AddAdjustTypeCD3' => '',
			'UsingGrade3' => 1,
			'AddAdjustTypeCD4' => '',
			'UsingGrade4' => 1,
			'TotalGradeCount' => 1,
			'LimGrade_Age' => 1,
			'LimGrade_Absent' => 1,
			'LimGrade_Punish' => 1,
			'OrderedDate_Salary' => '2013-06-17',
			'SalaryGuaranteeFlg' => 'Lorem ipsum dolor sit ame',
			'TableOnGuarantTable' => '',
			'ClassOnGuarantTable' => '',
			'GradeOnGuarantTable' => 'L',
			'EmpBasicInformationID' => 1,
			'AssignmentNo' => 1,
			'registered_date' => '2013-06-17 23:26:52',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:26:52',
			'updated_by' => 'Lorem ip',
			'latest_flg' => 1,
			'last_key' => 1,
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
