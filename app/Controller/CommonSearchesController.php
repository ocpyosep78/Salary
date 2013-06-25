<?php

App::uses('CommonController', 'Controller');

/**
 * S003sController Controller
 * 委託先研修会社管理コントローラー
*/
class CommonSearchesController extends CommonController {

	// この画面で使うモデル（テーブル）を宣言する
	// 	public $uses = array('SmItakusakiKaisha');

	// 画面のレイアウト変更や、初期化処理、共通処理などはここに記述する
	public function beforeFilter() {
		parent::beforeFilter();
		// この画面で使うレイアウトファイルを指定する
		// 		$this->layout = 'layout_pattern_A';
	}

	/**
	 * 検索処理
	 */
	public function commonSearch() {

		// 検索対象のテーブル名、カラム名をクエリ変数から取得
		$table  = $this->request->query['table'];
		$column = $this->request->query['column'];

// 		// TODO 入力値をどうやって受け取るか
// 		$input = '';

// 		/* 検索処理 */
// 		$this->recursive = -1;
// 		$searchCondition = array();
// 		$searchCondition[$column . ' LIKE ?'] = '%' . $input . '%';
// 		$status = array(
// 				'conditions' => $searchCondition
// 		);
// 		$searchResult = $this->{$table}->find('all', $status);

// 		// 検索結果をViewに渡す
// 		$this->set(compact('searchResult'));

		// 検索結果一覧を表示する
		$this->render('/Elements/common_search_result');
	}
}