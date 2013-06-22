<?php
	// スクリプトで、この画面特有のものを差し込むときの書き方。（この画面では選択されたレコードを詳細エリアに転記するなどの処理）
	$this->append('script'); echo $this->Html->script(array('lib/jquery-1.9.1.min', 'salary/s003_index')); $this->end();
	// スタイルシートで、この画面特有のものを差し込むときの書き方。（この画面では必要無いのでコメントアウト）
	//$this->append('css');    echo $this->Html->css(array('user/detail'));    $this->end();
?>

<div id="contents">
	<table>
		<tr>
			<td>
				<input id="Button1" type="button" value="前ページ" />
				<input id="Button1" type="button" value="次ページ" />
				<input type="text" class=""  />/<input type="text" class="" />
				<input id="Button1" type="button" value="ジャンプ" />
			</td>
		</tr>
	</table>

	<table style="width:100%;" border="1">
		<tr>
			<th class="">コード</th>
			<th class="">委託先会社名</th>
		</tr>
		<?php if(isset($rtnSmItakusakiKaishaList)) { ?>
			<?php foreach($rtnSmItakusakiKaishaList as $items) : ?>
			<tr class="selectableRecord">
				<td><?php echo $items['SmItakusakiKaisha']['ConsignmentCompanyCD'] ?></td>
				<td><?php echo $items['SmItakusakiKaisha']['ConsignmentCompanyName'] ?></td>
				<td style="display:none" class="ConsignmentCompanyName"><?php echo $items['SmItakusakiKaisha']['ConsignmentCompanyName'] ?></td>
				<td style="display:none" class="Representative"><?php echo $items['SmItakusakiKaisha']['Representative'] ?></td>
				<td style="display:none" class="PostalCD"><?php echo $items['SmItakusakiKaisha']['PostalCD'] ?></td>
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
			</tr>
			<?php endforeach ?>
		<?php } ?>
	</table>
</div>

<br>

	<form method="POST" action="./P002/edit">
		<div id="contents2">
			コード<input type="text" value= "" name="ConsignmentCompanyCD" id="ConsignmentCompanyCD" class="" ><br>
			委託先会社名<input type="text" value= "" name="ConsignmentCompanyName" id="ConsignmentCompanyName" class="" /><br>
			代表者名<input type="text" value= "" name="Representative" id="Representative" class="" /><br>
			郵便番号<input type="text" value= "" name="PostalCD" id="PostalCD" class="" />-<input type="text" value= "" class="" /><br>
			市町村コード<input type="text" value= "" name="CityCD" id="CityCD" class="" />ボタン？hogehoge<br>
			漢字住所<input type="text" value= "" name="AddressKanji" id="AddressKanji" class="" /><br>
			方書き<input type="text" value= "" name="SideKanji" id="SideKanji" class="" /><br>
			カナ住所<input type="text" value= "" name="AddressKana" id="AddressKana" class="" /><br>
			方書き<input type="text" value= "" name="SideKana" id="SideKana" class="" /><br>
			営業担当者<input type="text" value= "" name="AccountExecutiveName" id="AccountExecutiveName" class="" /><br>
			電話1<input type="text" value= "" name="TelNo1" id="TelNo1" class="" /><br>
			電話2<input type="text" value= "" name="TelNo2" id="TelNo2" class="" /><br>
			電話3<input type="text" value= "" name="TelNo3" id="TelNo3" class="" /><br>
			メールアドレス1<input type="text" value=""  name="EmailAddresse1" id="EmailAddresse1" class="" /><br>
			メールアドレス2<input type="text" value= "" name="EmailAddresse2" id="EmailAddresse2" class="" /><br>
		</div><!--contents2-->

	</form>

