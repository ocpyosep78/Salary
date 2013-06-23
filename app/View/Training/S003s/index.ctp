<?php
	// スクリプトで、この画面特有のものを差し込むときの書き方。（この画面では選択されたレコードを詳細エリアに転記するなどの処理）
	$this->append('script'); echo $this->Html->script(array('lib/jquery-1.9.1.min', 'salary/s003_index')); $this->end();
	// スタイルシートで、この画面特有のものを差し込むときの書き方。（この画面では必要無いのでコメントアウト）
	//$this->append('css');    echo $this->Html->css(array('user/detail'));    $this->end();
?>

<?php echo $this->SalaryForm->create('S003', array('controller' => 'S003', 'action' => 'doFlexibleAction', 'name' => 'flexible')); ?>

	<div id="content">
		<table class="tbl_01">
			<tr>
				<td>
					<input id="Button1" type="button" value="前ページ" />
					<input id="Button1" type="button" value="次ページ" />
					<input type="text" />/<input type="text" />
					<input id="Button1" type="button" value="ジャンプ" />
				</td>
			</tr>
		</table>

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
					<td style="display:none" class="ConsignmentCompanyCD"><?php echo $items['SmItakusakiKaisha']['ConsignmentCompanyCD'] ?></td>
					<td style="display:none" class="ConsignmentCompanyName"><?php echo $items['SmItakusakiKaisha']['ConsignmentCompanyName'] ?></td>
					<td style="display:none" class="Representative"><?php echo $items['SmItakusakiKaisha']['Representative'] ?></td>
					<td style="display:none" class="PostalCD1"><?php echo substr($items['SmItakusakiKaisha']['PostalCD'], 0, 3) ?></td>
					<td style="display:none" class="PostalCD2"><?php echo substr($items['SmItakusakiKaisha']['PostalCD'], 4, 4) ?></td>
					<td style="display:none" class="CityCD"><?php echo $items['SmItakusakiKaisha']['CityCD'] ?></td>
					<td style="display:none" class="AddressKanji"><?php echo $items['SmItakusakiKaisha']['AddressKanji'] ?></td>
					<td style="display:none" class="SideKanji"><?php echo $items['SmItakusakiKaisha']['SideKanji'] ?></td>
					<td style="display:none" class="AddressKana"><?php echo $items['SmItakusakiKaisha']['AddressKana'] ?></td>
					<td style="display:none" class="SideKana"><?php echo $items['SmItakusakiKaisha']['SideKana'] ?></td>
					<td style="display:none" class="AccountExecutiveName"><?php echo $items['SmItakusakiKaisha']['AccountExecutiveName'] ?></td>
					<td style="display:none" class="TelNo1"><?php echo $items['SmItakusakiKaisha']['TelNo1'] ?></td>
					<td style="display:none" class="TelNo2"><?php echo $items['SmItakusakiKaisha']['TelNo2'] ?></td>
					<td style="display:none" class="TelNo3"><?php echo $items['SmItakusakiKaisha']['TelNo3'] ?></td>
					<td style="display:none" class="EmailAddresse1"><?php echo $items['SmItakusakiKaisha']['EmailAddresse1'] ?></td>
					<td style="display:none" class="EmailAddresse2"><?php echo $items['SmItakusakiKaisha']['EmailAddresse2'] ?></td>
					<td style="display:none" class="updated_date"><?php echo $this->SalaryForm->getJapaneseEra($items['SmItakusakiKaisha']['updated_date']); ?></td>
					<td style="display:none" class="updated_by"><?php echo $items['SmItakusakiKaisha']['updated_by'] ?></td>
				</tr>
				<?php endforeach ?>
				<?php } ?>
			</table>
		</div><!-- //.box_01 -->

		<hr>

		<div class="box_01">
			<p id="code">コード：<span id="Code"></span></p>
			<input type="hidden" value= "" name="ConsignmentCompanyCD" id="ConsignmentCompanyCD" />
			<table class="table_left">
				<tr>
					<th>委託先会社名</th>
					<td><input type="text" value= "" name="ConsignmentCompanyName" id="ConsignmentCompanyName" /></td>
				</tr>
				<tr>
					<th>代表者名</th>
					<td><input type="text" value= "" name="Representative" id="Representative" /></td>
				</tr>
				<tr>
					<th colspan="2">所在地</th>
				</tr>
				<tr>
					<th>郵便番号</th>
					<td><input type="text" value= "" name="PostalCD1" id="PostalCD1" maxlength="3" class="short_01" /> - <input type="text" value= "" name="PostalCD2" id="PostalCD2" maxlength="3" class="short_01" /></td>
				</tr>
				<tr>
					<th>市区町村CD</th>
					<td><input type="text" value= "" name="CityCD" id="CityCD" class="short_02" /><button type="button" name="" value="">？</button></td>
				</tr>
				<tr>
					<th>漢字住所</th>
					<td><input type="text" value= "" name="AddressKanji" id="AddressKanji" /></td>
				</tr>
				<tr>
					<th>方書き</th>
					<td><input type="text" value= "" name="SideKanji" id="SideKanji" /></td>
				</tr>
				<tr>
					<th>カナ住所</th>
					<td><input type="text" value= "" name="AddressKana" id="AddressKana" /></td>
				</tr>
				<tr>
					<th>方書き</th>
					<td><input type="text" value= "" name="SideKana" id="SideKana" /></td>
				</tr>
			</table><!-- //.table_left -->
			<table class="table_right">
				<tr>
					<th>営業担当者</th>
					<td><input type="text" value= "" name="AccountExecutiveName" id="AccountExecutiveName" /></td>
				</tr>
				<tr>
					<th colspan="2">連絡先</th>
				</tr>
				<tr>
					<th>電話1</th>
					<td><input type="tel" value= "" name="TelNo1" id="TelNo1" /></td>
				</tr>
				<tr>
					<th>電話2</th>
					<td><input type="tel" value= "" name="TelNo2" id="TelNo2" /></td>
				</tr>
				<tr>
					<th>電話3</th>
					<td><input type="tel" value= "" name="TelNo3" id="TelNo3" /></td>
				</tr>
				<tr>
					<th>メールアドレス1</th>
					<td><input type="email" value=""  name="EmailAddresse1" id="EmailAddresse1" /></td>
				</tr>
				<tr>
					<th>メールアドレス2</th>
					<td><input type="email" value=""  name="EmailAddresse2" id="EmailAddresse2" /></td>
				</tr>
				<tr>
					<th>最終更新日時</th>
					<td><span id="updated_date"></span></td>
				</tr>
				<tr>
					<th>最終更新者</th>
					<td><span id="updated_by"></span></td>
				</tr>
			</table><!-- //.table_right -->
		</div><!-- //.box_01 -->

		<hr>
	</div>
	<?php echo $this->element('footer'); // フロント画面用フッター ?>

<?php echo $this->SalaryForm->end(); ?>

<script>
	function beforeSubmit(type) {
		var submitType = document.createElement("input");
		submitType.setAttribute("name", "commitType");
		submitType.setAttribute("type", "hidden");
		submitType.setAttribute("value", type);
		document.flexible.appendChild(submitType);
		document.flexible.submit();
	}
</script>