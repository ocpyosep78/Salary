<?php
/**
 * JtKihonKazokuZeikojoFixture
 *
 */
class JtKihonKazokuZeikojoFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'jt_kihon_kazoku_zeikojo';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'PersonFamilyTaxDeductID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '家族情報税控除ID'),
		'EmpNo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 8, 'collate' => 'utf8_general_ci', 'comment' => '職員番号', 'charset' => 'utf8'),
		'SeqNo' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '連番'),
		'HistNo' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '履歴番号'),
		'TaxDeductionStartDate' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '税控除適用期間開始年月日'),
		'TaxDeductionEndDate' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '税控除適用期間終了年月日'),
		'TaxDeductionHandicapDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '税控除障害区分', 'charset' => 'utf8'),
		'TaxDeductionHandicapGrade' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => '税控除障害等級', 'charset' => 'utf8'),
		'PersonFamilyInfoID' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '家族情報ID'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'latest_flg' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '最新・仮更新フラグ : 最新・仮更新フラグ'),
		'last_key' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '最後キー : 最後キー'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日 '),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'PersonFamilyTaxDeductID', 'unique' => 1)
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
			'PersonFamilyTaxDeductID' => 1,
			'EmpNo' => 'Lorem ',
			'SeqNo' => 1,
			'HistNo' => 1,
			'TaxDeductionStartDate' => '2013-06-17',
			'TaxDeductionEndDate' => '2013-06-17',
			'TaxDeductionHandicapDiv' => 'Lorem ipsum dolor sit ame',
			'TaxDeductionHandicapGrade' => 'Lorem ipsum dolor sit amet',
			'PersonFamilyInfoID' => 1,
			'registered_date' => '2013-06-17 23:25:42',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:25:42',
			'updated_by' => 'Lorem ip',
			'latest_flg' => 1,
			'last_key' => 1,
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
