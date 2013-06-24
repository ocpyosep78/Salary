<div class="searchNav">
	<div class="paging">
		<?php echo $this->SalaryForm->create(null, array('url'=>$this->Paginator->url(array('base'=>false)) )); ?>
		<ul>
			<?php if($this->SalaryPaginator->hasPrev()): ?><li><?php echo $this->SalaryPaginator->prev('前ページ'); ?></li><?php endif; ?>
			<?php if($this->SalaryPaginator->hasNext()): ?><li><?php echo $this->SalaryPaginator->next('次ページ'); ?></li><?php endif; ?>
			<li><input type="text" name="data[page]" width="30" value="<?php echo $this->SalaryPaginator->counter('%page%'); ?>" />/ <?php echo $this->SalaryPaginator->counter('%pages%'); ?> </li>
			<li><input type="submit" class="Button1" value="ジャンプ"></li>
		</ul>
		<?php echo $this->SalaryForm->end(); ?>
	</div>
</div><!--/.searchNav-->