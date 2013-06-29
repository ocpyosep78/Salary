<?php

App::uses('CommonController', 'Controller');

/**
 * S003sController Controller
 * 委託先研修会社管理コントローラー
*/
class CommonSearchesController extends CommonController {

	// この画面で使うモデル（テーブル）を宣言する
	public $uses = array('SmItakusakiKaisha');

	// 画面のレイアウト変更や、初期化処理、共通処理などはここに記述する
	public function beforeFilter() {
		parent::beforeFilter();
		// この画面で使うレイアウトファイルを指定する
		$this->layout = 'layout';
	}

	/**
	 * 検索処理
	 */
	public function commonSearch() {

		// クエリ変数を取得
		$keyword = $this->request->query['keyword']; // 検索キーワード
		$table   = $this->request->query['table'];   // 検索対象のテーブル名
		$name    = $this->request->query['name'];    // 検索対象のカラム（名称）
		$code    = $this->request->query['code'];    // 検索結果のカラム（コード）

		// Paginateコントローラ変数の設定
		$this->recursive = -1;
		$searchCondition = array();
		$searchCondition[$name . ' LIKE ?'] = '%' . $keyword . '%';
		$this->paginate = array(
				'conditions' => $searchCondition,
				'limit' => 10, // 一度に表示する件数
				'order' => array($code => 'asc'),
				'page' => 1, // 最初に表示するページ
		);

		// 検索結果をViewに渡す
		$this->set('searchResultList', $this->Paginate());
		$this->set('tableName', $table);

		// 検索結果一覧を表示する
		$this->render('/Elements/common_search_result');
	}
}