<?php
/**
 * JmShozokuFixture
 *
 */
class JmShozokuFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'jm_shozoku';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'FiscalYear' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '年度'),
		'DepCD' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 8, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '所属CD', 'charset' => 'utf8'),
		'DeptName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 80, 'collate' => 'utf8_general_ci', 'comment' => '所属名正式', 'charset' => 'utf8'),
		'DeptShortName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '所属名短縮', 'charset' => 'utf8'),
		'CreatedDate' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '新設年月日'),
		'DisposeDate' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '廃止年月日'),
		'FloorCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 4, 'collate' => 'utf8_general_ci', 'comment' => 'フロアCD', 'charset' => 'utf8'),
		'OfficeCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 3, 'collate' => 'utf8_general_ci', 'comment' => '事業所CD', 'charset' => 'utf8'),
		'Extension' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 40, 'collate' => 'utf8_general_ci', 'comment' => '内線', 'charset' => 'utf8'),
		'OfficeStraightTelNo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'utf8_general_ci', 'comment' => '電話番号直通', 'charset' => 'utf8'),
		'AssignOrgCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '発令機関CD', 'charset' => 'utf8'),
		'Office4thGradeFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '４級事業所フラグ', 'charset' => 'utf8'),
		'SubSectionChiefFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '担当係長フラグ', 'charset' => 'utf8'),
		'SubCounselorFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '副参事ポストフラグ', 'charset' => 'utf8'),
		'AccountingDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 3, 'collate' => 'utf8_general_ci', 'comment' => '会計区分CD', 'charset' => 'utf8'),
		'DepartmentCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '部門CD', 'charset' => 'utf8'),
		'PlaceOfEmploymentCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '勤務先CD', 'charset' => 'utf8'),
		'ReportsDistDepLvCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 8, 'collate' => 'utf8_general_ci', 'comment' => '帳票配布部レベルCD', 'charset' => 'utf8'),
		'ReportsDistDepLvName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 80, 'collate' => 'utf8_general_ci', 'comment' => '帳票配布部レベル名正式', 'charset' => 'utf8'),
		'ReportsDistSectLvCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 8, 'collate' => 'utf8_general_ci', 'comment' => '帳票配布課レベルCD', 'charset' => 'utf8'),
		'ReportsDistSectLvName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 80, 'collate' => 'utf8_general_ci', 'comment' => '帳票配布課レベル名正式', 'charset' => 'utf8'),
		'PageBreakFlgEveryCharge' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '係ごと改ページフラグ', 'charset' => 'utf8'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'delete_flg' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '削除フラグ : 削除フラグ', 'charset' => 'utf8'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('FiscalYear', 'DepCD'), 'unique' => 1)
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
			'FiscalYear' => 1,
			'DepCD' => 'Lorem ',
			'DeptName' => 'Lorem ipsum dolor sit amet',
			'DeptShortName' => 'Lorem ip',
			'CreatedDate' => '2013-06-17',
			'DisposeDate' => '2013-06-17',
			'FloorCD' => 'Lo',
			'OfficeCD' => 'L',
			'Extension' => 'Lorem ipsum dolor sit amet',
			'OfficeStraightTelNo' => 'Lorem ipsum dolor sit amet',
			'AssignOrgCD' => '',
			'Office4thGradeFlg' => 'Lorem ipsum dolor sit ame',
			'SubSectionChiefFlg' => 'Lorem ipsum dolor sit ame',
			'SubCounselorFlg' => 'Lorem ipsum dolor sit ame',
			'AccountingDiv' => 'L',
			'DepartmentCD' => '',
			'PlaceOfEmploymentCD' => 'Lorem ipsum dolor sit ame',
			'ReportsDistDepLvCD' => 'Lorem ',
			'ReportsDistDepLvName' => 'Lorem ipsum dolor sit amet',
			'ReportsDistSectLvCD' => 'Lorem ',
			'ReportsDistSectLvName' => 'Lorem ipsum dolor sit amet',
			'PageBreakFlgEveryCharge' => 'Lorem ipsum dolor sit ame',
			'registered_date' => '2013-06-17 23:24:24',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:24:24',
			'updated_by' => 'Lorem ip',
			'delete_flg' => 'Lorem ipsum dolor sit ame',
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
