<?php
/**
 * QtJissekiUchiNoritu1Fixture
 *
 */
class QtJissekiUchiNoritu1Fixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'qt_jisseki_uchi_noritu1';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'ResultsYM' => array('type' => 'date', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '実績年月'),
		'EmpNo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 8, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '職員番号', 'charset' => 'utf8'),
		'PayerDiv' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 2, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '支払者区分', 'charset' => 'utf8'),
		'ConcurrentSeq' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '兼務先連番'),
		'TableNo' => array('type' => 'integer', 'null' => false, 'default' => '1', 'key' => 'primary', 'comment' => 'テーブルNo'),
		'AccountCD' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 12, 'collate' => 'utf8_general_ci', 'comment' => '科目CD', 'charset' => 'utf8'),
		'AllowDetailCD1' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 4, 'collate' => 'utf8_general_ci', 'comment' => '手当詳細CD1', 'charset' => 'utf8'),
		'EfficiencyWagesTimes1' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '能率給回数1'),
		'AllowDetailCD2' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 4, 'collate' => 'utf8_general_ci', 'comment' => '手当詳細CD2', 'charset' => 'utf8'),
		'EfficiencyWagesTimes2' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '能率給回数2'),
		'AllowDetailCD3' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 4, 'collate' => 'utf8_general_ci', 'comment' => '手当詳細CD3', 'charset' => 'utf8'),
		'EfficiencyWagesTimes3' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '能率給回数3'),
		'AllowDetailCD4' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 4, 'collate' => 'utf8_general_ci', 'comment' => '手当詳細CD4', 'charset' => 'utf8'),
		'EfficiencyWagesTimes4' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '能率給回数4'),
		'AllowDetailCD5' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 4, 'collate' => 'utf8_general_ci', 'comment' => '手当詳細CD5', 'charset' => 'utf8'),
		'EfficiencyWagesTimes5' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '能率給回数5'),
		'AllowDetailCD6' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 4, 'collate' => 'utf8_general_ci', 'comment' => '手当詳細CD6', 'charset' => 'utf8'),
		'EfficiencyWagesTimes6' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '能率給回数6'),
		'AllowDetailCD7' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 4, 'collate' => 'utf8_general_ci', 'comment' => '手当詳細CD7', 'charset' => 'utf8'),
		'EfficiencyWagesTimes7' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '能率給回数7'),
		'AllowDetailCD8' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 4, 'collate' => 'utf8_general_ci', 'comment' => '手当詳細CD8', 'charset' => 'utf8'),
		'EfficiencyWagesTimes8' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '能率給回数8'),
		'AllowDetailCD9' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 4, 'collate' => 'utf8_general_ci', 'comment' => '手当詳細CD9', 'charset' => 'utf8'),
		'EfficiencyWagesTimes9' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '能率給回数9'),
		'AllowDetailCD10' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 4, 'collate' => 'utf8_general_ci', 'comment' => '手当詳細CD10', 'charset' => 'utf8'),
		'EfficiencyWagesTimes10' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '能率給回数10'),
		'AllowDetailCD11' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 4, 'collate' => 'utf8_general_ci', 'comment' => '手当詳細CD11', 'charset' => 'utf8'),
		'EfficiencyWagesTimes11' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '能率給回数11'),
		'AllowDetailCD12' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 4, 'collate' => 'utf8_general_ci', 'comment' => '手当詳細CD12', 'charset' => 'utf8'),
		'EfficiencyWagesTimes12' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '能率給回数12'),
		'AllowDetailCD13' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 4, 'collate' => 'utf8_general_ci', 'comment' => '手当詳細CD13', 'charset' => 'utf8'),
		'EfficiencyWagesTimes13' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '能率給回数13'),
		'AllowDetailCD14' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 4, 'collate' => 'utf8_general_ci', 'comment' => '手当詳細CD14', 'charset' => 'utf8'),
		'EfficiencyWagesTimes14' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '能率給回数14'),
		'AllowDetailCD15' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 4, 'collate' => 'utf8_general_ci', 'comment' => '手当詳細CD15', 'charset' => 'utf8'),
		'EfficiencyWagesTimes15' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '能率給回数15'),
		'AllowDetailCD16' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 4, 'collate' => 'utf8_general_ci', 'comment' => '手当詳細CD16', 'charset' => 'utf8'),
		'EfficiencyWagesTimes16' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '能率給回数16'),
		'AllowDetailCD17' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 4, 'collate' => 'utf8_general_ci', 'comment' => '手当詳細CD17', 'charset' => 'utf8'),
		'EfficiencyWagesTimes17' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '能率給回数17'),
		'AllowDetailCD18' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 4, 'collate' => 'utf8_general_ci', 'comment' => '手当詳細CD18', 'charset' => 'utf8'),
		'EfficiencyWagesTimes18' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '能率給回数18'),
		'AllowDetailCD19' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 4, 'collate' => 'utf8_general_ci', 'comment' => '手当詳細CD19', 'charset' => 'utf8'),
		'EfficiencyWagesTimes19' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '能率給回数19'),
		'AllowDetailCD20' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 4, 'collate' => 'utf8_general_ci', 'comment' => '手当詳細CD20', 'charset' => 'utf8'),
		'EfficiencyWagesTimes20' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '能率給回数20'),
		'StatusDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '状態区分', 'charset' => 'utf8'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'delete_flg' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '削除フラグ : 削除フラグ', 'charset' => 'utf8'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('ResultsYM', 'EmpNo', 'PayerDiv', 'ConcurrentSeq', 'TableNo'), 'unique' => 1)
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
			'ResultsYM' => '2013-06-17',
			'EmpNo' => 'Lorem ',
			'PayerDiv' => '',
			'ConcurrentSeq' => 1,
			'TableNo' => 1,
			'AccountCD' => 'Lorem ipsu',
			'AllowDetailCD1' => 'Lo',
			'EfficiencyWagesTimes1' => 1,
			'AllowDetailCD2' => 'Lo',
			'EfficiencyWagesTimes2' => 1,
			'AllowDetailCD3' => 'Lo',
			'EfficiencyWagesTimes3' => 1,
			'AllowDetailCD4' => 'Lo',
			'EfficiencyWagesTimes4' => 1,
			'AllowDetailCD5' => 'Lo',
			'EfficiencyWagesTimes5' => 1,
			'AllowDetailCD6' => 'Lo',
			'EfficiencyWagesTimes6' => 1,
			'AllowDetailCD7' => 'Lo',
			'EfficiencyWagesTimes7' => 1,
			'AllowDetailCD8' => 'Lo',
			'EfficiencyWagesTimes8' => 1,
			'AllowDetailCD9' => 'Lo',
			'EfficiencyWagesTimes9' => 1,
			'AllowDetailCD10' => 'Lo',
			'EfficiencyWagesTimes10' => 1,
			'AllowDetailCD11' => 'Lo',
			'EfficiencyWagesTimes11' => 1,
			'AllowDetailCD12' => 'Lo',
			'EfficiencyWagesTimes12' => 1,
			'AllowDetailCD13' => 'Lo',
			'EfficiencyWagesTimes13' => 1,
			'AllowDetailCD14' => 'Lo',
			'EfficiencyWagesTimes14' => 1,
			'AllowDetailCD15' => 'Lo',
			'EfficiencyWagesTimes15' => 1,
			'AllowDetailCD16' => 'Lo',
			'EfficiencyWagesTimes16' => 1,
			'AllowDetailCD17' => 'Lo',
			'EfficiencyWagesTimes17' => 1,
			'AllowDetailCD18' => 'Lo',
			'EfficiencyWagesTimes18' => 1,
			'AllowDetailCD19' => 'Lo',
			'EfficiencyWagesTimes19' => 1,
			'AllowDetailCD20' => 'Lo',
			'EfficiencyWagesTimes20' => 1,
			'StatusDiv' => 'Lorem ipsum dolor sit ame',
			'registered_date' => '2013-06-17 23:47:27',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:47:27',
			'updated_by' => 'Lorem ip',
			'delete_flg' => 'Lorem ipsum dolor sit ame',
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
