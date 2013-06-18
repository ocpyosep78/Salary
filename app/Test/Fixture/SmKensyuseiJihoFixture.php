<?php
/**
 * SmKensyuseiJihoFixture
 *
 */
class SmKensyuseiJihoFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'sm_kensyusei_jiho';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'FiscalYear' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 4, 'key' => 'primary', 'comment' => '研修年度'),
		'TrainingCD' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 9, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '研修CD', 'charset' => 'utf8'),
		'TraineeCD' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '研修生CD'),
		'TrainingGroup' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '研修グループ', 'charset' => 'utf8'),
		'TrainingCounts' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 2, 'comment' => '研修回数'),
		'GroupNo' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 2, 'comment' => '班番号'),
		'ExceptEmpFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '職員外フラグ', 'charset' => 'utf8'),
		'EmpNo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 8, 'collate' => 'utf8_general_ci', 'comment' => '職員番号 ', 'charset' => 'utf8'),
		'TraineeRemarks' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '受講生備考', 'charset' => 'utf8'),
		'NameKanji' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => '漢字氏名', 'charset' => 'utf8'),
		'NameKana' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => 'カナ氏名', 'charset' => 'utf8'),
		'DepCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 8, 'collate' => 'utf8_general_ci', 'comment' => '所属CD', 'charset' => 'utf8'),
		'MgrCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '役職CD', 'charset' => 'utf8'),
		'JobGradeCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '職層CD', 'charset' => 'utf8'),
		'JobDutyCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 3, 'collate' => 'utf8_general_ci', 'comment' => '職種職務CD', 'charset' => 'utf8'),
		'SubjectDev' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '対象者区分', 'charset' => 'utf8'),
		'RefusalFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '辞退フラグ', 'charset' => 'utf8'),
		'AcceptanceStatusCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '受入状況CD', 'charset' => 'utf8'),
		'CompletionJudgeDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '修了判定区分', 'charset' => 'utf8'),
		'RedisterdTrainigStudentsHistFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '受講歴登録済フラグ', 'charset' => 'utf8'),
		'DemotionHistFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '降任歴有無フラグ', 'charset' => 'utf8'),
		'YearsOfExperience' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 2, 'comment' => '経験年数'),
		'Priority' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 2, 'comment' => '優先順位'),
		'Notice' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'utf8_general_ci', 'comment' => '特記事項', 'charset' => 'utf8'),
		'Remarks' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'comment' => '備考', 'charset' => 'utf8'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'delete_flg' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '削除フラグ', 'charset' => 'utf8'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('FiscalYear', 'TrainingCD', 'TraineeCD'), 'unique' => 1)
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
			'TrainingGroup' => '',
			'TrainingCounts' => 1,
			'GroupNo' => 1,
			'ExceptEmpFlg' => 'Lorem ipsum dolor sit ame',
			'EmpNo' => 'Lorem ',
			'TraineeRemarks' => 'Lorem ipsum dolor ',
			'NameKanji' => 'Lorem ipsum dolor sit amet',
			'NameKana' => 'Lorem ipsum dolor sit amet',
			'DepCD' => 'Lorem ',
			'MgrCD' => '',
			'JobGradeCD' => '',
			'JobDutyCD' => 'L',
			'SubjectDev' => 'Lorem ipsum dolor sit ame',
			'RefusalFlg' => 'Lorem ipsum dolor sit ame',
			'AcceptanceStatusCD' => 'Lorem ipsum dolor sit ame',
			'CompletionJudgeDiv' => 'Lorem ipsum dolor sit ame',
			'RedisterdTrainigStudentsHistFlg' => 'Lorem ipsum dolor sit ame',
			'DemotionHistFlg' => 'Lorem ipsum dolor sit ame',
			'YearsOfExperience' => 1,
			'Priority' => 1,
			'Notice' => 'Lorem ipsum dolor sit amet',
			'Remarks' => 'Lorem ipsum dolor sit amet',
			'registered_date' => '2013-06-18 00:02:13',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-18 00:02:13',
			'updated_by' => 'Lorem ip',
			'delete_flg' => 'Lorem ipsum dolor sit ame',
			'effective_date' => '2013-06-18',
			'expired_date' => '2013-06-18'
		),
	);

}
