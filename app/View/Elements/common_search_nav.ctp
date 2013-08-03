<table class="pagination box_common_search_header">
	<tr>
		<?php echo $this->SalaryForm->create(null, array('url'=>$this->Paginator->url(array('base'=>false)) )); ?>
			<td class="box_common_search_header_td01">
				<?php echo $this->SalaryPaginator->prev('前ページ'); ?>
			</td>
			<td class="box_common_search_header_td02">
				<?php echo $this->SalaryPaginator->next('次ページ'); ?>
			</td>
			<td class="box_common_search_header_td03">
				<input type="text" name="data[page]" width="30" value="<?php echo $this->SalaryPaginator->counter('%page%'); ?>" />/ <?php echo $this->SalaryPaginator->counter('%pages%'); ?>
			</td>
			<td class="box_common_search_header_td04">
				<input class="Button1 jump" type="submit" value="ジャンプ">
			</td>
		<?php echo $this->SalaryForm->end(); ?>
	</tr>
</table>