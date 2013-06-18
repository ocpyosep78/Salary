<?php
/**
 * QtJidoTeateTaisyoFixture
 *
 */
class QtJidoTeateTaisyoFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'qt_jido_teate_taisyo';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'EmpNo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 8, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '職員番号', 'charset' => 'utf8'),
		'FiscalYear' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '年度'),
		'SeqNo' => array('type' => 'integer', 'null' => false, 'default' => '1', 'key' => 'primary', 'comment' => '連番'),
		'NursingDiv' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '監護の有無', 'charset' => 'utf8'),
		'LivingDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '生計関係', 'charset' => 'utf8'),
		'AllowSubjectDate_Less3Ages' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '手当該当年月日_3歳未満'),
		'AllowSubjectDate_Elementaries' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '手当該当年月日_3歳-小学校終了'),
		'AllowSubjectDate_JuniorHighs' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '手当該当年月日_小学校-中学校終了'),
		'AllowSubjectDate' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '手当非該当年月日'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'delete_flg' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '削除フラグ', 'charset' => 'utf8'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('EmpNo', 'FiscalYear', 'SeqNo'), 'unique' => 1)
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
			'SeqNo' => 1,
			'NursingDiv' => 'Lorem ipsum dolor sit ame',
			'LivingDiv' => 'Lorem ipsum dolor sit ame',
			'AllowSubjectDate_Less3Ages' => '2013-06-17',
			'AllowSubjectDate_Elementaries' => '2013-06-17',
			'AllowSubjectDate_JuniorHighs' => '2013-06-17',
			'AllowSubjectDate' => '2013-06-17',
			'registered_date' => '2013-06-17 23:46:39',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:46:39',
			'updated_by' => 'Lorem ip',
			'delete_flg' => 'Lorem ipsum dolor sit ame',
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
