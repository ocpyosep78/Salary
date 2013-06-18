<?php
/**
 * QtJissekiUchiChinginFixture
 *
 */
class QtJissekiUchiChinginFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'qt_jisseki_uchi_chingin';

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
		'AccountDetailCD1' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 4, 'collate' => 'utf8_general_ci', 'comment' => '手当詳細CD1', 'charset' => 'utf8'),
		'WorkTimes_LW1' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '賃金回数1'),
		'AccountDetailCD2' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 4, 'collate' => 'utf8_general_ci', 'comment' => '手当詳細CD2', 'charset' => 'utf8'),
		'WorkTimes_LW2' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '賃金回数2'),
		'AccountDetailCD3' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 4, 'collate' => 'utf8_general_ci', 'comment' => '手当詳細CD3', 'charset' => 'utf8'),
		'WorkTimes_LW3' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '賃金回数3'),
		'AccountDetailCD4' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 4, 'collate' => 'utf8_general_ci', 'comment' => '手当詳細CD4', 'charset' => 'utf8'),
		'WorkTimes_LW4' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '賃金回数4'),
		'AccountDetailCD5' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 4, 'collate' => 'utf8_general_ci', 'comment' => '手当詳細CD5', 'charset' => 'utf8'),
		'WorkTimes_LW5' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '賃金回数5'),
		'AccountDetailCD6' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 4, 'collate' => 'utf8_general_ci', 'comment' => '手当詳細CD6', 'charset' => 'utf8'),
		'WorkTimes_LW6' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '賃金回数6'),
		'AccountDetailCD7' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 4, 'collate' => 'utf8_general_ci', 'comment' => '手当詳細CD7', 'charset' => 'utf8'),
		'WorkTimes_LW7' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '賃金回数7'),
		'AccountDetailCD8' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 4, 'collate' => 'utf8_general_ci', 'comment' => '手当詳細CD8', 'charset' => 'utf8'),
		'WorkTimes_LW8' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '賃金回数8'),
		'AccountDetailCD9' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 4, 'collate' => 'utf8_general_ci', 'comment' => '手当詳細CD9', 'charset' => 'utf8'),
		'WorkTimes_LW9' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '賃金回数9'),
		'AccountDetailCD10' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 4, 'collate' => 'utf8_general_ci', 'comment' => '手当詳細CD10', 'charset' => 'utf8'),
		'WorkTimes_LW10' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '賃金回数10'),
		'AccountDetailCD11' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 4, 'collate' => 'utf8_general_ci', 'comment' => '手当詳細CD11', 'charset' => 'utf8'),
		'WorkTimes_LW11' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '賃金回数11'),
		'AccountDetailCD12' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 4, 'collate' => 'utf8_general_ci', 'comment' => '手当詳細CD12', 'charset' => 'utf8'),
		'WorkTimes_LW12' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '賃金回数12'),
		'AccountDetailCD13' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 4, 'collate' => 'utf8_general_ci', 'comment' => '手当詳細CD13', 'charset' => 'utf8'),
		'WorkTimes_LW13' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '賃金回数13'),
		'AccountDetailCD14' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 4, 'collate' => 'utf8_general_ci', 'comment' => '手当詳細CD14', 'charset' => 'utf8'),
		'WorkTimes_LW14' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '賃金回数14'),
		'AccountDetailCD15' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 4, 'collate' => 'utf8_general_ci', 'comment' => '手当詳細CD15', 'charset' => 'utf8'),
		'WorkTimes_LW15' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '賃金回数15'),
		'AccountDetailCD16' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 4, 'collate' => 'utf8_general_ci', 'comment' => '手当詳細CD16', 'charset' => 'utf8'),
		'WorkTimes_LW16' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '賃金回数16'),
		'AccountDetailCD17' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 4, 'collate' => 'utf8_general_ci', 'comment' => '手当詳細CD17', 'charset' => 'utf8'),
		'WorkTimes_LW17' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '賃金回数17'),
		'AccountDetailCD18' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 4, 'collate' => 'utf8_general_ci', 'comment' => '手当詳細CD18', 'charset' => 'utf8'),
		'WorkTimes_LW18' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '賃金回数18'),
		'AccountDetailCD19' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 4, 'collate' => 'utf8_general_ci', 'comment' => '手当詳細CD19', 'charset' => 'utf8'),
		'WorkTimes_LW19' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '賃金回数19'),
		'AccountDetailCD20' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 4, 'collate' => 'utf8_general_ci', 'comment' => '手当詳細CD20', 'charset' => 'utf8'),
		'WorkTimes_LW20' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '賃金回数20'),
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
			'AccountDetailCD1' => 'Lo',
			'WorkTimes_LW1' => 1,
			'AccountDetailCD2' => 'Lo',
			'WorkTimes_LW2' => 1,
			'AccountDetailCD3' => 'Lo',
			'WorkTimes_LW3' => 1,
			'AccountDetailCD4' => 'Lo',
			'WorkTimes_LW4' => 1,
			'AccountDetailCD5' => 'Lo',
			'WorkTimes_LW5' => 1,
			'AccountDetailCD6' => 'Lo',
			'WorkTimes_LW6' => 1,
			'AccountDetailCD7' => 'Lo',
			'WorkTimes_LW7' => 1,
			'AccountDetailCD8' => 'Lo',
			'WorkTimes_LW8' => 1,
			'AccountDetailCD9' => 'Lo',
			'WorkTimes_LW9' => 1,
			'AccountDetailCD10' => 'Lo',
			'WorkTimes_LW10' => 1,
			'AccountDetailCD11' => 'Lo',
			'WorkTimes_LW11' => 1,
			'AccountDetailCD12' => 'Lo',
			'WorkTimes_LW12' => 1,
			'AccountDetailCD13' => 'Lo',
			'WorkTimes_LW13' => 1,
			'AccountDetailCD14' => 'Lo',
			'WorkTimes_LW14' => 1,
			'AccountDetailCD15' => 'Lo',
			'WorkTimes_LW15' => 1,
			'AccountDetailCD16' => 'Lo',
			'WorkTimes_LW16' => 1,
			'AccountDetailCD17' => 'Lo',
			'WorkTimes_LW17' => 1,
			'AccountDetailCD18' => 'Lo',
			'WorkTimes_LW18' => 1,
			'AccountDetailCD19' => 'Lo',
			'WorkTimes_LW19' => 1,
			'AccountDetailCD20' => 'Lo',
			'WorkTimes_LW20' => 1,
			'StatusDiv' => 'Lorem ipsum dolor sit ame',
			'registered_date' => '2013-06-17 23:46:55',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:46:55',
			'updated_by' => 'Lorem ip',
			'delete_flg' => 'Lorem ipsum dolor sit ame',
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
