<?php
/**
 * QmTeatebetsuShishutsukamokuFixture
 *
 */
class QmTeatebetsuShishutsukamokuFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'qm_teatebetsu_shishutsukamoku';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'RevYM' => array('type' => 'date', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '改定年月'),
		'AllowanceCD' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 6, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '手当CD', 'charset' => 'utf8'),
		'SalaryAccountUsageFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '給料科目使用フラグ', 'charset' => 'utf8'),
		'OverTimeWorkAccountUsageFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '超勤科目使用フラグ', 'charset' => 'utf8'),
		'HolidaySalaryAccountUsageFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '休日給科目使用フラグ', 'charset' => 'utf8'),
		'ChildAllowAccountUsageFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '児童手当科目使用フラグ', 'charset' => 'utf8'),
		'OtherAccountUsageFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => 'その他の科目使用フラグ', 'charset' => 'utf8'),
		'OtherAccountCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 12, 'collate' => 'utf8_general_ci', 'comment' => 'その他の場合の具体的科目CD', 'charset' => 'utf8'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'delete_flg' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '削除フラグ : 削除フラグ', 'charset' => 'utf8'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('RevYM', 'AllowanceCD'), 'unique' => 1)
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
			'RevYM' => '2013-06-17',
			'AllowanceCD' => 'Lore',
			'SalaryAccountUsageFlg' => 'Lorem ipsum dolor sit ame',
			'OverTimeWorkAccountUsageFlg' => 'Lorem ipsum dolor sit ame',
			'HolidaySalaryAccountUsageFlg' => 'Lorem ipsum dolor sit ame',
			'ChildAllowAccountUsageFlg' => 'Lorem ipsum dolor sit ame',
			'OtherAccountUsageFlg' => 'Lorem ipsum dolor sit ame',
			'OtherAccountCD' => 'Lorem ipsu',
			'registered_date' => '2013-06-17 23:44:26',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:44:26',
			'updated_by' => 'Lorem ip',
			'delete_flg' => 'Lorem ipsum dolor sit ame',
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
