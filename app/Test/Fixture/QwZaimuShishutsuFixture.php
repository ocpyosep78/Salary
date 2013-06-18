<?php
/**
 * QwZaimuShishutsuFixture
 *
 */
class QwZaimuShishutsuFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'qw_zaimu_shishutsu';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'PaidYM' => array('type' => 'date', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '支給月日'),
		'EmpNo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 8, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '職員番号', 'charset' => 'utf8'),
		'PaidDiv' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 2, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '支給区分', 'charset' => 'utf8'),
		'PayerDiv' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 2, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '給与支払者区分', 'charset' => 'utf8'),
		'EmpDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '職員区分', 'charset' => 'utf8'),
		'JobDutyCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 3, 'collate' => 'utf8_general_ci', 'comment' => '職種職務CD', 'charset' => 'utf8'),
		'DepCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 8, 'collate' => 'utf8_general_ci', 'comment' => '所属CD', 'charset' => 'utf8'),
		'AccountCDDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '科目CD区分 1:給料報酬科目CD 2:児童手当科目CD 3:超過勤務科目CD 4:休日給科目CD 9:その他科目CD', 'charset' => 'utf8'),
		'AccountCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 12, 'collate' => 'utf8_general_ci', 'comment' => '科目CD', 'charset' => 'utf8'),
		'AfterAccountCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 12, 'collate' => 'utf8_general_ci', 'comment' => '変換後科目CD', 'charset' => 'utf8'),
		'AllowanceCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 6, 'collate' => 'utf8_general_ci', 'comment' => '手当CD', 'charset' => 'utf8'),
		'AllowDetailCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 4, 'collate' => 'utf8_general_ci', 'comment' => '手当詳細CD', 'charset' => 'utf8'),
		'Amounts' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '金額'),
		'EmpNum' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '人数'),
		'Comments' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 200, 'collate' => 'utf8_general_ci', 'comment' => 'コメント', 'charset' => 'utf8'),
		'ErrFLG' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => 'エラーフラグ 0:OK 1:NG(科目CD不整合) 2:NG(所属CD不整合) 3:NG(科目CDマスターなし)', 'charset' => 'utf8'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'delete_flg' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '削除フラグ : 削除フラグ', 'charset' => 'utf8'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('PaidYM', 'EmpNo', 'PaidDiv', 'PayerDiv'), 'unique' => 1)
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
			'PaidYM' => '2013-06-17',
			'EmpNo' => 'Lorem ',
			'PaidDiv' => '',
			'PayerDiv' => '',
			'EmpDiv' => '',
			'JobDutyCD' => 'L',
			'DepCD' => 'Lorem ',
			'AccountCDDiv' => 'Lorem ipsum dolor sit ame',
			'AccountCD' => 'Lorem ipsu',
			'AfterAccountCD' => 'Lorem ipsu',
			'AllowanceCD' => 'Lore',
			'AllowDetailCD' => 'Lo',
			'Amounts' => 1,
			'EmpNum' => 1,
			'Comments' => 'Lorem ipsum dolor sit amet',
			'ErrFLG' => 'Lorem ipsum dolor sit ame',
			'registered_date' => '2013-06-17 23:58:47',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:58:47',
			'updated_by' => 'Lorem ip',
			'delete_flg' => 'Lorem ipsum dolor sit ame',
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
