<div id="footer">
	<input id="Button1" type="submit" value="閉じる" name="stop" />
	<?php
		echo $this->Form->button('修正',array('name'=>'edit'));

		echo $this->Form->end();
	?>
	<input id="Button1" type="button" value="修正" name="edit" />
	<input id="Button1" type="submit" value="追加" name="add" />
	<input id="Button1" type="submit" value="削除" name= "delete" />
</div>