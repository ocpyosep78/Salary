<?php

App::uses('CommonController', 'Controller');

/**
 * M061sController Controller
 * 正当支給照会コントローラー
 */
class M061sController extends CommonController {

	// この画面で使うモデル（テーブル）を宣言する
	public $uses = array('QtSeitoKotei', 'QtSeitoHendo', 'QtSeitoHiwari', 'QmKyuryoChild', 'ZSalaryTableNamemaster',
							'QmHoshogaku', 'QtSeitoUchiChokin', 'QtSeitoUchiKyujitukyu'
	);

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

		// 清掃／臨職の表示内容を判定する
		$sweeperYosan = '';
		if($commonInfo['QtSeitoHiwari']['TempEmpPreDiv'] == '2') {
			// 臨時職員予算区分が2のとき
			$sweeperYosan = '事業課予算';
		} elseif($commonInfo['QtSeitoHiwari']['TempEmpPreDiv'] == '1') {
			// 臨時職員予算区分が1のとき
			$sweeperYosan = '人事課予算';
		} else {
			// 臨時職員予算区分が2および1ではないとき（想定値：0）
			if($commonInfo['QtSeitoHiwari']['SweeperFlg'] == '1'){
				// 清掃職員フラグが1のとき
				$sweeperYosan = '清掃職員';
			}
		}
		$commonInfo['sweeperYosan'] = $sweeperYosan;

		// 給料/報酬の金額を取得する
		$commonInfo['kyuryoHoushuGaku'] = $this->QmKyuryoChild->getSumAddAllow($searchCondition['PaidYM'], $commonInfo['QtSeitoHiwari']['SalaryTable'], $commonInfo['QtSeitoHiwari']['SalaryClass'], $commonInfo['QtSeitoHiwari']['SalaryGrade']);

		// 現給保障 表(名称)を取得する
		$commonInfo['genkyuHoshoTableName'] = $this->ZSalaryTableNamemaster->getSalaryTableName($commonInfo['QtSeitoHiwari']['SalaryTable']);

		// 現給保障の金額を取得する
		$commonInfo['genkyuHoshoKingaku'] = $this->QmHoshogaku->getAmounts($searchCondition['PaidYM'], $commonInfo['QtSeitoHiwari']['SalaryTable'], $commonInfo['QtSeitoHiwari']['SalaryClass'], $commonInfo['QtSeitoHiwari']['SalaryGrade']);

		// タブ02：日割情報
		$this->tab02($searchCondition['PaidYM'], $hiwariAllInfo);

		// タブ05：超勤・休日・夜勤
		$this->tab05($searchCondition['EmpNo'], $searchCondition['PaidYM'], $searchCondition['PayerDiv']);

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

		// 画面側でエラーが出ないように空配列等の初期値をセットしておく
		$searchCondition = array();
		$hendoInfo = array();
		$koteiInfo = array();
		$commonInfo = array();
		$hiwariInfo = array();
		$hiwariMultiRecordFlg = false;
		$seitoUchiChokinList = array();
		$seitoUchiKyujitukyuList = array();

		// 画面への設定
		$this->set('searchCondition', $searchCondition);
		$this->set('hendoInfo', $hendoInfo);
		$this->set('koteiInfo', $koteiInfo);
		$this->set('commonInfo', $commonInfo);
		$this->set('hiwariInfo', $hiwariInfo);
		$this->set('hiwariMultiRecordFlg', $hiwariMultiRecordFlg);
		$this->set('seitoUchiChokinList', $seitoUchiChokinList);
		$this->set('seitoUchiKyujitukyuList', $seitoUchiKyujitukyuList);
	}

	/**
	 * タブ02：日割情報
	 *
	 * @param string $paidYm        支給年月の入力値
	 * @param array  $hiwariAllInfo テーブル[支給明細データ：日割]から取得したデータ
	 */
	private function tab02($paidYm, $hiwariAllInfo) {

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

		// 清掃／臨職の表示内容等、個別に設定する必要があるものの設定を行う
		foreach($hiwariInfo as $key => $record){
			// 清掃／臨職の表示内容を判定する
			$sweeperYosan = '';
			if($record['QtSeitoHiwari']['TempEmpPreDiv'] == '2') {
				// 臨時職員予算区分が2のとき
				$sweeperYosan = '事業課予算';
			} elseif($record['QtSeitoHiwari']['TempEmpPreDiv'] == '1') {
				// 臨時職員予算区分が1のとき
				$sweeperYosan = '人事課予算';
			} else {
				// 臨時職員予算区分が2および1ではないとき（想定値：0）
				if($record['QtSeitoHiwari']['SweeperFlg'] == '1'){
					// 清掃職員フラグが1のとき
					$sweeperYosan = '清掃職員';
				}
			}
			$hiwariInfo[$key]['sweeperYosan'] = $sweeperYosan;

			// 給料/報酬の金額を取得する
			$hiwariInfo[$key]['kyuryoHoushuGaku'] = $this->QmKyuryoChild->getSumAddAllow($paidYm, $record['QtSeitoHiwari']['SalaryTable'], $record['QtSeitoHiwari']['SalaryClass'], $record['QtSeitoHiwari']['SalaryGrade']);

			// 現給保障 表(名称)を取得する
			$hiwariInfo[$key]['genkyuHoshoTableName'] = $this->ZSalaryTableNamemaster->getSalaryTableName($record['QtSeitoHiwari']['SalaryTable']);

			// 現給保障の金額を取得する
			$hiwariInfo[$key]['genkyuHoshoKingaku'] = $this->QmHoshogaku->getAmounts($paidYm, $record['QtSeitoHiwari']['SalaryTable'], $record['QtSeitoHiwari']['SalaryClass'], $record['QtSeitoHiwari']['SalaryGrade']);
		}

		// 配列を組み替える（支給年月日が同一のレコード同士をグルーピングする）
		$tmpArray = array();
		foreach($hiwariInfo as $record){
			$tmpArray[$record['QtSeitoHiwari']['PaidYM']][] =  $record;
		}
		$hiwariInfo = $tmpArray;

		// 取得データをViewに渡す
		$this->set('hiwariMultiRecordFlg', $hiwariMultiRecordFlg);
		$this->set('hiwariInfo', $hiwariInfo);
	}

	/**
	 * タブ05：超勤・休日・夜勤
	 */
	private function tab05($empNo, $paidYm, $payerDiv) {
		// テーブル[正当支給データ：超勤内訳]からデータを取得する
		$seitoUchiChokinList = $this->QtSeitoUchiChokin->findSeitoUchiChokin($paidYm, $empNo, $payerDiv);

		// テーブル[正当支給データ：休日給内訳]からデータを取得する
		$seitoUchiKyujitukyuList = $this->QtSeitoUchiKyujitukyu->findSeitoUchiKyujitukyu($paidYm, $empNo, $payerDiv);

		// 取得データをViewに渡す
		$this->set(compact('seitoUchiChokinList'));
		$this->set(compact('seitoUchiKyujitukyuList'));
	}
}

