<?php
App::uses('AppModel', 'Model');
/**
 * QtSeitoUchiChingin Model
 *
 */
class QtSeitoUchiChingin extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'qt_seito_uchi_chingin';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'ResultsYM';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'DailyRateStartDate' => array(
			'date' => array(
				'rule' => array('date'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'PaidYM' => array(
			'date' => array(
				'rule' => array('date'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'EmpNo' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'PayerDiv' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'TableNo' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'AllowDetailCD' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'AccountCD' => array(
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
	 * 正当支給データ：賃金内訳のレコードを取得する
	 *
	 * @param $paidYm   支給年月
	 * @param $empNo    職員番号
	 * @param $payerDiv 支払者区分
	 * @return 検索結果レコード
	 */
	public function findSeitoUchiChingin($paidYm, $empNo, $payerDiv) {

		$this->recursive = -1;

		// 検索条件の設定
		$searchCondition = array();
		// 支給年月の入力値の翌月
		$nextMonth = date("Y-m-d", strtotime(date($paidYm) . "+1 month"));
		$searchCondition['PaidYM >=']  = $paidYm;   // 支給年月
		$searchCondition['PaidYM <']   = $nextMonth;
		$searchCondition['EmpNo']      = $empNo;    // 職員番号
		$searchCondition['PayerDiv']   = $payerDiv; // 支払者区分
		$searchCondition['delete_flg'] = '0';       // 削除フラグ

		// 検索パラメータの設定
		$params = array(
			'conditions' => $searchCondition
		);

		// 検索
		$result = $this->find('all', $params);

		return $result;
	}
}
