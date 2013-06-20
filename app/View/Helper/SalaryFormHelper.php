<?php
App::uses('FormHelper', 'View/Helper');
App::uses('Folder', 'Utility');
App::uses('File', 'Utility');
//App::uses('Item', 'Model');
//App::uses('FrontItem', 'Model');

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
	 * コード取得（商品管理テーブルの承認フラグステータス）
	 */
	public function getCommitStatusCd() {
		$statusCd = Item::$COMMIT_STATUSES;
		$return_list = array('-1' => '指定しない');
		$return_list = $return_list + $statusCd;

		return $return_list;
	}

	/**
	 * コード取得（商品管理テーブルのステータスのデフォルト値）
	 */
	public function getItemStatusCdDefaultValue() {
		return Item::STATUS_ACCEPT_RESERVATION; // 予約受付中
	}

	/**
	 * コード取得（商品管理テーブルのピックアップ状況）
	 */
	public function getItemPickUpCd() {
		$statusCd = array(
				'-1' => '指定しない',
				'1' => '対象商品のみ',
				'0' => '非対象商品のみ');

		return $statusCd;
	}

	/**
	 * 曜日のリストを取得する
	 */
	public function getDaysList() {
		$weekNames = array(0 => '指定しない');
		$weekNames += Configure::read('WEEKNAMES');

		return $weekNames;
	}
	/**
	 * 曜日をコードから変換して取得
	 */
	public function getDaysName($daysCd) {
		$weekNames = array(0 => '指定しない');
		$weekNames += Configure::read('WEEKNAMES');

		return $weekNames[$daysCd];
	}

	/**
	 * 送料無料サービスのコードから変換してサービス名を取得する
	 */
	public function getDeliveryFreeServiceName($id) {
		return Configure::read("delivery_free_service." . $id);
	}

	/**
	 * 性別をコードから変換して取得（性別）
	 */
	public function getSexName($sexCd) {
		return Configure::read("gender." . $sexCd);
	}

	/**
	 * 生年月日から年齢に変換して取得
	 */
	public function getBirthDay($birthDay) {

		$tmp = str_replace(' 00:00:00', '', $birthDay);
		$tmp = str_replace('-', '', $tmp);

		$year = (int) ((date('Ymd')-$tmp)/10000);
		return $year;
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
    	$SaleTax = Classregistry::init("SaleTax");
    	return $SaleTax->getIncludedTaxPrice($unit_price);
    }
}
