<?php
/**
 * OrganisationMasterFixture
 *
 */
class OrganisationMasterFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'OrganisationMaster';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'OrgCD' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 2, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '機関CD : 機関CD', 'charset' => 'utf8'),
		'OrgName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '機関名 : 機関名', 'charset' => 'utf8'),
		'OrgShortName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '機関略称 : 機関略称', 'charset' => 'utf8'),
		'OrgName_Hist' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '履歴名称 : 履歴名称', 'charset' => 'utf8'),
		'PayerDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '給与支払者区分 : 給与支払者区分', 'charset' => 'utf8'),
		'OrderRightsRole' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '発令権者名称 : 発令権者名称', 'charset' => 'utf8'),
		'OrderRightsHistName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '発令権者履歴名称 : 発令権者履歴名称', 'charset' => 'utf8'),
		'OrderRightsName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '発令権者氏名 : 発令権者氏名', 'charset' => 'utf8'),
		'NoticeOrgName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 40, 'collate' => 'utf8_general_ci', 'comment' => '通知機関名称 : 通知機関名称', 'charset' => 'utf8'),
		'NoticeContOrgName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 40, 'collate' => 'utf8_general_ci', 'comment' => '発令内容機関名 : 発令内容機関名', 'charset' => 'utf8'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'delete_flg' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '削除フラグ : 削除フラグ', 'charset' => 'utf8'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'OrgCD', 'unique' => 1),
			'OrgCD' => array('column' => 'OrgCD', 'unique' => 1)
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
			'OrgCD' => '',
			'OrgName' => 'Lorem ipsum dolor ',
			'OrgShortName' => 'Lorem ip',
			'OrgName_Hist' => 'Lorem ipsum dolor ',
			'PayerDiv' => '',
			'OrderRightsRole' => 'Lorem ipsum dolor ',
			'OrderRightsHistName' => 'Lorem ipsum dolor ',
			'OrderRightsName' => 'Lorem ipsum dolor ',
			'NoticeOrgName' => 'Lorem ipsum dolor sit amet',
			'NoticeContOrgName' => 'Lorem ipsum dolor sit amet',
			'registered_date' => '2013-06-17 23:07:57',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:07:57',
			'updated_by' => 'Lorem ip',
			'delete_flg' => 'Lorem ipsum dolor sit ame',
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
