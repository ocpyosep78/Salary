<?php
/**
 * JtNafudaCtrlFixture
 *
 */
class JtNafudaCtrlFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'jt_nafuda_ctrl';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'NamePlateCtrlID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '名札コントロールID'),
		'CommonFlg' => array('type' => 'boolean', 'null' => true, 'default' => null, 'comment' => '一般フラグ'),
		'MgrFlg' => array('type' => 'boolean', 'null' => true, 'default' => null, 'comment' => '管理職フラグ'),
		'ReapoReRecFlg' => array('type' => 'boolean', 'null' => true, 'default' => null, 'comment' => '再任用・再雇用フラグ'),
		'SpecialityTempFlg' => array('type' => 'boolean', 'null' => true, 'default' => null, 'comment' => '専門非常勤フラグ'),
		'OrderDate_NamePlate' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '名札発令年月日'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'delete_flg' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '削除フラグ : 削除フラグ', 'charset' => 'utf8'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'NamePlateCtrlID', 'unique' => 1)
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
			'NamePlateCtrlID' => 1,
			'CommonFlg' => 1,
			'MgrFlg' => 1,
			'ReapoReRecFlg' => 1,
			'SpecialityTempFlg' => 1,
			'OrderDate_NamePlate' => '2013-06-17',
			'registered_date' => '2013-06-17 23:28:56',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:28:56',
			'updated_by' => 'Lorem ip',
			'delete_flg' => 'Lorem ipsum dolor sit ame',
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
