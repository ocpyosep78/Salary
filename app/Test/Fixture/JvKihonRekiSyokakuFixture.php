<?php
/**
 * JvKihonRekiSyokakuFixture
 *
 */
class JvKihonRekiSyokakuFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'jv_kihon_reki_syokaku';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'EmpNo_RD' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 8, 'collate' => 'utf8_general_ci', 'comment' => '職員番号', 'charset' => 'utf8'),
		'SalaryTableCD_RD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '給料表CD', 'charset' => 'utf8'),
		'SalaryTableNm_RD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '給料表名称', 'charset' => 'utf8'),
		'SalaryCls_RD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '級', 'charset' => 'utf8'),
		'SalaryGrd_RD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 3, 'collate' => 'utf8_general_ci', 'comment' => '号給', 'charset' => 'utf8'),
		'PayRiseCD_RD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '昇格昇給CD', 'charset' => 'utf8'),
		'PayRiseDivCD_RD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '昇給区分', 'charset' => 'utf8'),
		'PayRiseGrade_RD' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '昇給号数'),
		'SalaryGuaranteeFlg_RD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '現給保障有無フラグ', 'charset' => 'utf8'),
		'TableOnGuarantTable_RD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '保障額表 : 表', 'charset' => 'utf8'),
		'GradeOnGuarantTable_RD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 3, 'collate' => 'utf8_general_ci', 'comment' => '保障額表 : 号給', 'charset' => 'utf8'),
		'ClassOnGuarantTable_RD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '保障額表 : 級', 'charset' => 'utf8'),
		'OrderedDate_RiDem' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '昇給発令年月日'),
		'EmpRiseDemoteHistID' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '給料歴ID'),
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
			'EmpNo_RD' => 'Lorem ',
			'SalaryTableCD_RD' => '',
			'SalaryTableNm_RD' => 'Lorem ipsum dolor ',
			'SalaryCls_RD' => '',
			'SalaryGrd_RD' => 'L',
			'PayRiseCD_RD' => '',
			'PayRiseDivCD_RD' => 'Lorem ipsum dolor sit ame',
			'PayRiseGrade_RD' => 1,
			'SalaryGuaranteeFlg_RD' => 'Lorem ipsum dolor sit ame',
			'TableOnGuarantTable_RD' => '',
			'GradeOnGuarantTable_RD' => 'L',
			'ClassOnGuarantTable_RD' => '',
			'OrderedDate_RiDem' => '2013-06-17',
			'EmpRiseDemoteHistID' => 1
		),
	);

}
