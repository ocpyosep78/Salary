<?php
/**
 * JvKihonRekiKyuryoFixture
 *
 */
class JvKihonRekiKyuryoFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'jv_kihon_reki_kyuryo';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'SalaryTableCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '給料表CD', 'charset' => 'utf8'),
		'SalaryTableName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '給料表名称', 'charset' => 'utf8'),
		'SalaryClass' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '級', 'charset' => 'utf8'),
		'SalaryGrade' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 3, 'collate' => 'utf8_general_ci', 'comment' => '号給', 'charset' => 'utf8'),
		'PayRiseCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '昇格昇給CD', 'charset' => 'utf8'),
		'PayRiseDivCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '昇給区分', 'charset' => 'utf8'),
		'PayRiseGrade' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '昇給号数'),
		'PayRiseGradeForPRDiv' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '昇給号数 : 在職期間判定後'),
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
		'SalaryGuaranteeFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '現給保障有無フラグ', 'charset' => 'utf8'),
		'TableOnGuarantTable' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '保障額表 : 表', 'charset' => 'utf8'),
		'GradeOnGuarantTable' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 3, 'collate' => 'utf8_general_ci', 'comment' => '保障額表 : 号給', 'charset' => 'utf8'),
		'ClassOnGuarantTable' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '保障額表 : 級', 'charset' => 'utf8'),
		'OrderedDate_Salary' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '昇給発令年月日'),
		'EmpSalaryHistID' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '給料歴ID'),
		'indexes' => array(
			
		),
		'tableParameters' => array()
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'SalaryTableCD' => '',
			'SalaryTableName' => 'Lorem ipsum dolor ',
			'SalaryClass' => '',
			'SalaryGrade' => 'L',
			'PayRiseCD' => '',
			'PayRiseDivCD' => 'Lorem ipsum dolor sit ame',
			'PayRiseGrade' => 1,
			'PayRiseGradeForPRDiv' => 1,
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
			'SalaryGuaranteeFlg' => 'Lorem ipsum dolor sit ame',
			'TableOnGuarantTable' => '',
			'GradeOnGuarantTable' => 'L',
			'ClassOnGuarantTable' => '',
			'OrderedDate_Salary' => '2013-06-17',
			'EmpSalaryHistID' => 1
		),
	);

}
