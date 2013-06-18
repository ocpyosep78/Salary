<?php
/**
 * FmShokuinryoFixture
 *
 */
class FmShokuinryoFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'fm_shokuinryo';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'DormitoryCD' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '寮CD', 'charset' => 'utf8'),
		'DormitoryName' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => '寮正式名称', 'charset' => 'utf8'),
		'DormitorySName' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '寮略称', 'charset' => 'utf8'),
		'DormitoryAddress' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => '寮所在地', 'charset' => 'utf8'),
		'NumberofRooms' => array('type' => 'float', 'null' => false, 'default' => null, 'length' => 3, 'comment' => '部屋数'),
		'Remarks' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 500, 'collate' => 'utf8_general_ci', 'comment' => '備考', 'charset' => 'utf8'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'delete_flg' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '削除フラグ : 削除フラグ', 'charset' => 'utf8'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'DormitoryCD', 'unique' => 1)
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
			'DormitoryCD' => 'Lorem ip',
			'DormitoryName' => 'Lorem ipsum dolor sit amet',
			'DormitorySName' => 'Lorem ipsum dolor ',
			'DormitoryAddress' => 'Lorem ipsum dolor sit amet',
			'NumberofRooms' => 1,
			'Remarks' => 'Lorem ipsum dolor sit amet',
			'registered_date' => '2013-06-17 23:16:30',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:16:30',
			'updated_by' => 'Lorem ip',
			'delete_flg' => 'Lorem ipsum dolor sit ame',
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
