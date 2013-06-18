<?php
/**
 * FtReigetsuKojoIraiZaikeichochikuChildFixture
 *
 */
class FtReigetsuKojoIraiZaikeichochikuChildFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'ft_reigetsu_kojo_irai_zaikeichochiku_child';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'ZaikeiKojiDataID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '例月控除依頼データ 財形貯蓄（子）ID'),
		'ZaikeiKojiHeaderID' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '例月控除依頼データ 財形貯蓄（親）ID'),
		'RecordDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => 'レコード区分', 'charset' => 'utf8'),
		'EmployerNo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 8, 'collate' => 'utf8_general_ci', 'comment' => '事業主番号', 'charset' => 'utf8'),
		'EmpNo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 8, 'collate' => 'utf8_general_ci', 'comment' => '職員番号', 'charset' => 'utf8'),
		'DepCD1' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 3, 'collate' => 'utf8_general_ci', 'comment' => '所属CD（局）', 'charset' => 'utf8'),
		'DepCD2' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '所属CD（部）', 'charset' => 'utf8'),
		'DepCD3' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '所属CD（課）', 'charset' => 'utf8'),
		'BirthDate_gen' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '生年月日（元号） : 1:明治2:大正3:昭和', 'charset' => 'utf8'),
		'BirthDate_JPYear' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '生年月日（和暦年）', 'charset' => 'utf8'),
		'BirthMonth' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '生年月日（月）', 'charset' => 'utf8'),
		'BirthDay' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '生年月日（日）', 'charset' => 'utf8'),
		'NameKana' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 16, 'collate' => 'utf8_general_ci', 'comment' => '氏名（カナ）', 'charset' => 'utf8'),
		'DeductSchAmo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 8, 'collate' => 'utf8_general_ci', 'comment' => '控除予定金額', 'charset' => 'utf8'),
		'zaikeiDeduct_Payment' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 6, 'collate' => 'utf8_general_ci', 'comment' => '財形（一般）控除内訳：給与', 'charset' => 'utf8'),
		'zaikeiDeduct_Diligence' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 6, 'collate' => 'utf8_general_ci', 'comment' => '財形（一般）控除内訳：期末勤勉手当', 'charset' => 'utf8'),
		'zaikeiDeduct_nj_Payment' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 6, 'collate' => 'utf8_general_ci', 'comment' => '財形（年金＋住宅）控除内訳：給与', 'charset' => 'utf8'),
		'zaikeiDeduct_nj_Diligence' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 6, 'collate' => 'utf8_general_ci', 'comment' => '財形（年金＋住宅）控除内訳：期末勤勉手当', 'charset' => 'utf8'),
		'registered_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'latest_flg' => array('type' => 'integer', 'null' => true, 'default' => '0', 'comment' => '最新・仮登録フラグ : 最新・仮登録フラグ'),
		'last_key' => array('type' => 'integer', 'null' => true, 'default' => '0', 'comment' => '最後キー : 最後キー'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'ZaikeiKojiDataID', 'unique' => 1)
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
			'ZaikeiKojiDataID' => 1,
			'ZaikeiKojiHeaderID' => 1,
			'RecordDiv' => 'Lorem ipsum dolor sit ame',
			'EmployerNo' => 'Lorem ',
			'EmpNo' => 'Lorem ',
			'DepCD1' => 'L',
			'DepCD2' => '',
			'DepCD3' => '',
			'BirthDate_gen' => 'Lorem ipsum dolor sit ame',
			'BirthDate_JPYear' => '',
			'BirthMonth' => '',
			'BirthDay' => '',
			'NameKana' => 'Lorem ipsum do',
			'DeductSchAmo' => 'Lorem ',
			'zaikeiDeduct_Payment' => 'Lore',
			'zaikeiDeduct_Diligence' => 'Lore',
			'zaikeiDeduct_nj_Payment' => 'Lore',
			'zaikeiDeduct_nj_Diligence' => 'Lore',
			'registered_date' => '2013-06-17 23:20:24',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:20:24',
			'updated_by' => 'Lorem ip',
			'latest_flg' => 1,
			'last_key' => 1,
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
