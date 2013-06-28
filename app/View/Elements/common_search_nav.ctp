<table class="tbl_01">
	<tr>
		<?php echo $this->SalaryForm->create(null, array('url'=>$this->Paginator->url(array('base'=>false)) )); ?>
		<td>
			<?php if($this->SalaryPaginator->hasPrev()): ?><?php echo $this->SalaryPaginator->prev('前ページ'); ?><?php endif; ?>
			<?php if($this->SalaryPaginator->hasNext()): ?><?php echo $this->SalaryPaginator->next('次ページ'); ?><?php endif; ?>
			<input type="text" name="data[page]" width="30" value="<?php echo $this->SalaryPaginator->counter('%page%'); ?>" />/ <?php echo $this->SalaryPaginator->counter('%pages%'); ?> </li>
			<input class="Button1" type="submit" value="ジャンプ"></li>
		</td>
		<?php echo $this->SalaryForm->end(); ?>
	</tr>
</table>