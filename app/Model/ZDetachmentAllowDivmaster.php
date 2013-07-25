<?php
App::uses('AppModel', 'Model');
/**
 * ZDetachmentAllowDivmaster Model
 *
 */
class ZDetachmentAllowDivmaster extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'z_detachment_allow_divmaster';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'ID';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'RegDate' => array(
			'datetime' => array(
				'rule' => array('datetime'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'RegisteredBy' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'UpdateDate' => array(
			'datetime' => array(
				'rule' => array('datetime'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'UpdateBy' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'DeleteFlg' => array(
			'boolean' => array(
				'rule' => array('boolean'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'VersionNo' => array(
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
	 * 単身赴任手当区分(名称)を取得する
	 *
	 * @param string $detachmentAllowDivCD 単身赴任手当認定区分CD
	 *
	 * @return string 単身赴任手当区分(名称)
	 */
	public function getName($detachmentAllowDivCD) {

		$this->recursive = -1;

		// 検索条件の設定
		$searchCondition = array();
		$searchCondition['ID']        = $detachmentAllowDivCD; // 区分CD
		$searchCondition['DeleteFlg'] = '0';                   // 削除フラグ

		// 検索パラメータの設定
		$params = array(
			'conditions' => $searchCondition
		);

		// 検索
		$result = $this->find('first', $params);

		// 検索結果から単身赴任手当区分(名称)を取得する
		$detachmentAllowDivName = '';
		if(!empty($result)){
			$detachmentAllowDivName = $result['ZDetachmentAllowDivmaster']['NAME'];
		}

		return $detachmentAllowDivName;
	}
}
