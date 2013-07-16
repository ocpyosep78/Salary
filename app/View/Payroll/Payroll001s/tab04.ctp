<?php
	$this->append('script'); echo $this->Html->script(array('lib/jquery-1.9.1.min')); $this->end();
	$this->append('css');    echo $this->Html->css(array('payroll/common'));    $this->end();
?>

<div id="tab04content">
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
				<td><?php echo number_format(Hash::get($meisaiInfo, 'QtMeisai.EndTermAllowUniformBasic_Salary')); ?></td>
				<td class="pdL20 bdR"><?php echo Hash::get($meisaiInfo, 'QtMeisai.EndTermAllowMonths'); ?>月</td>
				<th class="pdL20">《一律分》</th>
				<th>給料</th>
				<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.DiligenceAllowUniformBasic_Salary'); ?></td>
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
				<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.EndTermAllowUniformBasic_Dependent'); ?></td>
				<th class="bdR">■支給割合</th>
				<td>&nbsp;</td>
				<th>扶養</th>
				<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.DiligenceAllowUniformBasic_Dependent'); ?></td>
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
				<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.EndTermAllowUniformBasic_Local'); ?></td>
				<td class="pdL20 bdR"><?php echo Hash::get($meisaiInfo, 'QtMeisai.EndTermAllowRatio'); ?>％</td>
				<td>&nbsp;</td>
				<th>地域</th>
				<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.DiligenceAllowUniformBasic_Local'); ?></td>
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
				<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.EndTermAllowUniformBasic_Total'); ?></td>
				<td class="bdR">&nbsp;</td>
				<td>&nbsp;</td>
				<th>合計</th>
				<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.DiligenceAllowUniformBasic_Total'); ?></td>
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
				<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.NecessaryAdjust_MonthlyAdjust'); ?></td>
				<td>&nbsp;</td>
				<!--TODO 区分値の要素について確認-->
				<td>◎期末手当</td>
				<td>◎勤勉手当</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<th>金額</th>
				<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.EndTermAllowBasic_JobDutyAmo'); ?></td>
				<td class="bdR">&nbsp;</td>
				<td>&nbsp;</td>
				<th>金額</th>
				<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.DiligenceAllowBasic_JobDutyAmo'); ?></td>
				<!--TODO 区分値の名称のテーブルがないため確認-->
				<td class="pdL20"><?php echo Hash::get($meisaiInfo, 'QtMeisai.DiligenceAllowRecordJudgeDiv'); ?></td>
				<td class="bdR"><?php echo Hash::get($meisaiInfo, 'QtMeisai.DiligenceAllowRecordJudgeDiv'); ?></td>
				<th class="pdL20">3月期末勤勉</th>
				<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.NecessaryAdjust_MarDiligenceAllowAdjust'); ?></td>
				<td>&nbsp;</td>
				<th>調整前手当額</th>
					<!--TODO 区分値の要素について確認-->
					<td><?php if(Hash::get($meisaiInfo, 'QtMeisai.NecessaryAdjust_AllowDiv') == 'A') {
								echo Hash::get($meisaiInfo, 'QtMeisai.NecessaryAdjust_AllowBeforeAdjust');
							} else {
								echo Hash::get($meisaiInfo, 'QtMeisai.NecessaryAdjust_DilAllowBeforeAdjust');
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
				<td class="bdR"><?php echo Hash::get($meisaiInfo, 'QtMeisai.DiligenceAllowRecordClass'); ?></td>
				<th class="pdL20">6月期末勤勉</th>
				<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.NecessaryAdjust_JunDiligenceAllowAdjust'); ?></td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<th>金額</th>
				<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.EndTermAllowBasic_MgrAddAmo'); ?></td>
				<td class="bdR">&nbsp;</td>
				<td>&nbsp;</td>
				<th>金額</th>
				<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.DiligenceAllowBasic_MgrAddAmo'); ?></td>
				<th>■減額率</th>
				<td class="bdR">&nbsp;</td>
				<th class="pdL20">12月期末勤勉</th>
				<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.NecessaryAdjust_DecDiligenceAllowAdjust'); ?></td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<th class="pdL20">《合計》</th>
				<td>&nbsp;</td>
				<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.EndTermAllowBasic_Total'); ?></td>
				<td class="bdR">&nbsp;</td>
				<th class="pdL20">《合計》</th>
				<td>&nbsp;</td>
				<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.DiligenceAllowBasic_Total'); ?></td>
				<td class="pdL20"><?php echo Hash::get($meisaiInfo, 'QtMeisai.DiligenceAllowDeductRatio'); ?>％</td>
				<td class="bdR">&nbsp;</td>
				<th class="pdL20">合計</th>
				<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.NecessaryAdjust_AdjustAmo'); ?></td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
		</table>
	</div><!-- //.wrap -->
</div><!-- //#tab04content -->
