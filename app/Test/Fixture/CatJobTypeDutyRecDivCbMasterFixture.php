<?php
/**
 * CatJobTypeDutyRecDivCbMasterFixture
 *
 */
class CatJobTypeDutyRecDivCbMasterFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'CatJobTypeDutyRecDivCbMaster';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'CatJobTypeDutyRecDivCbMasterID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '類別・職種職務・採用区分組合せマスタID : 類別・職種職務・採用区分組合せマスタID'),
		'RecruitDivCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '採用区分CD : 採用区分CD', 'charset' => 'utf8'),
		'RecruitDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '採用区分名称 : 採用区分名称', 'charset' => 'utf8'),
		'JobTypeCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 3, 'collate' => 'utf8_general_ci', 'comment' => '職種CD : 職種CD', 'charset' => 'utf8'),
		'JobTypeName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '職種名 : 職種名', 'charset' => 'utf8'),
		'JobDutyCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 3, 'collate' => 'utf8_general_ci', 'comment' => '職務CD : 職務CD', 'charset' => 'utf8'),
		'JobCategoryName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '職務名 : 職務名', 'charset' => 'utf8'),
		'ExamTypeCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '試験・選考種別CD : 試験・選考種別CD', 'charset' => 'utf8'),
		'ExamTypeName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'utf8_general_ci', 'comment' => '試験・選考種別名称 : 試験・選考種別名称', 'charset' => 'utf8'),
		'RegDate' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'RegisteredBy' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'RegPgID' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録プログラムID : 登録プログラムID', 'charset' => 'utf8'),
		'UpdateDate' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'UpdateBy' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'UpdatePgmID' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新プログラムID : 更新プログラムID', 'charset' => 'utf8'),
		'DeleteFlg' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => '削除フラグ : 削除フラグ'),
		'VersionNo' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => 'バージョンNo : バージョンNo'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'CatJobTypeDutyRecDivCbMasterID', 'unique' => 1)
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
			'CatJobTypeDutyRecDivCbMasterID' => 1,
			'RecruitDivCD' => '',
			'RecruitDiv' => 'Lorem ipsum dolor ',
			'JobTypeCD' => 'L',
			'JobTypeName' => 'Lorem ipsum dolor ',
			'JobDutyCD' => 'L',
			'JobCategoryName' => 'Lorem ipsum dolor ',
			'ExamTypeCD' => '',
			'ExamTypeName' => 'Lorem ipsum dolor sit amet',
			'RegDate' => '2013-06-17 23:03:42',
			'RegisteredBy' => 'Lorem ip',
			'RegPgID' => 'Lorem ip',
			'UpdateDate' => '2013-06-17 23:03:42',
			'UpdateBy' => 'Lorem ip',
			'UpdatePgmID' => 'Lorem ip',
			'DeleteFlg' => 1,
			'VersionNo' => 1
		),
	);

}
