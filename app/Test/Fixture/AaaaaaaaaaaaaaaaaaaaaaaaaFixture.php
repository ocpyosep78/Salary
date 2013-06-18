<?php
/**
 * AaaaaaaaaaaaaaaaaaaaaaaaaFixture
 *
 */
class AaaaaaaaaaaaaaaaaaaaaaaaaFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'aaaaaaaaaaaaaaaaaaaaaaaaa';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'EmpBasicInformationID' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '人事基本情報ID'),
		'EmpNo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 8, 'collate' => 'utf8_general_ci', 'comment' => '職員番号', 'charset' => 'utf8'),
		'AssignOrgCD' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '発令機関CD', 'charset' => 'utf8'),
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
			'EmpBasicInformationID' => 1,
			'EmpNo' => 'Lorem ',
			'AssignOrgCD' => ''
		),
	);

}
