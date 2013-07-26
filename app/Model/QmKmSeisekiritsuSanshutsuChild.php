<?php
App::uses('AppModel', 'Model');
/**
 * QmKmSeisekiritsuSanshutsuChild Model
 *
 */
class QmKmSeisekiritsuSanshutsuChild extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'qm_km_seisekiritsu_sanshutsu_child';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'RevYM';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'GradeJudgeDiv' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'RecordGrade' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'RatingLvName' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'registered_date' => array(
			'datetime' => array(
				'rule' => array('datetime'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'registered_by' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'delete_flg' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	/**
	 * 正当支給データ：成績率算出方法マスタ（子）のレコードを取得する
	 *
	 * @param $paidYm   支給年月
	 * @param $gradeJudgeDiv    成績判定区分
	 * @param $recordGrade 成績段階
	 * @return 検索結果レコード
	 */
	public function findSeisekiritsuSanshutsuChild($paidYm, $gradeJudgeDiv, $recordGrade) {

		$this->recursive = -1;

		// 検索条件の設定
		$searchCondition = array(
				'RevYM <='      => date($paidYm),  // 改定年月:支給年月の直近過去最新
				'GradeJudgeDiv' => $gradeJudgeDiv, // 成績判定区分
				'RecordGrade'   => $recordGrade,   // 成績段階
				'delete_flg'    => '0',            // 削除フラグ
		);

		// 検索パラメータの設定
		$params = array(
				'conditions' => $searchCondition,
				// 改定年月が、支給年月の直近過去最新のデータを取得する
				'order'      => array('QmKmSeisekiritsuSanshutsuChild.RevYM DESC')
		);

		// 検索
		$result = $this->find('first', $params);

		// 成績段階名称を検索結果から抽出する
		$ratingLvName = '';
		if(!empty($result)) {
			$ratingLvName = $result['QmKmSeisekiritsuSanshutsuChild']['RatingLvName'];
		}

		return $ratingLvName;
	}
}
