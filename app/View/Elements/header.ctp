<?php echo $this->SalaryForm->create('S003', array('controller' => 'S003', 'action' => 'search')); ?>

	<table class="t_header">
		<tr>
			<td>
				<p class="title">研修委託会社コード</p>
				<input type="text" name="consignmentCompanyCd" value="<?php echo Hash::get($searchCondition, 'consignmentCompanyCd'); ?>" /><button type="button" name="" value="">？</button>
				<p class="description">XXXXXXXXXXXXXXXXXXXXXXXXXXXX</p>
			</td>
			<td class="td1">
				<input id="Button1" type="submit" value="検索" />
				<input id="Button1" type="button" value="消去" />
			</td>
		</tr>
	</table>

</form>