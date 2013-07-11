<?php
	$this->append('script'); echo $this->Html->script(array('lib/jquery-1.9.1.min', 'salary/payroll001s')); $this->end();
	$this->append('css'); echo $this->Html->css(array('salary/common', 'payroll/common')); $this->end();
?>

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
				<td><?php echo Hash::get($hiwariInfo, 'QtMeisaiHiwari.CodeName_EmpDivName'); ?></td>
				<th>給与体系</th>
				<td><?php echo Hash::get($hiwariInfo, 'QtMeisaiHiwari.SalaryTypeCD'); ?></td>
				<td><?php echo Hash::get($hiwariInfo, 'QtMeisaiHiwari.CodeName_SalaryTypeName'); ?></td>
				<th>所属</th>
				<td><?php echo Hash::get($hiwariInfo, 'QtMeisaiHiwari.DepCD'); ?></td>
				<td>N・NN・NNNNN</td>
				<th>職層</th>
				<td><?php echo Hash::get($hiwariInfo, 'QtMeisaiHiwari.JobGradeCD'); ?></td>
				<td><?php echo Hash::get($hiwariInfo, 'QtMeisaiHiwari.CodeName_JobGradeName'); ?></td>
				<th>職務</th>
				<td><?php echo Hash::get($hiwariInfo, 'QtMeisaiHiwari.JobDutyCD'); ?></td>
				<td><?php echo Hash::get($hiwariInfo, 'QtMeisaiHiwari.CodeName_JobTypeName'); ?></td>
				<td>NNNNN</td>
			</tr>
		</table>

		<table class="tbl_01">
			<tr>
				<th>支出科目</th>
				<th>給料</th>
				<td>XX</td>
				<td>NNNNNNNNNN</td>
				<th>児童</th>
				<td>XX</td>
				<td>NNNNNNNNNN</td>
				<th>超勤</th>
				<td>XX</td>
				<td>NNNNNNNNNN</td>
				<th>休日給</th>
				<td>XX</td>
				<td>NNNNNNNNNN</td>
			</tr>
		</table>
	</div>

	<div class="box_01" id="tab01">
		<table class="tbl_01">
			<tr>
				<th>01 基本情報タブの内容が表示されます。</th>
				<td></td>
			</tr>
		</table>
	</div>

	<div class="box_01" id="tab02">
		<table class="tbl_01">
			<tr>
				<th>02 日割情報タブの内容が表示されます。</th>
				<td></td>
			</tr>
		</table>
	</div>

	<div class="box_01" id="tab03">
		<table class="tbl_01">
			<tr>
				<th>03 詳細情報タブの内容が表示されます。</th>
				<td></td>
			</tr>
		</table>
	</div>

	<div class="box_01" id="tab04">
		<table class="tbl_01">
			<tr>
				<th>04 期末勤勉詳細タブの内容が表示されます。</th>
				<td></td>
			</tr>
		</table>
	</div>

	<div class="box_01" id="tab05">
		<table class="tbl_01">
			<tr>
				<th>05 超勤・休日・夜勤タブの内容が表示されます。</th>
				<td></td>
			</tr>
		</table>
	</div>

	<div class="box_01" id="tab06">
		<table class="tbl_01">
			<tr>
				<th>06 特勤・宿日直・管特タブの内容が表示されます。</th>
				<td></td>
			</tr>
		</table>
	</div>

	<div class="box_01" id="tab07">
		<table class="tbl_01">
			<tr>
				<th>07 能率給タブの内容が表示されます。</th>
				<td></td>
			</tr>
		</table>
	</div>

	<div class="box_01" id="tab08">
		<table class="tbl_01">
			<tr>
				<th>08 旅費・その他支給タブの内容が表示されます。</th>
				<td></td>
			</tr>
		</table>
	</div>

	<div class="box_01" id="tab09">
		<table class="tbl_01">
			<tr>
				<th>09 福利控除タブの内容が表示されます。</th>
				<td></td>
			</tr>
		</table>
	</div>

	<div class="box_01" id="tab10">
		<table class="tbl_01">
			<tr>
				<th>10 賃金タブの内容が表示されます。</th>
				<td></td>
			</tr>
		</table>
	</div>