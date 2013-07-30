<!DOCTYPE html>
	<head>
		<?php echo $this->Html->charset(); /* Defaults to UTF-8 */ ?>
		<title>
			<?php echo $title_for_layout; ?>
		</title>

		<?php
			// フロント画面用の共通のCSSファイルを読み込み
			//echo $this->Html->css(array('properpay/common'));
		?>

		<link rel="stylesheet" type="text/css" href="/css/PIE.htc" />

		<?php
			// 各画面で記述された個別のcss, scriptタグ読み込み
			echo $this->fetch('css');
		?>

		<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/smoothness/jquery-ui.css" type="text/css">
	</head>

	<?php
		// SQLの最下層まで実行状況を表示する設定
		ini_set('xdebug.var_display_max_depth', 20);
	?>

	<body>

		<?php echo $this->fetch('content'); ?>

		<?php
			// フロント画面用の共通のJSファイルを読み込み
			echo $this->Html->script(array('lib/jquery-1.8.3', 'lib/jquery-ui.min', 'lib/jquery.ui.ympicker', 'lib/jquery.gpobservetext-1.0.min', 'salary/common', 'salary/common_search', 'salary/emp_search'));

			// 各画面で記述された個別のscriptタグ読み込み
			echo $this->fetch('script');
		?>

	</body>
</html>
