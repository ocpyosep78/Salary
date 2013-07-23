<?php
App::uses('AppModel', 'Model');
/**
 * JmShozoku Model
 *
 */
class JmShozoku extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'jm_shozoku';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'FiscalYear';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'DepCD' => array(
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
	 * 所属マスタから所属（略称）を取得する
	 *
	 * @param string $paidYM 支給年月
	 * @param string $depCD  所属CD
	 *
	 * @return 所属（略称）
	 */
	public function getDeptShortName($paidYM, $depCD) {

		$this->recursive = -1;

		// 検索条件の設定
		$searchCondition = array();
		$searchCondition['FiscalYear'] = substr($paidYM, 0, 4); // 年度
		$searchCondition['DepCD']      = $depCD;                // 所属CD
		$searchCondition['delete_flg'] = '0';                   // 削除フラグ

		// 検索パラメータの設定
		$params = array(
			'conditions' => $searchCondition
		);

		// 検索
		$result = $this->find('first', $params);

		$depShortName = '';
		if(!empty($result)) {
			$depShortName = $result['JmShozoku']['DeptShortName'];
		}

		return $depShortName;
	}
}
