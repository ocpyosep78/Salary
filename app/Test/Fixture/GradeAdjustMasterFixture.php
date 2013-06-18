<?php
/**
 * GradeAdjustMasterFixture
 *
 */
class GradeAdjustMasterFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'GradeAdjustMaster';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => 'ID : ID'),
		'AdhustName' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '号数調整名称 : 号数調整名称', 'charset' => 'utf8'),
		'CarryOverFlg' => array('type' => 'boolean', 'null' => false, 'default' => null, 'comment' => '持越有無FLG : 持越有無FLG'),
		'Priority' => array('type' => 'integer', 'null' => true, 'default' => '0', 'comment' => '優先順位 : 優先順位'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'update_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'latest_data_flg' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 1, 'comment' => '最新・仮登録フラグ : 最新・仮登録フラグ'),
		'last_key' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '最後キー : 最後キー'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'ID', 'unique' => 1)
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
			'ID' => 1,
			'AdhustName' => 'Lorem ip',
			'CarryOverFlg' => 1,
			'Priority' => 1,
			'registered_date' => '2013-06-17 23:05:30',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:05:30',
			'update_by' => 'Lorem ip',
			'latest_data_flg' => 1,
			'last_key' => 1,
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
