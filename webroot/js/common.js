$(function(){

	// [header] textResize setting
	$( '#textResize span' ).textresizer({
		target: "html",             // 対象要素
		type: "fontsize",                // サイズ指定方法
		sizes: [
			"12px",
			"14px",
			"16px"
		],// cssクラス
		selectedIndex: 1                 // 初期表示
	});

	// [sidebar] clinicNav opne and close
	$('.sidebar__clinicNav h3.area__name').click(
		function(){
			$(this).toggleClass('active');
			$(this).next('ul').slideToggle('fast');
		}
	);

	// [plugin] prettyPhoto trigger
	if( $("a[rel^='prettyPhoto']")[0] ){
		$("a[rel^='prettyPhoto']").prettyPhoto();
	}

});