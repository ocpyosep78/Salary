<?php
/**
 * JmShokyuKubunFixture
 *
 */
class JmShokyuKubunFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'jm_shokyu_kubun';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'RiseDivMasterID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '昇給区分マスタID'),
		'DivMark' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '区分記号 : 昇給区分毎の号数を定める表', 'charset' => 'utf8'),
		'GradeNo' => array('type' => 'integer', 'null' => false, 'default' => null, 'comment' => '号数'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'update_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'latest_data_flg' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '最新・仮登録フラグ : 最新・仮登録フラグ'),
		'last_key' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '最後キー : 最後キー'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'RiseDivMasterID', 'unique' => 1)
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
			'RiseDivMasterID' => 1,
			'DivMark' => 'Lorem ipsum dolor sit ame',
			'GradeNo' => 1,
			'registered_date' => '2013-06-17 23:24:17',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:24:17',
			'update_by' => 'Lorem ip',
			'latest_data_flg' => 1,
			'last_key' => 1,
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
