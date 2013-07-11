<?php

App::uses('CommonController', 'Controller');

/**
 * Payroll001sController Controller
 * 支給明細照会コントローラー
 */
class Payroll001sController extends CommonController {

	// この画面で使うモデル（テーブル）を宣言する
	public $uses = array('QtMeisai', 'QtMeisaiHiwari', 'QtMeisaiUchiSonotasikyu', 'JtKihonKihon', 'QtMeisaiUchiChingin',
							'QtMeisaiUchiFukurikojo', 'QtMeisaiUchiRyohi', 'QtMeisaiUchiNoritu', 'QtMeisaiUchiTokkin',
							'QtMeisaiUchiShuku', 'QtMeisaiUchiKantoku', 'QtMeisaiUchiChokin', 'QtMeisaiUchiKyujitukyu'
	);

	// 画面のレイアウト変更や、初期化処理、共通処理などはここに記述する
	public function beforeFilter() {
		parent::beforeFilter();
		// この画面で使うレイアウトファイルを指定する
		$this->layout = 'layout';
	}

	/**
	 * 支給明細照会　タブ01：基本情報
	 */
	public function index() {

		// 画面側でエラーが出ないように空の検索条件をセットしておく
		$searchCondition = array();
		$this->set('searchCondition', $searchCondition);
		$personalInfo = array();
		$this->set('personalInfo', $personalInfo);
		$meisaiInfo = array();
		$this->set('meisaiInfo', $meisaiInfo);
		$hiwariInfo = array();
		$this->set('hiwariInfo', $hiwariInfo);
		$uchiSonotaInfo = array();
		$this->set('uchiSonotaInfo', $uchiSonotaInfo);

	}

	/**
	 * 支給明細照会の検索
	 */
	public function search() {

		// ********************  画面からのデータ受け取り  ********************

		// 前画面からの検索条件の受け取り（職員番号、支給年月日、支給区分、支払者）
		$searchCondition = array();
		// POSTデータを受け取る
		$postData = $this->request->data['QtMeisai'];
		// 検索条件を設定する
		foreach($postData as $key => $value) {
			$searchCondition[$key] = $value;
		}

		// ********************  ビジネスロジック  ********************

		// テーブル[人事基本情報]からデータを取得する
		$personalInfo = array();
		if(isset($searchCondition['EmpNo'])){
			$personalInfo = $this->JtKihonKihon->find('first', array('conditions' => array('EmpNo' => $searchCondition['EmpNo'])));
		}

		// findのパラメータを設定する
		$params = array(
			'conditions' => $searchCondition
		);

		// テーブル[支給明細データ]からデータを取得する
		$meisaiInfo = $this->QtMeisai->find('first', $params);
		// テーブル[支給明細データ：日割]からデータを取得する
		$hiwariInfo = $this->QtMeisaiHiwari->find('first', $params);
		// テーブル[支給明細データ：その他支給内訳]からデータを取得する
		$uchiSonotaInfo = $this->QtMeisaiUchiSonotasikyu->find('first', $params);

		// ********************  画面へのデータ反映  ********************

		// 前画面からの検索条件をそのまま画面にセットする
 		$this->set('searchCondition', $searchCondition);

		// 取得データを設定する
		$this->set('personalInfo', $personalInfo);
		$this->set('meisaiInfo', $meisaiInfo);
		$this->set('hiwariInfo', $hiwariInfo);
		$this->set('uchiSonotaInfo', $uchiSonotaInfo);

		// ********************  遷移先画面の設定  ********************

		// このメソッドには対応する画面はないので、元の画面にレンダリングする
		$this->render('index');

	}

	/**
	 * 支給明細照会　タブ05：超勤・休日・夜勤
	 */
	public function tab05() {

		// TODO あとで消すこと
		$paidYm   = '2013-07-01';
		$empNo    = 'A0000001';
		$paidDiv  = '01';
		$payerDiv = '01';

		// テーブル[支給明細データ：超勤内訳]からデータを取得する
		$meisaiUchiChokinList = $this->QtMeisaiUchiChokin->findMeisaiUchiChokin($paidYm, $empNo, $paidDiv, $payerDiv);

		// テーブル[支給明細データ：休日給内訳]からデータを取得する
		$meisaiUchiKyujitukyuList = $this->QtMeisaiUchiKyujitukyu->findMeisaiUchiKyujitukyu($paidYm, $empNo, $paidDiv, $payerDiv);

		// 取得データをViewに渡す
		$this->set(compact('meisaiUchiChokinList'));
		$this->set(compact('meisaiUchiKyujitukyuList'));
	}

	/**
	 * 支給明細照会　タブ06：特勤・宿日直・管特
	 */
	public function tab06() {

		// TODO あとで消すこと
		$paidYm   = '2013-07-01';
		$empNo    = 'A0000001';
		$paidDiv  = '01';
		$payerDiv = '01';

		// テーブル[支給明細データ：特勤内訳]からデータを取得する
		$meisaiUchiTokkinList = $this->QtMeisaiUchiTokkin->findMeisaiUchiTokkin($paidYm, $empNo, $paidDiv, $payerDiv);

		// テーブル[支給明細データ：宿日直内訳]からデータを取得する
		$meisaiUchiShukuList = $this->QtMeisaiUchiShuku->findMeisaiUchiShuku($paidYm, $empNo, $paidDiv, $payerDiv);

		// テーブル[支給明細データ：管理職特勤内訳]からデータを取得する
		$meisaiUchiKantokuList = $this->QtMeisaiUchiKantoku->findMeisaiUchiKantoku($paidYm, $empNo, $paidDiv, $payerDiv);

		// 取得データをViewに渡す
		$this->set(compact('meisaiUchiTokkinList'));
		$this->set(compact('meisaiUchiShukuList'));
		$this->set(compact('meisaiUchiKantokuList'));
	}

	/**
	 * 支給明細照会　タブ07：能率給内訳
	 */
	public function tab07() {

		// TODO あとで消すこと
		$paidYm   = '2013-07-01';
		$empNo    = 'A0000001';
		$paidDiv  = '01';
		$payerDiv = '01';

		// テーブル[支給明細データ：旅費内訳]からデータを取得する
		$meisaiUchiNorituList = $this->QtMeisaiUchiNoritu->findMeisaiUchiNoritu($paidYm, $empNo, $paidDiv, $payerDiv);

		// 取得データをViewに渡す
		$this->set(compact('meisaiUchiNorituList'));
	}

	/**
	 * 支給明細照会　タブ08：旅費・その他支給
	 */
	public function tab08() {

		// TODO あとで消すこと
		$paidYm   = '2013-07-01';
		$empNo    = 'A0000001';
		$paidDiv  = '01';
		$payerDiv = '01';

		// テーブル[支給明細データ：旅費内訳]からデータを取得する
		$meisaiUchiRyohiList = $this->QtMeisaiUchiRyohi->findMeisaiUchiRyohi($paidYm, $empNo, $paidDiv, $payerDiv);
		// テーブル[支給明細データ：その他支給内訳]からデータを取得する
		$meisaiUchiSonotasikyuList = $this->QtMeisaiUchiSonotasikyu->findMeisaiUchiSonotasikyu($paidYm, $empNo, $paidDiv, $payerDiv);

		// 取得データをViewに渡す
		$this->set(compact('meisaiUchiRyohiList'));
		$this->set(compact('meisaiUchiSonotasikyuList'));
	}

	/**
	 * 支給明細照会　タブ09：福利控除
	 */
	public function tab09() {

		// TODO あとで消すこと
		$paidYm   = '2013-07-01';
		$empNo    = 'A0000001';
		$paidDiv  = '01';
		$payerDiv = '01';

		// テーブル[支給明細データ：福利控除内訳]からデータを取得する
		$meisaiUchiFukurikojoList = $this->QtMeisaiUchiFukurikojo->findMeisaiUchiFukurikojo($paidYm, $empNo, $paidDiv, $payerDiv);

		// 取得データをViewに渡す
		$this->set(compact('meisaiUchiFukurikojoList'));
	}

	/**
	 * 支給明細照会　タブ10：賃金
	 */
	public function tab10() {

		// TODO あとで消すこと
		$paidYm   = '2013-07-01';
		$empNo    = 'A0000001';
		$paidDiv  = '01';
		$payerDiv = '01';

		// テーブル[支給明細データ：賃金内訳]からデータを取得する
		$meisaiUchiChinginList = $this->QtMeisaiUchiChingin->findMeisaiUchiChingin($paidYm, $empNo, $paidDiv, $payerDiv);

		// 取得データをViewに渡す
		$this->set(compact('meisaiUchiChinginList'));
	}

	/**
	 * タブ切り替え用のサンプルメソッド
	 * TODO　後で消すこと
	 */
	public function sample() {

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
