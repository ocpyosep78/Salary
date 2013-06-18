<?php
/**
 * SmAnketoKekkaMeisaiFixture
 *
 */
class SmAnketoKekkaMeisaiFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'sm_anketo_kekka_meisai';

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
		'SeqNo' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '連番'),
		'TimeEvaluation' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 2, 'comment' => '時間評価点数'),
		'InterestingImportanceEvaluation' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 2, 'comment' => '興味重要性評価点数'),
		'UnderstandingEvaluation' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 2, 'comment' => '理解度評価点数'),
		'UsabilityEvaluation' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 2, 'comment' => '活用性評価点数'),
		'DocumentsEvaluation' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 2, 'comment' => '資料評価点数'),
		'MaterialsEvaluation' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 2, 'comment' => '講師評価点数'),
		'InstructorEvaluation' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 2, 'comment' => '総合評価点数'),
		'AnyItem1Evaluation' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 2, 'comment' => '任意項目１評価点数'),
		'AnyItem2Evaluation' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 2, 'comment' => '任意項目２評価点数'),
		'AnyItem3Evaluation' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 2, 'comment' => '任意項目３評価点数'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'delete_flg' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '削除フラグ', 'charset' => 'utf8'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('FiscalYear', 'TrainingCD', 'TrainingCounts', 'CourseId', 'SeqNo'), 'unique' => 1)
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
			'SeqNo' => 1,
			'TimeEvaluation' => 1,
			'InterestingImportanceEvaluation' => 1,
			'UnderstandingEvaluation' => 1,
			'UsabilityEvaluation' => 1,
			'DocumentsEvaluation' => 1,
			'MaterialsEvaluation' => 1,
			'InstructorEvaluation' => 1,
			'AnyItem1Evaluation' => 1,
			'AnyItem2Evaluation' => 1,
			'AnyItem3Evaluation' => 1,
			'registered_date' => '2013-06-17 23:59:03',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:59:03',
			'updated_by' => 'Lorem ip',
			'delete_flg' => 'Lorem ipsum dolor sit ame',
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
