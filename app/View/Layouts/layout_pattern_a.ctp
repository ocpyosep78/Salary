<!DOCTYPE html>
	<head>
		<?php echo $this->Html->charset(); /* Defaults to UTF-8 */ ?>
		<title>
			<?php echo $title_for_layout; ?>
		</title>

		<?php
			// フロント画面用の共通のCSSファイルを読み込み
			echo $this->Html->css(array('salary/common'));
		?>

		<?php
			// 各画面で記述された個別のcss, scriptタグ読み込み
			echo $this->fetch('css');
		?>
	</head>

	<?php
		// SQLの最下層まで実行状況を表示する設定
		ini_set('xdebug.var_display_max_depth', 20);
	?>

	<body>
		<div id="container">
			<?php echo $this->element('header'); // フロント画面用ヘッダー ?>

			<?php echo $this->fetch('content'); ?>
		</div>

		<?php
			// フロント画面用の共通のJSファイルを読み込み
			echo $this->Html->script(array('user/jquery-1.9.0.min', 'user/lib'));
			echo $this->fetch('script');
		?>

	</body>
</html>
