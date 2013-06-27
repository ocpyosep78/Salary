<?php
	// スクリプトで、この画面特有のものを差し込むときの書き方。（この画面では選択されたレコードを詳細エリアに転記するなどの処理）
	//$this->append('script'); echo $this->Html->script(array('lib/jquery-1.9.1.min', 'salary/s003_index')); $this->end();
	// スタイルシートで、この画面特有のものを差し込むときの書き方。（この画面では必要無いのでコメントアウト）
	$this->append('css');
		echo $this->Html->css(array('paymaster/common'));
	$this->end();
?>

<?php echo $this->SalaryForm->create('PayMaster001s', array('controller' => 'PayMaster001s', 'action' => 'search')); ?>
	<table class="t_header">
		<tr>
			<th>職員番号</th>
			<td>
				<input type="text" name="empNo" value="" /><button type="button" name="" value="">？</button>
			</td>
			<th class="tb_02">氏名</th>
			<td><?php echo $jtKihonKihon['FamilyNameKana'].'　'.$jtKihonKihon['FirstNameKana']; ?></td>
			<th>職員区分</th>
			<td><?php echo $jtKihonKihon['EmpDiv'] ?></td>
			<td>NNNN</td>
			<td>TODO</td>
			<th class="tb_02">所属</th>
			<td>XXXXXX</td>
			<td class="td_02">N・NN・NNNNN</td>
			<th class="tb_02">勤務地</th>
			<td>XX</td>
			<td>NNNNNN</td>
			<td class="td1">
				<input id="Button1" type="submit" value="検索" />
			</td>
		</tr>
		<tr>
			<th>&nbsp;</th>
			<td>&nbsp;</td>
			<th>&nbsp;</th>
			<td><?php echo $jtKihonKihon['FamilyName'].'　'.$jtKihonKihon['FirstName']; ?></td>
			<th>職層</th>
			<td>XX</td>
			<td class="tb_02">NNNN</td>
			<th>職務</th>
			<td>XX</td>
			<td>NNNNNNNNNN</td>
			<td colspan="2">NN課予算</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td class="td1">
				<input id="Button1" type="submit" value="消去" />
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
			<td><?php echo $this->SalaryForm->getJapaneseEra($qtMasterKotei['PaidYM']) ?></td>
			<th>&nbsp;</th>
			<td><?php echo $jtKihonKihon['FamilyNameKana'].'　'.$jtKihonKihon['FirstNameKana']; ?></td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<th>職員番号</th>
			<td><?php echo $qtMasterKotei['EmpNo'] ?></td>
			<th>氏名</th>
			<td><?php echo $jtKihonKihon['FamilyName'].'　'.$jtKihonKihon['FirstName']; ?></td>
			<th>生年月日</th>
			<td><?php echo $this->SalaryForm->getJapaneseEra($qtMasterKotei['BirthDate']) ?></td>
			<th>年齢</th>
			<td>満<?php echo $this->SalaryForm->getAgeFromChristianEra($qtMasterKotei['BirthDate']) ?>歳</td>
			<th>前職員番号</th>
			<td><?php echo $qtMasterKotei['OldEmpNo'] ?></td>
		</tr>
	</table>

	<table class="tbl_03">
		<tr>
			<th>採用年月日</th>
			<td><?php echo $this->SalaryForm->getJapaneseEra($qtMasterKotei['RecruitedDate']) ?></td>
			<th>区勤務年月日</th>
			<td><?php echo $this->SalaryForm->getJapaneseEra($qtMasterKotei['WkStartDateAtWard']) ?></td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<th>当初任用開始年月日</th>
			<td><?php echo $this->SalaryForm->getJapaneseEra($qtMasterKotei['FirstApoDate']) ?></td>
			<th>任用開始年月日</th>
			<td><?php echo $this->SalaryForm->getJapaneseEra($qtMasterKotei['ApointStartDate']) ?></td>
			<th>任用終了年月日</th>
			<td><?php echo $this->SalaryForm->getJapaneseEra($qtMasterKotei['ApointEndDate']) ?></td>
		</tr>
	</table>

	<table class="tbl_02 bdT_01">
		<tr>
			<th>所属</th>
			<td><?php echo $qtMasterHiwari['DepCD'] ?></td>
			<td>N・NN・NNNNN</td>
			<th>勤務地</th>
			<td><?php echo substr($qtMasterHiwari['DepCD'], -2) ?></td>
			<td>NNNNNN</td>
			<th>役職</th>
			<td><?php echo $qtMasterHiwari['MgrCD'] ?></td>
			<td>NNNNNN</td>
			<th>職員区分</th>
			<td><?php echo $qtMasterHiwari['EmpDiv'] ?></td>
			<td>NNNNNN</td>
			<th>給与体系</th>
			<td><?php echo $qtMasterHiwari['SalaryTypeCD'] ?></td>
			<td>NNNNNN</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td class="td1">
				<input id="Button1" type="submit" value="兼務先情報" />
			</td>
		</tr>
		<tr>
			<th>職層</th>
			<td><?php echo $qtMasterHiwari['JobGradeCD'] ?></td>
			<td>NNNNNNNNNN</td>
			<th>職種職務</th>
			<td><?php echo $qtMasterHiwari['JobDutyCD'] ?></td>
			<td>NNNNNNNNNN</td>
			<th>&nbsp;</th>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<th>支払者</th>
			<td><?php echo $qtMasterHiwari['PayerDiv'] ?></td>
			<td>NNNNNN</td>
			<th>給与計算対象</th>
			<td>NNN</td>
			<td>NNNNNN</td>
			<td><?php echo $qtMasterHiwari['CoveredSalaryCalcFlg'] ?></td>
			<td>NNNNN</td>
			<td>&nbsp;</td>
		</tr>
	</table>

	<table class="tbl_02">
		<tr>
			<th>給料科目</th>
			<td><?php echo $qtMasterHiwari['SalaryRewardsAccountCD'] ?></td>
			<td>NNNNNNNNNNNNNNNNNNNN</td>
			<th>児童手当科目</th>
			<td><?php echo $qtMasterHiwari['ChildAllowAccountCD'] ?></td>
			<td>NNNNNNNNNNNNNNNNNNNN</td>
		</tr>
		<tr>
			<th>超勤科目</th>
			<td><?php echo $qtMasterHiwari['OverTimeWorkAccountCD'] ?></td>
			<td>NNNNNNNNNNNNNNNNNNNN</td>
			<th>休日給科目</th>
			<td><?php echo $qtMasterHiwari['HolidaySalaryAccountCD'] ?></td>
			<td>NNNNNNNNNNNNNNNNNNNN</td>
		</tr>
	</table>

	<table class="tbl_02">
		<tr>
			<th>勤務態様</th>
			<th>一日</th>
			<td><?php echo $qtMasterHiwari['WorkingTimesOfDayHour'] ?>時間<?php echo $qtMasterHiwari['WorkingTimesOfDayMinute'] ?>分</td>
			<th>一週間</th>
			<td><?php echo $qtMasterHiwari['WorkingDaysOfWeek'] ?>日勤務</td>
			<th>週の勤務時間</th>
			<td><?php echo $qtMasterHiwari['WorkingTimesOfWeekHour'] ?>時間<?php echo $qtMasterHiwari['WorkingTimesOfWeekMinute'] ?>分</td>
			<th>月の勤務日数</th>
			<td><?php echo $qtMasterHiwari['WorkingDaysOfMonth'] ?>日</td>
			<th>年の勤務日数</th>
			<td><?php echo $qtMasterHiwari['WorkingDaysOfYear'] ?>日</td>
			<th>その他</th>
			<td><?php echo $qtMasterHiwari['OtherDay'] ?>日</td>
			<td>／<?php echo $qtMasterHiwari['OtherMonth'] ?>月</td>
		</tr>
	</table>

	<table class="tbl_02">
		<tr>
			<th>給料/報酬</th>
			<td><?php echo $qtMasterHiwari['SalaryTable'] ?></td>
			<td>NNNNNN</td>
			<td><?php echo $qtMasterHiwari['SalaryClass'] ?>-<?php echo $qtMasterHiwari['SalaryGrade'] ?></td>
			<td>NN</td>
			<td>Z,ZZZ,ZZZ円</td>
			<td><label><input type="checkbox" name="" value="1" <?php if($qtMasterHiwari['SweeperAdditionFlg'] == 1) { echo 'checked'; } ?>>清掃加算対象</label></td>
			<th>単価算入特勤</th>
			<th>特勤コード</th>
			<td><?php echo $qtMasterHiwari['SpecificDutySalaryCD'] ?></td>
			<td>NNNNNN</td>
		</tr>
	</table>

	<table class="tbl_02">
		<tr>
			<th>現給保障</th>
			<td><?php echo $qtMasterHiwari['SalaryGuaranteeFlg'] ?></td>
			<th>開始年月日</th>
			<td><?php echo $this->SalaryForm->getJapaneseEra($qtMasterHiwari['SalaryGuaranteeStartDate']) ?></td>
			<td>～</td>
			<th>終了年月日</th>
			<td><?php echo $this->SalaryForm->getJapaneseEra($qtMasterHiwari['SalaryGuaranteeEndDate']) ?></td>
			<th>算入日数</th>
			<td>ZZ日</td>
		</tr>
		<tr>
			<th>&nbsp;</th>
			<th>現在の保障額</th>
			<td><?php echo $qtMasterHiwari['TableOnGuarantTable'] ?></td>
			<td>NNNNNN</td>
			<td><?php echo $qtMasterHiwari['ClassOnGuarantTable'] ?>-<?php echo $qtMasterHiwari['GradeOnGuarantTable'] ?></td>
			<th>Z,ZZZ,ZZZ円</th>
			<td>&nbsp;</td>
			<th>&nbsp;</th>
			<td>&nbsp;</td>
		</tr>
	</table>

	<table class="tbl_02 bdT_01">
		<tr>
			<th>月の要勤務日数</th>
			<td><?php echo $qtMasterHiwari['RequestedWorkingDaysOfMonth'] ?>日</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<th>勤怠事由</th>
			<td><?php echo $qtMasterHiwari['AttendanceOrderedReasonCD'] ?></td>
			<td>NNNNNN</td>
			<th>支給割合</th>
			<td><?php echo $qtMasterHiwari['PayRatio'] ?>％</td>
			<th>発令年月日</th>
			<td><?php echo $this->SalaryForm->getJapaneseEra($qtMasterHiwari['StartDateOfLayoff']) ?></td>
			<th>対象日数</th>
			<td><?php echo $qtMasterHiwari['ObjectDays'] ?>日</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<th>休職等終了年月日</th>
			<td><?php echo $this->SalaryForm->getJapaneseEra($qtMasterHiwari['EndDateOfLayoff']) ?></td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
	</table>
</div><!-- //.box_01 -->

<table id="footer">
	<tr>
		<td><input id="Button1" type="submit" value="閉じる" name="stop" /></td>
		<td>&nbsp;</td>
		<td><input id="Button1" type="submit" value="削除" name= "delete" /></td>
		<td><input id="Button1" type="button" value="修正" name="edit" /></td>
		<td><input id="Button1" type="submit" value="追加" name="add" /></td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td><input id="Button1" type="submit" value="前頁" name= "" /></td>
		<td><input id="Button1" type="submit" value="次頁" name= "" /></td>
		<td><input id="Button1" type="submit" value="戻る" name= "" /></td>
	</tr>
</table>