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

		// 画面側でエラーが出ないように空の検索条件等をセットしておく
		$searchCondition = array();
		$this->set('searchCondition', $searchCondition);
		$input = array(); // 入力初期値
		$this->set('input', $input);

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

		// TODO ジャンプ制御。存在しないページへのジャンプの回避処理
		
		// ********************  画面へのデータ反映  ********************

		// 前画面からの検索条件をそのまま画面にセットする
		$this->set('searchCondition', $searchCondition);
		
		$input = array(); // 入力初期値
		$this->set('input', $input);
		
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
				// TODO 閉じる処理(view側？)
			break;

			case 'edit':
				// 入力値チェック
				if(!$this->checkValidation($this->request->data)){
					// バリデーションエラーのときは、処理終了
					return;
				}
				$this->updateDetailData($this->request->data);
				$this->redirect('index');
			break;

			case 'add':
				// 入力値チェック
				if(!$this->checkValidation($this->request->data)){
					// バリデーションエラーのときは、処理終了
					return;
				}
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

		// CD値の自動付番
		$newCode = $this->createNewCode();
		
		$param = array(
			'SmItakusakiKaisha' => array(
				'ConsignmentCompanyCD' => $newCode,
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
				'updated_by' => '仮ユーザー',
			)
		);

		// TODO 登録が失敗したときの回避処理(1回目はし直してリトライ。２回目はエラーメッセージで回避)
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
				'updated_by' => '仮ユーザー',
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
	
	/**
	 * 入力値チェックを行う
	 * 
	 * @param array $input 入力値
	 */
	private function checkValidation($input) {

		// 郵便番号をチェック対象に追加する
		$input['PostalCD'] = $input['PostalCD1'].'-'.$input['PostalCD2'];
		
		$this->SmItakusakiKaisha->set($input);
		$validateError = $this->SmItakusakiKaisha->invalidFields();
		if(!empty($validateError)) {
			// バリデーションエラーのとき

			// エラーメッセージの設定
			$errorMsgList = array();
			foreach($validateError as $ary) {
				foreach($ary as $errorMsg) {
					$errorMsgList[] = $errorMsg;
				}
			}
			$this->set('errorMsgList', $errorMsgList);
			
			// 画面側でエラーが出ないように空の検索条件をセットしておく
			$searchCondition = array();
			$this->set('searchCondition', $searchCondition);
			
			// 入力値の初期値を設定する
			$this->set('input', $input);

			// 初期画面をレンダリングする
			$this->render('index');
			
			return false;
		}
		
		return true;
	}

	/**
	 * 新規登録用のコード値を作成する
	 * 
	 * @return 新規コード値
	 */
	private function createNewCode() {
		
		// コード降順で一件取得
		$maxCode = $this->SmItakusakiKaisha->getMaxCode();
		
		// 数字部分抽出(後ろ２桁)
		$number = substr($maxCode, 1, 2);
		
		// +1
		$number++;
		
		// 数値を文字列に変換
		$string = str_pad($number, 2, '0', STR_PAD_LEFT);
		
		// 文字部分と連結し、新規コード値を生成する
		$newCode = substr($maxCode, 0, 1) . $string;
		
		return $newCode;
	}
	
}
