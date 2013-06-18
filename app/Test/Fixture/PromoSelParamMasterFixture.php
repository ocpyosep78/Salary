<?php
/**
 * PromoSelParamMasterFixture
 *
 */
class PromoSelParamMasterFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'PromoSelParamMaster';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'PromoSelParamID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '昇任選考パラメータID : 昇任選考パラメータID'),
		'PrSelectTypeCD' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '昇任選考種別CD : 昇任選考種別CD', 'charset' => 'utf8'),
		'PrSelectTypeName' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '昇任選考種別名 : 昇任選考種別名', 'charset' => 'utf8'),
		'PrSelTypeRowCounter' => array('type' => 'integer', 'null' => false, 'default' => null, 'comment' => '昇任選考種別連番 : 昇任選考種別連番'),
		'PrSelectDivCD' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '昇任選考区分CD : 昇任選考区分CD', 'charset' => 'utf8'),
		'PrSelectDivName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 25, 'collate' => 'utf8_general_ci', 'comment' => '昇任選考区分名 : 昇任選考区分名', 'charset' => 'utf8'),
		'PrSelectDivShortName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '昇任選考区分略称 : 昇任選考区分略称', 'charset' => 'utf8'),
		'PrSelectPatternCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '昇任選考パターンCD : 昇任選考パターンCD', 'charset' => 'utf8'),
		'PrSelectPatternName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'utf8_general_ci', 'comment' => '昇任選考パターン名 : 昇任選考パターン名', 'charset' => 'utf8'),
		'RecruitDivCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '採用区分CD : 採用区分CD', 'charset' => 'utf8'),
		'JobTypeText' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => '職種特記 : 職種特記', 'charset' => 'utf8'),
		'AgeLowerLimit' => array('type' => 'integer', 'null' => true, 'default' => '0', 'comment' => '年齢下限 : 年齢下限'),
		'AgeUpperLimit' => array('type' => 'integer', 'null' => true, 'default' => '99', 'comment' => '年齢上限 : 年齢上限'),
		'WdServiceYearsLwLimit' => array('type' => 'integer', 'null' => true, 'default' => '0', 'comment' => '区在職年数下限 : 区在職年数下限'),
		'WdServiceYearsUpLimit' => array('type' => 'integer', 'null' => true, 'default' => '99', 'comment' => '区在職年数上限 : 区在職年数上限'),
		'ServiceYearsSetName1' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '在職年数設定名称1 : 在職年数設定名称1', 'charset' => 'utf8'),
		'ServiceYearsLwLimit1' => array('type' => 'integer', 'null' => true, 'default' => '0', 'comment' => '在職年数下限1 : 在職年数下限1'),
		'ServiceYearsUpLimit1' => array('type' => 'integer', 'null' => true, 'default' => '99', 'comment' => '在職年数上限1 : 在職年数上限1'),
		'ServiceYearsSetName2' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '在職年数設定名称2 : 在職年数設定名称2', 'charset' => 'utf8'),
		'ServiceYearsLwLimit2' => array('type' => 'integer', 'null' => true, 'default' => '0', 'comment' => '在職年数下限2 : 在職年数下限2'),
		'ServiceYearsUpLimit2' => array('type' => 'integer', 'null' => true, 'default' => '99', 'comment' => '在職年数上限2 : 在職年数上限2'),
		'UnivGraduationDate' => array('type' => 'date', 'null' => true, 'default' => '9999-12-31', 'comment' => '大学卒業年月日 : 大学卒業年月日'),
		'AbsentDays' => array('type' => 'integer', 'null' => true, 'default' => '999', 'comment' => '欠勤日数 : 欠勤日数'),
		'ExempAquisYear' => array('type' => 'integer', 'null' => true, 'default' => '1900', 'comment' => '免除資格取得年度 : 免除資格取得年度'),
		'ExempValidYears' => array('type' => 'integer', 'null' => true, 'default' => '999', 'comment' => '免除資格有効年数 : 免除資格有効年数'),
		'BeforeHistoryRefFlg' => array('type' => 'boolean', 'null' => true, 'default' => '0', 'comment' => '前歴参照フラグ : 前歴参照フラグ'),
		'RegDate' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'RegisteredBy' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'RegPgID' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録プログラムID : 登録プログラムID', 'charset' => 'utf8'),
		'UpdateDate' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'UpdateBy' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'UpdatePgmID' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新プログラムID : 更新プログラムID', 'charset' => 'utf8'),
		'DeleteFlg' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => '削除フラグ : 削除フラグ'),
		'VersionNo' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => 'バージョンNo : バージョンNo'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'PromoSelParamID', 'unique' => 1)
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
			'PromoSelParamID' => 1,
			'PrSelectTypeCD' => '',
			'PrSelectTypeName' => 'Lorem ip',
			'PrSelTypeRowCounter' => 1,
			'PrSelectDivCD' => '',
			'PrSelectDivName' => 'Lorem ipsum dolor sit a',
			'PrSelectDivShortName' => 'Lorem ip',
			'PrSelectPatternCD' => '',
			'PrSelectPatternName' => 'Lorem ipsum dolor sit amet',
			'RecruitDivCD' => '',
			'JobTypeText' => 'Lorem ipsum dolor sit amet',
			'AgeLowerLimit' => 1,
			'AgeUpperLimit' => 1,
			'WdServiceYearsLwLimit' => 1,
			'WdServiceYearsUpLimit' => 1,
			'ServiceYearsSetName1' => 'Lorem ip',
			'ServiceYearsLwLimit1' => 1,
			'ServiceYearsUpLimit1' => 1,
			'ServiceYearsSetName2' => 'Lorem ip',
			'ServiceYearsLwLimit2' => 1,
			'ServiceYearsUpLimit2' => 1,
			'UnivGraduationDate' => '2013-06-17',
			'AbsentDays' => 1,
			'ExempAquisYear' => 1,
			'ExempValidYears' => 1,
			'BeforeHistoryRefFlg' => 1,
			'RegDate' => '2013-06-17 23:08:12',
			'RegisteredBy' => 'Lorem ip',
			'RegPgID' => 'Lorem ip',
			'UpdateDate' => '2013-06-17 23:08:12',
			'UpdateBy' => 'Lorem ip',
			'UpdatePgmID' => 'Lorem ip',
			'DeleteFlg' => 1,
			'VersionNo' => 1
		),
	);

}
