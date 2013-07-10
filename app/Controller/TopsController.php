<?php

App::uses('AppController', 'Controller');

/**
 * TopsController Controller
 */
class TopsController extends AppController {

	public $uses = array('MgrPositionMaster', 'ZAllowanceDetailNamemaster', 'JmSyokuinKubun', 'QmKyuyoTaikei', 'JmSyokuso', 'JobCategoryMaster', 'ZSalaryTableNamemaster');

	/**
	 * 初期表示
	 */
	public function index() {

		// 役職マスタ
		$results = $this->MgrPositionMaster->find('all', array('conditions' => array('delete_flg' => 0)));
		$this->__saveCacheForCodeName($results, 'MgrPositionMaster', 'MgrCD', array('MgrName', 'MgrShortName'));

		// 手当詳細CDマスタ
		$results = $this->ZAllowanceDetailNamemaster->find('all', array('conditions' => array('delete_flg' => 0)));
		$this->__saveCacheForCodeName($results, 'ZAllowanceDetailNamemaster', 'AllowDetailCD', array('AllowDetailName', 'AllowDetailSName'));

		// 職員区分マスタ
//		$results = $this->JmSyokuinKubun->find('all', array('conditions' => array('delete_flg' => 0)));
//		$this->__saveCacheForCodeName($results, 'JmSyokuinKubun', 'EmpDiv', array('EmpDivName', 'EmpDivShortName'));

		// 給与体系マスタ
// 		$results = $this->QmKyuyoTaikei->find('all', array('conditions' => array('delete_flg' => 0)));
// 		$this->__saveCacheForCodeName($results, 'QmKyuyoTaikei', 'SalaryTypeCD', array('SalaryTypeName', 'SalaryTypeShortName'));

		// 職層マスタ
//		$results = $this->JmSyokuso->find('all', array('conditions' => array('delete_flg' => 0)));
//		$this->__saveCacheForCodeName($results, 'JmSyokuso', 'JobGradeCD', array('JobGradeName', 'JobGradeShortName'));

		// 職種職務マスタ
//		$results = $this->JobCategoryMaster->find('all', array('conditions' => array('delete_flg' => 0)));
//		$this->__saveCacheForCodeName($results, 'JobCategoryMaster', 'JobDutyCD', array('JobTypeName', 'JobTypeShortName'));

		// 給料表名称マスタ
//		$results = $this->ZSalaryTableNamemaster->find('all', array('conditions' => array('delete_flg' => 0)));
//		$this->__saveCacheForCodeName($results, 'ZSalaryTableNamemaster', 'SalaryTableCD', array('SalaryTableName', 'SalaryTableSName'));
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

		// キャッシュデータの読み込み
		$cacheData = Cache::read(CACHE_KEY_CODENAME);
		if ($cacheData) $saveData = $cacheData;

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