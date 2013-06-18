<?php
/**
 * JwKinmuShosaiFixture
 *
 */
class JwKinmuShosaiFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'jw_kinmu_shosai';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'EmpNo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 8, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '職員番号', 'charset' => 'utf8'),
		'FiscalYear' => array('type' => 'integer', 'null' => false, 'default' => null, 'comment' => '年度'),
		'CalMonth' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '月'),
		'CalDay' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '日'),
		'CalYear' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '暦年'),
		'WorkingPatternCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '勤務形態CD', 'charset' => 'utf8'),
		'HolidayPatternCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '休日形態CD', 'charset' => 'utf8'),
		'RequestNo1' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 8, 'collate' => 'utf8_general_ci', 'comment' => '申請番号１', 'charset' => 'utf8'),
		'ReqReasonCD1' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 4, 'collate' => 'utf8_general_ci', 'comment' => '申請事由CD１', 'charset' => 'utf8'),
		'RequestHours1' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '申請時間数１'),
		'RequestUnit1' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '申請単位１'),
		'RequestNo2' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 8, 'collate' => 'utf8_general_ci', 'comment' => '申請番号２', 'charset' => 'utf8'),
		'ReqReasonCD2' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 4, 'collate' => 'utf8_general_ci', 'comment' => '申請事由CD２', 'charset' => 'utf8'),
		'RequestHours2' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '申請時間数２'),
		'RequestUnit2' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '申請単位２'),
		'CreateDate' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '作成日時'),
		'UpdateDate' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時'),
		'UpdateBy' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 8, 'collate' => 'utf8_general_ci', 'comment' => '更新者ID', 'charset' => 'utf8'),
		'ExclusiveCounter' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '排他ｶｳﾝﾀ'),
		'RecNum' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => 'レコード番号'),
		'ProcStat' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '処理状態'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'delete_flg' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '削除フラグ : 削除フラグ', 'charset' => 'utf8'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('EmpNo', 'CalMonth', 'CalDay', 'CalYear'), 'unique' => 1)
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
			'FiscalYear' => 1,
			'CalMonth' => 1,
			'CalDay' => 1,
			'CalYear' => 1,
			'WorkingPatternCD' => '',
			'HolidayPatternCD' => '',
			'RequestNo1' => 'Lorem ',
			'ReqReasonCD1' => 'Lo',
			'RequestHours1' => 1,
			'RequestUnit1' => 1,
			'RequestNo2' => 'Lorem ',
			'ReqReasonCD2' => 'Lo',
			'RequestHours2' => 1,
			'RequestUnit2' => 1,
			'CreateDate' => '2013-06-17 23:31:47',
			'UpdateDate' => '2013-06-17 23:31:47',
			'UpdateBy' => 'Lorem ',
			'ExclusiveCounter' => 1,
			'RecNum' => 1,
			'ProcStat' => 1,
			'registered_date' => '2013-06-17 23:31:47',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:31:47',
			'updated_by' => 'Lorem ip',
			'delete_flg' => 'Lorem ipsum dolor sit ame',
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
