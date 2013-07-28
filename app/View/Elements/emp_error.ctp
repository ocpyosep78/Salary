<div class="modalWindowError fixed" id="emp-error">
	<table width="400px" bgcolor="#acf3f9"><tr>
		<th align="left" id="error-title" style="padding:5px 10px"></th>
		<td align="right" style="padding:5px 10px"><input type="button" onclick="closeModalError();" value="×" /></td>
	</tr></table>
	<div class="modalBodyError" id="bodyError">
	</div>
</div>

<?php // テーブル検索に使用する項目をhiddenで定義 ?>
<input type="hidden" value="" name="hidden-error-count" id="hidden-error-count" />

<script type="text/javascript">
	/**
	 * エラー画面の表示
	 */
	function viewForEmpSearchError() {

		// エラーフローティングウィンドウの表示
		// 位置を変える
		$("#emp-error").modalError();
		$("#emp-error").css("top","100px");
		$("#emp-error").css("left","70%");
		$("#emp-error").css("margin-left","-150px");
		
		var count = $("#hidden-emp-err-count").val();
		$("#hidden-error-count").val(count);
		var conutInt = parseInt(count);
		$("#error-title").text(count + " Error");
		// 一旦消す
		$("#bodyError").html('');
		for (var i=0; i < conutInt; i++) {
			var html = '';
			html += '<div id="box'+i+'" style="margin:5px">';
			html += '<table class="box_error_floadting_content">';
			html += '<tr bgcolor="#f9dada">'
			html += '<td style="border-right-style:none;color:red">× ERROR</td>';
			html += '<td style="border-left-style:none" align="right"><input type="button" onclick="closeErrorElement('+i+');" value="×" /></td>'
			html += '</tr>'
			html += '<tr>'
			html += '<td colspan=2 height="50" style="vertical-align:top;position:relative" id="message'+i+'"></td>'
			html += '</tr>'
			html += '</table>'
			html += '</div>'
			// 追記する
			$("#bodyError").append(html);
			$("#box" + i).show();
			var message = $("#hidden-emp-err-message").val();
			// Closeボタンの位置はセルの右下に置く
			message += '<input type="button" onclick="closeErrorElement('+i+');" value="Close" style="position:absolute;right:2px;bottom:2px;"/>';
			// Closeボタンがあるので.htmlで書く
			$("#message"+i).html(message);
		}
		
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
