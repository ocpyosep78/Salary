<div class="modalWindow fixed" id="emp-search">
	<div class="close pd_01" align="right"><input class="Button1" type="button" onclick="closeModal();" value="×" /></div>
	<div class="modalBody">

		<table class="box_common_search_t_header">
			<tr>
				<th style="height:40px">カナ　氏<th>
				<td><input type="text" id="emp-search-keyword-family-name-kana" name="emp-search-keyword-family-name-kana" value="" /></td>
				<th>名<th>
				<td><input type="text" id="emp-search-keyword-first-name-kana" name="emp-search-keyword-first-name-kana" value="" /></td>
				<th>職種職務<th>
				<td><input type="text" id="emp-search-keyword-job-duty-cd-from" name="emp-search-keyword-job-duty-cd-from" value="" style="width:40px" /></td>
				<th>～<th>
				<td><input type="text" id="emp-search-keyword-job-duty-cd-to" name="emp-search-keyword-job-duty-cd-to" value="" style="width:40px" /></td>
				<td rowspan="2" class="td1 pd_01">
					<input class="Button1" type="button" onclick="searchForEmpSearch();" value="　検索　" />
				</td>
			</tr>
			<tr>
				<th style="height:40px">漢字　氏<th>
				<td><input type="text" id="emp-search-keyword-family-name" name="emp-search-keyword-family-name" value="" /></td>
				<th>名<th>
				<td><input type="text" id="emp-search-keyword-first-name" name="emp-search-keyword-first-name" value="" /></td>
				<th>職層<th>
				<td><input type="text" id="emp-search-keyword-job-grade-cd-from" name="emp-search-keyword-job-grade-cd-from" value="" style="width:40px" /></td>
				<th>～<th>
				<td><input type="text" id="emp-search-keyword-job-grade-cd-to" name="emp-search-keyword-job-grade-cd-to" value="" style="width:40px" /></td>
			</tr>
			<tr>
				<th style="height:40px">職員区分<th>
				<td><input type="text" id="emp-search-keyword-emp-div-from" name="emp-search-keyword-emp-div-from" value="" style="width:40px"/></td>
				<th>～<th>
				<td><input type="text" id="emp-search-keyword-emp-div-to" name="emp-search-keyword-emp-div-to" value="" style="width:40px"/></td>
				<th>所属<th>
				<td><input type="text" id="emp-search-keyword-dep-cd-from" name="emp-search-keyword-dep-cd-from" value="" style="width:80px" /></td>
				<th>～<th>
				<td><input type="text" id="emp-search-keyword-dep-cd-to" name="emp-search-keyword-dep-cd-to" value="" style="width:80px" /></td>
				<td rowspan="2" class="td1 pd_01">
					<input class="Button1" type="button" onclick="clearForEmpSearch()" value="　消去　" />
				</td>
			</tr>
			<tr>
				<th style="height:40px">退職者<th>
				<td colspan="4">
					<input type="radio" name="emp-search-keyword-retired" value="0" class="retired" id="emp-search-keyword-retired-include" checked /><label for="emp-search-keyword-retired-include"> 含む</label>　
					<input type="radio" name="emp-search-keyword-retired" value="1" class="retired" id="emp-search-keyword-retired-except" /><label for="emp-search-keyword-retired-except"> 除く</label>　
					<input type="radio" name="emp-search-keyword-retired" value="2" class="retired" id="emp-search-keyword-retired-only" /><label for="emp-search-keyword-retired-only"> のみ</label>
				</td>
				<th>役職<th>
				<td><input type="text" id="emp-search-keyword-mgr-cd-from" name="emp-search-keyword-mgr-cd-from" value="" style="width:40px" /></td>
				<th>～<th>
				<td><input type="text" id="emp-search-keyword-mgr-cd-to" name="emp-search-keyword-mgr-cd-to" value="" style="width:40px" /></td>
			</tr>
		</table>

		<div id="emp-search-result">
			<?php // ここにAjax通信による検索結果が表示される ?>
		</div>

	</div>
</div>

<?php // 選択された項目をhiddenで定義 ?>
<input type="hidden" value= "" name="hidden-emp-search-select-emp-no" id="hidden-emp-search-select-emp-no" />
<input type="hidden" value= "" name="hidden-emp-search-select-name-kana" id="hidden-emp-search-select-name-kana" />
<input type="hidden" value= "" name="hidden-emp-search-select-birthday" id="hidden-emp-search-select-birthday" />
<input type="hidden" value= "" name="hidden-emp-err-message" id="hidden-emp-err-message" />
<input type="hidden" value= "1" name="hidden-emp-err-count" id="hidden-emp-err-count" />

<script type="text/javascript">
	/**
	 * 検索子画面の表示
	 *
	 * @param table      検索対象のテーブル名
	 * @param columnName 検索対象のカラム（名称）
	 * @param columnCode 検索対象のカラム（コード）
	 * @param targetName 検索結果の設定先（名称）
	 * @param targetCode 検索結果の設定先（コード）
	 */
	function viewForEmpSearch() {

		// hidden項目の設定

		// 子画面の検索結果一覧をクリア
		$.ajax({
			url: "<?php echo $this->Html->url(array('controller' => 'EmpSearches', 'action' => 'init')); ?>",
			type: 'GET',
			success: function(data) {
				$("#emp-search-result").html(data);
			}
		});

		// 検索子画面の表示
		// モーダルで表示する
		$("#emp-search").modalForEmpSearch();
	}

	/**
	 * テーブル検索
	 */
	function searchForEmpSearch() {

		if (!checkEmpConditionInput()) {
			return;
		}
		// 検索キーワードの取得
		var familyNameKana = $("#emp-search-keyword-family-name-kana").val();
		var firstNameKana  = $("#emp-search-keyword-first-name-kana").val();
		var jobDutyCdFrom  = $("#emp-search-keyword-job-duty-cd-from").val();
		var jobDutyCdTo    = $("#emp-search-keyword-job-duty-cd-to").val();
		var familyName     = $("#emp-search-keyword-family-name").val();
		var firstName      = $("#emp-search-keyword-first-name").val();
		var jobGradeCdFrom = $("#emp-search-keyword-job-grade-cd-from").val();
		var jobGradeCdTo   = $("#emp-search-keyword-job-grade-cd-to").val();
		var empDivFrom     = $("#emp-search-keyword-emp-div-from").val();
		var empDivTo       = $("#emp-search-keyword-emp-div-to").val();
		var depCdFrom      = $("#emp-search-keyword-dep-cd-from").val();
		var depCdTo        = $("#emp-search-keyword-dep-cd-to").val();
		var retired        = $("input[type='radio'][name='emp-search-keyword-retired']:checked").val();
		var mgrCdFrom      = $("#emp-search-keyword-mgr-cd-from").val();
		var mgrCdTo        = $("#emp-search-keyword-mgr-cd-to").val();

		// テーブルデータの取得（Ajax通信）
		$.ajax({
			url: "<?php echo $this->Html->url(array('controller' => 'EmpSearches', 'action' => 'search')); ?>" + "?familyNameKana=" + familyNameKana
																													+ "&firstNameKana=" + firstNameKana
																													+ "&jobDutyCdFrom=" + jobDutyCdFrom
																													+ "&jobDutyCdTo=" + jobDutyCdTo
																													+ "&familyName=" + familyName
																													+ "&firstName=" + firstName
																													+ "&jobGradeCdFrom=" + jobGradeCdFrom
																													+ "&jobGradeCdTo=" + jobGradeCdTo
																													+ "&empDivFrom=" + empDivFrom
																													+ "&empDivTo=" + empDivTo
																													+ "&depCdFrom=" + depCdFrom
																													+ "&depCdTo=" + depCdTo
																													+ "&retired=" + retired
																													+ "&mgrCdFrom=" + mgrCdFrom
																													+ "&mgrCdTo=" + mgrCdTo,
			type: 'GET',
			success: function(data) {
				$("#emp-search-result").html(data);
			}
		});
	}

	/**
	 * 入力有無チェック
	 */
	function checkEmpConditionInput() {
		// 検索キーワードの取得
		var familyNameKana = $("#emp-search-keyword-family-name-kana").val();
		var firstNameKana  = $("#emp-search-keyword-first-name-kana").val();
		var jobDutyCdFrom  = $("#emp-search-keyword-job-duty-cd-from").val();
		var jobDutyCdTo    = $("#emp-search-keyword-job-duty-cd-to").val();
		var familyName     = $("#emp-search-keyword-family-name").val();
		var firstName      = $("#emp-search-keyword-first-name").val();
		var jobGradeCdFrom = $("#emp-search-keyword-job-grade-cd-from").val();
		var jobGradeCdTo   = $("#emp-search-keyword-job-grade-cd-to").val();
		var empDivFrom     = $("#emp-search-keyword-emp-div-from").val();
		var empDivTo       = $("#emp-search-keyword-emp-div-to").val();
		var depCdFrom      = $("#emp-search-keyword-dep-cd-from").val();
		var depCdTo        = $("#emp-search-keyword-dep-cd-to").val();
		var mgrCdFrom      = $("#emp-search-keyword-mgr-cd-from").val();
		var mgrCdTo        = $("#emp-search-keyword-mgr-cd-to").val();

		if (familyNameKana == "" &&
			firstNameKana == "" &&
			jobDutyCdFrom == "" &&
			jobDutyCdTo == "" &&
			familyName == "" &&
			firstName == "" &&
			jobGradeCdFrom == "" &&
			jobGradeCdTo == "" &&
			empDivFrom == "" &&
			empDivTo == "" &&
			depCdFrom == "" &&
			depCdTo == "" &&
			mgrCdFrom == "" &&
			mgrCdTo == ""
		) {
			if(window.confirm('全件検索されますがよろしいですか？')) {
				return true;
			} else {
				return false;
			}
		}
		return true;
	}

	/**
	 * 検索結果のクリア
	 */
	function clearForEmpSearch() {

		// 親画面に設定した値をクリア
		$("#EmpNo").val("");
		$("#NameKana").html("");
		$("#Age").html("");

		// 子画面の検索条件入力欄をクリア
		$("#emp-search-keyword-family-name-kana").val("");
		$("#emp-search-keyword-first-name-kana").val("");
		$("#emp-search-keyword-job-duty-cd-from").val("");
		$("#emp-search-keyword-job-duty-cd-to").val("");
		$("#emp-search-keyword-family-name").val("");
		$("#emp-search-keyword-first-name").val("");
		$("#emp-search-keyword-job-grade-cd-from").val("");
		$("#emp-search-keyword-job-grade-cd-to").val("");
		$("#emp-search-keyword-emp-div-from").val("");
		$("#emp-search-keyword-emp-div-to").val("");
		$("#emp-search-keyword-dep-cd-from").val("");
		$("#emp-search-keyword-dep-cd-to").val("");
		$("input[type='radio'][name='emp-search-keyword-retired']").attr("checked",false);
		$("#emp-search-keyword-mgr-cd-from").val("");
		$("#emp-search-keyword-mgr-cd-to").val("");

		var table = $("#hidden-emp-search-table").val();       // 検索対象のテーブル名

		// 子画面の検索結果一覧をクリア
		$.ajax({
			url: "<?php echo $this->Html->url(array('controller' => 'EmpSearches', 'action' => 'init')); ?>" + "?table=" + 'JtKihonKihon',
			type: 'GET',
			success: function(data) {
				$("#emp-search-result").html(data);
			}
		});
	}

	/**
	 * モーダルを閉じる
	 */
	function closeModal() {

		// 検索結果を初期化する
		clearForEmpSearch();

		// モーダルを閉じる
		$(".modalWindow,#blackLayer").hide();
	}
</script>
