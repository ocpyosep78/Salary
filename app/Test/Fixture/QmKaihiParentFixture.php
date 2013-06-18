<?php
/**
 * QmKaihiParentFixture
 *
 */
class QmKaihiParentFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'qm_kaihi_parent';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'RevYM' => array('type' => 'date', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '改定年月'),
		'PartyTypeDiv' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 2, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '団体種別 : １：特別区互助組合　２：人材支援事業団　３：足立区職員互助会　４：東京都教職員互助会　５：足立区教職員互助会', 'charset' => 'utf8'),
		'CalcurationDiv' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '算出方法区分 : １：定額　２：定率', 'charset' => 'utf8'),
		'FixedAmo' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'comment' => '定額'),
		'FixedRate' => array('type' => 'float', 'null' => false, 'default' => '0.000', 'length' => '6,3', 'comment' => '定率'),
		'Due_IssueDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '会費発令給区分 : 1：会費　2：発令給', 'charset' => 'utf8'),
		'DueUpperLimit' => array('type' => 'float', 'null' => true, 'default' => '0', 'length' => 10, 'comment' => '会費上限額'),
		'LimitAmo_Order' => array('type' => 'float', 'null' => true, 'default' => '0', 'length' => 10, 'comment' => '発令給上限額'),
		'TreatUnderENDiv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '端数処理区分 : １：切捨て　２：切上げ　３：四捨五入', 'charset' => 'utf8'),
		'AddAllowFlg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '加算額有無区分', 'charset' => 'utf8'),
		'AddAmount' => array('type' => 'float', 'null' => true, 'default' => '0', 'length' => 10, 'comment' => '加算額'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'delete_flg' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '削除フラグ : 削除フラグ', 'charset' => 'utf8'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('RevYM', 'PartyTypeDiv', 'CalcurationDiv'), 'unique' => 1)
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
			'PartyTypeDiv' => '',
			'CalcurationDiv' => 'Lorem ipsum dolor sit ame',
			'FixedAmo' => 1,
			'FixedRate' => 1,
			'Due_IssueDiv' => 'Lorem ipsum dolor sit ame',
			'DueUpperLimit' => 1,
			'LimitAmo_Order' => 1,
			'TreatUnderENDiv' => 'Lorem ipsum dolor sit ame',
			'AddAllowFlg' => 'Lorem ipsum dolor sit ame',
			'AddAmount' => 1,
			'registered_date' => '2013-06-17 23:34:23',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:34:23',
			'updated_by' => 'Lorem ip',
			'delete_flg' => 'Lorem ipsum dolor sit ame',
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17'
		),
	);

}
