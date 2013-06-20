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
		<?php foreach($rtnSmItakusakiKaishaList as $items) : ?>
		<tr>
			<td><?php echo $items['SmItakusakiKaisha']['ConsignmentCompanyCD'] ?></td>
			<td><?php echo $items['SmItakusakiKaisha']['ConsignmentCompanyName'] ?></td>
		</tr>
		<?php endforeach ?>
	</table>
</div>

<br>

	<form method="POST" action="./P002/edit">
		<div id="contents2">
			コード<input type="text" value= "" name="ConsignmentCompanyCD" class="" ><br>
			委託先会社名<input type="text" value= "" name="ConsignmentCompanyName" class="" /><br>
			代表者名<input type="text" value= "" name="Representative" class="" /><br>
			郵便番号<input type="text" value= "" name="PostalCD" class="" />-<input type="text" value= "" class="" /><br>
			市町村コード<input type="text" value= "" name="CityCD" class="" />ボタン？hogehoge<br>
			漢字住所<input type="text" value= "" name="AddressKanji" class="" /><br>
			方書き<input type="text" value= "" name="SideKanji" class="" /><br>
			カナ住所<input type="text" value= "" name="AddressKana" class="" /><br>
			方書き<input type="text" value= "" name="SideKana"class="" /><br>
			営業担当者<input type="text" value= "" name="AccountExecutiveName" class="" /><br>
			電話1<input type="text" value= "" name="TelNo1" class="" /><br>
			電話2<input type="text" value= "" name="TelNo2" class="" /><br>
			電話3<input type="text" value= "" name="TelNo3" class="" /><br>
			メールアドレス1<input type="text" value=""  name="EmailAddresse1" class="" /><br>
			メールアドレス2<input type="text" value= "" name="EmailAddresse2" class="" /><br>
		</div><!--contents2-->

	</form>