;(function($) {

	$("#PaidYMButton").click(function(){
		$("#PaidYM").ympicker({
		    closeText: '閉じる',
		    prevText: '<前',
		    nextText: '次>',
		    currentText: '今日',
		    monthNames: ['1月','2月','3月','4月','5月','6月','7月','8月','9月','10月','11月','12月'],
		    monthNamesShort: ['1月','2月','3月','4月','5月','6月','7月','8月','9月','10月','11月','12月'],
		    dateFormat: 'y.mm',
		    yearSuffix: '年'
		});
		$("#PaidYM").trigger("focus");
	});

	$("#PaidYM").change(function(){
		$("#PaidYM").ympicker('destroy');
	});

})(jQuery);