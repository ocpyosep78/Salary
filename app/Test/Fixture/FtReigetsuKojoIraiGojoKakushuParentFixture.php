<?php
/**
 * FtReigetsuKojoIraiGojoKakushuParentFixture
 *
 */
class FtReigetsuKojoIraiGojoKakushuParentFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'ft_reigetsu_kojo_irai_gojo_kakushu_parent';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'GojoKojoHeaderID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '例月控除依頼データ 互助組合　各種（親）ID'),
		'GojoKojoFileType' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '例月控除依頼データ 互助組合区分', 'charset' => 'utf8'),
		'FileID' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => 'ファイルID'),
		'Header_FileID' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '（ヘッダ）ファイル区分', 'charset' => 'utf8'),
		'Header_RecordDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '（ヘッダ）レコード区分', 'charset' => 'utf8'),
		'Header_MovementYM' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 6, 'collate' => 'utf8_general_ci', 'comment' => '（ヘッダ）異動年月', 'charset' => 'utf8'),
		'Header_CreatedDate' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 8, 'collate' => 'utf8_general_ci', 'comment' => '（ヘッダ）作成年月日', 'charset' => 'utf8'),
		'End_FileDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '（エンド）ファイル区分', 'charset' => 'utf8'),
		'End_RecordDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '（エンド）レコード区分', 'charset' => 'utf8'),
		'End_DateCnt' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 7, 'collate' => 'utf8_general_ci', 'comment' => '（エンド）データ件数', 'charset' => 'utf8'),
		'ProcStatus' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '処理ステータス', 'charset' => 'utf8'),
		'registered_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'latest_data_flg' => array('type' => 'integer', 'null' => true, 'default' => '0', 'comment' => '最新・仮登録フラグ : 最新・仮登録フラグ'),
		'last_key' => array('type' => 'integer', 'null' => true, 'default' => '0', 'comment' => '最後キー : 最後キー'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'GojoKojoHeaderID', 'unique' => 1)
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
			'GojoKojoHeaderID' => 1,
			'GojoKojoFileType' => '',
			'FileID' => 1,
			'Header_FileID' => 'Lorem ipsum dolor sit ame',
			'Header_RecordDiv' => 'Lorem ipsum dolor sit ame',
			'Header_MovementYM' => 'Lore',
			'Header_CreatedDate' => 'Lorem ',
			'End_FileDiv' => 'Lorem ipsum dolor sit ame',
			'End_RecordDiv' => 'Lorem ipsum dolor sit ame',
			'End_DateCnt' => 'Lorem',
			'ProcStatus' => 'Lorem ipsum dolor sit ame',
			'registered_date' => '2013-06-17 23:19:21',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:19:21',
			'updated_by' => 'Lorem ip',
			'latest_data_flg' => 1,
			'last_key' => 1,
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
