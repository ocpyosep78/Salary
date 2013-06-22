<?php

App::uses('CommonController', 'Controller');

/**
 * S003sController Controller
 * 委託先研修会社管理コントローラー
 */
class S003sController extends CommonController {

	// この画面で使うモデル（テーブル）を宣言する
	public $uses = array('SmItakusakiKaisha');

	// 画面のレイアウト変更や、初期化処理、共通処理などはここに記述する
	public function beforeFilter() {
		parent::beforeFilter();
		// この画面で使うレイアウトファイルを指定する
		$this->layout = 'layout_pattern_A';
	}

	/**
	 * 委託先研修会社管理トップページ
	 */
	public function index() {

		// 画面側でエラーが出ないように空の検索条件をセットしておく
		$this->set('searchCondition', array());

	}

	/**
	 * 委託先研修会社の検索
	 * 検索結果はList構造で返却
	 */
	public function search() {

		// ********************  画面からのデータ受け取り  ********************

		// 前画面からの検索条件の受け取り（研修委託会社コード）
		$searchCondition['consignmentCompanyCd'] = $this->request->data['consignmentCompanyCd'];

		// ********************  ビジネスロジック  ********************

		// 研修委託会社テーブルからリスト形式でデータを取得する
		$this->paginate = $this->SmItakusakiKaisha->getPaginateCondition($searchCondition);

		// ********************  画面へのデータ反映  ********************

		// 前画面からの検索条件をそのまま画面にセットする
		$this->set('searchCondition', $searchCondition);

		// 取得したリストを画面にセットする
		$this->set('rtnSmItakusakiKaishaList', $this->Paginate());

		// ********************  遷移先画面の設定  ********************

		// このメソッドには対応する画面はないので、元の画面にレンダリングする
		$this->render('index');

	}

}
