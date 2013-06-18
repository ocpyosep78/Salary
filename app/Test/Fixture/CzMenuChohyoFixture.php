<?php
/**
 * CzMenuChohyoFixture
 *
 */
class CzMenuChohyoFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'cz_menu_chohyo';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'MenuPrintID' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 4, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => 'メニュー帳票ID', 'charset' => 'utf8'),
		'MenuPrintName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 40, 'collate' => 'utf8_general_ci', 'comment' => 'メニュー帳票名称', 'charset' => 'utf8'),
		'DutyDivCD' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '業務区分CD', 'charset' => 'utf8'),
		'DutyCategoryCD' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '業務カテゴリCD', 'charset' => 'utf8'),
		'LinkURL' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 300, 'collate' => 'utf8_general_ci', 'comment' => 'メニュー画面からの遷移先URL', 'charset' => 'utf8'),
		'LinkType' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => 'メニュー画面からの遷移先種別 : 1：単一UI　2：ページフロー', 'charset' => 'utf8'),
		'SortIndex' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 4, 'collate' => 'utf8_general_ci', 'comment' => 'メニュー画面での並び順指定', 'charset' => 'utf8'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'delete_flg' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '削除フラグ : 削除フラグ', 'charset' => 'utf8'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'MenuPrintID', 'unique' => 1)
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
			'MenuPrintID' => 'Lo',
			'MenuPrintName' => 'Lorem ipsum dolor sit amet',
			'DutyDivCD' => 'Lorem ipsum dolor sit ame',
			'DutyCategoryCD' => '',
			'LinkURL' => 'Lorem ipsum dolor sit amet',
			'LinkType' => 'Lorem ipsum dolor sit ame',
			'SortIndex' => 'Lo',
			'registered_date' => '2013-06-17 23:13:15',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:13:15',
			'updated_by' => 'Lorem ip',
			'delete_flg' => 'Lorem ipsum dolor sit ame',
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
