$(function(){
	// alert('a');
	$('#board').each(function(){
		var dl = $(this);
		var allDt = dl.find('.title2');
		var allDd = dl.find('.content');
		
		
		allDt.click(function(){
			var dt = $(this);
			var dd = dt.parent('div').find('.content');
			allDd.hide();
			dd.show();
			allDt.css('cursor','pointer');
			dt.css('cursor','default');
		});
	});
});