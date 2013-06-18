<?php
/**
 * JtRirekiFixture
 *
 */
class JtRirekiFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'jt_rireki';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'PersonalHistID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '人事履歴データID'),
		'EmpNo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 8, 'collate' => 'utf8_general_ci', 'comment' => '職員番号', 'charset' => 'utf8'),
		'AssignOrderNo' => array('type' => 'integer', 'null' => false, 'default' => null, 'comment' => '発令番号'),
		'SubSeqNo' => array('type' => 'integer', 'null' => false, 'default' => '1', 'comment' => '枝番'),
		'OrderCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '発令大分類CD', 'charset' => 'utf8'),
		'OrderName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'utf8_general_ci', 'comment' => '発令大分類名', 'charset' => 'utf8'),
		'OrderSubCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '発令小分類CD', 'charset' => 'utf8'),
		'OrderSubName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'utf8_general_ci', 'comment' => '発令小分類名', 'charset' => 'utf8'),
		'OrderedDate' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '発令年月日'),
		'AssignOrgCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '発令機関CD', 'charset' => 'utf8'),
		'OrderRightsOrg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '発令機関', 'charset' => 'utf8'),
		'OrderRightsName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => '発令権者', 'charset' => 'utf8'),
		'HistDataRecFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '履歴データ記録フラグ', 'charset' => 'utf8'),
		'HistCardRecFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '履歴カード記録フラグ', 'charset' => 'utf8'),
		'HistPunishOutputFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '履歴処分なしフラグ', 'charset' => 'utf8'),
		'HistMutualAidOutputFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '履歴共済用出力フラグ', 'charset' => 'utf8'),
		'HistRetireOutputFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '履歴退職用出力フラグ', 'charset' => 'utf8'),
		'AssignDescription' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1000, 'collate' => 'utf8_general_ci', 'comment' => '発令内容', 'charset' => 'utf8'),
		'AssignDeskLineNo' => array('type' => 'integer', 'null' => true, 'default' => '0', 'comment' => '発令内容行文字数'),
		'AssignDescOrdFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '発令内容継続フラグ', 'charset' => 'utf8'),
		'AssignDescOrdNo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '発令内容継続連番', 'charset' => 'utf8'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'latest_data_flg' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '最新・仮登録フラグ : 最新・仮登録フラグ'),
		'last_key' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '最後キー : 最後キー'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'PersonalHistID', 'unique' => 1)
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
			'PersonalHistID' => 1,
			'EmpNo' => 'Lorem ',
			'AssignOrderNo' => 1,
			'SubSeqNo' => 1,
			'OrderCD' => '',
			'OrderName' => 'Lorem ipsum dolor sit amet',
			'OrderSubCD' => '',
			'OrderSubName' => 'Lorem ipsum dolor sit amet',
			'OrderedDate' => '2013-06-17',
			'AssignOrgCD' => '',
			'OrderRightsOrg' => 'Lorem ipsum dolor ',
			'OrderRightsName' => 'Lorem ipsum dolor sit amet',
			'HistDataRecFlg' => 'Lorem ipsum dolor sit ame',
			'HistCardRecFlg' => 'Lorem ipsum dolor sit ame',
			'HistPunishOutputFlg' => 'Lorem ipsum dolor sit ame',
			'HistMutualAidOutputFlg' => 'Lorem ipsum dolor sit ame',
			'HistRetireOutputFlg' => 'Lorem ipsum dolor sit ame',
			'AssignDescription' => 'Lorem ipsum dolor sit amet',
			'AssignDeskLineNo' => 1,
			'AssignDescOrdFlg' => 'Lorem ipsum dolor sit ame',
			'AssignDescOrdNo' => '',
			'registered_date' => '2013-06-17 23:29:19',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:29:19',
			'updated_by' => 'Lorem ip',
			'latest_data_flg' => 1,
			'last_key' => 1,
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
