<?php
App::uses('AppModel', 'Model');
/**
 * JtKihonSimei Model
 *
 */
class JtKihonSimei extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'jt_kihon_simei';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'NameHistInfoID';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
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
		'EmpBasicInformationID' => array(
			'numeric' => array(
				'rule' => array('numeric'),
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
		'latest_flg' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	/**
	 * simei情報を取得する
	 *
	 * @param $empNo 職員番号
	 */
	public function getKihonSimeiByEmpNo($empNo) {

		$fields = array(
				'EmpNo',
				'FamilyNameKana',
				'FirstNameKana'
		);

		$searchCondition = array();
		$searchCondition['EmpNo'] = $empNo;

		$options = array(
				'fields' => $fields,
				'conditions' => $searchCondition,
		);
		$result = $this->find('first', $options);

		return $result;
	}
}
