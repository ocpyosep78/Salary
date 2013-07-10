<?php
	$this->append('script'); echo $this->Html->script(array('lib/jquery-1.9.1.min')); $this->end();
	$this->append('css');    echo $this->Html->css(array('salary/common'));    $this->end();
?>

<div class="box_01">
	<p>■超過勤務手当</p>
	<p>≪時間数合計≫</p>
	<table class="tbl_02">
		<tr>
			<th>125</th>
			<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.OverTimesTotal125'); ?></td>
		</tr>
		<tr>
			<th>150</th>
			<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.OverTimesTotal150'); ?></td>
		</tr>
		<tr>
			<th>135</th>
			<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.OverTimesTotal135'); ?></td>
		</tr>
		<tr>
			<th>160</th>
			<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.OverTimesTotal160'); ?></td>
		</tr>
		<tr>
			<th>100</th>
			<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.OverTimesTotal100'); ?></td>
		</tr>
		<tr>
			<th>25</th>
			<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.OverTimesTotal25'); ?></td>
		</tr>
		<tr>
			<th>前月25</th>
			<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.OverTimesTotal25_Pre'); ?></td>
		</tr>
		<tr>
			<th>割増150</th>
			<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.Over60TimesTotal150'); ?></td>
		</tr>
		<tr>
			<th>割増175</th>
			<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.Over60TimesTotal175'); ?></td>
		</tr>
		<tr>
			<th>割増50</th>
			<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.Over60TimesTotal50'); ?></td>
		</tr>
		<tr>
			<th>割増前50</th>
			<td><?php echo Hash::get($meisaiInfo, 'QtMeisai.Over60TimesTotal50_Pre'); ?></td>
		</tr>
	</table>

	<p>≪内訳≫</p>
	<table class="tbl_02">
		<tr>
			<th>コード</th>
			<th>科目コード</th>
			<th>科目名称</th>
			<th>時間数</th>
			<th>支給額</th>
		</tr>
		<?php foreach ($meisaiUchiChokinList as $meisaiUchiChokin): ?>
			<tr>
				<td><?php echo Hash::get($meisaiUchiChokin, 'QtMeisaiUchiChokin.AllowDetailCD'); ?></td>
				<td><?php echo Hash::get($meisaiUchiChokin, 'QtMeisaiUchiChokin.AccountCD'); ?></td>
				<td><?php echo Hash::get($meisaiUchiChokin, 'QtMeisaiUchiChokin.CodeName_AccountName'); ?></td>
				<td><?php echo Hash::get($meisaiUchiChokin, 'QtMeisaiUchiChokin.WorkHours_OT'); ?></td>
				<td><?php echo Hash::get($meisaiUchiChokin, 'QtMeisaiUchiChokin.Payments'); ?></td>
			</tr>
		<?php endforeach; ?>
	</table>

	<p>■休日給</p>
	≪時間数合計≫
	<?php echo Hash::get($meisaiInfo, 'QtMeisai.HolidayWorkTimesTotal'); ?>

	<p>≪内訳≫</p>
	<table class="tbl_02">
		<tr>
			<th>コード</th>
			<th>科目コード</th>
			<th>科目名称</th>
			<th>時間数</th>
			<th>支給額</th>
		</tr>
		<?php foreach ($meisaiUchiKyujitukyuList as $meisaiUchiKyujitukyu): ?>
			<tr>
				<td><?php echo Hash::get($meisaiUchiKyujitukyu, 'QtMeisaiUchiKyujitukyu.AllowDetailCD'); ?></td>
				<td><?php echo Hash::get($meisaiUchiKyujitukyu, 'QtMeisaiUchiKyujitukyu.AccountCD'); ?></td>
				<td><?php echo Hash::get($meisaiUchiKyujitukyu, 'QtMeisaiUchiKyujitukyu.CodeName_AccountName'); ?></td>
				<td><?php echo Hash::get($meisaiUchiKyujitukyu, 'QtMeisaiUchiKyujitukyu.WorkHours_HO'); ?></td>
				<td><?php echo Hash::get($meisaiUchiKyujitukyu, 'QtMeisaiUchiKyujitukyu.Payments'); ?></td>
			</tr>
		<?php endforeach; ?>
	</table>
</div><!-- //.box_01 -->
