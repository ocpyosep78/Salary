<?php
/**
 * JtKihonRirekiCardFixture
 *
 */
class JtKihonRirekiCardFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'jt_kihon_rireki_card';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'AssignmentNo' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '人事履歴カード情報ID'),
		'PersonID' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '個人ID'),
		'EmpNo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 8, 'collate' => 'utf8_general_ci', 'comment' => '職員番号', 'charset' => 'utf8'),
		'EmpDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '職員区分', 'charset' => 'utf8'),
		'AssignOrderNo' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '発令番号（連番=履歴カードの表示順）'),
		'OrderedDate' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '発令年月日'),
		'AssignDescription' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1000, 'collate' => 'utf8_general_ci', 'comment' => '発令内容（最大１０００文字）', 'charset' => 'utf8'),
		'AssignOrgCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '発令機関CD', 'charset' => 'utf8'),
		'OrderRightsOrg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '発令機関名称', 'charset' => 'utf8'),
		'OrderRightsName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => '発令権者名称', 'charset' => 'utf8'),
		'MovementLargeDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '異動大区分', 'charset' => 'utf8'),
		'MovementSmallDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '異動小区分', 'charset' => 'utf8'),
		'AssignDocCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 3, 'collate' => 'utf8_general_ci', 'comment' => '発令基本文CD', 'charset' => 'utf8'),
		'HistDataRecFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '履歴データ記録フラグ', 'charset' => 'utf8'),
		'HistCardRecFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '履歴カード記録フラグ', 'charset' => 'utf8'),
		'HistMutualAidOutputFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '履歴共済用出力フラグ', 'charset' => 'utf8'),
		'HistInterchangeOutputFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '履歴交流用出力フラグ', 'charset' => 'utf8'),
		'HistRetireOutputFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '履歴退職用出力フラグ', 'charset' => 'utf8'),
		'HistPunishOutputFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '履歴処分なし用出力フラグ', 'charset' => 'utf8'),
		'AssignTypeCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '発令種別CD', 'charset' => 'utf8'),
		'AssignCategoryCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 3, 'collate' => 'utf8_general_ci', 'comment' => '発令分類CD', 'charset' => 'utf8'),
		'AssginDescOrdFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '発令内容継続フラグ（移行データ用）', 'charset' => 'utf8'),
		'AssignDescOrdNo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '発令内容継続連番（移行データ用）', 'charset' => 'utf8'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'latest_flg' => array('type' => 'integer', 'null' => false, 'default' => null, 'comment' => '最新・仮登録フラグ : 最新・仮登録フラグ'),
		'last_key' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '最後キー : 最後キー'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'AssignmentNo', 'unique' => 1)
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
			'AssignmentNo' => 1,
			'PersonID' => 1,
			'EmpNo' => 'Lorem ',
			'EmpDiv' => '',
			'AssignOrderNo' => 1,
			'OrderedDate' => '2013-06-17',
			'AssignDescription' => 'Lorem ipsum dolor sit amet',
			'AssignOrgCD' => '',
			'OrderRightsOrg' => 'Lorem ipsum dolor ',
			'OrderRightsName' => 'Lorem ipsum dolor sit amet',
			'MovementLargeDiv' => 'Lorem ip',
			'MovementSmallDiv' => 'Lorem ip',
			'AssignDocCD' => 'L',
			'HistDataRecFlg' => 'Lorem ipsum dolor sit ame',
			'HistCardRecFlg' => 'Lorem ipsum dolor sit ame',
			'HistMutualAidOutputFlg' => 'Lorem ipsum dolor sit ame',
			'HistInterchangeOutputFlg' => 'Lorem ipsum dolor sit ame',
			'HistRetireOutputFlg' => 'Lorem ipsum dolor sit ame',
			'HistPunishOutputFlg' => 'Lorem ipsum dolor sit ame',
			'AssignTypeCD' => '',
			'AssignCategoryCD' => 'L',
			'AssginDescOrdFlg' => 'Lorem ipsum dolor sit ame',
			'AssignDescOrdNo' => '',
			'registered_date' => '2013-06-17 23:28:09',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:28:09',
			'updated_by' => 'Lorem ip',
			'latest_flg' => 1,
			'last_key' => 1,
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
