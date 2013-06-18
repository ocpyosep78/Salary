<?php
/**
 * SmJoseikenFixture
 *
 */
class SmJoseikenFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'sm_joseiken';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'FiscalYear' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 4, 'key' => 'primary', 'comment' => '申請年度'),
		'Counts' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 2, 'key' => 'primary', 'comment' => '募集回数'),
		'EmpNo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 8, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '職員番号', 'charset' => 'utf8'),
		'SeqNo' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '連番'),
		'RequestNo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 7, 'collate' => 'utf8_general_ci', 'comment' => '申請番号', 'charset' => 'utf8'),
		'RequestYMD' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '申請年月日'),
		'LectureName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => '講座名', 'charset' => 'utf8'),
		'LectureContents' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 150, 'collate' => 'utf8_general_ci', 'comment' => '講座内容', 'charset' => 'utf8'),
		'TrainingOrgCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '実施機関CD', 'charset' => 'utf8'),
		'DesignatedFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '指定フラグ', 'charset' => 'utf8'),
		'CorrespondenceCourseFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '通信教育フラグ', 'charset' => 'utf8'),
		'GrantFieldCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 3, 'collate' => 'utf8_general_ci', 'comment' => '助成金分野CD', 'charset' => 'utf8'),
		'Tuition' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 9, 'comment' => '受講料'),
		'TrainingStartdate' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日'),
		'TrainingEnddate' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日'),
		'ScheduledCompDate' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '修了予定年月日'),
		'ApplicationpresenceFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '助成なしの場合の申込有無フラグ', 'charset' => 'utf8'),
		'ExaminationPassFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '審査合格フラグ', 'charset' => 'utf8'),
		'ExaminationScore1' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 2, 'comment' => '審査１点数'),
		'ExaminationScore2' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 2, 'comment' => '審査２点数'),
		'ExaminationScore3' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 2, 'comment' => '審査３点数'),
		'ExaminationImpression' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 300, 'collate' => 'utf8_general_ci', 'comment' => '審査所感', 'charset' => 'utf8'),
		'ResultNoticeDate' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '審査結果通知年月日'),
		'GrantFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '助成可否フラグ', 'charset' => 'utf8'),
		'AdditionalDecisionFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '追加決定フラグ', 'charset' => 'utf8'),
		'RefusalFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '辞退フラグ', 'charset' => 'utf8'),
		'RefusalProposalDate' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '辞退申出年月日'),
		'GrantAmount' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 7, 'comment' => '助成額'),
		'DecisionNoticeDate' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '決定通知年月日'),
		'LectureApplicationDate' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '講座申込年月日'),
		'CompletionDate' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '修了年月日'),
		'RequestDate' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '請求年月日'),
		'GrantDecisionDate' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '交付決定年月日'),
		'PaidDate' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '支払年月日'),
		'NoticeMakingDate' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '通知書作成年月日'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'delete_flg' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '削除フラグ', 'charset' => 'utf8'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('FiscalYear', 'Counts', 'EmpNo', 'SeqNo'), 'unique' => 1)
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
			'Counts' => 1,
			'EmpNo' => 'Lorem ',
			'SeqNo' => 1,
			'RequestNo' => 'Lorem',
			'RequestYMD' => '2013-06-17',
			'LectureName' => 'Lorem ipsum dolor sit amet',
			'LectureContents' => 'Lorem ipsum dolor sit amet',
			'TrainingOrgCD' => '',
			'DesignatedFlg' => 'Lorem ipsum dolor sit ame',
			'CorrespondenceCourseFlg' => 'Lorem ipsum dolor sit ame',
			'GrantFieldCD' => 'L',
			'Tuition' => 1,
			'TrainingStartdate' => '2013-06-17',
			'TrainingEnddate' => '2013-06-17',
			'ScheduledCompDate' => '2013-06-17',
			'ApplicationpresenceFlg' => 'Lorem ipsum dolor sit ame',
			'ExaminationPassFlg' => 'Lorem ipsum dolor sit ame',
			'ExaminationScore1' => 1,
			'ExaminationScore2' => 1,
			'ExaminationScore3' => 1,
			'ExaminationImpression' => 'Lorem ipsum dolor sit amet',
			'ResultNoticeDate' => '2013-06-17',
			'GrantFlg' => 'Lorem ipsum dolor sit ame',
			'AdditionalDecisionFlg' => 'Lorem ipsum dolor sit ame',
			'RefusalFlg' => 'Lorem ipsum dolor sit ame',
			'RefusalProposalDate' => '2013-06-17',
			'GrantAmount' => 1,
			'DecisionNoticeDate' => '2013-06-17',
			'LectureApplicationDate' => '2013-06-17',
			'CompletionDate' => '2013-06-17',
			'RequestDate' => '2013-06-17',
			'GrantDecisionDate' => '2013-06-17',
			'PaidDate' => '2013-06-17',
			'NoticeMakingDate' => '2013-06-17',
			'registered_date' => '2013-06-17 23:59:43',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:59:43',
			'updated_by' => 'Lorem ip',
			'delete_flg' => 'Lorem ipsum dolor sit ame',
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
