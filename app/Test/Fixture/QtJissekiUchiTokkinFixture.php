<?php
/**
 * QtJissekiUchiTokkinFixture
 *
 */
class QtJissekiUchiTokkinFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'qt_jisseki_uchi_tokkin';

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
		'WorkTiimes_UQ1' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '特勤回数1'),
		'AllowDetailCD2' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 4, 'collate' => 'utf8_general_ci', 'comment' => '手当詳細CD2', 'charset' => 'utf8'),
		'WorkTiimes_UQ2' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '特勤回数2'),
		'AllowDetailCD3' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 4, 'collate' => 'utf8_general_ci', 'comment' => '手当詳細CD3', 'charset' => 'utf8'),
		'WorkTiimes_UQ3' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '特勤回数3'),
		'AllowDetailCD4' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 4, 'collate' => 'utf8_general_ci', 'comment' => '手当詳細CD4', 'charset' => 'utf8'),
		'WorkTiimes_UQ4' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '特勤回数4'),
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
			'WorkTiimes_UQ1' => 1,
			'AllowDetailCD2' => 'Lo',
			'WorkTiimes_UQ2' => 1,
			'AllowDetailCD3' => 'Lo',
			'WorkTiimes_UQ3' => 1,
			'AllowDetailCD4' => 'Lo',
			'WorkTiimes_UQ4' => 1,
			'StatusDiv' => 'Lorem ipsum dolor sit ame',
			'registered_date' => '2013-06-17 23:47:58',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:47:58',
			'updated_by' => 'Lorem ip',
			'delete_flg' => 'Lorem ipsum dolor sit ame',
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
