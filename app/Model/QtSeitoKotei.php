<?php
App::uses('AppModel', 'Model');
/**
 * QtSeitoKotei Model
 *
 */
class QtSeitoKotei extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'qt_seito_kotei';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'EmpNo' => array(
			'notempty' => array(
				'rule' => array('notempty', '職員番号'),
				'message' => ERROR_MESSAGE_NOTEMPTY,
			),
		),
		'PaidYM' => array(
			'notempty' => array(
				'rule' => array('notempty', '支給年月'),
				'message' => ERROR_MESSAGE_NOTEMPTY,
			),
			'custom' => array(
				'rule' => array('checkPaidYm', '支給年月'),
				'message' => ERROR_MESSAGE_FORMAT,
				'allowEmpty' => true,
			),
		),
		'PayerDiv' => array(
			'notempty' => array(
				'rule' => array('notempty', '支払者'),
				'message' => ERROR_MESSAGE_NOTEMPTY,
			),
		),
		'TimesOfPartRestPremDeduct' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'NecessaryAdjust_AdjustMonths' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'NecessaryAdjust_DeductMonths' => array(
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
	 * 支給年月チェック
	 */
	public function checkPaidYm(){
	
		// "."の削除
		$date = str_replace(".","",$this->data['QtSeitoKotei']['PaidYM']);
	
		// 全角文字を全部半角に変換
		$date= mb_convert_kana($date,"rnask","UTF-8");
	
		// 年・月に分割
		mb_language('Japanese');
		mb_internal_encoding('UTF-8');
		$year  = mb_substr($date, 0, 4);
		$month = mb_substr($date, 4, 2);
	
		// 大正・昭和・平成の変換
		$year = $this->fnc_warekiset($year);
	
		// 日付の整合性（日は1で固定）
		if(!@checkdate($month,1,$year)) {
			// 変な日付
			return false;
		}
	
		return true;
	}
	
	/**
	 * 元号から西暦への変換
	 */
	private function fnc_warekiset($year){
		// 年度二分割
		mb_language('Japanese');
		mb_internal_encoding('UTF-8');
		$gg = mb_substr($year,0,2);
		$yy = mb_substr($year,2,2);
	
		// 和暦に応じて年度加算
		switch($gg){
			case "大正":
				$year = 1911 + $yy;
				break;
			case "昭和":
				$year = 1925 + $yy;
				break;
			case "平成":
				$year = 1988 + $yy;
				break;
		}
		// 年度の返品
		return $year;
	}
}
