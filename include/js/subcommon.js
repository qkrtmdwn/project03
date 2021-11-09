$(function(){
	
	//사이드 메뉴 액티브
	var twoDepth = $('.menuList .menuContent');
	var menu = $('.menuList>ul>li');
	// menu 1뎁스 메뉴
	var pageURL = location.href; //자바스크립트
	//pageURL = file:///E:/tmdwn023/lesson/project02/sub01/sub01.html
	var activeMenu;
	// activeMenu 현재 페이지 주소와 일치하는 메뉴를 저장시킬 변수
	menu.on({
		click:function(){
			menu.removeClass('on');
			menu.find(twoDepth).slideUp();
			$(this).addClass('on');
			$(this).find(twoDepth).stop().slideDown();
			return false;
		},
	});
	menu.each(function(i){
		var tg = $(this);
		var sub = tg.find('>.menuContent>li');
		var menuURL = tg.children('a').attr('href');
		var active = pageURL.indexOf(menuURL);
		// 포함하는 문장이 몇 번째 글자뒤에 존재하는지 여부, 여기서는 45
		// 포함하지 않는다면 숫자 -1을 넘겨 받음
		if(active>-1){activeMenu=tg};
		// activeMenu = 1뎁스(li>a href="2depth_menu.html")
		sub.each(function(j){
			var tg = $(this);
			var subURL = tg.children('a').attr('href');
			active = pageURL.indexOf(subURL);
			if(active>-1){activeMenu=tg};
		}); //sub.each 끝
		sub.on({
			mouseover:function(event){
				var tg = $(this);
				sub.removeClass('on');
				tg.addClass('on');
			},
			mouseout:function(){
				var tg = $(this);
				tg.removeClass('on');
			}
		}); //sub.on 끝
	}); // menu.each 끝
	onActive()
	function onActive(){
		if(activeMenu){activeMenu.trigger('click');};
	};
	
	//메인메뉴 액티브
	
});









