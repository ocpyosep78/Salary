<?php
/**
 * FtReigetsuKojoIraiKyosaiKashitsukeParentFixture
 *
 */
class FtReigetsuKojoIraiKyosaiKashitsukeParentFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'ft_reigetsu_kojo_irai_kyosai_kashitsuke_parent';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'KyosaiKojoReqHeaderID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '例月控除依頼データ 共済貸付金（親）ID'),
		'FileID' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => 'ファイルID'),
		'Header_DataDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '（ヘッダ）データ区分', 'charset' => 'utf8'),
		'Header_TrancerCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 3, 'collate' => 'utf8_general_ci', 'comment' => '（ヘッダ）交換先CD', 'charset' => 'utf8'),
		'Header_MetroMutualAidCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 3, 'collate' => 'utf8_general_ci', 'comment' => '（ヘッダ）都共済CD', 'charset' => 'utf8'),
		'Header_DeductJPYear' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '（ヘッダ）控除年（和暦年）', 'charset' => 'utf8'),
		'Header_DeductMonth' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '（ヘッダ）控除月', 'charset' => 'utf8'),
		'Header_DeductDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '（ヘッダ）控除区分', 'charset' => 'utf8'),
		'Trailer_DataDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '（トレーラー）データ区分', 'charset' => 'utf8'),
		'Trailer_TrancerCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 3, 'collate' => 'utf8_general_ci', 'comment' => '（トレーラー）交換先CD', 'charset' => 'utf8'),
		'Trailer_MetroMutualAidCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 3, 'collate' => 'utf8_general_ci', 'comment' => '（トレーラー）都共済CD', 'charset' => 'utf8'),
		'Trailer_DeductOrderTotalCnt' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 6, 'collate' => 'utf8_general_ci', 'comment' => '（トレーラー）控除依頼合計件数', 'charset' => 'utf8'),
		'Trailer_DeductOrderTotalAmo' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => 10, 'comment' => '（トレーラー）控除依頼合計金額'),
		'Trailer_DeductedTotalCnt' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 6, 'collate' => 'utf8_general_ci', 'comment' => '（トレーラー）控除済合計件数', 'charset' => 'utf8'),
		'Trailer_DeductedTotalAmo' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => 10, 'comment' => '（トレーラー）控除済合計金額'),
		'Trailer_UnDeductableTotalCnt' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 6, 'collate' => 'utf8_general_ci', 'comment' => '（トレーラー）控除不能合計件数', 'charset' => 'utf8'),
		'Trailer_UnDeductableTotalAmo' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => 10, 'comment' => '（トレーラー）控除不能合計金額'),
		'End_DataDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '（エンド）データ区分', 'charset' => 'utf8'),
		'End_TrancerCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 3, 'collate' => 'utf8_general_ci', 'comment' => '（エンド）交換先CD', 'charset' => 'utf8'),
		'End_MetroMutualAidCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 3, 'collate' => 'utf8_general_ci', 'comment' => '（エンド）都共済CD', 'charset' => 'utf8'),
		'ProcStatus' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '処理ステータス', 'charset' => 'utf8'),
		'registered_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'latest_flg' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '最新・仮登録フラグ : 最新・仮登録フラグ'),
		'last_key' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '最後キー : 最後キー'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'KyosaiKojoReqHeaderID', 'unique' => 1)
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
			'KyosaiKojoReqHeaderID' => 1,
			'FileID' => 1,
			'Header_DataDiv' => 'Lorem ipsum dolor sit ame',
			'Header_TrancerCD' => 'L',
			'Header_MetroMutualAidCD' => 'L',
			'Header_DeductJPYear' => '',
			'Header_DeductMonth' => '',
			'Header_DeductDiv' => '',
			'Trailer_DataDiv' => 'Lorem ipsum dolor sit ame',
			'Trailer_TrancerCD' => 'L',
			'Trailer_MetroMutualAidCD' => 'L',
			'Trailer_DeductOrderTotalCnt' => 'Lore',
			'Trailer_DeductOrderTotalAmo' => 1,
			'Trailer_DeductedTotalCnt' => 'Lore',
			'Trailer_DeductedTotalAmo' => 1,
			'Trailer_UnDeductableTotalCnt' => 'Lore',
			'Trailer_UnDeductableTotalAmo' => 1,
			'End_DataDiv' => 'Lorem ipsum dolor sit ame',
			'End_TrancerCD' => 'L',
			'End_MetroMutualAidCD' => 'L',
			'ProcStatus' => 'Lorem ipsum dolor sit ame',
			'registered_date' => '2013-06-17 23:20:01',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:20:01',
			'updated_by' => 'Lorem ip',
			'latest_flg' => 1,
			'last_key' => 1,
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
