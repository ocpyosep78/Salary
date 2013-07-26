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
							'QtMeisaiUchiYakin', 'QmKyuryoChild', 'ZSalaryTableNamemaster', 'QmHoshogaku', 'BankMaster',
							'JmShozoku', 'ZSalaryTableClsName', 'QmKamoku', 'ZDetachmentAllowDivmaster', 'QmKmSeisekiritsuSanshutsuChild'
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

		// POSTデータを受け取る
		$postData = $this->request->data['M298s'];

		// 消去ボタンを押下した場合
		if(isset($this->request->data['clear'])) {
			// 初期画面を表示する
			$this->redirect('index');
		}
		
		// 入力チェック
		$validationData = $postData;
		$this->QtMeisai->set($validationData);
		$validateError = $this->QtMeisai->invalidFields();
		if(!empty($validateError)) {
			// バリデーションエラーのとき
			
			// 初期値を設定する
			$this->_initSet();
			
			// 入力値を設定する
			$searchCondition = array();
			$searchCondition['EmpNo']    = $postData['EmpNo'];
			$searchCondition['PaidYM']   = $postData['PaidYM'];
			$searchCondition['PaidDiv']  = $postData['PaidDiv'];
			$searchCondition['PayerDiv'] = $postData['PayerDiv'];
			$this->set('searchCondition', $searchCondition);

			// エラーメッセージの設定
			$errorMsgList = array();
			foreach($validateError as $ary) {
				foreach($ary as $errorMsg) {
					$errorMsgList[] = $errorMsg;
				}
			}
			$this->set('errorMsgList', $errorMsgList);
			
			// 初期画面をレンダリング
			$this->render('index');
			
			// 処理終了
			return;
		}

		// POSTデータを設定する
		$empNo    = $postData['EmpNo'];                          // 職員番号
		// 和暦から西暦に変換する
		$paidYM   = $this->getChristianEra($postData['PaidYM']); // 支給年月
		$paidDiv  = $postData['PaidDiv'];                        // 支給区分
		$payerDiv = $postData['PayerDiv'];                       // 支払者区分

		// 支給年月の入力値の翌月
		$nextMonth = date("Y-m-d", strtotime(date($paidYM) . "+1 month"));

		// 検索条件を設定する
		$searchCondition = array();
		$searchCondition['EmpNo']     = $empNo;
		$searchCondition['PaidYM >='] = $paidYM;
		$searchCondition['PaidYM <']  = $nextMonth;
		$searchCondition['PaidDiv']   = $paidDiv;
		$searchCondition['PayerDiv']  = $payerDiv;

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
			'conditions' => $searchCondition,
		);

		// テーブル[支給明細データ]からデータを取得する
		$meisaiInfo = $this->QtMeisai->find('first', $params);

		// TableNoで昇順
		$params['order'] = array('QtMeisaiHiwari.TableNo');
		// テーブル[支給明細データ：日割]からデータを取得する
		$hiwariAllInfo = $this->QtMeisaiHiwari->find('all', $params);

		// 検索結果が0件のときは、その旨を伝えるポップアップを表示する
		if(empty($hiwariAllInfo) || empty($meisaiInfo)) {

			// 初期値を設定する
			$this->_initSet();

			// 検索条件の値など、最低限必要な部分は設定する
			$searchCondition['PaidYM'] = $postData['PaidYM'];
			$this->set('searchCondition', $searchCondition);
			$this->set('personalInfo', $personalInfo);

			// エラーメッセージの設定
			$errorMsgList = array();
			$errorMsgList[] = "検索結果がありません。";
			$this->set('errorMsgList', $errorMsgList);

			// 初期画面をレンダリング
			$this->render('index');

			// 処理終了
			return;

		}

		// 共通エリア情報
		$commonInfo = array();
		// 検索結果にレコードがあるとき
		if(!empty($hiwariAllInfo)){
			// 日割データの1レコード目は共通で使用するので、抽出する
			$commonInfo = $hiwariAllInfo[0];
		}

		// 給与報酬科目（略称）を取得する
		$commonInfo['salaryRewardsAccountShortName'] = $this->QmKamoku->getAccountShortName($paidYM, $commonInfo['QtMeisaiHiwari']['SalaryRewardsAccountCD']);

		// 児童手当科目（略称）を取得する
		$commonInfo['childAllowAccountShortName'] = $this->QmKamoku->getAccountShortName($paidYM, $commonInfo['QtMeisaiHiwari']['ChildAllowAccountCD']);

		// 超過勤務科目（略称）を取得する
		$commonInfo['overTimeWorkAccountShortName'] = $this->QmKamoku->getAccountShortName($paidYM, $commonInfo['QtMeisaiHiwari']['OverTimeWorkAccountCD']);

		// 休日給科目（略称）を取得する
		$commonInfo['holidaySalaryAccountShortName'] = $this->QmKamoku->getAccountShortName($paidYM, $commonInfo['QtMeisaiHiwari']['HolidaySalaryAccountCD']);

		// 所属（略称）を取得する
		$commonInfo['deptShortName'] = $this->JmShozoku->getDeptShortName($paidYM, $commonInfo['QtMeisaiHiwari']['DepCD']);

		// 清掃／臨職の表示内容を判定する
		$sweeperYosan = '';
		if($commonInfo['QtMeisaiHiwari']['TempEmpPreDiv'] == '2') {
			// 臨時職員予算区分が2のとき
			$sweeperYosan = '事業課予算';
		} elseif($commonInfo['QtMeisaiHiwari']['TempEmpPreDiv'] == '1') {
			// 臨時職員予算区分が1のとき
			$sweeperYosan = '人事課予算';
		} else {
			// 臨時職員予算区分が2および1ではないとき（想定値：0）
			if($commonInfo['QtMeisaiHiwari']['SweeperFlg'] == '1'){
				// 清掃職員フラグが1のとき
				$sweeperYosan = '清掃職員';
			}
		}
		$commonInfo['sweeperYosan'] = $sweeperYosan;

		// 月額/日額/時給(名称)を取得する
		$commonInfo['salaryClassName'] = $this->ZSalaryTableClsName->getSalaryClassName($commonInfo['QtMeisaiHiwari']['SalaryTable'], $commonInfo['QtMeisaiHiwari']['SalaryClass']);

		// 給料/報酬の金額を取得する
		$commonInfo['kyuryoHoushuGaku'] = $this->QmKyuryoChild->getSumAddAllow($paidYM, $commonInfo['QtMeisaiHiwari']['SalaryTable'], $commonInfo['QtMeisaiHiwari']['SalaryClass'], $commonInfo['QtMeisaiHiwari']['SalaryGrade']);

		// 現給保障 表(名称)を取得する
		$commonInfo['genkyuHoshoTableName'] = $this->ZSalaryTableNamemaster->getSalaryTableName($commonInfo['QtMeisaiHiwari']['SalaryTable']);

		// 現給保障の金額を取得する
		$commonInfo['genkyuHoshoKingaku'] = $this->QmHoshogaku->getAmounts($paidYM, $commonInfo['QtMeisaiHiwari']['SalaryTable'], $commonInfo['QtMeisaiHiwari']['SalaryClass'], $commonInfo['QtMeisaiHiwari']['SalaryGrade']);

		// テーブル[支給明細データ：その他支給内訳]からデータを取得する(タブ01、タブ08で使用する)
		$meisaiUchiSonotasikyuList = $this->QtMeisaiUchiSonotasikyu->findMeisaiUchiSonotasikyu($paidYM, $empNo, $paidDiv, $payerDiv);

		// タブ01：基本情報
		$this->tab01($meisaiInfo, $meisaiUchiSonotasikyuList);

		// タブ02：日割情報
		$this->tab02($paidYM, $hiwariAllInfo);

		// タブ03：詳細画面
		$this->tab03($meisaiInfo);

		// タブ04：期末勤勉詳細
		$this->tab04($paidYM, $meisaiInfo);

		// タブ05：超勤・休日・夜勤
		$this->tab05($empNo, $paidYM, $paidDiv, $payerDiv);

		// タブ06：特勤・宿日直・管特
		$this->tab06($empNo, $paidYM, $paidDiv, $payerDiv);

		// タブ07：能率給内訳
		$this->tab07($empNo, $paidYM, $paidDiv, $payerDiv);

		// タブ08：旅費・その他支給
		$this->tab08($empNo, $paidYM, $paidDiv, $payerDiv);

		// タブ09：福利控除
		$this->tab09($empNo, $paidYM, $paidDiv, $payerDiv);

		// タブ10：賃金
		$this->tab10($empNo, $paidYM, $paidDiv, $payerDiv);

		// ********************  画面へのデータ反映  ********************

		// 前画面からの検索条件をそのまま画面にセットする
		$searchCondition['PaidYM'] = $postData['PaidYM'];
 		$this->set('searchCondition', $searchCondition);

		// 取得データを設定する
		$this->set('personalInfo', $personalInfo);
		$this->set('meisaiInfo', $meisaiInfo);
		$this->set('commonInfo', $commonInfo);
		$this->set(compact('meisaiUchiSonotasikyuList'));

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
		$personalInfo = array();
		$meisaiInfo = array();
		$commonInfo = array();
		$hiwariInfo = array();
		$hiwariMultiRecordFlg = false;
		$uchiSonotaInfo = array();
		$meisaiUchiChinginList = array();
		$meisaiUchiFukurikojoList = array();
		$meisaiUchiRyohiList = array();
		$meisaiUchiSonotasikyuList = array();
		$meisaiUchiNorituList = array();
		$meisaiUchiTokkinList = array();
		$meisaiUchiShukuList = array();
		$meisaiUchiKantokuList = array();
		$meisaiUchiChokinList = array();
		$meisaiUchiKyujitukyuList = array();
		$meisaiUchiYakinList = array();
		$uchiKinsetsuchiRyohi = "";
		$errorMsgList = array();


		// 画面への設定
		$this->set('searchCondition', $searchCondition);
		$this->set('personalInfo', $personalInfo);
		$this->set('meisaiInfo', $meisaiInfo);
		$this->set('commonInfo', $commonInfo);
		$this->set('hiwariInfo', $hiwariInfo);
		$this->set('hiwariMultiRecordFlg', $hiwariMultiRecordFlg);
		$this->set('uchiSonotaInfo', $uchiSonotaInfo);
		$this->set('meisaiUchiChinginList', $meisaiUchiChinginList);
		$this->set('meisaiUchiFukurikojoList', $meisaiUchiFukurikojoList);
		$this->set('meisaiUchiRyohiList', $meisaiUchiRyohiList);
		$this->set('meisaiUchiSonotasikyuList', $meisaiUchiSonotasikyuList);
		$this->set('meisaiUchiNorituList', $meisaiUchiNorituList);
		$this->set('meisaiUchiTokkinList', $meisaiUchiTokkinList);
		$this->set('meisaiUchiShukuList', $meisaiUchiShukuList);
		$this->set('meisaiUchiKantokuList', $meisaiUchiKantokuList);
		$this->set('meisaiUchiChokinList', $meisaiUchiChokinList);
		$this->set('meisaiUchiKyujitukyuList', $meisaiUchiKyujitukyuList);
		$this->set('meisaiUchiYakinList', $meisaiUchiYakinList);
		$this->set('uchiKinsetsuchiRyohi', $uchiKinsetsuchiRyohi);
		$this->set('errorMsgList', $errorMsgList);
	}

	/**
	 * 支給明細照会 タブ01：基本情報
	 *
	 * @param array $meisaiInfo                テーブル[支給明細データ]から取得したデータ
	 * @param array $meisaiUchiSonotasikyuList テーブル[支給明細データ：その他支給内訳]から取得したデータ
	 */
	private function tab01(&$meisaiInfo, $meisaiUchiSonotasikyuList) {

		// A口座の銀行名称、銀行支店名称を取得する
		$aBankAry = $this->BankMaster->getBankName($meisaiInfo['QtMeisai']['A_Account_BankCD'], $meisaiInfo['QtMeisai']['A_Account_BranchCD']);
		// 支給明細情報にA口座の銀行名称、銀行支店名称を設定する
		$meisaiInfo['QtMeisai']['A_BankNameKana']    = $aBankAry['BankNameKana'];    // 銀行名（カナ）
		$meisaiInfo['QtMeisai']['A_BankBrancheName'] = $aBankAry['BankBrancheName']; // 銀行支店名（漢字）

		// B口座の銀行名称、銀行支店名称を取得する
		$bBankAry = $this->BankMaster->getBankName($meisaiInfo['QtMeisai']['B_Account_BankCD'], $meisaiInfo['QtMeisai']['B_Account_BranchCD']);
		// 支給明細情報にA口座の銀行名称、銀行支店名称を設定する
		$meisaiInfo['QtMeisai']['B_BankNameKana']    = $bBankAry['BankNameKana'];    // 銀行名（カナ）
		$meisaiInfo['QtMeisai']['B_BankBrancheName'] = $bBankAry['BankBrancheName']; // 銀行支店名（漢字）

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
			if($record['QtMeisaiHiwari']['TempEmpPreDiv'] == '2') {
				// 臨時職員予算区分が2のとき
				$sweeperYosan = '事業課予算';
			} elseif($record['QtMeisaiHiwari']['TempEmpPreDiv'] == '1') {
				// 臨時職員予算区分が1のとき
				$sweeperYosan = '人事課予算';
			} else {
				// 臨時職員予算区分が2および1ではないとき（想定値：0）
				if($record['QtMeisaiHiwari']['SweeperFlg'] == '1'){
					// 清掃職員フラグが1のとき
					$sweeperYosan = '清掃職員';
				}
			}
			$hiwariInfo[$key]['sweeperYosan'] = $sweeperYosan;

			// 給与報酬科目（略称）を取得する
			$hiwariInfo[$key]['salaryRewardsAccountShortName'] = $this->QmKamoku->getAccountShortName($paidYm, $record['QtMeisaiHiwari']['SalaryRewardsAccountCD']);

			// 児童手当科目（略称）を取得する
			$hiwariInfo[$key]['childAllowAccountShortName'] = $this->QmKamoku->getAccountShortName($paidYm, $record['QtMeisaiHiwari']['ChildAllowAccountCD']);

			// 超過勤務科目（略称）を取得する
			$hiwariInfo[$key]['overTimeWorkAccountShortName'] = $this->QmKamoku->getAccountShortName($paidYm, $record['QtMeisaiHiwari']['OverTimeWorkAccountCD']);

			// 休日給科目（略称）を取得する
			$hiwariInfo[$key]['holidaySalaryAccountShortName'] = $this->QmKamoku->getAccountShortName($paidYm, $record['QtMeisaiHiwari']['HolidaySalaryAccountCD']);

			// 所属（略称）を取得する
			$hiwariInfo[$key]['deptShortName'] = $this->JmShozoku->getDeptShortName($paidYm, $record['QtMeisaiHiwari']['DepCD']);

			// 月額/日額/時給(名称)を取得する
			$hiwariInfo[$key]['salaryClassName'] = $this->ZSalaryTableClsName->getSalaryClassName($record['QtMeisaiHiwari']['SalaryTable'], $record['QtMeisaiHiwari']['SalaryClass']);

			// 給料/報酬の金額を取得する
			$hiwariInfo[$key]['kyuryoHoushuGaku'] = $this->QmKyuryoChild->getSumAddAllow($paidYm, $record['QtMeisaiHiwari']['SalaryTable'], $record['QtMeisaiHiwari']['SalaryClass'], $record['QtMeisaiHiwari']['SalaryGrade']);

			// 現給保障 表(名称)を取得する
			$hiwariInfo[$key]['genkyuHoshoTableName'] = $this->ZSalaryTableNamemaster->getSalaryTableName($record['QtMeisaiHiwari']['SalaryTable']);

			// 現給保障の金額を取得する
			$hiwariInfo[$key]['genkyuHoshoKingaku'] = $this->QmHoshogaku->getAmounts($paidYm, $record['QtMeisaiHiwari']['SalaryTable'], $record['QtMeisaiHiwari']['SalaryClass'], $record['QtMeisaiHiwari']['SalaryGrade']);
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
	 * 支給明細照会　タブ03：詳細画面
	 */
	private function tab03(&$meisaiInfo) {

		// 単身赴任手当区分（名称）を取得する
		$meisaiInfo['detachmentAllowDivName'] = $this->ZDetachmentAllowDivmaster->getName($meisaiInfo['QtMeisai']['DetachmentAllowDivCD']);
	}

	/**
	 * タブ04：期末勤勉詳細
	 */
	private function tab04($paidYm, &$meisaiInfo) {

		$gradeJudgeDiv = $meisaiInfo['QtMeisai']['DiligenceAllowRecordJudgeDiv'];
		$recordGrade = $meisaiInfo['QtMeisai']['DiligenceAllowRecordClass'];

		// テーブル[正当支給データ：成績率算出方法マスタ（子）]からデータを取得する
		$meisaiInfo['diligenceAllowRecordName'] = $this->QmKmSeisekiritsuSanshutsuChild->findSeisekiritsuSanshutsuChild($paidYm, $gradeJudgeDiv, $recordGrade);
	}

	/**
	 * 支給明細照会　タブ05：超勤・休日・夜勤
	 */
	private function tab05($empNo, $paidYm, $paidDiv, $payerDiv) {

		// テーブル[支給明細データ：超勤内訳]からデータを取得する
		$meisaiUchiChokinList = $this->QtMeisaiUchiChokin->findMeisaiUchiChokin($paidYm, $empNo, $paidDiv, $payerDiv);

		// 超勤内訳の科目（略称）を取得する
		foreach($meisaiUchiChokinList as $key => $record) {
			$meisaiUchiChokinList[$key]['accountShortName'] = $this->QmKamoku->getAccountShortName($paidYm, $record['QtMeisaiUchiChokin']['AccountCD']);
		}

		// テーブル[支給明細データ：休日給内訳]からデータを取得する
		$meisaiUchiKyujitukyuList = $this->QtMeisaiUchiKyujitukyu->findMeisaiUchiKyujitukyu($paidYm, $empNo, $paidDiv, $payerDiv);

		// 休日給内訳の科目（略称）を取得する
		foreach($meisaiUchiKyujitukyuList as $key => $record) {
			$meisaiUchiKyujitukyuList[$key]['accountShortName'] = $this->QmKamoku->getAccountShortName($paidYm, $record['QtMeisaiUchiKyujitukyu']['AccountCD']);
		}

		// テーブル[支給明細データ：夜勤内訳]からデータを取得する
		$meisaiUchiYakinList = $this->QtMeisaiUchiYakin->findMeisaiUchiYakin($paidYm, $empNo, $paidDiv, $payerDiv);

		// 夜勤内訳の科目（略称）を取得する
		foreach($meisaiUchiYakinList as $key => $record) {
			$meisaiUchiYakinList[$key]['accountShortName'] = $this->QmKamoku->getAccountShortName($paidYm, $record['QtMeisaiUchiYakin']['AccountCD']);
		}

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

		// 特勤内訳の科目（略称）を取得する
		foreach($meisaiUchiTokkinList as $key => $record) {
			$meisaiUchiTokkinList[$key]['accountShortName'] = $this->QmKamoku->getAccountShortName($paidYm, $record['QtMeisaiUchiTokkin']['AccountCD']);
		}

		// テーブル[支給明細データ：宿日直内訳]からデータを取得する
		$meisaiUchiShukuList = $this->QtMeisaiUchiShuku->findMeisaiUchiShuku($paidYm, $empNo, $paidDiv, $payerDiv);

		// 宿日直内訳の科目（略称）を取得する
		foreach($meisaiUchiShukuList as $key => $record) {
			$meisaiUchiShukuList[$key]['accountShortName'] = $this->QmKamoku->getAccountShortName($paidYm, $record['QtMeisaiUchiShuku']['AccountCD']);
		}

		// テーブル[支給明細データ：管理職特勤内訳]からデータを取得する
		$meisaiUchiKantokuList = $this->QtMeisaiUchiKantoku->findMeisaiUchiKantoku($paidYm, $empNo, $paidDiv, $payerDiv);

		// 管理職特勤内訳の科目（略称）を取得する
		foreach($meisaiUchiKantokuList as $key => $record) {
			$meisaiUchiKantokuList[$key]['accountShortName'] = $this->QmKamoku->getAccountShortName($paidYm, $record['QtMeisaiUchiKantoku']['AccountCD']);
		}

		// 取得データをViewに渡す
		$this->set(compact('meisaiUchiTokkinList'));
		$this->set(compact('meisaiUchiShukuList'));
		$this->set(compact('meisaiUchiKantokuList'));
	}

	/**
	 * 支給明細照会　タブ07：能率給内訳
	 */
	private function tab07($empNo, $paidYm, $paidDiv, $payerDiv) {

		// テーブル[支給明細データ：能率給内訳]からデータを取得する
		$meisaiUchiNorituList = $this->QtMeisaiUchiNoritu->findMeisaiUchiNoritu($paidYm, $empNo, $paidDiv, $payerDiv);

		// 能率給内訳の科目（略称）を取得する
		foreach($meisaiUchiNorituList as $key => $record) {
			$meisaiUchiNorituList[$key]['accountShortName'] = $this->QmKamoku->getAccountShortName($paidYm, $record['QtMeisaiUchiNoritu']['AccountCD']);
		}

		// 取得データをViewに渡す
		$this->set(compact('meisaiUchiNorituList'));
	}

	/**
	 * 支給明細照会　タブ08：旅費・その他支給
	 */
	private function tab08($empNo, $paidYm, $paidDiv, $payerDiv) {

		// テーブル[支給明細データ：旅費内訳]からデータを取得する
		$meisaiUchiRyohiList = $this->QtMeisaiUchiRyohi->findMeisaiUchiRyohi($paidYm, $empNo, $paidDiv, $payerDiv);

		// 所属（略称）と旅費内訳の科目（略称）を取得する
		foreach($meisaiUchiRyohiList as $key => $meisaiUchiRyohi) {
			// 所属（略称）を取得する
			$meisaiUchiRyohiList[$key]['deptShortName'] = $this->JmShozoku->getDeptShortName($paidYm, $meisaiUchiRyohi['QtMeisaiUchiRyohi']['ExpendDepCD']);
			// 旅費内訳の科目（略称）を取得する
			$meisaiUchiRyohiList[$key]['accountShortName'] = $this->QmKamoku->getAccountShortName($paidYm, $meisaiUchiRyohi['QtMeisaiUchiRyohi']['AccountCD']);
		}

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

		// 賃金内訳の科目（略称）を取得する
		foreach($meisaiUchiChinginList as $key => $record) {
			$meisaiUchiChinginList[$key]['accountShortName'] = $this->QmKamoku->getAccountShortName($paidYm, $record['QtMeisaiUchiChingin']['AccountCD']);
		}

		// 取得データをViewに渡す
		$this->set(compact('meisaiUchiChinginList'));
	}

	/**
	 * 和暦表記から西暦表記へ変換する
	 * 平成25.06
	 * のように頭に0付けで正しく動作する
	 *
	 */
	private function getChristianEra($japaneseEra) {

		// "."の削除
		$date = str_replace(".","",$japaneseEra);

		// 全角文字を全部半角に変換
		$date= mb_convert_kana($date,"rnask","UTF-8");

		// 年・月に分割
		mb_language('Japanese');
		mb_internal_encoding('UTF-8');
		$year  = mb_substr($date, 0, 4);
		$month = mb_substr($date, 4, 2);

		// 大正・昭和・平成の変換
		$year = $this->fnc_warekiset($year);

		// 日付の整合性（日は1で固定）
		if(!@checkdate($month,1,$year)) {
			// 変な日付
			return $japaneseEra;
		}
		// 年月日の返品（日は1で固定）
		return $year.'-'.$month.'-01';
	}

	/**
	 * 元号から西暦への変換
	 */
	private function fnc_warekiset($year){
		// 年度二分割
		mb_language('Japanese');
		mb_internal_encoding('UTF-8');
		$gg = mb_substr($year,0,2);
		$yy = mb_substr($year,2,2);

		// 和暦に応じて年度加算
		switch($gg){
			case "大正":
				$year = 1911 + $yy;
				break;
			case "昭和":
				$year = 1925 + $yy;
				break;
			case "平成":
				$year = 1988 + $yy;
				break;
		}
		// 年度の返品
		return $year;
	}
}
