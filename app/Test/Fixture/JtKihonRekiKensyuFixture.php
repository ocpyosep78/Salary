<?php
/**
 * JtKihonRekiKensyuFixture
 *
 */
class JtKihonRekiKensyuFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'jt_kihon_reki_kensyu';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'EmpTrainingHistID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '研修受講歴ID'),
		'PersonID' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '個人ID'),
		'EmpNo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 8, 'collate' => 'utf8_general_ci', 'comment' => '職員番号', 'charset' => 'utf8'),
		'FiscalYear' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '年度'),
		'TrainingCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 9, 'collate' => 'utf8_general_ci', 'comment' => '研修CD', 'charset' => 'utf8'),
		'TrainingTypeName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '研修種別名称', 'charset' => 'utf8'),
		'TrainingOrgName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '研修実施機関名称', 'charset' => 'utf8'),
		'TrainingSysName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '研修体系名称', 'charset' => 'utf8'),
		'TrainingName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => '研修名称', 'charset' => 'utf8'),
		'Counts' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '回数'),
		'TrainingStartDate' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '研修期間開始年月日'),
		'TrainingEndDate' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '研修期間終了年月日'),
		'TrainingDays' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '研修日数'),
		'CompDate' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '修了年月日'),
		'DepCD_jyuko' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 8, 'collate' => 'utf8_general_ci', 'comment' => '受講時　所属CD', 'charset' => 'utf8'),
		'JobGrade_Trained' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '受講時　職層CD', 'charset' => 'utf8'),
		'JobDuty_Trained' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '受講時　職種職務CD', 'charset' => 'utf8'),
		'SpecialReportCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'comment' => '備考', 'charset' => 'utf8'),
		'EmpBasicInformationID' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '人事基本情報ID : 人事基本情報ID'),
		'AssignmentNo' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '人事履歴情報ID : 人事履歴情報ID'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'latest_flg' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '最新・仮登録フラグ : 最新・仮登録フラグ'),
		'last_key' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '最後キー : 最後キー'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'EmpTrainingHistID', 'unique' => 1)
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
			'EmpTrainingHistID' => 1,
			'PersonID' => 1,
			'EmpNo' => 'Lorem ',
			'FiscalYear' => 1,
			'TrainingCD' => 'Lorem i',
			'TrainingTypeName' => 'Lorem ip',
			'TrainingOrgName' => 'Lorem ip',
			'TrainingSysName' => 'Lorem ip',
			'TrainingName' => 'Lorem ipsum dolor sit amet',
			'Counts' => 1,
			'TrainingStartDate' => '2013-06-17',
			'TrainingEndDate' => '2013-06-17',
			'TrainingDays' => 1,
			'CompDate' => '2013-06-17',
			'DepCD_jyuko' => 'Lorem ',
			'JobGrade_Trained' => '',
			'JobDuty_Trained' => '',
			'SpecialReportCD' => 'Lorem ipsum dolor sit amet',
			'EmpBasicInformationID' => 1,
			'AssignmentNo' => 1,
			'registered_date' => '2013-06-17 23:26:29',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:26:29',
			'updated_by' => 'Lorem ip',
			'latest_flg' => 1,
			'last_key' => 1,
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
