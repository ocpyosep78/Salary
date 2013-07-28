<?php
	$this->append('script'); echo $this->Html->script(array('salary/payroll001s', 'm298')); $this->end();
	$this->append('css'); echo $this->Html->css(array('salary/common', 'M298/common')); $this->end();
?>

<div id="container">
<!-- *********************************【ヘッダー】********************************* -->
<?php echo $this->SalaryForm->create('M298s', array('url' => array('controller' => 'M298s', 'action' => 'search'))); ?>
	<table class="t_header">
		<tr>
			<th width='10%'>職員番号</th>
			<td width='25%'>
				<?php echo $this->SalaryForm->text('EmpNo', array('id' => 'EmpNo', 'value' => Hash::get($searchCondition, 'EmpNo'), 'maxlength' => '8'));?>
				<?php echo $this->SalaryForm->button('？', array('type' => 'button', 'class' => 'btn02', 'onclick' => "viewForEmpSearch()" ), null); ?>
			</td>
			<th width='10%'>氏名</th>
			<td width='15%' id="NameKana"><?php echo Hash::get($personalInfo, 'JtKihonKihon.FamilyNameKana'); ?>&nbsp;<?php echo Hash::get($personalInfo, 'JtKihonKihon.FirstNameKana'); ?></td>
			<th width='10%'>年齢</th>
			<td width='10%' id="Age"><?php echo $this->SalaryForm->getAgeFromChristianEra(Hash::get($personalInfo, 'JtKihonKihon.BirthDate')); ?></td>
			<td class="td1 pd01">
				<?php echo $this->SalaryForm->submit('検索', array('type' => 'submit', 'class' => 'btn01'), null); ?>
			</td>
		</tr>
		<tr>
			<th>支給年月</th>
			<td>
				<?php echo $this->SalaryForm->text('PaidYM', array('value' => Hash::get($searchCondition, 'PaidYM'), 'placeholder' => 'GGYY.MM', 'maxlength' => '7', 'id' => 'PaidYM'));?>
				<?php echo $this->SalaryForm->button('？', array('type' => 'button', 'class' => 'btn02', 'id' => 'PaidYMButton'), null); ?>
			</td>
			<th>支給区分</th>
			<td>
				<?php echo $this->SalaryForm->text('PaidDiv', array('size' => '1', 'id' => 'ShikyuCD', 'value' => Hash::get($searchCondition, 'PaidDiv'), 'placeholder' => 'XX', 'maxlength' => '2'));?>
				<?php echo $this->SalaryForm->button('？', array('type' => 'button', 'class' => 'btn02', 'onclick' => "viewForCommonSearch('QmShikyuKubun', 'PaymentDivName', 'PaymentDivCD', 'ShikyuName', 'ShikyuCD')" ), null); ?>
				<p class="description" id="ShikyuName" ><?php echo Hash::get($commonInfo, 'QtMeisaiHiwari.CodeName_PaymentDivName'); ?></p>
			</td>
			<th>支払者</th>
			<td>
				<?php echo $this->SalaryForm->text('PayerDiv', array('size' => '1', 'id' => 'ShiharaishaCD', 'value' => Hash::get($searchCondition, 'PayerDiv'), 'placeholder' => 'XX', 'maxlength' => '2'));?>
				<?php echo $this->SalaryForm->button('？', array('type' => 'button', 'class' => 'btn02', 'onclick' => "viewForCommonSearch('QmKyuyoShiharaisha', 'PayerName', 'PayerDiv', 'ShiharaishaName', 'ShiharaishaCD')" ), null); ?>
				<p class="description" id="ShiharaishaName"><?php echo Hash::get($commonInfo, 'QtMeisaiHiwari.CodeName_PayerName'); ?></p>
			</td>
			<td class="td1 pd02">
				<?php echo $this->SalaryForm->submit('消去', array('type' => 'submit', 'class' => 'btn01', 'name' => 'clear'), null); ?>
			</td>
		</tr>
	</table>
<?php echo $this->SalaryForm->end(); ?>
<!-- *********************************【コンテンツ】********************************* -->
	<div id="tabs">
<!-- ============================== 共通タブメニュー ============================== -->
	<ul class="menu">
		<li><a href="#">基本情報</a></li>
		<li id="tab01menu"><a href="#">日割情報</a></li>
		<li><a href="#">詳細情報</a></li>
		<li><a href="#">期末勤勉詳細</a></li>
		<li><a href="#">超勤・休日・夜勤</a></li>
		<li><a href="#">特勤・宿日直・管特</a></li>
		<li><a href="#">能率給</a></li>
		<li><a href="#">旅費・その他支給</a></li>
		<li><a href="#">福利控除</a></li>
		<li><a href="#">賃金</a></li>
	</ul>
<!-- ============================== 共通表示項目 ============================== -->

<!-- 1行目 -->
		<div class="wrap bdT_blue bdR_blue bdL_blue pdR10 pdL10" id="tabCommonContents">
			<table class="tbl01">
				<tr>
					<th class="bd_double">支給年月日</th>
					<td class="bd_double"><?php echo $this->SalaryForm->getJapaneseEra(Hash::get($commonInfo, 'QtMeisaiHiwari.PaidYM')); ?></td>
					<th>職員区分</th>
					<td><?php echo Hash::get($commonInfo, 'QtMeisaiHiwari.EmpDiv'); ?></td>
					<td><?php echo Hash::get($commonInfo, 'QtMeisaiHiwari.CodeName_EmpDivName'); ?></td>
					<th>給与体系</th>
					<td><?php echo Hash::get($commonInfo, 'QtMeisaiHiwari.SalaryTypeCD'); ?></td>
					<td><?php echo Hash::get($commonInfo, 'QtMeisaiHiwari.CodeName_SalaryTypeName'); ?></td>
					<th>所属</th>
					<td><?php echo Hash::get($commonInfo, 'QtMeisaiHiwari.DepCD'); ?></td>
					<td><?php echo Hash::get($commonInfo, 'deptShortName'); ?></td>
					<th>職層</th>
					<td><?php echo Hash::get($commonInfo, 'QtMeisaiHiwari.JobGradeCD'); ?></td>
					<td><?php echo Hash::get($commonInfo, 'QtMeisaiHiwari.CodeName_JobGradeName'); ?></td>
					<th>職務</th>
					<td><?php echo Hash::get($commonInfo, 'QtMeisaiHiwari.JobDutyCD'); ?></td>
					<td><?php echo Hash::get($commonInfo, 'QtMeisaiHiwari.CodeName_JobTypeName'); ?></td>
					<td><?php echo Hash::get($commonInfo, 'sweeperYosan'); ?></td>
				</tr>
			</table>
<!-- 2行目 -->
			<table class="tbl01 mg01">
				<tr>
					<th>支出科目</th>
					<th>給料</th>
					<td><?php echo Hash::get($commonInfo, 'QtMeisaiHiwari.SalaryRewardsAccountCD'); ?></td>
					<td><?php echo Hash::get($commonInfo, 'salaryRewardsAccountShortName'); ?></td>
					<th>児童</th>
					<td><?php echo Hash::get($commonInfo, 'QtMeisaiHiwari.ChildAllowAccountCD'); ?></td>
					<td><?php echo Hash::get($commonInfo, 'childAllowAccountShortName'); ?></td>
					<th>超勤</th>
					<td><?php echo Hash::get($commonInfo, 'QtMeisaiHiwari.OverTimeWorkAccountCD'); ?></td>
					<td><?php echo Hash::get($commonInfo, 'overTimeWorkAccountShortName'); ?></td>
					<th>休日給</th>
					<td><?php echo Hash::get($commonInfo, 'QtMeisaiHiwari.HolidaySalaryAccountCD'); ?></td>
					<td><?php echo Hash::get($commonInfo, 'holidaySalaryAccountShortName'); ?></td>
				</tr>
			</table>
<!-- 3行目 -->
			<table class="tbl01 mg01">
				<tr>
					<th>給料/報酬</th>
					<td><?php echo Hash::get($commonInfo, 'QtMeisaiHiwari.SalaryTable'); ?></td>
					<td><?php echo Hash::get($commonInfo, 'QtMeisaiHiwari.CodeName_SalaryTableName'); ?></td>
					<td><?php echo Hash::get($commonInfo, 'QtMeisaiHiwari.SalaryClass'); ?>-<?php echo Hash::get($commonInfo, 'QtMeisaiHiwari.SalaryGrade'); ?></td>
					<td><?php echo Hash::get($commonInfo, 'salaryClassName'); ?></td>
					<td><?php echo $this->SalaryForm->number_format(Hash::get($commonInfo, 'kyuryoHoushuGaku')); ?>円</td>
					<td><label><input type="checkbox" name="" value="" disabled <?php if(Hash::get($commonInfo, 'QtMeisaiHiwari.SweeperAdditionFlg') === '1') echo 'checked'; ?> >清掃加算対象</label></td>
					<th>現給保障</th>
					<td><?php echo Hash::get($commonInfo, 'QtMeisaiHiwari.CodeName_SalaryGuaranteeDivName'); ?></td>
					<th>現在の保障額</th>
					<td><?php echo Hash::get($commonInfo, 'QtMeisaiHiwari.TableOnGuarantTable'); ?></td>
					<td><?php echo Hash::get($commonInfo, 'genkyuHoshoTableName'); ?></td>
					<td><?php echo Hash::get($commonInfo, 'QtMeisaiHiwari.GradeOnGuarantTable'); ?>-<?php echo Hash::get($commonInfo, 'QtMeisaiHiwari.ClassOnGuarantTable'); ?></td>
					<td><?php echo $this->SalaryForm->number_format(Hash::get($commonInfo, 'genkyuHoshoKingaku')); ?>円</td>
				</tr>
			</table>
<!-- 4行目 -->
			<table class="tbl01 mg01">
				<tr>
					<th>勤務態様</th>
					<th>一日</th>
					<td><?php echo Hash::get($commonInfo, 'QtMeisaiHiwari.WorkingTimesOfDayHour'); ?>時間<?php echo Hash::get($commonInfo, 'QtMeisaiHiwari.WorkingTimesOfDayMinute'); ?>分</td>
					<th>一週間</th>
					<td><?php echo Hash::get($commonInfo, 'QtMeisaiHiwari.WorkingDaysOfWeek'); ?>日勤務</td>
					<th>週の勤務時間</th>
					<td><?php echo Hash::get($commonInfo, 'QtMeisaiHiwari.WorkingTimesOfWeekHour'); ?>時間<?php echo Hash::get($commonInfo, 'QtMeisaiHiwari.WorkingTimesOfWeekMinute'); ?>分</td>
					<th>月の勤務日数</th>
					<td><?php echo Hash::get($commonInfo, 'QtMeisaiHiwari.WorkingDaysOfMonth'); ?>日</td>
					<th>年の勤務日数</th>
					<td><?php echo Hash::get($commonInfo, 'QtMeisaiHiwari.WorkingDaysOfYear'); ?>日</td>
					<th>その他</th>
					<td><?php echo Hash::get($commonInfo, 'QtMeisaiHiwari.OtherDay'); ?>日</td>
					<td>／</td>
					<td><?php echo Hash::get($commonInfo, 'QtMeisaiHiwari.OtherMonth'); ?>月</td>
				</tr>
			</table>
<!-- 5行目 -->
			<table class="tbl01 mg01">
				<tr>
					<th>勤怠事由</th>
					<td><?php echo Hash::get($commonInfo, 'QtMeisaiHiwari.AttendanceOrderedReasonCD'); ?></td>
					<td><?php echo Hash::get($commonInfo, 'QtMeisaiHiwari.CodeName_NAME'); ?></td>
					<th>支給割合</th>
					<td><?php echo Hash::get($commonInfo, 'QtMeisaiHiwari.PayRatio'); ?>％</td>
					<th>発令年月日</th>
					<td><?php echo $this->SalaryForm->getJapaneseEra(Hash::get($commonInfo, 'QtMeisaiHiwari.DailyRateStartDate')); ?></td>
					<th>日割日数</th>
					<td><?php echo Hash::get($commonInfo, 'QtMeisaiHiwari.ObjectDays'); ?></td>
					<td>／</td>
					<td><?php echo Hash::get($commonInfo, 'QtMeisaiHiwari.RequestedWorkingDaysOfMonth'); ?></td>
				</tr>
			</table>
		</div><!-- //.wrap -->

<!-- ============================== タブ01【基本情報】============================== -->
		<div id="tab01content" class="tabContent">
			<table class="tbl02 bdT">
				<tr>
					<th colspan="7" class="th01 bdR bdB bg01">支給</th>
					<th colspan="5" class="th01 bdB bg01">控除</th>
				</tr>
				<tr>
					<th>給料/報酬</th>
					<th>発令給</th>
					<td class="right">
						<?php
							if(is_numeric(Hash::get($meisaiInfo, 'QtMeisai.SalaryPaidAmoTotal_PreReduce')) && is_numeric(Hash::get($meisaiInfo, 'QtMeisai.MonthlyRewardTotal_PreReduce'))){
								$hatsureikyuu = Hash::get($meisaiInfo, 'QtMeisai.SalaryPaidAmoTotal_PreReduce') + Hash::get($meisaiInfo, 'QtMeisai.MonthlyRewardTotal_PreReduce');
							} else {
								$hatsureikyuu = null;
							}
						?>
						<?php echo $this->SalaryForm->number_format($hatsureikyuu); ?>
					</td>
					<th>超過勤務手当</th>
					<td class="right"><?php echo $this->SalaryForm->number_format(Hash::get($meisaiInfo, 'QtMeisai.OverTimeWorkAllow')); ?></td>
					<th>期末手当</th>
					<td class="bdR right"><?php echo $this->SalaryForm->number_format(Hash::get($meisaiInfo, 'QtMeisai.EndTermAllow')); ?></td>

					<th>共済</th>
					<th>長期</th>
					<td class="right"><?php echo $this->SalaryForm->number_format(Hash::get($meisaiInfo, 'QtMeisai.MultiAidLongTermPrem')); ?></td>
					<th>住民税</th>
					<td class="right"><?php echo $this->SalaryForm->number_format(Hash::get($meisaiInfo, 'QtMeisai.ResidentsTax')); ?></td>
				</tr>
				<tr>
					<th>&nbsp;</th>
					<th>支給額</th>
					<td class="right">
						<?php
							if(is_numeric(Hash::get($meisaiInfo, 'QtMeisai.SalaryPaidAmoTotal')) && is_numeric(Hash::get($meisaiInfo, 'QtMeisai.MonthlyRewardTotal'))){
								$sikyuugaku = Hash::get($meisaiInfo, 'QtMeisai.SalaryPaidAmoTotal') + Hash::get($meisaiInfo, 'QtMeisai.MonthlyRewardTotal');
							} else {
								$sikyuugaku = null;
							}
						?>
						<?php echo $this->SalaryForm->number_format($sikyuugaku); ?>
					</td>
					<th>休日給</th>
					<td class="right"><?php echo $this->SalaryForm->number_format(Hash::get($meisaiInfo, 'QtMeisai.HolidayWorkAllow')); ?></td>
					<th>勤勉手当</th>
					<td class="bdR right"><?php echo $this->SalaryForm->number_format(Hash::get($meisaiInfo, 'QtMeisai.DiligenceAllow')); ?></td>

					<th>&nbsp;</th>
					<th>短期</th>
					<td class="right"><?php echo $this->SalaryForm->number_format(Hash::get($meisaiInfo, 'QtMeisai.MultiAidShortTermPrem')); ?></td>
					<th>区互助</th>
					<td class="right"><?php echo $this->SalaryForm->number_format(Hash::get($meisaiInfo, 'QtMeisai.WardBenefitSocietyPrem')); ?></td>
				</tr>
				<tr>
					<th>扶養手当</th>
					<th>&nbsp;</th>
					<td class="right"><?php echo $this->SalaryForm->number_format(Hash::get($meisaiInfo, 'QtMeisai.DependentAllow')); ?></td>
					<th>夜勤手当</th>
					<td class="right"><?php echo $this->SalaryForm->number_format(Hash::get($meisaiInfo, 'QtMeisai.NightShiftAllow')); ?></td>
					<th>&nbsp;</th>
					<td class="bdR">&nbsp;</td>

					<th>&nbsp;</th>
					<th>福祉</th>
					<td class="right"><?php echo $this->SalaryForm->number_format(Hash::get($meisaiInfo, 'QtMeisai.MultiAidWelfarePrem')); ?></td>
					<th>区教互助</th>
					<td class="right"><?php echo $this->SalaryForm->number_format(Hash::get($meisaiInfo, 'QtMeisai.WardBenefitEduSocietyPrem')); ?></td>
				</tr>
				<tr>
					<th>地域手当</th>
					<th>&nbsp;</th>
					<td class="right"><?php echo $this->SalaryForm->number_format(Hash::get($meisaiInfo, 'QtMeisai.LocalAllow')); ?></td>
					<th>特殊勤務手当</th>
					<td class="right"><?php echo $this->SalaryForm->number_format(Hash::get($meisaiInfo, 'QtMeisai.SpeWorkAllow')); ?></td>
					<th>その他支給</th>
					<td class="bdR right"><?php echo $this->SalaryForm->number_format(Hash::get($meisaiInfo, 'QtMeisai.OtherPaidAmo_RepetitionTotal')); ?></td>

					<th>&nbsp;</th>
					<th>介護</th>
					<td class="right"><?php echo $this->SalaryForm->number_format(Hash::get($meisaiInfo, 'QtMeisai.MultiAidNursingPrem')); ?></td>
					<th>都教互助</th>
					<td class="right"><?php echo $this->SalaryForm->number_format(Hash::get($meisaiInfo, 'QtMeisai.MetTeacherBenefitSocPrem')); ?></td>
				</tr>
				<tr>
					<th>管理職手当</th>
					<th>&nbsp;</th>
					<td class="right"><?php echo $this->SalaryForm->number_format(Hash::get($meisaiInfo, 'QtMeisai.MgrAllow')); ?></td>
					<th>管理職特勤</th>
					<td class="right"><?php echo $this->SalaryForm->number_format(Hash::get($meisaiInfo, 'QtMeisai.MgrSpAllow')); ?></td>
					<th>（内、近接地内旅費）</th>
					<td class="bdR right"><?php echo $this->SalaryForm->number_format($uchiKinsetsuchiRyohi); ?></td>

					<th>社保</th>
					<th>厚年</th>
					<td class="right"><?php echo $this->SalaryForm->number_format(Hash::get($meisaiInfo, 'QtMeisai.SocialInsWelfarePensPrem')); ?></td>
					<th>特互助</th>
					<td class="right"><?php echo $this->SalaryForm->number_format(Hash::get($meisaiInfo, 'QtMeisai.SpWardBenefitSocPrem')); ?></td>
				</tr>
				<tr>
					<th>住居手当</th>
					<th>&nbsp;</th>
					<td class="right"><?php echo $this->SalaryForm->number_format(Hash::get($meisaiInfo, 'QtMeisai.ResidentialAllow')); ?></td>
					<th>宿日直手当</th>
					<td class="right"><?php echo $this->SalaryForm->number_format(Hash::get($meisaiInfo, 'QtMeisai.NightWatchAllow')); ?></td>
					<th>&nbsp;</th>
					<td class="bdR">&nbsp;</td>

					<th>&nbsp;</th>
					<th>健保</th>
					<td class="right"><?php echo $this->SalaryForm->number_format(Hash::get($meisaiInfo, 'QtMeisai.SocialInsHealthInsPrem')); ?></td>
					<th>事業団</th>
					<td class="right"><?php echo $this->SalaryForm->number_format(Hash::get($meisaiInfo, 'QtMeisai.PersonalSupportFndPrem')); ?></td>
				</tr>
				<tr>
					<th>初任給調整</th>
					<th>&nbsp;</th>
					<td class="right"><?php echo $this->SalaryForm->number_format(Hash::get($meisaiInfo, 'QtMeisai.MedDoCallAllowance')); ?></td>
					<th>（内、非課税額）</th>
					<td class="right"><?php echo $this->SalaryForm->number_format(Hash::get($meisaiInfo, 'QtMeisai.NightWatchAllowNonTax')); ?></td>
					<th>&nbsp;</th>
					<td class="bdR">&nbsp;</td>

					<th>&nbsp;</th>
					<th>介護</th>
					<td class="right"><?php echo $this->SalaryForm->number_format(Hash::get($meisaiInfo, 'QtMeisai.SocialInsNursingInsPrem')); ?></td>
					<th>&nbsp;</th>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<th>単身赴任</th>
					<th>&nbsp;</th>
					<td class="right"><?php echo $this->SalaryForm->number_format(Hash::get($meisaiInfo, 'QtMeisai.SeparationAllow')); ?></td>
					<th>能率給/賃金</th>
					<td class="right"><?php echo $this->SalaryForm->number_format(Hash::get($meisaiInfo, 'QtMeisai.EfficiencyWages')); ?></td>
					<th>&nbsp;</th>
					<td class="bdR">&nbsp;</td>

					<th>雇用保険</th>
					<th>&nbsp;</th>
					<td class="right"><?php echo $this->SalaryForm->number_format(Hash::get($meisaiInfo, 'QtMeisai.EmploymentInsPrem')); ?></td>
					<th>福利控除計</th>
					<td class="right"><?php echo $this->SalaryForm->number_format(Hash::get($meisaiInfo, 'QtMeisai.WelfareDeductTotal')); ?></td>
				</tr>
				<tr>
					<th>義務教育特別</th>
					<th>&nbsp;</th>
					<td class="right"><?php echo $this->SalaryForm->number_format(Hash::get($meisaiInfo, 'QtMeisai.TeacherSpAllow')); ?></td>
					<th>児童手当</th>
					<td class="right"><?php echo $this->SalaryForm->number_format(Hash::get($meisaiInfo, 'QtMeisai.ChildAllow')); ?></td>
					<th>&nbsp;</th>
					<td class="bdR">&nbsp;</td>

					<th>所得税</th>
					<th>&nbsp;</th>
					<td class="right"><?php echo $this->SalaryForm->number_format(Hash::get($meisaiInfo, 'QtMeisai.IncomeTax')); ?></td>
					<th>&nbsp;</th>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<th>通勤手当</th>
					<th>&nbsp;</th>
					<td class="right"><?php echo $this->SalaryForm->number_format(Hash::get($meisaiInfo, 'QtMeisai.CommutationAllow')); ?></td>
					<th>追給戻入</th>
					<td class="right"><?php echo $this->SalaryForm->number_format(Hash::get($meisaiInfo, 'QtMeisai.AdjustedEmpProcessTotalAmo')); ?></td>
					<th>■支給額計</th>
					<td class="bdR right"><?php echo $this->SalaryForm->number_format(Hash::get($meisaiInfo, 'QtMeisai.TotalSalaryPaidAmo')); ?></td>

					<th>課税対象</th>
					<th>&nbsp;</th>
					<td class="right"><?php echo $this->SalaryForm->number_format(Hash::get($meisaiInfo, 'QtMeisai.TaxableIncome')); ?></td>
					<th>■控除額計</th>
					<td class="right"><?php echo $this->SalaryForm->number_format(Hash::get($meisaiInfo, 'QtMeisai.DeductTotal')); ?></td>
				</tr>
				<tr>
					<th>（内、非課税額）</th>
					<th>&nbsp;</th>
					<td class="right"><?php echo $this->SalaryForm->number_format(Hash::get($meisaiInfo, 'QtMeisai.CommutationAllowNonTax')); ?></td>
					<th>&nbsp;</th>
					<td>&nbsp;</td>
					<th>（内、非課税額）</th>
					<td class="bdR right"><?php echo $this->SalaryForm->number_format(Hash::get($meisaiInfo, 'QtMeisai.TotalSalaryPaidAmo_NonTaxable')); ?></td>

					<th>税率</th>
					<th>&nbsp;</th>
					<td class="right"><?php echo $this->SalaryForm->number_format(Hash::get($meisaiInfo, 'QtMeisai.BonusTaxRate')); ?>％</td>
					<th>&nbsp;</th>
					<td>&nbsp;</td>
				</tr>
			</table>

			<table class="tbl02 bdT bdB_blue">
				<tr>
					<th rowspan="2">■差引支給額</th>
					<td rowspan="2" class="right"><?php echo $this->SalaryForm->number_format(Hash::get($meisaiInfo, 'QtMeisai.BalancePaidAmo')); ?></td>
					<th rowspan="2">■口座振込</th>
					<td>A口座</td>
					<td class="right"><?php echo $this->SalaryForm->number_format(Hash::get($meisaiInfo, 'QtMeisai.A_Account_RemitAmount')); ?></td>
					<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.A_Account_BankCD'); ?></td>
					<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.A_BankNameKana'); ?></td>
					<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.A_Account_BranchCD'); ?></td>
					<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.A_BankBrancheName'); ?></td>
					<th rowspan="2">■現金支給額</th>
					<td rowspan="2" class="right"><?php echo $this->SalaryForm->number_format(Hash::get($meisaiInfo, 'QtMeisai.BalancePaidAmo_Cash')); ?></td>
				</tr>
				<tr>
					<td>B口座</td>
					<td class="right"><?php echo $this->SalaryForm->number_format(Hash::get($meisaiInfo, 'QtMeisai.B_Account_RemitAmount')); ?></td>
					<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.B_Account_BankCD'); ?></td>
					<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.B_BankNameKana'); ?></td>
					<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.B_Account_BranchCD'); ?></td>
					<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.B_BankBrancheName'); ?></td>
				</tr>
			</table>
		</div><!-- //#tab01content -->
<!-- ============================== タブ02【日割情報】============================== -->
		<div id="tab02content" class="tabContent">
			<div class="wrap bdT_blue bdB_blue pd10">

<?php // 支給年月日別の繰り返し ?>
<?php foreach($hiwariInfo as $hiwariGruop): ?>
				<table class="tbl02 mgR10 mgB10 mgL10 w40">
					<tr>
						<th class="bd_double th02">支給年月日</th>
						<td class="bd_double"><?php echo $this->SalaryForm->getJapaneseEra(Hash::get($hiwariGruop, '0.QtMeisaiHiwari.PaidYM')); ?></td>
						<th>月の要勤務日数</th>
						<td><?php echo Hash::get($hiwariGruop, '0.QtMeisaiHiwari.RequestedWorkingDaysOfMonth'); ?>日</td>
					</tr>
				</table>
	<?php // 支給年月日が同一のレコードの繰り返し ?>
	<?php foreach($hiwariGruop as $record): ?>
				<table class="tbl02 mgL10 w20">
					<tr>
						<th class="th02">発令年月日</th>
						<td><?php echo $this->SalaryForm->getJapaneseEra(Hash::get($record, 'QtMeisaiHiwari.DailyRateStartDate')); ?></td>
					</tr>
				</table>
				<div class="wrap pd10 mgR10 mgB10 mgL10 bd">
					<table class="tbl02">
						<tr>
							<th colspan="16">■基本情報</th>
						</tr>
						<tr>
							<th class="pdL20">職員区分</th>
							<td><?php echo Hash::get($record, 'QtMeisaiHiwari.EmpDiv'); ?></td>
							<td><?php echo Hash::get($record, 'QtMeisaiHiwari.CodeName_EmpDivName'); ?></td>
							<th>給与体系</th>
							<td><?php echo Hash::get($record, 'QtMeisaiHiwari.SalaryTypeCD'); ?></td>
							<td><?php echo Hash::get($record, 'QtMeisaiHiwari.CodeName_SalaryTypeName'); ?></td>
							<th>所属</th>
							<td><?php echo Hash::get($record, 'QtMeisaiHiwari.DepCD'); ?></td>
							<td><?php echo Hash::get($record, 'deptShortName'); ?></td>
							<th>職層</th>
							<td><?php echo Hash::get($record, 'QtMeisaiHiwari.JobGradeCD'); ?></td>
							<td><?php echo Hash::get($record, 'QtMeisaiHiwari.CodeName_JobGradeName'); ?></td>
							<th>職務</th>
							<td><?php echo Hash::get($record, 'QtMeisaiHiwari.JobDutyCD'); ?></td>
							<td><?php echo Hash::get($record, 'QtMeisaiHiwari.CodeName_JobTypeName'); ?></td>
							<td><?php echo Hash::get($record, 'sweeperYosan'); ?></td>
						</tr>
					</table>
					<table class="tbl02">
						<tr>
							<th colspan="14">■給料/報酬月額情報</th>
						</tr>
						<tr>
							<th class="pdL20">表級号</th>
							<td><?php echo Hash::get($record, 'QtMeisaiHiwari.SalaryTable'); ?></td>
							<td><?php echo Hash::get($record, 'QtMeisaiHiwari.CodeName_SalaryTableName'); ?></td>
							<td><?php echo Hash::get($record, 'QtMeisaiHiwari.SalaryClass'); ?>-<?php echo Hash::get($record, 'QtMeisaiHiwari.SalaryGrade'); ?></td>
							<td><?php echo Hash::get($record, 'salaryClassName'); ?></td>
							<td><?php echo $this->SalaryForm->number_format(Hash::get($record, 'kyuryoHoushuGaku')); ?>円</td>
							<td><label><input type="checkbox" name="" value="" disabled <?php if(Hash::get($record, 'QtMeisaiHiwari.SweeperAdditionFlg') === '1') echo 'checked'; ?> >清掃加算対象</label></td>
							<th>現給保障</th>
							<td><?php echo Hash::get($record, 'QtMeisaiHiwari.CodeName_SalaryGuaranteeDivName'); ?></td>
							<th>保障額表</th>
							<td><?php echo Hash::get($record, 'QtMeisaiHiwari.TableOnGuarantTable'); ?></td>
							<td><?php echo Hash::get($record, 'genkyuHoshoTableName'); ?></td>
							<td><?php echo Hash::get($record, 'QtMeisaiHiwari.GradeOnGuarantTable'); ?>-<?php echo Hash::get($record, 'QtMeisaiHiwari.ClassOnGuarantTable'); ?></td>
							<td><?php echo $this->SalaryForm->number_format(Hash::get($record, 'genkyuHoshoKingaku')); ?>円</td>
						</tr>
					</table>
					<table class="tbl02">
						<tr>
							<th colspan="15">■勤務態様</th>
						</tr>
						<tr>
							<th class="pdL20">一日</th>
							<td><?php echo Hash::get($record, 'QtMeisaiHiwari.WorkingTimesOfDayHour'); ?>時間<?php echo Hash::get($record, 'QtMeisaiHiwari.WorkingTimesOfDayMinite'); ?>分</td>
							<th>一週間</th>
							<td><?php echo Hash::get($record, 'QtMeisaiHiwari.WorkingDaysOfWeek'); ?>日勤務</td>
							<th>週の勤務時間</th>
							<td><?php echo Hash::get($record, 'QtMeisaiHiwari.WorkingTimesOfWeekHour'); ?>時間<?php echo Hash::get($record, 'QtMeisaiHiwari.WorkingTimesOfWeekMinite'); ?>分</td>
							<th>月の勤務日数</th>
							<td><?php echo Hash::get($record, 'QtMeisaiHiwari.WorkingDaysOfMonth'); ?>日</td>
							<th>年の勤務日数</th>
							<td><?php echo Hash::get($record, 'QtMeisaiHiwari.WorkingDaysOfYear'); ?>日</td>
							<th>その他</th>
							<td><?php echo Hash::get($record, 'QtMeisaiHiwari.OtherDay'); ?>日</td>
							<td>／</td>
							<td><?php echo Hash::get($record, 'QtMeisaiHiwari.OtherMonth'); ?>月</td>
						</tr>
					</table>
					<table class="tbl02">
						<tr>
							<th colspan="11">■勤怠情報/日割日数</th>
						</tr>
						<tr>
							<th class="pdL20">勤怠事由</th>
							<td><?php echo Hash::get($record, 'QtMeisaiHiwari.AttendanceOrderedReasonCD'); ?></td>
							<td><?php echo Hash::get($record, 'QtMeisaiHiwari.CodeName_NAME'); ?></td>
							<th>支給割合</th>
							<td><?php echo Hash::get($record, 'QtMeisaiHiwari.PayRatio'); ?>％</td>
							<th>発令年月日</th>
							<td><?php echo $this->SalaryForm->getJapaneseEra(Hash::get($record, 'QtMeisaiHiwari.DailyRateStartDate')); ?></td>
							<th>日割日数</th>
							<td><?php echo Hash::get($record, 'QtMeisaiHiwari.ObjectDays'); ?></td>
							<td>／</td>
							<td><?php echo Hash::get($record, 'QtMeisaiHiwari.RequestedWorkingDaysOfMonth'); ?></td>
						</tr>
					</table>
					<table class="tbl02">
						<tr>
							<th colspan="12">■支出科目</th>
						</tr>
						<tr>
							<th class="pdL20">給料</th>
							<td class="td03"><?php echo Hash::get($record, 'QtMeisaiHiwari.SalaryRewardsAccountCD'); ?></td>
							<td class="td03"><?php echo Hash::get($record, 'salaryRewardsAccountShortName'); ?></td>
							<th>児童</th>
							<td class="td03"><?php echo Hash::get($record, 'QtMeisaiHiwari.ChildAllowAccountCD'); ?></td>
							<td class="td03"><?php echo Hash::get($record, 'childAllowAccountShortName'); ?></td>
							<th>超勤</th>
							<td class="td03"><?php echo Hash::get($record, 'QtMeisaiHiwari.OverTimeWorkAccountCD'); ?></td>
							<td class="td03"><?php echo Hash::get($record, 'overTimeWorkAccountShortName'); ?></td>
							<th>休日給</th>
							<td class="td03"><?php echo Hash::get($record, 'QtMeisaiHiwari.HolidaySalaryAccountCD'); ?></td>
							<td class="td03"><?php echo Hash::get($record, 'holidaySalaryAccountShortName'); ?></td>
						</tr>
					</table>
				</div><!-- //.wrap -->
	<?php endforeach; ?>
<?php endforeach; ?>
			</div><!-- //.wrap -->
		</div><!-- //#tab2content -->

<!-- ============================== タブ03【詳細情報】============================== -->
		<div id="tab03content" class="tabContent">
			<div class="wrap bdT_blue bdB_blue">
				<table class="tbl03">
					<tr>
						<th colspan="6" class="th01 bdR bdB bg01">支給</th>
						<th colspan="3" class="th01 bdR bdB bg01">減額・手当停止</th>
						<th colspan="9" class="th01 bdB bg01">控除</th>
					</tr>
					<tr>
						<th colspan="6" class="bdR">■扶養手当</th>
						<th colspan="3" class="bdR">■減額</th>

						<th>■共済/社保</th>
						<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.TokyoMetMASchoolMASoInsDiv'); ?></td>
						<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.CodeName_MA_SI_EnrollDivName'); ?></td>
						<th>■所得税</th>
						<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.InTaxTableDiv'); ?></td>
						<td><p><?php if(Hash::get($meisaiInfo, 'QtMeisai.InTaxTableDiv') == '01') {
									echo '甲欄';
								} else if(Hash::get($meisaiInfo, 'QtMeisai.InTaxTableDiv') == '02') {
									echo '乙欄';
								}
						?></p></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<th class="th01">配偶者</th>
						<th class="th01">配欠</th>
						<th class="th01">一人目</th>
						<th class="th01">二人目</th>
						<th class="th01">三人以降</th>
						<th class="bdR th01">特定加算</th>

						<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.ReducedAmoTimes'); ?>時間</td>
						<td colspan="2" class="bdR"><?php echo Hash::get($meisaiInfo, 'QtMeisai.ReducedAmoDays'); ?>日</td>

						<th class="pdL20">介護該当</th>
						<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.NusingFlg'); ?></td>
						<td><?php if(Hash::get($meisaiInfo, 'QtMeisai.NusingFlg') == '0') {
									echo '非該当';
								} else if(Hash::get($meisaiInfo, 'QtMeisai.NusingFlg') == '1') {
									echo '該当';
								}
						?></td>
						<th>《自己該当》</th>
						<th>&nbsp;</th>
						<th>
						<th>&nbsp;</th>
						<th>&nbsp;</th>
						<td></td>
					</tr>
					<tr>
						<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.SpouseFlg'); ?></td>
						<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.SubstituteSpouse'); ?></td>
						<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.FirstDependent'); ?></td>
						<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.SecondDependent'); ?></td>
						<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.ThirdAboveDependents'); ?></td>
						<td class="bdR"><?php echo Hash::get($meisaiInfo, 'QtMeisai.SpAddNoOfPeople'); ?></td>

						<td colspan="3" class="bdR td04"><label><input type="checkbox" name="" value="" <?php if(Hash::get($meisaiInfo, 'QtMeisai.AbsentedAllDayFlg') === '1') echo 'checked'; ?> disabled>全欠勤</label></td>

						<td colspan="3" class="td04 pdL20"><label><input type="checkbox" name="" value="" <?php if(Hash::get($meisaiInfo, 'QtMeisai.TimesOfPartRestPremDeduct') !== null && Hash::get($meisaiInfo, 'QtMeisai.TimesOfPartRestPremDeduct') !== '0') echo 'checked'; ?> disabled>部分休長期免除</label></td>
						<th class="th01">普通障害</th>
						<th class="th01">特別障害</th>
						<th class="th01">老年者</th>
						<th class="th01">寡婦（夫）</th>
						<th class="th01">勤労学生</th>
						<td></td>
					</tr>
					<tr>
						<th colspan="3">■住居手当</th>
						<th colspan="3" class="bdR">■単身赴任</th>

						<th colspan="3" class="bdR">■手当停止</th>

						<td colspan="3"><?php echo Hash::get($meisaiInfo, 'QtMeisai.TimesOfPartRestPremDeduct'); ?>時間</td>
						<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.SelfHandicapFlg'); ?></td>
						<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.SelfSpHandicapFlg'); ?></td>
						<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.SelfElderFlg'); ?></td>
						<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.WidowFlg'); ?></td>
						<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.DiligentStudentFlg'); ?></td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.ResidentAllowCD'); ?></td>
						<td colspan="2" class="td04"><?php echo Hash::get($meisaiInfo, 'QtMeisai.CodeName_ResidentAllowName'); ?></td>
						<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.DetachmentAllowDivCD'); ?></td>
						<td colspan="2" class="td04 bdR"><?php echo Hash::get($meisaiInfo, 'detachmentAllowDivName'); ?></td>

						<th class="pdL20">通勤</th>
						<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.CommutationStopStartFlg'); ?></td>
						<td class="bdR"><?php if(Hash::get($meisaiInfo, 'QtMeisai.CommutationStopStartFlg') == '0') {
									echo '継続';
								} else if(Hash::get($meisaiInfo, 'QtMeisai.CommutationStopStartFlg') == '1') {
									echo '停止';
								} else if(Hash::get($meisaiInfo, 'QtMeisai.CommutationStopStartFlg') == '2') {
									echo '解除';
								}
						?></td>

						<th colspan="3">■標準報酬</th>
						<th>《扶養親族》</th>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<th colspan="2">■初任給調整</th>
						<td class="td04"><?php echo Hash::get($meisaiInfo, 'QtMeisai.MedDoCallAllowanceDiv'); ?></td>
						<th>■通勤手当</th>
						<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.CommutationPattern'); ?></td>
						<td class="td04 bdR">NNNNNN</td>

						<th class="pdL20">管理職</th>
						<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.MgrAllowStopStartFlg'); ?></td>
						<td class="bdR"><?php if(Hash::get($meisaiInfo, 'QtMeisai.MgrAllowStopStartFlg') == '0') {
									echo '継続';
								} else if(Hash::get($meisaiInfo, 'QtMeisai.MgrAllowStopStartFlg') == '1') {
									echo '停止';
								} else if(Hash::get($meisaiInfo, 'QtMeisai.MgrAllowStopStartFlg') == '2') {
									echo '解除';
								}
						?></td>

						<th class="th01">等級</th>
						<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.StandardMonthSalaryDiv'); ?></td>
						<td>&nbsp;</td>
						<th class="th01">配偶者</th>
						<th class="th01">年少</th>
						<th class="th01">その他</th>
						<th class="th01">普通障害</th>
						<th class="th01">特別障害</th>
						<th class="th01">同居特障</th>
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
						<td colspan="2" class="right"><?php echo $this->SalaryForm->number_format(Hash::get($meisaiInfo, 'QtMeisai.StandardMonthSalary')); ?></td>
						<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.DeductSpouseFlg'); ?></td>
						<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.NoOfSupYounger'); ?></td>
						<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.NoOfSupOthers'); ?></td>
						<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.NoOfChallenged'); ?></td>
						<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.NoOfSpChallenged'); ?></td>
						<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.NoOfSpChallengedLodger'); ?></td>
					</tr>
					<tr>
						<th class="pdL20">特勤</th>
						<td><?php echo Hash::get($commonInfo, 'QtMeisaiHiwari.SpecificDutySalaryCD'); ?></td>
						<td><?php echo Hash::get($commonInfo, 'QtMeisaiHiwari.CodeName_AllowDetailName'); ?></td>
						<th>&nbsp;</th>
						<td>&nbsp;</td>
						<th class="bdR">&nbsp;</th>

						<th>&nbsp;</th>
						<th>&nbsp;</th>
						<th class="bdR">&nbsp;</th>

						<th class="th01">適用</th>
						<td colspan="2"><?php echo $this->SalaryForm->getJapaneseEraWithoutDay(Hash::get($meisaiInfo, 'QtMeisai.StandardMonthSalaryRemarks')); ?></td>
						<th>■互助会/互助組合</th>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<th class="pdL20">一月あたり日数</th>
						<td><?php echo Hash::get($commonInfo, 'QtMeisaiHiwari.RequestedWorkingDaysOfMonth'); ?>日</tdh>
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
						<td class="td04"><label><input type="checkbox" name="" value="" <?php if(Hash::get($meisaiInfo, 'QtMeisai.WardBenefitSocietyDeductEntryFlg') === '1') echo 'checked'; ?> disabled>区互助</label></td>
						<td class="td04"><label><input type="checkbox" name="" value="" <?php if(Hash::get($meisaiInfo, 'QtMeisai.WardBenefitEduSocietyDeductEntryFlg') === '1') echo 'checked'; ?> disabled>区教互助</label></td>
						<td class="td04"><label><input type="checkbox" name="" value="" <?php if(Hash::get($meisaiInfo, 'QtMeisai.MetroBenefitEduSocietyDeductEntryFlg') === '1') echo 'checked'; ?> disabled>都教互助</label></td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<th>&nbsp;</th>
						<td>&nbsp;</td>
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
						<td class="td04"><label><input type="checkbox" name="" value="" <?php if(Hash::get($meisaiInfo, 'QtMeisai.SpWardBenefitEduSocietyDeductEntryFlg') === '1') echo 'checked'; ?> disabled>特互助</label></td>
						<td class="td04"><label><input type="checkbox" name="" value="" <?php if(Hash::get($meisaiInfo, 'QtMeisai.PersonalSupportFndDeductEntryFlg') === '1') echo 'checked'; ?> disabled>事業団</label></td>
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

						<th>■雇用保険</th>
						<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.EmploymentInsFlg'); ?></td>
						<td><?php if(Hash::get($meisaiInfo, 'QtMeisai.EmploymentInsFlg') == '0') {
									echo '非加入';
								} else if(Hash::get($meisaiInfo, 'QtMeisai.EmploymentInsFlg') == '1') {
									echo '加入';
								}
						?></td>
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

						<th class="pdL20">高齢免除</th>
						<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.UnempInsuranceFlg'); ?></td>
						<td><?php if(Hash::get($meisaiInfo, 'QtMeisai.UnempInsuranceFlg') == '0') {
									echo '非該当';
								} else if(Hash::get($meisaiInfo, 'QtMeisai.UnempInsuranceFlg') == '1') {
									echo '該当';
								}
						?></td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
				</table>
			</div><!-- //.wrap -->
		</div><!-- //#tab3content -->

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
						<td class="right"><?php echo $this->SalaryForm->number_format(Hash::get($meisaiInfo, 'QtMeisai.EndTermAllowUniformBasic_Salary')); ?></td>
						<td class="pdL20 bdR"><?php echo Hash::get($meisaiInfo, 'QtMeisai.EndTermAllowMonths'); ?>月</td>
						<th class="pdL20">《一律分》</th>
						<th>給料</th>
						<td class="right"><?php echo $this->SalaryForm->number_format(Hash::get($meisaiInfo, 'QtMeisai.DiligenceAllowUniformBasic_Salary')); ?></td>
						<td class="pdL20"><?php echo Hash::get($meisaiInfo, 'QtMeisai.DiligenceAllowMonths'); ?>月</td>
						<td class="bdR">&nbsp;</td>
						<td class="pdL20"><?php echo Hash::get($meisaiInfo, 'QtMeisai.NecessaryAdjust_ModificationRatio'); ?>％</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<th>扶養</th>
						<td class="right"><?php echo $this->SalaryForm->number_format(Hash::get($meisaiInfo, 'QtMeisai.EndTermAllowUniformBasic_Dependent')); ?></td>
						<th class="bdR">■支給割合</th>
						<td>&nbsp;</td>
						<th>扶養</th>
						<td class="right"><?php echo $this->SalaryForm->number_format(Hash::get($meisaiInfo, 'QtMeisai.DiligenceAllowUniformBasic_Dependent')); ?></td>
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
						<td class="right"><?php echo $this->SalaryForm->number_format(Hash::get($meisaiInfo, 'QtMeisai.EndTermAllowUniformBasic_Local')); ?></td>
						<td class="pdL20 bdR"><?php echo Hash::get($meisaiInfo, 'QtMeisai.EndTermAllowRatio'); ?>％</td>
						<td>&nbsp;</td>
						<th>地域</th>
						<td class="right"><?php echo $this->SalaryForm->number_format(Hash::get($meisaiInfo, 'QtMeisai.DiligenceAllowUniformBasic_Local')); ?></td>
						<td class="pdL20"><?php echo Hash::get($meisaiInfo, 'QtMeisai.DiligenceAllowRatio'); ?>％</td>
						<td class="bdR">&nbsp;</td>
						<td class="pdL20"><?php echo Hash::get($meisaiInfo, 'QtMeisai.NecessaryAdjust_AdjustMonths'); ?>月</td>
						<td>（減じる月数</td>
						<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.NecessaryAdjust_DeductMonths'); ?>月）</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<th>合計</th>
						<td class="right"><?php echo $this->SalaryForm->number_format(Hash::get($meisaiInfo, 'QtMeisai.EndTermAllowUniformBasic_Total')); ?></td>
						<td class="bdR">&nbsp;</td>
						<td>&nbsp;</td>
						<th>合計</th>
						<td class="right"><?php echo $this->SalaryForm->number_format(Hash::get($meisaiInfo, 'QtMeisai.DiligenceAllowUniformBasic_Total')); ?></td>
						<td>&nbsp;</td>
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
						<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.EndTermAllowBasic_JobDutyRatio'); ?>％</td>
						<td class="bdR">&nbsp;</td>
						<th class="pdL20">《職務級加算》</th>
						<th>加算率</th>
						<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.DiligenceAllowBasic_JobDutyRatio'); ?>％</td>
						<th>■成績率</th>
						<td class="bdR">&nbsp;</td>
						<th class="pdL20">例月分</th>
						<td class="right"><?php echo $this->SalaryForm->number_format(Hash::get($meisaiInfo, 'QtMeisai.NecessaryAdjust_MonthlyAdjust')); ?></td>
						<td>&nbsp;</td>
						<td><label><input type="checkbox" name="" value="" <?php if(Hash::get($meisaiInfo, 'QtMeisai.NecessaryAdjust_EndDiligenceDiv') === '1') echo 'checked'; ?> disabled>期末手当</label></td>
						<td><label><input type="checkbox" name="" value="" <?php if(Hash::get($meisaiInfo, 'QtMeisai.NecessaryAdjust_DiligenceAllowDiv') === '1') echo 'checked'; ?> disabled>勤勉手当</label></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<th>金額</th>
						<td class="right"><?php echo $this->SalaryForm->number_format(Hash::get($meisaiInfo, 'QtMeisai.EndTermAllowBasic_JobDutyAmo')); ?></td>
						<td class="bdR">&nbsp;</td>
						<td>&nbsp;</td>
						<th>金額</th>
						<td class="right"><?php echo $this->SalaryForm->number_format(Hash::get($meisaiInfo, 'QtMeisai.DiligenceAllowBasic_JobDutyAmo')); ?></td>
						<td class="pdL20"><?php echo Hash::get($meisaiInfo, 'QtMeisai.DiligenceAllowRecordJudgeDiv'); ?></td>
						<td class="bdR"><?php echo Hash::get($meisaiInfo, 'QtMeisai.CodeName_RecordJudgeDivName'); ?></td>
						<th class="pdL20">3月期末勤勉</th>
						<td class="right"><?php echo $this->SalaryForm->number_format(Hash::get($meisaiInfo, 'QtMeisai.NecessaryAdjust_MarDiligenceAllowAdjust')); ?></td>
						<td>&nbsp;</td>
						<th><?php if(Hash::get($meisaiInfo, 'QtMeisai.NecessaryAdjust_EndDiligenceDiv') == '1') {
									echo '調整前期末手当額';
								}
						?></th>
						<td class="right"><?php if(Hash::get($meisaiInfo, 'QtMeisai.NecessaryAdjust_EndDiligenceDiv') == '1') {
									echo $this->SalaryForm->number_format(Hash::get($meisaiInfo, 'QtMeisai.NecessaryAdjust_AllowBeforeAdjust'));
								}
						?></td>
					</tr>
					<tr>
						<th class="pdL20">《管理職加算》</th>
						<th>加算率</th>
						<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.EndTermAllowBasic_MgrAddRatio'); ?>％</td>
						<td class="bdR">&nbsp;</td>
						<th class="pdL20">《管理職加算》</th>
						<th>加算率</th>
						<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.DiligenceAllowBasic_MgrAddRatio'); ?>％</td>
						<!--TODO 区分値の名称のテーブルがないため確認-->
						<td class="pdL20"><?php echo Hash::get($meisaiInfo, 'QtMeisai.DiligenceAllowRecordClass'); ?></td>
						<td class="bdR"><?php echo Hash::get($meisaiInfo, 'diligenceAllowRecordName'); ?></td>
						<th class="pdL20">6月期末勤勉</th>
						<td class="right"><?php echo $this->SalaryForm->number_format(Hash::get($meisaiInfo, 'QtMeisai.NecessaryAdjust_JunDiligenceAllowAdjust')); ?></td>
						<td>&nbsp;</td>
						<th><?php if(Hash::get($meisaiInfo, 'QtMeisai.NecessaryAdjust_DiligenceAllowDiv') == '1') {
									echo '調整前勤勉手当額';
								}
						?></th>
						<td class="right"><?php if(Hash::get($meisaiInfo, 'QtMeisai.NecessaryAdjust_DiligenceAllowDiv') == '1') {
									echo $this->SalaryForm->number_format(Hash::get($meisaiInfo, 'QtMeisai.NecessaryAdjust_DilAllowBeforeAdjust'));
								}
						?></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<th>金額</th>
						<td class="right"><?php echo $this->SalaryForm->number_format(Hash::get($meisaiInfo, 'QtMeisai.EndTermAllowBasic_MgrAddAmo')); ?></td>
						<td class="bdR">&nbsp;</td>
						<td>&nbsp;</td>
						<th>金額</th>
						<td class="right"><?php echo $this->SalaryForm->number_format(Hash::get($meisaiInfo, 'QtMeisai.DiligenceAllowBasic_MgrAddAmo')); ?></td>
						<th>■減額率</th>
						<td class="bdR">&nbsp;</td>
						<th class="pdL20">12月期末勤勉</th>
						<td class="right"><?php echo $this->SalaryForm->number_format(Hash::get($meisaiInfo, 'QtMeisai.NecessaryAdjust_DecDiligenceAllowAdjust')); ?></td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<th class="pdL20">《合計》</th>
						<td>&nbsp;</td>
						<td class="right"><?php echo $this->SalaryForm->number_format(Hash::get($meisaiInfo, 'QtMeisai.EndTermAllowBasic_Total')); ?></td>
						<td class="bdR">&nbsp;</td>
						<th class="pdL20">《合計》</th>
						<td>&nbsp;</td>
						<td class="right"><?php echo $this->SalaryForm->number_format(Hash::get($meisaiInfo, 'QtMeisai.DiligenceAllowBasic_Total')); ?></td>
						<td class="pdL20"><?php echo Hash::get($meisaiInfo, 'QtMeisai.DiligenceAllowDeductRatio'); ?>％</td>
						<td class="bdR">&nbsp;</td>
						<th class="pdL20">合計</th>
						<td class="right"><?php echo $this->SalaryForm->number_format(Hash::get($meisaiInfo, 'QtMeisai.NecessaryAdjust_AdjustAmo')); ?></td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
				</table>
			</div><!-- //.wrap -->
		</div><!-- //#tab04content -->

<!-- ============================== タブ05【超勤・休日・夜勤】============================== -->
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
									<td><p>125</p></td>
									<td><p><?php echo Hash::get($meisaiInfo, 'QtMeisai.OverTimesTotal125'); ?></p></td>
								</tr>
								<tr>
									<td><p>150</p></td>
									<td><p><?php echo Hash::get($meisaiInfo, 'QtMeisai.OverTimesTotal150'); ?></p></td>
								</tr>
								<tr>
									<td><p>135</p></td>
									<td><p><?php echo Hash::get($meisaiInfo, 'QtMeisai.OverTimesTotal135'); ?></p></td>
								</tr>
								<tr>
									<td><p>160</p></td>
									<td><p><?php echo Hash::get($meisaiInfo, 'QtMeisai.OverTimesTotal160'); ?></p></td>
								</tr>
								<tr>
									<td><p>100</p></td>
									<td><p><?php echo Hash::get($meisaiInfo, 'QtMeisai.OverTimesTotal100'); ?></p></td>
								</tr>
								<tr>
									<td><p>25</p></td>
									<td><p><?php echo Hash::get($meisaiInfo, 'QtMeisai.OverTimesTotal25'); ?></p></td>
								</tr>
								<tr>
									<td><p>前月25</p></td>
									<td><p><?php echo Hash::get($meisaiInfo, 'QtMeisai.OverTimesTotal25_Pre'); ?></p></td>
								</tr>
								<tr>
									<td><p>割増150</p></td>
									<td><p><?php echo Hash::get($meisaiInfo, 'QtMeisai.Over60TimesTotal150'); ?></p></td>
								</tr>
								<tr>
									<td><p>割増175</p></td>
									<td><p><?php echo Hash::get($meisaiInfo, 'QtMeisai.Over60TimesTotal175'); ?></p></td>
								</tr>
								<tr>
									<td><p>割増50</p></td>
									<td><p><?php echo Hash::get($meisaiInfo, 'QtMeisai.Over60TimesTotal50'); ?></p></td>
								</tr>
								<tr>
									<td><p>割増前50</p></td>
									<td><p><?php echo Hash::get($meisaiInfo, 'QtMeisai.Over60TimesTotal50_Pre'); ?></p></td>
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
										<?php foreach ($meisaiUchiChokinList as $meisaiUchiChokin): ?>
											<tr>
												<td><p><?php echo Hash::get($meisaiUchiChokin, 'QtMeisaiUchiChokin.AllowDetailCD'); ?></p></td>
												<td><p><?php echo Hash::get($meisaiUchiChokin, 'QtMeisaiUchiChokin.AccountCD'); ?></p></td>
												<td><p><?php echo Hash::get($meisaiUchiChokin, 'accountShortName'); ?></p></td>
												<td class="right"><p><?php echo Hash::get($meisaiUchiChokin, 'QtMeisaiUchiChokin.WorkHours_OT'); ?></p></td>
												<td class="right"><p><?php echo $this->SalaryForm->number_format(Hash::get($meisaiUchiChokin, 'QtMeisaiUchiChokin.Payments')); ?></p></td>
											</tr>
										<?php endforeach; ?>
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
									<td><p><?php echo Hash::get($meisaiInfo, 'QtMeisai.HolidayWorkTimesTotal'); ?></p></td>
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
								<td><p><?php echo Hash::get($meisaiInfo, 'QtMeisai.NightShiftTimesTotal'); ?></p></td>
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
										<?php foreach ($meisaiUchiKyujitukyuList as $meisaiUchiKyujitukyu): ?>
											<tr>
												<td><p><?php echo Hash::get($meisaiUchiKyujitukyu, 'QtMeisaiUchiKyujitukyu.AllowDetailCD'); ?></p></td>
												<td><p><?php echo Hash::get($meisaiUchiKyujitukyu, 'QtMeisaiUchiKyujitukyu.AccountCD'); ?></p></td>
												<td><p><?php echo Hash::get($meisaiUchiKyujitukyu, 'accountShortName'); ?></p></td>
												<td class="right"><p><?php echo Hash::get($meisaiUchiKyujitukyu, 'QtMeisaiUchiKyujitukyu.WorkHours_HO'); ?></p></td>
												<td class="right"><p><?php echo $this->SalaryForm->number_format(Hash::get($meisaiUchiKyujitukyu, 'QtMeisaiUchiKyujitukyu.Payments')); ?></p></td>
											</tr>
										<?php endforeach; ?>
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
										<?php foreach ($meisaiUchiYakinList as $meisaiUchiYakin): ?>
											<tr>
												<td><p><?php echo Hash::get($meisaiUchiYakin, 'QtMeisaiUchiYakin.AllowDetailCD'); ?></p></td>
												<td><p><?php echo Hash::get($meisaiUchiYakin, 'QtMeisaiUchiYakin.AccountCD'); ?></p></td>
												<td><p><?php echo Hash::get($meisaiUchiYakin, 'accountShortName'); ?></p></td>
												<td class="right"><p><?php echo Hash::get($meisaiUchiYakin, 'QtMeisaiUchiYakin.WorkHours_ON'); ?></p></td>
												<td class="right"><p><?php echo $this->SalaryForm->number_format(Hash::get($meisaiUchiYakin, 'QtMeisaiUchiYakin.Payments')); ?></p></td>
											</tr>
										<?php endforeach; ?>
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
					<table class="y_data_title">
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
					<div class="y_scroll_box max_h02">
						<div class="y_hidden">
							<table class="y_data">
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
								<?php $num = 0; ?>
								<?php foreach ($meisaiUchiTokkinList as $meisaiUchiTokkin): ?>
								<?php $num++; ?>
								<?php // 奇数個目のデータのときはtr開始タグを入れる ?>
								<?php if($num % 2 === 1){ ?>
								<tr>
								<?php } ?>
									<td>&nbsp;</td>
									<td><?php echo Hash::get($meisaiUchiTokkin, 'QtMeisaiUchiTokkin.AllowDetailCD'); ?></td>
									<td><?php echo Hash::get($meisaiUchiTokkin, 'QtMeisaiUchiTokkin.CodeName_AllowDetailName'); ?></td>
									<td><?php echo Hash::get($meisaiUchiTokkin, 'QtMeisaiUchiTokkin.AccountCD'); ?></td>
									<td><?php echo Hash::get($meisaiUchiTokkin, 'accountShortName'); ?></td>
									<td class="right"><?php echo Hash::get($meisaiUchiTokkin, 'QtMeisaiUchiTokkin.WorkTiimes_UQ'); ?></td>
									<td class="right"><?php echo $this->SalaryForm->number_format(Hash::get($meisaiUchiTokkin, 'QtMeisaiUchiTokkin.Payments')); ?></td>
								<?php // 偶数個目のデータのときはtr終了タグを入れる ?>
								<?php if($num % 2 === 0){ ?>
								</tr>
								<?php } ?>
								<?php endforeach; ?>
								<?php // データが奇数のときはtr終了タグを入れる ?>
								<?php if($num % 2 === 1){ ?>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<?php } ?>
							</table>
						</div>
					</div><!-- //内訳 -->
				</div><!-- //↑■特殊勤務手当 -->

<!-- ↓■宿日直手当 -->
				<div class="y_data_area">
<!-- ↓タイトル -->
					<table class="y_data_title">
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
					<div class="y_scroll_box max_h02">
						<div class="y_hidden">
							<table class="y_data">
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
								<?php $num = 0; ?>
								<?php foreach ($meisaiUchiShukuList as $meisaiUchiShuku): ?>
								<?php // 奇数個目のデータのときはtr開始タグを入れる ?>
								<?php $num++; ?>
								<?php if($num % 2 === 1){ ?>
								<tr>
								<?php } ?>
									<td>&nbsp;</td>
									<td><?php echo Hash::get($meisaiUchiShuku, 'QtMeisaiUchiShuku.AllowDetailCD'); ?></td>
									<td><?php echo Hash::get($meisaiUchiShuku, 'QtMeisaiUchiShuku.CodeName_AllowDetailName'); ?></td>
									<td><?php echo Hash::get($meisaiUchiShuku, 'QtMeisaiUchiShuku.AccountCD'); ?></td>
									<td><?php echo Hash::get($meisaiUchiShuku, 'accountShortName'); ?></td>
									<td class="right"><?php echo Hash::get($meisaiUchiShuku, 'QtMeisaiUchiShuku.WorkTimes_ND'); ?></td>
									<td class="right"><?php echo $this->SalaryForm->number_format(Hash::get($meisaiUchiShuku, 'QtMeisaiUchiShuku.Payments')); ?></td>
								<?php // 偶数個目のデータのときはtr終了タグを入れる ?>
								<?php if($num % 2 === 0){ ?>
								</tr>
								<?php } ?>
								<?php endforeach; ?>
								<?php // データが奇数のときはtr終了タグを入れる ?>
								<?php if($num % 2 === 1){ ?>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<?php } ?>
							</table>
						</div>
					</div><!-- //内訳 -->
				</div><!-- //↑■宿日直手当 -->

<!-- ↓■管理職特勤 -->
				<div class="y_data_area">
<!-- ↓タイトル -->
					<table class="y_data_title">
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
					<div class="y_scroll_box max_h02">
						<div class="y_hidden">
							<table class="y_data">
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
								<?php $num = 0; ?>
								<?php foreach ($meisaiUchiKantokuList as $meisaiUchiKantoku): ?>
								<?php $num++; ?>
								<?php // 奇数個目のデータのときはtr開始タグを入れる ?>
								<?php if($num % 2 === 1){ ?>
								<tr>
								<?php } ?>
									<td>&nbsp;</td>
									<td><?php echo Hash::get($meisaiUchiKantoku, 'QtMeisaiUchiKantoku.AllowDetailCD'); ?></td>
									<td><?php echo Hash::get($meisaiUchiKantoku, 'QtMeisaiUchiKantoku.CodeName_AllowDetailName'); ?></td>
									<td><?php echo Hash::get($meisaiUchiKantoku, 'QtMeisaiUchiKantoku.AccountCD'); ?></td>
									<td><?php echo Hash::get($meisaiUchiKantoku, 'accountShortName'); ?></td>
									<td class="right"><?php echo Hash::get($meisaiUchiKantoku, 'QtMeisaiUchiKantoku.WorkTimes_AU'); ?></td>
									<td class="right"><?php echo $this->SalaryForm->number_format(Hash::get($meisaiUchiKantoku, 'QtMeisaiUchiKantoku.Payments')); ?></td>
								<?php // 偶数個目のデータのときはtr終了タグを入れる ?>
								<?php if($num % 2 === 0){ ?>
								</tr>
								<?php } ?>
								<?php endforeach; ?>
								<?php // データが奇数のときはtr終了タグを入れる ?>
								<?php if($num % 2 === 1){ ?>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
								<?php } ?>
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
					<?php foreach ($meisaiUchiNorituList as $meisaiUchiNoritu): ?>
						<tr>
							<td>&nbsp;</td>
							<td><?php echo Hash::get($meisaiUchiNoritu, 'QtMeisaiUchiNoritu.AllowDetailCD'); ?></td>
							<td><?php echo Hash::get($meisaiUchiNoritu, 'QtMeisaiUchiNoritu.CodeName_AllowDetailName'); ?></td>
							<td><?php echo Hash::get($meisaiUchiNoritu, 'QtMeisaiUchiNoritu.AccountCD'); ?></td>
							<td><?php echo Hash::get($meisaiUchiNoritu, 'accountShortName'); ?></td>
							<td class="right"><?php echo Hash::get($meisaiUchiNoritu, 'QtMeisaiUchiNoritu.EfficiencyWagesTimes'); ?></td>
							<td class="right"><?php echo $this->SalaryForm->number_format(Hash::get($meisaiUchiNoritu, 'QtMeisaiUchiNoritu.EfficiencyWagesAmount')); ?></td>
							<td class="right"><?php echo $this->SalaryForm->number_format(Hash::get($meisaiUchiNoritu, 'QtMeisaiUchiNoritu.Payments')); ?></td>
						</tr>
					<?php endforeach; ?>
					</table>
				</div><!-- //.wrap scroll h01 -->
			</div><!-- //.wrap bdT_blue bdB_blue -->
		</div><!-- //#tab07content -->

<!-- ============================== タブ08【旅費・その他支給】============================== -->
		<div id="tab08content" class="tabContent">
			<div class="wrap bdT_blue bdB_blue">
				<table class="tbl02 w04 w03">
					<tr>
						<th>■旅費</th>
						<th>コード</th>
						<th>名称</th>
						<th>支出所属</th>
						<th>所属名</th>
						<th>科目コード</th>
						<th>科目名称</th>
						<th>金額</th>
					</tr>
				</table>
				<div class="wrap scroll h02">
					<table class="tbl02 w04">
						<?php foreach ($meisaiUchiRyohiList as $meisaiUchiRyohi): ?>
							<tr>
								<td>&nbsp;</td>
								<td><?php echo Hash::get($meisaiUchiRyohi, 'QtMeisaiUchiRyohi.TravelExpTypeCD'); ?></td>
								<td><?php echo Hash::get($meisaiUchiRyohi, 'QtMeisaiUchiRyohi.CodeName_AllowanceName'); ?></td>
								<td><?php echo Hash::get($meisaiUchiRyohi, 'QtMeisaiUchiRyohi.ExpendDepCD'); ?></td>
								<td><?php echo Hash::get($meisaiUchiRyohi, 'deptShortName'); ?></td>
								<td><?php echo Hash::get($meisaiUchiRyohi, 'QtMeisaiUchiRyohi.AccountCD'); ?></td>
								<td><?php echo Hash::get($meisaiUchiRyohi, 'accountShortName'); ?></td>
								<td class="right"><?php echo $this->SalaryForm->number_format(Hash::get($meisaiUchiRyohi, 'QtMeisaiUchiRyohi.ExpenseAmount')); ?></td>
							</tr>
						<?php endforeach; ?>
					</table>
				</div><!-- //.wrap scroll h02 -->
				<table class="tbl02 w02 w03">
					<tr>
						<th>■その他支給</th>
						<th>コード</th>
						<th>名称</th>
						<th>枝番</th>
						<th>金額</th>
						<th>&nbsp;</th>
						<th>コード</th>
						<th>名称</th>
						<th>枝番</th>
						<th>金額</th>
					</tr>
					<?php $num = 1; ?>
					<?php foreach ($meisaiUchiSonotasikyuList as $meisaiUchiSonotasikyu): ?>
						<?php // 奇数個目のデータのときはtr開始タグを入れる ?>
						<?php if($num % 2 === 1){ ?>
						<tr>
						<?php } ?>
							<td>&nbsp;</td>
							<td><?php echo Hash::get($meisaiUchiSonotasikyu, 'QtMeisaiUchiSonotasikyu.EtcTypeCD'); ?></td>
							<td><?php echo Hash::get($meisaiUchiSonotasikyu, 'QtMeisaiUchiSonotasikyu.CodeName_EtcTypeName'); ?></td>
							<td><?php echo Hash::get($meisaiUchiSonotasikyu, 'QtMeisaiUchiSonotasikyu.SeqNo'); ?></td>
							<td class="right"><?php echo $this->SalaryForm->number_format(Hash::get($meisaiUchiSonotasikyu, 'QtMeisaiUchiSonotasikyu.Amounts')); ?></td>
						<?php // 偶数個目のデータのときはtr終了タグを入れる ?>
						<?php if($num % 2 === 0){ ?>
						</tr>
						<?php } ?>
						<?php $num++; ?>
					<?php endforeach; ?>
					<?php // データが奇数のときはtr終了タグを入れる ?>
					<?php if($num % 2 === 1){ ?>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
						</tr>
					<?php } ?>
				</table>
			</div><!-- //.wrap bdT_blue bdB_blue -->
		</div><!-- //#tab08content -->

<!-- ============================== タブ09【福利控除】============================== -->
		<div id="tab09content" class="tabContent">
			<div class="wrap bdT_blue bdB_blue">
				<table class="tbl02 w02 w03">
					<tr>
						<th>■福利控除</th>
						<th>コード</th>
						<th>名称</th>
						<th>残回数</th>
						<th>金額</th>
						<th>&nbsp;</th>
						<th>コード</th>
						<th>名称</th>
						<th>残回数</th>
						<th>金額</th>
					</tr>
				</table>
				<div class="wrap scroll h01">
					<table class="tbl02 w02">
					<?php $num = 1; ?>
					<?php foreach ($meisaiUchiFukurikojoList as $meisaiUchiFukurikojo): ?>
						<?php // 奇数個目のデータのときはtr開始タグを入れる ?>
						<?php if($num % 2 === 1){ ?>
						<tr>
						<?php } ?>
							<td>&nbsp;</td>
							<td><?php echo Hash::get($meisaiUchiFukurikojo, 'QtMeisaiUchiFukurikojo.DeductionCD'); ?></td>
							<td><?php echo Hash::get($meisaiUchiFukurikojo, 'QtMeisaiUchiFukurikojo.CodeName_BenefitDeductMoneyTypeName'); ?></td>
							<td><?php echo Hash::get($meisaiUchiFukurikojo, 'QtMeisaiUchiFukurikojo.ReminderCnt'); ?></td>
							<td class="right"><?php echo $this->SalaryForm->number_format(Hash::get($meisaiUchiFukurikojo, 'QtMeisaiUchiFukurikojo.Amounts')); ?></td>
						<?php // 偶数個目のデータのときはtr終了タグを入れる ?>
						<?php if($num % 2 === 0){ ?>
						</tr>
						<?php } ?>
						<?php $num++; ?>
					<?php endforeach; ?>
					<?php // データが奇数のときはtr終了タグを入れる ?>
					<?php if($num % 2 === 1){ ?>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
						</tr>
					<?php } ?>
					</table>
				</div><!-- //.wrap scroll h01 -->
			</div><!-- //.wrap bdT_blue bdB_blue -->
		</div><!-- //#tab09content -->

<!-- ============================== タブ10【賃金】============================== -->
		<div id="tab10content" class="tabContent">
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
					<?php foreach ($meisaiUchiChinginList as $meisaiUchiChingin): ?>
						<tr>
							<td>&nbsp;</td>
							<td><?php echo Hash::get($meisaiUchiChingin, 'QtMeisaiUchiChingin.AllowDetailCD'); ?></td>
							<td><?php echo Hash::get($meisaiUchiChingin, 'QtMeisaiUchiChingin.CodeName_AllowDetailName'); ?></td>
							<td><?php echo Hash::get($meisaiUchiChingin, 'QtMeisaiUchiChingin.AccountCD'); ?></td>
							<td><?php echo Hash::get($meisaiUchiChingin, 'accountShortName'); ?></td>
							<td class="right"><?php echo Hash::get($meisaiUchiChingin, 'QtMeisaiUchiChingin.WorkTimes_LW'); ?></td>
							<td class="right"><?php echo $this->SalaryForm->number_format(Hash::get($meisaiUchiChingin, 'QtMeisaiUchiChingin.Payments')); ?></td>
						</tr>
					<?php endforeach; ?>
					</table>
				</div><!-- //.wrap scroll h01 -->
			</div><!-- //."wrap bdT_blue bdB_blue -->
		</div><!-- //#tab10content -->

	</div><!-- //#tabs -->

<!-- *********************************【フッター】********************************* -->
	<p id="footer"><input type="button" value="閉じる" class="btn01" onClick="window.close();" /></p>

</div><!-- //#container -->

<?php // 職員番号検索子画面の読み込み ?>
<?php echo $this->element('emp_search'); ?>

<?php // 検索子画面の読み込み ?>
<?php echo $this->element('common_search'); ?>

<?php // エラー画面の読み込み ?>
<?php echo $this->element('emp_error'); ?>

<script type="text/javascript">
<!--
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

// 日割レコードが複数かどうかのフラグを取得する(jQueryで使用する)
var hiwariMultiRecordFlg = "<?php echo $hiwariMultiRecordFlg; ?>";

// -->
</script>
