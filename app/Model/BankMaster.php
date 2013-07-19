<?php
App::uses('AppModel', 'Model');
/**
 * BankMaster Model
 *
 */
class BankMaster extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'BankMaster';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'BankMasterNo';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
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
		'updated_date' => array(
			'datetime' => array(
				'rule' => array('datetime'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'updated_by' => array(
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
	 * 銀行名称と支店名称を取得する
	 * 
	 * @param string $bankCode       銀行CD
	 * @param string $bankBranchCode 店舗コード
	 * 
	 * @return array 銀行名と銀行支店名の配列。検索結果が無いときは、そろぞれに空文字を格納した配列を返す
	 */
	public function getBankName($bankCode, $bankBranchCode) {
		$returnArray = array(
			'BankNameKana'    => '',
			'BankBrancheName' => '',
		);
		
		$this->recursive = -1;
		
		// 検索条件の設定
		$searchCondition = array();
		$searchCondition['BankCode']       = $bankCode;       // 支給年月
		$searchCondition['BankBranchCode'] = $bankBranchCode; // 職員番号
		$searchCondition['delete_flg']     = '0';             // 削除フラグ
		
		// 検索パラメータの設定
		$params = array(
			'conditions' => $searchCondition
		);
		
		// 検索
		$result = $this->find('first', $params);
		
		if(!empty($result)) {
			$returnArray['BankNameKana']    = $result['BankMaster']['BankNameKana'];
			$returnArray['BankBrancheName'] = $result['BankMaster']['BankBrancheName'];
		}
		
		return $returnArray;
	}
}
