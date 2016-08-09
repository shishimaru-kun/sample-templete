$(function(){


//
// イベントトラッキング用 カスタムdata属性
//


// 【analytics.js（ユニバーサルアナリティクス版）】


	/* クリック用フリー（固定なし）

	data-fclk='["category", "action", "label"]'

	*/
	$('[data-fclk]')
		.click(
			function(){
				var fclk = $(this).data('fclk');
				ga('send', 'event', fclk[0], fclk[1], fclk[2]);
				// console.log(fclk);
			}
		)
	;

	/* インプレッション用フリー（固定なし）

	data-fimp='["category", "action", "label"]'

	*/
	$('[data-fimp]')
		.click(
			function(){
				var fimp = $(this).data('fimp');
				ga('send', 'event', fimp[0], fimp[1], fimp[2], {'nonInteraction': 1});
				// console.log(fimp);
			}
		)
	;

	/* クリック専用（アクションがclickで固定）

	data-clk='["category", "label"]'

	*/
	$('[data-clk]')
		.click(
			function(){
				var clk = $(this).data('clk');
				ga('send', 'event', clk[0], 'click', clk[1]);
				// console.log(clk);
			}
		)
	;

	/* インプレッション専用（アクションがimpressionで固定）

	data-imp='["category", "label"]'

	*/
	$('[data-imp]')
		.each(
			function(){
				var imp = $(this).data('imp');
				ga('send', 'event', imp[0], 'impression', imp[1], {'nonInteraction': 1});
				// console.log(imp);
			}
		)
	;

	/* インプレッション＆クリック（アクションがclickとimpressionで固定）

	data-impclk='["category", "label"]'

	*/
	$('[data-impclk]')
		.each(
			function(){
				var impclk = $(this).data('impclk');
				ga('send', 'event', impclk[0], 'impression', impclk[1], {'nonInteraction': 1});
				// console.log(impclk);
			}
		)
		.click(
			function(){
				var impclk = $(this).data('impclk');
				ga('send', 'event', impclk[0], 'click', impclk[1]);
				// console.log(impclk);
			}
		)
	;


});