<?php

App::uses('CommonController', 'Controller');

/**
 * EmpSearchesController Controller
 * 職員検索コントローラ
 */
class EmpSearchesController extends CommonController {

	public $uses = array('JtKihonKihon', 'JtKihonRekiSyozoku', 'JtKihonRekiSyokuso', 'JtKihonRekiSyokumu', 'Paginator');

	// 画面のレイアウト変更や、初期化処理、共通処理などはここに記述する
	public function beforeFilter() {
		parent::beforeFilter();
		// この画面で使うレイアウトファイルを指定する
		$this->layout = 'layout';
	}

	/**
	 * 検索処理
	 */
	public function search() {

		// クエリ変数を取得
		$familyNameKana = Hash::get($this->request->query, 'familyNameKana');
		$firstNameKana  = Hash::get($this->request->query, 'firstNameKana');
		$jobDutyCdFrom  = Hash::get($this->request->query, 'jobDutyCdFrom');
		$jobDutyCdTo    = Hash::get($this->request->query, 'jobDutyCdTo');
		$familyName     = Hash::get($this->request->query, 'familyName');
		$firstName      = Hash::get($this->request->query, 'firstName');
		$jobGradeCdFrom = Hash::get($this->request->query, 'jobGradeCdFrom');
		$jobGradeCdTo   = Hash::get($this->request->query, 'jobGradeCdTo');
		$empDivFrom     = Hash::get($this->request->query, 'empDivFrom');
		$empDivTo       = Hash::get($this->request->query, 'empDivTo');
		$depCdFrom      = Hash::get($this->request->query, 'depCdFrom');
		$depCdTo        = Hash::get($this->request->query, 'depCdTo');
		$mgrCdFrom      = Hash::get($this->request->query, 'mgrCdFrom');
		$mgrCdTo        = Hash::get($this->request->query, 'mgrCdTo');

		// ページ番号を取得
		$page = Hash::get($this->params->named, 'page');
		// Pagination以外の場合は名前付き変数が存在しないので、初期値として1ページ目を設定する
		if ($page === null) $page = 1;

		// Paginateコントローラ変数の設定
		$this->recursive = -1;
		$searchCondition = array();
// 		if (isset($keywordCd)) {
// 			$searchCondition[$columnCode . ' LIKE ?'] = '%' . $keywordCd . '%';
// 		}
// 		if (isset($keywordName)) {
// 			$searchCondition[$columnName . ' LIKE ?'] = '%' . $keywordName . '%';
// 		}
		$this->paginate = array(
// 				'conditions' => $searchCondition,
				'limit' => PAGINATION_VIEW_LIMIT_COMMON_SEARCH, // 一度に表示する件数
// 				'order' => array($columnCode => 'asc'),
				'page' => $page, // 最初に表示するページ
		);
$searchCondition = 'SELECT * FROM jt_kihon_kihon';
		$searchResultList = $this->Paginator->paginate($searchCondition, null, null, PAGINATION_VIEW_LIMIT_COMMON_SEARCH, $page);
var_dump($searchResultList);
		// 検索結果をViewに渡す
		$this->set(compact('searchResultList'));
		$this->set('tableName', 'JtKihonKihon');

		// 検索結果一覧を表示する
		$this->render('/Elements/common_search_result');
	}
}