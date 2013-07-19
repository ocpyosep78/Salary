<?php
App::uses('AppModel', 'Model');
/**
 * ZSalaryTableNamemaster Model
 *
 */
class ZSalaryTableNamemaster extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'z_salary_table_namemaster';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'SalaryTableCD';

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
	 * 給料表名称を取得する
	 * 
	 * @param string $salaryTableCD 給料表CD
	 * 
	 * @return string 
	 */
	public function getSalaryTableName($salaryTableCD) {
		$salaryTableName = '';
		
		$this->recursive = -1;
		
		// 検索条件の設定
		$searchCondition = array();
		$searchCondition['SalaryTableCD'] = $salaryTableCD; // 給料表CD
		
		// 検索パラメータの設定
		$params = array(
			'conditions' => $searchCondition,
		);
		
		// 検索
		$result = $this->find('first', $params);
		
		if(!empty($result)) {
			$salaryTableName = $result['ZSalaryTableNamemaster']['SalaryTableName'];
		}
		
		return $salaryTableName;
	}
}
