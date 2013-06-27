<?php

App::uses('CommonController', 'Controller');

/**
 * PayMaster001sController Controller
 * 給与マスタコントローラー
 */
class PayMaster001sController extends CommonController {

	// この画面で使うモデル（テーブル）を宣言する
	public $uses = array('JtKihonKihon', 'QtMasterKotei', 'QtMasterHiwari');

	// この画面で使うコンポーネントを宣言する
	public $components = array('Session');

	// この画面で使うセッション名を宣言する
	const PAY_MASTER_001S_SESSION_KEY = "PayMaster001sControllerSession";

	// 画面のレイアウト変更や、初期化処理、共通処理などはここに記述する
	public function beforeFilter() {
		parent::beforeFilter();
		// この画面で使うレイアウトファイルを指定する
		$this->layout = 'layout';
	}

	/**
	 * 給与マスタトップページ
	 */
	public function index() {

		// 画面側でエラーが出ないように空の検索条件をセットしておく
		$searchCondition = array();
		$this->set('searchCondition', $searchCondition);

		$this->set('jtKihonKihon',   array());
		$this->set('qtMasterKotei',  array());
		$this->set('qtMasterHiwari', array());

		// セッションを開始する
		$this->Session->write(self::PAY_MASTER_001S_SESSION_KEY, $searchCondition);
	}

	/**
	 * 給与マスタの検索
	 * 検索結果はList構造で返却
	 * 複数のテーブルに検索にいき、その結果はタブ画面として保持する
	 */
	public function search() {

		// ********************  画面からのデータ受け取り  ********************

		// 前画面からの検索条件の受け取り（職員番号コード）
		if (isset($this->request->data['empNo'])) {
			// POSTデータを受け取る
			$searchCondition['empNo'] = $this->request->data['empNo'];
			// セッションを上書きする
			$this->Session->write(self::PAY_MASTER_001S_SESSION_KEY, $searchCondition);
		}

		// ********************  ビジネスロジック  ********************

		// 研修委託会社テーブルからリスト形式でデータを取得する
		$jtKihonKihon   = $this->JtKihonKihon->find('first', array('conditions' => array('empNo' => $searchCondition['empNo'])));
		$qtMasterKotei  = $this->QtMasterKotei->find('first', array('conditions' => array('empNo' => $searchCondition['empNo'])));
		$qtMasterHiwari = $this->QtMasterHiwari->find('first', array('conditions' => array('empNo' => $searchCondition['empNo'])));

		// ********************  画面へのデータ反映  ********************

		// 前画面からの検索条件をそのまま画面にセットする
		$this->set('searchCondition', $searchCondition);

		// 取得したリストを画面にセットする
		if (sizeof($jtKihonKihon) != '0') {
			$this->set('jtKihonKihon',   $jtKihonKihon['JtKihonKihon']);
			$this->set('qtMasterKotei',  $qtMasterKotei['QtMasterKotei']);
			$this->set('qtMasterHiwari', $qtMasterHiwari['QtMasterHiwari']);
		} else {
			$this->set('jtKihonKihon',   array());
			$this->set('qtMasterKotei',  array());
			$this->set('qtMasterHiwari', array());
		}
		// ********************  遷移先画面の設定  ********************

		// このメソッドには対応する画面はないので、元の画面にレンダリングする
		$this->render('index');

	}

// 	/**
// 	 * 複数ボタンが用意されている画面からの共通呼び出しメソッド
// 	 */
// 	public function doFlexibleAction() {

// 		// 遷移元から、どのアクションが呼ばれたのかを判定する
// 		$commitType = $this->request->data['commitType'];

// 		switch ($commitType) {
// 			case 'close':
// 			break;

// 			case 'edit':
// 				$this->updateDetailData($this->request->data);
// 				$this->redirect('index');
// 			break;

// 			case 'add':
// 				$this->insertDetailData($this->request->data);
// 				$this->redirect('index');
// 			break;

// 			case 'delete':
// 				$this->deleteDetailData($this->request->data);
// 				$this->redirect('index');
// 			break;

// 			default:
// 				;
// 			break;
// 		}

// 	}

// 	/**
// 	 * 画面データから新規データを作成する
// 	 */
// 	private function insertDetailData($data) {

// 		$param = array(
// 			'SmItakusakiKaisha' => array(
// 				'ConsignmentCompanyCD' => 'TOD',
// 				'ConsignmentCompanyName' => $data['ConsignmentCompanyName'],
// 				'Representative' => $data['Representative'],
// 				'PostalCD' => $data['PostalCD1'].'-'.$data['PostalCD2'],
// 				'CityCD' => $data['CityCD'],
// 				'AddressKanji' => $data['AddressKanji'],
// 				'SideKanji' => $data['SideKanji'],
// 				'AddressKana' => $data['AddressKana'],
// 				'SideKana' => $data['SideKana'],
// 				'AccountExecutiveName' => $data['AccountExecutiveName'],
// 				'TelNo1' => $data['TelNo1'],
// 				'TelNo2' => $data['TelNo2'],
// 				'TelNo3' => $data['TelNo3'],
// 				'EmailAddresse1' => $data['EmailAddresse1'],
// 				'EmailAddresse2' => $data['EmailAddresse2'],
// 				'update_date' => date('Y-m-d H:i:s'),
// 				'updated_by' => 'TODO 仮ユーザー',
// 			)
// 		);

// 		$this->SmItakusakiKaisha->save($param);

// 	}

// 	/**
// 	 * 画面データを更新する
// 	 */
// 	private function updateDetailData($data) {

// 		$param = array(
// 			'SmItakusakiKaisha' => array(
// 				'ConsignmentCompanyCD' => $data['ConsignmentCompanyCD'],
// 				'ConsignmentCompanyName' => $data['ConsignmentCompanyName'],
// 				'Representative' => $data['Representative'],
// 				'PostalCD' => $data['PostalCD1'].'-'.$data['PostalCD2'],
// 				'CityCD' => $data['CityCD'],
// 				'AddressKanji' => $data['AddressKanji'],
// 				'SideKanji' => $data['SideKanji'],
// 				'AddressKana' => $data['AddressKana'],
// 				'SideKana' => $data['SideKana'],
// 				'AccountExecutiveName' => $data['AccountExecutiveName'],
// 				'TelNo1' => $data['TelNo1'],
// 				'TelNo2' => $data['TelNo2'],
// 				'TelNo3' => $data['TelNo3'],
// 				'EmailAddresse1' => $data['EmailAddresse1'],
// 				'EmailAddresse2' => $data['EmailAddresse2'],
// 				'update_date' => date('Y-m-d H:i:s'),
// 				'updated_by' => 'TODO 仮ユーザー',
// 			)
// 		);

// 		$this->SmItakusakiKaisha->save($param);

// 	}

// 	/**
// 	 * 選択されている情報を削除する
// 	 */
// 	private function deleteDetailData($data) {

// 		$param = array(
// 			'SmItakusakiKaisha' => array(
// 				'ConsignmentCompanyCD' => $data['ConsignmentCompanyCD'],
// 				'delete_flg' => '1',
// 			)
// 		);

// 		$this->SmItakusakiKaisha->save($param);
// 	}

}
