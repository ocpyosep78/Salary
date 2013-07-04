;(function($) {

	// 一覧部分で選択されたレコードを詳細部分に反映させる処理
	$(".selectableRecord").click(function(){

		$(this).parent().children().removeClass("active");
		$(this).addClass("active");
		$("#Code").html($(this).children("td.ConsignmentCompanyCD").html());
		$("#ConsignmentCompanyCD").val($(this).children("td.ConsignmentCompanyCD").html());
		$("#ConsignmentCompanyName").val($(this).children("td.ConsignmentCompanyName").html());
		$("#Representative").val($(this).children("td.Representative").html());
		$("#PostalCD1").val($(this).children("td.PostalCD").html().substr(0,3));
		$("#PostalCD2").val($(this).children("td.PostalCD").html().substr(4,7));
		$("#CityCD").val($(this).children("td.CityCD").html());
		$("#AddressKanji").val($(this).children("td.AddressKanji").html());
		$("#SideKanji").val($(this).children("td.SideKanji").html());
		$("#AddressKana").val($(this).children("td.AddressKana").html());
		$("#SideKana").val($(this).children("td.SideKana").html());
		$("#AccountExecutiveName").val($(this).children("td.AccountExecutiveName").html());
		$("#TelNo1").val($(this).children("td.TelNo1").html());
		$("#TelNo2").val($(this).children("td.TelNo2").html());
		$("#TelNo3").val($(this).children("td.TelNo3").html());
		$("#EmailAddresse1").val($(this).children("td.EmailAddresse1").html());
		$("#EmailAddresse2").val($(this).children("td.EmailAddresse2").html());
		$("#updated_date").html($(this).children("td.updated_date").html());
		$("#updated_by").html($(this).children("td.updated_by").html());

	});

	$(document).ready(function(){
	    $("table.tbl_02 tr:even").css({
	    	backgroundColor:'#edf9da'
	    });
	});

	$('table.tbl_02 tr').each(function(){
		var bgColor = $(this).css('backgroundColor');
		$(this).hover(function(){
			$(this).css({
				backgroundColor:'#b1e0fd'
			});
		},function(){
		    $("table.tbl_02 tr:odd").css({
		    	backgroundColor:'#ffffff'
		    });
		    $("table.tbl_02 tr:even").css({
		    	backgroundColor:'#edf9da'
		    });
		    $("tr.active").css({
		    	backgroundColor:'#b1e0fd'
		    });
		});
	});

})(jQuery);