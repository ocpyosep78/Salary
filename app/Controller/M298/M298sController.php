<?php

App::uses('CommonController', 'Controller');

/**
 * M298sController Controller
 * 支給明細照会コントローラー
 */
class M298sController extends CommonController {

	// この画面で使うモデル（テーブル）を宣言する
	public $uses = array('QtMeisai', 'QtMeisaiHiwari', 'QtMeisaiUchiSonotasikyu', 'JtKihonKihon', 'QtMeisaiUchiChingin',
							'QtMeisaiUchiFukurikojo', 'QtMeisaiUchiRyohi', 'QtMeisaiUchiNoritu', 'QtMeisaiUchiTokkin',
							'QtMeisaiUchiShuku', 'QtMeisaiUchiKantoku', 'QtMeisaiUchiChokin', 'QtMeisaiUchiKyujitukyu',
							'QtMeisaiUchiYakin'
	);

	// 画面のレイアウト変更や、初期化処理、共通処理などはここに記述する
	public function beforeFilter() {
		parent::beforeFilter();
		// この画面で使うレイアウトファイルを指定する
		$this->layout = 'layout';
	}

	/**
	 * 支給明細照会 初期画面
	 */
	public function index() {

		// 初期値の設定を行う
		$this->_initSet();
	}

	/**
	 * 支給明細照会 検索
	 */
	public function search() {

		// ********************  画面からのデータ受け取り  ********************

		// 前画面からの検索条件の受け取り（職員番号、支給年月、支給区分、支払者）
		$searchCondition = array();

		// TODO バリデーションチェック

		// POSTデータを受け取る
		$postData = $this->request->data['M298s'];

		// 検索条件を設定する
		$searchCondition['EmpNo']    = $postData['EmpNo'];    // 職員番号
		// TODO 和暦から西暦に変換する
		$searchCondition['PaidYM']   = $postData['PaidYM'];   // 支給年月
		$searchCondition['PaidDiv']  = $postData['PaidDiv'];  // 支給区分
		$searchCondition['PayerDiv'] = $postData['PayerDiv']; // 支払者区分

		// ********************  ビジネスロジック  ********************

		// テーブル[人事基本情報]からデータを取得する
		$personalInfo = array();
		if(isset($searchCondition['EmpNo'])){
			$personalInfo = $this->JtKihonKihon->find('first', array('conditions' => array('EmpNo' => $searchCondition['EmpNo'])));
		}

		// findのパラメータを設定する
		// 追加条件：論理削除されていないこと
		$searchCondition['delete_flg'] = 0;
		$params = array(
			'conditions' => $searchCondition
		);

		// テーブル[支給明細データ]からデータを取得する
		$meisaiInfo = $this->QtMeisai->find('first', $params);
		// テーブル[支給明細データ：日割]からデータを取得する
		$hiwariAllInfo = $this->QtMeisaiHiwari->find('all', $params);

		// 共通エリア情報
		$kihonInfo = array();
		// 検索結果にレコードがあるとき
		if(!empty($hiwariAllInfo)){
			// 日割データの1レコード目は共通で使用するので、抽出する
			$kihonInfo = $hiwariAllInfo[0];
		}

		// テーブル[支給明細データ：その他支給内訳]からデータを取得する(タブ01、タブ08で使用する)
		$meisaiUchiSonotasikyuList = $this->QtMeisaiUchiSonotasikyu->findMeisaiUchiSonotasikyu($searchCondition['PaidYM'], $searchCondition['EmpNo'], $searchCondition['PaidDiv'], $searchCondition['PayerDiv']);

		// タブ01：基本情報
		$this->tab01($meisaiUchiSonotasikyuList);

		// タブ02：日割情報
		$this->tab02($hiwariAllInfo);

		// タブ05：超勤・休日・夜勤
		$this->tab05($searchCondition['EmpNo'], $searchCondition['PaidYM'], $searchCondition['PaidDiv'], $searchCondition['PayerDiv']);

		// タブ06：特勤・宿日直・管特
		$this->tab06($searchCondition['EmpNo'], $searchCondition['PaidYM'], $searchCondition['PaidDiv'], $searchCondition['PayerDiv']);

		// タブ07：能率給内訳
		$this->tab07($searchCondition['EmpNo'], $searchCondition['PaidYM'], $searchCondition['PaidDiv'], $searchCondition['PayerDiv']);

		// タブ08：旅費・その他支給
		$this->tab08($searchCondition['EmpNo'], $searchCondition['PaidYM'], $searchCondition['PaidDiv'], $searchCondition['PayerDiv']);

		// タブ09：福利控除
		$this->tab09($searchCondition['EmpNo'], $searchCondition['PaidYM'], $searchCondition['PaidDiv'], $searchCondition['PayerDiv']);

		// タブ10：賃金
		$this->tab10($searchCondition['EmpNo'], $searchCondition['PaidYM'], $searchCondition['PaidDiv'], $searchCondition['PayerDiv']);

		// ********************  画面へのデータ反映  ********************

		// 前画面からの検索条件をそのまま画面にセットする
 		$this->set('searchCondition', $searchCondition);

		// 取得データを設定する
		$this->set('personalInfo', $personalInfo);
		$this->set('meisaiInfo', $meisaiInfo);
		$this->set('kihonInfo', $kihonInfo);
		$this->set(compact('meisaiUchiSonotasikyuList'));

		// ********************  遷移先画面の設定  ********************

		// このメソッドには対応する画面はないので、元の画面にレンダリングする
		$this->render('index');

	}

	/**
	 * 初期値を設定する
	 */
	private function _initSet() {

		// 画面側でエラーが出ないように空の配列をセットしておく
		$searchCondition = array();
		$this->set('searchCondition', $searchCondition);
		$personalInfo = array();
		$this->set('personalInfo', $personalInfo);
		$meisaiInfo = array();
		$this->set('meisaiInfo', $meisaiInfo);
		$kihonInfo = array();
		$this->set('kihonInfo', $kihonInfo);
		$hiwariInfo = array();
		$this->set('hiwariInfo', $hiwariInfo);
		$uchiSonotaInfo = array();
		$this->set('uchiSonotaInfo', $uchiSonotaInfo);
		$meisaiUchiChinginList = array();
		$this->set('meisaiUchiChinginList', $meisaiUchiChinginList);
		$meisaiUchiFukurikojoList = array();
		$this->set('meisaiUchiFukurikojoList', $meisaiUchiFukurikojoList);
		$meisaiUchiRyohiList = array();
		$this->set('meisaiUchiRyohiList', $meisaiUchiRyohiList);
		$meisaiUchiSonotasikyuList = array();
		$this->set('meisaiUchiSonotasikyuList', $meisaiUchiSonotasikyuList);
		$meisaiUchiNorituList = array();
		$this->set('meisaiUchiNorituList', $meisaiUchiNorituList);
		$meisaiUchiTokkinList = array();
		$this->set('meisaiUchiTokkinList', $meisaiUchiTokkinList);
		$meisaiUchiShukuList = array();
		$this->set('meisaiUchiShukuList', $meisaiUchiShukuList);
		$meisaiUchiKantokuList = array();
		$this->set('meisaiUchiKantokuList', $meisaiUchiKantokuList);
		$meisaiUchiChokinList = array();
		$this->set('meisaiUchiChokinList', $meisaiUchiChokinList);
		$meisaiUchiKyujitukyuList = array();
		$this->set('meisaiUchiKyujitukyuList', $meisaiUchiKyujitukyuList);
		$uchiKinsetsuchiRyohi = array();
		$this->set('uchiKinsetsuchiRyohi', $uchiKinsetsuchiRyohi);
	}

	/**
	 * 支給明細照会 タブ01：基本情報
	 *
	 * @param array テーブル[支給明細データ：その他支給内訳]から取得したデータ
	 */
	private function tab01($meisaiUchiSonotasikyuList) {

		// その他支給（内、近接地内旅費）を算出する
		// 算出方法：その他支給内訳.その他支給種別 の　10,11 のカラム"金額"を合算して格納。

		// 10のカラムの金額と11のカラムの金額を抽出する
		$amount10 = 0;
		$amount11 = 0;
		foreach($meisaiUchiSonotasikyuList as $record){
			// 10のカラムの金額を取得する
			if($record['QtMeisaiUchiSonotasikyu']['EtcTypeCD'] === '10'){
				$amount10 = $record['QtMeisaiUchiSonotasikyu']['Amounts'];
			}
			// 11のカラムの金額を取得する
			if($record['QtMeisaiUchiSonotasikyu']['EtcTypeCD'] === '11'){
				$amount11 = $record['QtMeisaiUchiSonotasikyu']['Amounts'];
			}
		}
		// 10,11 のカラム"金額"を合算して格納する
		$uchiKinsetsuchiRyohi = $amount10 + $amount11;

		// 取得データをViewに渡す
		$this->set(compact('uchiKinsetsuchiRyohi'));
	}

	/**
	 * 支給明細照会　タブ02：日割情報
	 *
	 * @param array テーブル[支給明細データ：日割]から取得したデータ
	 */
	private function tab02($hiwariAllInfo) {

		// レコード数が1件or複数の判定フラグを作成する
		$hiwariMultiRecordFlg = false;
		// 日割データが複数あるとき
		if(count($hiwariAllInfo) > 1){
			// 判定用のフラグをONにする
			$hiwariMultiRecordFlg = true;
		}

		$hiwariInfo = array();
		// 日割情報の検索結果にレコードがあるとき
		if(!empty($hiwariAllInfo)){

			// 日割データの２コード目以降は、タブ「日割情報」で表示する
			// 日割データが複数あるとき
			if($hiwariMultiRecordFlg){
				$i = 0;
				foreach($hiwariAllInfo as $hiwariRecord){
					if($i > 0){
						// 日割データの２コード目以降は、タブ「日割情報」で表示する
						$hiwariInfo[] = $hiwariRecord;
					}
					$i++;
				}
			}
		}

		// 配列を組み替える（支給年月日が同一のレコード同士をグルーピングする）
		$tmpArray = array();
		foreach($hiwariInfo as $record){
			$tmpArray[$record['QtMeisaiHiwari']['PaidYM']][] =  $record;
		}
		$hiwariInfo = $tmpArray;

		// 取得データをViewに渡す
		$this->set('hiwariMultiRecordFlg', $hiwariMultiRecordFlg);
		$this->set('hiwariInfo', $hiwariInfo);
	}

	/**
	 * 支給明細照会　タブ05：超勤・休日・夜勤
	 */
	private function tab05($empNo, $paidYm, $paidDiv, $payerDiv) {

		// テーブル[支給明細データ：超勤内訳]からデータを取得する
		$meisaiUchiChokinList = $this->QtMeisaiUchiChokin->findMeisaiUchiChokin($paidYm, $empNo, $paidDiv, $payerDiv);

		// テーブル[支給明細データ：休日給内訳]からデータを取得する
		$meisaiUchiKyujitukyuList = $this->QtMeisaiUchiKyujitukyu->findMeisaiUchiKyujitukyu($paidYm, $empNo, $paidDiv, $payerDiv);

		// テーブル[支給明細データ：夜勤内訳]からデータを取得する
		$meisaiUchiYakinList = $this->QtMeisaiUchiYakin->findMeisaiUchiYakin($paidYm, $empNo, $paidDiv, $payerDiv);

		// 取得データをViewに渡す
		$this->set(compact('meisaiUchiChokinList'));
		$this->set(compact('meisaiUchiKyujitukyuList'));
		$this->set(compact('meisaiUchiYakinList'));
	}

	/**
	 * 支給明細照会　タブ06：特勤・宿日直・管特
	 */
	private function tab06($empNo, $paidYm, $paidDiv, $payerDiv) {

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
	private function tab07($empNo, $paidYm, $paidDiv, $payerDiv) {

		// テーブル[支給明細データ：旅費内訳]からデータを取得する
		$meisaiUchiNorituList = $this->QtMeisaiUchiNoritu->findMeisaiUchiNoritu($paidYm, $empNo, $paidDiv, $payerDiv);

		// 取得データをViewに渡す
		$this->set(compact('meisaiUchiNorituList'));
	}

	/**
	 * 支給明細照会　タブ08：旅費・その他支給
	 */
	private function tab08($empNo, $paidYm, $paidDiv, $payerDiv) {

		// テーブル[支給明細データ：旅費内訳]からデータを取得する
		$meisaiUchiRyohiList = $this->QtMeisaiUchiRyohi->findMeisaiUchiRyohi($paidYm, $empNo, $paidDiv, $payerDiv);

		// 取得データをViewに渡す
		$this->set(compact('meisaiUchiRyohiList'));
	}

	/**
	 * 支給明細照会　タブ09：福利控除
	 */
	private function tab09($empNo, $paidYm, $paidDiv, $payerDiv) {

		// テーブル[支給明細データ：福利控除内訳]からデータを取得する
		$meisaiUchiFukurikojoList = $this->QtMeisaiUchiFukurikojo->findMeisaiUchiFukurikojo($paidYm, $empNo, $paidDiv, $payerDiv);

		// 取得データをViewに渡す
		$this->set(compact('meisaiUchiFukurikojoList'));
	}

	/**
	 * 支給明細照会　タブ10：賃金
	 */
	private function tab10($empNo, $paidYm, $paidDiv, $payerDiv) {

		// テーブル[支給明細データ：賃金内訳]からデータを取得する
		$meisaiUchiChinginList = $this->QtMeisaiUchiChingin->findMeisaiUchiChingin($paidYm, $empNo, $paidDiv, $payerDiv);

		// 取得データをViewに渡す
		$this->set(compact('meisaiUchiChinginList'));
	}
}