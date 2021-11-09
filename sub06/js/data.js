$(function(){
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
				var no = $('<div class="title1"/>').text(text_no);
				var title = $('<div class="title2 cf label"/>').text(text_title);
				var name = $('<div class="title3"/>').text(text_name);
				var date = $('<div class="title4"/>').text(text_date);
				var hits = $('<div class="title5"/>').text(text_hits);
				var content = $('<div class="content"/>').text(text_content);
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
});