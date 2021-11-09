$(function(){
/* 	var sns = $('#mainGnb>.sns>.snsbtn');
	sns.bind('mouseenter focus',function(){
		$(this).css('background-position','0px 0px')
	});
	sns.bind('mouseleave blur',function(){
		$(this).css('background-position','0px -35px')
	}); */
	var btn = $('#mainGnb .btn');
	btn.each(function(){
		var a = $(this);
		
		a.bind('mouseenter focus',function(){
			a.addClass('sns')
		});
		a.bind('mouseleave blur',function(){
			a.removeClass('sns')
		}); 
	});
	
	// 인기키워드 클릭
/* 	$('#keyword .btn2').click(function(){
		$('.sub').css('display','block');
	});
	$('#keyword').mouseleave(function(){
		$('.sub').css('display','none');
	}); */
	
	// 인기키워드 슬라이드
	var keyword = $('#keyword .box ul li');
	var current = 0;
	var timer;
	function move(tg,start,end){
		tg.css('top',start).stop().animate({top:end},500);
	};
	timer=setInterval(function(){
		var prev = keyword.eq(current);
		move(prev,'0%','-100%');
		current++;
		if(current == keyword.size()){current = 0;};
		var next = keyword.eq(current);
		move(next,'100%','0%');
	},2000);
	
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
	
	// tootip
	var balloon = $('<div class="balloon"></div>').appendTo('body');
	
	function updateBalloonPosition(x,y){
		balloon.css({left: x+15, top: y});
	};
	
	function showBalloon(){
		balloon.stop().css('opacity',0).show().animate({opacity:1},400);
	};
	function hideBalloon(){
		balloon.stop().animate({opacity:0},400,function(){balloon.hide();});
	};
	
	$('.showBalloon').each(function(){
		var element = $(this);
		var text = element.attr('title');
		element.attr('title','');
		element.hover(
			function(event){
				balloon.text(text);
				updateBalloonPosition(event.pageX,event.pageY);
				showBalloon();
			},
			function(){
				hideBalloon();
			}
		);
		
		element.mousemove(function(event){
			updateBalloonPosition(event.pageX,event.pageY);
		});
	});
	
	//메뉴
	var one = $('#Menu1');
	var menu = $('#Menu1>.oneDepth>li');
	// menu 1뎁스 메뉴
	var pageURL = location.href; //자바스크립트
	//pageURL = file:///E:/tmdwn023/lesson/08_jQuery_middle/ex05_2depth_menu/2depth_menu.html
	var activeMenu;
	// activeMenu 현재 페이지 주소와 일치하는 메뉴를 저장시킬 변수
	menu.mouseenter(function(){
		var tg = $(this);
		menu.removeClass('on');
		tg.addClass('on');
		tg.find('>div').stop(true,true).slideDown();
	});
	menu.mouseleave(function(){
		menu.removeClass('on');
		menu.find('.width100').css('display','none');
		onActive()
	});
	
	menu.each(function(i){
		var tg = $(this);
		var sub = tg.find('>.width100>ul>li');
		var menuURL = tg.children('a').attr('href');
		var active = pageURL.indexOf(menuURL);
		// 포함하는 문장이 몇 번째 글자뒤에 존재하는지 여부, 여기서는 45
		// 포함하지 않는다면 숫자 -1을 넘겨 받음
		if(active>-1){activeMenu=tg};
		// activeMenu = 1뎁스(li>a href="2depth_menu.html")
	}); // menu.each 끝
	onActive()
	function onActive(){
		if(activeMenu){activeMenu.addClass('on');};
	};
});













