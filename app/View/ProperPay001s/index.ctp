<?php
	// スクリプトで、この画面特有のものを差し込むときの書き方。（この画面では選択されたレコードを詳細エリアに転記するなどの処理）
	//$this->append('script'); echo $this->Html->script(array('lib/jquery-1.9.1.min', 'salary/s003_index')); $this->end();
	// スタイルシートで、この画面特有のものを差し込むときの書き方。（この画面では必要無いのでコメントアウト）
	$this->append('css');
		echo $this->Html->css(array('properpay/common'));
	$this->end();
?>

<?php echo $this->Form->create('ProperPay001s', array('controller' => 'ProperPay001s', 'action' => 'search', 'name' => 'ProperPay001sForm')); ?>
<table class="t_header_04">
	<tr>
		<th>職員番号</th>
		<td>
			<input type="text" name="EmpNo"  value="<?php echo Hash::get($searchCondition, 'EmpNo'); ?>" />
			<button type="button" value="">職員番号検索</button>
		</td>
		<th>氏名</th>
		<td>NNNNNNNNNNNNNNN</td>
		<th>年齢</th>
		<td>満　ZZ歳</td>
		<td class="td1">
			<input id="Button1" type="submit" value="検索" />
		</td>
	</tr>
	<tr>
		<th>支給年月日</th>
		<td>
			<input type="text" placeholder="GGYY.MM" name="EmpNo" value="<?php echo Hash::get($searchCondition, 'PaidYM'); ?>" />
			<button type="button" value="">支給年月検索</button>
		</td>
		<th>支給区分</th>
		<td>
			<input type="text" size="1" placeholder="X" name="PaidDiv" value="<?php echo Hash::get($searchCondition, 'PaidDiv'); ?>" />
			<button type="button" value="">支給区分検索</button>
			<p class="description">NNNNN</p>
		</td>
		<th>支払者</th>
		<td>
			<input type="text" size="1" placeholder="X" name="" value="" />
			<button type="button" name="" value="">あいうえお</button>
			<p class="description">NNNNN</p>
		</td>
		<td class="td1">
			<input id="Button1" type="button" value="消去" />
		</td>
	</tr>
</table>

<ul class="menu">
	<li><a href="">基本情報</a></li>
</ul>
<div class="box_01">
	<table class="tbl_01">
		<tr>
			<th>支給年月日</th>
			<td>GGYY MM DD</td>
			<th>職員区分</th>
			<td>XX</td>
			<td>NNNN</td>
			<th>給与体系</th>
			<td>XX</td>
			<td>NNNNNN</td>
			<th>所属</th>
			<td>XXXXXXXXX</td>
			<td>N・NN・NNNNN</td>
			<th>職層</th>
			<td>XX</td>
			<td>NNNN</td>
			<th>職務</th>
			<td>XXX</td>
			<td>NNNNNNNNNN</td>
			<td>NNNNN</td>
		</tr>
	</table>

	<table class="tbl_01">
		<tr>
			<th>支出科目</th>
			<th>給料</th>
			<td>XXXXXXXXXXXX</td>
			<td>NNNNNNNNNN</td>
			<th>児童</th>
			<td>XXXXXXXXXXXX</td>
			<td>NNNNNNNNNN</td>
			<th>超勤</th>
			<td>XXXXXXXXXXXX</td>
			<td>NNNNNNNNNN</td>
			<th>休日給</th>
			<td>XXXXXXXXXXXX</td>
			<td>NNNNNNNNNN</td>
		</tr>
	</table>

	<table class="tbl_01">
		<tr>
			<th>給料/報酬</th>
			<td>XX</td>
			<td>NNNNNN</td>
			<td>XX-XXX</td>
			<td>NN</td>
			<td>Z,ZZZ,ZZZ円</td>
			<td><label><input type="checkbox" name="" value="">清掃加算対象</label></td>
			<th>現給保障</th>
			<td>NNN</td>
			<th>現在の保障額</th>
			<td>XX</td>
			<td>NNNNNN</td>
			<td>XXXXXX</td>
			<td>Z,ZZZ,ZZZ円</td>
		</tr>
	</table>

	<table class="tbl_01">
		<tr>
			<th>勤務態様</th>
			<th>一日</th>
			<td>ZZ時間ZZ分</td>
			<th>一週間</th>
			<td>Z日勤務</td>
			<th>週の勤務時間</th>
			<td>ZZ時間ZZ分</td>
			<th>月の勤務日数</th>
			<td>ZZ日</td>
			<th>年の勤務日数</th>
			<td>ZZZ日</td>
			<th>その他</th>
			<td>ZZZ日</td>
			<td>ZZ月</td>
		</tr>
	</table>

	<table class="tbl_01">
		<tr>
			<th>勤怠事由</th>
			<td>XXXX</td>
			<td>NNNNNN</td>
			<th>支給割合</th>
			<td>ZZZ％</td>
			<th>発令年月日</th>
			<td>GGYY.MM.DD</td>
			<th>日割日数</th>
			<td>ZZ/ZZ</td>
		</tr>
	</table>

	<table class="tbl_04">
		<tr>
			<th colspan="6" class="th_01 bdR_01">支給</th>
			<th colspan="3" class="th_01 bdR_01">減額・手当停止</th>
			<th colspan="7" class="th_01">控除</th>
		</tr>
		<tr>
			<th colspan="6" class="bdR_01">■扶養手当</th>
			<th colspan="3" class="bdR_01">■減額</th>

			<th>■共済/社保</th>
			<td>X</td>
			<td>NNNN</td>
			<th>■雇用保険</th>
			<td>X</td>
			<td>NNNN</td>
			<th>■互助会/互助組合</th>
		</tr>
		<tr>
			<th class="txtC_01">配偶者</th>
			<th class="txtC_01">配欠</th>
			<th class="txtC_01">一人目</th>
			<th class="txtC_01">二人目</th>
			<th class="txtC_01">三人以降</th>
			<th class="bdR_01 txtC_01">特定加算</th>

			<td>ZZZ時間</td>
			<td colspan="2" class="bdR_01">ZZ日</td>

			<th>介護該当</th>
			<td>X</td>
			<td>NNNN</td>
			<th>高齢免除</th>
			<td>X</td>
			<td>NNNN</td>
			<td><label><input type="checkbox" name="" value="">
			区互助</label></td>
		</tr>
		<tr>
			<td class="txtC_01">X</td>
			<td class="txtC_01">X</td>
			<td class="txtC_01">X</td>
			<td class="txtC_01">X</td>
			<td class="txtC_01">X</td>
			<td class="bdR_01 txtC_01">X</td>

			<td colspan="3" class="bdR_01"><label><input type="checkbox" name="" value="">全欠勤</label></td>

			<td colspan="3"><label><input type="checkbox" name="" value="">部分休長期免除</label></td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td><label><input type="checkbox" name="" value="">区教互助</label></td>
		</tr>
		<tr>
			<th colspan="3">■住居手当</th>
			<th colspan="3" class="bdR_01">■単身赴任</th>

			<th colspan="3" class="bdR_01">■手当停止</th>

			<td colspan="3" class="txtC_01">ZZZ時間</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td><label><input type="checkbox" name="" value="">都教互助</label></td>
		</tr>
		<tr>
			<td>XX</td>
			<td colspan="2">NNNNNN</td>
			<td>XX</td>
			<td colspan="2" class="bdR_01">NNNNNN</td>

			<th>通勤</th>
			<td>X</td>
			<td class="bdR_01">NN</td>

			<th colspan="3">■標準報酬</th>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td><label><input type="checkbox" name="" value="">特互助</label></td>
		</tr>
		<tr>
			<th colspan="2">■初任給調整</th>
			<td>XX</td>
			<th>■通勤手当</th>
			<td>X</td>
			<td class="bdR_01">NNNNNN</td>

			<th>管理職</th>
			<td>X</td>
			<td class="bdR_01">NN</td>

			<th>等級</th>
			<td>XX</td>
			<td>（XX）</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td><label><input type="checkbox" name="" value="">事業団</label></td>
		</tr>
		<tr>
			<th colspan="2">■単価算入特勤</th>
			<td>&nbsp;</td>
			<th>&nbsp;</th>
			<td>&nbsp;</td>
			<th class="bdR_01">&nbsp;</th>

			<th>&nbsp;</th>
			<th>&nbsp;</th>
			<th class="bdR_01">&nbsp;</th>

			<th>月額</th>
			<td colspan="2">Z,ZZZ,ZZZ</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<th><p>特勤</p></th>
			<td>XXXX</td>
			<td>NNNNNN</td>
			<th>&nbsp;</th>
			<td>&nbsp;</td>
			<th class="bdR_01">&nbsp;</th>

			<th>&nbsp;</th>
			<th>&nbsp;</th>
			<th class="bdR_01">&nbsp;</th>

			<th>適用</th>
			<td colspan="2">GGYY.MM</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<th>算入方法</th>
			<td>X</td>
			<td>NNNNNN</td>
			<th>&nbsp;</th>
			<td>&nbsp;</td>
			<th class="bdR_01">&nbsp;</th>

			<th>&nbsp;</th>
			<th>&nbsp;</th>
			<th class="bdR_01">&nbsp;</th>

			<th>&nbsp;</th>
			<th>&nbsp;</th>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<th>一日あたり日数</th>
			<td>ZZ日</tdh>
			<td>&nbsp;</td>
			<th>&nbsp;</th>
			<td>&nbsp;</td>
			<th class="bdR_01">&nbsp;</th>

			<th>&nbsp;</th>
			<th>&nbsp;</th>
			<th class="bdR_01">&nbsp;</th>

			<th>&nbsp;</th>
			<th>&nbsp;</th>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
	</table>

</div><!-- //.box_01 -->

<p class="btn_01"><input id="Button1" type="submit" value="（空白）" /></p>