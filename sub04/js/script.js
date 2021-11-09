$(function(){
	// alert('a');
	var current = 0;
	var thumbListSize = 4;
	var thumbnail = $('.thumbnail');
	var prev = thumbnail.find('>.left');
	var next = thumbnail.find('>.right');
	var container = thumbnail.find('>.container>ul');
	var containerWidth = thumbnail.find('>.container').width();
	// console.log(containerWidth); 760px;
	var thumb = container.find('>.thumb');
	var maxSize = thumb.size();
	// console.log(maxSize); 
	var image = $('.gallery .cardImg > p');
	
	//container.css('left','760px');
	next.on('click',function(){
		if(current<maxSize/thumbListSize-1){current++;};
		//console.log(current);
		ListMove();
	});
	prev.on('click',function(){
		if(current>0){current--;};
		//console.log(current);
		ListMove();
	});
	//ListMove();
	function ListMove(){
		var tl = containerWidth*current*-1;
		//이동하는 거리 = 720 * 페이지 * -1;
		container.stop().animate({left:tl},{duration:400,easing:'easeOutCubic'});
	};
	
	thumb.on('click',function(){
		image.css('display','none');
		var i = $(this).index();
		image.eq(i).css('display','block');
	});
});