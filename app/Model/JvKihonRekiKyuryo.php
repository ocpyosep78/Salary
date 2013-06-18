<?php
App::uses('AppModel', 'Model');
/**
 * JvKihonRekiKyuryo Model
 *
 */
class JvKihonRekiKyuryo extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'jv_kihon_reki_kyuryo';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'EmpSalaryHistID' => array(
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
}
