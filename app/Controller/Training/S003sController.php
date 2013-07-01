<?php

App::uses('CommonController', 'Controller');

/**
 * S003sController Controller
 * 委託先研修会社管理コントローラー
 */
class S003sController extends CommonController {

	// この画面で使うモデル（テーブル）を宣言する
	public $uses = array('SmItakusakiKaisha');

	// この画面で使うコンポーネントを宣言する
	public $components = array('Session');

	// この画面で使うセッション名を宣言する
	const S003S_SESSION_KEY = "S003sControllerSession";

	// 画面のレイアウト変更や、初期化処理、共通処理などはここに記述する
	public function beforeFilter() {
		parent::beforeFilter();
		// この画面で使うレイアウトファイルを指定する
		$this->layout = 'layout';
	}

	/**
	 * 委託先研修会社管理トップページ
	 */
	public function index() {

		// 画面側でエラーが出ないように空の検索条件をセットしておく
		$searchCondition = array();
		$this->set('searchCondition', $searchCondition);

		// セッションを開始する
		$this->Session->write(self::S003S_SESSION_KEY, $searchCondition);
	}

	/**
	 * 委託先研修会社の検索
	 * 検索結果はList構造で返却
	 */
	public function search() {

		// ********************  画面からのデータ受け取り  ********************

		// ページ番号を直接指定された場合のリダイレクト処理
		if ($_SERVER['REQUEST_METHOD']=='POST' && isset($this->params['data']['page'])) {
			// リダイレクト
			$this->redirect('search/page:'.$this->params['data']['page']);
		}

		// 前画面からの検索条件の受け取り（研修委託会社コード）
		if (isset($this->request->data['consignmentCompanyCd'])) {
			// POSTデータを受け取る
			$searchCondition['consignmentCompanyCd'] = $this->request->data['consignmentCompanyCd'];
			// セッションを上書きする
			$this->Session->write(self::S003S_SESSION_KEY, $searchCondition);
		} else {
			// POSTデータが存在しない場合（ページングなど）、セッションから取得して使う
			$searchCondition = $this->Session->read(self::S003S_SESSION_KEY);
		}

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

	/**
	 * 複数ボタンが用意されている画面からの共通呼び出しメソッド
	 */
	public function doFlexibleAction() {

		// 遷移元から、どのアクションが呼ばれたのかを判定する
		$commitType = $this->request->data['commitType'];

		switch ($commitType) {
			case 'close':
			break;

			case 'edit':
				$this->updateDetailData($this->request->data);
				$this->redirect('index');
			break;

			case 'add':
				$this->insertDetailData($this->request->data);
				$this->redirect('index');
			break;

			case 'delete':
				$this->deleteDetailData($this->request->data);
				$this->redirect('index');
			break;

			default:
				;
			break;
		}

	}

	/**
	 * 画面データから新規データを作成する
	 */
	private function insertDetailData($data) {

		$param = array(
			'SmItakusakiKaisha' => array(
				'ConsignmentCompanyCD' => 'TOE',
				'ConsignmentCompanyName' => $data['ConsignmentCompanyName'],
				'Representative' => $data['Representative'],
				'PostalCD' => $data['PostalCD1'].'-'.$data['PostalCD2'],
				'CityCD' => $data['CityCD'],
				'AddressKanji' => $data['AddressKanji'],
				'SideKanji' => $data['SideKanji'],
				'AddressKana' => $data['AddressKana'],
				'SideKana' => $data['SideKana'],
				'AccountExecutiveName' => $data['AccountExecutiveName'],
				'TelNo1' => $data['TelNo1'],
				'TelNo2' => $data['TelNo2'],
				'TelNo3' => $data['TelNo3'],
				'EmailAddresse1' => $data['EmailAddresse1'],
				'EmailAddresse2' => $data['EmailAddresse2'],
				'update_date' => date('Y-m-d H:i:s'),
				'updated_by' => 'TODO 仮ユーザー',
			)
		);

		$this->SmItakusakiKaisha->save($param);

	}

	/**
	 * 画面データを更新する
	 */
	private function updateDetailData($data) {

		$param = array(
			'SmItakusakiKaisha' => array(
				'ConsignmentCompanyCD' => $data['ConsignmentCompanyCD'],
				'ConsignmentCompanyName' => $data['ConsignmentCompanyName'],
				'Representative' => $data['Representative'],
				'PostalCD' => $data['PostalCD1'].'-'.$data['PostalCD2'],
				'CityCD' => $data['CityCD'],
				'AddressKanji' => $data['AddressKanji'],
				'SideKanji' => $data['SideKanji'],
				'AddressKana' => $data['AddressKana'],
				'SideKana' => $data['SideKana'],
				'AccountExecutiveName' => $data['AccountExecutiveName'],
				'TelNo1' => $data['TelNo1'],
				'TelNo2' => $data['TelNo2'],
				'TelNo3' => $data['TelNo3'],
				'EmailAddresse1' => $data['EmailAddresse1'],
				'EmailAddresse2' => $data['EmailAddresse2'],
				'update_date' => date('Y-m-d H:i:s'),
				'updated_by' => 'TODO 仮ユーザー',
			)
		);

		$this->SmItakusakiKaisha->save($param);

	}

	/**
	 * 選択されている情報を削除する
	 */
	private function deleteDetailData($data) {

		$param = array(
			'SmItakusakiKaisha' => array(
				'ConsignmentCompanyCD' => $data['ConsignmentCompanyCD'],
				'delete_flg' => '1',
			)
		);

		$this->SmItakusakiKaisha->save($param);
	}

}
