<div id="container">

<?php echo $this->Form->create('Payroll001', array('controller' => 'Payroll001', 'action' => 'search', 'name' => 'Payroll001Form')); ?>
	<table class="t_header">
		<tr>
			<th>職員番号</th>
			<td>
				<input type="text" name="EmpNo"  value="<?php echo Hash::get($searchCondition, 'EmpNo'); ?>" />
				<button type="button" value="">？</button>
			</td>
			<th>氏名</th>
			<td>NNNNNNNNNNNNNNN</td>
			<th>年齢</th>
			<td>満　ZZ歳</td>
			<td class="td1">
				<input type="submit" class="Button1" value="検索" />
			</td>
		</tr>
		<tr>
			<th>支給年月日</th>
			<td>
				<input type="text" placeholder="GGYY.MM" name="PaidYM" value="<?php echo Hash::get($searchCondition, 'PaidYM'); ?>" /><button type="button" name="" value="">？</button>
			</td>
			<th>支給区分</th>
			<td>
				<input type="text" size="1" placeholder="X" name="PaidDiv" value="<?php echo Hash::get($searchCondition, 'PaidDiv'); ?>" />
				<button type="button" name="" value="">？</button>
				<p class="description">NNNNN</p>
			</td>
			<th>支払者</th>
			<td>
				<input type="text" size="1" placeholder="X" name="PayerDiv" value="<?php echo Hash::get($searchCondition, 'PayerDiv'); ?>" />
				<button type="button" name="" value="">？</button>
				<p class="description">NNNNN</p>
			</td>
			<td class="td1">
				<input type="button" class="Button1" value="消去" />
			</td>
		</tr>
	</table>
<?php echo $this->SalaryForm->end(); ?>

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

		<table class="tbl_02">
			<tr>
				<th colspan="7" class="th_01 bdR_01">支給</th>
				<th colspan="5" class="th_01">控除</th>
			</tr>
			<tr>
				<th>給料/報酬</th>
				<th>発令給</th>
				<td>-Z,ZZZ,ZZZ</td>
				<th>超過勤務手当</th>
				<td>-Z,ZZZ,ZZZ</td>
				<th>期末手当</th>
				<td class="bdR_01">-Z,ZZZ,ZZZ</td>

				<th>共済</th>
				<th>長期</th>
				<td>-Z,ZZZ,ZZZ</td>
				<th>住民税</th>
				<td>-Z,ZZZ,ZZZ</td>
			</tr>
			<tr>
				<th>&nbsp;</th>
				<th>支給額</th>
				<td>-Z,ZZZ,ZZZ</td>
				<th>休日給</th>
				<td>-Z,ZZZ,ZZZ</td>
				<th>勤勉手当</th>
				<td class="bdR_01">-Z,ZZZ,ZZZ</td>

				<th>&nbsp;</th>
				<th>短期</th>
				<td>-Z,ZZZ,ZZZ</td>
				<th>区互助</th>
				<td>-Z,ZZZ,ZZZ</td>
			</tr>
			<tr>
				<th>扶養手当</th>
				<th>&nbsp;</th>
				<td>-Z,ZZZ,ZZZ</td>
				<th>夜勤手当</th>
				<td>-Z,ZZZ,ZZZ</td>
				<th>&nbsp;</th>
				<td class="bdR_01">&nbsp;</td>

				<th>&nbsp;</th>
				<th>福祉</th>
				<td>-Z,ZZZ,ZZZ</td>
				<th>区教互助</th>
				<td>-Z,ZZZ,ZZZ</td>
			</tr>
			<tr>
				<th>地域手当</th>
				<th>&nbsp;</th>
				<td>-Z,ZZZ,ZZZ</td>
				<th>特殊勤務手当</th>
				<td>-Z,ZZZ,ZZZ</td>
				<th>その他支給</th>
				<td class="bdR_01">-Z,ZZZ,ZZZ</td>

				<th>&nbsp;</th>
				<th>介護</th>
				<td>-Z,ZZZ,ZZZ</td>
				<th>都教互助</th>
				<td>-Z,ZZZ,ZZZ</td>
			</tr>
			<tr>
				<th>管理職手当</th>
				<th>&nbsp;</th>
				<td>-Z,ZZZ,ZZZ</td>
				<th>管理職特勤</th>
				<td>-Z,ZZZ,ZZZ</td>
				<th>（内、近接地内旅費）</th>
				<td class="bdR_01">-Z,ZZZ,ZZZ</td>

				<th>社保</th>
				<th>厚年</th>
				<td>-Z,ZZZ,ZZZ</td>
				<th>特互助</th>
				<td>-Z,ZZZ,ZZZ</td>
			</tr>
			<tr>
				<th>住居手当</th>
				<th>&nbsp;</th>
				<td>-Z,ZZZ,ZZZ</td>
				<th>宿日直手当</th>
				<td>-Z,ZZZ,ZZZ</td>
				<th>&nbsp;</th>
				<td class="bdR_01">&nbsp;</td>

				<th>&nbsp;</th>
				<th>健保</th>
				<td>-Z,ZZZ,ZZZ</td>
				<th>事業団</th>
				<td>-Z,ZZZ,ZZZ</td>
			</tr>
			<tr>
				<th>初任給調整</th>
				<th>&nbsp;</th>
				<td>-Z,ZZZ,ZZZ</td>
				<th>（内、非課税額）</th>
				<td>-Z,ZZZ,ZZZ</td>
				<th>&nbsp;</th>
				<td class="bdR_01">&nbsp;</td>

				<th>&nbsp;</th>
				<th>介護</th>
				<td>-Z,ZZZ,ZZZ</td>
				<th>&nbsp;</th>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<th>単身赴任</th>
				<th>&nbsp;</th>
				<td>-Z,ZZZ,ZZZ</td>
				<th>能率給/賃金</th>
				<td>-Z,ZZZ,ZZZ</td>
				<th>&nbsp;</th>
				<td class="bdR_01">&nbsp;</td>

				<th>雇用保険</th>
				<th>&nbsp;</th>
				<td>-Z,ZZZ,ZZZ</td>
				<th>福利控除計</th>
				<td>-Z,ZZZ,ZZZ</td>
			</tr>
			<tr>
				<th>義務教育特別</th>
				<th>&nbsp;</th>
				<td>-Z,ZZZ,ZZZ</td>
				<th>児童手当</th>
				<td>-Z,ZZZ,ZZZ</td>
				<th>&nbsp;</th>
				<td class="bdR_01">&nbsp;</td>

				<th>所得税</th>
				<th>&nbsp;</th>
				<td>-Z,ZZZ,ZZZ</td>
				<th>&nbsp;</th>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<th>通勤手当</th>
				<th>&nbsp;</th>
				<td>-Z,ZZZ,ZZZ</td>
				<th>追給戻入</th>
				<td>-Z,ZZZ,ZZZ</td>
				<th>■支給額計</th>
				<td class="bdR_01">-Z,ZZZ,ZZZ</td>

				<th>課税対象</th>
				<th>&nbsp;</th>
				<td>-Z,ZZZ,ZZZ</td>
				<th>■控除額計</th>
				<td>-Z,ZZZ,ZZZ</td>
			</tr>
			<tr>
				<th>（内、非課税額）</th>
				<th>&nbsp;</th>
				<td>-Z,ZZZ,ZZZ</td>
				<th>&nbsp;</th>
				<td>&nbsp;</td>
				<th>（内、非課税額）</th>
				<td class="bdR_01">-Z,ZZZ,ZZZ</td>

				<th>税率</th>
				<th>&nbsp;</th>
				<td>ZZZ.ZZZ％</td>
				<th>&nbsp;</th>
				<td>&nbsp;</td>
			</tr>
		</table>

		<table class="tbl_02">
			<tr>
				<th rowspan="2">■差引支給額</th>
				<td rowspan="2">ZZZ.ZZZ％</td>
				<th rowspan="2">■口座振込</th>
				<td>A口座</td>
				<td>-Z,ZZZ,ZZZ</td>
				<td>XXXXX</td>
				<td>NNNNNNNN</td>
				<td>XXXXX</td>
				<td>NNNNNNNN</td>
				<th rowspan="2">■現金支給額</th>
				<td rowspan="2">-Z,ZZZ,ZZZ</td>
			</tr>
			<tr>
				<td>B口座</td>
				<td>-Z,ZZZ,ZZZ</td>
				<td>XXXXX</td>
				<td>NNNNNNNN</td>
				<td>XXXXX</td>
				<td>NNNNNNNN</td>
			</tr>
		</table>
	</div><!-- //.box_01 -->

	<p class="btn_01"><input class="Button1" type="submit" value="（空白）" /></p>
</div>