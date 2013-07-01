<!DOCTYPE html>
	<head>
		<?php echo $this->Html->charset(); /* Defaults to UTF-8 */ ?>
		<title>
			<?php echo $title_for_layout; ?>
		</title>

		<?php
			// フロント画面用の共通のCSSファイルを読み込み
			//echo $this->Html->css(array('properpay/common'));

			echo $this->Html->css(array('PIE.htc'));
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

		<?php echo $this->fetch('content'); ?>

		<?php
			// フロント画面用の共通のJSファイルを読み込み
			$this->append('script');
				echo $this->Html->script(array('lib/jquery-1.9.1.min', 'salary/common_search'));
			$this->end();

			// 各画面で記述された個別のscriptタグ読み込み
			echo $this->fetch('script');
		?>

	</body>
</html>
