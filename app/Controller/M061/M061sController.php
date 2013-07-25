<?php

App::uses('CommonController', 'Controller');

/**
 * M061sController Controller
 * 正当支給照会コントローラー
 */
class M061sController extends CommonController {

	// この画面で使うモデル（テーブル）を宣言する
	public $uses = array('QtSeitoKotei', 'QtSeitoHendo', 'QtSeitoHiwari', 'QmKyuryoChild', 'ZSalaryTableNamemaster',
							'QmHoshogaku', 'QtSeitoUchiChokin', 'QtSeitoUchiKyujitukyu', 'QtSeitoUchiYakin', 'QtSeitoUchiTokkin',
								'QtSeitoUchiShuku', 'QtSeitoUchiKantoku', 'QtSeitoUchiNoritu', 'QtSeitoUchiChingin', 'JmShozoku',
									'ZSalaryTableClsName', 'QmKamoku', 'ZDetachmentAllowDivmaster'
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

		// 消去ボタンを押下した場合
		if(isset($this->request->data['clear'])) {
			// 初期画面を表示する
			$this->redirect('index');
		}

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

		// TODO 検索結果が0件のときは、その旨を伝えるポップアップを表示する

		// 共通エリア情報
		$commonInfo = array();
		// 検索結果にレコードがあるとき
		if(!empty($hiwariAllInfo)){
			// 日割データの1レコード目は共通で使用するので、抽出する
			$commonInfo = $hiwariAllInfo[0];
		}

		// 給与報酬科目（略称）を取得する
		$commonInfo['salaryRewardsAccountShortName'] = $this->QmKamoku->getAccountShortName($searchCondition['PaidYM'], $commonInfo['QtSeitoHiwari']['SalaryRewardsAccountCD']);

		// 児童手当科目（略称）を取得する
		$commonInfo['childAllowAccountShortName'] = $this->QmKamoku->getAccountShortName($searchCondition['PaidYM'], $commonInfo['QtSeitoHiwari']['ChildAllowAccountCD']);

		// 超過勤務科目（略称）を取得する
		$commonInfo['overTimeWorkAccountShortName'] = $this->QmKamoku->getAccountShortName($searchCondition['PaidYM'], $commonInfo['QtSeitoHiwari']['OverTimeWorkAccountCD']);

		// 休日給科目（略称）を取得する
		$commonInfo['holidaySalaryAccountShortName'] = $this->QmKamoku->getAccountShortName($searchCondition['PaidYM'], $commonInfo['QtSeitoHiwari']['HolidaySalaryAccountCD']);

		// 所属（略称）を取得する
		$commonInfo['deptShortName'] = $this->JmShozoku->getDeptShortName($searchCondition['PaidYM'], $commonInfo['QtSeitoHiwari']['DepCD']);

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

		// 月額/日額/時給(名称)を取得する
		$commonInfo['salaryClassName'] = $this->ZSalaryTableClsName->getSalaryClassName($commonInfo['QtSeitoHiwari']['SalaryTable'], $commonInfo['QtSeitoHiwari']['SalaryClass']);

		// 給料/報酬の金額を取得する
		$commonInfo['kyuryoHoushuGaku'] = $this->QmKyuryoChild->getSumAddAllow($searchCondition['PaidYM'], $commonInfo['QtSeitoHiwari']['SalaryTable'], $commonInfo['QtSeitoHiwari']['SalaryClass'], $commonInfo['QtSeitoHiwari']['SalaryGrade']);

		// 現給保障 表(名称)を取得する
		$commonInfo['genkyuHoshoTableName'] = $this->ZSalaryTableNamemaster->getSalaryTableName($commonInfo['QtSeitoHiwari']['SalaryTable']);

		// 現給保障の金額を取得する
		$commonInfo['genkyuHoshoKingaku'] = $this->QmHoshogaku->getAmounts($searchCondition['PaidYM'], $commonInfo['QtSeitoHiwari']['SalaryTable'], $commonInfo['QtSeitoHiwari']['SalaryClass'], $commonInfo['QtSeitoHiwari']['SalaryGrade']);

		// タブ02：日割情報
		$this->tab02($searchCondition['PaidYM'], $hiwariAllInfo);

		// タブ03：詳細情報
		$this->tab03($koteiInfo);

		// タブ05：超勤・休日・夜勤
		$this->tab05($searchCondition['EmpNo'], $searchCondition['PaidYM'], $searchCondition['PayerDiv']);

		// タブ06：特勤・宿日直・管特
		$this->tab06($searchCondition['EmpNo'], $searchCondition['PaidYM'], $searchCondition['PayerDiv']);

		// タブ07：能率給内訳
		$this->tab07($searchCondition['EmpNo'], $searchCondition['PaidYM'], $searchCondition['PayerDiv']);

		// タブ08：賃金
		$this->tab08($searchCondition['EmpNo'], $searchCondition['PaidYM'], $searchCondition['PayerDiv']);

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
		$seitoUchiYakinList = array();
		$seitoUchiTokkinList = array();
		$seitoUchiShukuList = array();
		$seitoUchiKantokuList = array();
		$seitoUchiNorituList = array();
		$seitoUchiChinginList = array();

		// 画面への設定
		$this->set('searchCondition', $searchCondition);
		$this->set('hendoInfo', $hendoInfo);
		$this->set('koteiInfo', $koteiInfo);
		$this->set('commonInfo', $commonInfo);
		$this->set('hiwariInfo', $hiwariInfo);
		$this->set('hiwariMultiRecordFlg', $hiwariMultiRecordFlg);
		$this->set('seitoUchiChokinList', $seitoUchiChokinList);
		$this->set('seitoUchiKyujitukyuList', $seitoUchiKyujitukyuList);
		$this->set('seitoUchiYakinList', $seitoUchiYakinList);
		$this->set('seitoUchiTokkinList', $seitoUchiTokkinList);
		$this->set('seitoUchiShukuList', $seitoUchiShukuList);
		$this->set('seitoUchiKantokuList', $seitoUchiKantokuList);
		$this->set('seitoUchiNorituList', $seitoUchiNorituList);
		$this->set('seitoUchiChinginList', $seitoUchiChinginList);

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

			// 給与報酬科目（略称）を取得する
			$hiwariInfo[$key]['salaryRewardsAccountShortName'] = $this->QmKamoku->getAccountShortName($paidYm, $record['QtSeitoHiwari']['SalaryRewardsAccountCD']);

			// 児童手当科目（略称）を取得する
			$hiwariInfo[$key]['childAllowAccountShortName'] = $this->QmKamoku->getAccountShortName($paidYm, $record['QtSeitoHiwari']['ChildAllowAccountCD']);

			// 超過勤務科目（略称）を取得する
			$hiwariInfo[$key]['overTimeWorkAccountShortName'] = $this->QmKamoku->getAccountShortName($paidYm, $record['QtSeitoHiwari']['OverTimeWorkAccountCD']);

			// 休日給科目（略称）を取得する
			$hiwariInfo[$key]['holidaySalaryAccountShortName'] = $this->QmKamoku->getAccountShortName($paidYm, $record['QtSeitoHiwari']['HolidaySalaryAccountCD']);

			// 所属（略称）を取得する
			$hiwariInfo[$key]['deptShortName'] = $this->JmShozoku->getDeptShortName($paidYm, $record['QtSeitoHiwari']['DepCD']);

			// 月額/日額/時給(名称)を取得する
			$hiwariInfo[$key]['salaryClassName'] = $this->ZSalaryTableClsName->getSalaryClassName($record['QtSeitoHiwari']['SalaryTable'], $record['QtSeitoHiwari']['SalaryClass']);

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
	 * タブ03：詳細画面
	 */
	private function tab03(&$koteiInfo) {

		// 単身赴任手当区分（名称）を取得する
		$koteiInfo['detachmentAllowDivName'] = $this->ZDetachmentAllowDivmaster->getName($koteiInfo['QtSeitoKotei']['DetachmentAllowDivCD']);
	}

	/**
	 * タブ05：超勤・休日・夜勤
	 */
	private function tab05($empNo, $paidYm, $payerDiv) {

		// テーブル[正当支給データ：超勤内訳]からデータを取得する
		$seitoUchiChokinList = $this->QtSeitoUchiChokin->findSeitoUchiChokin($paidYm, $empNo, $payerDiv);

		// 超勤内訳の科目（略称）を取得する
		foreach($seitoUchiChokinList as $key => $record) {
			$seitoUchiChokinList[$key]['accountShortName'] = $this->QmKamoku->getAccountShortName($paidYm, $record['QtSeitoUchiChokin']['AccountCD']);
		}

		// テーブル[正当支給データ：休日給内訳]からデータを取得する
		$seitoUchiKyujitukyuList = $this->QtSeitoUchiKyujitukyu->findSeitoUchiKyujitukyu($paidYm, $empNo, $payerDiv);

		// 休日給内訳の科目（略称）を取得する
		foreach($seitoUchiKyujitukyuList as $key => $record) {
			$seitoUchiKyujitukyuList[$key]['accountShortName'] = $this->QmKamoku->getAccountShortName($paidYm, $record['QtSeitoUchiKyujitukyu']['AccountCD']);
		}

		// テーブル[正当支給データ：夜勤内訳]からデータを取得する
		$seitoUchiYakinList = $this->QtSeitoUchiYakin->findSeitoUchiYakin($paidYm, $empNo, $payerDiv);

		// 夜勤内訳の科目（略称）を取得する
		foreach($seitoUchiYakinList as $key => $record) {
			$seitoUchiYakinList[$key]['accountShortName'] = $this->QmKamoku->getAccountShortName($paidYm, $record['QtSeitoUchiYakin']['AccountCD']);
		}

		// 取得データをViewに渡す
		$this->set(compact('seitoUchiChokinList'));
		$this->set(compact('seitoUchiKyujitukyuList'));
		$this->set(compact('seitoUchiYakinList'));
	}

	/**
	 * タブ06：特勤・宿日直・管特
	 */
	private function tab06($empNo, $paidYm, $payerDiv) {

		// テーブル[正当支給データ：特勤内訳]からデータを取得する
		$seitoUchiTokkinList = $this->QtSeitoUchiTokkin->findSeitoUchiTokkin($paidYm, $empNo, $payerDiv);

		// 特勤内訳の科目（略称）を取得する
		foreach($seitoUchiTokkinList as $key => $record) {
			$seitoUchiTokkinList[$key]['accountShortName'] = $this->QmKamoku->getAccountShortName($paidYm, $record['QtSeitoUchiTokkin']['AccountCD']);
		}

		// テーブル[正当支給データ：宿日直内訳]からデータを取得する
		$seitoUchiShukuList = $this->QtSeitoUchiShuku->findSeitoUchiShuku($paidYm, $empNo, $payerDiv);

		// 宿日直内訳の科目（略称）を取得する
		foreach($seitoUchiShukuList as $key => $record) {
			$seitoUchiShukuList[$key]['accountShortName'] = $this->QmKamoku->getAccountShortName($paidYm, $record['QtSeitoUchiShuku']['AccountCD']);
		}

		// テーブル[正当支給データ：管理職特勤内訳]からデータを取得する
		$seitoUchiKantokuList = $this->QtSeitoUchiKantoku->findSeitoUchiKantoku($paidYm, $empNo, $payerDiv);

		// 管理職特勤内訳の科目（略称）を取得する
		foreach($seitoUchiKantokuList as $key => $record) {
			$seitoUchiKantokuList[$key]['accountShortName'] = $this->QmKamoku->getAccountShortName($paidYm, $record['QtSeitoUchiKantoku']['AccountCD']);
		}

		// 取得データをViewに渡す
		$this->set(compact('seitoUchiTokkinList'));
		$this->set(compact('seitoUchiShukuList'));
		$this->set(compact('seitoUchiKantokuList'));
	}

	/**
	 * タブ07：能率給
	 */
	private function tab07($empNo, $paidYm, $payerDiv) {

		// テーブル[正当支給データ：能率給内訳]からデータを取得する
		$seitoUchiNorituList = $this->QtSeitoUchiNoritu->findSeitoUchiNoritu($paidYm, $empNo, $payerDiv);

		// 能率給内訳の科目（略称）を取得する
		foreach($seitoUchiNorituList as $key => $record) {
			$seitoUchiNorituList[$key]['accountShortName'] = $this->QmKamoku->getAccountShortName($paidYm, $record['QtSeitoUchiNoritu']['AccountCD']);
		}

		// 取得データをViewに渡す
		$this->set(compact('seitoUchiNorituList'));
	}

	/**
	 * タブ08：賃金
	 */
	private function tab08($empNo, $paidYm, $payerDiv) {

		// テーブル[正当支給データ：賃金内訳]からデータを取得する
		$seitoUchiChinginList = $this->QtSeitoUchiChingin->findSeitoUchiChingin($paidYm, $empNo, $payerDiv);

		// 賃金内訳の科目（略称）を取得する
		foreach($seitoUchiChinginList as $key => $record) {
			$seitoUchiChinginList[$key]['accountShortName'] = $this->QmKamoku->getAccountShortName($paidYm, $record['QtSeitoUchiChingin']['AccountCD']);
		}

		// 取得データをViewに渡す
		$this->set(compact('seitoUchiChinginList'));
	}

}

