<?php
App::uses('AppModel', 'Model');
/**
 * QmKamoku Model
 *
 */
class QmKamoku extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'qm_kamoku';

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
		'resistered_by' => array(
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
	 * 科目（短縮名称）を取得する
	 *
	 * @param string $paidYM    支給年月
	 * @param string $accountCD 科目CD
	 *
	 * @return string 科目（短縮名称）
	 */
	public function getAccountShortName($paidYM, $accountCD) {

		$this->recursive = -1;

		// 検索条件の設定
		$searchCondition = array();
		$searchCondition['FiscalYear'] = substr($paidYM, 0, 4); // 年度
		$searchCondition['AccountCD']  = $accountCD;            // 科目CD
		$searchCondition['delete_flg'] = '0';                   // 削除フラグ

		// 検索パラメータの設定
		$params = array(
			'conditions' => $searchCondition
		);

		// 検索
		$result = $this->find('first', $params);

		$accountShortName = '';
		if(!empty($result)) {
			$accountShortName = $result['QmKamoku']['AccountShortName'];
		}

		return $accountShortName;
	}
}
