<?php
/**
 * JtKihonKazokuJidoteateFixture
 *
 */
class JtKihonKazokuJidoteateFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'jt_kihon_kazoku_jidoteate';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'PersonFamilyChildAllowID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '家族情報児童手当ID'),
		'EmpNo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 8, 'collate' => 'utf8_general_ci', 'comment' => '職員番号', 'charset' => 'utf8'),
		'SeqNo' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '連番'),
		'HistNo' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '履歴番号'),
		'ChildAllowStartDate' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '児童手当適用期間開始年月日'),
		'ChildAllowEndDate' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '児童手当適用期間終了年月日'),
		'ChildAllowCondStartDate' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '要件児童開始年月日'),
		'ChildAllowCondEndDate' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '要件児童終了年月日'),
		'PersonFamilyInfoID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index', 'comment' => '家族情報ID'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'latest_flg' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '最新・仮登録フラグ : 最新・仮登録フラグ'),
		'last_key' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '最後キー : 最後キー'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'PersonFamilyChildAllowID', 'unique' => 1),
			'fk_jt_kihon_kazoku_jidoteate_jt_kihon_kazoku' => array('column' => 'PersonFamilyInfoID', 'unique' => 0)
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
			'PersonFamilyChildAllowID' => 1,
			'EmpNo' => 'Lorem ',
			'SeqNo' => 1,
			'HistNo' => 1,
			'ChildAllowStartDate' => '2013-06-17',
			'ChildAllowEndDate' => '2013-06-17',
			'ChildAllowCondStartDate' => '2013-06-17',
			'ChildAllowCondEndDate' => '2013-06-17',
			'PersonFamilyInfoID' => 1,
			'registered_date' => '2013-06-17 23:25:34',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:25:34',
			'updated_by' => 'Lorem ip',
			'latest_flg' => 1,
			'last_key' => 1,
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
