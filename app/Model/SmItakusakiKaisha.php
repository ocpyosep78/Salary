<?php
App::uses('AppModel', 'Model');
/**
 * SmItakusakiKaisha Model
 *
 */
class SmItakusakiKaisha extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'sm_itakusaki_kaisha';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'ConsignmentCompanyCD';

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
	 * 委託先研修会社テーブルから会社コードでデータを取得する
	 * Paginate用メソッド
	 */
	public function getPaginateCondition($searchCondition) {

		$conditions = array();
		// 検索条件が未入力の場合、全件取得する
		if (!empty($searchCondition['consignmentCompanyCd'])) $conditions['SmItakusakiKaisha.consignmentCompanyCd'] = $searchCondition['consignmentCompanyCd'];

		return array(
			'SmItakusakiKaisha' => array(
				'conditions' => $conditions,
				'limit' => 10, // 一度に表示する件数
				'order' => array('SmItakusakiKaisha.consignmentCompanyCd' => 'asc'),
				'page' => 1, // 最初に表示するページ
			)
		);

	}

}
