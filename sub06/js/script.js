$(function(){
	// alert('a');
	//데이터
	var tbody = $('#conSection');
	$.ajax({
		url:'data.xml',
		dataType:'xml',
		success:function(xml){
			var conSection = $(xml);
			conSection.find('person').each(function(){
				var person = $(this);
				var text_no = person.find('no').text();
				var text_title = person.find('title').text();
				var text_name = person.find('name').text();
				var text_date = person.find('date').text();
				var text_hits = person.find('hits').text();
				var text_content = person.find('content').text();
				var tr = $('<div class="middle"/>');
				var no = $('<div class="title1"/>').html(text_no);
				var title = $('<div class="title2 cf label"/>').html(text_title);
				var name = $('<div class="title3"/>').html(text_name);
				var date = $('<div class="title4"/>').html(text_date);
				var hits = $('<div class="title5"/>').html(text_hits);
				var content = $('<div class="content"/>').html(text_content);
				tr.append(no);
				tr.append(title);
				tr.append(name);
				tr.append(date);
				tr.append(hits);
				tr.append(content);
				tbody.append(tr);
			});
		}
	});
	// QnA게시판
	$('#conSection').each(function(){
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
	// 가이드 텍스트
	var guideClass = 'gray';
	$('.guide').each(function(){
		var guide = this.defaultValue;
		var element = $(this);
		element.focus(function(){
			if(element.val()===guide){
				element.val('');
				element.removeClass(guideClass);
			};
		});
		element.blur(function(){
			if(element.val()===''){
				element.val(guide);
				element.addClass(guideClass);
			};
		});	
		if(element.val() === guide){
			element.addClass(guideClass);
		}
	});		
});