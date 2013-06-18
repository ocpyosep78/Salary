<?php
/**
 * QmSyakaiHokenFixture
 *
 */
class QmSyakaiHokenFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'qm_syakai_hoken';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'RevYM' => array('type' => 'date', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '改定年月'),
		'WelfarePens_PersonShare' => array('type' => 'float', 'null' => true, 'default' => '0.000', 'length' => '5,3', 'comment' => '厚生年金本人負担分'),
		'Welfare_All' => array('type' => 'float', 'null' => true, 'default' => '0.000', 'length' => '5,3', 'comment' => '厚生年金全体分'),
		'HealthIns_PersonShare' => array('type' => 'float', 'null' => true, 'default' => '0.000', 'length' => '5,3', 'comment' => '健康保険本人負担分'),
		'HealthInsTotal' => array('type' => 'float', 'null' => true, 'default' => '0.000', 'length' => '5,3', 'comment' => '健康保険全体分'),
		'NursingIns_PersonShare' => array('type' => 'float', 'null' => true, 'default' => '0.000', 'length' => '5,3', 'comment' => '介護保険本人負担分'),
		'NursingIns_Total' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '5,3', 'comment' => '介護保険全体分'),
		'ChildAllow_Contribution' => array('type' => 'float', 'null' => true, 'default' => '0.000', 'length' => '5,3', 'comment' => '児童手当拠出金'),
		'SI_UnderENTreatDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '社保端数処理区分 : 1：切捨て　2：切上げ　3：四捨五入', 'charset' => 'utf8'),
		'EmploymentIns_PersonShare' => array('type' => 'float', 'null' => true, 'default' => '0.000', 'length' => '5,3', 'comment' => '雇用保険本人負担分'),
		'EmploymentIns_EmployerShare' => array('type' => 'float', 'null' => true, 'default' => '0.000', 'length' => '5,3', 'comment' => '雇用保険事業主負担分'),
		'WorkmenIns_UnderENTreatDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '労保端数処理区分 : 1：切捨て　2：切上げ　3：四捨五入', 'charset' => 'utf8'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'delete_flg' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '削除フラグ : 削除フラグ', 'charset' => 'utf8'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'RevYM', 'unique' => 1)
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
			'WelfarePens_PersonShare' => 1,
			'Welfare_All' => 1,
			'HealthIns_PersonShare' => 1,
			'HealthInsTotal' => 1,
			'NursingIns_PersonShare' => 1,
			'NursingIns_Total' => 1,
			'ChildAllow_Contribution' => 1,
			'SI_UnderENTreatDiv' => 'Lorem ipsum dolor sit ame',
			'EmploymentIns_PersonShare' => 1,
			'EmploymentIns_EmployerShare' => 1,
			'WorkmenIns_UnderENTreatDiv' => 'Lorem ipsum dolor sit ame',
			'registered_date' => '2013-06-17 23:40:54',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:40:54',
			'updated_by' => 'Lorem ip',
			'delete_flg' => 'Lorem ipsum dolor sit ame',
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
