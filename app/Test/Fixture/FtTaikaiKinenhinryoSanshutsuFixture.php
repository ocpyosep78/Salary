<?php
/**
 * FtTaikaiKinenhinryoSanshutsuFixture
 *
 */
class FtTaikaiKinenhinryoSanshutsuFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'ft_taikai_kinenhinryo_sanshutsu';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'EmpNo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 8, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '職員番号', 'charset' => 'utf8'),
		'DepCD' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 8, 'collate' => 'utf8_general_ci', 'comment' => '所属コード', 'charset' => 'utf8'),
		'EmpCategoryDiv' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '職員区分', 'charset' => 'utf8'),
		'ApointDiv' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '任用区分', 'charset' => 'utf8'),
		'RetireDate' => array('type' => 'date', 'null' => false, 'default' => null, 'comment' => '退職日'),
		'EnrollDate' => array('type' => 'date', 'null' => false, 'default' => null, 'comment' => '互助会加入日'),
		'EnrollMonth' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 3, 'comment' => '在会期間(月数)'),
		'CalcEnrollYear' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 2, 'comment' => '在会年数'),
		'ResignTokenAmount' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 7, 'comment' => '記念品料額'),
		'ProcessedFlg' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '処理済フラグ', 'charset' => 'utf8'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'delete_flg' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '削除フラグ', 'charset' => 'utf8'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'EmpNo', 'unique' => 1)
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
			'EmpNo' => 'Lorem ',
			'DepCD' => 'Lorem ',
			'EmpCategoryDiv' => '',
			'ApointDiv' => 'Lorem ipsum dolor sit ame',
			'RetireDate' => '2013-06-17',
			'EnrollDate' => '2013-06-17',
			'EnrollMonth' => 1,
			'CalcEnrollYear' => 1,
			'ResignTokenAmount' => 1,
			'ProcessedFlg' => 'Lorem ipsum dolor sit ame',
			'registered_date' => '2013-06-17 23:20:47',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:20:47',
			'updated_by' => 'Lorem ip',
			'delete_flg' => 'Lorem ipsum dolor sit ame',
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
