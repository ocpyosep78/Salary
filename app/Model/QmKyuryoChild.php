<?php
App::uses('AppModel', 'Model');
/**
 * QmKyuryoChild Model
 *
 */
class QmKyuryoChild extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'qm_kyuryo_child';

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
		'SalaryTableCD' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'SalaryClass' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'SalaryGrade' => array(
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
	 * 加算後額（Sum_AddAllow）を取得する
	 *
	 * @param string $paidYM        支給年月
	 * @param string $salaryTableCD 給料表CD
	 * @param string $salaryClass   級
	 * @param string $salaryGrade   号級
	 *
	 * @return mixed 正常：int、異常（データが無い）:string(空文字)
	 */
	public function getSumAddAllow($paidYM, $salaryTableCD, $salaryClass, $salaryGrade) {

		$this->recursive = -1;

		// 検索条件の設定
		$searchCondition = array(
			'RevYM <='      => date($paidYM),  // 改定年月:支給年月の直近過去最新
			'SalaryTableCD' => $salaryTableCD, // 給料表CD
			'SalaryClass'   => $salaryClass,   // 級
			'SalaryGrade'   => $salaryGrade,   // 号級
			'delete_flg'    => '0',            // 削除フラグ
		);

		// 検索パラメータの設定
		$params = array(
			'conditions' => $searchCondition,
			// 改定年月が、支給年月の直近過去最新のデータを取得する
			'order'      => array('QmKyuryoChild.RevYM DESC'),
		);

		// 検索
		$result = $this->find('first', $params);

		// 加算後額を検索結果から抽出する
		$sumAddAllow = '';
		if(!empty($result)) {
			$sumAddAllow = $result['QmKyuryoChild']['Sum_AddAllow'];
		}

		return $sumAddAllow;
	}
}
