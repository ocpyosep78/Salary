<?php
/**
 * FtReigetsuKojoIraiZaikeichochikuParentFixture
 *
 */
class FtReigetsuKojoIraiZaikeichochikuParentFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'ft_reigetsu_kojo_irai_zaikeichochiku_parent';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'ZaikeiKojiHeaderID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '例月控除依頼データ 財形貯蓄（親）ID'),
		'FileID' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => 'ファイルID'),
		'Header_RecordDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '（ヘッダ）レコード区分', 'charset' => 'utf8'),
		'Header_EmployerNo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 4, 'collate' => 'utf8_general_ci', 'comment' => '（ヘッダ）事業主番号', 'charset' => 'utf8'),
		'Header_CreatedYear' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 4, 'collate' => 'utf8_general_ci', 'comment' => '（ヘッダ）作成日付（年）', 'charset' => 'utf8'),
		'Header_CreatedMonth' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '（ヘッダ）作成日付（月）', 'charset' => 'utf8'),
		'Header_CreatedDay' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '（ヘッダ）作成日付（日）', 'charset' => 'utf8'),
		'Header_DeductYear' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 4, 'collate' => 'utf8_general_ci', 'comment' => '（ヘッダ）控除年月（年）', 'charset' => 'utf8'),
		'Header_DeductMonth' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 4, 'collate' => 'utf8_general_ci', 'comment' => '（ヘッダ）控除年月（月）', 'charset' => 'utf8'),
		'Header_SavingType' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 4, 'collate' => 'utf8_general_ci', 'comment' => '（ヘッダ）積立区分', 'charset' => 'utf8'),
		'Trailer_RecordDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '（トレーラー）レコード区分', 'charset' => 'utf8'),
		'Trailer_DataCnt' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '（トレーラー）データ件数', 'charset' => 'utf8'),
		'Trailer_DeductSchAmoTotal' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 12, 'collate' => 'utf8_general_ci', 'comment' => '（トレーラー）控除予定金額合計', 'charset' => 'utf8'),
		'Trailer_SalaryTotal' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 12, 'collate' => 'utf8_general_ci', 'comment' => '（トレーラー）財形（一般）給与合計', 'charset' => 'utf8'),
		'Trailer_EndDiligentAllowTotal' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 12, 'collate' => 'utf8_general_ci', 'comment' => '（トレーラー）財形（一般）期末勤勉手当合計', 'charset' => 'utf8'),
		'Trailer_nenk_jyutakAllowTotal' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 12, 'collate' => 'utf8_general_ci', 'comment' => '（トレーラー）財形（年金＋住宅）給与合計', 'charset' => 'utf8'),
		'Trailer_nenk_jyutakDiligenceAllowTotal' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 12, 'collate' => 'utf8_general_ci', 'comment' => '（トレーラー）財形（年金＋住宅）期末勤勉手当合計', 'charset' => 'utf8'),
		'ProcStatus' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '処理ステータス', 'charset' => 'utf8'),
		'registered_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'latest_flg' => array('type' => 'integer', 'null' => true, 'default' => '0', 'comment' => '最新・仮登録フラグ : 最新・仮登録フラグ'),
		'last_key' => array('type' => 'integer', 'null' => true, 'default' => '0', 'comment' => '最後キー : 最後キー'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'ZaikeiKojiHeaderID', 'unique' => 1)
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
			'ZaikeiKojiHeaderID' => 1,
			'FileID' => 1,
			'Header_RecordDiv' => 'Lorem ipsum dolor sit ame',
			'Header_EmployerNo' => 'Lo',
			'Header_CreatedYear' => 'Lo',
			'Header_CreatedMonth' => '',
			'Header_CreatedDay' => '',
			'Header_DeductYear' => 'Lo',
			'Header_DeductMonth' => 'Lo',
			'Header_SavingType' => 'Lo',
			'Trailer_RecordDiv' => 'Lorem ipsum dolor sit ame',
			'Trailer_DataCnt' => 'Lorem ipsum dolor sit ame',
			'Trailer_DeductSchAmoTotal' => 'Lorem ipsu',
			'Trailer_SalaryTotal' => 'Lorem ipsu',
			'Trailer_EndDiligentAllowTotal' => 'Lorem ipsu',
			'Trailer_nenk_jyutakAllowTotal' => 'Lorem ipsu',
			'Trailer_nenk_jyutakDiligenceAllowTotal' => 'Lorem ipsu',
			'ProcStatus' => 'Lorem ipsum dolor sit ame',
			'registered_date' => '2013-06-17 23:20:40',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:20:40',
			'updated_by' => 'Lorem ip',
			'latest_flg' => 1,
			'last_key' => 1,
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
