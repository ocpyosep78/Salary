<?php
/**
 * Grade2ExamCanDatumFixture
 *
 */
class Grade2ExamCanDatumFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'Grade2ExamCanData';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'Grade2ExamCanDataID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '2級職選考対象者データID : 2級職選考対象者データID'),
		'FiscalYear' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '年度 : 年度'),
		'Number' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '連番 : 連番'),
		'ExamTypeCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '試験選考種別CD : 試験選考種別CD', 'charset' => 'utf8'),
		'ExamDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '選考区分 : 選考区分', 'charset' => 'utf8'),
		'FamilyName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '氏名_氏 : 氏名_氏(旧姓使用中フラグがON⇒通称名_氏)', 'charset' => 'utf8'),
		'FirstName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '氏名_名 : 氏名_名(旧姓使用中フラグがON⇒通称名_名)', 'charset' => 'utf8'),
		'FamilyNameKana' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '氏名_氏カナ : 氏名_氏カナ(旧姓使用中フラグがON⇒通称名カナ_氏)', 'charset' => 'utf8'),
		'FirstNameKana' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '氏名_名カナ : 氏名_名カナ(旧姓使用中フラグがON⇒通称名カナ_名)', 'charset' => 'utf8'),
		'RegisteredName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 40, 'collate' => 'utf8_general_ci', 'comment' => '戸籍氏名 : 戸籍氏名', 'charset' => 'utf8'),
		'RegisteredNameKana' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 40, 'collate' => 'utf8_general_ci', 'comment' => '戸籍氏名カナ : 戸籍氏名カナ', 'charset' => 'utf8'),
		'EmpNo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 8, 'collate' => 'utf8_general_ci', 'comment' => '職員番号 : 職員番号', 'charset' => 'utf8'),
		'DepCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 8, 'collate' => 'utf8_general_ci', 'comment' => '所属CD : 所属CD', 'charset' => 'utf8'),
		'DeptShortName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 4, 'collate' => 'utf8_general_ci', 'comment' => '所属名短縮 : 所属名短縮', 'charset' => 'utf8'),
		'BirthDate' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '生年月日 : 生年月日'),
		'Age' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '年齢 : 年齢', 'charset' => 'utf8'),
		'SexCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '性別CD : 性別CD', 'charset' => 'utf8'),
		'DivCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 6, 'collate' => 'utf8_general_ci', 'comment' => '部CD : 部CD', 'charset' => 'utf8'),
		'DivName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'utf8_general_ci', 'comment' => '部名 : 部名', 'charset' => 'utf8'),
		'JobGradeCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '職層CD : 職層CD', 'charset' => 'utf8'),
		'JobGradeShortName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '職層省略名称 : 職層省略名称', 'charset' => 'utf8'),
		'JobDutyCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 3, 'collate' => 'utf8_general_ci', 'comment' => '職務CD : 職務CD', 'charset' => 'utf8'),
		'JobDutyShortName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '職務略称 : 職務名称', 'charset' => 'utf8'),
		'RecruitedDate' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '採用年月日 : 採用年月日'),
		'RecruitDivCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '採用区分CD : 採用区分CD', 'charset' => 'utf8'),
		'WkStartDateAtWard' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '区勤務年月日 : 区勤務年月日'),
		'ServiceYears' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '在職年数 : 在職年数'),
		'PrevjobFLG' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '前歴フラグ : 前歴フラグ', 'charset' => 'utf8'),
		'NewQualiFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '新規対象者フラグ : 新規対象者フラグ', 'charset' => 'utf8'),
		'PreJobJudgedFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '前歴未判定フラグ : 前歴未判定フラグ', 'charset' => 'utf8'),
		'QualificationFLG' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '有資格者フラグ : 有資格者フラグ', 'charset' => 'utf8'),
		'OrderedDate_JobGrade' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '職層発令年月日 : 職層発令年月日'),
		'IntrocrsDoneFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '新任研修履修フラグ : 新任研修履修フラグ', 'charset' => 'utf8'),
		'TTExempFLG' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '勤怠対象外フラグ : 勤怠対象外フラグ', 'charset' => 'utf8'),
		'PunishHist' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '懲戒処分歴 : 懲戒処分歴', 'charset' => 'utf8'),
		'AbsentDays' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '欠勤日数 : 欠勤日数'),
		'EvalResult1' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '評定審査結果1 : 評定審査結果1', 'charset' => 'utf8'),
		'EvalResult2' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '評定審査結果2 : 評定審査結果2', 'charset' => 'utf8'),
		'FinalResult' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '最終審査結果 : 最終審査結果', 'charset' => 'utf8'),
		'Remarks' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => '備考 : 備考', 'charset' => 'utf8'),
		'RegDate' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'RegisteredBy' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'RegPgID' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録プログラムID : 登録プログラムID', 'charset' => 'utf8'),
		'UpdateDate' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'UpdateBy' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'UpdatePgmID' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新プログラムID : 更新プログラムID', 'charset' => 'utf8'),
		'DeleteFlg' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => '削除フラグ : 削除フラグ'),
		'VersionNo' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => 'バージョンNo : バージョンNo'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'Grade2ExamCanDataID', 'unique' => 1)
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
			'Grade2ExamCanDataID' => 1,
			'FiscalYear' => 1,
			'Number' => 1,
			'ExamTypeCD' => '',
			'ExamDiv' => '',
			'FamilyName' => 'Lorem ipsum dolor ',
			'FirstName' => 'Lorem ipsum dolor ',
			'FamilyNameKana' => 'Lorem ipsum dolor ',
			'FirstNameKana' => 'Lorem ipsum dolor ',
			'RegisteredName' => 'Lorem ipsum dolor sit amet',
			'RegisteredNameKana' => 'Lorem ipsum dolor sit amet',
			'EmpNo' => 'Lorem ',
			'DepCD' => 'Lorem ',
			'DeptShortName' => 'Lo',
			'BirthDate' => '2013-06-17',
			'Age' => '',
			'SexCD' => 'Lorem ipsum dolor sit ame',
			'DivCD' => 'Lore',
			'DivName' => 'Lorem ipsum dolor sit amet',
			'JobGradeCD' => '',
			'JobGradeShortName' => 'Lorem ip',
			'JobDutyCD' => 'L',
			'JobDutyShortName' => 'Lorem ipsum dolor ',
			'RecruitedDate' => '2013-06-17',
			'RecruitDivCD' => '',
			'WkStartDateAtWard' => '2013-06-17',
			'ServiceYears' => 1,
			'PrevjobFLG' => 'Lorem ipsum dolor sit ame',
			'NewQualiFlg' => 'Lorem ipsum dolor sit ame',
			'PreJobJudgedFlg' => 'Lorem ipsum dolor sit ame',
			'QualificationFLG' => 'Lorem ipsum dolor sit ame',
			'OrderedDate_JobGrade' => '2013-06-17',
			'IntrocrsDoneFlg' => 'Lorem ipsum dolor sit ame',
			'TTExempFLG' => 'Lorem ipsum dolor sit ame',
			'PunishHist' => 'Lorem ipsum dolor sit ame',
			'AbsentDays' => 1,
			'EvalResult1' => 'Lorem ipsum dolor sit ame',
			'EvalResult2' => 'Lorem ipsum dolor sit ame',
			'FinalResult' => 'Lorem ipsum dolor sit ame',
			'Remarks' => 'Lorem ipsum dolor sit amet',
			'RegDate' => '2013-06-17 23:05:22',
			'RegisteredBy' => 'Lorem ip',
			'RegPgID' => 'Lorem ip',
			'UpdateDate' => '2013-06-17 23:05:22',
			'UpdateBy' => 'Lorem ip',
			'UpdatePgmID' => 'Lorem ip',
			'DeleteFlg' => 1,
			'VersionNo' => 1
		),
	);

}
