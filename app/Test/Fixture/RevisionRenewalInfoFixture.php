<?php
/**
 * RevisionRenewalInfoFixture
 *
 */
class RevisionRenewalInfoFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'RevisionRenewalInfo';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'RevisionRenewalInfoID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '改定更新情報ID : 改定更新情報ID'),
		'FixSalaryTableRevTypeCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '給料表保障表改定種別CD : 給料表保障表改定種別CD', 'charset' => 'utf8'),
		'RenewalDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '更新区分 : 更新区分', 'charset' => 'utf8'),
		'RevisionFixAmount' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => 10, 'comment' => '改定保障額 : 改定保障額'),
		'RevisionAddAmount' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => 10, 'comment' => '改定加算額 : 改定加算額'),
		'RevisionRenewalDate' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '改定更新年月日 : 改定更新年月日'),
		'FixSalaryEmpInformationID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index', 'comment' => '現給保障対象者情報ID : 現給保障対象者情報ID'),
		'latest_data_div' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 1, 'comment' => '最新データ区分 : 最新データ区分'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_pgid' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録PGID : 登録PGID', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_pgid' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新プログラムID : 更新プログラムID', 'charset' => 'utf8'),
		'delete_flg' => array('type' => 'boolean', 'null' => true, 'default' => null, 'comment' => '削除フラグ : 削除フラグ'),
		'version_no' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => 'バージョンNo : バージョンNo'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'RevisionRenewalInfoID', 'unique' => 1),
			'FixSalaryEmpInformationID' => array('column' => 'FixSalaryEmpInformationID', 'unique' => 0)
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
			'RevisionRenewalInfoID' => 1,
			'FixSalaryTableRevTypeCD' => '',
			'RenewalDiv' => '',
			'RevisionFixAmount' => 1,
			'RevisionAddAmount' => 1,
			'RevisionRenewalDate' => '2013-06-17',
			'FixSalaryEmpInformationID' => 1,
			'latest_data_div' => 1,
			'registered_date' => '2013-06-17 23:09:14',
			'registered_pgid' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:09:14',
			'updated_pgid' => 'Lorem ip',
			'delete_flg' => 1,
			'version_no' => 1
		),
	);

}
