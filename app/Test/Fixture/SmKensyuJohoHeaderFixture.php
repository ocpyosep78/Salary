<?php
/**
 * SmKensyuJohoHeaderFixture
 *
 */
class SmKensyuJohoHeaderFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'sm_kensyu_joho_header';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'FiscalYear' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 4, 'key' => 'primary', 'comment' => '年度'),
		'TrainingCD' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 9, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '研修CD', 'charset' => 'utf8'),
		'OtherTrainingOrgName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => 'その他実施機関名', 'charset' => 'utf8'),
		'NumberOfTraining' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 2, 'comment' => '実施回数'),
		'NumberOfTrainees' => array('type' => 'integer', 'null' => true, 'default' => '0', 'length' => 4, 'comment' => '人数'),
		'PurposeOfTraining' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 500, 'collate' => 'utf8_general_ci', 'comment' => '目的', 'charset' => 'utf8'),
		'TargetStaffTraining' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'comment' => '研修対象職員', 'charset' => 'utf8'),
		'Remarks' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'comment' => '備考', 'charset' => 'utf8'),
		'OutsourcingFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '外部委託有無フラグ', 'charset' => 'utf8'),
		'PersonInChargeOfTraining1' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 8, 'collate' => 'utf8_general_ci', 'comment' => '担当者1職員番号', 'charset' => 'utf8'),
		'PersonInChargeOfTraining2' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 8, 'collate' => 'utf8_general_ci', 'comment' => '担当者2職員番号', 'charset' => 'utf8'),
		'RegisterdTrainingOverviewFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '概要登録済フラグ', 'charset' => 'utf8'),
		'RegisterdTimetableSubjectFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '科目時間割登録済フラグ', 'charset' => 'utf8'),
		'CreatedCommissionedShapeFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '委嘱状作成済フラグ', 'charset' => 'utf8'),
		'RegisteredNecessaryGoodsFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '必要物品登録済フラグ', 'charset' => 'utf8'),
		'CreatedContractDocFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '契約書類作成済フラグ', 'charset' => 'utf8'),
		'RegistredSubjentTriningFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '対象者登録済フラグ', 'charset' => 'utf8'),
		'RegisterdImpementationResultsFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '実施結果登録済フラグ', 'charset' => 'utf8'),
		'RegisteredQuestionnaireFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => 'アンケート登録済フラグ', 'charset' => 'utf8'),
		'RedisterdTrainigStudentsHistFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '受講歴登録済フラグ', 'charset' => 'utf8'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'delete_flg' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '削除フラグ', 'charset' => 'utf8'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('FiscalYear', 'TrainingCD'), 'unique' => 1)
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
			'OtherTrainingOrgName' => 'Lorem ipsum dolor sit amet',
			'NumberOfTraining' => 1,
			'NumberOfTrainees' => 1,
			'PurposeOfTraining' => 'Lorem ipsum dolor sit amet',
			'TargetStaffTraining' => 'Lorem ipsum dolor sit amet',
			'Remarks' => 'Lorem ipsum dolor sit amet',
			'OutsourcingFlg' => 'Lorem ipsum dolor sit ame',
			'PersonInChargeOfTraining1' => 'Lorem ',
			'PersonInChargeOfTraining2' => 'Lorem ',
			'RegisterdTrainingOverviewFlg' => 'Lorem ipsum dolor sit ame',
			'RegisterdTimetableSubjectFlg' => 'Lorem ipsum dolor sit ame',
			'CreatedCommissionedShapeFlg' => 'Lorem ipsum dolor sit ame',
			'RegisteredNecessaryGoodsFlg' => 'Lorem ipsum dolor sit ame',
			'CreatedContractDocFlg' => 'Lorem ipsum dolor sit ame',
			'RegistredSubjentTriningFlg' => 'Lorem ipsum dolor sit ame',
			'RegisterdImpementationResultsFlg' => 'Lorem ipsum dolor sit ame',
			'RegisteredQuestionnaireFlg' => 'Lorem ipsum dolor sit ame',
			'RedisterdTrainigStudentsHistFlg' => 'Lorem ipsum dolor sit ame',
			'registered_date' => '2013-06-18 00:00:54',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-18 00:00:54',
			'updated_by' => 'Lorem ip',
			'delete_flg' => 'Lorem ipsum dolor sit ame',
			'effective_date' => '2013-06-18',
			'expired_date' => '2013-06-18'
		),
	);

}
