<?php
App::uses('FormHelper', 'View/Helper');
App::uses('Folder', 'Utility');
App::uses('File', 'Utility');

/**
 * 人事給与システム用 FormHelper
*/
class SalaryFormHelper extends FormHelper{

	/**
	 * コード取得（商品管理テーブルのステータス）
	 */
	public function getItemStatusCd() {
		$statusCd = Item::$STATUSES;
		$return_list = array('-1' => '指定しない');
		$return_list = $return_list + $statusCd;
		unset($return_list['1']);

		return $return_list;
	}

	/**
	 * コード取得（商品管理テーブルのステータスのデフォルト値）
	 */
	public function getItemStatusCdDefaultValue() {
		return Item::STATUS_ACCEPT_RESERVATION; // 予約受付中
	}

	/**
	 * 一覧画面の情報を詳細画面に転記する場合に
	 * 非表示の項目を使用するが、その非表示<td></td>の部分を自動生成するメソッド
	 *
	 * @param $record 一行分のレコードデータ
	 * @param $nonDisp 生成対象外としたいカラム名の配列
	 */
	public function getNonDisplayTags($record, $nonDisp = null) {

		$keys = array_keys($record);
		foreach ($record as $key => $value) {
			if (!Hash::get($nonDisp, $key)) {
				echo '<td style="display:none" class="'.$key.'">'.$value.'</td>';
			}
		}
	}

	/**
	 * 第１引数を第２引数で繋げて返す
	 *
	 * @param array  $array
	 * @param string $str
	 */
	public function getFormattedArgument($array, $str) {

		$returnValue = '';

		foreach($array as $key => $val) {
			if (isset($val) && !empty($val)) {
				if (isset($returnValue) && !empty($returnValue)) {
					$returnValue = $returnValue . $str;
				}
				$returnValue = $returnValue . $val;
			}
		}

		return $returnValue;
	}

	/**
	 * 引数を改行タグで繋げて返す
	 */
	public function getFormattedArgumentBreakTags($array) {

		return $this->getFormattedArgument($array, '<br>');
	}

	/**
	 * 引数を改行コードで繋げて返す
	 */
	public function getFormattedArgumentLineFeed($array) {

		return $this->getFormattedArgument($array, "\n");
	}

	/**
	 * 連想配列の最初のキーを取得
	 */
	public function getFirstKey($array) {
		reset($array);
		return key($array);
	}

	/**
	 * 消費税計算をする
	 */
	public function getIncludedTaxPrice($unit_price) {
		$SaleTax = Classregistry::init('SaleTax');
		return $SaleTax->getIncludedTaxPrice($unit_price);
	}

	/**
	 * 西暦から満年齢を取得する
	 */
	public function getAgeFromChristianEra($christianEra) {
		if (is_null($christianEra)) return null;
		$y = date('Y', strtotime($christianEra));
		$m = date('m', strtotime($christianEra));
		$d = date('d', strtotime($christianEra));

		$age=date("Y")-$y;
		//もう今年の誕生日が過ぎているかのチェック
		$today=mktime(0,0,0,date("n"),date("j"),date("Y"));
		$tan=mktime(0,0,0,$m,$d,date("Y"));
		//過ぎていれば、今年-生年、そうでなければ更に1を引く
		$age=($today>$tan)?date("Y")-$y:date("Y")-$y-1;
		return '満'.$age.'歳';
	}

	/**
	 * 西暦表記から和暦表記へ変換する
	 */
	public function getJapaneseEraWithTime($christianEra) {

		$date = date('Ymd', strtotime($christianEra));
		$year = date('Y', strtotime($christianEra));
		$time = date('H：i：s', strtotime($christianEra));

		if ($date >= 19890108) { //平成元年（1989年1月8日以降）
			$name = '平成';
			$year -= 1988;
		} else if ($date >= 19261225) { //昭和元年（1926年12月25日以降）
			$name = '昭和';
			$year -= 1925;
		} else if ($date >= 19120730) { //大正元年（1912年7月30日以降）
			$name = '大正';
			$year -= 1911;
		} else if ($date >= 18680125) { //明治元年（1868年1月25日以降）
			$name = '明治';
			$year -= 1867;
		}
		return $name.$year.date('／m／d　'.$time, strtotime($date));
	}

	/**
	 * 西暦表記から和暦表記へ変換する
	 */
	public function getJapaneseEra($christianEra) {

		if (is_null($christianEra)) return null;

		$date = date('Ymd', strtotime($christianEra));
		$year = date('Y', strtotime($christianEra));

		if ($date >= 19890108) { //平成元年（1989年1月8日以降）
			$name = '平成';
			$year -= 1988;
		} else if ($date >= 19261225) { //昭和元年（1926年12月25日以降）
			$name = '昭和';
			$year -= 1925;
		} else if ($date >= 19120730) { //大正元年（1912年7月30日以降）
			$name = '大正';
			$year -= 1911;
		} else if ($date >= 18680125) { //明治元年（1868年1月25日以降）
			$name = '明治';
			$year -= 1867;
		}
		return $name.$year.date('.m.d　', strtotime($date));
	}

	/**
	 * 和暦表記から西暦表記へ変換する
	 * 平成25年06月25日
	 * のように頭に0付けで正しく動作する
	 *
	 * OKパターン
	 * 20130625
	 * ２０１３０６２５
	 * 2013/06/25
	 * ２０１３／０６／２５
	 * 平成25年06月25日
	 * 平成２５年０６月２５日
	 * 平成25/06/25
	 * 平成２５／０６／２５
	 * 25/06/25
	 * ２５／０６／２５
	 */
	public function getChristianEra($japaneseEra) {

		// "/"の削除
		$date = str_replace("/","",$date);
		$date = str_replace("／","",$date);
		// "年月日"の削除
		$date = str_replace("年","",$date);
		$date = str_replace("月","",$date);
		$date = str_replace("日","",$date);

		// 文字数が6文字の場合、先頭に"20"追加
		if(mb_strlen($date)===6){
			$date = "20" . $date;
		}

		// 全角文字を全部半角に変換
		$date= mb_convert_kana($date,"rnask","UTF-8");

		// 年・月・日に分割
		mb_language('Japanese');
		mb_internal_encoding('UTF-8');
		$year  = mb_substr($date, 0, 4);
		$month = mb_substr($date, 4, 2);
		$day   = mb_substr($date, 6);

		// 大正・昭和・平成の変換
		$year = fnc_warekiset($year);

		// 日付の整合性
		if(!@checkdate($month,$day,$year)) {
			// 変な日付
			return "";
		}
		// 年月日の返品
		return $year.$month.$day;

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

	/**
	 * 検索子画面の検索結果一覧に表示する項目を取得
	 *
	 * @param string $tableName テーブル名
	 */
	public function getViewColumnForCommonSearch($tableName) {

		$key = "VIEW_COLUMN_" . strtoupper($tableName);

		return Configure::read($key);
	}

}
