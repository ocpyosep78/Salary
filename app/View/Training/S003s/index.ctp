<?php
	// スクリプトで、この画面特有のものを差し込むときの書き方。
	$this->append('script'); echo $this->Html->script(array('salary/s003_index')); $this->end();
	// スタイルシートで、この画面特有のものを差し込むときの書き方。
	$this->append('css');    echo $this->Html->css(array('salary/common'));    $this->end();
?>

<div id="container">
	<?php echo $this->SalaryForm->create('S003', array('controller' => 'S003', 'action' => 'search')); ?>
		<table class="t_header">
			<tr>
				<td rowspan="2">
					<p class="title">研修委託会社コード</p>
					<input type="text" name="consignmentCompanyCd" id="consignmentCompanyCd" value="<?php echo Hash::get($searchCondition, 'consignmentCompanyCd'); ?>" maxlength="3" />
					<input type="button"  class="Button2" value="？" onclick="viewForCommonSearch('SmItakusakiKaisha', 'ConsignmentCompanyName', 'ConsignmentCompanyCD', 'consignmentCompanyName', 'consignmentCompanyCd');" />
					<p class="description" id="consignmentCompanyName"><?php echo Hash::get($searchCondition, 'consignmentCompanyName'); ?></p>
				</td>
				<td class="td1 pd_01"><input class="Button1" type="submit" value="検索" /></td>
			</tr>
			<tr>
				<td class="td1 pd_02"><input class="Button1" type="submit" value="消去" name="clear" /></td>
			</tr>
		</table>
	<?php echo $this->SalaryForm->end(); ?>

		<?php
			if(isset($rtnSmItakusakiKaishaList) && sizeof($rtnSmItakusakiKaishaList) != '0') {
				echo $this->element('common_search_nav');
			} else {
				echo '<br>';
			}
		?>

			<div class="box_01">
				<table class="tbl_02">
					<tr>
						<th class="">コード</th>
						<th class="">委託先会社名</th>
					</tr>

					<?php if(isset($rtnSmItakusakiKaishaList)) { ?>
					<?php foreach($rtnSmItakusakiKaishaList as $items) : ?>
					<tr class="selectableRecord">
						<td><?php echo $items['SmItakusakiKaisha']['ConsignmentCompanyCD'] ?></td>
						<td><?php echo $items['SmItakusakiKaisha']['ConsignmentCompanyName'] ?></td>
						<?php $this->SalaryForm->getNonDisplayTags($items['SmItakusakiKaisha'], array()); ?>
					</tr>
					<?php endforeach ?>
					<?php } ?>
				</table>
			</div><!-- //.box_01 -->
</div>

	<?php echo $this->SalaryForm->create('S003', array('controller' => 'S003', 'action' => 'doFlexibleAction', 'name' => 'flexible')); ?>

		<div id="container">
			<div class="box_02">
				<p id="code">コード：<?php echo Hash::get($input, 'ConsignmentCompanyCD'); ?><span id="Code"></span></p>
				<input type="hidden" value= "<?php echo Hash::get($input, 'ConsignmentCompanyCD'); ?>" name="ConsignmentCompanyCD" id="ConsignmentCompanyCD" />
				<table class="table_left">
					<tr>
						<th>委託先会社名</th>
						<td colspan="3"><input type="text" value="<?php echo Hash::get($input, 'ConsignmentCompanyName'); ?>" name="ConsignmentCompanyName" id="ConsignmentCompanyName" maxlength="50" /></td>
					</tr>
					<tr>
						<th>代表者名</th>
						<td colspan="3"><input type="text" value= "<?php echo Hash::get($input, 'Representative'); ?>" name="Representative" id="Representative" maxlength="50" /></td>
					</tr>
					<tr>
						<th rowspan="6" class="th_01">所在地</th>
						<th>郵便番号</th>
						<td colspan="2"><input type="text" value= "<?php echo Hash::get($input, 'PostalCD1'); ?>" name="PostalCD1" id="PostalCD1" maxlength="3" class="short_01" /> - <input type="text" value= "<?php echo Hash::get($input, 'PostalCD2'); ?>" name="PostalCD2" id="PostalCD2" maxlength="4" class="short_01" /></td>
					</tr>
					<tr>
						<th>市区町村CD</th>
						<td>
							<input type="text" value="<?php echo Hash::get($input, 'CityCD'); ?>" name="CityCD" id="CityCD" class="short_02" maxlength="6" />
							<input type="button"  class="Button2" value="？" onclick="viewForCommonSearch('LGovMaster', 'LGovName', 'LGovCode', 'CityName', 'CityCD');" />
						</td>
						<td id="CityName">&nbsp</td>
					</tr>
					<tr>
						<th class="th_02">漢字住所</th>
						<td colspan="2"><input type="text" value= "<?php echo Hash::get($input, 'AddressKanji'); ?>" name="AddressKanji" id="AddressKanji" maxlength="50" /></td>
					</tr>
					<tr>
						<th class="th_02">方書き</th>
						<td colspan="2"><input type="text" value= "<?php echo Hash::get($input, 'SideKanji'); ?>" name="SideKanji" id="SideKanji" maxlength="50" /></td>
					</tr>
					<tr>
						<th class="th_02">カナ住所</th>
						<td colspan="2"><input type="text" value= "<?php echo Hash::get($input, 'AddressKana'); ?>" name="AddressKana" id="AddressKana" maxlength="100" /></td>
					</tr>
					<tr>
						<th class="th_02">方書き</th>
						<td colspan="2"><input type="text" value= "<?php echo Hash::get($input, 'SideKana'); ?>" name="SideKana" id="SideKana" maxlength="100" /></td>
					</tr>
				</table><!-- //.table_left -->
				<table class="table_right">
					<tr>
						<th colspan="2">営業担当者</th>
						<td><input type="text" value= "<?php echo Hash::get($input, 'AccountExecutiveName'); ?>" name="AccountExecutiveName" id="AccountExecutiveName" maxlength="50" /></td>
					</tr>
					<tr>
						<th rowspan="3">連絡先</th>
						<th class="th_02">電話1</th>
						<td><input type="text" value= "<?php echo Hash::get($input, 'TelNo1'); ?>" name="TelNo1" id="TelNo1" maxlength="14" /></td>
					</tr>
					<tr>
						<th class="th_02">電話2</th>
						<td><input type="text" value= "<?php echo Hash::get($input, 'TelNo2'); ?>" name="TelNo2" id="TelNo2" maxlength="14" /></td>
					</tr>
					<tr>
						<th class="th_02">電話3</th>
						<td><input type="text" value= "<?php echo Hash::get($input, 'TelNo3'); ?>" name="TelNo3" id="TelNo3" maxlength="14" /></td>
					</tr>
					<tr>
						<th colspan="2" class="th_02">メールアドレス1</th>
						<td><input type="text" value="<?php echo Hash::get($input, 'EmailAddresse1'); ?>"  name="EmailAddresse1" id="EmailAddresse1" maxlength="40" /></td>
					</tr>
					<tr>
						<th colspan="2" class="th_02">メールアドレス2</th>
						<td><input type="text" value="<?php echo Hash::get($input, 'EmailAddresse2'); ?>"  name="EmailAddresse2" id="EmailAddresse2" maxlength="40" /></td>
					</tr>
					<tr>
						<th colspan="2">最終更新日時</th>
						<td><span id="updated_date"></span></td>
					</tr>
					<tr>
						<th colspan="2">最終更新者</th>
						<td><span id="updated_by"></span></td>
					</tr>
				</table>
			</div><!-- //.box_02 -->
		</div>

		<table id="footer">
			<tr>
				<td class="f_td1"><input class="Button1" type="button" value="閉じる" onclick="window.close();" /></td>
				<td class="f_td2"><input class="Button1" type="button" value="修正" onclick="beforeSubmit('edit');" /></td>
				<td class="f_td3"><input class="Button1" type="button" value="追加" onclick="beforeSubmit('add');" /></td>
				<td class="f_td4"><input class="Button1" type="button" value="削除" onclick="beforeSubmit('delete');" /></td>
			</tr>
		</table><!-- //#footer -->

	<?php echo $this->SalaryForm->end(); ?>

<?php // 検索子画面の読み込み ?>
<?php echo $this->element('common_search'); ?>

<script>
	function beforeSubmit(type) {
		var submitType = document.createElement("input");
		submitType.setAttribute("name", "commitType");
		submitType.setAttribute("type", "hidden");
		submitType.setAttribute("value", type);
		document.flexible.appendChild(submitType);
		document.flexible.submit();
	}

	<?php
	// エラーメッセージ一覧配列をカンマ区切りで展開する
	$errorMsgString = "";
	if(!empty($errorMsgList)) {
		$errorMsgString = join(",", $errorMsgList);
	}
	?>
	// phpからjavascriptへ値を渡す
	var errorMsgString = "<?php echo $errorMsgString; ?>";
	// エラーメッセージがあるときは、ポップアップで表示する
	if(errorMsgString != "") {
		// カンマを\n（改行）に置換する
		errorMsgString = errorMsgString.split(",").join("\n");
		// エラーメッセージのポップアップを表示する
		showErrorAlert();
	}

	// エラーメッセージのポップアップを表示する
	function showErrorAlert(){
		window.alert(errorMsgString);
	}
</script>