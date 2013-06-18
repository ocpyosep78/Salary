<?php
/**
 * FmShokuinryoHeyaFixture
 *
 */
class FmShokuinryoHeyaFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'fm_shokuinryo_heya';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'DormitoryRoomMasterID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '職員寮部屋マスタID'),
		'FiscalYear' => array('type' => 'integer', 'null' => false, 'default' => null, 'comment' => '年度'),
		'DormitoryCD' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '寮CD', 'charset' => 'utf8'),
		'RoomNo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 5, 'collate' => 'utf8_general_ci', 'comment' => '部屋番号', 'charset' => 'utf8'),
		'RoomType' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '部屋タイプ', 'charset' => 'utf8'),
		'RoomCharge' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '使用料'),
		'WaterCharge' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '水道代'),
		'TotalRoomCharge' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '部屋代合計'),
		'Remarks' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 200, 'collate' => 'utf8_general_ci', 'comment' => '備考', 'charset' => 'utf8'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'latest_data_flg' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '最新・仮登録フラグ : 最新・仮登録フラグ'),
		'last_key' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '最後キー : 最後キー'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'DormitoryRoomMasterID', 'unique' => 1)
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
			'DormitoryRoomMasterID' => 1,
			'FiscalYear' => 1,
			'DormitoryCD' => 'Lorem ip',
			'RoomNo' => 'Lor',
			'RoomType' => 'Lorem ipsum dolor sit ame',
			'RoomCharge' => 1,
			'WaterCharge' => 1,
			'TotalRoomCharge' => 1,
			'Remarks' => 'Lorem ipsum dolor sit amet',
			'registered_date' => '2013-06-17 23:16:38',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:16:38',
			'updated_by' => 'Lorem ip',
			'latest_data_flg' => 1,
			'last_key' => 1,
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
