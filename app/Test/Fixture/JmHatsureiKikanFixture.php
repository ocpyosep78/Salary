<?php
/**
 * JmHatsureiKikanFixture
 *
 */
class JmHatsureiKikanFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'jm_hatsurei_kikan';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'AssignOrgCD' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 2, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '発令機関CD', 'charset' => 'utf8'),
		'AssignOrgName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'utf8_general_ci', 'comment' => '発令機関名称', 'charset' => 'utf8'),
		'AssignOrgShortName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '発令機関短縮名称', 'charset' => 'utf8'),
		'jimujyuji_koshanaijiOrgName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'utf8_general_ci', 'comment' => '事務従事発令用・公社内示書表示用機関名称', 'charset' => 'utf8'),
		'PayerDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '給与支払者区分', 'charset' => 'utf8'),
		'OrderRightsName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '発令権者名称', 'charset' => 'utf8'),
		'HistCardOrderRightsName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '履歴カード表示用発令権者名称', 'charset' => 'utf8'),
		'OrderRightsName_Registered' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 40, 'collate' => 'utf8_general_ci', 'comment' => '発令権者氏名（戸籍名）', 'charset' => 'utf8'),
		'OrderRightsName_tusho' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 40, 'collate' => 'utf8_general_ci', 'comment' => '発令権者氏名（通称名）', 'charset' => 'utf8'),
		'tsuchi_OrderRightsNameFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '通知書要発令権者氏名フラグ', 'charset' => 'utf8'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'delete_flg' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '削除フラグ', 'charset' => 'utf8'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'DependentsName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'utf8_general_ci', 'comment' => 'テストです 被扶養者氏名01', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'AssignOrgCD', 'unique' => 1)
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
			'AssignOrgCD' => '',
			'AssignOrgName' => 'Lorem ipsum dolor sit amet',
			'AssignOrgShortName' => 'Lorem ip',
			'jimujyuji_koshanaijiOrgName' => 'Lorem ipsum dolor sit amet',
			'PayerDiv' => '',
			'OrderRightsName' => 'Lorem ipsum dolor ',
			'HistCardOrderRightsName' => 'Lorem ipsum dolor ',
			'OrderRightsName_Registered' => 'Lorem ipsum dolor sit amet',
			'OrderRightsName_tusho' => 'Lorem ipsum dolor sit amet',
			'tsuchi_OrderRightsNameFlg' => 'Lorem ipsum dolor sit ame',
			'registered_date' => '2013-06-17 23:22:05',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:22:05',
			'updated_by' => 'Lorem ip',
			'delete_flg' => 'Lorem ipsum dolor sit ame',
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17',
			'DependentsName' => 'Lorem ipsum dolor sit amet'
		),
	);

}
