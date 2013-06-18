<?php
/**
 * JmKakushuShomeishoShijiFixture
 *
 */
class JmKakushuShomeishoShijiFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'jm_kakushu_shomeisho_shiji';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'CertifiedTypeCD' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 2, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '証明書種類CD', 'charset' => 'utf8'),
		'CertifiedName' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 30, 'collate' => 'utf8_general_ci', 'comment' => '証明書種類名', 'charset' => 'utf8'),
		'OutFlgFullName' => array('type' => 'boolean', 'null' => true, 'default' => null, 'comment' => '出力フラグ_氏名'),
		'OutFlgAddress' => array('type' => 'boolean', 'null' => true, 'default' => null, 'comment' => '出力フラグ_住所'),
		'OutFlgRecruitedDate' => array('type' => 'boolean', 'null' => true, 'default' => null, 'comment' => '出力フラグ_採用年月日'),
		'OutFlgRetiredDate' => array('type' => 'boolean', 'null' => true, 'default' => null, 'comment' => '出力フラグ_退職年月日'),
		'OutFlgBirthDate' => array('type' => 'boolean', 'null' => true, 'default' => null, 'comment' => '出力フラグ_生年月日'),
		'OutFlgJobDuty' => array('type' => 'boolean', 'null' => true, 'default' => null, 'comment' => '出力フラグ_職種職務'),
		'OutFlgChildcareLeave' => array('type' => 'boolean', 'null' => true, 'default' => null, 'comment' => '出力フラグ_育児休業取得期間'),
		'OutFlgDivName' => array('type' => 'boolean', 'null' => true, 'default' => null, 'comment' => '出力フラグ_勤務先部署名'),
		'OutFlgAddressTeｌ' => array('type' => 'boolean', 'null' => true, 'default' => null, 'comment' => '出力フラグ_勤務先所在地・電話番号'),
		'OutFlgDaysOfWeek' => array('type' => 'boolean', 'null' => true, 'default' => null, 'comment' => '出力フラグ_週の勤務日数'),
		'OutFlgWorkingStartEndTime' => array('type' => 'boolean', 'null' => true, 'default' => null, 'comment' => '出力フラグ_一日の勤務時間（開始・終了）'),
		'OutFlgWorkingTimesOfDayHour' => array('type' => 'boolean', 'null' => true, 'default' => null, 'comment' => '出力フラグ_一日の勤務時間（時間数）'),
		'OutFlgWorkingTimesOfWeekHour' => array('type' => 'boolean', 'null' => true, 'default' => null, 'comment' => '出力フラグ_週の勤務時間'),
		'OutFlgWorkingDaysOfMonth' => array('type' => 'boolean', 'null' => true, 'default' => null, 'comment' => '出力フラグ_月の勤務日数'),
		'OutFlgHolidayPattern' => array('type' => 'boolean', 'null' => true, 'default' => null, 'comment' => '出力フラグ_定休日'),
		'OutFlgMonthlyAmonut' => array('type' => 'boolean', 'null' => true, 'default' => null, 'comment' => '出力フラグ_給料月額'),
		'OutFlgAllowMonths' => array('type' => 'boolean', 'null' => true, 'default' => null, 'comment' => '出力フラグ_給与支給額月数'),
		'AllowMonths' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '給与支給月数'),
		'OutFlgSocialIns' => array('type' => 'boolean', 'null' => true, 'default' => null, 'comment' => '出力フラグ_社保情報'),
		'CertifiedNote' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'comment' => '証明書文言', 'charset' => 'utf8'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'delete_flg' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '削除フラグ : 削除フラグ', 'charset' => 'utf8'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'CertifiedTypeCD', 'unique' => 1)
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
			'CertifiedTypeCD' => '',
			'CertifiedName' => 'Lorem ipsum dolor sit amet',
			'OutFlgFullName' => 1,
			'OutFlgAddress' => 1,
			'OutFlgRecruitedDate' => 1,
			'OutFlgRetiredDate' => 1,
			'OutFlgBirthDate' => 1,
			'OutFlgJobDuty' => 1,
			'OutFlgChildcareLeave' => 1,
			'OutFlgDivName' => 1,
			'OutFlgAddressTeｌ' => 1,
			'OutFlgDaysOfWeek' => 1,
			'OutFlgWorkingStartEndTime' => 1,
			'OutFlgWorkingTimesOfDayHour' => 1,
			'OutFlgWorkingTimesOfWeekHour' => 1,
			'OutFlgWorkingDaysOfMonth' => 1,
			'OutFlgHolidayPattern' => 1,
			'OutFlgMonthlyAmonut' => 1,
			'OutFlgAllowMonths' => 1,
			'AllowMonths' => 1,
			'OutFlgSocialIns' => 1,
			'CertifiedNote' => 'Lorem ipsum dolor sit amet',
			'registered_date' => '2013-06-17 23:22:43',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:22:43',
			'updated_by' => 'Lorem ip',
			'delete_flg' => 'Lorem ipsum dolor sit ame',
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
