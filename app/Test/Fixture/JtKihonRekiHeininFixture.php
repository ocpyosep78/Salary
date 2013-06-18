<?php
/**
 * JtKihonRekiHeininFixture
 *
 */
class JtKihonRekiHeininFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'jt_kihon_reki_heinin';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'EmpAdditionalHistID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '併任歴ID'),
		'PersonID' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '個人ID'),
		'EmpNo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 8, 'collate' => 'utf8_general_ci', 'comment' => '職員番号', 'charset' => 'utf8'),
		'OrderRightsCD_AdPos' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '併任発令機関CD', 'charset' => 'utf8'),
		'OrderRightsOrg_AdPos' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '併任発令機関名称', 'charset' => 'utf8'),
		'OrderRightsName_AdPos' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => '併任発令権者名称', 'charset' => 'utf8'),
		'AddJobGradeCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '併任時職層CD', 'charset' => 'utf8'),
		'AddJobGradeName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '併任時職層名 : 正式', 'charset' => 'utf8'),
		'AddJobGradeShortName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 5, 'collate' => 'utf8_general_ci', 'comment' => '併任時職層名 : 大分類', 'charset' => 'utf8'),
		'OrderedDate_AdPos' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '併任発令年月日'),
		'RemoveDate_AdPos' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '併任解除年月日'),
		'EmpBasicInformationID' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '人事基本情報ID : 人事基本情報ID'),
		'AssignmentNo' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '人事履歴情報ID : 人事履歴情報ID'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'latest_flg' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '最新・仮登録フラグ : 最新・仮登録フラグ'),
		'last_key' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '最後キー : 最後キー'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'EmpAdditionalHistID', 'unique' => 1)
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
			'EmpAdditionalHistID' => 1,
			'PersonID' => 1,
			'EmpNo' => 'Lorem ',
			'OrderRightsCD_AdPos' => '',
			'OrderRightsOrg_AdPos' => 'Lorem ipsum dolor ',
			'OrderRightsName_AdPos' => 'Lorem ipsum dolor sit amet',
			'AddJobGradeCD' => '',
			'AddJobGradeName' => 'Lorem ipsum dolor ',
			'AddJobGradeShortName' => 'Lor',
			'OrderedDate_AdPos' => '2013-06-17',
			'RemoveDate_AdPos' => '2013-06-17',
			'EmpBasicInformationID' => 1,
			'AssignmentNo' => 1,
			'registered_date' => '2013-06-17 23:26:05',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:26:05',
			'updated_by' => 'Lorem ip',
			'latest_flg' => 1,
			'last_key' => 1,
			'expired_date' => '2013-06-17',
			'effective_date' => '2013-06-17'
		),
	);

}
