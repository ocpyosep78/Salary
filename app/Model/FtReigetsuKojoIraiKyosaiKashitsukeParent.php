<?php
App::uses('AppModel', 'Model');
/**
 * FtReigetsuKojoIraiKyosaiKashitsukeParent Model
 *
 */
class FtReigetsuKojoIraiKyosaiKashitsukeParent extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'ft_reigetsu_kojo_irai_kyosai_kashitsuke_parent';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'KyosaiKojoReqHeaderID';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
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
		'last_key' => array(
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
