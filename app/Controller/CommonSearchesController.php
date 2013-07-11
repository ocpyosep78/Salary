<?php

App::uses('CommonController', 'Controller');

/**
 * CommonSearchesController Controller
 * 共通検索コントローラ
 *
 * 検索子画面を使用する場合、以下の設定を行うこと。
 *
 * ■Congig
 * 　検索子画面の検索結果一覧に表示する項目を指定するため、const.phpの$const_labelsにマスタ毎の表示項目を記載する。
 * 　キー名は"VIEW_COLUMN_{マスタ名}"とする。
 * 　
 * 　例）市町村マスタ（LGovMaster）の表示項目を指定する場合
 *
 *　　　// 検索結果表示項目：市町村マスタ
 *　　　'VIEW_COLUMN_LGOVMASTER' => array(
 *　　　	'labels' => array(
 *　　　		'LGovCode' => array('symbol' => '', 'name' => '市町村コード'),
 *　　　		'LGovName' => array('symbol' => '', 'name' => '市町村名'),
 *　　　	)
 *　　　),
 *
 * ■View
 * 　"？"ボタンを追加する場合、下記の通り記述する。
 * 　<input type="button"  class="Button2" value="？" onclick="viewForCommonSearch('{マスタ名}', 'カラム名（名称）', 'カラム名（コード）', '検索結果設定先の項目ID（名称）', '検索結果設定先の項目IDの（コード）');" />
 * 　
 * 　例）市町村マスタの検索を行う場合の指定
 * 　　　<input type="button"  class="Button2" value="？" onclick="viewForCommonSearch('LGovMaster', 'LGovName', 'LGovCode', 'CityName', 'CityCD');" />
 *
 * ■Controller
 * 　$usesフィールドに使用するモデル（テーブル名）を追加する
 */
class CommonSearchesController extends CommonController {

	// この画面で使うモデル（テーブル）を宣言する
	public $uses = array('LGovMaster', 'SmItakusakiKaisha', 'QmShikyuKubun', 'Paginator');

	// この画面で使うコンポーネントを宣言する
	public $components = array('Session');

	// この画面で使うセッション名を宣言する
	const COMMON_SEARCHES_SESSION_KEY = "CommonSearchesControllerSession";

	// 画面のレイアウト変更や、初期化処理、共通処理などはここに記述する
	public function beforeFilter() {
		parent::beforeFilter();
		// この画面で使うレイアウトファイルを指定する
		$this->layout = 'layout';
	}

	/**
	 * 検索コードタイトルの初期処理
	 */
	public function titleInit() {

		// クエリ変数を取得
		$table = Hash::get($this->request->query, 'table');      // 検索対象のテーブル名
		$column  = Hash::get($this->request->query, 'column');  // 検索対象のカラム（コード）

		$SELECT_COLUMN_FOR_DISP = Configure::read("SELECT_COLUMN_" . strtoupper($table));
		$this->set('title', Hash::get($SELECT_COLUMN_FOR_DISP, $column));

		// 検索結果一覧を表示する
		$this->render('/Elements/common_search_title_init');
	}


	/**
	 * 初期化処理
	 */
	public function init() {

		// クエリ変数を取得
		$table = Hash::get($this->request->query, 'table');      // 検索対象のテーブル名
		$columnCode  = Hash::get($this->request->query, 'columnCode');  // 検索対象のカラム（コード）
		$columnName  = Hash::get($this->request->query, 'columnName');  // 検索対象のカラム（名称）

		// 検索結果をViewに渡す
		$this->set('searchResultList', array());
		$this->set('tableName', $table);

		// 検索結果一覧を表示する
		$this->render('/Elements/common_search_init');
	}

	/**
	 * 検索処理
	 */
	public function search() {

		// クエリ変数を取得
		$keywordCd   = Hash::get($this->request->query, 'keywordCd');   // 検索キーワード（コード）
		$keywordName = Hash::get($this->request->query, 'keywordName'); // 検索キーワード（名称）
		$table       = Hash::get($this->request->query, 'table');       // 検索対象のテーブル名
		$columnCode  = Hash::get($this->request->query, 'columnCode');  // 検索対象のカラム（コード）
		$columnName  = Hash::get($this->request->query, 'columnName');  // 検索対象のカラム（名称）

		// 検索ボタンで遷移してきた場合
		if (isset($keywordCd) || isset($keywordName)) {
			// 検索に必要な情報をセッションに書き込む
			$sessionData['keywordCd']   = $keywordCd;
			$sessionData['keywordName'] = $keywordName;
			$sessionData['table']       = $table;
			$sessionData['columnCode']  = $columnCode;
			$sessionData['columnName']  = $columnName;
			$this->Session->write(self::COMMON_SEARCHES_SESSION_KEY, $sessionData);

		// Paginationで遷移してきた場合
		} else {
			// 検索に必要な情報をセッションから取得する
			$sessionData = $this->Session->read(self::COMMON_SEARCHES_SESSION_KEY);
			$keywordCd   = Hash::get($sessionData, 'keywordCd');
			$keywordName = Hash::get($sessionData, 'keywordName');
			$table       = Hash::get($sessionData, 'table');
			$columnName  = Hash::get($sessionData, 'columnName');
			$columnCode  = Hash::get($sessionData, 'columnCode');
		}

		// ページ番号を取得
		$page = Hash::get($this->params->named, 'page');
		// Pagination以外の場合は名前付き変数が存在しないので、初期値として1ページ目を設定する
		if ($page === null) $page = 1;

		// Paginateコントローラ変数の設定
		$this->recursive = -1;
		$searchCondition = array();
		if (isset($keywordCd)) {
			$searchCondition[$columnCode . ' LIKE ?'] = '%' . $keywordCd . '%';
		}
		if (isset($keywordName)) {
			$searchCondition[$columnName . ' LIKE ?'] = '%' . $keywordName . '%';
		}
		$this->paginate = array(
				'conditions' => $searchCondition,
				'limit' => PAGINATION_VIEW_LIMIT_COMMON_SEARCH, // 一度に表示する件数
				'order' => array($columnCode => 'asc'),
				'page' => $page, // 最初に表示するページ
		);

		// 検索結果をViewに渡す
		$this->set('searchResultList', $this->Paginate($table));
		$this->set('tableName', $table);

		// 検索結果一覧を表示する
		$this->render('/Elements/common_search_result');
	}
}