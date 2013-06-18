<?php
/**
 * SmKamokuJikanwariTourokuFixture
 *
 */
class SmKamokuJikanwariTourokuFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'sm_kamoku_jikanwari_touroku';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'FiscalYear' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 4, 'key' => 'primary', 'comment' => '研修年度'),
		'TrainingCD' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 9, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '研修CD', 'charset' => 'utf8'),
		'TrainingCounts' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 2, 'key' => 'primary', 'comment' => '研修回数'),
		'CourseId' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 4, 'key' => 'primary', 'comment' => '科目ID'),
		'CourseNumber' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 4, 'comment' => '科目番号'),
		'CourseName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => '科目名', 'charset' => 'utf8'),
		'LectureHallDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '会場区分', 'charset' => 'utf8'),
		'LectureHallCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 9, 'collate' => 'utf8_general_ci', 'comment' => '会場CD', 'charset' => 'utf8'),
		'InstructorDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '講師区分', 'charset' => 'utf8'),
		'EmpNo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 8, 'collate' => 'utf8_general_ci', 'comment' => '職員番号', 'charset' => 'utf8'),
		'PostOfInsideInstructor' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => '内部講師役職名', 'charset' => 'utf8'),
		'ConsignmentCompanyCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 3, 'collate' => 'utf8_general_ci', 'comment' => '委託先会社CD', 'charset' => 'utf8'),
		'OutsideInstructorNameKanji' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => '外部講師名', 'charset' => 'utf8'),
		'PostOfIOutsideInstructor' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => '外部講師役職名', 'charset' => 'utf8'),
		'TrainingDate' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '実施年月日'),
		'StartTime' => array('type' => 'time', 'null' => true, 'default' => null, 'comment' => '開始時刻'),
		'TerminationTime' => array('type' => 'time', 'null' => true, 'default' => null, 'comment' => '終了時刻'),
		'TrainingTimeHour' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 2, 'comment' => '時間数（時）'),
		'TrainingTimeMin' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 2, 'comment' => '時間数（分）'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'delete_flg' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '削除フラグ', 'charset' => 'utf8'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('FiscalYear', 'TrainingCD', 'TrainingCounts', 'CourseId'), 'unique' => 1)
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
			'FiscalYear' => 1,
			'TrainingCD' => 'Lorem i',
			'TrainingCounts' => 1,
			'CourseId' => 1,
			'CourseNumber' => 1,
			'CourseName' => 'Lorem ipsum dolor sit amet',
			'LectureHallDiv' => 'Lorem ipsum dolor sit ame',
			'LectureHallCD' => 'Lorem i',
			'InstructorDiv' => 'Lorem ipsum dolor sit ame',
			'EmpNo' => 'Lorem ',
			'PostOfInsideInstructor' => 'Lorem ipsum dolor sit amet',
			'ConsignmentCompanyCD' => 'L',
			'OutsideInstructorNameKanji' => 'Lorem ipsum dolor sit amet',
			'PostOfIOutsideInstructor' => 'Lorem ipsum dolor sit amet',
			'TrainingDate' => '2013-06-18',
			'StartTime' => '00:00:22',
			'TerminationTime' => '00:00:22',
			'TrainingTimeHour' => 1,
			'TrainingTimeMin' => 1,
			'registered_date' => '2013-06-18 00:00:22',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-18 00:00:22',
			'updated_by' => 'Lorem ip',
			'delete_flg' => 'Lorem ipsum dolor sit ame',
			'effective_date' => '2013-06-18',
			'expired_date' => '2013-06-18'
		),
	);

}
