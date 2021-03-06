<?php
/**
 * CzHakensakiFixture
 *
 */
class CzHakensakiFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'cz_hakensaki';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'DispatchAreaCD' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 2, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '派遣先コード', 'charset' => 'utf8'),
		'DispatchAreaName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => '派遣先名称', 'charset' => 'utf8'),
		'DispatchAreaShortName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '派遣先略称', 'charset' => 'utf8'),
		'DispatchAreaOldName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => '変更前名称', 'charset' => 'utf8'),
		'UneffectiveDate' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '適用終了年月日'),
		'Remarks' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => '備考', 'charset' => 'utf8'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'delete_flg' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '削除フラグ : 削除フラグ', 'charset' => 'utf8'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'DispatchAreaCD', 'unique' => 1),
			'DispatchAreaCD' => array('column' => 'DispatchAreaCD', 'unique' => 1)
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
			'DispatchAreaCD' => '',
			'DispatchAreaName' => 'Lorem ipsum dolor sit amet',
			'DispatchAreaShortName' => 'Lorem ip',
			'DispatchAreaOldName' => 'Lorem ipsum dolor sit amet',
			'UneffectiveDate' => '2013-06-17',
			'Remarks' => 'Lorem ipsum dolor sit amet',
			'registered_date' => '2013-06-17 23:11:50',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:11:50',
			'updated_by' => 'Lorem ip',
			'delete_flg' => 'Lorem ipsum dolor sit ame',
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
