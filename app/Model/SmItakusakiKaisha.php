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
		'ConsignmentCompanyName' => array(
			'notempty' => array(
				'rule' => array('notempty', '委託先会社名'),
				'message' => ERROR_MESSAGE_NOTEMPTY,
			),
		),
		'Representative' => array(
			'notempty' => array(
				'rule' => array('notempty', '代表者名'),
				'message' => ERROR_MESSAGE_NOTEMPTY,
			),
		),
		'PostalCD' => array(
			'custom' => array(
				'rule' => array('checkEmptyPostalCD', '郵便番号'),
				'message' => ERROR_MESSAGE_NOTEMPTY,
			),
		),
		'CityCD' => array(
			'notempty' => array(
				'rule' => array('notempty', '市区町村CD'),
				'message' => ERROR_MESSAGE_NOTEMPTY,
			),
		),
		'AddressKanji' => array(
			'notempty' => array(
				'rule' => array('notempty', '漢字住所'),
				'message' => ERROR_MESSAGE_NOTEMPTY,
			),
		),
		'SideKanji' => array(
			'notempty' => array(
				'rule' => array('notempty', '方書き（漢字）'),
				'message' => ERROR_MESSAGE_NOTEMPTY,
			),
		),
		'AddressKana' => array(
			'notempty' => array(
				'rule' => array('notempty', 'カナ住所'),
				'message' => ERROR_MESSAGE_NOTEMPTY,
			),
		),
		'SideKana' => array(
			'notempty' => array(
				'rule' => array('notempty', '方書き（カナ）'),
				'message' => ERROR_MESSAGE_NOTEMPTY,
			),
		),
		'AccountExecutiveName' => array(
			'notempty' => array(
				'rule' => array('notempty', '営業担当者名'),
				'message' => ERROR_MESSAGE_NOTEMPTY,
			),
		),
		'TelNo1' => array(
			'notempty' => array(
				'rule' => array('notempty', '電話番号１'),
				'message' => ERROR_MESSAGE_NOTEMPTY,
			),
		),
		'TelNo2' => array(
			'notempty' => array(
				'rule' => array('notempty', '電話番号２'),
				'message' => ERROR_MESSAGE_NOTEMPTY,
			),
		),
		'TelNo3' => array(
			'notempty' => array(
				'rule' => array('notempty', '電話番号３'),
				'message' => ERROR_MESSAGE_NOTEMPTY,
			),
		),
		'EmailAddresse1' => array(
			'notempty' => array(
				'rule' => array('notempty', 'メールアドレス１'),
				'message' => ERROR_MESSAGE_NOTEMPTY,
			),
		),
		'EmailAddresse2' => array(
			'notempty' => array(
				'rule' => array('notempty', 'メールアドレス２'),
				'message' => ERROR_MESSAGE_NOTEMPTY,
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
	 * 委託先研修会社テーブルから会社コードでデータを取得する
	 * Paginate用メソッド
	 */
	public function getPaginateCondition($searchCondition) {

		$conditions = array();
		// 検索条件が未入力の場合、全件取得する
		if (!empty($searchCondition['consignmentCompanyCd'])) $conditions['SmItakusakiKaisha.consignmentCompanyCd LIKE '] = '%'.$searchCondition['consignmentCompanyCd'].'%';
		// 削除フラグがONのデータは取得対象外
		$conditions['SmItakusakiKaisha.delete_flg'] = '0';

		return array(
			'SmItakusakiKaisha' => array(
				'conditions' => $conditions,
				'limit' => 10, // 一度に表示する件数
				'order' => array('SmItakusakiKaisha.consignmentCompanyCd' => 'asc'),
				'page' => 1, // 最初に表示するページ
			)
		);

	}
	
	/**
	 * validation check
	 * 郵便番号の空チェック
	 */
	public function checkEmptyPostalCD() {

		if(empty($this->data['SmItakusakiKaisha']['PostalCD1']) || empty($this->data['SmItakusakiKaisha']['PostalCD2'])) {
			// 郵便番号の入力欄のいずれかが空のとき
			return false;
		}
		
		return true;
	}
	
	/**
	 * 最大コード値を取得する
	 * 
	 * @return 最大コード値
	 */
	public function getMaxCode() {
		
		$this->recursive = -1;
		
		// 検索パラメータの設定
		$params = array(
			'order' => array('ConsignmentCompanyCD DESC')
		);
		
		// 検索
		$result = $this->find('first', $params);
		
		// コード値を取得する
		$maxCode = $result['SmItakusakiKaisha']['ConsignmentCompanyCD'];
		
		return $maxCode;
		
	}

}
