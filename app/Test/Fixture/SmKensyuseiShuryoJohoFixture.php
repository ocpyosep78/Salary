<?php
/**
 * SmKensyuseiShuryoJohoFixture
 *
 */
class SmKensyuseiShuryoJohoFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'sm_kensyusei_shuryo_joho';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'FiscalYear' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 4, 'key' => 'primary', 'comment' => '研修年度'),
		'TrainingCD' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 9, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '研修CD', 'charset' => 'utf8'),
		'TraineeCD' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '研修生CD'),
		'TrainingDate' => array('type' => 'date', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '受講年月日'),
		'CourseId' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 4, 'key' => 'primary', 'comment' => '科目ID'),
		'AttendanceStatusCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '出席状況CD', 'charset' => 'utf8'),
		'TardyEarlyTime' => array('type' => 'time', 'null' => true, 'default' => null, 'comment' => '遅刻早退時刻'),
		'Remarks' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => '備考', 'charset' => 'utf8'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'delete_flg' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '削除フラグ', 'charset' => 'utf8'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('FiscalYear', 'TrainingCD', 'TraineeCD', 'TrainingDate', 'CourseId'), 'unique' => 1)
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
			'TraineeCD' => 1,
			'TrainingDate' => '2013-06-18',
			'CourseId' => 1,
			'AttendanceStatusCD' => '',
			'TardyEarlyTime' => '00:02:21',
			'Remarks' => 'Lorem ipsum dolor sit amet',
			'registered_date' => '2013-06-18 00:02:21',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-18 00:02:21',
			'updated_by' => 'Lorem ip',
			'delete_flg' => 'Lorem ipsum dolor sit ame',
			'effective_date' => '2013-06-18',
			'expired_date' => '2013-06-18'
		),
	);

}
