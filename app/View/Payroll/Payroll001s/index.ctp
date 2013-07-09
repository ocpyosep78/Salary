<?php
	$this->append('script'); echo $this->Html->script(array('lib/jquery-1.9.1.min')); $this->end();
	$this->append('css'); echo $this->Html->css(array('salary/common', 'payroll/common')); $this->end();
?>

<div id="container">

<?php echo $this->SalaryForm->create(null, array('url' => array('controller' => 'payroll001s', 'action' => 'search'))); ?>
	<table class="t_header">
		<tr>
			<th>職員番号</th>
			<td>
				<?php echo $this->SalaryForm->text('EmpNo', array('value' => Hash::get($searchCondition, 'EmpNo')));?>
				<?php echo $this->SalaryForm->button('？', array('type' => 'button'), null); ?>
			</td>
			<th>氏名</th>
			<td><?php echo Hash::get($personalInfo, 'FamilyName'); ?>_<?php echo Hash::get($personalInfo, 'FamilyNameKana'); ?> <?php echo Hash::get($personalInfo, 'FirstName'); ?>_<?php echo Hash::get($personalInfo, 'FirstNameKana'); ?></td>
			<th>年齢</th>
			<td>満　ZZ歳</td>
			<td class="td1">
				<?php echo $this->SalaryForm->submit('検索', array('type' => 'submit', 'class' => 'Button1'), null); ?>
			</td>
		</tr>
		<tr>
			<th>支給年月日</th>
			<td>
				<?php echo $this->SalaryForm->text('PaidYM', array('value' => Hash::get($searchCondition, 'PaidYM'), 'placeholder' => 'GGYY.MM'));?>
				<?php echo $this->SalaryForm->button('？', array('type' => 'button'), null); ?>
			</td>
			<th>支給区分</th>
			<td>
				<?php echo $this->SalaryForm->text('PaidDiv', array('size' => '1', 'id' => 'ShikyuCD', 'value' => Hash::get($searchCondition, 'PaidDiv'), 'placeholder' => 'XX'));?>
				<?php echo $this->SalaryForm->button('？', array('type' => 'button', 'onclick' => "viewForCommonSearch('QmShikyuKubun', 'PaymentDivName', 'PaymentDivCD', 'ShikyuName', 'ShikyuCD')" ), null); ?>
				<p class="description" id="ShikyuName" ></p>
			</td>
			<th>支払者</th>
			<td>
				<?php echo $this->SalaryForm->text('PayerDiv', array('size' => '1', 'value' => Hash::get($searchCondition, 'PayerDiv'), 'placeholder' => 'XX'));?>
				<?php echo $this->SalaryForm->button('？', array('type' => 'button'), null); ?>
				<p class="description">NNNNN</p>
			</td>
			<td class="td1">
				<?php echo $this->SalaryForm->button('消去', array('type' => 'button', 'class' => 'Button1'), null); ?>
			</td>
		</tr>
	</table>
<?php echo $this->SalaryForm->end(); ?>

	<ul class="menu">
		<li><a href="">基本情報</a></li>
		<li><a href="">日割情報</a></li>
		<li><a href="">詳細情報</a></li>
		<li><a href="">期末勤勉詳細</a></li>
		<li><a href="">超勤・休日・夜勤</a></li>
		<li><a href="">特勤・宿日直・管特</a></li>
		<li><a href="">能率給</a></li>
		<li><a href="">旅費・その他支給</a></li>
		<li><a href="">福利控除</a></li>
		<li><a href="">賃金</a></li>
	</ul>
	<div class="box_01">
		<table class="tbl_01">
			<tr>
				<th>支給年月日</th>
				<td><?php echo $this->SalaryForm->getJapaneseEra(Hash::get($hiwariInfo, 'QtMeisaiHiwari.PaidYM')); ?></td>
				<th>職員区分</th>
				<td><?php echo Hash::get($hiwariInfo, 'QtMeisaiHiwari.EmpDiv'); ?></td>
				<td>NNNN</td>
				<th>給与体系</th>
				<td><?php echo Hash::get($hiwariInfo, 'QtMeisaiHiwari.SalaryTypeCD'); ?></td>
				<td>NNNNNN</td>
				<th>所属</th>
				<td><?php echo Hash::get($hiwariInfo, 'QtMeisaiHiwari.DepCD'); ?></td>
				<td>N・NN・NNNNN</td>
				<th>職層</th>
				<td><?php echo Hash::get($hiwariInfo, 'QtMeisaiHiwari.JobGradeCD'); ?></td>
				<td>NNNN</td>
				<th>職務</th>
				<td><?php echo Hash::get($hiwariInfo, 'QtMeisaiHiwari.JobDutyCD'); ?></td>
				<td>NNNNNNNNNN</td>
				<td>NNNNN</td>
			</tr>
		</table>

		<table class="tbl_01">
			<tr>
				<th>支出科目</th>
				<th>給料</th>
				<td><?php echo Hash::get($hiwariInfo, 'QtMeisaiHiwari.SalaryRewardSubjectCD'); ?></td>
				<td>NNNNNNNNNN</td>
				<th>児童</th>
				<td><?php echo Hash::get($hiwariInfo, 'QtMeisaiHiwari.ChildAllowanceSubjectCD'); ?></td>
				<td>NNNNNNNNNN</td>
				<th>超勤</th>
				<td><?php echo Hash::get($hiwariInfo, 'QtMeisaiHiwari.OverTimeWorkSubjectCD'); ?></td>
				<td>NNNNNNNNNN</td>
				<th>休日給</th>
				<td><?php echo Hash::get($hiwariInfo, 'QtMeisaiHiwari.HolidaySalarySubjectCD'); ?></td>
				<td>NNNNNNNNNN</td>
			</tr>
		</table>

		<table class="tbl_01">
			<tr>
				<th>給料/報酬</th>
				<td><?php echo Hash::get($hiwariInfo, 'QtMeisaiHiwari.SalaryTable'); ?></td>
				<td>NNNNNN</td>
				<td><?php echo Hash::get($hiwariInfo, 'QtMeisaiHiwari.SalaryClass'); ?>-<?php echo Hash::get($hiwariInfo, 'QtMeisaiHiwari.SalaryGrade'); ?></td>
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
				<td><?php echo Hash::get($hiwariInfo, 'QtMeisaiHiwari.WorkingTimesOfDayHour'); ?>時間<?php echo Hash::get($hiwariInfo, 'QtMeisaiHiwari.WorkingTimesOfDayMinute'); ?>分</td>
				<th>一週間</th>
				<td><?php echo Hash::get($hiwariInfo, 'QtMeisaiHiwari.WorkingDaysOfWeek'); ?>日勤務</td>
				<th>週の勤務時間</th>
				<td><?php echo Hash::get($hiwariInfo, 'QtMeisaiHiwari.WorkingTimesOfWeekHour'); ?>時間<?php echo Hash::get($hiwariInfo, 'QtMeisaiHiwari.WorkingTimesOfWeekMinute'); ?>分</td>
				<th>月の勤務日数</th>
				<td><?php echo Hash::get($hiwariInfo, 'QtMeisaiHiwari.WorkingDaysOfMonth'); ?>日</td>
				<th>年の勤務日数</th>
				<td><?php echo Hash::get($hiwariInfo, 'QtMeisaiHiwari.WorkingDaysOfYear'); ?>日</td>
				<th>その他</th>
				<td><?php echo Hash::get($hiwariInfo, 'QtMeisaiHiwari.OtherDay'); ?>日</td>
				<td><?php echo Hash::get($hiwariInfo, 'QtMeisaiHiwari.OtherMonth'); ?>月</td>
			</tr>
		</table>

		<table class="tbl_01">
			<tr>
				<th>勤怠事由</th>
				<td><?php echo Hash::get($hiwariInfo, 'QtMeisaiHiwari.AttendanceOrderedReasonCD'); ?></td>
				<td>NNNNNN</td>
				<th>支給割合</th>
				<td><?php echo Hash::get($hiwariInfo, 'QtMeisaiHiwari.PayRatio'); ?>％</td>
				<th>発令年月日</th>
				<td>GGYY.MM.DD</td>
				<th>日割日数</th>
				<td><?php echo Hash::get($hiwariInfo, 'QtMeisaiHiwari.ObjectDays'); ?>/<?php echo Hash::get($hiwariInfo, 'QtMeisaiHiwari.RequestedWorkingDaysOfMonth'); ?></td>
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
				<td>
					<?php $hatsureikyuu = Hash::get($meisaiInfo, 'QtMeisai.SalaryPaidAmoTotal_PreReduce') + Hash::get($meisaiInfo, 'QtMeisai.MonthlyRewardTotal_PreReduce'); ?>
					<?php echo $hatsureikyuu; ?>
				</td>
				<th>超過勤務手当</th>
				<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.OverTimeWorkAllow'); ?></td>
				<th>期末手当</th>
				<td class="bdR_01"><?php echo Hash::get($meisaiInfo, 'QtMeisai.EndTermAllow'); ?></td>

				<th>共済</th>
				<th>長期</th>
				<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.MultiAidLongTermPrem'); ?></td>
				<th>住民税</th>
				<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.ResidentsTax'); ?></td>
			</tr>
			<tr>
				<th>&nbsp;</th>
				<th>支給額</th>
				<td>
					<?php $sikyuugaku = Hash::get($meisaiInfo, 'QtMeisai.SalaryPaidAmoTotal') + Hash::get($meisaiInfo, 'QtMeisai.MonthlyRewardTotal'); ?>
					<?php echo $sikyuugaku; ?>
				</td>
				<th>休日給</th>
				<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.HolidayWorkAllow'); ?></td>
				<th>勤勉手当</th>
				<td class="bdR_01"><?php echo Hash::get($meisaiInfo, 'QtMeisai.DiligenceAllow'); ?></td>

				<th>&nbsp;</th>
				<th>短期</th>
				<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.MultiAidShortTermPrem'); ?></td>
				<th>区互助</th>
				<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.WardBenefitSocietyPrem'); ?></td>
			</tr>
			<tr>
				<th>扶養手当</th>
				<th>&nbsp;</th>
				<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.DependentAllow'); ?></td>
				<th>夜勤手当</th>
				<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.DependentAllow'); ?></td>
				<th>&nbsp;</th>
				<td class="bdR_01">&nbsp;</td>

				<th>&nbsp;</th>
				<th>福祉</th>
				<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.MultiAidWelfarePrem'); ?></td>
				<th>区教互助</th>
				<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.WardBenefitEduSocietyPrem'); ?></td>
			</tr>
			<tr>
				<th>地域手当</th>
				<th>&nbsp;</th>
				<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.LocalAllow'); ?></td>
				<th>特殊勤務手当</th>
				<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.SpeWorkAllow'); ?></td>
				<th>その他支給</th>
				<td class="bdR_01"><?php echo Hash::get($meisaiInfo, 'QtMeisai.OtherPaidAmo_RepetitionTotal'); ?></td>

				<th>&nbsp;</th>
				<th>介護</th>
				<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.MultiAidNursingPrem'); ?></td>
				<th>都教互助</th>
				<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.MetTeacherBenefitSocPrem'); ?></td>
			</tr>
			<tr>
				<th>管理職手当</th>
				<th>&nbsp;</th>
				<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.MgrAllow'); ?></td>
				<th>管理職特勤</th>
				<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.MgrSpAllow'); ?></td>
				<th>（内、近接地内旅費）</th>
				<td class="bdR_01">-Z,ZZZ,ZZZ</td>

				<th>社保</th>
				<th>厚年</th>
				<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.SocialInsWelfarePensPrem'); ?></td>
				<th>特互助</th>
				<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.SpWardBenefitSocPrem'); ?></td>
			</tr>
			<tr>
				<th>住居手当</th>
				<th>&nbsp;</th>
				<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.ResidentialAllow'); ?></td>
				<th>宿日直手当</th>
				<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.NightWatchAllow'); ?></td>
				<th>&nbsp;</th>
				<td class="bdR_01">&nbsp;</td>

				<th>&nbsp;</th>
				<th>健保</th>
				<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.SocialInsHealthInsPrem'); ?></td>
				<th>事業団</th>
				<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.PersonalSupportFndPrem'); ?></td>
			</tr>
			<tr>
				<th>初任給調整</th>
				<th>&nbsp;</th>
				<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.MedDoCallAllowance'); ?></td>
				<th>（内、非課税額）</th>
				<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.NightWatchAllowNonTax'); ?></td>
				<th>&nbsp;</th>
				<td class="bdR_01">&nbsp;</td>

				<th>&nbsp;</th>
				<th>介護</th>
				<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.SocialInsNursingInsPrem'); ?></td>
				<th>&nbsp;</th>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<th>単身赴任</th>
				<th>&nbsp;</th>
				<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.SeparationAllow'); ?></td>
				<th>能率給/賃金</th>
				<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.EfficiencyWages'); ?></td>
				<th>&nbsp;</th>
				<td class="bdR_01">&nbsp;</td>

				<th>雇用保険</th>
				<th>&nbsp;</th>
				<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.EmploymentInsPrem'); ?></td>
				<th>福利控除計</th>
				<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.WelfareDeductTotal'); ?></td>
			</tr>
			<tr>
				<th>義務教育特別</th>
				<th>&nbsp;</th>
				<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.TeacherSpAllow'); ?></td>
				<th>児童手当</th>
				<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.ChildAllow'); ?></td>
				<th>&nbsp;</th>
				<td class="bdR_01">&nbsp;</td>

				<th>所得税</th>
				<th>&nbsp;</th>
				<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.IncomeTax'); ?></td>
				<th>&nbsp;</th>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<th>通勤手当</th>
				<th>&nbsp;</th>
				<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.CommutationAllow'); ?></td>
				<th>追給戻入</th>
				<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.AdjustedEmpProcessTotalAmo'); ?></td>
				<th>■支給額計</th>
				<td class="bdR_01"><?php echo Hash::get($meisaiInfo, 'QtMeisai.TotalSalaryPaidAmo'); ?></td>

				<th>課税対象</th>
				<th>&nbsp;</th>
				<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.TaxableIncome'); ?></td>
				<th>■控除額計</th>
				<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.DeductTotal'); ?></td>
			</tr>
			<tr>
				<th>（内、非課税額）</th>
				<th>&nbsp;</th>
				<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.CommutationAllowNonTax'); ?></td>
				<th>&nbsp;</th>
				<td>&nbsp;</td>
				<th>（内、非課税額）</th>
				<td class="bdR_01"><?php echo Hash::get($meisaiInfo, 'QtMeisai.TotalSalaryPaidAmo_NonTaxable'); ?></td>

				<th>税率</th>
				<th>&nbsp;</th>
				<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.BonusTaxRate'); ?>％</td>
				<th>&nbsp;</th>
				<td>&nbsp;</td>
			</tr>
		</table>

		<table class="tbl_02">
			<tr>
				<th rowspan="2">■差引支給額</th>
				<td rowspan="2"><?php echo Hash::get($meisaiInfo, 'QtMeisai.BalancePaidAmo'); ?></td>
				<th rowspan="2">■口座振込</th>
				<td>A口座</td>
				<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.A_Account_RemitAmount'); ?></td>
				<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.A_Account_BankCD'); ?></td>
				<td>NNNNNNNN</td>
				<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.A_Account_BranchCD'); ?></td>
				<td>NNNNNNNN</td>
				<th rowspan="2">■現金支給額</th>
				<td rowspan="2"><?php echo Hash::get($meisaiInfo, 'QtMeisai.BalancePaidAmo_Cash'); ?></td>
			</tr>
			<tr>
				<td>B口座</td>
				<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.B_Account_RemitAmount'); ?></td>
				<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.B_Account_BankCD'); ?></td>
				<td>NNNNNNNN</td>
				<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.B_Account_BranchCD'); ?></td>
				<td>NNNNNNNN</td>
			</tr>
		</table>
	</div><!-- //.box_01 -->

	<p class="btn_01"><input class="Button1" type="submit" value="（空白）" /></p>
</div>

<?php // 検索子画面の読み込み ?>
<?php echo $this->element('common_search'); ?>
