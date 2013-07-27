<div class="modalWindowError fixed" id="emp-error">
	<span align="left">3 Error</span>
	<span class="close pd_01" align="right"><input type="button" onclick="closeModalError();" value="×" /></span>
	<div class="modalBodyError">

		<div id="box1" style="margin:5px">
			<table class="box_common_search_content">
				<tr>
					<td>× ERROR</td>
					<td><div class="close pd_01" align="right"><input type="button" onclick="closeErrorElement(1);" value="×" /></div></td>
				</tr>
				<tr>
					<td colspan=2 height="50" style="vertical-align:top">エラー1があります</td>
				</tr>
				<tr>
					<td colspan=2 align="right"><input type="button" onclick="closeErrorElement(1);" value="Close" />
				</tr>
			</table>
		</div>

		<div id="box2" style="margin:5px">
			<table class="box_common_search_content">
				<tr>
					<td>× ERROR</td>
					<td><div class="close pd_01" align="right"><input type="button" onclick="closeErrorElement(2);" value="×" /></div></td>
				</tr>
				<tr>
					<td colspan=2 height="50" style="vertical-align:top">エラー2があります</td>
				</tr>
				<tr>
					<td colspan=2 align="right"><input type="button" onclick="closeErrorElement(2);" value="Close" />
				</tr>
			</table>
		</div>

		<div id="box3" style="margin:5px">
			<table class="box_common_search_content">
				<tr>
					<td>× ERROR</td>
					<td><div class="close pd_01" align="right"><input type="button" onclick="closeErrorElement(3);" value="×" /></div></td>
				</tr>
				<tr>
					<td colspan=2 height="50" style="vertical-align:top">エラー3があります</td>
				</tr>
				<tr>
					<td colspan=2 align="right"><input type="button" onclick="closeErrorElement(3);" value="Close" />
				</tr>
			</table>
		</div>

	</div>
</div>

<?php // テーブル検索に使用する項目をhiddenで定義 ?>
<input type="hidden" value= "3" name="hidden-error-count" id="hidden-error-count" />

<script type="text/javascript">
	/**
	 * エラー画面の表示
	 */
	function viewForEmpSearchError() {

		// hidden項目の設定

		// 子画面の検索結果一覧をクリア
//		$.ajax({
//			url: "<?php echo $this->Html->url(array('controller' => 'CommonSearches', 'action' => 'init')); ?>" + "?table=" + 'JtKihonKihon',
//			type: 'GET',
//			success: function(data) {
//				$("#emp-search-result").html(data);
//			}
//		});

		// 検索子画面の表示
		// モーダルで表示する
		$("#emp-error").modalError();
	}

	/**
	 * モーダルを閉じる
	 */
	function closeModalError() {
		// モーダルを閉じる
		$(".modalWindowError").hide();
	}
	
	/**
	 * エラーダイアログを閉じる
	 */
	function closeErrorElement(index) {
		$("#box" + index).hide();
		var errorCount = parseInt($("#hidden-error-count").val());
		errorCount = errorCount-1;
		$("#hidden-error-count").val(errorCount);
		if (errorCount < 1) {
			// モーダルを閉じる
			$(".modalWindowError").hide();
		}
	}
</script>
