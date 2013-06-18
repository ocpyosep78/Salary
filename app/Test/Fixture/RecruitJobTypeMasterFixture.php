<?php
/**
 * RecruitJobTypeMasterFixture
 *
 */
class RecruitJobTypeMasterFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'RecruitJobTypeMaster';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'RecruitJobType' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 3, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '採用業務専用職種コード : 採用業務専用職種コード', 'charset' => 'utf8'),
		'RecruitJobTypeName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '採用業務専用職種名称 : 採用業務専用職種名称', 'charset' => 'utf8'),
		'RecruitJobTypeShortName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '採用業務専用職種略称 : 採用業務専用職種略称', 'charset' => 'utf8'),
		'RegDate' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'RegisteredBy' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'RegPgID' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録プログラムID : 登録プログラムID', 'charset' => 'utf8'),
		'UpdateDate' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'UpdateBy' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'UpdatePgmID' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新プログラムID : 更新プログラムID', 'charset' => 'utf8'),
		'DeleteFlg' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => '削除フラグ : 削除フラグ'),
		'VersionNo' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => 'バージョンNo : バージョンNo'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'RecruitJobType', 'unique' => 1),
			'RecruitJobType' => array('column' => 'RecruitJobType', 'unique' => 1)
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
			'RecruitJobType' => 'L',
			'RecruitJobTypeName' => 'Lorem ipsum dolor ',
			'RecruitJobTypeShortName' => 'Lorem ip',
			'RegDate' => '2013-06-17 23:08:36',
			'RegisteredBy' => 'Lorem ip',
			'RegPgID' => 'Lorem ip',
			'UpdateDate' => '2013-06-17 23:08:36',
			'UpdateBy' => 'Lorem ip',
			'UpdatePgmID' => 'Lorem ip',
			'DeleteFlg' => 1,
			'VersionNo' => 1
		),
	);

}
