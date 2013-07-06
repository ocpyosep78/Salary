<?php

App::uses('AppController', 'Controller');

/**
 * TopsController Controller
 */
class TopsController extends AppController {

	public $uses = array('MgrPositionMaster');

	/**
	 * 初期表示
	 */
	public function index() {

		// 役職マスタ
		$results = $this->MgrPositionMaster->find('all', array('conditions' => array('delete_flg' => 0)));
		$this->__saveCacheForCodeName($results, 'MgrPositionMaster', 'MgrCD', array('MgrName', 'MgrShortName'));
	}

	/**
	 * コード名称をキャッシュデータに保存する
	 *
	 * @param array  $results   検索結果
	 * @param string $tableName テーブル名
	 * @param string $codeName  コード名
	 * @param array  $nameList  名称項目名リスト
	 */
	private function __saveCacheForCodeName($results, $tableName, $codeName, $nameList) {

		// 検索結果が0件の場合は何もしない
		if (empty($results)) return;

		// キャッシュ保存用に配列を整形する
		foreach ($results as $result) {
			// コード値の取得
			$record = Hash::get($result, $tableName);
			$code   = Hash::get($record, $codeName);

			// キャッシュ保存用データを設定
			foreach ($nameList as $name) {
				$saveData[$name][$code] = Hash::get($record, $name);
			}
		}

		// キャッシュに書き込む
		Cache::write(CACHE_KEY_CODENAME, $saveData);
	}
}