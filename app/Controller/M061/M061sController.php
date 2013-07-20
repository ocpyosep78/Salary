<?php

App::uses('CommonController', 'Controller');

/**
 * M061sController Controller
 * 正当支給照会コントローラー
 */
class M061sController extends CommonController {

	// この画面で使うモデル（テーブル）を宣言する
	public $uses = array('QtSeitoKotei', 'QtSeitoHendo', 'QtSeitoHiwari');

	// 画面のレイアウト変更や、初期化処理、共通処理などはここに記述する
	public function beforeFilter() {
		parent::beforeFilter();
		// この画面で使うレイアウトファイルを指定する
		$this->layout = 'layout';
	}

	/**
	 * 正当支給照会トップページ
	 */
	public function index() {

		// 初期値の設定を行う
		$this->_initSet();
	}

 	/**
 	 * 正当支給の検索
 	 * 検索結果はList構造で返却
 	 */
	public function search() {
		
		// ********************  画面からのデータ受け取り  ********************

		// 前画面からの検索条件の受け取り（職員番号、支給年月、支払者）
		$searchCondition = array();

		// TODO バリデーションチェック

		// POSTデータを受け取る
		$postData = $this->request->data['M061s'];

		// 検索条件を設定する
		$searchCondition['EmpNo']    = $postData['EmpNo'];    // 職員番号
		// TODO 和暦から西暦に変換する
		$searchCondition['PaidYM']   = $postData['PaidYM'];   // 支給年月
		$searchCondition['PayerDiv'] = $postData['PayerDiv']; // 支払者区分

		// ********************  ビジネスロジック  ********************

		// findのパラメータを設定する
		// 追加条件：論理削除されていないこと
		$searchCondition['delete_flg'] = 0;
		$params = array(
			'conditions' => $searchCondition
		);

		// テーブル[正当支給データ：変動給]からデータを取得する
		$hendoInfo = $this->QtSeitoHendo->find('first', $params);
		// テーブル[正当支給 : 固定給]からデータを取得する
		$koteiInfo = $this->QtSeitoKotei->find('first', $params);
		// テーブル[正当支給データ：日割]からデータを取得する
		$hiwariAllInfo = $this->QtSeitoHiwari->find('all', $params);

		// 共通エリア情報
		$commonInfo = array();
		// 検索結果にレコードがあるとき
		if(!empty($hiwariAllInfo)){
			// 日割データの1レコード目は共通で使用するので、抽出する
			$commonInfo = $hiwariAllInfo[0];
		}

		// ********************  画面へのデータ反映  ********************

		// 前画面からの検索条件をそのまま画面にセットする
		$this->set('searchCondition', $searchCondition);

		// 取得データを設定する
		$this->set('hendoInfo', $hendoInfo);
		$this->set('koteiInfo', $koteiInfo);
		$this->set('commonInfo', $commonInfo);

		// ********************  遷移先画面の設定  ********************

		// このメソッドには対応する画面はないので、元の画面にレンダリングする
		$this->render('index');

	}

	/**
	 * 初期値を設定する
	 */
	private function _initSet() {

		// 画面側でエラーが出ないように空の検索条件をセットしておく
		$searchCondition = array();
		$hendoInfo = array();
		$koteiInfo = array();
		$commonInfo = array();

		// 画面への設定
		$this->set('searchCondition', $searchCondition);
		$this->set('hendoInfo', $hendoInfo);
		$this->set('koteiInfo', $koteiInfo);
		$this->set('commonInfo', $commonInfo);
	}
}

