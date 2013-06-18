<?php
/**
 * JvShokyuYoteiFixture
 *
 */
class JvShokyuYoteiFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'jv_shokyu_yotei';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'jt_kihon_kihonID' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '人事基本情報ID'),
		'PersonID' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '個人ID'),
		'EmpNo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 8, 'collate' => 'utf8_general_ci', 'comment' => '職員番号', 'charset' => 'utf8'),
		'EmpDiv' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '職員区分', 'charset' => 'utf8'),
		'JobGradeCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '職層CD', 'charset' => 'utf8'),
		'SalaryTableCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '給料表CD', 'charset' => 'utf8'),
		'SalaryClass' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '級', 'charset' => 'utf8'),
		'SalaryGrade' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 3, 'collate' => 'utf8_general_ci', 'comment' => '号給', 'charset' => 'utf8'),
		'DepCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 8, 'collate' => 'utf8_general_ci', 'comment' => '所属CD', 'charset' => 'utf8'),
		'AgeOfEndYear' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 6),
		'BirthDate' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '生年月日'),
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
			'jt_kihon_kihonID' => 1,
			'PersonID' => 1,
			'EmpNo' => 'Lorem ',
			'EmpDiv' => '',
			'JobGradeCD' => '',
			'SalaryTableCD' => '',
			'SalaryClass' => '',
			'SalaryGrade' => 'L',
			'DepCD' => 'Lorem ',
			'AgeOfEndYear' => 1,
			'BirthDate' => '2013-06-17'
		),
	);

}
