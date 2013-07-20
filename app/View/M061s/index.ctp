<?php
	$this->append('script'); echo $this->Html->script(array('lib/jquery-1.9.1.min', 'salary/payroll001s')); $this->end();
	$this->append('css'); echo $this->Html->css(array('salary/common', 'M061/common')); $this->end();
?>

<div id="container">
<!-- *********************************【ヘッダー】********************************* -->
<?php echo $this->SalaryForm->create('M061s', array('url' => array('controller' => 'M061s', 'action' => 'search'))); ?>
	<table class="t_header">
		<tr>
			<th>職員番号</th>
			<td>
				<?php echo $this->SalaryForm->text('EmpNo', array('value' => Hash::get($searchCondition, 'EmpNo')));?>
				<?php echo $this->SalaryForm->button('？', array('type' => 'button'), null); ?>
			</td>
			<th>氏名</th>
			<td>NNNNNNNNNNNNNNN</td>
			<th>年齢</th>
			<td>満　ZZ歳</td>
			<td class="td01 pd01">
				<?php echo $this->SalaryForm->submit('検索', array('type' => 'submit', 'class' => 'Button1'), null); ?>
			</td>
		</tr>
		<tr>
			<th>支給年月</th>
			<td>
				<?php echo $this->SalaryForm->text('PaidYM', array('value' => Hash::get($searchCondition, 'PaidYM'), 'placeholder' => 'GGYY.MM'));?>
				<?php echo $this->SalaryForm->button('？', array('type' => 'button'), null); ?>
			</td>
			<th>支払者</th>
			<td>
				<?php echo $this->SalaryForm->text('PayerDiv', array('size' => '1', 'id' => 'ShiharaishaCD', 'value' => Hash::get($searchCondition, 'PayerDiv'), 'placeholder' => 'XX'));?>
				<?php echo $this->SalaryForm->button('？', array('type' => 'button', 'onclick' => "viewForCommonSearch('QmKyuyoShiharaisha', 'PayerName', 'PayerDiv', 'ShiharaishaName', 'ShiharaishaCD')" ), null); ?>
				<p class="description" id="ShiharaishaName"></p>
			</td>
			<td>&nbsp;</td>
			<th>&nbsp;</th>
			<td class="td01 pd02">
				<?php echo $this->SalaryForm->reset('clear', array('type' => 'reset', 'class' => 'Button1', 'value' => '消去'), null); ?>
			</td>
		</tr>
	</table>
<?php echo $this->SalaryForm->end(); ?>
<!-- *********************************【コンテンツ】********************************* -->
	<div id="tabs">
<!-- ============================== 共通タブメニュー ============================== -->
		<ul class="menu">
			<li><a href="#">基本情報</a></li>
			<li><a href="#">日割情報</a></li>
			<li><a href="#">詳細情報</a></li>
			<li><a href="#">期末勤勉詳細</a></li>
			<li><a href="#">超勤・休日・夜勤</a></li>
			<li><a href="#">特勤・宿日直・管特</a></li>
			<li><a href="#">能率給</a></li>
			<li><a href="#">賃金</a></li>
		</ul>
<!-- ============================== 共通表示項目 ============================== -->

<!-- 1行目 -->
		<div class="wrap bdT_blue bdR_blue bdL_blue pdR10 pdL10" id="tabCommonContents">
			<table class="tbl01">
				<tr>
					<th class="bd_double">支給年月日</th>
					<td class="bd_double"><?php echo $this->SalaryForm->getJapaneseEra(Hash::get($commonInfo, 'QtSeitoHiwari.PaidYM')); ?></td>
					<th>職員区分</th>
					<td><?php echo Hash::get($commonInfo, 'QtSeitoHiwari.EmpDiv'); ?></td>
					<td><?php echo Hash::get($commonInfo, 'QtSeitoHiwari.CodeName_EmpDivName'); ?></td>
					<th>給与体系</th>
					<td><?php echo Hash::get($commonInfo, 'QtSeitoHiwari.SalaryTypeCD'); ?></td>
					<td><?php echo Hash::get($commonInfo, 'QtSeitoHiwari.CodeName_SalaryTypeName'); ?></td>
					<th>所属</th>
					<td><?php echo Hash::get($commonInfo, 'QtSeitoHiwari.DepCD'); ?></td>
					<td>N・NN・NNNNN</td>
					<th>職層</th>
					<td><?php echo Hash::get($commonInfo, 'QtSeitoHiwari.JobGradeCD'); ?></td>
					<td><?php echo Hash::get($commonInfo, 'QtSeitoHiwari.CodeName_JobGradeName'); ?></td>
					<th>職務</th>
					<td><?php echo Hash::get($commonInfo, 'QtSeitoHiwari.JobDutyCD'); ?></td>
					<td><?php echo Hash::get($commonInfo, 'QtSeitoHiwari.CodeName_JobTypeName'); ?></td>
					<td>NNNNN</td>
				</tr>
			</table>
<!-- 2行目 -->
			<table class="tbl01">
				<tr>
					<th>支出科目</th>
					<th>給料</th>
					<td><?php echo Hash::get($commonInfo, 'QtSeitoHiwari.SalaryRewardsAccountCD'); ?></td>
					<td>NNNNNNNNNN</td>
					<th>児童</th>
					<td><?php echo Hash::get($commonInfo, 'QtSeitoHiwari.ChildAllowAccountCD'); ?></td>
					<td>NNNNNNNNNN</td>
					<th>超勤</th>
					<td><?php echo Hash::get($commonInfo, 'QtSeitoHiwari.OverTimeWorkAccountCD'); ?></td>
					<td>NNNNNNNNNN</td>
					<th>休日給</th>
					<td><?php echo Hash::get($commonInfo, 'QtSeitoHiwari.HolidaySalaryAccountCD'); ?></td>
					<td>NNNNNNNNNN</td>
				</tr>
			</table>
<!-- 3行目 -->
			<table class="tbl01">
				<tr>
					<th>給料/報酬</th>
					<td><?php echo Hash::get($commonInfo, 'QtSeitoHiwari.SalaryTable'); ?></td>
					<td>NNNNNN</td>
					<td><?php echo Hash::get($commonInfo, 'QtSeitoHiwari.SalaryClass'); ?>-<?php echo Hash::get($commonInfo, 'QtSeitoHiwari.SalaryGrade'); ?></td>
					<td>NN</td>
					<td>Z,ZZZ,ZZZ円</td>
					<td><label><input type="checkbox" name="" value="">清掃加算対象</label></td>
					<th>現給保障</th>
					<td>NNN</td>
					<th>現在の保障額</th>
					<td><?php echo Hash::get($commonInfo, 'QtSeitoHiwari.TableOnGuarantTable'); ?></td>
					<td>NNNNNN</td>
					<td><?php echo Hash::get($commonInfo, 'QtSeitoHiwari.GradeOnGuarantTable'); ?>-<?php echo Hash::get($commonInfo, 'QtSeitoHiwari.ClassOnGuarantTable'); ?></td>
					<td>Z,ZZZ,ZZZ円</td>
				</tr>
			</table>
<!-- 4行目 -->
			<table class="tbl01">
				<tr>
					<th>勤務態様</th>
					<th>一日</th>
					<td><?php echo Hash::get($commonInfo, 'QtSeitoHiwari.WorkingTimesOfDayHour'); ?>時間<?php echo Hash::get($commonInfo, 'QtSeitoHiwari.WorkingTimesOfDayMinute'); ?>分</td>
					<th>一週間</th>
					<td><?php echo Hash::get($commonInfo, 'QtSeitoHiwari.WorkingDaysOfWeek'); ?>日勤務</td>
					<th>週の勤務時間</th>
					<td><?php echo Hash::get($commonInfo, 'QtSeitoHiwari.WorkingTimesOfWeekHour'); ?>時間<?php echo Hash::get($commonInfo, 'QtSeitoHiwari.WorkingTimesOfWeekMinute'); ?>分</td>
					<th>月の勤務日数</th>
					<td><?php echo Hash::get($commonInfo, 'QtSeitoHiwari.WorkingDaysOfMonth'); ?>日</td>
					<th>年の勤務日数</th>
					<td><?php echo Hash::get($commonInfo, 'QtSeitoHiwari.WorkingDaysOfYear'); ?>日</td>
					<th>その他</th>
					<td><?php echo Hash::get($commonInfo, 'QtSeitoHiwari.OtherDay'); ?>日</td>
					<td>／</td>
					<td><?php echo Hash::get($commonInfo, 'QtSeitoHiwari.OtherMonth'); ?>月</td>
				</tr>
			</table>
<!-- 5行目 -->
			<table class="tbl01">
				<tr>
					<th>勤怠事由</th>
					<td><?php echo Hash::get($commonInfo, 'QtSeitoHiwari.AttendanceOrderedReasonCD'); ?></td>
					<td><?php echo Hash::get($commonInfo, 'QtSeitoHiwari.CodeName_NAME'); ?></td>
					<th>支給割合</th>
					<td><?php echo Hash::get($commonInfo, 'QtSeitoHiwari.PayRatio'); ?>％</td>
					<th>発令年月日</th>
					<td><?php echo $this->SalaryForm->getJapaneseEra(Hash::get($commonInfo, 'QtSeitoHiwari.DailyRateStartDate')); ?></td>
					<th>日割日数</th>
					<td><?php echo Hash::get($commonInfo, 'QtSeitoHiwari.ObjectDays'); ?></td>
					<td>／</td>
					<td><?php echo Hash::get($commonInfo, 'QtSeitoHiwari.RequestedWorkingDaysOfMonth'); ?></td>
				</tr>
			</table>
		</div><!-- //.wrap -->

<!-- ============================== タブ01【基本情報】============================== -->
		<div id="tab01content" class="tabContent">
			<table class="tbl02 bdT">
				<tr>
					<th colspan="7" class="th01 bdR bdB bg01">支給</th>
					<th colspan="7" class="th01 bdB bg01">控除</th>
				</tr>
				<tr>
					<th>給料/報酬</th>
					<th>発令給</th>
					<td>
						<?php
							if(is_numeric(Hash::get($koteiInfo, 'QtSeitoKotei.SalaryPaidAmoTotal_PreReduce')) && is_numeric(Hash::get($koteiInfo, 'QtSeitoKotei.MonthlyRewardTotal_PreReduce'))){
								$hatsureikyuu = Hash::get($koteiInfo, 'QtSeitoKotei.SalaryPaidAmoTotal_PreReduce') + Hash::get($koteiInfo, 'QtSeitoKotei.MonthlyRewardTotal_PreReduce');
							} else {
								$hatsureikyuu = null;
							}
						?>
						<?php echo $this->SalaryForm->number_format($hatsureikyuu); ?>
					</td>
					<th>超過勤務手当</th>
					<td class="bdR"><?php echo $this->SalaryForm->number_format(Hash::get($hendoInfo, 'QtSeitoHendo.OverTimeWorkAllow')); ?></td>
					<th>《1日現在単価》</th>
					<td class="bdR"></td>

					<th>共済</th>
					<th>長期</th>
					<td><?php echo $this->SalaryForm->number_format(Hash::get($koteiInfo, 'QtSeitoKotei.MultiAidLongTermPrem')); ?></td>
					<th>期末</th>
					<th>共済</th>
					<th>長期</th>
					<td><?php echo $this->SalaryForm->number_format(Hash::get($koteiInfo, 'QtSeitoKotei.EndTerm_MultiAidLTPrem')); ?></td>
				</tr>
				<tr>
					<th>&nbsp;</th>
					<th>支給額</th>
					<td>
						<?php
							if(is_numeric(Hash::get($koteiInfo, 'QtSeitoKotei.SalaryPaidAmoTotal')) && is_numeric(Hash::get($koteiInfo, 'QtSeitoKotei.MonthlyRewardTotal'))){
								$sikyuugaku = Hash::get($koteiInfo, 'QtSeitoKotei.SalaryPaidAmoTotal') + Hash::get($koteiInfo, 'QtSeitoKotei.MonthlyRewardTotal');
							} else {
								$sikyuugaku = null;
							}
						?>
						<?php echo $this->SalaryForm->number_format($sikyuugaku); ?>
					</td>
					<th>休日給</th>
					<td class="bdR"><?php echo $this->SalaryForm->number_format(Hash::get($hendoInfo, 'QtSeitoHendo.HolidayWorkAllow')); ?></td>
					<th class="td01">100</th>
					<td class="bdR"><?php echo $this->SalaryForm->number_format(Hash::get($hendoInfo, 'QtSeitoHendo.UnitPrcPerHour100')); ?></td>

					<th>&nbsp;</th>
					<th>短期</th>
					<td><?php echo $this->SalaryForm->number_format(Hash::get($koteiInfo, 'QtSeitoKotei.SocialInsHealthInsPrem')); ?></td>
					<th>&nbsp;</th>
					<th></th>
					<th>短期</th>
					<td>Z,ZZZ,ZZZ</td>
				</tr>
				<tr>
					<th>扶養手当</th>
					<th>&nbsp;</th>
					<td>Z,ZZZ,ZZZ</td>
					<th>夜勤手当</th>
					<td class="bdR">Z,ZZZ,ZZZ</td>
					<th class="td01">125</th>
					<td class="bdR">Z,ZZZ,ZZZ</td>

					<th>&nbsp;</th>
					<th>福祉</th>
					<td>Z,ZZZ,ZZZ</td>
					<th>&nbsp;</th>
					<th></th>
					<th>福祉</th>
					<td>Z,ZZZ,ZZZ</td>
				</tr>
				<tr>
					<th>地域手当</th>
					<th>&nbsp;</th>
					<td>Z,ZZZ,ZZZ</td>
					<th>特殊勤務手当</th>
					<td class="bdR">Z,ZZZ,ZZZ</td>
					<th class="td01">150</th>
					<td class="bdR">Z,ZZZ,ZZZ</td>

					<th>&nbsp;</th>
					<th>介護</th>
					<td>Z,ZZZ,ZZZ</td>
					<th>&nbsp;</th>
					<th></th>
					<th>介護</th>
					<td>Z,ZZZ,ZZZ</td>
				</tr>
				<tr>
					<th>管理職手当</th>
					<th>&nbsp;</th>
					<td>Z,ZZZ,ZZZ</td>
					<th>管理職特勤</th>
					<td class="bdR">Z,ZZZ,ZZZ</td>
					<th class="td01">135</th>
					<td class="bdR">Z,ZZZ,ZZZ</td>

					<th>社保</th>
					<th>厚年</th>
					<td>Z,ZZZ,ZZZ</td>
					<th>期末</th>
					<th>社保</th>
					<th>厚年</th>
					<td>Z,ZZZ,ZZZ</td>
				</tr>
				<tr>
					<th>住居手当</th>
					<th>&nbsp;</th>
					<td>Z,ZZZ,ZZZ</td>
					<th>宿日直手当</th>
					<td class="bdR">Z,ZZZ,ZZZ</td>
					<th class="td01">160</th>
					<td class="bdR">Z,ZZZ,ZZZ</td>

					<th>&nbsp;</th>
					<th>健保</th>
					<td>Z,ZZZ,ZZZ</td>
					<th>&nbsp;</th>
					<th></th>
					<th>健保</th>
					<td>Z,ZZZ,ZZZ</td>
				</tr>
				<tr>
					<th>初任給調整</th>
					<th>&nbsp;</th>
					<td>Z,ZZZ,ZZZ</td>
					<th>　（内、非課税額）</th>
					<td class="bdR">Z,ZZZ,ZZZ</td>
					<th class="td01">175</th>
					<td class="bdR">Z,ZZZ,ZZZ</td>

					<th>&nbsp;</th>
					<th>介護</th>
					<td>Z,ZZZ,ZZZ</td>
					<th>&nbsp;</th>
					<td>&nbsp;</td>
					<th>介護</th>
					<td>Z,ZZZ,ZZZ</td>
				</tr>
				<tr>
					<th>単身赴任</th>
					<th>&nbsp;</th>
					<td>Z,ZZZ,ZZZ</td>
					<th>能率給/賃金</th>
					<td class="bdR">Z,ZZZ,ZZZ</td>
					<th class="td01">25</th>
					<td class="bdR">Z,ZZZ,ZZZ</td>

					<th>雇用保険</th>
					<th>&nbsp;</th>
					<td>Z,ZZZ,ZZZ</td>
					<th>期末</th>
					<th>雇用保険</th>
					<th></th>
					<td>Z,ZZZ,ZZZ</td>
				</tr>
				<tr>
					<th>義務教育特別</th>
					<th>&nbsp;</th>
					<td>Z,ZZZ,ZZZ</td>
					<th>児童手当</th>
					<td class="bdR">Z,ZZZ,ZZZ</td>
					<th class="td01">前月25</th>
					<td class="bdR">Z,ZZZ,ZZZ</td>

					<th>区互助</th>
					<th>&nbsp;</th>
					<td>Z,ZZZ,ZZZ</td>
					<th>&nbsp;</th>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<th>通勤手当</th>
					<th>&nbsp;</th>
					<td>Z,ZZZ,ZZZ</td>
					<th>&nbsp;</th>
					<td class="bdR">&nbsp;</td>
					<th class="td01">50</th>
					<td class="bdR">Z,ZZZ,ZZZ</td>

					<th>区教互助</th>
					<th>&nbsp;</th>
					<td>Z,ZZZ,ZZZ</td>
					<th>&nbsp;</th>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<th>　（内、非課税額）</th>
					<th>&nbsp;</th>
					<td>Z,ZZZ,ZZZ</td>
					<th>期末手当</th>
					<td class="bdR">Z,ZZZ,ZZZ</td>
					<th class="td01">前月50</th>
					<td class="bdR">Z,ZZZ,ZZZ</td>

					<th>都教互助</th>
					<th>&nbsp;</th>
					<td>Z,ZZZ,ZZZ</td>
					<th>&nbsp;</th>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<th>&nbsp;</th>
					<th>&nbsp;</th>
					<td>&nbsp;</td>
					<th>勤勉手当</th>
					<td class="bdR">Z,ZZZ,ZZZ</td>
					<th class="td01">日単価</th>
					<td class="bdR">Z,ZZZ,ZZZ</td>

					<th>特互助</th>
					<th>&nbsp;</th>
					<td>Z,ZZZ,ZZZ</td>
					<th>&nbsp;</th>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				</tr>
<tr>
					<th>&nbsp;</th>
					<th>&nbsp;</th>
					<td>&nbsp;</td>
					<th>&nbsp;</th>
					<td class="bdR">&nbsp;</td>
					<th>&nbsp;</th>
					<td class="bdR">&nbsp;</td>

					<th>事業団</th>
					<th>&nbsp;</th>
					<td>Z,ZZZ,ZZZ</td>
					<th>&nbsp;</th>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				</tr>
			</table>
		</div><!-- //#tab01content -->

<!-- ============================== タブ02【日割情報】============================== -->
		<div id="tab02content" class="tabContent">
			<div class="wrap bdT_blue bdB_blue pd10">
				<table class="tbl02 mgR10 mgB10 mgL10 w40">
					<tr>
						<th class="bd_double th02">支給年月</th>
						<td class="bd_double">GGYY.MM</td>
						<th>月の要勤務日数</th>
						<td>ZZ日</td>
					</tr>
				</table>
<!-- ブロック1 -->
				<table class="tbl02 mgL10 w20">
					<tr>
						<th class="th02">発令年月日</th>
						<td>GGYY.MM.DD</td>
					</tr>
				</table>
				<div class="wrap pd10 mgR10 mgB10 mgL10 bd">
					<table class="tbl02">
						<tr>
							<th colspan="16">■基本情報</th>
						</tr>
						<tr>
							<th class="pdL20">職員区分</th>
							<td>XX</td>
							<td>NNNN</td>
							<th>給与体系</th>
							<td>XX</td>
							<td>NNNNNN</td>
							<th>所属</th>
							<td>XXXXXXXX</td>
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
					<table class="tbl02">
						<tr>
							<th colspan="14">■給料/報酬月額情報</th>
						</tr>
						<tr>
							<th class="pdL20">表級号</th>
							<td>XX</td>
							<td>NNNNNN</td>
							<td>XX-XXX</td>
							<td>NN</td>
							<td>Z,ZZZ,ZZZ円</td>
							<td><label><input type="checkbox" name="" value="">清掃加算対象</label></td>
							<th>現給保障</th>
							<td>NNN</td>
							<th>保障額表</th>
							<td>XX</td>
							<td>NNNNNN</td>
							<td>XX-XXX</td>
							<td>Z,ZZZ,ZZZ円</td>
						</tr>
					</table>
					<table class="tbl02">
						<tr>
							<th colspan="15">■勤務態様</th>
						</tr>
						<tr>
							<th class="pdL20">一日</th>
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
							<td>／</td>
							<td>ZZ月</td>
							<td><button type="button" name="" value="" class="btn01">単価</button></td>
						</tr>
					</table>
					<table class="tbl02">
						<tr>
							<th colspan="11">■勤怠情報/日割日数</th>
						</tr>
						<tr>
							<th class="pdL20">勤怠事由</th>
							<td>XXXX</td>
							<td>NNNNNN</td>
							<th>支給割合</th>
							<td>ZZZ％</td>
							<th>発令年月日</th>
							<td>GGYY.MM.DD</td>
							<th>日割日数</th>
							<td>ZZ</td>
							<td>／</td>
							<td>ZZ</td>
						</tr>
					</table>
					<table class="tbl02">
						<tr>
							<th colspan="12">■支出科目</th>
						</tr>
						<tr>
							<th class="pdL20">給料</th>
							<td class="td03">XXXXXXXXXXXX</td>
							<td class="td03">NNNNNNNNNN</td>
							<th>児童</th>
							<td class="td03">XXXXXXXXXXXX</td>
							<td class="td03">NNNNNNNNNN</td>
							<th>超勤</th>
							<td class="td03">XXXXXXXXXXXX</td>
							<td class="td03">NNNNNNNNNN</td>
							<th>休日給</th>
							<td class="td03">XXXXXXXXXXXX</td>
							<td class="td03">NNNNNNNNNN</td>
						</tr>
					</table>
				</div><!-- //.wrap -->
<!-- ブロック2 -->
				<table class="tbl02 mgL10 w20">
					<tr>
						<th class="th02">発令年月日</th>
						<td>GGYY.MM.DD</td>
					</tr>
				</table>
				<div class="wrap pd10 mgR10 mgB10 mgL10 bd">
					<table class="tbl02">
						<tr>
							<th colspan="16">■基本情報</th>
						</tr>
						<tr>
							<th class="pdL20">職員区分</th>
							<td>XX</td>
							<td>NNNN</td>
							<th>給与体系</th>
							<td>XX</td>
							<td>NNNNNN</td>
							<th>所属</th>
							<td>XXXXXXXX</td>
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
					<table class="tbl02">
						<tr>
							<th colspan="14">■給料/報酬月額情報</th>
						</tr>
						<tr>
							<th class="pdL20">表級号</th>
							<td>XX</td>
							<td>NNNNNN</td>
							<td>XX-XXX</td>
							<td>NN</td>
							<td>Z,ZZZ,ZZZ円</td>
							<td><label><input type="checkbox" name="" value="">清掃加算対象</label></td>
							<th>現給保障</th>
							<td>NNN</td>
							<th>保障額表</th>
							<td>XX</td>
							<td>NNNNNN</td>
							<td>XX-XXX</td>
							<td>Z,ZZZ,ZZZ円</td>
						</tr>
					</table>
					<table class="tbl02">
						<tr>
							<th colspan="15">■勤務態様</th>
						</tr>
						<tr>
							<th class="pdL20">一日</th>
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
							<td>／</td>
							<td>ZZ月</td>
							<td><button type="button" name="" value="" class="btn01">単価</button></td>
						</tr>
					</table>
					<table class="tbl02">
						<tr>
							<th colspan="11">■勤怠情報/日割日数</th>
						</tr>
						<tr>
							<th class="pdL20">勤怠事由</th>
							<td>XXXX</td>
							<td>NNNNNN</td>
							<th>支給割合</th>
							<td>ZZZ％</td>
							<th>発令年月日</th>
							<td>GGYY.MM.DD</td>
							<th>日割日数</th>
							<td>ZZ</td>
							<td>／</td>
							<td>ZZ</td>
						</tr>
					</table>
					<table class="tbl02">
						<tr>
							<th colspan="12">■支出科目</th>
						</tr>
						<tr>
							<th class="pdL20">給料</th>
							<td class="td03">XXXXXXXXXXXX</td>
							<td class="td03">NNNNNNNNNN</td>
							<th>児童</th>
							<td class="td03">XXXXXXXXXXXX</td>
							<td class="td03">NNNNNNNNNN</td>
							<th>超勤</th>
							<td class="td03">XXXXXXXXXXXX</td>
							<td class="td03">NNNNNNNNNN</td>
							<th>休日給</th>
							<td class="td03">XXXXXXXXXXXX</td>
							<td class="td03">NNNNNNNNNN</td>
						</tr>
					</table>
				</div><!-- //.wrap -->
			</div><!-- //.wrap -->
		</div><!-- //#tab02content -->

<!-- ============================== タブ03【詳細情報】============================== -->
		<div id="tab03content" class="tabContent">
			<div class="wrap bdT_blue bdB_blue">
				<table class="tbl03">
					<tr>
						<th colspan="6" class="th01 bdR bdB bg01">支給</th>
						<th colspan="3" class="th01 bdR bdB bg01">減額・手当停止</th>
						<th colspan="7" class="th01 bdB bg01">控除</th>
					</tr>
					<tr>
						<th colspan="6" class="bdR">■扶養手当</th>
						<th colspan="3" class="bdR">■減額</th>

						<th>■共済/社保</th>
						<td>X</td>
						<td>NNNN</td>
						<th>■雇用保険</th>
						<td>X</td>
						<td><p>NNNN</p></td>
						<th>■互助会/互助組合</th>
					</tr>
					<tr>
						<th class="th01">配偶者</th>
						<th class="th01">配欠</th>
						<th class="th01">一人目</th>
						<th class="th01">二人目</th>
						<th class="th01">三人以降</th>
						<th class="bdR th01">特定加算</th>

						<td>ZZZ時間</td>
						<td colspan="2" class="bdR">ZZ日</td>

						<th class="pdL20">介護該当</th>
						<td>X</td>
						<td>NNNN</td>
						<th class="pdL20">高齢免除</th>
						<td>X</td>
						<td>NNNN</td>
						<td class="td04 pdL20"><label><input type="checkbox" name="" value="">区互助</label></td>
					</tr>
					<tr>
						<td>X</td>
						<td>X</td>
						<td>X</td>
						<td>X</td>
						<td>X</td>
						<td class="bdR">X</td>

						<td colspan="3" class="bdR td04"><label><input type="checkbox" name="" value="">全欠勤</label></td>

						<td colspan="3" class="td04 pdL20"><label><input type="checkbox" name="" value="">部分休長期免除</label></td>
						<th class="th01">&nbsp;</th>
						<th class="th01">&nbsp;</th>
						<th class="th01">&nbsp;</th>
						<td class="td04 pdL20"><label><input type="checkbox" name="" value="">区教互助</label></td>
					</tr>
					<tr>
						<th colspan="3">■住居手当</th>
						<th colspan="3" class="bdR">■単身赴任</th>

						<th colspan="3" class="bdR">■手当停止</th>

						<td colspan="3">ZZZ時間</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td class="td04 pdL20"><label><input type="checkbox" name="" value="">都教互助</label></td>
					</tr>
					<tr>
						<td>XX</td>
						<td colspan="2" class="td04">NNNNNN</td>
						<td>XX</td>
						<td colspan="2" class="td04 bdR">NNNNNN</td>

						<th class="pdL20">通勤</th>
						<td>X</td>
						<td class="bdR">NN</td>

						<th colspan="3">■標準報酬</th>
						<th>&nbsp;</th>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td class="td04 pdL20"><label><input type="checkbox" name="" value="">特互助</label></td>
					</tr>
					<tr>
						<th colspan="2">■初任給調整</th>
						<td class="td04">XX</td>
						<th>■通勤手当</th>
						<td>X</td>
						<td class="td04 bdR">NNNNNN</td>

						<th class="pdL20">管理職</th>
						<td>X</td>
						<td class="bdR">NN</td>

						<th class="th01">等級</th>
						<td>XX</td>
						<td>（XX）</td>
						<th class="th01">&nbsp;</th>
						<th class="th01">&nbsp;</th>
						<th class="th01">&nbsp;</th>
						<td class="td04 pdL20"><label><input type="checkbox" name="" value="">事業団</label></td>
					</tr>
					<tr>
						<th colspan="2">■単価算入特勤</th>
						<td>&nbsp;</td>
						<th>&nbsp;</th>
						<td>&nbsp;</td>
						<th class="bdR">&nbsp;</th>

						<th>&nbsp;</th>
						<th>&nbsp;</th>
						<th class="bdR">&nbsp;</th>

						<th class="th01">月額</th>
						<td colspan="2">Z,ZZZ,ZZZ</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<th class="pdL20">特勤</th>
						<td>XXXX</td>
						<td>NNNNNN</td>
						<th>&nbsp;</th>
						<td>&nbsp;</td>
						<th class="bdR">&nbsp;</th>

						<th>&nbsp;</th>
						<th>&nbsp;</th>
						<th class="bdR">&nbsp;</th>

						<th class="th01">適用</th>
						<td colspan="2">GGYY.MM</td>
						<th>&nbsp;</th>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<th class="pdL20">算入方法</th>
						<td>X</td>
						<td>NNNNNN</td>
						<th>&nbsp;</th>
						<td>&nbsp;</td>
						<th class="bdR">&nbsp;</th>

						<th>&nbsp;</th>
						<th>&nbsp;</th>
						<th class="bdR">&nbsp;</th>

						<th>&nbsp;</th>
						<th>&nbsp;</th>
						<td>&nbsp;</td>
						<td class="td04"></td>
						<td class="td04"></td>
						<td class="td04"></td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<th class="pdL20">一日あたり日数</th>
						<td>ZZ日</tdh>
						<td>&nbsp;</td>
						<th>&nbsp;</th>
						<td>&nbsp;</td>
						<th class="bdR">&nbsp;</th>

						<th>&nbsp;</th>
						<th>&nbsp;</th>
						<th class="bdR">&nbsp;</th>

						<th>&nbsp;</th>
						<th>&nbsp;</th>
						<td>&nbsp;</td>
						<td class="td04"></td>
						<td class="td04"></td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<th class="pdL20">&nbsp;</th>
						<td>&nbsp;</tdh>
						<td>&nbsp;</td>
						<th>&nbsp;</th>
						<td>&nbsp;</td>
						<th class="bdR">&nbsp;</th>

						<th>&nbsp;</th>
						<th>&nbsp;</th>
						<th class="bdR">&nbsp;</th>

						<th>&nbsp;</th>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<th class="pdL20">&nbsp;</th>
						<td>&nbsp;</tdh>
						<td>&nbsp;</td>
						<th>&nbsp;</th>
						<td>&nbsp;</td>
						<th class="bdR">&nbsp;</th>

						<th>&nbsp;</th>
						<th>&nbsp;</th>
						<th class="bdR">&nbsp;</th>

						<th class="pdL20">&nbsp;</th>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
				</table>
			</div><!-- //.wrap -->
		</div><!-- //#tab03content -->

<!-- ============================== タブ04【期末勤勉詳細】============================== -->
		<div id="tab04content" class="tabContent">
			<div class="wrap bdT_blue bdB_blue">
				<table class="tbl04">
					<tr>
						<th colspan="4" class="th01 bdB bdR bg01">期末手当</th>
						<th colspan="5" class="th01 bdB bdR bg01">勤勉手当</th>
						<th colspan="5" class="th01 bdB bg01">所要の調整</th>
					</tr>
					<tr>
						<th>■基礎額</th>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<th class="bdR">■支給月数</th>
						<th>■基礎額</th>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<th>■支給月数</th>
						<td class="bdR">&nbsp;</td>
						<th>■改定率</th>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<th class="pdL20">《一律分》</th>
						<th>給料</th>
						<td>Z,ZZZ,ZZZ</td>
						<td class="pdL20 bdR">Z.ZZZZZZ月</td>
						<th class="pdL20">《一律分》</th>
						<th>給料</th>
						<td>Z,ZZZ,ZZZ</td>
						<td class="pdL20">Z.ZZZZZZ月</td>
						<td class="bdR">&nbsp;</td>
						<td class="pdL20">Z.ZZZZ％</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<th>扶養</th>
						<td>Z,ZZZ,ZZZ</td>
						<th class="bdR">■支給割合</th>
						<td>&nbsp;</td>
						<th>扶養</th>
						<td>Z,ZZZ,ZZZ</td>
						<th>■支給割合</th>
						<td class="bdR">&nbsp;</td>
						<th>■調整月数</th>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<th>地域</th>
						<td>Z,ZZZ,ZZZ</td>
						<td class="pdL20 bdR">ZZZ％</td>
						<td>&nbsp;</td>
						<th>地域</th>
						<td>Z,ZZZ,ZZZ</td>
						<td class="pdL20">ZZZ％</td>
						<td class="bdR">&nbsp;</td>
						<td class="pdL20">ZZ月</td>
						<td>（減じる月数</td>
						<td>ZZ月）</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<th>合計</th>
						<td>Z,ZZZ,ZZZ</td>
						<td class="bdR pdL20"><label><input type="checkbox" name="" value="">
						支給対象外
						</label></td>
						<td>&nbsp;</td>
						<th>合計</th>
						<td>Z,ZZZ,ZZZ</td>
						<td class="pdL20"><label><input type="checkbox" name="" value="">
						支給対象外
						</label></td>
						<td class="bdR">&nbsp;</td>
						<th>■調整額</th>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<th>■調整実施</th>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<th class="pdL20">《職務級加算》</th>
						<th>加算率</th>
						<td>ZZ％</td>
						<td class="bdR">&nbsp;</td>
						<th class="pdL20">《職務級加算》</th>
						<th>加算率</th>
						<td>ZZ％</td>
						<th>■成績率</th>
						<td class="bdR">&nbsp;</td>
						<th class="pdL20">例月分</th>
						<td>Z,ZZZ,ZZZ</td>
						<td>&nbsp;</td>
						<td>◎期末手当</td>
						<td>◎勤勉手当</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<th>金額</th>
						<td>Z,ZZZ,ZZZ</td>
						<td class="bdR">&nbsp;</td>
						<td>&nbsp;</td>
						<th>金額</th>
						<td>Z,ZZZ,ZZZ</td>
						<td class="pdL20">XX</td>
						<td class="bdR">NNNNNN</td>
						<th class="pdL20">3月期末勤勉</th>
						<td>Z,ZZZ,ZZZ</td>
						<td>&nbsp;</td>
						<th>調整前手当額</th>
						<td>Z,ZZZ,ZZZ</td>
					</tr>
					<tr>
						<th class="pdL20">《管理職加算》</th>
						<th>加算率</th>
						<td>ZZ％</td>
						<td class="bdR">&nbsp;</td>
						<th class="pdL20">《管理職加算》</th>
						<th>加算率</th>
						<td>ZZ％</td>
						<td class="pdL20">XX</td>
						<td class="bdR">NNNNNN</td>
						<th class="pdL20">6月期末勤勉</th>
						<td>Z,ZZZ,ZZZ</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<th>金額</th>
						<td>Z,ZZZ,ZZZ</td>
						<td class="bdR">&nbsp;</td>
						<td>&nbsp;</td>
						<th>金額</th>
						<td>Z,ZZZ,ZZZ</td>
						<th>■減額率</th>
						<td class="bdR">&nbsp;</td>
						<th class="pdL20">12月期末勤勉</th>
						<td>Z,ZZZ,ZZZ</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<th class="pdL20">《合計》</th>
						<td>&nbsp;</td>
						<td>Z,ZZZ,ZZZ</td>
						<td class="bdR">&nbsp;</td>
						<th class="pdL20">《合計》</th>
						<td>&nbsp;</td>
						<td>Z,ZZZ,ZZZ</td>
						<td class="pdL20">ZZZ％</td>
						<td class="bdR">&nbsp;</td>
						<th class="pdL20">合計</th>
						<td>Z,ZZZ,ZZZ</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
				</table>
			</div><!-- //.wrap -->
		</div><!-- //#tab04content -->

<!-- ============================== タブ05【期末勤勉詳細】============================== -->
		<div id="tab05content" class="tabContent">
			<div class="wrap bdT_blue bdB_blue ">
				<div class="wrap dsp_tbl">
<!-- 表（左） -->
					<div class="dsp_tbl_cell_9">
<!-- ↓■超過勤務手当 -->
						<div class="y_data_area">
<!-- ↓タイトル -->
							<table class="y_data_title tbl02 w05">
								<col style="width: 68%;">
								<col style="width: 32%;">
								<tr>
									<th colspan="2">■超過勤務手当</th>
								</tr>
								<tr>
									<th colspan="2">《時間数合計》</th>
								</tr>
							</table>
<!-- //タイトル -->
							<table class="y_data tbl02">
								<col style="width: 68%;">
								<col style="width: 32%;">
								<tr>
									<td><p title="125">125</p></td>
									<td><p title="ZZZ">ZZZ</p></td>
								</tr>
								<tr>
									<td><p title="150">150</p></td>
									<td><p title="ZZZ">ZZZ</p></td>
								</tr>
								<tr>
									<td><p title="135">135</p></td>
									<td><p title="ZZZ">ZZZ</p></td>
								</tr>
								<tr>
									<td><p title="160">160</p></td>
									<td><p title="ZZZ">ZZZ</p></td>
								</tr>
								<tr>
									<td><p title="100">100</p></td>
									<td><p title="ZZZ">ZZZ</p></td>
								</tr>
								<tr>
									<td><p title="25">25</p></td>
									<td><p title="ZZZ">ZZZ</p></td>
								</tr>
								<tr>
									<td><p title="前月25">前月25</p></td>
									<td><p title="ZZZ">ZZZ</p></td>
								</tr>
								<tr>
									<td><p title="割増150">割増150</p></td>
									<td><p title="ZZZ">ZZZ</p></td>
								</tr>
								<tr>
									<td><p title="割増175">割増175</p></td>
									<td><p title="ZZZ">ZZZ</p></td>
								</tr>
								<tr>
									<td><p title="割増50">割増50</p></td>
									<td><p title="ZZZ">ZZZ</p></td>
								</tr>
								<tr>
									<td><p title="割増前50">割増前50</p></td>
									<td><p title="ZZZ">ZZZ</p></td>
								</tr>
							</table>
						</div>
					</div>
<!-- 表（左） -->
					<div class="dsp_tbl_cell_35">
<!-- ↓■超過勤務手当 -->
						<div class="y_data_area">
<!-- ↓タイトル -->
							<table class="y_data_title tbl02 w05">
								<col style="width: 8.0%;">
								<col style="width: 21.0%;">
								<col style="width: 18.0%;">
								<col style="width: 8.0%;">
								<col style="width: 13.0%;">
								<tr>
									<td colspan="5">&nbsp;</td>
								</tr>
								<tr>
									<th colspan="5">《内訳》</th>
								</tr>
								<tr>
									<th>コード</th>
									<th>科目コード</th>
									<th>科目名称</th>
									<th>時間数</th>
									<th>支給額</th>
								</tr>
							</table>
<!-- //タイトル -->
<!-- ↓内訳 -->
							<div class="y_scroll_box h01">
								<div class="y_hidden">
									<table class="y_data tbl02">
										<col style="width: 8.0%;">
										<col style="width: 21.0%;">
										<col style="width: 18.0%;">
										<col style="width: 6.0%;">
										<col style="width: 13.0%;">
										<tr>
											<td><p title="XXXX">XXXX</p></td>
											<td><p title="XXXXXXXXXXXX">XXXXXXXXXXXX</p></td>
											<td><p title="NNNNNNNNNN">NNNNNNNNNN</p></td>
											<td><p title="ZZZ">ZZZ</p></td>
											<td><p title="Z,ZZZ,ZZZ">Z,ZZZ,ZZZ</p></td>
										</tr>
										<tr>
											<td><p title="XXXX">XXXX</p></td>
											<td><p title="XXXXXXXXXXXX">XXXXXXXXXXXX</p></td>
											<td><p title="NNNNNNNNNN">NNNNNNNNNN</p></td>
											<td><p title="ZZZ">ZZZ</p></td>
											<td><p title="Z,ZZZ,ZZZ">Z,ZZZ,ZZZ</p></td>
										</tr>
										<tr>
											<td><p title="XXXX">XXXX</p></td>
											<td><p title="XXXXXXXXXXXX">XXXXXXXXXXXX</p></td>
											<td><p title="NNNNNNNNNN">NNNNNNNNNN</p></td>
											<td><p title="ZZZ">ZZZ</p></td>
											<td><p title="Z,ZZZ,ZZZ">Z,ZZZ,ZZZ</p></td>
										</tr>
										<tr>
											<td><p title="XXXX">XXXX</p></td>
											<td><p title="XXXXXXXXXXXX">XXXXXXXXXXXX</p></td>
											<td><p title="NNNNNNNNNN">NNNNNNNNNN</p></td>
											<td><p title="ZZZ">ZZZ</p></td>
											<td><p title="Z,ZZZ,ZZZ">Z,ZZZ,ZZZ</p></td>
										</tr>
										<tr>
											<td><p title="XXXX">XXXX</p></td>
											<td><p title="XXXXXXXXXXXX">XXXXXXXXXXXX</p></td>
											<td><p title="NNNNNNNNNN">NNNNNNNNNN</p></td>
											<td><p title="ZZZ">ZZZ</p></td>
											<td><p title="Z,ZZZ,ZZZ">Z,ZZZ,ZZZ</p></td>
										</tr>
										<tr>
											<td><p title="XXXX">XXXX</p></td>
											<td><p title="XXXXXXXXXXXX">XXXXXXXXXXXX</p></td>
											<td><p title="NNNNNNNNNN">NNNNNNNNNN</p></td>
											<td><p title="ZZZ">ZZZ</p></td>
											<td><p title="Z,ZZZ,ZZZ">Z,ZZZ,ZZZ</p></td>
										</tr>
										<tr>
											<td><p title="XXXX">XXXX</p></td>
											<td><p title="XXXXXXXXXXXX">XXXXXXXXXXXX</p></td>
											<td><p title="NNNNNNNNNN">NNNNNNNNNN</p></td>
											<td><p title="ZZZ">ZZZ</p></td>
											<td><p title="Z,ZZZ,ZZZ">Z,ZZZ,ZZZ</p></td>
										</tr>
										<tr>
											<td><p title="XXXX">XXXX</p></td>
											<td><p title="XXXXXXXXXXXX">XXXXXXXXXXXX</p></td>
											<td><p title="NNNNNNNNNN">NNNNNNNNNN</p></td>
											<td><p title="ZZZ">ZZZ</p></td>
											<td><p title="Z,ZZZ,ZZZ">Z,ZZZ,ZZZ</p></td>
										</tr>
										<tr>
											<td><p title="XXXX">XXXX</p></td>
											<td><p title="XXXXXXXXXXXX">XXXXXXXXXXXX</p></td>
											<td><p title="NNNNNNNNNN">NNNNNNNNNN</p></td>
											<td><p title="ZZZ">ZZZ</p></td>
											<td><p title="Z,ZZZ,ZZZ">Z,ZZZ,ZZZ</p></td>
										</tr>
									</table>
								</div>
							</div><!-- //内訳 -->
						</div><!-- //↑■超過勤務手当 -->
					</div><!-- //↑表（左） -->
<!-- 表（右） -->
					<div class="dsp_tbl_cell_9">
<!-- ↓■休日給 -->
						<div class="y_data_area">
<!-- ↓タイトル -->
							<table class="y_data_title tbl04 w05">
								<col style="width: 100.0%;">
								<tr>
									<th>■休日給</th>
								</tr>
								<tr>
									<th>《時間数合計》</th>
								</tr>
								<tr>
									<td><p title="ZZZ">ZZZ</p></td>
								</tr>
								<tr>
									<td><p>&nbsp;</p></td>
								</tr>
								<tr>
									<td><p>&nbsp;</p></td>
								</tr>
								<tr>
									<td><p>&nbsp;</p></td>
								</tr>
								<tr>
									<td><p>&nbsp;</p></td>
								</tr>
							</table><!-- //タイトル -->
						</div>
<!-- ↓タイトル -->
						<table class="y_data_title tbl04 w05">
							<col style="width: 100.0%;">
							<tr>
								<th>■夜勤手当</th>
							</tr>
							<tr>
								<th>《時間数合計》</th>
							</tr>
							<tr>
								<td><p title="ZZZ">ZZZ</p></td>
							</tr>
						</table><!-- //タイトル -->
					</div>
<!-- 表（右） -->
					<div class="dsp_tbl_cell_35">
<!-- ↓■休日給 -->
						<div class="y_data_area">
<!-- ↓タイトル -->
							<table class="y_data_title tbl04 w05">
								<col style="width: 8.0%;">
								<col style="width: 21.0%;">
								<col style="width: 18.0%;">
								<col style="width: 8.0%;">
								<col style="width: 13.0%;">
								<tr>
									<th colspan="5">&nbsp;</th>
								</tr>
								<tr>
									<th colspan="5">《内訳》</th>
								</tr>
								<tr>
									<th>コード</th>
									<th>科目コード</th>
									<th>科目名称</th>
									<th>時間数</th>
									<th>支給額</th>
								</tr>
							</table>
<!-- //タイトル -->
<!-- ↓内訳 -->
							<div class="y_scroll_box h01 max_h02">
								<div class="y_hidden">
									<table class="y_data tbl04">
										<col style="width: 8.0%;">
										<col style="width: 21.0%;">
										<col style="width: 18.0%;">
										<col style="width: 8.0%;">
										<col style="width: 13.0%;">
										<tr>
											<td><p title="XXXX">XXXX</p></td>
											<td><p title="XXXXXXXXXXXX">XXXXXXXXXXXX</p></td>
											<td><p title="NNNNNNNNNN">NNNNNNNNNN</p></td>
											<td><p title="ZZZ">ZZZ</p></td>
											<td><p title="Z,ZZZ,ZZZ">Z,ZZZ,ZZZ</p></td>
										</tr>
										<tr>
											<td><p title="XXXX">XXXX</p></td>
											<td><p title="XXXXXXXXXXXX">XXXXXXXXXXXX</p></td>
											<td><p title="NNNNNNNNNN">NNNNNNNNNN</p></td>
											<td><p title="ZZZ">ZZZ</p></td>
											<td><p title="Z,ZZZ,ZZZ">Z,ZZZ,ZZZ</p></td>
										</tr>
										<tr>
											<td><p title="XXXX">XXXX</p></td>
											<td><p title="XXXXXXXXXXXX">XXXXXXXXXXXX</p></td>
											<td><p title="NNNNNNNNNN">NNNNNNNNNN</p></td>
											<td><p title="ZZZ">ZZZ</p></td>
											<td><p title="Z,ZZZ,ZZZ">Z,ZZZ,ZZZ</p></td>
										</tr>
										<tr>
											<td><p title="XXXX">XXXX</p></td>
											<td><p title="XXXXXXXXXXXX">XXXXXXXXXXXX</p></td>
											<td><p title="NNNNNNNNNN">NNNNNNNNNN</p></td>
											<td><p title="ZZZ">ZZZ</p></td>
											<td><p title="Z,ZZZ,ZZZ">Z,ZZZ,ZZZ</p></td>
										</tr>
									</table>
								</div>
							</div><!-- //内訳 -->
						</div>
						<div class="y_data_area">
<!-- ↓タイトル -->
							<table class="y_data_title tbl04 w05">
								<col style="width: 8.0%;">
								<col style="width: 21.0%;">
								<col style="width: 18.0%;">
								<col style="width: 8.0%;">
								<col style="width: 13.0%;">
								<tr>
									<th colspan="5">&nbsp;</th>
								</tr>
								<tr>
									<th colspan="5">《内訳》</th>
								</tr>
								<tr>
									<th>コード</th>
									<th>科目コード</th>
									<th>科目名称</th>
									<th>時間数</th>
									<th>支給額</th>
								</tr>
							</table>
<!-- ↓内訳 -->
							<div class="y_scroll_box h01 max_h02">
								<div class="y_hidden">
									<table class="y_data tbl04">
										<col style="width: 8.0%;">
										<col style="width: 21.0%;">
										<col style="width: 18.0%;">
										<col style="width: 8.0%;">
										<col style="width: 13.0%;">
										<tr>
											<td><p title="XXXX">XXXX</p></td>
											<td><p title="XXXXXXXXXXXX">XXXXXXXXXXXX</p></td>
											<td><p title="NNNNNNNNNN">NNNNNNNNNN</p></td>
											<td><p title="ZZZ">ZZZ</p></td>
											<td><p title="Z,ZZZ,ZZZ">Z,ZZZ,ZZZ</p></td>
										</tr>
										<tr>
											<td><p title="XXXX">XXXX</p></td>
											<td><p title="XXXXXXXXXXXX">XXXXXXXXXXXX</p></td>
											<td><p title="NNNNNNNNNN">NNNNNNNNNN</p></td>
											<td><p title="ZZZ">ZZZ</p></td>
											<td><p title="Z,ZZZ,ZZZ">Z,ZZZ,ZZZ</p></td>
										</tr>
										<tr>
											<td><p title="XXXX">XXXX</p></td>
											<td><p title="XXXXXXXXXXXX">XXXXXXXXXXXX</p></td>
											<td><p title="NNNNNNNNNN">NNNNNNNNNN</p></td>
											<td><p title="ZZZ">ZZZ</p></td>
											<td><p title="Z,ZZZ,ZZZ">Z,ZZZ,ZZZ</p></td>
										</tr>
										<tr>
											<td><p title="XXXX">XXXX</p></td>
											<td><p title="XXXXXXXXXXXX">XXXXXXXXXXXX</p></td>
											<td><p title="NNNNNNNNNN">NNNNNNNNNN</p></td>
											<td><p title="ZZZ">ZZZ</p></td>
											<td><p title="Z,ZZZ,ZZZ">Z,ZZZ,ZZZ</p></td>
										</tr>
									</table>
								</div>
							</div><!-- //内訳 -->
						</div><!-- //↑■夜勤手当 -->
					</div><!-- //↑表（右） -->
				</div><!-- //.wrap -->
			</div><!-- //.wrap -->
		</div><!-- //#tab05content -->

<!-- ============================== タブ06【特勤・宿日直・管特】============================== -->
		<div id="tab06content" class="tabContent">
			<div class="wrap bdT_blue bdB_blue">
<!-- ↓■特殊勤務手当 -->
				<div class="y_data_area">
<!-- ↓タイトル -->
					<table class="y_data_title w06">
						<col style="width: 7%;">
						<col style="width: 7%;">
						<col style="width: 7%;">
						<col style="width: 7%;">
						<col style="width: 7%;">
						<col style="width: 7%;">
						<col style="width: 7%;">
						<col style="width: 7%;">
						<col style="width: 7%;">
						<col style="width: 7%;">
						<col style="width: 7%;">
						<col style="width: 7%;">
						<col style="width: 7%;">
						<col style="width: 7%;">
						<tr>
							<th>■特殊勤務手当</th>
							<th>コード</th>
							<th>名称</th>
							<th>科目コード</th>
							<th>科目名称</th>
							<th>回数</th>
							<th>支給額</th>
							<th>&nbsp;</th>
							<th>コード</th>
							<th>名称</th>
							<th>科目コード</th>
							<th>科目名称</th>
							<th>回数</th>
							<th>支給額</th>
						</tr>
					</table><!-- //タイトル -->
<!-- ↓内訳 -->
					<div class="y_scroll_box w06 max_h02">
						<div class="y_hidden">
							<table class="y_data w06">
								<col style="width: 7%;">
								<col style="width: 7%;">
								<col style="width: 7%;">
								<col style="width: 7%;">
								<col style="width: 7%;">
								<col style="width: 7%;">
								<col style="width: 7%;">
								<col style="width: 7%;">
								<col style="width: 7%;">
								<col style="width: 7%;">
								<col style="width: 7%;">
								<col style="width: 7%;">
								<col style="width: 7%;">
								<col style="width: 7%;">
								<tr>
									<td><p title="">&nbsp;</p></td>
									<td><p title="XXXX">XXXX</p></td>
									<td><p title="NNNNNNNN">NNNNNNNN</p></td>
									<td><p title="XXXXXXXXXXXX">XXXXXXXXXXXX</p></td>
									<td><p title="NNNNNNNNNN">NNNNNNNNNN</p></td>
									<td><p title="ZZZ">ZZZ</p></td>
									<td><p title="ZZZ,ZZZ">ZZZ,ZZZ</p></td>
									<td><p title="">&nbsp;</p></td>
									<td><p title="XXXX">XXXX</p></td>
									<td><p title="NNNNNNNN">NNNNNNNN</p></td>
									<td><p title="XXXXXXXXXXXX">XXXXXXXXXXXX</p></td>
									<td><p title="NNNNNNNNNN">NNNNNNNNNN</p></td>
									<td><p title="ZZZ">ZZZ</p></td>
									<td><p title="ZZZ,ZZZ">ZZZ,ZZZ</p></td>
								</tr>
								<tr>
									<td><p title="">&nbsp;</p></td>
									<td><p title="XXXX">XXXX</p></td>
									<td><p title="NNNNNNNN">NNNNNNNN</p></td>
									<td><p title="XXXXXXXXXXXX">XXXXXXXXXXXX</p></td>
									<td><p title="NNNNNNNNNN">NNNNNNNNNN</p></td>
									<td><p title="ZZZ">ZZZ</p></td>
									<td><p title="ZZZ,ZZZ">ZZZ,ZZZ</p></td>
									<td><p title="">&nbsp;</p></td>
									<td><p title="XXXX">XXXX</p></td>
									<td><p title="NNNNNNNN">NNNNNNNN</p></td>
									<td><p title="XXXXXXXXXXXX">XXXXXXXXXXXX</p></td>
									<td><p title="NNNNNNNNNN">NNNNNNNNNN</p></td>
									<td><p title="ZZZ">ZZZ</p></td>
									<td><p title="ZZZ,ZZZ">ZZZ,ZZZ</p></td>
								</tr>
								<tr>
									<td><p title="">&nbsp;</p></td>
									<td><p title="XXXX">XXXX</p></td>
									<td><p title="NNNNNNNN">NNNNNNNN</p></td>
									<td><p title="XXXXXXXXXXXX">XXXXXXXXXXXX</p></td>
									<td><p title="NNNNNNNNNN">NNNNNNNNNN</p></td>
									<td><p title="ZZZ">ZZZ</p></td>
									<td><p title="ZZZ,ZZZ">ZZZ,ZZZ</p></td>
									<td><p title="">&nbsp;</p></td>
									<td><p title="XXXX">XXXX</p></td>
									<td><p title="NNNNNNNN">NNNNNNNN</p></td>
									<td><p title="XXXXXXXXXXXX">XXXXXXXXXXXX</p></td>
									<td><p title="NNNNNNNNNN">NNNNNNNNNN</p></td>
									<td><p title="ZZZ">ZZZ</p></td>
									<td><p title="ZZZ,ZZZ">ZZZ,ZZZ</p></td>
								</tr>
							</table>
						</div>
					</div><!-- //内訳 -->
				</div><!-- //↑■特殊勤務手当 -->

<!-- ↓■宿日直手当 -->
				<div class="y_data_area">
<!-- ↓タイトル -->
					<table class="y_data_title w06">
						<col style="width: 7%;">
						<col style="width: 7%;">
						<col style="width: 7%;">
						<col style="width: 7%;">
						<col style="width: 7%;">
						<col style="width: 7%;">
						<col style="width: 7%;">
						<col style="width: 7%;">
						<col style="width: 7%;">
						<col style="width: 7%;">
						<col style="width: 7%;">
						<col style="width: 7%;">
						<col style="width: 7%;">
						<col style="width: 7%;">
						<tr>
							<th>■宿日直手当</th>
							<th>コード</th>
							<th>名称</th>
							<th>科目コード</th>
							<th>科目名称</th>
							<th>回数</th>
							<th>支給額</th>
							<th>&nbsp;</th>
							<th>コード</th>
							<th>名称</th>
							<th>科目コード</th>
							<th>科目名称</th>
							<th>回数</th>
							<th>支給額</th>
						</tr>
					</table><!-- //タイトル -->
<!-- ↓内訳 -->
					<div class="y_scroll_box w06 max_h02">
						<div class="y_hidden">
							<table class="y_data w06">
								<col style="width: 7%;">
								<col style="width: 7%;">
								<col style="width: 7%;">
								<col style="width: 7%;">
								<col style="width: 7%;">
								<col style="width: 7%;">
								<col style="width: 7%;">
								<col style="width: 7%;">
								<col style="width: 7%;">
								<col style="width: 7%;">
								<col style="width: 7%;">
								<col style="width: 7%;">
								<col style="width: 7%;">
								<col style="width: 7%;">
								<tr>
									<td><p title="">&nbsp;</p></td>
									<td><p title="XXXX">XXXX</p></td>
									<td><p title="NNNNNNNN">NNNNNNNN</p></td>
									<td><p title="XXXXXXXXXXXX">XXXXXXXXXXXX</p></td>
									<td><p title="NNNNNNNNNN">NNNNNNNNNN</p></td>
									<td><p title="ZZZ">ZZZ</p></td>
									<td><p title="ZZZ,ZZZ">ZZZ,ZZZ</p></td>
									<td><p title="">&nbsp;</p></td>
									<td><p title="XXXX">XXXX</p></td>
									<td><p title="NNNNNNNN">NNNNNNNN</p></td>
									<td><p title="XXXXXXXXXXXX">XXXXXXXXXXXX</p></td>
									<td><p title="NNNNNNNNNN">NNNNNNNNNN</p></td>
									<td><p title="ZZZ">ZZZ</p></td>
									<td><p title="ZZZ,ZZZ">ZZZ,ZZZ</p></td>
								</tr>
								<tr>
									<td><p title="">&nbsp;</p></td>
									<td><p title="XXXX">XXXX</p></td>
									<td><p title="NNNNNNNN">NNNNNNNN</p></td>
									<td><p title="XXXXXXXXXXXX">XXXXXXXXXXXX</p></td>
									<td><p title="NNNNNNNNNN">NNNNNNNNNN</p></td>
									<td><p title="ZZZ">ZZZ</p></td>
									<td><p title="ZZZ,ZZZ">ZZZ,ZZZ</p></td>
									<td><p title="">&nbsp;</p></td>
									<td><p title="XXXX">XXXX</p></td>
									<td><p title="NNNNNNNN">NNNNNNNN</p></td>
									<td><p title="XXXXXXXXXXXX">XXXXXXXXXXXX</p></td>
									<td><p title="NNNNNNNNNN">NNNNNNNNNN</p></td>
									<td><p title="ZZZ">ZZZ</p></td>
									<td><p title="ZZZ,ZZZ">ZZZ,ZZZ</p></td>
								</tr>
								<tr>
									<td><p title="">&nbsp;</p></td>
									<td><p title="XXXX">XXXX</p></td>
									<td><p title="NNNNNNNN">NNNNNNNN</p></td>
									<td><p title="XXXXXXXXXXXX">XXXXXXXXXXXX</p></td>
									<td><p title="NNNNNNNNNN">NNNNNNNNNN</p></td>
									<td><p title="ZZZ">ZZZ</p></td>
									<td><p title="ZZZ,ZZZ">ZZZ,ZZZ</p></td>
									<td><p title="">&nbsp;</p></td>
									<td><p title="XXXX">XXXX</p></td>
									<td><p title="NNNNNNNN">NNNNNNNN</p></td>
									<td><p title="XXXXXXXXXXXX">XXXXXXXXXXXX</p></td>
									<td><p title="NNNNNNNNNN">NNNNNNNNNN</p></td>
									<td><p title="ZZZ">ZZZ</p></td>
									<td><p title="ZZZ,ZZZ">ZZZ,ZZZ</p></td>
								</tr>
							</table>
						</div>
					</div><!-- //内訳 -->
				</div><!-- //↑■宿日直手当 -->

<!-- ↓■管理職特勤 -->
				<div class="y_data_area">
<!-- ↓タイトル -->
					<table class="y_data_title w06">
						<col style="width: 7%;">
						<col style="width: 7%;">
						<col style="width: 7%;">
						<col style="width: 7%;">
						<col style="width: 7%;">
						<col style="width: 7%;">
						<col style="width: 7%;">
						<col style="width: 7%;">
						<col style="width: 7%;">
						<col style="width: 7%;">
						<col style="width: 7%;">
						<col style="width: 7%;">
						<col style="width: 7%;">
						<col style="width: 7%;">
						<tr>
							<th>■管理職特勤</th>
							<th>コード</th>
							<th>名称</th>
							<th>科目コード</th>
							<th>科目名称</th>
							<th>回数</th>
							<th>支給額</th>
							<th>&nbsp;</th>
							<th>コード</th>
							<th>名称</th>
							<th>科目コード</th>
							<th>科目名称</th>
							<th>回数</th>
							<th>支給額</th>
						</tr>
					</table><!-- //タイトル -->
<!-- ↓内訳 -->
					<div class="y_scroll_box w06 max_h02">
						<div class="y_hidden">
							<table class="y_data w06">
								<col style="width: 7%;">
								<col style="width: 7%;">
								<col style="width: 7%;">
								<col style="width: 7%;">
								<col style="width: 7%;">
								<col style="width: 7%;">
								<col style="width: 7%;">
								<col style="width: 7%;">
								<col style="width: 7%;">
								<col style="width: 7%;">
								<col style="width: 7%;">
								<col style="width: 7%;">
								<col style="width: 7%;">
								<col style="width: 7%;">
								<tr>
									<td><p title="">&nbsp;</p></td>
									<td><p title="XXXX">XXXX</p></td>
									<td><p title="NNNNNNNN">NNNNNNNN</p></td>
									<td><p title="XXXXXXXXXXXX">XXXXXXXXXXXX</p></td>
									<td><p title="NNNNNNNNNN">NNNNNNNNNN</p></td>
									<td><p title="ZZZ">ZZZ</p></td>
									<td><p title="ZZZ,ZZZ">ZZZ,ZZZ</p></td>
									<td><p title="">&nbsp;</p></td>
									<td><p title="XXXX">XXXX</p></td>
									<td><p title="NNNNNNNN">NNNNNNNN</p></td>
									<td><p title="XXXXXXXXXXXX">XXXXXXXXXXXX</p></td>
									<td><p title="NNNNNNNNNN">NNNNNNNNNN</p></td>
									<td><p title="ZZZ">ZZZ</p></td>
									<td><p title="ZZZ,ZZZ">ZZZ,ZZZ</p></td>
								</tr>
								<tr>
									<td><p title="">&nbsp;</p></td>
									<td><p title="XXXX">XXXX</p></td>
									<td><p title="NNNNNNNN">NNNNNNNN</p></td>
									<td><p title="XXXXXXXXXXXX">XXXXXXXXXXXX</p></td>
									<td><p title="NNNNNNNNNN">NNNNNNNNNN</p></td>
									<td><p title="ZZZ">ZZZ</p></td>
									<td><p title="ZZZ,ZZZ">ZZZ,ZZZ</p></td>
									<td><p title="">&nbsp;</p></td>
									<td><p title="XXXX">XXXX</p></td>
									<td><p title="NNNNNNNN">NNNNNNNN</p></td>
									<td><p title="XXXXXXXXXXXX">XXXXXXXXXXXX</p></td>
									<td><p title="NNNNNNNNNN">NNNNNNNNNN</p></td>
									<td><p title="ZZZ">ZZZ</p></td>
									<td><p title="ZZZ,ZZZ">ZZZ,ZZZ</p></td>
								</tr>
								<tr>
									<td><p title="">&nbsp;</p></td>
									<td><p title="XXXX">XXXX</p></td>
									<td><p title="NNNNNNNN">NNNNNNNN</p></td>
									<td><p title="XXXXXXXXXXXX">XXXXXXXXXXXX</p></td>
									<td><p title="NNNNNNNNNN">NNNNNNNNNN</p></td>
									<td><p title="ZZZ">ZZZ</p></td>
									<td><p title="ZZZ,ZZZ">ZZZ,ZZZ</p></td>
									<td><p title="">&nbsp;</p></td>
									<td><p title="XXXX">XXXX</p></td>
									<td><p title="NNNNNNNN">NNNNNNNN</p></td>
									<td><p title="XXXXXXXXXXXX">XXXXXXXXXXXX</p></td>
									<td><p title="NNNNNNNNNN">NNNNNNNNNN</p></td>
									<td><p title="ZZZ">ZZZ</p></td>
									<td><p title="ZZZ,ZZZ">ZZZ,ZZZ</p></td>
								</tr>
							</table>
						</div>
					</div><!-- //内訳 -->
				</div><!-- //↑■管理職特勤 -->
			</div><!-- //.wrap -->
		</div><!-- //#tab06content -->

<!-- ============================== タブ07【能率給】============================== -->
		<div id="tab07content" class="tabContent">
			<div class="wrap bdT_blue bdB_blue">
				<table class="tbl02 w04 w03">
					<tr>
						<th>■能率給</th>
						<th>コード</th>
						<th>名称</th>
						<th>科目コード</th>
						<th>科目名称</th>
						<th>回数</th>
						<th>金額</th>
						<th>支給額</th>
					</tr>
				</table>
				<div class="wrap scroll h01">
					<table class="tbl02 w04">
						<tr>
							<td>&nbsp;</td>
							<td>XXXX</td>
							<td>NNNNNNNNNNNN</td>
							<td>XXXXXXXXXXXX</td>
							<td>NNNNNNNNNN</td>
							<td>ZZZ</td>
							<td>Z,ZZZ,ZZZ</td>
							<td>Z,ZZZ,ZZZ</td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td>XXXX</td>
							<td>NNNNNNNNNNNN</td>
							<td>XXXXXXXXXXXX</td>
							<td>NNNNNNNNNN</td>
							<td>ZZZ</td>
							<td>Z,ZZZ,ZZZ</td>
							<td>Z,ZZZ,ZZZ</td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td>XXXX</td>
							<td>NNNNNNNNNNNN</td>
							<td>XXXXXXXXXXXX</td>
							<td>NNNNNNNNNN</td>
							<td>ZZZ</td>
							<td>Z,ZZZ,ZZZ</td>
							<td>Z,ZZZ,ZZZ</td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td>XXXX</td>
							<td>NNNNNNNNNNNN</td>
							<td>XXXXXXXXXXXX</td>
							<td>NNNNNNNNNN</td>
							<td>ZZZ</td>
							<td>Z,ZZZ,ZZZ</td>
							<td>Z,ZZZ,ZZZ</td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td>XXXX</td>
							<td>NNNNNNNNNNNN</td>
							<td>XXXXXXXXXXXX</td>
							<td>NNNNNNNNNN</td>
							<td>ZZZ</td>
							<td>Z,ZZZ,ZZZ</td>
							<td>Z,ZZZ,ZZZ</td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td>XXXX</td>
							<td>NNNNNNNNNNNN</td>
							<td>XXXXXXXXXXXX</td>
							<td>NNNNNNNNNN</td>
							<td>ZZZ</td>
							<td>Z,ZZZ,ZZZ</td>
							<td>Z,ZZZ,ZZZ</td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td>XXXX</td>
							<td>NNNNNNNNNNNN</td>
							<td>XXXXXXXXXXXX</td>
							<td>NNNNNNNNNN</td>
							<td>ZZZ</td>
							<td>Z,ZZZ,ZZZ</td>
							<td>Z,ZZZ,ZZZ</td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td>XXXX</td>
							<td>NNNNNNNNNNNN</td>
							<td>XXXXXXXXXXXX</td>
							<td>NNNNNNNNNN</td>
							<td>ZZZ</td>
							<td>Z,ZZZ,ZZZ</td>
							<td>Z,ZZZ,ZZZ</td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td>XXXX</td>
							<td>NNNNNNNNNNNN</td>
							<td>XXXXXXXXXXXX</td>
							<td>NNNNNNNNNN</td>
							<td>ZZZ</td>
							<td>Z,ZZZ,ZZZ</td>
							<td>Z,ZZZ,ZZZ</td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td>XXXX</td>
							<td>NNNNNNNNNNNN</td>
							<td>XXXXXXXXXXXX</td>
							<td>NNNNNNNNNN</td>
							<td>ZZZ</td>
							<td>Z,ZZZ,ZZZ</td>
							<td>Z,ZZZ,ZZZ</td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td>XXXX</td>
							<td>NNNNNNNNNNNN</td>
							<td>XXXXXXXXXXXX</td>
							<td>NNNNNNNNNN</td>
							<td>ZZZ</td>
							<td>Z,ZZZ,ZZZ</td>
							<td>Z,ZZZ,ZZZ</td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td>XXXX</td>
							<td>NNNNNNNNNNNN</td>
							<td>XXXXXXXXXXXX</td>
							<td>NNNNNNNNNN</td>
							<td>ZZZ</td>
							<td>Z,ZZZ,ZZZ</td>
							<td>Z,ZZZ,ZZZ</td>
						</tr>
					</table>
				</div><!-- //.wrap -->
			</div><!-- //.wrap -->
		</div><!-- //#tab07content -->

<!-- ============================== タブ08【賃金】============================== -->
		<div id="tab08content" class="tabContent">
			<div class="wrap bdT_blue bdB_blue">
				<table class="tbl02 w01 w03">
					<tr>
						<th>■賃金</th>
						<th>コード</th>
						<th>名称</th>
						<th>科目コード</th>
						<th>科目名称</th>
						<th>回数</th>
						<th>支給額</th>
					</tr>
				</table>
				<div class="wrap scroll h01">
					<table class="tbl02 w01">
						<tr>
							<td>&nbsp;</td>
							<td>XXXX</td>
							<td>NNNNNNNNNNNN</td>
							<td>XXXXXXXXXXXX</td>
							<td>NNNNNNNNNN</td>
							<td>ZZZ</td>
							<td>Z,ZZZ,ZZZ</td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td>XXXX</td>
							<td>NNNNNNNNNNNN</td>
							<td>XXXXXXXXXXXX</td>
							<td>NNNNNNNNNN</td>
							<td>ZZZ</td>
							<td>Z,ZZZ,ZZZ</td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td>XXXX</td>
							<td>NNNNNNNNNNNN</td>
							<td>XXXXXXXXXXXX</td>
							<td>NNNNNNNNNN</td>
							<td>ZZZ</td>
							<td>Z,ZZZ,ZZZ</td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td>XXXX</td>
							<td>NNNNNNNNNNNN</td>
							<td>XXXXXXXXXXXX</td>
							<td>NNNNNNNNNN</td>
							<td>ZZZ</td>
							<td>Z,ZZZ,ZZZ</td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td>XXXX</td>
							<td>NNNNNNNNNNNN</td>
							<td>XXXXXXXXXXXX</td>
							<td>NNNNNNNNNN</td>
							<td>ZZZ</td>
							<td>Z,ZZZ,ZZZ</td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td>XXXX</td>
							<td>NNNNNNNNNNNN</td>
							<td>XXXXXXXXXXXX</td>
							<td>NNNNNNNNNN</td>
							<td>ZZZ</td>
							<td>Z,ZZZ,ZZZ</td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td>XXXX</td>
							<td>NNNNNNNNNNNN</td>
							<td>XXXXXXXXXXXX</td>
							<td>NNNNNNNNNN</td>
							<td>ZZZ</td>
							<td>Z,ZZZ,ZZZ</td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td>XXXX</td>
							<td>NNNNNNNNNNNN</td>
							<td>XXXXXXXXXXXX</td>
							<td>NNNNNNNNNN</td>
							<td>ZZZ</td>
							<td>Z,ZZZ,ZZZ</td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td>XXXX</td>
							<td>NNNNNNNNNNNN</td>
							<td>XXXXXXXXXXXX</td>
							<td>NNNNNNNNNN</td>
							<td>ZZZ</td>
							<td>Z,ZZZ,ZZZ</td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td>XXXX</td>
							<td>NNNNNNNNNNNN</td>
							<td>XXXXXXXXXXXX</td>
							<td>NNNNNNNNNN</td>
							<td>ZZZ</td>
							<td>Z,ZZZ,ZZZ</td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td>XXXX</td>
							<td>NNNNNNNNNNNN</td>
							<td>XXXXXXXXXXXX</td>
							<td>NNNNNNNNNN</td>
							<td>ZZZ</td>
							<td>Z,ZZZ,ZZZ</td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td>XXXX</td>
							<td>NNNNNNNNNNNN</td>
							<td>XXXXXXXXXXXX</td>
							<td>NNNNNNNNNN</td>
							<td>ZZZ</td>
							<td>Z,ZZZ,ZZZ</td>
						</tr>
					</table>
				</div><!-- //.wrap -->
			</div><!-- //.wrap -->
		</div><!-- //#tab08content -->

	</div><!-- //#tabs -->

<!-- *********************************【フッター】********************************* -->
	<p id="footer"><input type="submit" name="" value="（空白）" class="btn01" /></p>

</div><!-- //#container -->

<?php // 検索子画面の読み込み ?>
<?php echo $this->element('common_search'); ?>

