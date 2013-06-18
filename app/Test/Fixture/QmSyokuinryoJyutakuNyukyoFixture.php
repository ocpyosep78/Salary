<?php
/**
 * QmSyokuinryoJyutakuNyukyoFixture
 *
 */
class QmSyokuinryoJyutakuNyukyoFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'qm_syokuinryo_jyutaku_nyukyo';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'DormitoryCD' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '寮CD', 'charset' => 'utf8'),
		'Name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => '名称', 'charset' => 'utf8'),
		'RoomNo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 4, 'collate' => 'utf8_general_ci', 'comment' => '部屋番号', 'charset' => 'utf8'),
		'DormitoryEntryStartDate' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '入居開始年月日'),
		'DormitoryExitDate' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '退寮年月日 '),
		'RoomKeyDiv' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '鍵の有無', 'charset' => 'utf8'),
		'EmpNo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 8, 'collate' => 'utf8_general_ci', 'comment' => '職員番号', 'charset' => 'utf8'),
		'FullName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => '氏名', 'charset' => 'utf8'),
		'DepCD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 8, 'collate' => 'utf8_general_ci', 'comment' => '所属CD', 'charset' => 'utf8'),
		'DepContactAddress' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '所属連絡先', 'charset' => 'utf8'),
		'BirthDate' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '生年月日'),
		'DormitoryEntryDate' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '入居年月日'),
		'PlannedDormitoryExitDate' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '退寮予定日'),
		'Emeregencyrenrakusaki' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '緊急連絡先', 'charset' => 'utf8'),
		'ResidencyDiv' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '居住区分：1入居中、0退去済み', 'charset' => 'utf8'),
		'ExpirationDate' => array('type' => 'date', 'null' => false, 'default' => null, 'comment' => '入居期限満了日'),
		'Remarks' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 200, 'collate' => 'utf8_general_ci', 'comment' => '備考', 'charset' => 'utf8'),
		'registered_by' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '登録者 : 登録者', 'charset' => 'utf8'),
		'updated_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時 : 更新日時'),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '更新者 : 更新者', 'charset' => 'utf8'),
		'delete_flg' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '削除フラグ : 削除フラグ', 'charset' => 'utf8'),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '開始年月日 : 開始年月日'),
		'expired_date' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '終了年月日 : 終了年月日'),
		'registered_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => '登録日時 : 登録日時'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'DormitoryCD', 'unique' => 1)
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
			'DormitoryCD' => 'Lorem ip',
			'Name' => 'Lorem ipsum dolor sit amet',
			'RoomNo' => 'Lo',
			'DormitoryEntryStartDate' => '2013-06-17',
			'DormitoryExitDate' => '2013-06-17',
			'RoomKeyDiv' => 'Lorem ipsum dolor sit ame',
			'EmpNo' => 'Lorem ',
			'FullName' => 'Lorem ipsum dolor sit amet',
			'DepCD' => 'Lorem ',
			'DepContactAddress' => 'Lorem ip',
			'BirthDate' => '2013-06-17',
			'DormitoryEntryDate' => '2013-06-17',
			'PlannedDormitoryExitDate' => '2013-06-17',
			'Emeregencyrenrakusaki' => 'Lorem ip',
			'ResidencyDiv' => 'Lorem ipsum dolor sit ame',
			'ExpirationDate' => '2013-06-17',
			'Remarks' => 'Lorem ipsum dolor sit amet',
			'registered_by' => 'Lorem ip',
			'updated_date' => '2013-06-17 23:41:02',
			'updated_by' => 'Lorem ip',
			'delete_flg' => 'Lorem ipsum dolor sit ame',
			'effective_date' => '2013-06-17',
			'expired_date' => '2013-06-17',
			'registered_date' => '2013-06-17 23:41:02'
		),
	);

}
