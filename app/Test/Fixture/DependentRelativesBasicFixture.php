<?php
/**
 * DependentRelativesBasicFixture
 *
 */
class DependentRelativesBasicFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'DependentRelativesBasic';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => 'ID'),
		'PersonID' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '個人ID : 個人ID', 'charset' => 'utf8'),
		'Relationship' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '続柄', 'charset' => 'utf8'),
		'Name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '氏名 : 氏名', 'charset' => 'utf8'),
		'NameKana' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 40, 'collate' => 'utf8_general_ci', 'comment' => '氏名カナ', 'charset' => 'utf8'),
		'Gender' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '性別', 'charset' => 'utf8'),
		'DateOfBirth' => array('type' => 'date', 'null' => false, 'default' => null, 'comment' => '生年月日'),
		'DateOfDeath' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '死亡日 : 死亡日'),
		'LiveTogetherDiv' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '同居別居区分 : 職員の配偶者が扶養しているかどうかの区分。
扶養手当入力画面に「配偶者が扶養手当の支給を受けている子ども」の名前と氏名が一致した際、名前が完全一致した場合に立てるフラグ', 'charset' => 'utf8'),
		'SustainedBySpouseFlg' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '配偶者扶養区分 : 職員の配偶者が扶養しているかどうかの区分。
扶養手当入力画面に「配偶者が扶養手当の支給を受けている子ども」の名前と氏名が一致した際、名前が完全一致した場合に立てるフラグ', 'charset' => 'utf8'),
		'DependentRelativeAllowanceFlag' => array('type' => 'boolean', 'null' => true, 'default' => null, 'comment' => '扶養家族手当有効フラグ : true:受給対象、false:受給対象外'),
		'DependentDeductionFlag' => array('type' => 'boolean', 'null' => true, 'default' => null, 'comment' => '扶養控除有効フラグ : true:控除対象、false:控除対象外'),
		'ChildAllowanceFlag' => array('type' => 'boolean', 'null' => true, 'default' => null, 'comment' => '児童手当受給フラグ : true:受給対象、false:受給対象外'),
		'RegDate' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'RegisteredBy' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'RegPgID' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録プログラムID : 登録プログラムID', 'charset' => 'utf8'),
		'UpdateDate' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'UpdateBy' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'UpdatePgmID' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新プログラムID : 更新プログラムID', 'charset' => 'utf8'),
		'DeleteFlg' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => '削除フラグ : 削除フラグ'),
		'VersionNo' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => 'バージョンNo : バージョンNo'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'ID', 'unique' => 1)
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
			'ID' => 1,
			'PersonID' => 'Lorem ip',
			'Relationship' => 'Lorem ip',
			'Name' => 'Lorem ipsum dolor ',
			'NameKana' => 'Lorem ipsum dolor sit amet',
			'Gender' => '',
			'DateOfBirth' => '2013-06-17',
			'DateOfDeath' => '2013-06-17',
			'LiveTogetherDiv' => '',
			'SustainedBySpouseFlg' => '',
			'DependentRelativeAllowanceFlag' => 1,
			'DependentDeductionFlag' => 1,
			'ChildAllowanceFlag' => 1,
			'RegDate' => '2013-06-17 23:04:20',
			'RegisteredBy' => 'Lorem ip',
			'RegPgID' => 'Lorem ip',
			'UpdateDate' => '2013-06-17 23:04:20',
			'UpdateBy' => 'Lorem ip',
			'UpdatePgmID' => 'Lorem ip',
			'DeleteFlg' => 1,
			'VersionNo' => 1
		),
	);

}
