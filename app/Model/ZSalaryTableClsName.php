<?php
App::uses('AppModel', 'Model');
/**
 * ZSalaryTableClsName Model
 *
 */
class ZSalaryTableClsName extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'z_salary_table_cls_name';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'SalaryTable';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
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
	 * 級名称を取得する
	 *
	 * @param string $salaryTable 給料表CD
	 * @param string $salaryClass 級
	 *
	 * @return string 級名称
	 */
	public function getSalaryClassName($salaryTable, $salaryClass) {

		$this->recursive = -1;

		// 検索条件の設定
		$searchCondition = array();
		$searchCondition['SalaryTable'] = $salaryTable; // 給料表CD
		$searchCondition['SalaryClass'] = $salaryClass; // 級
		$searchCondition['delete_flg']  = '0';          // 削除フラグ

		// 検索パラメータの設定
		$params = array(
			'conditions' => $searchCondition
		);

		// 検索
		$result = $this->find('first', $params);

		$salaryClassName = '';
		if(!empty($result)) {
			$salaryClassName = $result['ZSalaryTableClsName']['SalaryClassName'];
		}

		return $salaryClassName;
	}
}
