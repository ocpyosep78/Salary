<?php
App::uses('AppModel', 'Model');
/**
 * JwAtndDebugLog Model
 *
 */
class JwAtndDebugLog extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'jw_atnd_debug_log';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'log_mess' => array(
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
}
