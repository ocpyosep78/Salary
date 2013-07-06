<?php
/**
 * Application model for Cake.
 *
 * This file is application-wide model file. You can put all
 * application-wide model-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Model
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Model', 'Model');

/**
 * Application model for Cake.
 *
 * Add your application-wide methods in the class below, your models
 * will inherit them.
 *
 * @package       app.Model
 */
class AppModel extends Model {

	/**
	 * find関数のコールバックメソッド
	 *
	 * @param array   $results findから返された結果
	 * @param boolean $primary
	 */
	public function afterFind($results, $primary = false) {

		// 検索結果が複数レコードの場合
		if ($primary) {
			foreach ($results as &$result) {
				// コード名称の付加
				$this->__addCodeName($result);
			}

		// 検索結果が1レコードの場合
		} else {
			// コード名称の付加
			$this->__addCodeName($results);
		}

		return $results;
	}

	/**
	 * 検索結果にキャッシュテーブルから取得した名称を付加する
	 *
	 * @param array $result
	 */
	private function __addCodeName(&$result) {

		if (!Hash::check($result, $this->alias)) return;

// TODO あとで消すこと
foreach ($result[$this->alias] as $key => $value) {
	$result[$this->alias]['Name_' . $key] = '名称が入ります';
}
return;

		// キャッシュデータの読み込み
		$cacheData = Cache::read(CACHE_KEY_CODENAME);

		// キャッシュデータのキーマップを取得
		$cacheKeyMap = Configure::read("CACHE_KEY_MAP");

		// 検索結果レコードから項目を取り出す
		foreach ($result[$this->alias] as $key => $value) {

			// キーマップからキャッシュデータのキーを取得する
			$cacheKey = Hash::get($cacheKeyMap, $key);
			if ($cacheKey === null) continue;

			// 名称リストを取得する
			$nameList = Hash::get($cacheData, $cacheKey);
			if ($nameList === null) continue;

			// 検索結果に名称を付加する
			$result[$this->alias]['Name_' . $key] = Hash::get($nameList, $value);
		}
		var_dump($result);
	}
}
