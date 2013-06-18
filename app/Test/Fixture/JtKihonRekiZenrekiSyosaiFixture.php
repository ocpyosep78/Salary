<?php
/**
 * JtKihonRekiZenrekiSyosaiFixture
 *
 */
class JtKihonRekiZenrekiSyosaiFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'jt_kihon_reki_zenreki_syosai';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'EmpPastHistDetailID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '前歴詳細ID'),
		'EmpNo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 8, 'collate' => 'utf8_general_ci', 'comment' => '職員番号', 'charset' => 'utf8'),
		'SeqNo' => array('type' => 'integer', 'null' => false, 'default' => '1', 'comment' => '連番'),
		'PastHistCD' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 3, 'collate' => 'utf8_general_ci', 'comment' => '前歴使用業務CD', 'charset' => 'utf8'),
		'PastHistFlg' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '前歴判定済みフラグ', 'charset' => 'utf8'),
		'PastHistAdd_ConvRate' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '換算割合'),
		'PastHistAdd_ConvYears' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '換算年数'),
		'PastHistAdd_ConvMonths' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '換算月数'),
		'PastHistAdd_ConvDays' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '換算日数'),
		'EmpPastHistID' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '前歴ID'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'latest_flg' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '最新・仮登録フラグ : 最新・仮登録フラグ'),
		'last_key' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '最後キー : 最後キー'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'EmpPastHistDetailID', 'unique' => 1)
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
			'EmpPastHistDetailID' => 1,
			'EmpNo' => 'Lorem ',
			'SeqNo' => 1,
			'PastHistCD' => 'L',
			'PastHistFlg' => 'Lorem ipsum dolor sit ame',
			'PastHistAdd_ConvRate' => 1,
			'PastHistAdd_ConvYears' => 1,
			'PastHistAdd_ConvMonths' => 1,
			'PastHistAdd_ConvDays' => 1,
			'EmpPastHistID' => 1,
			'registered_date' => '2013-06-17 23:28:02',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:28:02',
			'updated_by' => 'Lorem ip',
			'latest_flg' => 1,
			'last_key' => 1,
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
