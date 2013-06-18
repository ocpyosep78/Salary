<?php
/**
 * QtJyuminzeiFixture
 *
 */
class QtJyuminzeiFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'qt_jyuminzei';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'ResidentTax_Year' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '住民税年度'),
		'EmpNo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 8, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '職員番号', 'charset' => 'utf8'),
		'MunicipalityCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 6, 'collate' => 'utf8_general_ci', 'comment' => '市区町村CD', 'charset' => 'utf8'),
		'SpecialLevyObligate' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '特徴義務者', 'charset' => 'utf8'),
		'SpecifyNo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '指定番号', 'charset' => 'utf8'),
		'PersonNo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '個人番号', 'charset' => 'utf8'),
		'ZipCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 9, 'collate' => 'utf8_general_ci', 'comment' => '郵便番号', 'charset' => 'utf8'),
		'AddressJP' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => '漢字住所', 'charset' => 'utf8'),
		'AddressDetailJP' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => '漢字住所方書', 'charset' => 'utf8'),
		'AddressKana' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'comment' => 'カナ住所', 'charset' => 'utf8'),
		'AddressDetailKana' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'comment' => 'カナ住所方書', 'charset' => 'utf8'),
		'LocalTaxLevyDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '住民税徴収区分 : １：普通徴収　２：特別徴収　３：一括徴収　４：一括徴収（退職）', 'charset' => 'utf8'),
		'NonTaxableMovementDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '徴収不能異動区分 : １：退職　２：転勤　３：育休　４：無給　５：死亡　６：その他', 'charset' => 'utf8'),
		'MovementDate' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '異動年月日'),
		'ExpectedLevyAmo_06' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '徴収予定額_6月'),
		'ExpectedLevyAmo_07' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '徴収予定額_7月'),
		'ExpectedLevyAmo_08' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '徴収予定額_8月'),
		'ExpectedLevyAmo_09' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '徴収予定額_9月'),
		'ExpectedLevyAmo_10' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '徴収予定額_10月'),
		'ExpectedLevyAmo_11' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '徴収予定額_11月'),
		'ExpectedLevyAmo_12' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '徴収予定額_12月'),
		'ExpectedLevyAmo_01' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '徴収予定額_1月'),
		'ExpectedLevyAmo_02' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '徴収予定額_2月'),
		'ExpectedLevyAmo_03' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '徴収予定額_3月'),
		'ExpectedLevyAmo_04' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '徴収予定額_4月'),
		'ExpectedLevyAmo_05' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '徴収予定額_5月'),
		'LeviedAmo_06' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '徴収済税額_6月'),
		'LeviedAmo_07' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '徴収済税額_7月'),
		'LeviedAmo_08' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '徴収済税額_8月'),
		'LeviedAmo_09' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '徴収済税額_9月'),
		'LeviedAmo_10' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '徴収済税額_10月'),
		'LeviedAmo_11' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '徴収済税額_11月'),
		'LeviedAmo_12' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '徴収済税額_12月'),
		'LeviedAmo_01' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '徴収済税額_1月'),
		'LeviedAmo_02' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '徴収済税額_2月'),
		'LeviedAmo_03' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '徴収済税額_3月'),
		'LeviedAmo_04' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '徴収済税額_4月'),
		'LeviedAmo_05' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '徴収済税額_5月'),
		'AnnualTaxAmo' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '年税額'),
		'LeviedTaxAmo' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '既納額'),
		'UnLeviedTaxAmo' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '未納額'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'delete_flg' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '削除フラグ : 削除フラグ', 'charset' => 'utf8'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('ResidentTax_Year', 'EmpNo'), 'unique' => 1)
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
			'ResidentTax_Year' => 1,
			'EmpNo' => 'Lorem ',
			'MunicipalityCD' => 'Lore',
			'SpecialLevyObligate' => '',
			'SpecifyNo' => 'Lorem ipsum dolor ',
			'PersonNo' => 'Lorem ip',
			'ZipCD' => 'Lorem i',
			'AddressJP' => 'Lorem ipsum dolor sit amet',
			'AddressDetailJP' => 'Lorem ipsum dolor sit amet',
			'AddressKana' => 'Lorem ipsum dolor sit amet',
			'AddressDetailKana' => 'Lorem ipsum dolor sit amet',
			'LocalTaxLevyDiv' => 'Lorem ipsum dolor sit ame',
			'NonTaxableMovementDiv' => 'Lorem ipsum dolor sit ame',
			'MovementDate' => '2013-06-17',
			'ExpectedLevyAmo_06' => 1,
			'ExpectedLevyAmo_07' => 1,
			'ExpectedLevyAmo_08' => 1,
			'ExpectedLevyAmo_09' => 1,
			'ExpectedLevyAmo_10' => 1,
			'ExpectedLevyAmo_11' => 1,
			'ExpectedLevyAmo_12' => 1,
			'ExpectedLevyAmo_01' => 1,
			'ExpectedLevyAmo_02' => 1,
			'ExpectedLevyAmo_03' => 1,
			'ExpectedLevyAmo_04' => 1,
			'ExpectedLevyAmo_05' => 1,
			'LeviedAmo_06' => 1,
			'LeviedAmo_07' => 1,
			'LeviedAmo_08' => 1,
			'LeviedAmo_09' => 1,
			'LeviedAmo_10' => 1,
			'LeviedAmo_11' => 1,
			'LeviedAmo_12' => 1,
			'LeviedAmo_01' => 1,
			'LeviedAmo_02' => 1,
			'LeviedAmo_03' => 1,
			'LeviedAmo_04' => 1,
			'LeviedAmo_05' => 1,
			'AnnualTaxAmo' => 1,
			'LeviedTaxAmo' => 1,
			'UnLeviedTaxAmo' => 1,
			'registered_date' => '2013-06-17 23:48:22',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:48:22',
			'updated_by' => 'Lorem ip',
			'delete_flg' => 'Lorem ipsum dolor sit ame',
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
