<?php
/**
 * FmPointChoseiritsuFixture
 *
 */
class FmPointChoseiritsuFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'fm_point_choseiritsu';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'FiscalYear' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '年度'),
		'AdjCoef_May' => array('type' => 'float', 'null' => false, 'default' => '0.00', 'length' => '3,2', 'comment' => '５月調整率'),
		'AdjCoef_Jun' => array('type' => 'float', 'null' => false, 'default' => '0.00', 'length' => '3,2', 'comment' => '６月調整率'),
		'AdjCoef_July' => array('type' => 'float', 'null' => false, 'default' => '0.00', 'length' => '3,2', 'comment' => '７月調整率'),
		'AdjCoef_Aug' => array('type' => 'float', 'null' => false, 'default' => '0.00', 'length' => '3,2', 'comment' => '８月調整率'),
		'AdjCoef_Sep' => array('type' => 'float', 'null' => false, 'default' => '0.00', 'length' => '3,2', 'comment' => '９月調整率'),
		'AdjCoef_Oct' => array('type' => 'float', 'null' => false, 'default' => '0.00', 'length' => '3,2', 'comment' => '１０月調整率'),
		'AdjCoef_Nov' => array('type' => 'float', 'null' => false, 'default' => '0.00', 'length' => '3,2', 'comment' => '１１月調整率'),
		'AdjCoef_Dec' => array('type' => 'float', 'null' => false, 'default' => '0.00', 'length' => '3,2', 'comment' => '１２月調整率'),
		'AdjCoef_Jan' => array('type' => 'float', 'null' => false, 'default' => '0.00', 'length' => '3,2', 'comment' => '１月調整率'),
		'AdjCoef_Feb' => array('type' => 'float', 'null' => false, 'default' => '0.00', 'length' => '3,2', 'comment' => '２月調整率'),
		'AdjCoef_Mar' => array('type' => 'float', 'null' => false, 'default' => '0.00', 'length' => '3,2', 'comment' => '３月調整率'),
		'ProcessedDate' => array('type' => 'float', 'null' => false, 'default' => null, 'length' => '3,2', 'comment' => '集計処理実行日'),
		'ProcessedPaidMonth' => array('type' => 'float', 'null' => false, 'default' => null, 'length' => '3,2', 'comment' => '集計処理済支給月'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'delete_flg' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '削除フラグ : 削除フラグ', 'charset' => 'utf8'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'FiscalYear', 'unique' => 1)
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
			'FiscalYear' => 1,
			'AdjCoef_May' => 1,
			'AdjCoef_Jun' => 1,
			'AdjCoef_July' => 1,
			'AdjCoef_Aug' => 1,
			'AdjCoef_Sep' => 1,
			'AdjCoef_Oct' => 1,
			'AdjCoef_Nov' => 1,
			'AdjCoef_Dec' => 1,
			'AdjCoef_Jan' => 1,
			'AdjCoef_Feb' => 1,
			'AdjCoef_Mar' => 1,
			'ProcessedDate' => 1,
			'ProcessedPaidMonth' => 1,
			'registered_date' => '2013-06-17 23:16:14',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:16:14',
			'updated_by' => 'Lorem ip',
			'delete_flg' => 'Lorem ipsum dolor sit ame',
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
